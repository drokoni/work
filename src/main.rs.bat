use headless_chrome::Browser;
//use headless_chrome::browser::LaunchOptions;
use regex::Regex;
use reqwest::Client;
use select::document::Document;
use select::predicate::Predicate;
use std::collections::HashSet;
use std::env;
use std::fs::{self, File};
use std::io::Write;
use tokio::fs::File as AsyncFile;
use tokio::io::{AsyncBufReadExt, BufReader};
use tokio::time::{Duration, timeout};

#[tokio::main]
async fn main() -> Result<(), Box<dyn std::error::Error>> {
    let args: Vec<String> = env::args().collect();

    if args.len() < 2 {
        eprintln!("Usage: {} <domain>", args[0]);
        return Ok(());
    }

    let client = Client::new();
    let domain = &args[1];
    
    // Получаем URL из Wayback Machine
    let body = fetch_wayback_urls(&client, domain).await?;
    
    // Сохраняем сырые данные
    save_to_file("out.txt", &body)?;

    // Извлекаем поддомены
    let subdomains = extract_subdomains("out.txt").await?;
    save_to_file("subdomains.txt", &subdomains.join("\n"))?;

    // Создаем директории
    create_dir("screenshots")?;
    create_dir("JSscripts")?;

    let mut info_file = File::create("sensitive_info.txt")?;
    
    // Настройка браузера
    let browser = Browser::default()?;

    // Обрабатываем URL
    let urls = read_urls("out.txt").await?;
    for url in urls {
        match check_url_200(&url, &client).await {
            true => {
                println!("Сайт доступен: {}", url);
                
                match take_screenshot(&browser, &url).await {
                    Ok(screenshot) => {
                        let filename = sanitize_filename(&url);
                        let path = format!("screenshots/{}.png", filename);
                        save_screenshot(&path, &screenshot)?;
                        println!("Скриншот сохранен в {}", path);
                    }
                    Err(e) => eprintln!("Ошибка скриншота {}: {}", url, e),
                }

                if let Err(e) = save_js_scripts(&url, &client, "JSscripts", &mut info_file).await {
                    eprintln!("Ошибка JS скриптов {}: {}", url, e);
                }
            }
            false => println!("Сайт недоступен: {}", url),
        }
    }

    Ok(())
}

async fn fetch_wayback_urls(client: &Client, domain: &str) -> Result<String, Box<dyn std::error::Error>> {
    let response = client
        .get("https://web.archive.org/cdx/search/cdx")
        .query(&[
            ("url", format!("*.{}/*", domain)),
            ("collapse", "urlkey".to_string()),
            ("output", "text".to_string()),
            ("fl", "original".to_string()),
        ])
        .send()
        .await?;
    
    Ok(response.text().await?)
}

fn save_to_file(path: &str, content: &str) -> Result<(), Box<dyn std::error::Error>> {
    let mut file = File::create(path)?;
    file.write_all(content.as_bytes())?;
    Ok(())
}

async fn extract_subdomains(file_path: &str) -> Result<Vec<String>, Box<dyn std::error::Error>> {
    let mut subdomains = HashSet::new();
    let re = Regex::new(r"https?://([^/]+)/?")?;

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

fn create_dir(path: &str) -> Result<(), Box<dyn std::error::Error>> {
    fs::create_dir_all(path)?;
    Ok(())
}

async fn read_urls(file_path: &str) -> Result<Vec<String>, Box<dyn std::error::Error>> {
    let mut urls = Vec::new();
    let file = AsyncFile::open(file_path).await?;
    let mut reader = BufReader::new(file).lines();

    while let Some(line) = reader.next_line().await? {
        urls.push(line);
    }

    Ok(urls)
}

async fn check_url_200(url: &str, client: &Client) -> bool {
    client.get(url).send().await.map_or(false, |r| r.status().is_success())
}

async fn take_screenshot(
    browser: &Browser,
    url: &str,
) -> Result<Vec<u8>, Box<dyn std::error::Error>> {
    let tab = browser.new_tab()?;
    
    tab.navigate_to(url)?
        .wait_until_navigated()?;

    let screenshot = tab.capture_screenshot(
        headless_chrome::protocol::page::ScreenshotFormat::PNG,
        None,  // quality (Option<u32>)
        true,  // from_surface
    )?;

    Ok(screenshot)
}

fn sanitize_filename(url: &str) -> String {
    url.replace(['/', ':', '?', '=', '&'], "_")
}

fn save_screenshot(path: &str, data: &[u8]) -> Result<(), Box<dyn std::error::Error>> {
    let mut file = File::create(path)?;
    file.write_all(data)?;
    Ok(())
}

async fn save_js_scripts(
    url: &str,
    client: &Client,
    dir: &str,
    info_file: &mut File
) -> Result<(), Box<dyn std::error::Error>> {
    let body = client.get(url).send().await?.text().await?;
    let document = Document::from(body.as_str());
    let selector = select::predicate::Name("script").and(select::predicate::Attr("src", ()));

    for element in document.find(selector) {
        if let Some(src) = element.attr("src") {
            let script_url = if src.starts_with("http") {
                src.to_string()
            } else {
                format!("{}{}", url.trim_end_matches('/'), src)
            };

            if let Ok(script_resp) = client.get(&script_url).send().await {
                let script_content = script_resp.text().await?;
                let filename = src.split('/').last().unwrap_or("script.js");
                let path = format!("{}/{}", dir, filename);
                
                save_to_file(&path, &script_content)?;
                println!("JavaScript сохранен в {}", path);
                
                analyze_info(&script_content, &script_url, info_file)?;
            }
        }
    }

    Ok(())
}

fn analyze_info(
    content: &str,
    url: &str,
    file: &mut File
) -> Result<(), Box<dyn std::error::Error>> {
    // Компилируем регулярные выражения один раз
    let patterns = [
        (Regex::new(r#"(?i)\b(password|passwd|pwd)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "Password"),
        (Regex::new(r#"(?i)\b(api[_-]?key)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "API Key"),
        (Regex::new(r#"(?i)\b(secret[_-]?(key|token)?)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "Secret"),
        (Regex::new(r#"(?i)\b(access[_-]?token|auth[_-]?token)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "Token"),
        (Regex::new(r#"(?i)\b(client[_-]?id)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "Client ID"),
        (Regex::new(r#"(?i)\b(db[_-]?(password|passwd|pwd))\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "DB Password"),
        (Regex::new(r#"(?i)\b(connection[_-]?string)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "Connection String"),
        (Regex::new(r#"(?i)\b(encryption[_-]?key)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "Encryption Key"),
        (Regex::new(r#"(?i)\b(internal[_-]?api[_-]?url)\b\s*[:=]\s*['"]?[^'";\s]+"#)?, "Internal API URL"),
    ];

    let mut found = false;
    
    for (re, pattern_name) in patterns {
        for capture in re.captures_iter(content) {
            if !found {
                writeln!(file, "{}", url)?;
                found = true;
            }
            
            let matched_value = capture.get(0).map_or("", |m| m.as_str());
            writeln!(
                file, 
                "  - [{}] Найдено: {}",
                pattern_name,
                matched_value.trim().chars().take(50).collect::<String>() // Ограничиваем длину вывода
            )?;
        }
    }

    Ok(())
}
