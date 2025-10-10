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
cargo build --release
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
##  Быстрый старт

### Вариант A — оффлайн-анализ уже готовых скриншотов

```bash
# В папке ./shots лежат картинки (.png/.jpg/.jpeg/.bmp/.webp)
./target/release/work --images ./shots --analyze --serve --port 9000
```

- Отчёт появится в `./shots/report/`
- Открой: <http://127.0.0.1:9000/>

---

### Вариант B — полный цикл: скан → (опц.) анализ

```bash
./target/release/work example.com --analyze --serve --port 8000
```

- Скриншоты сохранятся в рабочей директории сканера (см. вывод в консоли).  
- Отчёт (если включён анализ) — в `./example.com/report/`

---

### Вариант C — только локальный сервер по готовому отчёту

```bash
./target/release/work serv ./report --port 8080
# Открой: http://127.0.0.1:8080/
```

---

## Режимы работы

### 1. Только инференс по папке (`--images`)
- **Не сканирует** домен.  
- Берёт готовые изображения, запускает Eyeballer, формирует отчёт.

Параметры:
| Параметр | Описание | По умолчанию |
|-----------|-----------|---------------|
| `--images DIR` | Входная папка с изображениями | — |
| `--report DIR` | Куда положить отчёт | `DIR/report` |
| `--model PATH` | Путь к модели `.onnx` | `assets/ml/eyeballer.onnx` |
| `--batch N` | Размер батча | `32` |
| `--serve` | Поднять локальный сервер | — |
| `--port N` | Порт HTTP-сервера | `8000` |

---

### 2. Полный цикл: скан → анализ
Если указан `DOMAIN` (и не задан `--images`):
- Выполняется скан домена и снятие скриншотов.
- Если добавлен `--analyze`, запускается Eyeballer.
- `--report DIR` — путь для сохранения отчёта.
- `--serve` и `--port` — поднять сервер после анализа.

---

### 3. Подкоманда `serv`
Раздача уже собранного отчёта.

```bash
./work serv <REPORT_DIR> --port 8000
```

---

## Справка по CLI

```
work [OPTIONS] [DOMAIN]
work serv <REPORT_DIR> [--port PORT]

Опции:
  --images DIR       Папка с изображениями
  --analyze          Запустить анализ (для --images включается автоматически)
  --model PATH       Путь к .onnx (по умолчанию assets/ml/eyeballer.onnx)
  --report DIR       Куда сохранить отчёт
  --batch N          Размер батча (по умолчанию 32)
  --serve            Поднять HTTP-сервер после выполнения
  --port PORT        Порт (по умолчанию 8000)

Подкоманда:
  serv <REPORT_DIR>  Раздать готовый отчёт
    --port PORT      Порт (по умолчанию 8000)
```

---

##  Структура результатов

После работы появляются папки:

```
<domain>/
  screenshots/       # Скриншоты страниц
  report/
    index.html       # HTML-отчёт
    predictions.csv  # CSV с результатами
```

---

## Примеры

Анализ локальных скриншотов и сервер:
```bash
./target/release/work(cargo run --) --images ./shots --analyze --serve --port 9000
```

Полный цикл + отчёт в кастомную папку:
```bash
./target/release/work(cargo run --) example.com --analyze --report ./out/example.com --serve
```

Только сервер по готовому отчёту:
```bash
./target/release/work(cargo run --) serv ./out/example.com --port 8080
```

Явный путь к модели и увеличенный батч:
```bash
./target/release/work(cargo run --) --images ./shots --model ./assets/ml/eyeballer.onnx --batch 64 --analyze
```

---

## Частые ошибки

| Ошибка | Причина / Решение |
|--------|--------------------|
| `Ошибка: укажи DOMAIN или --images DIR` | Нужно указать либо домен, либо папку с изображениями. |
| `code 404 favicon.ico` | Игнорировать — фавикон не обязателен. |
| `Порт занят` | Укажи другой `--port`, например `--port 9001`. |
| `onnxruntime not found` | Убедись, что ORT доступен или включено auto-download в crate `ort`. |
| `Не создать ...: Permission denied` | Проверь права записи в директорию отчёта. |





