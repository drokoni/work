use anyhow::{Context, Result};
use csv::Writer;
use image::{imageops::FilterType, DynamicImage};
use ndarray::{Array, IxDyn};
use ort::{environment::Environment, session::Session, GraphOptimizationLevel, LoggingLevel, SessionBuilder, Value};
use serde::Serialize;
use std::{fs, path::{Path, PathBuf}, time::Duration};
use walkdir::WalkDir;


const IMG_EXTS: &[&str] = &[".png", ".jpg", ".jpeg", ".bmp", ".webp"];
const INPUT_H: u32 = 224;
const INPUT_W: u32 = 224;

#[derive(Clone)]
pub struct Labels(pub Vec<String>);

impl Labels {
    pub fn default_eyeballer() -> Self {
        // если хочешь — подставь точные метки из DATA_LABELS Eyeballer
        Self(vec![
            "boring".into(), "interesting".into(), "login".into(), "error".into(), "other".into(),
        ])
    }
}

#[derive(Serialize)]
struct Row {
    file: String,
    top_label: String,
    top_prob: f32,
    #[serde(flatten)]
    probs: serde_json::Map<String, serde_json::Value>,
}

pub struct EyeballerRunner {
    env: Environment,
    session: Session,
    input_name: String,
    labels: Labels,
}

impl EyeballerRunner {
    pub fn new(model_path: impl AsRef<Path>, labels: Labels) -> Result<Self> {
        let env = Environment::builder()
            .with_name("eyeballer")
            .with_log_level(LoggingLevel::Warning)
            .build()?;
        let mut sb: SessionBuilder = env
            .new_session_builder()?
            .with_optimization_level(GraphOptimizationLevel::All)?
            .with_intra_op_num_threads(0)?; // пусть сам подберёт потоки
        sb.set_session_timeout(Duration::from_secs(0)); // без таймаута

        let session = sb.with_model_from_file(model_path.as_ref())?;
        let input_name = session.inputs()[0]
            .name
            .clone()
            .unwrap_or_else(|| "input".to_string());
        Ok(Self { env, session, input_name, labels })
    }

    fn softmax(&self, mut logits: Vec<f32>) -> Vec<f32> {
        let m = logits
            .iter()
            .cloned()
            .fold(f32::NEG_INFINITY, f32::max);
        let mut sum = 0.0f32;
        for x in logits.iter_mut() {
            *x = (*x - m).exp();
            sum += *x;
        }
        for x in logits.iter_mut() {
            *x /= sum;
        }
        logits
    }

    fn preprocess_one(&self, p: &Path) -> Result<Vec<f32>> {
        let img = image::open(p)
            .with_context(|| format!("open image: {}", p.display()))?;
        let rgb = DynamicImage::from(img).to_rgb8();
        let resized = image::imageops::resize(&rgb, INPUT_W, INPUT_H, FilterType::Triangle);
        // Нормализация [0,1], NHWC
        let mut v = Vec::with_capacity((INPUT_W * INPUT_H * 3) as usize);
        for px in resized.pixels() {
            v.push(px[0] as f32 / 255.0);
            v.push(px[1] as f32 / 255.0);
            v.push(px[2] as f32 / 255.0);
        }
        Ok(v)
    }

    fn read_images(&self, images_dir: &Path) -> Result<Vec<PathBuf>> {
        let mut out = Vec::new();
        for e in WalkDir::new(images_dir).into_iter().filter_map(|e| e.ok()) {
            if !e.file_type().is_file() { continue; }
            let p = e.path();
            if let Some(ext) = p.extension().and_then(|s| s.to_str()).map(|s| s.to_ascii_lowercase()) {
                if IMG_EXTS.iter().any(|&x| x == format!(".{}", ext)) {
                    out.push(p.to_path_buf());
                }
            }
        }
        if out.is_empty() {
            anyhow::bail!("Нет изображений в {}", images_dir.display());
        }
        out.sort();
        Ok(out)
    }

    pub fn infer_folder(
        &self,
        images_dir: impl AsRef<Path>,
        out_dir: impl AsRef<Path>,
        batch_size: usize,
        csv_name: &str,
    ) -> Result<PathBuf> {
        let images_dir = images_dir.as_ref();
        let out_dir = out_dir.as_ref();
        fs::create_dir_all(out_dir)?;
        let csv_path = out_dir.join(csv_name);

        let labels = &self.labels.0;
        let mut w = Writer::from_path(&csv_path)?;
        // header
        let mut header = vec!["file".to_string(), "top_label".to_string(), "top_prob".to_string()];
        for l in labels {
            header.push(format!("p_{}", l));
        }
        w.write_record(&header)?;

        let paths = self.read_images(images_dir)?;
        let ncls = labels.len();

        for chunk in paths.chunks(batch_size.max(1)) {
            // подготовка батча: [N, H, W, 3]
            let mut buf = Vec::<f32>::with_capacity(chunk.len() * (INPUT_W * INPUT_H * 3) as usize);
            for p in chunk {
                buf.extend(self.preprocess_one(p)?);
            }
            let shape = IxDyn(&[chunk.len() as i64, INPUT_H as i64, INPUT_W as i64, 3]);
            let input = Array::from_shape_vec(shape.clone(), buf)?;
            let input_tensor = Value::from_array(self.session.allocator(), &input)?;

            let outputs = self.session.run(vec![(self.input_name.as_str(), input_tensor)])?;
            let out = outputs[0].try_extract_tensor::<f32>()?;
            let out_slice = out.view();

            for (i, p) in chunk.iter().enumerate() {
                // logits для картинки i
                let mut logits = vec![0.0f32; ncls];
                for c in 0..ncls {
                    logits[c] = *out_slice.get(&[i as i64, c as i64]).unwrap_or(&0.0);
                }
                let probs = self.softmax(logits);
                let (top_i, top_prob) = probs
                    .iter()
                    .enumerate()
                    .max_by(|a, b| a.1.partial_cmp(b.1).unwrap())
                    .map(|(i, &p)| (i, p))
                    .unwrap();

                let rel = pathdiff::diff_paths(p, images_dir).unwrap_or_else(|| p.to_path_buf());
                let mut record = vec![
                    rel.to_string_lossy().to_string(),
                    labels.get(top_i).cloned().unwrap_or_else(|| top_i.to_string()),
                    format!("{:.6}", top_prob),
                ];
                for j in 0..ncls {
                    record.push(format!("{:.6}", probs[j]));
                }
                w.write_record(&record)?;
            }
        }
        w.flush()?;
        Ok(csv_path)
    }

    pub fn write_html(&self, images_dir: &Path, out_dir: &Path, csv_name: &str) -> Result<PathBuf> {
        static HTML: &str = include_str!("eyeballer_report.html");
        let html = HTML
            .replace("{CSV_NAME}", csv_name)
            .replace("{IMAGES_DIR}", &images_dir.to_string_lossy());
        let path = out_dir.join("index.html");
        fs::write(&path, html)?;
        Ok(path)
    }

    pub fn serve(out_dir: &Path, port: u16) -> Result<()> {
        use tiny_http::{Response, Server};
        let server = Server::http(format!("127.0.0.1:{port}"))?;
        println!("Report: http://127.0.0.1:{port}/");
        for rq in server.incoming_requests() {
            let url = rq.url().trim_start_matches('/');
            let req_path = if url.is_empty() { "index.html" } else { url };
            let fs_path = out_dir.join(req_path);
            let resp = if fs_path.is_file() {
                let data = fs::read(&fs_path)?;
                let mut r = Response::from_data(data);
                if req_path.ends_with(".html") { r.add_header("Content-Type: text/html".parse().unwrap()); }
                if req_path.ends_with(".csv")  { r.add_header("Content-Type: text/csv".parse().unwrap()); }
                r
            } else {
                Response::from_string("404")
                    .with_status_code(404)
            };
            rq.respond(resp).ok();
        }
        Ok(())
    }
}
