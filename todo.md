Berikut draft penjelasan untuk project ini:

---

# 📚 Dokumentasi Project PPDB (Penerimaan Peserta Didik Baru)

## 🎯 Tentang Project

Sistem Penerimaan Peserta Didik Baru (PPDB) adalah aplikasi web berbasis Laravel dan Filament yang dirancang untuk mengelola proses pendaftaran siswa baru secara digital. Sistem ini menyediakan fitur lengkap mulai dari pendaftaran online, verifikasi berkas, penjadwalan tes, hingga pengumuman hasil seleksi.

## 🏗️ Arsitektur Sistem

### Tech Stack
- **Framework Backend**: Laravel 12
- **Admin Panel**: Filament v3.3
- **Database**: MySQL/PostgreSQL (dengan migration support)
- **Authentication**: Laravel Sanctum + Spatie Permission
- **File Storage**: Laravel Storage (Private & Public)
- **PDF Generation**: DomPDF
- **Styling**: Tailwind CSS + Nord Theme

### Struktur Project
```
├── app/
│   ├── Models/           # 23 Model untuk entitas sistem
│   ├── Policies/         # Authorization policies
│   ├── Filament/
│   │   ├── Resources/    # Admin CRUD resources
│   │   ├── Pages/        # Custom pages (Auth, Dashboard)
│   │   ├── Exports/      # Export data handler
│   │   └── Imports/      # Import data handler
│   └── Providers/        # Service providers
├── database/
│   └── migrations/       # 27 Migration files
└── config/               # Configuration files
```

## 🔑 Fitur Utama

### 1. **Multi-Level Authentication**
- **Administrator**: Full akses sistem
- **Panitia PPDB**: Pimpinan, Ketua, Sekretaris, Bendahara, Anggota
- **Peserta**: Calon siswa yang mendaftar

### 2. **Manajemen Data Master**
- **Wilayah**: Negara → Provinsi → Kabupaten → Kecamatan → Kelurahan
- **Sekolah**: Data sekolah tujuan dan sekolah asal
- **Akademik**: Jurusan, Kelas, Mata Pelajaran, Ekstrakurikuler
- **Jalur Pendaftaran**: Prestasi, Reguler, Mutasi, Zonasi, Afirmasi

### 3. **Proses Pendaftaran**

#### Tahapan Pendaftaran
1. **Registrasi Akun** (NISN + Email)
2. **Pengisian Formulir**:
   - Data Pribadi Siswa (37+ field)
   - Data Orang Tua/Wali (Ibu, Ayah, Wali)
   - Data Alamat (menggunakan cascade dropdown wilayah)
   - Upload Berkas (10+ dokumen)
   - Data Prestasi (opsional)
   - Peminatan Ekstrakurikuler & Mata Pelajaran
3. **Verifikasi Berkas** oleh Panitia
4. **Penjadwalan Tes** (Akademik & Praktik)
5. **Input Nilai Tes**
6. **Pengumuman Hasil**

### 4. **Sistem Jalur Pendaftaran**

| Jalur | Deskripsi | Kriteria |
|-------|-----------|----------|
| **Prestasi** | Berdasarkan prestasi akademik/non-akademik | Hafalan Al-Quran, Olimpiade, Kejuaraan |
| **Reguler** | Jalur umum dengan tes | Nilai akademik + praktik |
| **Zonasi** | Berdasarkan jarak domisili | Radius dari sekolah |
| **Afirmasi** | Untuk siswa kurang mampu | KIP/KKS/PKH |
| **Mutasi** | Perpindahan dari sekolah lain | Surat keterangan mutasi |

### 5. **Manajemen Dokumen**
Sistem mengelola berbagai dokumen dengan enkripsi:
- ✅ Foto Siswa
- ✅ Kartu Keluarga (KK)
- ✅ Akta Kelahiran
- ✅ Kartu Indonesia Pintar (KIP)
- ✅ Kartu Keluarga Sejahtera (KKS)
- ✅ Program Keluarga Harapan (PKH)
- ✅ NISN
- ✅ Surat Keterangan (SKBB, SKAB)
- ✅ Sertifikat Prestasi

### 6. **Keamanan Data**

#### Data Terenkripsi
```php
protected $casts = [
    'nik' => 'encrypted',
    'kk' => 'encrypted',
    'ibu_nik' => 'encrypted',
    'ayah_nik' => 'encrypted',
    'wali_nik' => 'encrypted',
    'siswa_telepon' => 'encrypted',
    'ibu_telepon' => 'encrypted',
    'ayah_telepon' => 'encrypted',
    'wali_telepon' => 'encrypted',
];
```

#### Fitur Keamanan
- ✅ Email Verification
- ✅ Password Reset
- ✅ Soft Delete (Trash/Restore)
- ✅ Role-Based Access Control (RBAC)
- ✅ Activity Logging
- ✅ File Upload Validation

## 📊 Model & Relationships

### Core Models

#### 1. **CalonSiswa** (Calon Siswa)
Model utama dengan 90+ fields yang mencakup:
- Data pribadi lengkap
- Data orang tua (Ibu, Ayah, Wali)
- Alamat multi-level (6 relasi wilayah per entitas)
- Berkas dokumen (10 file uploads)
- Data tes dan nilai
- Status pendaftaran

**Relationships**:
```php
belongsTo: User, TahunPendaftaran, JalurPendaftaran, Prestasi,
           Ekstrakurikuler, MataPelajaran, Kelas, SekolahAsal,
           15x Wilayah (Negara, Provinsi, Kabupaten, Kecamatan, Kelurahan)
```

#### 2. **TahunPendaftaran** (Tahun Ajaran)
Mengatur periode PPDB dengan:
- 20+ tanggal milestone (per jalur pendaftaran)
- Status aktif/nonaktif
- Kuota penerimaan

#### 3. **JalurPendaftaran**
5 jalur penerimaan dengan kuota masing-masing:
- Prestasi
- Reguler
- Mutasi
- Zonasi
- Afirmasi

### Supporting Models

#### Wilayah (Geographic)
```
Negara (1) → Provinsi (N) → Kabupaten (N) → Kecamatan (N) → Kelurahan (N)
```

#### Panitia PPDB
- Pimpinan
- Ketua
- Sekretaris
- Bendahara
- Anggota

#### Akademik
- Sekolah / SekolahAsal
- Jurusan
- Kelas
- MataPelajaran
- Ekstrakurikuler
- Prestasi

## 🔐 Authorization System

### Roles & Permissions
Menggunakan **Spatie Laravel Permission** dengan **Filament Shield**:

```php
// Default roles
- administrator  // Full access
- peserta       // Auto-assigned saat registrasi
- panitia       // Staff PPDB
```

### Policy-Based Authorization
Setiap model memiliki Policy dengan 12 permissions:
- view, view_any
- create, update
- delete, delete_any
- restore, restore_any
- force_delete, force_delete_any
- replicate, reorder

## 📱 User Interface

### Custom Authentication Pages
1. **Login**
   - Support Email & NISN
   - Custom layout dengan gambar sidebar
   - Dark/Light mode

2. **Register**
   - Conditional visibility (berdasarkan periode PPDB)
   - Auto-assign role "peserta"
   - Email verification required

3. **Profile**
   - Avatar upload
   - Update data personal
   - Change password

### Dashboard Widgets
- Statistik pendaftar (per jalur)
- Informasi/Pengumuman
- User registration trends

### Features
- ✅ Top Navigation
- ✅ Global Search (disabled - custom search per resource)
- ✅ Database Notifications
- ✅ Export/Import (Excel/CSV)
- ✅ Bulk Actions
- ✅ Custom Footer
- ✅ Responsive Design

## 🗄️ Database Schema

### Migration Highlights

#### Users Table
```php
- name (indexed)
- username (unique, indexed) // NISN untuk peserta
- email (unique)
- password (hashed)
- avatar
- status (Aktif/Nonaktif)
- soft deletes
```

#### Calon Siswas Table (UUID Primary Key)
```php
- 90+ columns
- Foreign keys ke 15+ tables
- Encrypted sensitive data
- Soft deletes
- Timestamps
```

#### Unique Constraints
- NISN (unique di users & calon_siswas)
- NIK siswa (unique, encrypted)
- No. KIP/KKS/PKH (unique, nullable)

## 🚀 Deployment & Configuration

### Environment Setup
```bash
# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Seed initial data
php artisan db:seed

# Generate Filament resources
php artisan shield:install
php artisan shield:generate --all
```

### Development Server
```bash
# Concurrent development
composer dev
# Runs: Laravel server + Queue worker + Pail logs + Vite dev server
```

### Production Optimizations
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:optimize
```

## 📋 Business Logic

### Registration Flow Control

#### AdminPanelProvider Logic
```php
protected function handleRegistrationRedirect(): string
{
    // Cek periode PPDB aktif
    // Jika di luar periode → LoginCustom (disable registrasi)
    // Jika dalam periode → RegisterCustom (enable registrasi)
}
```

### Status Pendaftaran
```php
enum StatusPendaftaran {
    'Diproses'
    'Berkas Tidak Lengkap'
    'Diverifikasi'
    'Ditolak'
    'Diterima'
    'Diterima Di Kelas Reguler'
    'Diterima Di Kelas Unggulan'
}
```

### Scoring System
```php
// Nilai Akhir = (Nilai Akademik × Bobot) + (Nilai Praktik × Bobot)
bobot_nilai_akademik    // Persentase (e.g., 60%)
bobot_nilai_praktik     // Persentase (e.g., 40%)
nilai_akademik          // Score tes akademik
nilai_praktik           // Score tes praktik
```

## 🎨 Customization

### Theme
- **Package**: `andreia/filament-nord-theme`
- **Default Mode**: Dark
- **Colors**: Nord Color Palette (Primary: Green)
- **Fonts**: Figtree

### Branding
```php
->darkModeBrandLogo(asset('/img/brand-darkmode.png'))
->brandLogo(asset('/img/brand-lightmode.png'))
->brandLogoHeight('2.6rem')
->favicon(asset('/favicon.ico'))
```

## 📦 Key Packages

| Package | Fungsi |
|---------|--------|
| `filament/filament` | Admin panel framework |
| `bezhansalleh/filament-shield` | Role & permission management |
| `barryvdh/laravel-dompdf` | PDF generation |
| `flowframe/laravel-trend` | Data trending/statistics |
| `spatie/laravel-permission` | RBAC system |
| `diogogpinto/filament-auth-ui-enhancer` | Custom auth UI |
| `devonab/filament-easy-footer` | Custom footer |

## 🔄 Data Import/Export

### Export Features
- Export to Excel/CSV
- Custom column selection
- Filtered exports
- Background processing

### Import Features
- Bulk import via Excel/CSV
- Validation per row
- Failed row tracking
- Update existing records

### CalonSiswaImporter
```php
Importable fields:
- nisn, nama
- tes_sesi, tes_ruang
- tes_akademik, tes_praktik
- nilai_akademik, nilai_praktik
- status_pendaftaran
- kelas (via relationship)
```

## 📈 Reporting

### Available Reports
1. Daftar pendaftar (per jalur/status)
2. Hasil tes (ranking)
3. Statistik pendaftar (per wilayah/sekolah asal)
4. Laporan berkas
5. Jadwal tes

## 🛠️ Maintenance

### Artisan Commands
```bash
# Clear all caches
php artisan optimize:clear

# Regenerate permissions
php artisan shield:generate --all

# Queue management
php artisan queue:work --tries=3

# View logs
php artisan pail --timeout=0
```

## 📝 Best Practices

### Code Standards
- ✅ PSR-12 Coding Standard
- ✅ Laravel Pint (formatting)
- ✅ Type hints
- ✅ Model relationships documentation
- ✅ Migration naming conventions

### Security
- ✅ Data encryption (NIK, phone numbers)
- ✅ File upload validation
- ✅ CSRF protection
- ✅ SQL injection prevention (Eloquent ORM)
- ✅ XSS protection (Blade templating)

## 🐛 Known Limitations

1. **Registration Period**: Manual toggle di AdminPanelProvider
2. **File Size**: Max 500KB untuk avatar, 5MB untuk dokumen
3. **Concurrent Updates**: Last-write-wins (no optimistic locking)
4. **Wilayah Data**: Requires initial seeding

## 🔮 Future Enhancements

- [ ] Real-time notifications (Pusher/WebSockets)
- [ ] SMS gateway integration
- [ ] Payment gateway (biaya pendaftaran)
- [ ] Mobile app (Flutter/React Native)
- [ ] AI-based document verification
- [ ] Advanced analytics dashboard
- [ ] Multi-language support

## 👨‍💻 Developer Notes

### Local Development
```bash
# Database reset (WARNING: deletes all data)
php artisan migrate:fresh --seed

# Create new resource
php artisan make:filament-resource ModelName --generate

# Create new policy
php artisan make:policy ModelNamePolicy --model=ModelName
```

### Testing
```bash
# Run tests
php artisan test

# Run specific test
php artisan test --filter=TestName
```

---

## 📞 Support & Credits

**Developer**: Yahya Zulfikri
**Instagram**: [@zulfikriyahya_](https://instagram.com/zulfikriyahya_)

**Built with**:
- ❤️ Laravel Framework
- 🎨 Filament Admin Panel
- 🔐 Spatie Permission
- 📊 Flowframe Trend

---

**Version**: 1.0.0
**Last Updated**: March 2026
**License**: Proprietary

---

Apakah ada bagian tertentu yang ingin saya perjelas atau tambahkan detail lebih lanjut?
