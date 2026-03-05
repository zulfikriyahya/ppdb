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

Integrasi dilakukan via HTTP POST ke endpoint di atas. Header menggunakan `X-Api-Key`, body menggunakan `number` (format `628xx`) dan `message`. Semua notifikasi dikirim melalui gateway yang sama.

```php
// app/Services/WhatsAppService.php
class WhatsAppService
{
    public function send(string $phone, string $message): bool
    {
        $normalized = $this->normalizePhone($phone); // 08xx → 628xx

        $response = Http::withHeaders([
            'X-Api-Key' => config('services.whatsapp.api_key'),
        ])->post(config('services.whatsapp.endpoint'), [
            'number'  => $normalized,
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
// Global scope pada CalonSiswa — menggunakan once() agar tidak N+1
protected static function booted(): void
{
    static::addGlobalScope('tahun_aktif', function (Builder $builder) {
        $tahun = once(fn () => TahunPendaftaran::where('status', 'Aktif')->first());
        if ($tahun) {
            $builder->where('tahun_pendaftaran_id', $tahun->id);
        }
    });

    // Scope tambahan: calon_siswa hanya bisa lihat data milik sendiri
    static::addGlobalScope('milik_sendiri', function (Builder $builder) {
        if (auth()->check() && auth()->user()->hasRole('calon_siswa')) {
            $builder->where('user_id', auth()->id());
        }
    });
}
```

> Admin dapat menonaktifkan scope ini saat mengakses data historis lintas tahun menggunakan `withoutGlobalScopes()`.

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

Role `calon_siswa` di-assign otomatis saat registrasi via `User::booted()`. Super admin dikonfigurasi di `filament-shield.php` dengan `name = 'super_admin'` dan `define_via_gate = true`.

---

## 📋 Alur Pendaftaran

### 1. Registrasi Akun
Calon siswa mengisi nama lengkap, username (NISN — 10 digit, unique), nomor telepon (WhatsApp), email, dan password. Sistem membuat akun dengan `status = 'Aktif'` (default) dan `email_verified_at = null`.

Registrasi hanya dibuka jika `now()` berada dalam rentang `tanggal_ppdb_mulai` s/d `tanggal_ppdb_selesai` pada `TahunPendaftaran` yang aktif. Pengecekan dilakukan di `RegisterCustom::mount()` dengan cache 60 detik.

### 2. Verifikasi OTP via WhatsApp
- Sistem generate OTP 6 digit, disimpan di Redis TTL 5 menit (`key: otp:{user_id}`)
- Cooldown 60 detik per request (`key: otp_cooldown:{user_id}`)
- OTP dikirim ke nomor WhatsApp via `WhatsAppService`
- Setelah OTP valid → `email_verified_at = now()`, `status = 'Aktif'`, user di-login otomatis
- Redis key OTP & cooldown dihapus setelah verifikasi berhasil

### 3. Login
Login menggunakan email atau username (NISN). Sistem memvalidasi credentials via `LoginCustom` yang meng-override `getCredentialsFromFormData()` untuk detect tipe login.

### 4. Isi Formulir Prestasi *(Jalur Prestasi)*
Calon siswa memilih jenis prestasi dari master `Prestasi`, mengisi `nama_prestasi`, `tahun_prestasi`, `penyelenggara_prestasi`. Data disimpan ke tabel `formulir_prestasis` dengan `calon_siswa_id` (UUID FK) dan `prestasi_id`.

### 5. Isi Formulir Pendaftaran
Mengisi `CalonSiswa` lengkap:
- Identitas diri: NIK, KK, NISN, akta, tempat/tanggal lahir, jenis kelamin, agama, dll.
- Data keluarga: ayah, ibu, wali (nama, NIK, alamat, pekerjaan, penghasilan, pendidikan, status hidup/meninggal)
- Alamat domisili dengan cascade dropdown wilayah (Negara → Provinsi → Kabupaten → Kecamatan → Kelurahan)
- Sekolah asal dari tabel `SekolahAsal`
- Data KIP/KKS/PKH jika `penerima_kip = true`

`nomor_pendaftaran` di-generate otomatis saat `creating` dengan format `PPDB-{TAHUN}-{6 digit seq}`, menggunakan `lockForUpdate()` untuk mencegah race condition.

`status_formulir` default `'Diproses'`.

### 6. Upload Berkas Pendaftaran

| Berkas | Wajib |
|---|---|
| Foto formal berlatar merah (`berkas_foto`) | ✅ |
| Kartu Keluarga (`berkas_kk`) | ✅ |
| Akta Kelahiran (`berkas_akta`) | ✅ |
| Surat Keterangan Berkelakuan Baik (`berkas_skbb`) | ✅ |
| Surat Keterangan Aktif Belajar (`berkas_skab`) | ✅ |
| Screenshot NISN (`berkas_nisn`) | Opsional |
| Kartu Indonesia Pintar (`berkas_kip`) | Opsional |
| Berkas KKS (`berkas_kks`) | Opsional |
| Berkas PKH (`berkas_pkh`) | Opsional |

**Validasi:** format image/PDF, ukuran min 10 KB – max 1 MB.

### 7. Upload Berkas Prestasi *(Jalur Prestasi)*
Upload `berkas_prestasi` per entri `FormulirPrestasi`. Validasi format dan ukuran sama.

### 8. Validasi oleh Verifikator
Verifikator me-review formulir dan berkas. `status_formulir` diubah ke `'Disetujui'` atau `'Ditolak'`. Notifikasi hasil dikirim via WhatsApp.

### 9. Cetak Formulir Pendaftaran
Tersedia setelah `status_formulir = 'Disetujui'`. PDF dirender dari `resources/views/formulir.blade.php`.

### 10. Pengumuman Jalur Prestasi
Panitia input nilai prestasi → sistem ranking otomatis → generate `status_pendaftaran`. Notifikasi via WhatsApp. Yang **diterima** langsung mendapat kartu penempatan kelas; yang **tidak diterima** ikut tes akademik/praktik.

### 11. Cetak Kartu Tes
Panitia assign `tes_sesi`, `tes_ruang`, `tes_akademik` (datetime), `tes_praktik` (datetime). Calon siswa cetak kartu tes dari `resources/views/kartu-tes.blade.php`. Kartu memuat username (NISN) dan password (NIK) untuk login CBT.

### 12. Tes Akademik & Praktik
Panitia input `nilai_akademik` dan `nilai_praktik`. Sistem menghitung:

```
Nilai Total = (nilai_akademik × bobot_nilai_akademik%) + (nilai_praktik × bobot_nilai_praktik%)
```

### 13. Pengumuman Hasil Tes
Sistem generate `status_pendaftaran` berdasarkan ranking. Notifikasi via WhatsApp. PDF hasil dari `resources/views/skl.blade.php` — konten berubah dinamis tergantung periode pengumuman jalur yang sedang aktif.

### 14. Cetak Dokumen Daftar Ulang
Calon siswa yang diterima dapat mencetak dokumen daftar ulang (trigger: `status_pendaftaran = 'Diterima'`).

### 15. Pemberkasan & MATSAMA
Calon siswa datang membawa printout + berkas asli. Data siap migrasi ke sistem akademik.

---

## 🔄 Reset Password via WhatsApp

1. Input username / email / nomor telepon di `ForgotPasswordCustom`
2. Sistem cari user (`username OR email OR telepon`) dengan `status = 'Aktif'`
3. Cek cooldown 60 detik (`key: otp_cooldown:{user_id}`)
4. Generate OTP 6 digit → simpan di Redis TTL 5 menit (`key: reset_otp:{user_id}`)
5. Input OTP di `ResetPasswordOtp` → jika valid, generate token reset TTL 15 menit (`key: reset_token:{user_id}`)
6. Input password baru di `NewPassword` → hash bcrypt → update ke `users`
7. Hapus `reset_token`, `otp_cooldown` dari Redis → kirim notifikasi WhatsApp konfirmasi → redirect login

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

```
tahun_pendaftarans
    └── jalur_pendaftarans       (tahun_pendaftaran_id)
    └── calon_siswas             (tahun_pendaftaran_id)
    └── informasis               (tahun_pendaftaran_id)
    └── pimpinans                (tahun_pendaftaran_id)
    └── ketuas                   (tahun_pendaftaran_id)
    └── sekretaris               (tahun_pendaftaran_id)
    └── bendaharas               (tahun_pendaftaran_id)
    └── anggotas                 (tahun_pendaftaran_id)
```

### `users`
```
id, name (50), username (13, unique — NISN untuk calon_siswa),
telepon (20, nullable), status (Aktif/Nonaktif),
email (50, unique), email_verified_at, password (hashed),
avatar, remember_token, timestamps, soft_deletes
```

### `calon_siswas` (UUID PK)
```
id (uuid), user_id (FK), nomor_pendaftaran (unique),
tahun_pendaftaran_id (FK), nama, nisn (unique), nik (encrypted, unique),
kk (encrypted), tempat_lahir, tanggal_lahir, tahun_lulus,
jenis_kelamin (Pria/Wanita), golongan_darah, agama, anak_ke,
jumlah_saudara, tinggal_bersama, jarak_ke_sekolah, disabilitas,
tinggi_badan, berat_badan, penerima_kip (boolean),
no_kip, no_kks, no_pkh, siswa_telepon (encrypted),
siswa_alamat, 5x siswa_*_id (wilayah FK),
berkas_foto, berkas_kk, berkas_akta, berkas_kip, berkas_kks,
berkas_pkh, berkas_nisn, berkas_skbb, berkas_skab, berkas_prestasi,
[data ibu: nama, nik encrypted, telepon encrypted, pekerjaan,
 penghasilan, pendidikan, status, alamat, 5x ibu_*_id],
[data ayah: sama + kepemilikan_rumah],
[data wali: sama, semua nullable],
sekolah_asal_id, jalur_pendaftaran_id, prestasi_id,
ekstrakurikuler_id, mata_pelajaran_id, kelas_id,
bobot_nilai_akademik, bobot_nilai_praktik,
nilai_akademik, nilai_praktik,
status_pendaftaran (enum), status_formulir (enum),
tes_sesi, tes_ruang, tes_akademik (datetime), tes_praktik (datetime),
timestamps, soft_deletes
```

### `formulir_prestasis`
```
id, calon_siswa_id (char 36, FK UUID), prestasi_id (FK),
nama_prestasi, tahun_prestasi (year), penyelenggara_prestasi,
berkas_prestasi (nullable), timestamps
```

### Data Terenkripsi
```php
'nik'           => 'encrypted',
'kk'            => 'encrypted',
'ibu_nik'       => 'encrypted',
'ayah_nik'      => 'encrypted',
'wali_nik'      => 'encrypted',
'siswa_telepon' => 'encrypted',
'ibu_telepon'   => 'encrypted',
'ayah_telepon'  => 'encrypted',
'wali_telepon'  => 'encrypted',
```

### Status Formulir
```php
'Diproses'   // default saat formulir pertama dibuat
'Disetujui'
'Ditolak'
```

### Status Pendaftaran
```php
'Diproses'                  // default
'Berkas Tidak Lengkap'
'Diverifikasi'
'Tidak Diterima'
'Diterima'
'Diterima Di Kelas Reguler'
'Diterima Di Kelas Unggulan'
```

### Wilayah Hierarchy
```
Negara → Provinsi → Kabupaten → Kecamatan → Kelurahan
```
Digunakan untuk alamat siswa, orang tua/wali, sekolah asal, dan sekolah tujuan (15 FK total di `calon_siswas`).

### Master Data (Non-isolated)
```
prestasis      — jenis, nama, tingkat, kategori, peringkat
ekstrakurikulers — nama
mata_pelajarans  — nama
jurusans         — nama
kelas            — nama, jurusan_id
sekolah_asals    — nama, npsn, jenjang, status, wilayah, dll
sekolahs         — profil instansi MTsN, FK ke pimpinan
negaras / provinsis / kabupatens / kecamatans / kelurahans
```

---

## 🗓️ TahunPendaftaran — Milestone Dates

`TahunPendaftaran` menyimpan seluruh timeline PPDB per periode:

| Milestone | Field |
|---|---|
| Periode PPDB global | `tanggal_ppdb_mulai` / `tanggal_ppdb_selesai` |
| Pendaftaran Jalur Prestasi | `tanggal_pendaftaran_jalur_prestasi_mulai` / `_selesai` |
| Pengumuman Jalur Prestasi | `tanggal_pengumuman_jalur_prestasi_mulai` / `_selesai` |
| Pendaftaran Jalur Reguler | `tanggal_pendaftaran_jalur_reguler_mulai` / `_selesai` |
| Pengumuman Jalur Reguler | `tanggal_pengumuman_jalur_reguler_mulai` / `_selesai` |
| Pendaftaran Jalur Afirmasi | `tanggal_pendaftaran_jalur_afirmasi_mulai` / `_selesai` |
| Pengumuman Jalur Afirmasi | `tanggal_pengumuman_jalur_afirmasi_mulai` / `_selesai` |
| Pendaftaran Jalur Zonasi | `tanggal_pendaftaran_jalur_zonasi_mulai` / `_selesai` |
| Pengumuman Jalur Zonasi | `tanggal_pengumuman_jalur_zonasi_mulai` / `_selesai` |
| Pendaftaran Jalur Mutasi | `tanggal_pendaftaran_jalur_mutasi_mulai` / `_selesai` |
| Pengumuman Jalur Mutasi | `tanggal_pengumuman_jalur_mutasi_mulai` / `_selesai` |
| Penerbitan Kartu Tes | `tanggal_penerbitan_kartu_tes_mulai` / `_selesai` |
| Tes Akademik | `tanggal_tes_akademik_mulai` / `_selesai` |
| Tes Praktik | `tanggal_tes_praktik_mulai` / `_selesai` |
| Registrasi Berkas | `tanggal_registrasi_berkas_mulai` / `_selesai` |

Field tambahan: `kuantitas` (total daya tampung), `status` (Aktif/Nonaktif).

---

## 🖨️ Dokumen PDF

| Dokumen | View | Trigger |
|---|---|---|
| Formulir Pendaftaran | `formulir.blade.php` | `status_formulir = 'Disetujui'` |
| Kartu Tes | `kartu-tes.blade.php` | `tes_akademik` atau `tes_praktik` sudah di-assign |
| SKL / Pengumuman | `skl.blade.php` | `status_pendaftaran` sudah di-set |
| Dokumen Daftar Ulang | *(belum diimplementasi)* | `status_pendaftaran = 'Diterima'` |

Semua view PDF menerima variabel `$record` (instance `CalonSiswa`) dari action Filament. View juga mengambil data `Sekolah::first()`, `TahunPendaftaran` aktif, `Ketua`, `Sekretaris`, `Pimpinan` aktif per `tahun_pendaftaran_id`.

View `skl.blade.php` memiliki logika dinamis — konten teks pembuka dan tanggal TTD berubah sesuai periode pengumuman jalur yang sedang aktif (prestasi / reguler / afirmasi / zonasi / mutasi).

---

## 📊 Filament Resources

Setiap resource memiliki struktur pages standar: `List`, `Create`, `Edit`, `View`.

| Resource | Model | Catatan |
|---|---|---|
| `CalonSiswaResource` | `CalonSiswa` | Widget `FormulirOverview` |
| `UserResource` | `User` | Widget `UserRegisters` |
| `InformasiResource` | `Informasi` | Widget `InformasiPublished` |
| `TahunPendaftaranResource` | `TahunPendaftaran` | |
| `JalurPendaftaranResource` | `JalurPendaftaran` | |
| `FormulirPrestasiResource` | `FormulirPrestasi` | |
| `PrestasiResource` | `Prestasi` | |
| `SekolahResource` | `Sekolah` | Data instansi MTsN |
| `SekolahAsalResource` | `SekolahAsal` | |
| `KelasResource` | `Kelas` | |
| `JurusanResource` | `Jurusan` | |
| `EkstrakurikulerResource` | `Ekstrakurikuler` | |
| `MataPelajaranResource` | `MataPelajaran` | |
| `PimpinanResource` | `Pimpinan` | |
| `KetuaResource` | `Ketua` | |
| `SekretarisResource` | `Sekretaris` | |
| `BendaharaResource` | `Bendahara` | |
| `AnggotaResource` | `Anggota` | |
| `NegaraResource` | `Negara` | |
| `ProvinsiResource` | `Provinsi` | |
| `KabupatenResource` | `Kabupaten` | |
| `KecamatanResource` | `Kecamatan` | |
| `KelurahanResource` | `Kelurahan` | |
| `RoleResource` | `Role` (Spatie) | Via Filament Shield |

---

## 📤 Export / 📥 Import

### CalonSiswaExporter
Export ke Excel/CSV. Kolom yang tersedia mencakup semua field `CalonSiswa` beserta relasi (sekolah asal, jalur, prestasi, wilayah per entitas, berkas, nilai tes, dll.).

### CalonSiswaImporter
Import bulk via Excel/CSV. Field yang dapat diimport:

```
nisn (required), nama (required),
tes_sesi, tes_ruang, tes_akademik (date), tes_praktik (date),
bobot_nilai_akademik, bobot_nilai_praktik,
nilai_akademik, nilai_praktik,
status_pendaftaran, kelas (via relationship nama)
```

`resolveRecord()` menggunakan `firstOrNew(['nisn' => ...])` dengan `withoutGlobalScopes()` — update existing record jika NISN sudah ada, buat baru jika belum.

---

## 📦 Key Packages

| Package | Fungsi |
|---|---|
| `filament/filament` | Admin panel framework |
| `bezhansalleh/filament-shield` | Role & permission management |
| `spatie/laravel-permission` | RBAC system |
| `barryvdh/laravel-dompdf` | PDF generation |
| `flowframe/laravel-trend` | Statistik & trending |
| `diogogpinto/filament-auth-ui-enhancer` | Custom auth UI (split layout) |
| `devonab/filament-easy-footer` | Custom footer dengan load time |
| `andreia/filament-nord-theme` | Nord color theme |
| `laravel/octane` + FrankenPHP | High-performance runtime |
| `torgodly/html2media` | HTML to media export |

---

## 🎨 Konfigurasi UI

```php
->darkModeBrandLogo(asset('/img/brand-darkmode.png'))
->brandLogo(asset('/img/brand-lightmode.png'))
->brandLogoHeight('2.6rem')
->favicon(asset('/favicon.ico'))
->defaultThemeMode(ThemeMode::Dark)
->colors(['primary' => Color::Green])  // Nord Green palette
// Font: Figtree
// Layout: top navigation, full max content width, SPA mode
```

Auth UI menggunakan `AuthUIEnhancerPlugin` dengan form panel kiri (45%), background image kanan, form panel background `#010101`.

---

## 🔐 Auth Pages (Custom)

| Class | Route Name | Keterangan |
|---|---|---|
| `LoginCustom` | *(Filament default)* | Login via email atau username |
| `RegisterCustom` | *(Filament default)* | Cek jadwal PPDB, kirim OTP |
| `VerifikasiOtp` | `otp.verifikasi` | Verifikasi OTP registrasi |
| `ForgotPasswordCustom` | `otp.forgot-password` | Input identity, kirim OTP reset |
| `ResetPasswordOtp` | `otp.reset-password` | Verifikasi OTP reset |
| `NewPassword` | `otp.new-password` | Input password baru |
| `EditProfileCustom` | *(Filament profile)* | Edit profil + avatar |

Semua page OTP dilindungi via `session` check di `mount()`. Route didaftarkan di `routes/web.php` dengan middleware `web`.

---

## 🛡️ Keamanan

- Data sensitif (NIK, KK, telepon) dienkripsi via Laravel `encrypted` cast
- RBAC via Spatie Laravel Permission + Filament Shield (`policies_and_permissions`)
- File upload divalidasi format (image/PDF) dan ukuran (min 10 KB – max 1 MB); avatar max 500 KB
- OTP disimpan di Redis dengan TTL terbatas (bukan di database)
- Cooldown OTP 60 detik untuk mencegah spam
- Nomor pendaftaran di-generate dengan `lockForUpdate()` untuk concurrency safety
- Soft delete untuk semua data penting (audit trail)
- `calon_siswa` hanya bisa mengakses data milik sendiri via global scope `milik_sendiri`

---

## 🚀 Setup & Deployment

```bash
# Development
composer install && npm install
cp .env.example .env && php artisan key:generate
php artisan migrate --seed
php artisan shield:install && php artisan shield:generate --all
composer dev  # Laravel + Queue + Pail + Vite (concurrently)

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

- Registrasi dibuka/tutup otomatis berdasarkan tanggal `TahunPendaftaran` — tidak perlu toggle manual; cache 60 detik
- File: max avatar 500 KB, max dokumen 1 MB, min 10 KB
- Concurrent updates: last-write-wins (belum ada optimistic locking) — kecuali `nomor_pendaftaran` yang sudah pakai `lockForUpdate()`
- Data wilayah memerlukan seeding awal (data besar — Provinsi, Kabupaten, Kecamatan, Kelurahan Indonesia)
- `CalonSiswa` menggunakan UUID sebagai PK — FK dari tabel lain (`formulir_prestasis`) harus menggunakan `char(36)`, bukan `foreignId()`

---

## 🔮 Future Enhancements

- [ ] Advanced analytics dashboard (per-wilayah, per-sekolah asal)
- [ ] Dokumen daftar ulang (Pakta Integritas, Tata Tertib) — view `skl.blade.php` masih placeholder `<h1>2</h1>`, `<h1>3</h1>`, `<h1>4</h1>`
- [ ] Landing page publik (persyaratan, alur, FAQ, testimonial, dll.)

---

## 👨‍💻 Developer

**Yahya Zulfikri**
Instagram: [@zulfikriyahya_](https://instagram.com/zulfikriyahya_)

---

**Version**: 2.0.0
**Last Updated**: March 2026
**License**: Proprietary — MTsN 1 Pandeglang
