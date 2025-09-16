use anyhow::{anyhow, Result as AnyResult};
use headless_chrome::Browser;
use regex::Regex;
use reqwest::Client;
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

// -------- HTTP / навигация --------

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

// -------- Скриншоты --------

pub async fn make_screenshot_task(url: &str, screenshots_dir: &std::path::Path) -> AnyResult<()> {
    let url_for_filename = url.to_string();
    let url_for_blocking = url.to_string();

    let data = tokio::task::spawn_blocking(move || -> AnyResult<Vec<u8>> {
        let browser = Browser::default().map_err(|e| anyhow!(e.to_string()))?;
        let tab = browser.new_tab().map_err(|e| anyhow!(e.to_string()))?;
        tab.navigate_to(&url_for_blocking)
            .map_err(|e| anyhow!(e.to_string()))?
            .wait_until_navigated()
            .map_err(|e| anyhow!(e.to_string()))?;
        let screenshot = tab
            .capture_screenshot(
                headless_chrome::protocol::page::ScreenshotFormat::PNG,
                None,
                true,
            )
            .map_err(|e| anyhow!(e.to_string()))?;
        Ok(screenshot)
    })
    .await
    .map_err(|e| anyhow!("JoinError: {e}"))??;

    let filename = sanitize_filename(&url_for_filename);
    let path = screenshots_dir.join(format!("{filename}.png"));
    save_bytes(&path, &data)?;
    println!("Скриншот сохранён: {}", path.display());
    Ok(())
}

pub fn save_bytes(path: &std::path::Path, data: &[u8]) -> AnyResult<()> {
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

