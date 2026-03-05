#!/bin/bash
# generate.sh - Generator Blueprint Otomatis
# Scan seluruh project, kecualikan direktori & file yang tidak relevan.

set -euo pipefail

OUT="draft.md"
ROOT="."

# ===========================================================================
# EXCLUDE DIRS — direktori yang di-skip sepenuhnya (find -prune)
# ===========================================================================
EXCLUDE_DIRS=(
  "node_modules"
  "vendor"
  ".yarn"
  ".git"
  "tests"
  "storage"
  "bootstrap/cache"
  "public/build"
  "public/js/filament"
  "public/js/html2media"
  "public/js/qrcode"
  "public/css/filament"
  "public/css/devonab"
  "public/vendor"
)

# ===========================================================================
# EXCLUDE FILE PATTERNS — file yang di-skip meski ada di path yang di-scan
# ===========================================================================
EXCLUDE_PATTERNS=(
  # Biner & aset
  "*.png" "*.jpg" "*.jpeg" "*.gif" "*.svg" "*.ico" "*.webp" "*.avif"
  "*.woff" "*.woff2" "*.ttf" "*.otf" "*.eot"
  "*.mp3" "*.mp4" "*.avi" "*.mov"
  "*.pdf" "*.xlsx" "*.xls" "*.csv"
  "*.zip" "*.tar" "*.gz" "*.rar"
  "*.sqlite" "*.sql"
  # Compiled / lock / cache
  "*.map"
  "composer.lock"
  "yarn.lock"
  "pnp.cjs"
  "pnp.loader.mjs"
  "package-lock.json"
  "README.md"
  "draft.md"
  "LICENSE"
  "todo.md"
  # OS & editor
  ".DS_Store"
  "Thumbs.db"
  # Log
  "*.log"
  # PHP compiled views (di storage/framework/views)
  "*.php.cache"
)

# ===========================================================================
# SECTION mapping — path prefix → label
# Urutan penting: lebih spesifik di atas.
# ===========================================================================
SECTION_KEYS=(
  "app/Models"
  "app/Policies"
  "app/Services"
  "app/Helpers"
  "app/Constants"
  "app/Http"
  "app/Filament/Resources"
  "app/Filament/Exports"
  "app/Filament/Imports"
  "app/Filament/Pages"
  "app/Filament/Concerns"
  "app/Filament/Traits"
  "app/Filament/Widgets"
  "app/Filament"
  "app/Providers"
  "app"
  "database/migrations"
  "database/seeders"
  "database"
  "routes"
  "resources/views"
  "resources"
  "config"
  "bootstrap"
  "public"
  "root"
)

SECTION_LABELS=(
  "## 🗃️ Models"
  "## 🔐 Policies"
  "## ⚙️ Services"
  "## 🔧 Helpers"
  "## 📌 Constants"
  "## 🎮 Http (Controllers, Middleware, Requests)"
  "## 🧩 Filament Resources"
  "## 📤 Filament Exports"
  "## 📥 Filament Imports"
  "## 📄 Filament Pages"
  "## 🔗 Filament Concerns"
  "## 🔗 Filament Traits"
  "## 📊 Filament Widgets"
  "## 🧩 Filament (Other)"
  "## ⚙️ Providers"
  "## 🧱 App (Other)"
  "## 🏗️ Migrations"
  "## 🌱 Seeders"
  "## 🗄️ Database (Other)"
  "## 🛣️ Routes"
  "## 🖼️ Views"
  "## 🎨 Resources (Other)"
  "## ⚙️ Config"
  "## 🚀 Bootstrap"
  "## 🌐 Public (Custom)"
  "## 📦 Root"
)

# ===========================================================================
# Helpers
# ===========================================================================
lang_for_ext() {
  case "$1" in
    php)         printf "php" ;;
    blade.php)   printf "blade" ;;
    js|mjs|cjs)  printf "javascript" ;;
    ts)          printf "typescript" ;;
    vue)         printf "vue" ;;
    css|scss)    printf "css" ;;
    json)        printf "json" ;;
    yml|yaml)    printf "yaml" ;;
    md|mdx)      printf "markdown" ;;
    sh|bash)     printf "bash" ;;
    html)        printf "html" ;;
    env)         printf "bash" ;;
    *)           printf "" ;;
  esac
}

is_excluded_file() {
  local filename
  filename="$(basename -- "$1")"
  for pat in "${EXCLUDE_PATTERNS[@]}"; do
    # shellcheck disable=SC2254
    case "$filename" in
      $pat) return 0 ;;
    esac
  done
  return 1
}

write_file() {
  local file="$1"
  local filename
  filename="$(basename -- "$file")"

  local ext
  if [[ "$filename" == *.blade.php ]]; then
    ext="blade.php"
  elif [[ "$filename" == *.* ]]; then
    ext="${filename##*.}"
  else
    ext="$filename"
  fi

  local lang
  lang="$(lang_for_ext "$ext")"

  printf "### 📄 \`%s\`\n\n" "$file" >> "$OUT"

  if [ -n "$lang" ]; then
    printf '```%s\n' "$lang" >> "$OUT"
  else
    printf '```\n' >> "$OUT"
  fi

  sed 's/\r$//' "$file" >> "$OUT"
  printf '\n```\n\n---\n\n' >> "$OUT"
}

classify() {
  local rel="$1"
  local i
  for i in "${!SECTION_KEYS[@]}"; do
    local key="${SECTION_KEYS[$i]}"
    if [[ "$rel" == "$key" || "$rel" == "$key/"* ]]; then
      printf "%s" "$i"
      return
    fi
  done
  # fallback → "root" (index terakhir)
  printf "%s" "$(( ${#SECTION_KEYS[@]} - 1 ))"
}

# ===========================================================================
# Build find -prune args untuk EXCLUDE_DIRS
# ===========================================================================
build_prune_args() {
  local args=()
  for dir in "${EXCLUDE_DIRS[@]}"; do
    args+=( -path "$ROOT/$dir" -prune -o )
  done
  printf '%s\n' "${args[@]}"
}

# ===========================================================================
# Collect files
# ===========================================================================
declare -a section_files
for i in "${!SECTION_KEYS[@]}"; do
  section_files[$i]=""
done

# Build prune expression sebagai array
prune_args=()
for dir in "${EXCLUDE_DIRS[@]}"; do
  prune_args+=( -path "$ROOT/$dir" -prune -o )
done

while IFS= read -r -d '' f; do
  rel="${f#"$ROOT"/}"

  # Skip jika path kosong atau titik
  [[ -z "$rel" || "$rel" == "." ]] && continue

  # Skip file yang di-exclude
  is_excluded_file "$f" && continue

  idx="$(classify "$rel")"
  section_files[$idx]+=$'\n'"$rel"
done < <(
  find "$ROOT" \
    "${prune_args[@]}" \
    -type f -print0 \
  | sort -z
)

# ===========================================================================
# Write draft.md
# ===========================================================================
: > "$OUT"

cat >> "$OUT" << 'EOF'
# Laravel Project Blueprint — PPDB MTsN 1 Pandeglang

> Auto-generated. Berisi seluruh file inti project.
> Dikecualikan: node_modules, vendor, tests, .yarn, public/vendor,
>               public/build, storage, bootstrap/cache, dan file biner.

EOF

# Ringkasan file yang ter-include
printf "## 🗂️ File Tree\n\n\`\`\`\n" >> "$OUT"
for i in "${!SECTION_KEYS[@]}"; do
  [[ -z "${section_files[$i]}" ]] && continue
  while IFS= read -r rel; do
    [[ -z "$rel" ]] && continue
    printf "%s\n" "$rel" >> "$OUT"
  done <<< "${section_files[$i]}"
done
printf "\`\`\`\n\n---\n\n" >> "$OUT"

# Tulis isi per section
total_files=0
for i in "${!SECTION_KEYS[@]}"; do
  [[ -z "${section_files[$i]}" ]] && continue

  printf "%s\n\n" "${SECTION_LABELS[$i]}" >> "$OUT"

  count=0
  while IFS= read -r rel; do
    [[ -z "$rel" ]] && continue
    write_file "$ROOT/$rel"
    (( count++ )) || true
  done <<< "${section_files[$i]}"

  (( total_files += count )) || true
done

# ===========================================================================
# Summary
# ===========================================================================
lines="$(wc -l < "$OUT")"
size="$(du -sh "$OUT" | cut -f1)"

echo "✅ Selesai."
echo "   📄 Output  : $OUT"
echo "   📁 Files   : $total_files file"
echo "   📏 Baris   : $lines"
echo "   💾 Ukuran  : $size"
