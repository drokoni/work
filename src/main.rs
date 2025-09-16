mod allowlist;
mod utils;
mod analysis;

use analysis::*;
use utils::*;

use futures::{stream, StreamExt};
use reqwest::Client;
use std::collections::HashSet;
use std::env;
use std::fs;
use std::fs::File;
use std::path::{Path, PathBuf};
use std::sync::Arc;
use tokio::sync::Mutex;

#[derive(Clone)]
struct Paths {
    base: PathBuf,
    out_txt: PathBuf,
    subdomains_txt: PathBuf,
    screenshots_dir: PathBuf,
    jsscripts_dir: PathBuf,
    sensitive_info_txt: PathBuf,
}

impl Paths {
    fn new(domain: &str) -> Result<Self, Box<dyn std::error::Error>> {
        let base = PathBuf::from(domain);
        let screenshots_dir = base.join("screenshots");
        let jsscripts_dir = base.join("JSscripts");
        fs::create_dir_all(&screenshots_dir)?;
        fs::create_dir_all(&jsscripts_dir)?;
        Ok(Self {
            base: base.clone(),
            out_txt: base.join("out.txt"),
            subdomains_txt: base.join("subdomains.txt"),
            screenshots_dir,
            jsscripts_dir,
            sensitive_info_txt: base.join("sensitive_info.txt"),
        })
    }
}

#[tokio::main]
async fn main() -> Result<(), Box<dyn std::error::Error>> {
    let args: Vec<String> = env::args().collect();
    if args.len() < 2 {
        eprintln!("Usage: {} <domain>", args[0]);
        return Ok(());
    }

    let domain = &args[1];
    let paths = Paths::new(domain)?;
    let client = Client::new();

    // Wayback CDX
    let body = fetch_wayback_urls(&client, domain).await?;
    write_str_to_file(&paths.out_txt, &body)?;

    // Поддомены
    let subdomains = extract_subdomains(&paths.out_txt).await?;
    if !subdomains.is_empty() {
        write_str_to_file(&paths.subdomains_txt, &subdomains.join("\n"))?;
    }

    // Файл для чувствительной инфы (под мьютексом)
    let info_file = Arc::new(Mutex::new(File::create(&paths.sensitive_info_txt)?));

    // URL’ы — читаем, чистим, дедуп
    let mut urls = read_urls(&paths.out_txt).await?;
    urls.retain(|u| !u.trim().is_empty());
    let urls: Vec<String> = urls.into_iter().collect::<HashSet<_>>().into_iter().collect();

    // Параллельность
    let concurrency = 4usize;

    stream::iter(urls.into_iter().map(|url| {
        let client = client.clone();
        let info_file = Arc::clone(&info_file);
        let paths = paths.clone();

        async move {
            if check_url_200(&url, &client).await {
                println!("Сайт доступен: {}", url);

                if let Err(e) = make_screenshot_task(&url, &paths.screenshots_dir).await {
                    eprintln!("Ошибка скриншота {}: {}", url, e);
                }

                if let Err(e) =
                    save_js_scripts(&url, &client, &paths.jsscripts_dir, &info_file).await
                {
                    eprintln!("Ошибка JS скриптов {}: {}", url, e);
                }
            } else {
                println!("Сайт недоступен: {}", url);
            }

            Ok::<(), Box<dyn std::error::Error>>(())
        }
    }))
    .buffer_unordered(concurrency)
    .collect::<Vec<_>>()
    .await;

    println!("Готово. Все результаты в папке: {}", paths.base.display());
    Ok(())
}

