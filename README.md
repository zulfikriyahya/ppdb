# PPDB MTsN 1 Pandeglang

Sistem Penerimaan Peserta Didik Baru (PPDB) berbasis web untuk **MTsN 1 Pandeglang** — mengelola seluruh proses pendaftaran siswa baru secara digital, mulai dari registrasi akun hingga pengumuman hasil seleksi.

---

## Tech Stack

| Layer | Teknologi |
|---|---|
| Backend | Laravel 12 |
| Admin Panel | Filament v3.3 |
| Database | MariaDB v11 |
| Cache / Session / OTP | Redis v8 |
| Runtime | Laravel Octane + FrankenPHP |
| Auth | Laravel Sanctum + Spatie Permission |
| File Storage | Laravel Storage (Private & Public) |
| PDF | DomPDF |
| Styling | Tailwind CSS + Nord Theme |
| Notifikasi | WhatsApp Gateway |

---

## Fitur Utama

- **Multi-jalur** — Prestasi, Reguler, Afirmasi, Zonasi, Mutasi
- **Verifikasi OTP** via WhatsApp (Redis TTL 5 menit, cooldown 60 detik)
- **Isolasi data** per tahun pendaftaran aktif via Global Scope
- **Upload berkas** dengan validasi format (image/PDF) dan ukuran (10 KB–1 MB)
- **Tes seleksi** — input nilai akademik & praktik, hitung nilai total berbobot
- **Generate PDF** — formulir pendaftaran, kartu tes, SKL/pengumuman
- **Export/Import** bulk calon siswa via Excel/CSV
- **RBAC** via Spatie Laravel Permission + Filament Shield
- **Notifikasi WhatsApp** otomatis di setiap milestone pendaftaran

---

## Role

| Role | Akses |
|---|---|
| `super_admin` | Full akses sistem |
| `admin` | Manajemen data master & pengguna |
| `verifikator` | Review & validasi formulir/berkas |
| `panitia` | Input nilai, assign jadwal, cetak kartu |
| `calon_siswa` | Registrasi, isi formulir, upload berkas, cetak dokumen |

---

## Alur Pendaftaran

```
Registrasi → Verifikasi OTP → Isi Formulir → Upload Berkas
    → Verifikasi Panitia → Cetak Formulir → Kartu Tes
    → Tes Akademik & Praktik → Pengumuman → Daftar Ulang
```

---

## Instalasi

### Prasyarat

- PHP 8.2+
- Composer
- Node.js & npm
- MariaDB 11 / MySQL 8
- Redis 8
- (Opsional) FrankenPHP untuk production

### Development

```bash
# Clone & install dependencies
git clone <repo-url>
cd ppdb-mtsn1pandeglang
composer install && npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Database
php artisan migrate --seed

# Setup permission & shield
php artisan shield:install
php artisan shield:generate --all

# Jalankan semua service sekaligus
composer dev
```

> `composer dev` menjalankan Laravel server, queue worker, Pail log viewer, dan Vite secara bersamaan via concurrently.

### Production

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:optimize
```

---

## Konfigurasi Penting

### WhatsApp Gateway

```env
WHATSAPP_ENDPOINT=https://wapi.zedlabs.id/api/messages/send
WHATSAPP_API_KEY=your_api_key_here
```

Notifikasi dikirim via queue dengan random delay 5–30 detik untuk mencegah rate limiting.

### Redis

```env
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Redis digunakan untuk cache, session, OTP, dan queue.

### Storage

File berkas pendaftaran disimpan di `storage/app/private`. Jalankan `php artisan storage:link` untuk public assets.

---

## Artisan Commands

```bash
php artisan optimize:clear          # Clear semua cache
php artisan shield:generate --all   # Regenerate permissions
php artisan queue:work --tries=3    # Queue worker
php artisan pail --timeout=0        # Live log viewer
php artisan migrate:fresh --seed    # Reset database (dev only)
```

---

## Struktur Data Kritis

### Enkripsi

Field sensitif dienkripsi otomatis via Laravel `encrypted` cast:

```
nik, kk, siswa_telepon
ibu_nik, ibu_telepon
ayah_nik, ayah_telepon
wali_nik, wali_telepon
```

### Isolasi Per Tahun

Semua data utama di-scope ke `tahun_pendaftaran_id` aktif. Admin dapat mengakses lintas tahun menggunakan `withoutGlobalScopes()`.

### Nomor Pendaftaran

Auto-generated format `PPDB-{TAHUN}-{6 digit seq}` dengan `lockForUpdate()` untuk mencegah race condition.

---

## Dokumen PDF

| Dokumen | Trigger |
|---|---|
| Formulir Pendaftaran | `status_formulir = Disetujui` |
| Kartu Tes | `tes_akademik` atau `tes_praktik` sudah di-assign |
| SKL / Pengumuman | `status_pendaftaran` sudah di-set |
| Dokumen Daftar Ulang | `status_pendaftaran = Diterima` |

---

## Catatan

- Data wilayah (Provinsi, Kabupaten, Kecamatan, Kelurahan) memerlukan seeding awal — ukuran data besar
- `CalonSiswa` menggunakan UUID sebagai PK; FK dari tabel lain harus `char(36)`
- Registrasi buka/tutup otomatis berdasarkan tanggal di `TahunPendaftaran` (cache 60 detik)
- File: avatar maks 500 KB, dokumen maks 1 MB, minimum 10 KB

---

## Developer

**Yahya Zulfikri**
Instagram: [@zulfikriyahya_](https://instagram.com/zulfikriyahya_)
GitHub: [github.com/zulfikriyahya](https://github.com/zulfikriyahya)

---

**Version** 2.0.0 · **License** Proprietary — MTsN 1 Pandeglang
