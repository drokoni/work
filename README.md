# TASK — сканер + Eyeballer ONNX-анализ скриншотов

Проект объединяет:

1. **Скан домена** (Wayback + live-фетч, снятие скриншотов, сбор артефактов);
    
2. **Анализ папки со скриншотами** через **ONNX-модель Eyeballer** (CSV + HTML отчёт, локальный просмотрщик).
    

---

## Быстрый старт
```bash 
# 0) Установи Rust через rustup
curl https://sh.rustup.rs -sSf | sh
source "$HOME/.cargo/env"

# 1) Клонируй репозиторий
git clone https://github.com/drokoni/work
cd work/TASK

# 2) Зафиксируй стабильный toolchain 
cat > rust-toolchain.toml <<'EOF'
[toolchain]
channel = "1.83.0"
components = ["clippy","rustfmt"]
EOF
```

### ONNX Runtime (важно)

Библиотека `libonnxruntime.so` нужна для инференса. Сам проект **не скачивает** её автоматически.

**Вариант A (просто): взять .so из Python-окружения**
```bash 
# внутри того же venv, где установлен onnxruntime или onnxruntime-gpu
python - <<'PY'
import onnxruntime, pathlib, sys
p = pathlib.Path(onnxruntime.__file__).parent
for c in [p/'capi/libonnxruntime.so', p/'libonnxruntime.so']:
    if c.exists():
        print(c); break
else:
    print("NOT_FOUND", file=sys.stderr)
PY
# экспортируй путь, который напечатался:
export ORT_DYLIB_PATH="/полный/путь/к/libonnxruntime.so"
```

Вариант B: системный пакет

Arch: `sudo pacman -S onnxruntime` → /usr/lib/libonnxruntime.so

Укажи путь: `export ORT_DYLIB_PATH="/usr/lib/libonnxruntime.so"`

```bash
export ORT_DIR="*/.venv/lib/python3.13/site-packages/onnxruntime/capi"
export ORT_DYLIB_PATH="$ORT_DIR/libonnxruntime.so.1.23.0"  # или libonnxruntime.so
export LD_LIBRARY_PATH="$ORT_DIR:${LD_LIBRARY_PATH}"
```

После этого:
```bash
cargo build
```
---

## Запуск

Посмотреть помощь программы:
```bash 
cargo run -- --help 
cargo build --relese
```

## Режим 1 — Полный цикл: скан → (опционально) анализ
```bash
# только скан
cargo run -- example.com

# скан + анализ Eyeballer ONNX + локальный сервер
cargo run -- example.com \
  --analyze \
  --model assets/ml/eyeballer.onnx \
  --report example.com/report \
  --batch 64 \
  --serve --port 8000
```

## Режим 2 — Только модель (инференс по папке с картинками)
```bash 
cargo run -- \
  --images /path/to/screens \
  --model assets/ml/eyeballer.onnx \
  --report /path/to/screens/report \
  --batch 64 \
  --serve --port 8080
```
Если `--report` не указан, отчёт ляжет в `<images>/report`.

## Режим 3 - сервер запуск 
```bash 
cargo run -- serv /home/user/work/TASK/src/okko.ru/report --port 8002
```
## Что делает анализ

- Читает изображения (`png`, `jpg`, `jpeg`, `bmp`, `webp`) из указанной папки (например, `./<domain>/screenshots/`);
- Ресайзит до `256×256`, нормализует в `[0..1]`, гонит через Eyeballer (ONNX, CPU);
- Пишет:
    - `predictions.csv` — класс + вероятности по всем классам;
    - `index.html` — интерактивный отчёт (таблица + быстрый просмотр);
- Опционально поднимает локальный веб-сервер просмотра.

---

## Структура вывода

```bash
<domain>/
  out.txt               # сырые Wayback + live URL’ы
  subdomains.txt        # поддомены
  sensitive_info.txt    # найденная чувствительная инфа
  assets/
  JSscripts/
  screenshots/          # скриншоты (вход для анализа)
  report/
    predictions.csv     # результаты Eyeballer
    index.html          # отчёт для браузера
```

## Аргументы CLI (кратко)

- `DOMAIN` — домен для скана (если не используется `--images`)
- `--images <DIR>` — папка со скриншотами (только инференс, без скана)
- `--analyze` — запуск анализа после скана (для режима с доменом)
- `--model <PATH>` — путь к `.onnx` (по умолчанию `assets/ml/eyeballer.onnx`)
- `--report <DIR>` — папка для отчёта (по умолчанию `<domain>/report` или `<images>/report`)
- `--batch <N>` — размер батча (по умолчанию `32`)
- `--serve` — поднять локальный сервер просмотра отчёта
- `--port <PORT>` — порт сервера (по умолчанию `8000`)

---
