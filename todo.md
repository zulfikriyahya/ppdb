
# Skills & Project Convention Reference

Dokumen ini digunakan sebagai konteks bagi AI assistant saat membantu pengembangan project **MTsN 1 Pandeglang**. Baca dokumen ini sebelum memberikan saran kode atau arsitektur.

---

## Developer Profile

- **Nama**: Yahya Zulfikri
- **Level**: Senior Developer
- **Bahasa**: Indonesia (penjelasan), English (kode & nama teknis)
- **Asumsi**: Sudah paham konsep dasar seperti instalasi, struktur folder standar, cara kerja framework — tidak perlu dijelaskan ulang kecuali diminta

---

# 📚 Dokumentasi Project PPDB

## MTsN 1 Pandeglang

---

## 🎯 Tentang Project

Sistem Penerimaan Peserta Didik Baru (PPDB) adalah aplikasi web berbasis **Laravel 12** dan **Filament v3** yang dirancang khusus untuk **MTsN 1 Pandeglang**. Sistem ini mengelola proses pendaftaran siswa baru secara digital — mulai dari registrasi akun, pengisian formulir, verifikasi berkas, penjadwalan tes, hingga pengumuman hasil seleksi.

Setiap data pendaftaran **diisolasi per tahun pendaftaran** (`tahun_pendaftaran_id`), sehingga data antar tahun ajaran tidak saling bercampur dan riwayat tiap periode PPDB tetap terjaga.

---

## 🏗️ Arsitektur Sistem

### Tech Stack

| Layer | Teknologi |
|---|---|
| Backend Framework | Laravel 12 |
| Admin Panel | Filament v3.3 |
| Database | MariaDB v11 |
| Cache / Session / OTP | Redis v8 |
| Runtime | Laravel Octane + FrankenPHP |
| Auth | Laravel Sanctum + Spatie Permission |
| File Storage | Laravel Storage (Private & Public) |
| PDF Generation | DomPDF |
| Styling | Tailwind CSS + Nord Theme |
| WhatsApp Notification | WhatsApp Gateway (sistem terpisah) |

### Konfigurasi WhatsApp Gateway

```env
WHATSAPP_ENDPOINT=https://wapi.zedlabs.id/api/messages/send
WHATSAPP_API_KEY=78606c1a720db7ec075dcc4eb81be4c6015cb8324f649bba
```

Integrasi dilakukan via HTTP POST ke endpoint di atas. Semua notifikasi (OTP, verifikasi, hasil seleksi, dll.) dikirim melalui gateway yang sama.

#### Contoh Service

```php
// app/Services/WhatsAppService.php

class WhatsAppService
{
    public function send(string $phone, string $message): bool
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.whatsapp.api_key'),
        ])->post(config('services.whatsapp.endpoint'), [
            'phone'   => $phone,
            'message' => $message,
        ]);

        return $response->successful();
    }
}
```

```php
// config/services.php
'whatsapp' => [
    'endpoint' => env('WHATSAPP_ENDPOINT'),
    'api_key'  => env('WHATSAPP_API_KEY'),
],
```

### Isolasi Data Per Tahun Pendaftaran

Semua entitas utama memiliki relasi ke `TahunPendaftaran`. Query wajib selalu di-scope berdasarkan `tahun_pendaftaran_id` yang aktif agar data antar periode tidak bercampur.

```php
// Contoh global scope pada CalonSiswa
protected static function booted(): void
{
    static::addGlobalScope('tahun_aktif', function (Builder $builder) {
        $tahun = TahunPendaftaran::where('status', 'Aktif')->first();
        if ($tahun) {
            $builder->where('tahun_pendaftaran_id', $tahun->id);
        }
    });
}
```

> Admin dapat menonaktifkan scope ini saat mengakses data historis lintas tahun.

---

## 🏫 Identitas Instansi

Project ini dikonfigurasi khusus untuk satu instansi:

| Field | Nilai |
|---|---|
| Nama | MTsN 1 Pandeglang |
| Jenjang | MTs (Madrasah Tsanawiyah) |
| Status | Negeri |

Branding, nama instansi, dan logo dikonfigurasi di `AdminPanelProvider` dan tidak bersifat multi-tenant.

---

## 🔑 Role & Akses

| Role | Deskripsi |
|---|---|
| `super_admin` | Full akses sistem, termasuk konfigurasi global |
| `admin` | Manajemen data master dan pengguna |
| `verifikator` | Review dan validasi formulir & berkas |
| `panitia` | Input nilai tes, assign jadwal, cetak kartu |
| `calon_siswa` | Registrasi, isi formulir, upload berkas, cetak dokumen |

Role `calon_siswa` di-assign otomatis saat registrasi via `User::booted()`.

---

## 📋 Alur Pendaftaran

### 1. Registrasi Akun
Calon siswa mengisi nama lengkap, username (NISN), nomor telepon (WhatsApp), email, dan password. Sistem membuat akun dengan `status_aktif = false`.

### 2. Verifikasi OTP via WhatsApp
- Sistem generate OTP 6 digit, disimpan di Redis dengan TTL 5 menit (`key: reset_otp:{user_id}`)
- OTP dikirim ke nomor WhatsApp via gateway
- Setelah OTP valid → `status_aktif = true`, `email_verified_at` terisi

### 3. Login
Login menggunakan username/email + password. Sistem memvalidasi credentials dan `status_aktif = true`.

### 4. Isi Formulir Prestasi *(Jalur Prestasi)*
Calon siswa memilih jenis prestasi dari `PrestasiPendaftaran` yang aktif, mengisi `nama_prestasi`, `tahun_prestasi`, `penyelenggara_prestasi`. Data disimpan ke `FormulirPrestasi` (belum upload berkas).

### 5. Isi Formulir Pendaftaran
Mengisi `FormulirPendaftaran` lengkap:
- Identitas diri: NIK, KK, akta, tempat/tanggal lahir, jenis kelamin, agama, dll.
- Data keluarga: ayah, ibu, wali (nama, NIK, alamat, pekerjaan, penghasilan, pendidikan)
- Alamat domisili dengan RT/RW + cascade dropdown wilayah
- Sekolah asal dari tabel `Instansi`
- Data KIP jika `penerima_kip = true`

Sistem generate `nomor_pendaftaran` otomatis, `status_formulir = Diproses`.

### 6. Upload Berkas Pendaftaran

| Berkas | Wajib |
|---|---|
| Foto formal berlatar merah | ✅ |
| Kartu Keluarga (KK) | ✅ |
| Akta Kelahiran | ✅ |
| Surat Keterangan Berkelakuan Baik (SKBB) | ✅ |
| Surat Keterangan Aktif Belajar (SKAB) | ✅ |
| Screenshot NISN | Opsional |
| Kartu Indonesia Pintar (KIP) | Opsional (jika penerima KIP) |

**Validasi:** format image/PDF, ukuran min 10 KB – max 1 MB.

### 7. Upload Berkas Prestasi *(Jalur Prestasi)*
Upload `berkas_prestasi` per entri `FormulirPrestasi`. Validasi format dan ukuran sama.

### 8. Validasi oleh Verifikator
Verifikator me-review formulir dan berkas. Status diubah ke `Disetujui` atau `Ditolak`. Notifikasi hasil dikirim via WhatsApp. Jika ditolak, calon siswa dapat merevisi.

### 9. Cetak Formulir Pendaftaran
Tersedia setelah `status_formulir = Disetujui`. PDF berisi nomor pendaftaran dan seluruh data tervalidasi.

### 10. Pengumuman Jalur Prestasi
Panitia input nilai prestasi → sistem ranking otomatis → generate `status_pendaftaran`. Notifikasi via WhatsApp. Yang **diterima** langsung mendapat kartu penempatan kelas; yang **tidak diterima** ikut tes akademik/praktik.

### 11. Cetak Kartu Tes
Panitia assign jadwal tes (tanggal, ruang, sesi) dan generate `tes_nomor`. Calon siswa cetak kartu tes.

### 12. Tes Akademik & Praktik
Panitia input `nilai_akademik_tes` dan `nilai_praktik_tes`. Sistem menghitung:

```
Nilai Total = (Nilai Akademik × Bobot%) + (Nilai Praktik × Bobot%)
```

Ranking tes di-generate otomatis.

### 13. Pengumuman Hasil Tes
Panitia tentukan passing grade dan kuota. Sistem generate `status_pendaftaran = Diterima / Tidak Diterima` berdasarkan ranking. Notifikasi via WhatsApp. Pengumuman dipublish di landing page sesuai jadwal `TahunPendaftaran`.

### 14. Cetak Dokumen Daftar Ulang
Calon siswa yang diterima dapat mencetak:
- Formulir Daftar Ulang
- Pakta Integritas Wali
- Pakta Integritas Siswa
- Tata Tertib Madrasah

Semua dokumen berisi nomor pendaftaran, data lengkap, dan QR code verifikasi.

### 15. Pemberkasan
Calon siswa datang ke sekolah membawa printout dokumen + berkas asli. Panitia verifikasi fisik dokumen.

### 16. MATSAMA
Calon siswa resmi terdaftar. Mengikuti Masa Ta'aruf Siswa Madrasah (MATSAMA). Data siap migrasi ke sistem akademik.

---

## 🔄 Reset Password via WhatsApp

1. Calon siswa input username/email/nomor telepon
2. Sistem validasi ke tabel `Users`, cek `status_aktif = true`
3. Generate OTP 6 digit → simpan di Redis TTL 5 menit (`key: reset_otp:{user_id}`)
4. OTP dikirim via WhatsApp gateway
5. Calon siswa input OTP → jika valid, generate token reset (TTL 15 menit) di Redis
6. Input password baru (min 8 karakter) → hash bcrypt → update ke `users`
7. Token dihapus dari Redis → notifikasi WhatsApp konfirmasi → redirect login

---

## 📦 Notifikasi WhatsApp

Semua notifikasi dikirim melalui `WhatsAppService`. Trigger notifikasi:

| Event | Penerima |
|---|---|
| Registrasi → OTP verifikasi | Calon Siswa |
| Lupa password → OTP reset | Calon Siswa |
| Password berhasil diubah | Calon Siswa |
| Formulir disetujui/ditolak | Calon Siswa |
| Pengumuman jalur prestasi | Calon Siswa |
| Pengumuman hasil tes | Calon Siswa |

---

## 🗄️ Database Schema (Highlights)

### Prinsip Isolasi Data

Setiap tabel utama memiliki kolom `tahun_pendaftaran_id` sebagai foreign key ke `tahun_pendaftarans`. Ini menjamin data tiap periode PPDB berdiri sendiri.

```
tahun_pendaftarans
    └── jalur_pendaftarans       (tahun_pendaftaran_id)
    └── calon_siswas             (tahun_pendaftaran_id)
    └── informasis               (tahun_pendaftaran_id)
    └── panitia (pimpinan, ketua, sekretaris, bendahara, anggota)
```

### `users`
```
name, username (NISN – unique), email (unique),
password (hashed), avatar, status (Aktif/Nonaktif), soft deletes
```

### `calon_siswas` (UUID PK)
```
90+ kolom — data pribadi, orang tua, alamat multi-level,
berkas dokumen, nilai tes, status pendaftaran
FK: tahun_pendaftaran_id, jalur_pendaftaran_id, sekolah_asal_id,
    kelas_id, ekstrakurikuler_id, mata_pelajaran_id,
    15x wilayah (negara/provinsi/kabupaten/kecamatan/kelurahan)
```

### Data Terenkripsi
```php
'nik'            => 'encrypted',
'kk'             => 'encrypted',
'ibu_nik'        => 'encrypted',
'ayah_nik'       => 'encrypted',
'wali_nik'       => 'encrypted',
'siswa_telepon'  => 'encrypted',
'ibu_telepon'    => 'encrypted',
'ayah_telepon'   => 'encrypted',
'wali_telepon'   => 'encrypted',
```

### Status Pendaftaran
```php
'Diproses'
'Berkas Tidak Lengkap'
'Diverifikasi'
'Ditolak'
'Diterima'
'Diterima Di Kelas Reguler'
'Diterima Di Kelas Unggulan'
```

### Wilayah Hierarchy
```
Negara → Provinsi → Kabupaten → Kecamatan → Kelurahan
```
Digunakan untuk alamat siswa, orang tua/wali, sekolah asal, dan sekolah tujuan.

---

## 🗓️ TahunPendaftaran — Milestone Dates

`TahunPendaftaran` menyimpan seluruh timeline PPDB per periode:

| Milestone | Field |
|---|---|
| Periode PPDB global | `tanggal_ppdb_mulai` / `selesai` |
| Pendaftaran Jalur Prestasi | `tanggal_pendaftaran_jalur_prestasi_mulai` / `selesai` |
| Pengumuman Jalur Prestasi | `tanggal_pengumuman_jalur_prestasi_mulai` / `selesai` |
| Pendaftaran Jalur Reguler | `tanggal_pendaftaran_jalur_reguler_mulai` / `selesai` |
| Pengumuman Jalur Reguler | `tanggal_pengumuman_jalur_reguler_mulai` / `selesai` |
| Pendaftaran Jalur Afirmasi | `tanggal_pendaftaran_jalur_afirmasi_mulai` / `selesai` |
| Pendaftaran Jalur Zonasi | `tanggal_pendaftaran_jalur_zonasi_mulai` / `selesai` |
| Pendaftaran Jalur Mutasi | `tanggal_pendaftaran_jalur_mutasi_mulai` / `selesai` |
| Penerbitan Kartu Tes | `tanggal_penerbitan_kartu_tes_mulai` / `selesai` |
| Tes Akademik | `tanggal_tes_akademik_mulai` / `selesai` |
| Tes Praktik | `tanggal_tes_praktik_mulai` / `selesai` |
| Registrasi Berkas | `tanggal_registrasi_berkas_mulai` / `selesai` |

---

## 🖨️ Dokumen PDF

| Dokumen | Trigger |
|---|---|
| Formulir Pendaftaran | `status_formulir = Disetujui` |
| Kartu Tes | Jadwal tes sudah di-assign oleh panitia |
| Kartu Penempatan Kelas | Diterima via jalur prestasi |
| Formulir Daftar Ulang | `status_pendaftaran = Diterima` |
| Pakta Integritas Wali | `status_pendaftaran = Diterima` |
| Pakta Integritas Siswa | `status_pendaftaran = Diterima` |
| Tata Tertib Madrasah | `status_pendaftaran = Diterima` |

---

## 🛡️ Keamanan

- Data sensitif (NIK, KK, telepon) dienkripsi di database via Laravel `encrypted` cast
- Role-Based Access Control via Spatie Laravel Permission + Filament Shield
- File upload divalidasi format (image/PDF) dan ukuran (10 KB – 1 MB)
- OTP disimpan di Redis dengan TTL terbatas (bukan di database)
- Soft delete untuk semua data penting (audit trail)
- CSRF protection, SQL injection prevention (Eloquent ORM), XSS protection (Blade)

---

## 🌐 Landing Page

| Halaman |
|---|
| Landing Page (beranda) |
| Autentikasi (login, register, lupa password) |
| Persyaratan Pendaftaran |
| Alur Pendaftaran |
| FAQ |
| Testimonial |
| Personil Madrasah |
| Program Madrasah |
| Ekstrakurikuler |
| Kebijakan Privasi |

---

## 📊 Widgets Dashboard

| Widget | Deskripsi |
|---|---|
| Total Pendaftar | Jumlah semua pendaftar tahun aktif |
| Total Per-Jalur | Breakdown per jalur pendaftaran |
| Total Per-Gender | Breakdown laki-laki / perempuan |
| Total Instansi | Jumlah sekolah asal yang mendaftar |

Semua widget di-scope ke `tahun_pendaftaran_id` aktif.

---

## 🔄 Import / Export

- Export ke Excel/CSV dengan pilihan kolom dan filter
- Import bulk via Excel/CSV dengan validasi per baris dan tracking baris gagal
- Background processing via Laravel Queue

### Field yang dapat diimport (`CalonSiswaImporter`)
```
nisn, nama, tes_sesi, tes_ruang,
tes_akademik, tes_praktik,
nilai_akademik, nilai_praktik,
status_pendaftaran, kelas (via relationship)
```

---

## 📦 Key Packages

| Package | Fungsi |
|---|---|
| `filament/filament` | Admin panel framework |
| `bezhansalleh/filament-shield` | Role & permission management |
| `spatie/laravel-permission` | RBAC system |
| `barryvdh/laravel-dompdf` | PDF generation |
| `flowframe/laravel-trend` | Statistik & trending |
| `diogogpinto/filament-auth-ui-enhancer` | Custom auth UI |
| `devonab/filament-easy-footer` | Custom footer |
| `andreia/filament-nord-theme` | Nord color theme |

---

## 🎨 Konfigurasi UI

```php
->darkModeBrandLogo(asset('/img/brand-darkmode.png'))
->brandLogo(asset('/img/brand-lightmode.png'))
->brandLogoHeight('2.6rem')
->favicon(asset('/favicon.ico'))
// Default: Dark mode, Primary: Green (Nord Palette), Font: Figtree
```

---

## 🚀 Setup & Deployment

```bash
# Development
composer install && npm install
cp .env.example .env && php artisan key:generate
php artisan migrate --seed
php artisan shield:install && php artisan shield:generate --all
composer dev  # Laravel + Queue + Pail + Vite

# Production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:optimize
```

---

## 🛠️ Artisan Commands

```bash
php artisan optimize:clear           # Clear semua cache
php artisan shield:generate --all    # Regenerate permissions
php artisan queue:work --tries=3     # Queue worker
php artisan pail --timeout=0         # Live log viewer
php artisan migrate:fresh --seed     # Reset database (dev only)
```

---

## ⚠️ Known Limitations

- Registrasi dibuka/tutup otomatis berdasarkan tanggal di `TahunPendaftaran` (tidak perlu toggle manual)
- File: max avatar 500 KB, max dokumen 1 MB, min 10 KB
- Concurrent updates: last-write-wins (belum ada optimistic locking)
- Data wilayah memerlukan seeding awal

---

## 🔮 Future Enhancements

- [ ] Advanced analytics dashboard (per-wilayah, per-sekolah asal)

---

## 👨‍💻 Developer

**Yahya Zulfikri**
Instagram: [@zulfikriyahya_](https://instagram.com/zulfikriyahya_)

---

**Version**: 2.0.0
**Last Updated**: March 2026
**License**: Proprietary — MTsN 1 Pandeglang
