use anyhow::{anyhow, Result as AnyResult};
use headless_chrome::protocol::page::ScreenshotFormat;
use regex::Regex;
use reqwest::{Client, StatusCode};
use sha2::{Digest, Sha256};
use std::{
    collections::HashSet,
    fs::{self, File},
    io::Write,
    path::Path,
};
use tokio::{
    fs::File as AsyncFile,
    io::{AsyncBufReadExt, BufReader},
    time::{timeout, Duration},
};
use url::Url;

use crate::browser_manager::BROWSER_MANAGER;

// -------- Wayback / IO --------

pub async fn fetch_wayback_urls(
    client: &Client,
    domain: &str,
) -> Result<String, Box<dyn std::error::Error>> {
    let resp = client
        .get("https://web.archive.org/cdx/search/cdx")
        .query(&[
            ("url", format!("*.{}/*", domain)),
            ("collapse", "urlkey".to_string()),
            ("output", "text".to_string()),
            ("fl", "original".to_string()),
            ("limit", "250".to_string()),
        ])
        .send()
        .await?
        .error_for_status()?;

    Ok(resp.text().await?)
}

pub fn write_str_to_file(path: &Path, content: &str) -> Result<(), Box<dyn std::error::Error>> {
    if let Some(parent) = path.parent() {
        fs::create_dir_all(parent)?;
    }
    let mut file = File::create(path)?;
    file.write_all(content.as_bytes())?;
    Ok(())
}

pub async fn extract_subdomains(
    file_path: &Path,
) -> Result<Vec<String>, Box<dyn std::error::Error>> {
    let mut subdomains = HashSet::new();
    let re = Regex::new(r"https?://([^/\s]+)")?;

    let file = AsyncFile::open(file_path).await?;
    let mut reader = BufReader::new(file).lines();

    while let Some(line) = reader.next_line().await? {
        if let Some(captures) = re.captures(&line) {
            if let Some(domain) = captures.get(1) {
                subdomains.insert(domain.as_str().to_string());
            }
        }
    }

    Ok(subdomains.into_iter().collect())
}

pub async fn read_urls(file_path: &Path) -> Result<Vec<String>, Box<dyn std::error::Error>> {
    let mut urls = Vec::new();
    let file = AsyncFile::open(file_path).await?;
    let mut reader = BufReader::new(file).lines();

    while let Some(line) = reader.next_line().await? {
        let trimmed = line.trim();
        if !trimmed.is_empty() {
            urls.push(trimmed.to_string());
        }
    }

    Ok(urls)
}

// -------- HTTP / доступность --------

pub async fn check_url_200(url: &str, client: &Client) -> bool {
    match timeout(Duration::from_secs(8), client.head(url).send()).await {
        Ok(Ok(r)) if r.status().is_success() => return true,
        _ => {}
    }

    timeout(Duration::from_secs(12), client.get(url).send())
        .await
        .ok()
        .and_then(|r| r.ok())
        .map_or(false, |r| r.status().is_success())
}

/// Скачивает live-ресурс; при ошибке берёт последний успешный снапшот из Wayback.
/// Возвращает (bytes, использованный_url, is_wayback).
pub async fn fetch_live_or_wayback(
    client: &Client,
    original_url: &str,
) -> AnyResult<(Vec<u8>, String, bool)> {
    // 1) live
    if let Ok(resp) = timeout(Duration::from_secs(15), client.get(original_url).send()).await {
        if let Ok(ok) = resp {
            if ok.status().is_success() {
                let data = ok.bytes().await.map_err(|e| anyhow!(e.to_string()))?;
                return Ok((data.to_vec(), original_url.to_string(), false));
            }
        }
    }

    // 2) wayback CDX — берём последний успешный снимок 200 для этого URL
    let cdx_resp = client
        .get("https://web.archive.org/cdx/search/cdx")
        .query(&[
            ("url", original_url.to_string()),
            ("output", "json".to_string()),
            ("filter", "statuscode:200".to_string()),
            ("limit", "1".to_string()),
            ("from", "20000101".to_string()),
            ("to", "20991231".to_string()),
            ("sort", "descending".to_string()),
        ])
        .send()
        .await
        .map_err(|e| anyhow!("Wayback CDX error: {e}"))?;

    if cdx_resp.status() != StatusCode::OK {
        return Err(anyhow!(
            "Wayback CDX status {} for {}",
            cdx_resp.status(),
            original_url
        ));
    }

    let json_val: serde_json::Value =
        serde_json::from_slice(&cdx_resp.bytes().await?).map_err(|e| anyhow!(e.to_string()))?;
    // формат: [ [ "urlkey","timestamp","original","mimetype","statuscode","digest","length" ], [ ... ] ]
    let ts = json_val
        .as_array()
        .and_then(|arr| arr.get(1))
        .and_then(|row| row.get(1))
        .and_then(|v| v.as_str())
        .ok_or_else(|| anyhow!("Wayback: нет timestamp для {}", original_url))?;

    // используем "id_" режим для «сырого» ответа без навбара архива
    let archived = format!("https://web.archive.org/web/{}id_/{}", ts, original_url);
    let resp = client
        .get(&archived)
        .send()
        .await
        .map_err(|e| anyhow!(e.to_string()))?
        .error_for_status()
        .map_err(|e| anyhow!(e.to_string()))?;
    let data = resp.bytes().await.map_err(|e| anyhow!(e.to_string()))?;
    Ok((data.to_vec(), archived, true))
}

// -------- Скриншоты --------

pub async fn make_screenshot_task(url: &str, screenshots_dir: &Path) -> AnyResult<()> {
    let fixed_url = url.to_string();
    let fixed_for_name = fixed_url.clone();

    // блокирующая часть в отдельном потоке
    let data = tokio::task::spawn_blocking(move || -> AnyResult<Vec<u8>> {
        // 2 попытки: если умерло DevTools-соединение — перезапустим браузер и повторим
        for attempt in 1..=2 {
            let browser = BROWSER_MANAGER
                .get()
                .map_err(|e| anyhow!("Запуск Chrome: {e}"))?;

            match browser.new_tab() {
                Ok(tab) => {
                    tab.navigate_to(&fixed_url)
                        .map_err(|e| anyhow!("navigate_to({fixed_url}): {e}"))?
                        .wait_until_navigated()
                        .map_err(|e| anyhow!("wait_until_navigated: {e}"))?;

                    let png = tab
                        .capture_screenshot(ScreenshotFormat::PNG, None, true)
                        .map_err(|e| anyhow!("capture_screenshot: {e}"))?;
                    return Ok(png);
                }
                Err(e) => {
                    let msg = e.to_string();
                    // Если видим «connection is closed», инвалидируем и ретраим
                    if msg.contains("connection is closed") || msg.contains("WebSocket") {
                        if attempt == 1 {
                            let _ = BROWSER_MANAGER.invalidate(); // проглатываем возможную ошибку
                            continue;
                        }
                    }
                    return Err(anyhow!("Не удалось создать вкладку: {msg}"));
                }
            }
        }
        Err(anyhow!("Не удалось создать вкладку после повторной попытки"))
    })
    .await
    .map_err(|e| anyhow!("JoinError: {e}"))??;

    // сохраняем PNG
    let name = sanitize_filename(&fixed_for_name);
    let path = screenshots_dir.join(format!("{name}.png"));
    std::fs::create_dir_all(screenshots_dir)
        .map_err(|e| anyhow!("Создание папки {:?}: {e}", screenshots_dir))?;
    std::fs::write(&path, &data).map_err(|e| anyhow!("Запись файла {:?}: {e}", path))?;

    Ok(())
}

pub fn save_bytes(path: &Path, data: &[u8]) -> AnyResult<()> {
    if let Some(parent) = path.parent() {
        fs::create_dir_all(parent)?;
    }
    let mut file = File::create(path)?;
    file.write_all(data)?;
    Ok(())
}

pub fn sanitize_filename(url: &str) -> String {
    let mut hasher = Sha256::new();
    hasher.update(url.as_bytes());
    let hex = format!("{:x}", hasher.finalize());
    let short = &hex[..12];

    let parsed = Url::parse(url).ok();
    let host = parsed.as_ref().and_then(|u| u.host_str()).unwrap_or("unknown");
    let mut path = parsed
        .as_ref()
        .map(|u| u.path())
        .unwrap_or("/")
        .replace('/', "_");
    if path.len() > 40 {
        path.truncate(40);
    }
    let base = format!("{}{}", host, path);
    let base = base
        .chars()
        .map(|c| if r#"/\:?*"<>| "#.contains(c) { '_' } else { c })
        .collect::<String>();
    let mut name = format!("{}__{}", base, short);
    if name.len() > 100 {
        name.truncate(100);
    }
    name
}

