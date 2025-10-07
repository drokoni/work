use anyhow::{Result, anyhow};
use clap::{ArgAction, Parser};
use std::{fs, path::PathBuf};

use work::*; // твоя библиотека
use work::eyeballer_onnx::{EyeballerRunner, Labels};

#[derive(Parser, Debug)]
#[command(author="McQueen", version="0.1",
    about="Сканер + Eyeballer ONNX-анализ", long_about=None)]
struct Args {
    /// Домен для скана (если НЕ указан --images)
    #[arg(value_name="DOMAIN", required_unless_present="images")]
    domain: Option<String>,

    /// Папка с изображениями. Если указана — скан НЕ выполняется.
    #[arg(long, value_name="DIR")]
    images: Option<PathBuf>,

    /// Выполнить анализ скриншотов (если задан --images, включается автоматически)
    #[arg(long, action=ArgAction::SetTrue)]
    analyze: bool,

    /// Путь к .onnx модели
    #[arg(long, value_name="PATH", default_value="assets/ml/eyeballer.onnx")]
    model: PathBuf,

    /// Папка для отчёта
    #[arg(long, value_name="DIR")]
    report: Option<PathBuf>,

    /// Размер батча
    #[arg(long, value_name="N", default_value_t=32)]
    batch: usize,

    /// Поднять локальный HTTP-сервер
    #[arg(long, action=ArgAction::SetTrue)]
    serve: bool,

    /// Порт сервера
    #[arg(long, value_name="PORT", default_value_t=8000)]
    port: u16,
}

#[tokio::main]
async fn main() -> Result<()> {
    let mut args = Args::parse();

    // РЕЖИМ 1: только инференс по папке (--images)
    if let Some(images_dir) = args.images.clone() {
        let out_dir = args.report.clone()
            .unwrap_or_else(|| images_dir.join("report"));
        fs::create_dir_all(&out_dir)
            .map_err(|e| anyhow!("Не создать {}: {e}", out_dir.display()))?;

        // включаем analyze "по умолчанию" для этого режима
        args.analyze = true;

        let runner = EyeballerRunner::new(&args.model, Labels::eyeballer_default())?;
        let (_csv, html) = runner.infer_to_csv_html(
            &images_dir, &out_dir, args.batch, "predictions.csv", None
        )?;
        println!("Отчёт: {}", html.display());

        if args.serve {
            println!("Сервер: http://127.0.0.1:{}/", args.port);
            EyeballerRunner::serve(&out_dir, args.port)?;
        }
        return Ok(());
    }

    // РЕЖИМ 2: полный цикл — скан → (опц.) анализ
    let domain = args.domain.as_deref().unwrap(); // гарантирован clap'ом
    let paths = run_scan(domain).await.map_err(|e| anyhow!(e.to_string()))?;
    println!("Скан завершён. Результаты: {}", paths.base.display());

    if args.analyze {
        let images_dir = paths.screenshots_dir.clone();
        let out_dir = args.report.clone().unwrap_or_else(|| PathBuf::from(domain).join("report"));
        fs::create_dir_all(&out_dir)
            .map_err(|e| anyhow!("Не создать {}: {e}", out_dir.display()))?;

        let runner = EyeballerRunner::new(&args.model, Labels::eyeballer_default())?;
        let (_csv, html) = runner.infer_to_csv_html(
            &images_dir, &out_dir, args.batch, "predictions.csv", None
        )?;
        println!("Отчёт: {}", html.display());

        if args.serve {
            println!("Сервер: http://127.0.0.1:{}/", args.port);
            EyeballerRunner::serve(&out_dir, args.port)?;
        }
    }

    Ok(())
}

