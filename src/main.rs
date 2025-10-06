// src/main.rs
// main остаётся простым: парсим аргументы, вызываем библиотечные функции из lib.rs

use work::*;                    // тянет re-exports из lib.rs
use work::eyeballer_onnx::{EyeballerRunner, Labels};

#[tokio::main]
async fn main() -> Result<(), Box<dyn std::error::Error>> {
    // Использование:
    //   work <domain> [--analyze] [--model assets/ml/eyeballer.onnx] [--report <dir>] [--serve]
    let args: Vec<String> = env::args().collect();
    if args.len() < 2 {
        eprintln!("Usage: {} <domain> [--analyze] [--model <onnx>] [--report <dir>] [--serve]", args[0]);
        return Ok(());
    }
    let domain = &args[1];
    let analyze = args.iter().any(|a| a == "--analyze");
    let serve   = args.iter().any(|a| a == "--serve");
    let model_path = args.iter().position(|a| a == "--model")
        .and_then(|i| args.get(i+1)).cloned()
        .unwrap_or_else(|| "assets/ml/eyeballer.onnx".to_string());
    let report_dir = args.iter().position(|a| a == "--report")
        .and_then(|i| args.get(i+1)).cloned()
        .unwrap_or_else(|| format!("{}/report", domain));

    // 1) Скан (твой прежний код — теперь в библиотечной функции)
    let paths = run_scan(domain).await?;
    println!("Готово. Все результаты в папке: {}", paths.base.display());

    // 2) По желанию — анализ скриншотов Eyeballer ONNX
    if analyze {
        let images_dir = paths.screenshots_dir.clone();           // {domain}/screenshots
        let out_dir = PathBuf::from(&report_dir);                 // {domain}/report (или то, что передал)
        fs::create_dir_all(&out_dir)?;

        // модель
        let runner = EyeballerRunner::new(&model_path, Labels::eyeballer_default())?;
        let (_csv, html) = runner.infer_to_csv_html(&images_dir, &out_dir, 32, "predictions.csv", None)?;
        println!("Отчёт: {}", html.display());

        if serve {
            // поднимаем встроенный просмотрщик
            EyeballerRunner::serve(&out_dir, 8000)?;
        }
    }

    Ok(())
}

