#!/bin/bash
# generate.sh - Generator Blueprint Otomatis
# Hanya menghasilkan file yang benar-benar dibutuhkan untuk membangun ulang project.

set -uo pipefail

OUT="draft.md"
ROOT="."

# ===========================================================================
# WHITELIST — Hanya file dalam path ini yang akan diinclude.
# ===========================================================================
INCLUDE_PATHS=(
  # --- Domain / Business Logic ---
  "app/Models"
  "app/Policies"
  "app/Services"
  "app/Http/Controllers"

  # --- Filament (Admin Panel) ---
  "app/Filament/Resources"
  "app/Filament/Widgets"
  "app/Filament/Pages"
  "app/Filament/Exports"
  "app/Filament/Imports"
  "app/Providers/Filament"

  # --- App Providers ---
  "app/Providers/AppServiceProvider.php"

  # --- Database ---
  "database/migrations"
  "database/seeders"

  # --- Routing ---
  "routes/web.php"
  "routes/api.php"
  "routes/console.php"

  # --- Views (hanya yang custom, bukan vendor) ---
  "resources/views/formulir.blade.php"
  "resources/views/kartu-tes.blade.php"
  "resources/views/skl.blade.php"
  "resources/views/filament/pages/auth"

  # --- Config yang sudah dikustomisasi ---
  "config/filament-shield.php"
  "config/permission.php"
  "config/services.php"

  # --- App Bootstrap ---
  "bootstrap/app.php"

  # --- Project Root ---
  "composer.json"
  "vite.config.js"
  "tailwind.config.js"
  "package.json"
)

# ===========================================================================
# EXCLUDE — File/pattern yang di-skip meski masuk INCLUDE_PATHS
# ===========================================================================
EXCLUDE_PATTERNS=(
  "*.log"
  "*.sql"
  "*.sqlite"
  "*.png" "*.jpg" "*.jpeg" "*.gif" "*.svg" "*.ico" "*.webp" "*.avif"
  "*.woff" "*.woff2" "*.ttf" "*.otf" "*.eot"
  "*.mp3" "*.mp4" "*.avi" "*.mov"
  ".DS_Store"
  "Thumbs.db"
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
    *)           printf "" ;;
  esac
}

is_excluded() {
  local file="$1"
  local filename
  filename="$(basename -- "$file")"
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

# ===========================================================================
# Sections — urutan penulisan ke draft.md
# ===========================================================================
declare -A SECTION_LABELS=(
  ["app/Models"]="## 🗃️ Models"
  ["app/Policies"]="## 🔐 Policies"
  ["app/Services"]="## ⚙️ Services"
  ["app/Http/Controllers"]="## 🎮 Controllers"
  ["app/Filament/Resources"]="## 🧩 Filament Resources"
  ["app/Filament/Widgets"]="## 📊 Filament Widgets (Global)"
  ["app/Filament/Pages"]="## 📄 Filament Pages"
  ["app/Filament/Exports"]="## 📤 Filament Exports"
  ["app/Filament/Imports"]="## 📥 Filament Imports"
  ["app/Providers/Filament"]="## ⚙️ Filament Panel Provider"
  ["app/Providers/AppServiceProvider.php"]="## ⚙️ App Service Provider"
  ["database/migrations"]="## 🏗️ Migrations"
  ["database/seeders"]="## 🌱 Seeders"
  ["routes"]="## 🛣️ Routes"
  ["resources/views"]="## 🖼️ Views (Custom)"
  ["config"]="## ⚙️ Config (Custom)"
  ["bootstrap"]="## 🚀 Bootstrap"
  ["root"]="## 📦 Root Config Files"
)

# Urutan section yang diinginkan di output
SECTION_ORDER=(
  "app/Models"
  "app/Policies"
  "app/Services"
  "app/Http/Controllers"
  "app/Filament/Resources"
  "app/Filament/Widgets"
  "app/Filament/Pages"
  "app/Filament/Exports"
  "app/Filament/Imports"
  "app/Providers/Filament"
  "app/Providers/AppServiceProvider.php"
  "database/migrations"
  "database/seeders"
  "routes"
  "resources/views"
  "config"
  "bootstrap"
  "root"
)

# ===========================================================================
# Classify file ke section mana
# ===========================================================================
classify() {
  local rel="$1"
  for section in "${SECTION_ORDER[@]}"; do
    if [[ "$rel" == $section/* || "$rel" == "$section" ]]; then
      printf "%s" "$section"
      return
    fi
  done
  printf "root"
}

# ===========================================================================
# Collect files
# ===========================================================================
declare -A section_files

for inc in "${INCLUDE_PATHS[@]}"; do
  full_path="$ROOT/$inc"

  if [ -f "$full_path" ]; then
    is_excluded "$full_path" && continue
    section="$(classify "$inc")"
    section_files[$section]="${section_files[$section]:-}"$'\n'"$inc"

  elif [ -d "$full_path" ]; then
    while IFS= read -r -d '' f; do
      rel="${f#$ROOT/}"
      is_excluded "$f" && continue
      section="$(classify "$rel")"
      section_files[$section]="${section_files[$section]:-}"$'\n'"$rel"
    done < <(find "$full_path" -type f -print0 | sort -z)
  fi
done

# ===========================================================================
# Write draft.md
# ===========================================================================
: > "$OUT"

cat >> "$OUT" << 'EOF'
# Laravel Project Blueprint — PPDB MTsN 1 Pandeglang

> Auto-generated. Berisi file-file inti yang dibutuhkan untuk membangun ulang project.
> File boilerplate, vendor, compiled assets, dan cache **tidak disertakan**.

EOF

# Tree ringkas — hanya dari INCLUDE_PATHS
printf "## 🗂️ Included File Tree\n\n\`\`\`\n" >> "$OUT"
for inc in "${INCLUDE_PATHS[@]}"; do
  full_path="$ROOT/$inc"
  if [ -f "$full_path" ]; then
    printf "%s\n" "$inc" >> "$OUT"
  elif [ -d "$full_path" ]; then
    find "$full_path" -type f | sed "s|$ROOT/||" | sort | while read -r line; do
      is_excluded "$ROOT/$line" && continue
      printf "%s\n" "$line" >> "$OUT"
    done
  fi
done
printf "\`\`\`\n\n---\n\n" >> "$OUT"

# Tulis per section sesuai urutan
for section in "${SECTION_ORDER[@]}"; do
  [[ -z "${section_files[$section]:-}" ]] && continue

  label="${SECTION_LABELS[$section]:-## 📁 $section}"
  printf "%s\n\n" "$label" >> "$OUT"

  while IFS= read -r rel; do
    [[ -z "$rel" ]] && continue
    write_file "$ROOT/$rel"
  done <<< "${section_files[$section]}"
done

echo "✅ Selesai. '$OUT' telah dibuat ($(wc -l < "$OUT") baris, $(du -sh "$OUT" | cut -f1) ukuran)."
