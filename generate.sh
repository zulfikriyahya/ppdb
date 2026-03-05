#!/bin/bash
# generate.sh - Generator Blueprint Otomatis
# Hanya menghasilkan file yang benar-benar dibutuhkan untuk membangun ulang project.

set -euo pipefail

OUT="draft.md"
ROOT="."

# ===========================================================================
# WHITELIST — Hanya file dalam path ini yang akan diinclude.
# Glob pattern (mis. **/*.blade.php) didukung via find + manual matching.
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
  "resources/views"

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
# Sections
# ===========================================================================
# Key menggunakan index numerik agar aman di semua versi bash,
# karena key dengan '/' dan '.' bisa bermasalah pada associative array.
# ===========================================================================
SECTION_KEYS=(
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

SECTION_LABELS=(
  "## 🗃️ Models"
  "## 🔐 Policies"
  "## ⚙️ Services"
  "## 🎮 Controllers"
  "## 🧩 Filament Resources"
  "## 📊 Filament Widgets (Global)"
  "## 📄 Filament Pages"
  "## 📤 Filament Exports"
  "## 📥 Filament Imports"
  "## ⚙️ Filament Panel Provider"
  "## ⚙️ App Service Provider"
  "## 🏗️ Migrations"
  "## 🌱 Seeders"
  "## 🛣️ Routes"
  "## 🖼️ Views (Custom)"
  "## ⚙️ Config (Custom)"
  "## 🚀 Bootstrap"
  "## 📦 Root Config Files"
)

# Storage per section — index sesuai SECTION_KEYS
declare -a section_files
for i in "${!SECTION_KEYS[@]}"; do
  section_files[$i]=""
done

# ===========================================================================
# Classify file ke index section
# ===========================================================================
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
  # fallback ke index "root" (index terakhir)
  printf "%s" "$(( ${#SECTION_KEYS[@]} - 1 ))"
}

# ===========================================================================
# Collect files
# ===========================================================================
for inc in "${INCLUDE_PATHS[@]}"; do
  full_path="$ROOT/$inc"

  if [ -f "$full_path" ]; then
    is_excluded "$full_path" && continue
    idx="$(classify "$inc")"
    section_files[$idx]+=$'\n'"$inc"

  elif [ -d "$full_path" ]; then
    while IFS= read -r -d '' f; do
      rel="${f#"$ROOT"/}"
      is_excluded "$f" && continue
      idx="$(classify "$rel")"
      section_files[$idx]+=$'\n'"$rel"
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

# Tree ringkas
printf "## 🗂️ Included File Tree\n\n\`\`\`\n" >> "$OUT"
for inc in "${INCLUDE_PATHS[@]}"; do
  full_path="$ROOT/$inc"
  if [ -f "$full_path" ]; then
    is_excluded "$full_path" && continue
    printf "%s\n" "$inc" >> "$OUT"
  elif [ -d "$full_path" ]; then
    while IFS= read -r f; do
      rel="${f#"$ROOT"/}"
      is_excluded "$f" && continue
      printf "%s\n" "$rel" >> "$OUT"
    done < <(find "$full_path" -type f | sort)
  fi
done
printf "\`\`\`\n\n---\n\n" >> "$OUT"

# Tulis per section sesuai urutan
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
