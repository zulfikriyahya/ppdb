#!/bin/bash

set -euo pipefail

OUT="draft.md"
ROOT="."

EXCLUDE_DIRS=(
  "node_modules"
  "vendor"
  ".yarn"
  ".git"
  "tests"
  "storage"
  "database/seeders"
  "bootstrap/cache"
  "public/build"
  "public/js/filament"
  "public/js/html2media"
  "public/js/qrcode"
  "public/css/filament"
  "public/css/devonab"
  "public/vendor"
)

EXCLUDE_PATTERNS=(
  "*.png" "*.jpg" "*.jpeg" "*.gif" "*.svg" "*.ico" "*.webp" "*.avif"
  "*.woff" "*.woff2" "*.ttf" "*.otf" "*.eot"
  "*.mp3" "*.mp4" "*.avi" "*.mov"
  "*.pdf" "*.xlsx" "*.xls" "*.csv"
  "*.zip" "*.tar" "*.gz" "*.rar"
  "*.sqlite" "*.sql"
  "*.map"
  "artisan"
  "generate.sh"
  "composer.lock"
  "yarn.lock"
  ".pnp.cjs"
  ".pnp.loader.mjs"
  ".env"
  ".editorconfig"
  ".gitattributes"
  ".gitignore"
  "phpunit.xml"
  "package-lock.json"
  "README.md"
  "draft.md"
  "LICENSE"
  "todo.md"
  ".DS_Store"
  "Thumbs.db"
  "*.log"
  "*.php.cache"
)

SECTION_KEYS=(
  "app/Models"
  "app/Observers"
  "app/Policies"
  "app/Services"
  "app/Jobs"
  "app/Helpers"
  "app/Constants"
  "app/Http/Controllers"
  "app/Http"
  "app/Filament/Resources/AnggotaResource"
  "app/Filament/Resources/BendaharaResource"
  "app/Filament/Resources/CalonSiswaResource"
  "app/Filament/Resources/EkstrakurikulerResource"
  "app/Filament/Resources/FormulirPrestasiResource"
  "app/Filament/Resources/InformasiResource"
  "app/Filament/Resources/JalurPendaftaranResource"
  "app/Filament/Resources/JurusanResource"
  "app/Filament/Resources/KabupatenResource"
  "app/Filament/Resources/KecamatanResource"
  "app/Filament/Resources/KelasResource"
  "app/Filament/Resources/KelurahanResource"
  "app/Filament/Resources/KetuaResource"
  "app/Filament/Resources/MataPelajaranResource"
  "app/Filament/Resources/NegaraResource"
  "app/Filament/Resources/PimpinanResource"
  "app/Filament/Resources/PrestasiResource"
  "app/Filament/Resources/ProvinsiResource"
  "app/Filament/Resources/RoleResource"
  "app/Filament/Resources/SekolahAsalResource"
  "app/Filament/Resources/SekolahResource"
  "app/Filament/Resources/SekretarisResource"
  "app/Filament/Resources/TahunPendaftaranResource"
  "app/Filament/Resources/UserResource"
  "app/Filament/Resources"
  "app/Filament/Exports"
  "app/Filament/Imports"
  "app/Filament/Pages"
  "app/Filament/Concerns"
  "app/Filament/Traits"
  "app/Filament"
  "app/Providers"
  "app"
  "database/migrations"
  "database"
  "routes"
  "resources/views/filament"
  "resources/views/partials"
  "resources/views"
  "resources/css"
  "resources/js"
  "resources"
  "config"
  "bootstrap"
  "public/js"
  "public/css"
  "public"
  "root"
)

SECTION_LABELS=(
  "## Models"
  "## Observers"
  "## Policies"
  "## Services"
  "## Jobs"
  "## Helpers"
  "## Constants"
  "## Http - Controllers"
  "## Http"
  "## Filament Resource - Anggota"
  "## Filament Resource - Bendahara"
  "## Filament Resource - CalonSiswa"
  "## Filament Resource - Ekstrakurikuler"
  "## Filament Resource - FormulirPrestasi"
  "## Filament Resource - Informasi"
  "## Filament Resource - JalurPendaftaran"
  "## Filament Resource - Jurusan"
  "## Filament Resource - Kabupaten"
  "## Filament Resource - Kecamatan"
  "## Filament Resource - Kelas"
  "## Filament Resource - Kelurahan"
  "## Filament Resource - Ketua"
  "## Filament Resource - MataPelajaran"
  "## Filament Resource - Negara"
  "## Filament Resource - Pimpinan"
  "## Filament Resource - Prestasi"
  "## Filament Resource - Provinsi"
  "## Filament Resource - Role"
  "## Filament Resource - SekolahAsal"
  "## Filament Resource - Sekolah"
  "## Filament Resource - Sekretaris"
  "## Filament Resource - TahunPendaftaran"
  "## Filament Resource - User"
  "## Filament Resources"
  "## Filament Exports"
  "## Filament Imports"
  "## Filament Pages"
  "## Filament Concerns"
  "## Filament Traits"
  "## Filament"
  "## Providers"
  "## App"
  "## Migrations"
  "## Database"
  "## Routes"
  "## Views - Filament"
  "## Views - Partials"
  "## Views"
  "## Resources - CSS"
  "## Resources - JS"
  "## Resources"
  "## Config"
  "## Bootstrap"
  "## Public - JS"
  "## Public - CSS"
  "## Public"
  "## Root"
)

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

  printf "### %s\n\n" "$file" >> "$OUT"

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
  printf "%s" "$(( ${#SECTION_KEYS[@]} - 1 ))"
}

declare -a section_files
for i in "${!SECTION_KEYS[@]}"; do
  section_files[$i]=""
done

prune_args=()
for dir in "${EXCLUDE_DIRS[@]}"; do
  prune_args+=( -path "$ROOT/$dir" -prune -o )
done

while IFS= read -r -d '' f; do
  rel="${f#"$ROOT"/}"
  [[ -z "$rel" || "$rel" == "." ]] && continue
  is_excluded_file "$f" && continue
  idx="$(classify "$rel")"
  section_files[$idx]+=$'\n'"$rel"
done < <(
  find "$ROOT" \
    "${prune_args[@]}" \
    -type f -print0 \
  | sort -z
)

: > "$OUT"

cat >> "$OUT" << 'EOF'
# Laravel Project Blueprint - PMBM MTsN 1 Pandeglang

> Auto-generated. Berisi seluruh file inti project.
> Dikecualikan: node_modules, vendor, tests, .yarn, public/vendor,
>               public/build, storage, bootstrap/cache, dan file biner.

EOF

printf "## File Tree\n\n\`\`\`\n" >> "$OUT"
for i in "${!SECTION_KEYS[@]}"; do
  [[ -z "${section_files[$i]}" ]] && continue
  while IFS= read -r rel; do
    [[ -z "$rel" ]] && continue
    printf "%s\n" "$rel" >> "$OUT"
  done <<< "${section_files[$i]}"
done
printf "\`\`\`\n\n---\n\n" >> "$OUT"

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

lines="$(wc -l < "$OUT")"
size="$(du -sh "$OUT" | cut -f1)"

echo "Selesai."
echo "   Output  : $OUT"
echo "   Files   : $total_files file"
echo "   Baris   : $lines"
echo "   Ukuran  : $size"
