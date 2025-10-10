use anyhow::{anyhow, Context, Result};
use csv::Writer;
use image::{imageops::FilterType, DynamicImage};
use ndarray::{Array2, Array3, Array4, Axis, CowArray, Ix2, IxDyn, ArrayView2};
use ort::{
    environment::Environment,
    session::{Session, SessionBuilder},
    value::Value,
    LoggingLevel,
};
use pathdiff::diff_paths;
use std::{
    fs,
    path::{Path, PathBuf},
    sync::Arc,
    time::Duration,
};
use walkdir::WalkDir;

const IMG_EXTS: &[&str] = &[".png", ".jpg", ".jpeg", ".bmp", ".webp"];
const INPUT_W: usize = 256;
const INPUT_H: usize = 256;

#[derive(Clone)]
pub struct Labels(pub Vec<String>);
impl Labels {
    pub fn eyeballer_default() -> Self {
        // при необходимости подставь точный порядок из Eyeballer::DATA_LABELS
        Self(vec![
            "boring".into(),
            "interesting".into(),
            "login".into(),
            "error".into(),
            "other".into(),
        ])
    }
}

pub struct EyeballerRunner {
    _env: Arc<Environment>,
    session: Session,
    input_name: String,
    labels: Labels,
}

impl EyeballerRunner {
    pub fn new(model_path: impl AsRef<Path>, labels: Labels) -> Result<Self> {
        // В ort 1.16 builder возвращает Environment; SessionBuilder::new ждёт Arc<Environment>
        let env = Environment::builder()
            .with_name("eyeballer")
            .with_log_level(LoggingLevel::Warning)
            .build()
            .map_err(|e| anyhow!("Environment::build: {e}"))?;
        let env = Arc::new(env);

        let mut sb: SessionBuilder = SessionBuilder::new(&env)
            .map_err(|e| anyhow!("SessionBuilder::new: {e}"))?;
        // В 1.16 нет set_session_timeout у builder'а — пропускаем
        // (timeout здесь не критичен; если нужен, обрабатывай на уровне вызывающего кода)

        let session = sb
            .with_model_from_file(model_path.as_ref())
            .map_err(|e| anyhow!("with_model_from_file: {e}"))?;

        // В 1.16 inputs — это поле, а не метод
        let input_name = session
            .inputs
            .get(0)
            .map(|i| i.name.clone())
            .unwrap_or_else(|| "input".to_string());

        Ok(Self {
            _env: env,
            session,
            input_name,
            labels,
        })
    }

    fn softmax(&self, mut v: Vec<f32>) -> Vec<f32> {
        if v.is_empty() {
            return v;
        }
        let mut m = f32::NEG_INFINITY;
        for &x in &v {
            if x > m {
                m = x;
            }
        }
        let mut s = 0.0_f32;
        for x in v.iter_mut() {
            *x = (*x - m).exp();
            s += *x;
        }
        if s > 0.0 {
            for x in v.iter_mut() {
                *x /= s;
            }
        }
        v
    }

    fn preprocess_one(&self, p: &Path) -> Result<Vec<f32>> {
        let img = image::open(p).with_context(|| format!("open {}", p.display()))?;
        let rgb = DynamicImage::from(img).to_rgb8();
        let resized = image::imageops::resize(&rgb, INPUT_W as u32, INPUT_H as u32, FilterType::Triangle);
        let mut v = Vec::with_capacity((INPUT_W * INPUT_H  * 3) as usize);
        for px in resized.pixels() {
            v.push(px[0] as f32 / 255.0);
            v.push(px[1] as f32 / 255.0);
            v.push(px[2] as f32 / 255.0);
        }
        Ok(v)
    }

    fn collect_images(&self, dir: &Path) -> Result<Vec<PathBuf>> {
        let mut files = Vec::new();
        for e in WalkDir::new(dir).into_iter().filter_map(|e| e.ok()) {
            if !e.file_type().is_file() {
                continue;
            }
            let p = e.path();
            let ok = p
                .extension()
                .and_then(|s| s.to_str())
                .map(|s| {
                    let low = s.to_ascii_lowercase();
                    IMG_EXTS.iter().any(|&ext| ext == format!(".{}", low))
                })
                .unwrap_or(false);
            if ok {
                files.push(p.to_path_buf());
            }
        }
        files.sort();
        if files.is_empty() {
            return Err(anyhow!("Нет изображений в {}", dir.display()));
        }
        Ok(files)
    }

    /// Прогон папки -> CSV + HTML
    pub fn infer_to_csv_html(
        &self,
        images_dir: &Path,
        out_dir: &Path,
        _batch: usize,               // игнорируем внешний батч — модель ждёт 1×3×256×256
        csv_name: &str,
        html_template: Option<&str>,
    ) -> Result<(PathBuf, PathBuf)> {
    fs::create_dir_all(out_dir)
        .with_context(|| format!("mkdir -p {}", out_dir.display()))?;

    // CSV
        let csv_path = out_dir.join(csv_name);
        let mut w = Writer::from_path(&csv_path)
            .with_context(|| format!("open csv for write: {}", csv_path.display()))?;
        
        let images_out = out_dir.join("images");
        fs::create_dir_all(&images_out)
            .with_context(|| format!("mkdir -p {}", images_out.display()))?;
    // header
        let mut header = vec![
            "file".to_string(),
            "top_label".to_string(),
            "top_prob".to_string(),
    ];
        for l in &self.labels.0 {
            header.push(format!("p_{}", l));
    }
    w.write_record(&header).with_context(|| "write csv header")?;

    // входные файлы
    let files = self.collect_images(images_dir)?;
    let ncls = self.labels.0.len();

    for p in files {
        // --- 1) загрузка и предобработка -> (H,W,C) float32 [0..1] ---
        let img = image::open(&p)
            .with_context(|| format!("open image: {}", p.display()))?;
        let img = img.resize_exact(INPUT_W as u32, INPUT_H as u32, FilterType::Triangle);
        let rgb = img.to_rgb8();

        // (H, W, C)
        let mut hwc = Array3::<f32>::zeros((INPUT_H, INPUT_W, 3));
        for (y, x, px) in rgb.enumerate_pixels() {
            let [r, g, b] = px.0;
            let yi = y as usize;
            let xi = x as usize;
            hwc[(yi, xi, 0)] = (r as f32) / 255.0;
            hwc[(yi, xi, 1)] = (g as f32) / 255.0;
            hwc[(yi, xi, 2)] = (b as f32) / 255.0;
        }

        // --- 2) NHWC -> NCHW, затем добавляем batch: (1,C,H,W) ---
        let chw: Array3<f32> = hwc.permuted_axes([2, 0, 1]).to_owned(); // (C,H,W)
        let input_1chw: Array4<f32> = chw.insert_axis(Axis(0));         // (1,C,H,W)
        let input_dyn = input_1chw.into_dyn();

        // --- 3) в ORT нужен CowArray ---
        let input_cow: CowArray<f32, IxDyn> = CowArray::from(input_dyn.view());
        let input_tensor = Value::from_array(self.session.allocator(), &input_cow)
            .map_err(|e| anyhow!("from_array: {e}"))?;

        // --- 4) запускаем inference (ort 1.16: без имён входов) ---
        let outputs = self.session
            .run(vec![input_tensor])
            .map_err(|e| anyhow!("session.run: {e}"))?;

        // --- 5) извлекаем выход (ожидаем (1, ncls)) ---
        let out = outputs[0]
            .try_extract::<f32>()
            .map_err(|e| anyhow!("try_extract<f32>: {e}"))?;

        // Приводим к (1, C) и читаем вероятности
        let out_view = out.view();
        let out2: ArrayView2<f32> = out_view
            .view()
            .into_dimensionality::<Ix2>()
            .map_err(|e| anyhow!("expect (1, C) output, got different rank: {e}"))?;

        // логиты одной строки
        let mut logits = vec![0.0_f32; ncls];
        for c in 0..ncls {
            logits[c] = out2[(0, c)];
        }
        let probs = self.softmax(logits);

        // топ-1
        let (mut top_i, mut top_p) = (0usize, f32::MIN);
        for (j, &pv) in probs.iter().enumerate() {
            if pv > top_p {
                top_p = pv;
                top_i = j;
            }
        }
       

        // относительный путь для CSV
        //let rel = diff_paths(&p, out_dir).unwrap_or_else(|| p.clone());
        let basename = p.file_name()
            .map(|s| s.to_string_lossy().into_owned())
            .unwrap_or_else(|| "image.png".into());
        let rel = PathBuf::from("images").join(&basename);
        let target_path = images_out.join(&basename);
        if !target_path.is_file() {
            // копия
            if let Err(e) = fs::copy(&p, &target_path) {
                eprintln!("warn: copy {} -> {} failed: {e}", p.display(), target_path.display());
            }
        }

        let mut row = vec![
            rel.to_string_lossy().to_string(),
            self.labels.0.get(top_i).cloned().unwrap_or_else(|| top_i.to_string()),
            format!("{:.6}", top_p),
        ];
        for j in 0..ncls {
            row.push(format!("{:.6}", probs[j]));
        }
        w.write_record(&row).with_context(|| "write csv row")?;
    }

    w.flush().with_context(|| "flush csv")?;

    // --- 6) HTML отчёт ---
    let html_path = out_dir.join("index.html");
    let html_tpl = if let Some(t) = html_template {
        t.to_string()
    } else {
        include_str!("prediction_output_template.html").to_string()
    };

    let html = html_tpl
        .replace("{CSV_NAME}",
            &csv_path
                .file_name()
                .map(|s| s.to_string_lossy().into_owned())
                .unwrap_or_else(|| "predictions.csv".into())
        )
        .replace("{TITLE}", "Eyeballer ONNX Report");

    fs::write(&html_path, html)
        .with_context(|| format!("write {}", html_path.display()))?;

    Ok((csv_path, html_path))
}

pub fn serve(out_dir: &Path, port: u16) -> Result<()> {
    use tiny_http::{Header, Response, Server};

    let server = Server::http(format!("127.0.0.1:{port}"))
        .map_err(|e| anyhow!("Server::http: {e}"))?;
    println!("Report: http://127.0.0.1:{port}/");
    println!("Root:   {}", out_dir.display());
    let parent = out_dir.parent().map(Path::to_path_buf);

    for rq in server.incoming_requests() {
        let raw = rq.url(); // начинается с '/'
        // отбрасываем query/fragment
        let raw = raw.split('?').next().unwrap_or(raw);
        let raw = raw.split('#').next().unwrap_or(raw);

        // пустой путь или слеш в конце -> index.html
        let mut req_path = raw.trim_start_matches('/').to_string();
        if req_path.is_empty() || req_path.ends_with('/') {
            req_path.push_str("index.html");
        }

        // сворачиваем a/../b
        while let Some(pos) = req_path.find("/../") {
            if let Some(prev) = req_path[..pos].rfind('/') {
                req_path.replace_range(prev..pos + 4, "");
            } else {
                req_path.replace_range(0..pos + 4, "");
            }
        }

        // ../ -> искать в родителе отчёта
        let fs_path = if req_path.starts_with("../") {
            let mut rest = req_path.as_str();
            while rest.starts_with("../") {
                rest = &rest[3..];
            }
            if let Some(ref parent_dir) = parent {
                parent_dir.join(rest)
            } else {
                out_dir.join(rest)
            }
        } else {
            out_dir.join(&req_path)
        };

        let mut resp = if fs_path.is_file() {
            match fs::read(&fs_path) {
                Ok(bytes) => Response::from_data(bytes),
                Err(e) => Response::from_string(format!("500: {e}\n")).with_status_code(500),
            }
        } else {
            Response::from_string("404\n").with_status_code(404)
        };

        // Content-Type (включая картинки)
        let mime = if req_path.ends_with(".html") {
            Some("text/html")
        } else if req_path.ends_with(".csv") {
            Some("text/csv")
        } else if req_path.ends_with(".js") {
            Some("application/javascript")
        } else if req_path.ends_with(".css") {
            Some("text/css")
        } else if req_path.ends_with(".png") {
            Some("image/png")
        } else if req_path.ends_with(".jpg") || req_path.ends_with(".jpeg") {
            Some("image/jpeg")
        } else if req_path.ends_with(".webp") {
            Some("image/webp")
        } else {
            None
        };
        if let Some(m) = mime {
            if let Ok(h) = Header::from_bytes("Content-Type", m) {
                resp.add_header(h);
            }
        }

        eprintln!("[{}] {} -> {}", rq.method(), raw, fs_path.display());
        let _ = rq.respond(resp);
    }
    Ok(())
}

        
}

