use regex::Regex;
use reqwest::Client;
use select::{document::Document, predicate::Predicate};
use sha2::{Digest, Sha256};
use std::{
    fs::{self, File},
    path::{Path, PathBuf},
    sync::Arc,
};
use tokio::sync::Mutex;
use url::Url;

use crate::allowlist::{should_ignore_path, should_ignore_value, PATTERNS};
use crate::utils::write_str_to_file;



// JS, парсинг и анализ 
pub async fn save_js_scripts(
    page_url: &str,
    client: &Client,
    jsscripts_dir: &Path,
    info_file: &Arc<Mutex<File>>,
) -> Result<(), Box<dyn std::error::Error>> {
    let body = client
        .get(page_url)
        .send()
        .await?
        .error_for_status()?
        .text()
        .await?;
    let document = Document::from(body.as_str());
    let selector = select::predicate::Name("script").and(select::predicate::Attr("src", ()));

    for element in document.find(selector) {
        if let Some(src) = element.attr("src") {
            if let Some(script_url) = join_url(page_url, src) {
                // фильтр шумных путей
                if should_ignore_path(&script_url) || should_ignore_path(src) {
                    eprintln!("skip by allowlist: {}", script_url);
                    continue;
                }

                match client.get(&script_url).send().await {
                    Ok(resp) => {
                        if let Ok(ok) = resp.error_for_status() {
                            let script_content = ok.text().await?;
                            let path = make_script_path(jsscripts_dir, &script_url, src)?;
                            write_str_to_file(&path, &script_content)?;
                            println!("JavaScript сохранён: {}", path.display());

                            analyze_info(&script_content, &script_url, info_file).await?;
                        }
                    }
                    Err(e) => {
                        eprintln!("Не удалось скачать {}: {}", script_url, e);
                    }
                }
            }
        }
    }

    Ok(())
}

pub fn join_url(base: &str, href: &str) -> Option<String> {
    if href.starts_with("//") {
        let b = Url::parse(base).ok()?;
        let scheme = b.scheme();
        return Some(format!("{}:{}", scheme, href));
    }
    let base = Url::parse(base).ok()?;
    base.join(href).ok().map(|u| u.to_string())
}

pub fn make_script_path(
    dir: &Path,
    full_url: &str,
    original_src: &str,
) -> Result<PathBuf, Box<dyn std::error::Error>> {
    let mut hasher = Sha256::new();
    hasher.update(full_url.as_bytes());
    let hex = format!("{:x}", hasher.finalize());
    let short = &hex[..8];

    let (domain, name_part) = {
        let parsed = Url::parse(full_url).ok();
        let domain = parsed.as_ref().and_then(|u| u.host_str()).unwrap_or("unknown");
        let name = original_src.split('/').last().unwrap_or("script.js");
        (domain.to_string(), name.to_string())
    };

    let folder = dir.join(domain);
    fs::create_dir_all(&folder)?;
    Ok(folder.join(format!("{}_{}", short, sanitize_basename(&name_part))))
}

pub fn sanitize_basename(s: &str) -> String {
    let mut out = s.replace(|c: char| r#"/\:?*"<>| "#.contains(c), "_");
    if out.len() > 80 {
        out.truncate(80);
    }
    out
}

//  Энтропия / анализ секретов 
pub fn shannon_entropy(s: &str) -> (f64, f64, usize) {
    use std::collections::HashMap;

    let bytes = s.as_bytes();
    let n = bytes.len();
    if n == 0 {
        return (0.0, 0.0, 0);
    }

    let mut freq: HashMap<u8, usize> = HashMap::new();
    for &b in bytes {
        *freq.entry(b).or_insert(0) += 1;
    }

    let n_f = n as f64;
    let mut h = 0.0f64;
    for &count in freq.values() {
        let p = (count as f64) / n_f;
        h -= p * p.log2();
    }

    let total_bits = h * n_f;
    (h, total_bits, n)
}

pub async fn analyze_info(
    content: &str,
    url: &str,
    file_mutex: &Arc<Mutex<File>>,
) -> Result<(), Box<dyn std::error::Error>> {
    if should_ignore_path(url) {
        return Ok(());
    }

    let mut found_any = false;
    let mut buffer: Vec<(String, String)> = Vec::new();

    for spec in PATTERNS.iter() {
        for cap in spec.re.captures_iter(content) {
            // извлекаем значение секрета
            let matched = cap.get(0).map(|m| m.as_str()).unwrap_or_default();
            let value = match spec.secret_group {
                Some(g) => cap.get(g),
                None => {
                    let mut v = None;
                    for i in 1..cap.len() {
                        if let Some(m) = cap.get(i) {
                            if !m.as_str().is_empty() {
                                v = Some(m);
                                break;
                            }
                        }
                    }
                    v.or_else(|| cap.get(0))
                }
            }
            .map(|m| m.as_str())
            .unwrap_or(matched);

            if should_ignore_value(value) {
                continue;
            }

            if !found_any {
                buffer.push(("URL".to_string(), url.to_string()));
                found_any = true;
            }
            buffer.push((spec.name.clone(), value.to_string()));
        }
    }

    if found_any {
        use std::io::Write;
        let mut f = file_mutex.lock().await;
        writeln!(f, "{url}")?;
        for (k, v) in buffer.into_iter().filter(|(k, _)| k != "URL") {
            let (h, total_bits, len) = shannon_entropy(&v);
            let h_r = (h * 100.0).round() / 100.0;
            let total_r = (total_bits * 100.0).round() / 100.0;
            writeln!(
                f,
                "  - [{}] Найдено: {} | len={} | H≈{} bits/char | total≈{} bits",
                k, v, len, h_r, total_r
            )?;
        }
    }

    Ok(())
}

