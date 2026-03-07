# Laravel Project Blueprint — PPDB MTsN 1 Pandeglang

> Auto-generated. Berisi seluruh file inti project.
> Dikecualikan: node_modules, vendor, tests, .yarn, public/vendor,
>               public/build, storage, bootstrap/cache, dan file biner.

## 🗂️ File Tree

```
app/Models/Anggota.php
app/Models/Bendahara.php
app/Models/CalonSiswa.php
app/Models/Ekstrakurikuler.php
app/Models/FormulirPrestasi.php
app/Models/Informasi.php
app/Models/JalurPendaftaran.php
app/Models/Jurusan.php
app/Models/Kabupaten.php
app/Models/Kecamatan.php
app/Models/Kelas.php
app/Models/Kelurahan.php
app/Models/Ketua.php
app/Models/MataPelajaran.php
app/Models/Negara.php
app/Models/Pimpinan.php
app/Models/Prestasi.php
app/Models/Provinsi.php
app/Models/SekolahAsal.php
app/Models/Sekolah.php
app/Models/Sekretaris.php
app/Models/TahunPendaftaran.php
app/Models/User.php
app/Policies/AnggotaPolicy.php
app/Policies/BendaharaPolicy.php
app/Policies/CalonSiswaPolicy.php
app/Policies/EkstrakurikulerPolicy.php
app/Policies/InformasiPolicy.php
app/Policies/JalurPendaftaranPolicy.php
app/Policies/JurusanPolicy.php
app/Policies/KabupatenPolicy.php
app/Policies/KecamatanPolicy.php
app/Policies/KelasPolicy.php
app/Policies/KelurahanPolicy.php
app/Policies/KetuaPolicy.php
app/Policies/MataPelajaranPolicy.php
app/Policies/NegaraPolicy.php
app/Policies/PimpinanPolicy.php
app/Policies/PrestasiPolicy.php
app/Policies/ProvinsiPolicy.php
app/Policies/RolePolicy.php
app/Policies/SekolahAsalPolicy.php
app/Policies/SekolahPolicy.php
app/Policies/SekretarisPolicy.php
app/Policies/TahunPendaftaranPolicy.php
app/Policies/UserPolicy.php
app/Services/WhatsAppService.php
app/Helpers/PdfDataHelper.php
app/Constants/FormOptions.php
app/Http/Controllers/Controller.php
app/Http/Controllers/LandingController.php
app/Filament/Resources/AnggotaResource/Pages/CreateAnggota.php
app/Filament/Resources/AnggotaResource/Pages/EditAnggota.php
app/Filament/Resources/AnggotaResource/Pages/ListAnggotas.php
app/Filament/Resources/AnggotaResource/Pages/ViewAnggota.php
app/Filament/Resources/AnggotaResource.php
app/Filament/Resources/BendaharaResource/Pages/CreateBendahara.php
app/Filament/Resources/BendaharaResource/Pages/EditBendahara.php
app/Filament/Resources/BendaharaResource/Pages/ListBendaharas.php
app/Filament/Resources/BendaharaResource/Pages/ViewBendahara.php
app/Filament/Resources/BendaharaResource.php
app/Filament/Resources/CalonSiswaResource/Pages/CreateCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Pages/EditCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Pages/ListCalonSiswas.php
app/Filament/Resources/CalonSiswaResource/Pages/ViewCalonSiswa.php
app/Filament/Resources/CalonSiswaResource.php
app/Filament/Resources/CalonSiswaResource/Widgets/FormulirOverview.php
app/Filament/Resources/EkstrakurikulerResource/Pages/CreateEkstrakurikuler.php
app/Filament/Resources/EkstrakurikulerResource/Pages/EditEkstrakurikuler.php
app/Filament/Resources/EkstrakurikulerResource/Pages/ListEkstrakurikulers.php
app/Filament/Resources/EkstrakurikulerResource/Pages/ViewEkstrakurikuler.php
app/Filament/Resources/EkstrakurikulerResource.php
app/Filament/Resources/FormulirPrestasiResource/Pages/CreateFormulirPrestasi.php
app/Filament/Resources/FormulirPrestasiResource/Pages/EditFormulirPrestasi.php
app/Filament/Resources/FormulirPrestasiResource/Pages/ListFormulirPrestasis.php
app/Filament/Resources/FormulirPrestasiResource/Pages/ViewFormulirPrestasi.php
app/Filament/Resources/FormulirPrestasiResource.php
app/Filament/Resources/InformasiResource/Pages/CreateInformasi.php
app/Filament/Resources/InformasiResource/Pages/EditInformasi.php
app/Filament/Resources/InformasiResource/Pages/ListInformasis.php
app/Filament/Resources/InformasiResource/Pages/ViewInformasi.php
app/Filament/Resources/InformasiResource.php
app/Filament/Resources/InformasiResource/Widgets/InformasiPublished.php
app/Filament/Resources/JalurPendaftaranResource/Pages/CreateJalurPendaftaran.php
app/Filament/Resources/JalurPendaftaranResource/Pages/EditJalurPendaftaran.php
app/Filament/Resources/JalurPendaftaranResource/Pages/ListJalurPendaftarans.php
app/Filament/Resources/JalurPendaftaranResource/Pages/ViewJalurPendaftaran.php
app/Filament/Resources/JalurPendaftaranResource.php
app/Filament/Resources/JurusanResource/Pages/CreateJurusan.php
app/Filament/Resources/JurusanResource/Pages/EditJurusan.php
app/Filament/Resources/JurusanResource/Pages/ListJurusans.php
app/Filament/Resources/JurusanResource/Pages/ViewJurusan.php
app/Filament/Resources/JurusanResource.php
app/Filament/Resources/KabupatenResource/Pages/CreateKabupaten.php
app/Filament/Resources/KabupatenResource/Pages/EditKabupaten.php
app/Filament/Resources/KabupatenResource/Pages/ListKabupatens.php
app/Filament/Resources/KabupatenResource/Pages/ViewKabupaten.php
app/Filament/Resources/KabupatenResource.php
app/Filament/Resources/KecamatanResource/Pages/CreateKecamatan.php
app/Filament/Resources/KecamatanResource/Pages/EditKecamatan.php
app/Filament/Resources/KecamatanResource/Pages/ListKecamatans.php
app/Filament/Resources/KecamatanResource/Pages/ViewKecamatan.php
app/Filament/Resources/KecamatanResource.php
app/Filament/Resources/KelasResource/Pages/CreateKelas.php
app/Filament/Resources/KelasResource/Pages/EditKelas.php
app/Filament/Resources/KelasResource/Pages/ListKelas.php
app/Filament/Resources/KelasResource/Pages/ViewKelas.php
app/Filament/Resources/KelasResource.php
app/Filament/Resources/KelurahanResource/Pages/CreateKelurahan.php
app/Filament/Resources/KelurahanResource/Pages/EditKelurahan.php
app/Filament/Resources/KelurahanResource/Pages/ListKelurahans.php
app/Filament/Resources/KelurahanResource/Pages/ViewKelurahan.php
app/Filament/Resources/KelurahanResource.php
app/Filament/Resources/KetuaResource/Pages/CreateKetua.php
app/Filament/Resources/KetuaResource/Pages/EditKetua.php
app/Filament/Resources/KetuaResource/Pages/ListKetuas.php
app/Filament/Resources/KetuaResource/Pages/ViewKetua.php
app/Filament/Resources/KetuaResource.php
app/Filament/Resources/MataPelajaranResource/Pages/CreateMataPelajaran.php
app/Filament/Resources/MataPelajaranResource/Pages/EditMataPelajaran.php
app/Filament/Resources/MataPelajaranResource/Pages/ListMataPelajarans.php
app/Filament/Resources/MataPelajaranResource/Pages/ViewMataPelajaran.php
app/Filament/Resources/MataPelajaranResource.php
app/Filament/Resources/NegaraResource/Pages/CreateNegara.php
app/Filament/Resources/NegaraResource/Pages/EditNegara.php
app/Filament/Resources/NegaraResource/Pages/ListNegaras.php
app/Filament/Resources/NegaraResource/Pages/ViewNegara.php
app/Filament/Resources/NegaraResource.php
app/Filament/Resources/PimpinanResource/Pages/CreatePimpinan.php
app/Filament/Resources/PimpinanResource/Pages/EditPimpinan.php
app/Filament/Resources/PimpinanResource/Pages/ListPimpinans.php
app/Filament/Resources/PimpinanResource/Pages/ViewPimpinan.php
app/Filament/Resources/PimpinanResource.php
app/Filament/Resources/PrestasiResource/Pages/CreatePrestasi.php
app/Filament/Resources/PrestasiResource/Pages/EditPrestasi.php
app/Filament/Resources/PrestasiResource/Pages/ListPrestasis.php
app/Filament/Resources/PrestasiResource/Pages/ViewPrestasi.php
app/Filament/Resources/PrestasiResource.php
app/Filament/Resources/ProvinsiResource/Pages/CreateProvinsi.php
app/Filament/Resources/ProvinsiResource/Pages/EditProvinsi.php
app/Filament/Resources/ProvinsiResource/Pages/ListProvinsis.php
app/Filament/Resources/ProvinsiResource/Pages/ViewProvinsi.php
app/Filament/Resources/ProvinsiResource.php
app/Filament/Resources/RoleResource/Pages/CreateRole.php
app/Filament/Resources/RoleResource/Pages/EditRole.php
app/Filament/Resources/RoleResource/Pages/ListRoles.php
app/Filament/Resources/RoleResource/Pages/ViewRole.php
app/Filament/Resources/RoleResource.php
app/Filament/Resources/SekolahAsalResource/Concerns/HasSekolahAsalWizardSteps.php
app/Filament/Resources/SekolahAsalResource/Pages/CreateSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/EditSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/ListSekolahAsals.php
app/Filament/Resources/SekolahAsalResource/Pages/ViewSekolahAsal.php
app/Filament/Resources/SekolahAsalResource.php
app/Filament/Resources/SekolahResource/Concerns/HasSekolahWizardSteps.php
app/Filament/Resources/SekolahResource/Pages/CreateSekolah.php
app/Filament/Resources/SekolahResource/Pages/EditSekolah.php
app/Filament/Resources/SekolahResource/Pages/ListSekolahs.php
app/Filament/Resources/SekolahResource/Pages/ViewSekolah.php
app/Filament/Resources/SekolahResource.php
app/Filament/Resources/SekretarisResource/Pages/CreateSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/EditSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/ListSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/ViewSekretaris.php
app/Filament/Resources/SekretarisResource.php
app/Filament/Resources/TahunPendaftaranResource/Pages/CreateTahunPendaftaran.php
app/Filament/Resources/TahunPendaftaranResource/Pages/EditTahunPendaftaran.php
app/Filament/Resources/TahunPendaftaranResource/Pages/ListTahunPendaftarans.php
app/Filament/Resources/TahunPendaftaranResource/Pages/ViewTahunPendaftaran.php
app/Filament/Resources/TahunPendaftaranResource.php
app/Filament/Resources/UserResource/Pages/CreateUser.php
app/Filament/Resources/UserResource/Pages/EditUser.php
app/Filament/Resources/UserResource/Pages/ListUsers.php
app/Filament/Resources/UserResource/Pages/ViewUser.php
app/Filament/Resources/UserResource.php
app/Filament/Resources/UserResource/Widgets/UserRegisters.php
app/Filament/Exports/CalonSiswaExporter.php
app/Filament/Imports/CalonSiswaImporter.php
app/Filament/Pages/Auth/EditProfileCustom.php
app/Filament/Pages/Auth/ForgotPasswordCustom.php
app/Filament/Pages/Auth/LoginCustom.php
app/Filament/Pages/Auth/NewPassword.php
app/Filament/Pages/Auth/RegisterCustom.php
app/Filament/Pages/Auth/ResetPasswordOtp.php
app/Filament/Pages/Auth/VerifikasiOtp.php
app/Filament/Concerns/HasPanitiaWizardSteps.php
app/Filament/Traits/CalonSiswaFormTrait.php
app/Providers/AppServiceProvider.php
app/Providers/Filament/AdminPanelProvider.php
app/Jobs/SendWhatsAppJob.php
app/Observers/CalonSiswaObserver.php
database/migrations/0001_01_01_000000_create_users_table.php
database/migrations/0001_01_01_000001_create_calon_siswas_table.php
database/migrations/0001_01_01_000002_create_cache_table.php
database/migrations/0001_01_01_000003_create_jobs_table.php
database/migrations/2025_03_07_143839_create_tahun_pendaftarans_table.php
database/migrations/2025_03_07_143840_create_pimpinans_table.php
database/migrations/2025_03_07_143841_create_ketuas_table.php
database/migrations/2025_03_07_143842_create_sekretaris_table.php
database/migrations/2025_03_07_143843_create_bendaharas_table.php
database/migrations/2025_03_07_143844_create_negaras_table.php
database/migrations/2025_03_07_143845_create_provinsis_table.php
database/migrations/2025_03_07_143846_create_kabupatens_table.php
database/migrations/2025_03_07_143847_create_kecamatans_table.php
database/migrations/2025_03_07_143848_create_kelurahans_table.php
database/migrations/2025_03_07_143849_create_informasis_table.php
database/migrations/2025_03_07_143850_create_sekolahs_table.php
database/migrations/2025_03_07_143851_create_sekolah_asals_table.php
database/migrations/2025_03_07_143853_create_prestasis_table.php
database/migrations/2025_03_07_143854_create_jalur_pendaftarans_table.php
database/migrations/2025_03_07_143855_create_kelas_table.php
database/migrations/2025_03_07_143958_create_notifications_table.php
database/migrations/2025_03_10_000722_create_anggotas_table.php
database/migrations/2025_03_11_203459_create_jurusans_table.php
database/migrations/2025_03_11_221601_create_ekstrakurikulers_table.php
database/migrations/2025_03_16_043544_create_imports_table.php
database/migrations/2025_03_16_043545_create_exports_table.php
database/migrations/2025_03_16_043546_create_failed_import_rows_table.php
database/migrations/2025_03_17_054959_create_mata_pelajarans_table.php
database/migrations/2025_03_17_192122_create_permission_tables.php
database/migrations/2026_03_05_060527_create_formulir_prestasis.php
routes/api.php
routes/console.php
routes/web.php
resources/views/filament/pages/auth/forgot-password-custom.blade.php
resources/views/filament/pages/auth/new-password.blade.php
resources/views/filament/pages/auth/reset-password-otp.blade.php
resources/views/filament/pages/auth/verifikasi-otp.blade.php
resources/views/formulir.blade.php
resources/views/kartu-tes.blade.php
resources/views/landing.blade.php
resources/views/partials/pdf-header.blade.php
resources/views/skl.blade.php
resources/views/vendor/filament-easy-footer/easy-footer.blade.php
resources/views/vendor/filament-easy-footer/github-version.blade.php
resources/views/vendor/filament-easy-footer/.gitkeep
resources/css/app.css
resources/css/filament/admin/tailwind.config.js
resources/css/filament/admin/theme.css
resources/js/app.js
resources/js/bootstrap.js
config/app.php
config/auth.php
config/cache.php
config/database.php
config/filament-easy-footer.php
config/filament.php
config/filament-shield.php
config/filesystems.php
config/logging.php
config/mail.php
config/permission.php
config/queue.php
config/sanctum.php
config/services.php
config/session.php
bootstrap/app.php
bootstrap/providers.php
public/.htaccess
public/index.php
public/js/devonab/filament-easy-footer/filament-easy-footer-scripts.js
public/robots.txt
composer.json
.env.example
package.json
postcss.config.js
tailwind.config.js
vite.config.js
```

---

## 🗃️ Models

### 📄 `./app/Models/Anggota.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'tahun_pendaftaran_id',
        'berkas_foto',
        'berkas_tte',
        'berkas_sk',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/Bendahara.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bendahara extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'tahun_pendaftaran_id',
        'berkas_foto',
        'berkas_tte',
        'berkas_sk',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/CalonSiswa.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class CalonSiswa extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'user_id',
        'tahun_pendaftaran_id',
        'nomor_pendaftaran',
        'nama',
        'nik',
        'kk',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'tahun_lulus',
        'jenis_kelamin',
        'golongan_darah',
        'agama',
        'anak_ke',
        'jumlah_saudara',
        'tinggal_bersama',
        'jarak_ke_sekolah',
        'disabilitas',
        'tinggi_badan',
        'berat_badan',
        'penerima_kip',
        'no_kip',
        'no_kks',
        'no_pkh',
        'siswa_telepon',
        'siswa_alamat',
        'siswa_negara_id',
        'siswa_provinsi_id',
        'siswa_kabupaten_id',
        'siswa_kecamatan_id',
        'siswa_kelurahan_id',
        'berkas_foto',
        'berkas_kk',
        'berkas_akta',
        'berkas_kip',
        'berkas_kks',
        'berkas_pkh',
        'berkas_nisn',
        'berkas_skbb',
        'berkas_skab',
        'berkas_prestasi',
        'ibu_nama',
        'ibu_nik',
        'ibu_telepon',
        'ibu_pekerjaan',
        'ibu_penghasilan',
        'ibu_pendidikan',
        'ibu_status',
        'ibu_alamat',
        'ibu_negara_id',
        'ibu_provinsi_id',
        'ibu_kabupaten_id',
        'ibu_kecamatan_id',
        'ibu_kelurahan_id',
        'ayah_nama',
        'ayah_nik',
        'ayah_telepon',
        'ayah_pekerjaan',
        'ayah_penghasilan',
        'ayah_pendidikan',
        'ayah_status',
        'ayah_alamat',
        'ayah_negara_id',
        'ayah_provinsi_id',
        'ayah_kabupaten_id',
        'ayah_kecamatan_id',
        'ayah_kelurahan_id',
        'wali_nama',
        'wali_nik',
        'wali_telepon',
        'wali_pekerjaan',
        'wali_penghasilan',
        'wali_pendidikan',
        'wali_status',
        'wali_alamat',
        'wali_negara_id',
        'wali_provinsi_id',
        'wali_kabupaten_id',
        'wali_kecamatan_id',
        'wali_kelurahan_id',
        'sekolah_asal_id',
        'jalur_pendaftaran_id',
        'prestasi_id',
        'ekstrakurikuler_id',
        'mata_pelajaran_id',
        'bobot_nilai_akademik',
        'bobot_nilai_praktik',
        'nilai_akademik',
        'nilai_praktik',
        'status_pendaftaran',
        'status_formulir',
        'kelas_id',
        'tes_sesi',
        'tes_ruang',
        'tes_akademik',
        'tes_praktik',
        'kepemilikan_rumah',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'penerima_kip' => 'boolean',
        'tahun_pendaftaran_id' => 'integer',
        'user_id' => 'integer',
        'siswa_negara_id' => 'integer',
        'siswa_provinsi_id' => 'integer',
        'siswa_kabupaten_id' => 'integer',
        'siswa_kecamatan_id' => 'integer',
        'siswa_kelurahan_id' => 'integer',
        'ibu_negara_id' => 'integer',
        'ibu_provinsi_id' => 'integer',
        'ibu_kabupaten_id' => 'integer',
        'ibu_kecamatan_id' => 'integer',
        'ibu_kelurahan_id' => 'integer',
        'ayah_negara_id' => 'integer',
        'ayah_provinsi_id' => 'integer',
        'ayah_kabupaten_id' => 'integer',
        'ayah_kecamatan_id' => 'integer',
        'ayah_kelurahan_id' => 'integer',
        'wali_negara_id' => 'integer',
        'wali_provinsi_id' => 'integer',
        'wali_kabupaten_id' => 'integer',
        'wali_kecamatan_id' => 'integer',
        'wali_kelurahan_id' => 'integer',
        'sekolah_asal_id' => 'integer',
        'jalur_pendaftaran_id' => 'integer',
        'kelas_id' => 'integer',
        'tes_akademik' => 'datetime',
        'tes_praktik' => 'datetime',
        'ekstrakurikuler_id' => 'integer',
        'mata_pelajaran_id' => 'integer',
        'prestasi_id' => 'integer',
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

    protected static function booted(): void
    {
        // Scope 1: Isolasi per tahun pendaftaran aktif menggunakan Cache Forever
        static::addGlobalScope('tahun_aktif', function (Builder $builder) {
            $tahun = Cache::rememberForever('tahun_pendaftaran_aktif', fn () => TahunPendaftaran::where('status', 'Aktif')->first());
            if ($tahun) {
                $builder->where('tahun_pendaftaran_id', $tahun->id);
            }
        });

        // Scope 2: calon_siswa hanya bisa lihat data milik sendiri
        static::addGlobalScope('milik_sendiri', function (Builder $builder) {
            if (auth()->check() && auth()->user()->hasRole('calon_siswa')) {
                $builder->where('user_id', auth()->id());
            }
        });

        // Auto-generate nomor_pendaftaran
        static::creating(function (CalonSiswa $model) {
            if (empty($model->nomor_pendaftaran)) {
                $model->nomor_pendaftaran = static::generateNomorPendaftaran();
            }
        });
    }

    public static function generateNomorPendaftaran(): string
    {
        $tahun = Cache::rememberForever('tahun_pendaftaran_aktif', fn () => TahunPendaftaran::where('status', 'Aktif')->first());
        $prefix = 'PPDB-'.($tahun ? substr($tahun->nama, 0, 4) : date('Y'));

        $last = static::withoutGlobalScopes()
            ->where('nomor_pendaftaran', 'like', $prefix.'-%')
            ->orderByDesc('nomor_pendaftaran')
            ->lockForUpdate()
            ->value('nomor_pendaftaran');

        $seq = $last ? ((int) substr($last, -6)) + 1 : 1;

        return $prefix.'-'.str_pad($seq, 6, '0', STR_PAD_LEFT);
    }

    // -----------------------------------------------------------------------
    // Relationships
    // -----------------------------------------------------------------------

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function prestasi(): BelongsTo
    {
        return $this->belongsTo(Prestasi::class, 'prestasi_id');
    }

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }

    public function jalurPendaftaran(): BelongsTo
    {
        return $this->belongsTo(JalurPendaftaran::class, 'jalur_pendaftaran_id');
    }

    public function ekstrakurikuler(): BelongsTo
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekstrakurikuler_id');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function sekolahAsal(): BelongsTo
    {
        return $this->belongsTo(SekolahAsal::class, 'sekolah_asal_id');
    }

    public function pimpinan(): BelongsTo
    {
        return $this->belongsTo(Pimpinan::class);
    }

    public function ketua(): BelongsTo
    {
        return $this->belongsTo(Ketua::class);
    }

    public function sekretaris(): BelongsTo
    {
        return $this->belongsTo(Sekretaris::class);
    }

    public function bendahara(): BelongsTo
    {
        return $this->belongsTo(Bendahara::class);
    }

    // Wilayah — Siswa
    public function siswaNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'siswa_negara_id');
    }

    public function siswaProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'siswa_provinsi_id');
    }

    public function siswaKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'siswa_kabupaten_id');
    }

    public function siswaKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'siswa_kecamatan_id');
    }

    public function siswaKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'siswa_kelurahan_id');
    }

    // Wilayah — Ibu
    public function ibuNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'ibu_negara_id');
    }

    public function ibuProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'ibu_provinsi_id');
    }

    public function ibuKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'ibu_kabupaten_id');
    }

    public function ibuKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'ibu_kecamatan_id');
    }

    public function ibuKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'ibu_kelurahan_id');
    }

    // Wilayah — Ayah
    public function ayahNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'ayah_negara_id');
    }

    public function ayahProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'ayah_provinsi_id');
    }

    public function ayahKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'ayah_kabupaten_id');
    }

    public function ayahKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'ayah_kecamatan_id');
    }

    public function ayahKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'ayah_kelurahan_id');
    }

    // Wilayah — Wali
    public function waliNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'wali_negara_id');
    }

    public function waliProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'wali_provinsi_id');
    }

    public function waliKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'wali_kabupaten_id');
    }

    public function waliKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'wali_kecamatan_id');
    }

    public function waliKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'wali_kelurahan_id');
    }

    // Prestasi
    public function formulirPrestasis(): HasMany
    {
        return $this->hasMany(FormulirPrestasi::class, 'calon_siswa_id');
    }
}

```

---

### 📄 `./app/Models/Ekstrakurikuler.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/FormulirPrestasi.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormulirPrestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'calon_siswa_id',
        'prestasi_id',
        'nama_prestasi',
        'tahun_prestasi',
        'penyelenggara_prestasi',
        'berkas_prestasi',
    ];

    protected $casts = [
        'prestasi_id' => 'integer',
        'tahun_prestasi' => 'integer',
    ];

    public function calonSiswa(): BelongsTo
    {
        return $this->belongsTo(CalonSiswa::class, 'calon_siswa_id');
    }

    public function prestasi(): BelongsTo
    {
        return $this->belongsTo(Prestasi::class);
    }
}

```

---

### 📄 `./app/Models/Informasi.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Informasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'tanggal',
        'tahun_pendaftaran_id',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tanggal' => 'datetime',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function setContentAttribute($value)
    {
        $this->attributes['isi'] = strip_tags($value);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }
}

```

---

### 📄 `./app/Models/JalurPendaftaran.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JalurPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kuantitas',
        'status',
        'tahun_pendaftaran_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }
}

```

---

### 📄 `./app/Models/Jurusan.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class);
    }
}

```

---

### 📄 `./app/Models/Kabupaten.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kabupaten extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'provinsi_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'provinsi_id' => 'integer',
    ];

    public function kecamatans(): HasMany
    {
        return $this->hasMany(Kecamatan::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function sekolahs(): HasMany
    {
        return $this->hasMany(Sekolah::class);
    }

    public function sekolahAsals(): HasMany
    {
        return $this->hasMany(SekolahAsal::class);
    }

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }
}

```

---

### 📄 `./app/Models/Kecamatan.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kabupaten_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'kabupaten_id' => 'integer',
    ];

    public function kelurahans(): HasMany
    {
        return $this->hasMany(Kelurahan::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function sekolahs(): HasMany
    {
        return $this->hasMany(Sekolah::class);
    }

    public function sekolahAsals(): HasMany
    {
        return $this->hasMany(SekolahAsal::class);
    }

    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }
}

```

---

### 📄 `./app/Models/Kelas.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jurusan_id',
        // 'tahun_pendaftaran_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'jurusan_id' => 'integer',
        // 'tahun_pendaftaran_id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }
}

```

---

### 📄 `./app/Models/Kelurahan.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kecamatan_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'kecamatan_id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function sekolahs(): HasMany
    {
        return $this->hasMany(Sekolah::class);
    }

    public function sekolahAsals(): HasMany
    {
        return $this->hasMany(SekolahAsal::class);
    }

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }
}

```

---

### 📄 `./app/Models/Ketua.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ketua extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'tahun_pendaftaran_id',
        'berkas_foto',
        'berkas_tte',
        'berkas_sk',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/MataPelajaran.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/Negara.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Negara extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'bendera',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function provinsis(): HasMany
    {
        return $this->hasMany(Provinsi::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function sekolahs(): HasMany
    {
        return $this->hasMany(Sekolah::class);
    }

    public function sekolahAsals(): HasMany
    {
        return $this->hasMany(SekolahAsal::class);
    }
}

```

---

### 📄 `./app/Models/Pimpinan.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pimpinan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'tahun_pendaftaran_id',
        'berkas_foto',
        'berkas_tte',
        'berkas_sk',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/Prestasi.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'nama',
        'tingkat',
        'kategori',
        'peringkat',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    // Pendaftar yang memilih jenis prestasi ini sebagai jalur utama
    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class, 'prestasi_id');
    }

    // Detail formulir prestasi yang menggunakan master ini
    public function formulirPrestasis(): HasMany
    {
        return $this->hasMany(FormulirPrestasi::class);
    }
}

```

---

### 📄 `./app/Models/Provinsi.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'negara_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'negara_id' => 'integer',
    ];

    public function kabupatens(): HasMany
    {
        return $this->hasMany(Kabupaten::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function sekolahs(): HasMany
    {
        return $this->hasMany(Sekolah::class);
    }

    public function sekolahAsals(): HasMany
    {
        return $this->hasMany(SekolahAsal::class);
    }

    public function negara(): BelongsTo
    {
        return $this->belongsTo(Negara::class);
    }
}

```

---

### 📄 `./app/Models/SekolahAsal.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SekolahAsal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'npsn',
        'jenjang',
        'status',
        'nss',
        'logo',
        'akreditasi',
        'alamat',
        'negara_id',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
        'website',
        'telepon',
        'email',
    ];

    protected $casts = [
        'id' => 'integer',
        'negara_id' => 'integer',
        'provinsi_id' => 'integer',
        'kabupaten_id' => 'integer',
        'kecamatan_id' => 'integer',
        'kelurahan_id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function negara(): BelongsTo
    {
        return $this->belongsTo(Negara::class);
    }

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }
}

```

---

### 📄 `./app/Models/Sekolah.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sekolah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'npsn',
        'nss',
        'logo',
        'logo_institusi',
        'jenjang',
        'status',
        'akreditasi',
        'alamat',
        'negara_id',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
        'pimpinan_id',
        'website',
        'telepon',
        'email',
        'nomor_surat',
    ];

    protected $casts = [
        'id' => 'integer',
        'pimpinan_id' => 'integer',
        'negara_id' => 'integer',
        'provinsi_id' => 'integer',
        'kabupaten_id' => 'integer',
        'kecamatan_id' => 'integer',
        'kelurahan_id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function pimpinan(): BelongsTo
    {
        return $this->belongsTo(Pimpinan::class);
    }

    public function negara(): BelongsTo
    {
        return $this->belongsTo(Negara::class);
    }

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }
}

```

---

### 📄 `./app/Models/Sekretaris.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sekretaris extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'tahun_pendaftaran_id',
        'berkas_foto',
        'berkas_tte',
        'berkas_sk',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/TahunPendaftaran.php`

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;

class TahunPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal_ppdb_mulai',
        'tanggal_ppdb_selesai',
        'tanggal_pendaftaran_jalur_prestasi_mulai',
        'tanggal_pendaftaran_jalur_prestasi_selesai',
        'tanggal_pengumuman_jalur_prestasi_mulai',
        'tanggal_pengumuman_jalur_prestasi_selesai',
        'tanggal_pendaftaran_jalur_reguler_mulai',
        'tanggal_pendaftaran_jalur_reguler_selesai',
        'tanggal_pengumuman_jalur_reguler_mulai',
        'tanggal_pengumuman_jalur_reguler_selesai',
        'tanggal_pendaftaran_jalur_afirmasi_mulai',
        'tanggal_pendaftaran_jalur_afirmasi_selesai',
        'tanggal_pengumuman_jalur_afirmasi_mulai',
        'tanggal_pengumuman_jalur_afirmasi_selesai',
        'tanggal_pendaftaran_jalur_zonasi_mulai',
        'tanggal_pendaftaran_jalur_zonasi_selesai',
        'tanggal_pengumuman_jalur_zonasi_mulai',
        'tanggal_pengumuman_jalur_zonasi_selesai',
        'tanggal_pendaftaran_jalur_mutasi_mulai',
        'tanggal_pendaftaran_jalur_mutasi_selesai',
        'tanggal_pengumuman_jalur_mutasi_mulai',
        'tanggal_pengumuman_jalur_mutasi_selesai',
        'tanggal_penerbitan_kartu_tes_mulai',
        'tanggal_penerbitan_kartu_tes_selesai',
        'tanggal_tes_akademik_mulai',
        'tanggal_tes_akademik_selesai',
        'tanggal_tes_praktik_mulai',
        'tanggal_tes_praktik_selesai',
        'tanggal_registrasi_berkas_mulai',
        'tanggal_registrasi_berkas_selesai',
        'kuantitas',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tanggal_ppdb_mulai' => 'date',
        'tanggal_ppdb_selesai' => 'date',
        'tanggal_pendaftaran_jalur_prestasi_mulai' => 'datetime',
        'tanggal_pendaftaran_jalur_prestasi_selesai' => 'datetime',
        'tanggal_pengumuman_jalur_prestasi_mulai' => 'datetime',
        'tanggal_pengumuman_jalur_prestasi_selesai' => 'datetime',
        'tanggal_pendaftaran_jalur_reguler_mulai' => 'datetime',
        'tanggal_pendaftaran_jalur_reguler_selesai' => 'datetime',
        'tanggal_pengumuman_jalur_reguler_mulai' => 'datetime',
        'tanggal_pengumuman_jalur_reguler_selesai' => 'datetime',
        'tanggal_pendaftaran_jalur_afirmasi_mulai' => 'datetime',
        'tanggal_pendaftaran_jalur_afirmasi_selesai' => 'datetime',
        'tanggal_pengumuman_jalur_afirmasi_mulai' => 'datetime',
        'tanggal_pengumuman_jalur_afirmasi_selesai' => 'datetime',
        'tanggal_pendaftaran_jalur_zonasi_mulai' => 'datetime',
        'tanggal_pendaftaran_jalur_zonasi_selesai' => 'datetime',
        'tanggal_pengumuman_jalur_zonasi_mulai' => 'datetime',
        'tanggal_pengumuman_jalur_zonasi_selesai' => 'datetime',
        'tanggal_pendaftaran_jalur_mutasi_mulai' => 'datetime',
        'tanggal_pendaftaran_jalur_mutasi_selesai' => 'datetime',
        'tanggal_pengumuman_jalur_mutasi_mulai' => 'datetime',
        'tanggal_pengumuman_jalur_mutasi_selesai' => 'datetime',
        'tanggal_penerbitan_kartu_tes_mulai' => 'datetime',
        'tanggal_penerbitan_kartu_tes_selesai' => 'datetime',
        'tanggal_tes_akademik_mulai' => 'datetime',
        'tanggal_tes_akademik_selesai' => 'datetime',
        'tanggal_tes_praktik_mulai' => 'datetime',
        'tanggal_tes_praktik_selesai' => 'datetime',
        'tanggal_registrasi_berkas_mulai' => 'datetime',
        'tanggal_registrasi_berkas_selesai' => 'datetime',
    ];

    protected static function booted(): void
    {
        $flushCache = fn () => Cache::forget('tahun_pendaftaran_aktif');
        static::saved($flushCache);
        static::deleted($flushCache);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}

```

---

### 📄 `./app/Models/User.php`

```php
<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser, HasAvatar, MustVerifyEmail
{
    use HasFactory, HasRoles, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'username',
        'telepon',
        'status',
        'email',
        'email_verified_at',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // public function canAccessPanel(Panel $panel): bool
    // {
    //     return $this->hasVerifiedEmail();
    // }
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    // -----------------------------------------------------------------------
    // Relationships
    // -----------------------------------------------------------------------

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    /**
     * Relasi ke satu CalonSiswa milik user ini (shortcut).
     * Lebih efisien daripada calonSiswas()->first() di setiap pemanggilan.
     */
    public function calonSiswa(): HasOne
    {
        return $this->hasOne(CalonSiswa::class)->withoutGlobalScopes();
    }

    // -----------------------------------------------------------------------
    // Filament Avatar
    // -----------------------------------------------------------------------

    public function getFilamentAvatarUrl(): ?string
    {
        // Prioritas 1: avatar yang di-upload langsung di profil user
        if ($this->avatar) {
            return asset('storage/' . $this->avatar);
        }

        // Prioritas 2: foto formal dari formulir pendaftaran (khusus calon_siswa)
        $foto = $this->calonSiswa?->berkas_foto;
        if ($foto) {
            return asset('storage/' . $foto);
        }

        return null;
    }

    // -----------------------------------------------------------------------
    // Booted
    // -----------------------------------------------------------------------

    protected static function booted(): void
    {
        static::created(function ($user) {
            if ($user->roles()->count() === 0) {
                $user->assignRole('calon_siswa');
            }
        });
    }
}

```

---

## 🔐 Policies

### 📄 `./app/Policies/AnggotaPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnggotaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_anggota');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Anggota $anggota): bool
    {
        return $user->can('view_anggota');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_anggota');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Anggota $anggota): bool
    {
        return $user->can('update_anggota');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Anggota $anggota): bool
    {
        return $user->can('delete_anggota');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_anggota');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Anggota $anggota): bool
    {
        return $user->can('force_delete_anggota');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_anggota');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Anggota $anggota): bool
    {
        return $user->can('restore_anggota');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_anggota');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Anggota $anggota): bool
    {
        return $user->can('replicate_anggota');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_anggota');
    }
}

```

---

### 📄 `./app/Policies/BendaharaPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Bendahara;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BendaharaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_bendahara');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Bendahara $bendahara): bool
    {
        return $user->can('view_bendahara');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_bendahara');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Bendahara $bendahara): bool
    {
        return $user->can('update_bendahara');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Bendahara $bendahara): bool
    {
        return $user->can('delete_bendahara');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_bendahara');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Bendahara $bendahara): bool
    {
        return $user->can('force_delete_bendahara');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_bendahara');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Bendahara $bendahara): bool
    {
        return $user->can('restore_bendahara');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_bendahara');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Bendahara $bendahara): bool
    {
        return $user->can('replicate_bendahara');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_bendahara');
    }
}

```

---

### 📄 `./app/Policies/CalonSiswaPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\CalonSiswa;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CalonSiswaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_calon::siswa');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CalonSiswa $calonSiswa): bool
    {
        return $user->can('view_calon::siswa');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_calon::siswa');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CalonSiswa $calonSiswa): bool
    {
        return $user->can('update_calon::siswa');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CalonSiswa $calonSiswa): bool
    {
        return $user->can('delete_calon::siswa');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_calon::siswa');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, CalonSiswa $calonSiswa): bool
    {
        return $user->can('force_delete_calon::siswa');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_calon::siswa');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, CalonSiswa $calonSiswa): bool
    {
        return $user->can('restore_calon::siswa');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_calon::siswa');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, CalonSiswa $calonSiswa): bool
    {
        return $user->can('replicate_calon::siswa');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_calon::siswa');
    }
}

```

---

### 📄 `./app/Policies/EkstrakurikulerPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Ekstrakurikuler;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EkstrakurikulerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_ekstrakurikuler');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->can('view_ekstrakurikuler');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_ekstrakurikuler');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->can('update_ekstrakurikuler');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->can('delete_ekstrakurikuler');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_ekstrakurikuler');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->can('force_delete_ekstrakurikuler');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_ekstrakurikuler');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->can('restore_ekstrakurikuler');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_ekstrakurikuler');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->can('replicate_ekstrakurikuler');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_ekstrakurikuler');
    }
}

```

---

### 📄 `./app/Policies/InformasiPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Informasi;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InformasiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_informasi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Informasi $informasi): bool
    {
        return $user->can('view_informasi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_informasi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Informasi $informasi): bool
    {
        return $user->can('update_informasi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Informasi $informasi): bool
    {
        return $user->can('delete_informasi');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_informasi');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Informasi $informasi): bool
    {
        return $user->can('force_delete_informasi');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_informasi');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Informasi $informasi): bool
    {
        return $user->can('restore_informasi');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_informasi');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Informasi $informasi): bool
    {
        return $user->can('replicate_informasi');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_informasi');
    }
}

```

---

### 📄 `./app/Policies/JalurPendaftaranPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\JalurPendaftaran;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JalurPendaftaranPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, JalurPendaftaran $jalurPendaftaran): bool
    {
        return $user->can('view_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, JalurPendaftaran $jalurPendaftaran): bool
    {
        return $user->can('update_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, JalurPendaftaran $jalurPendaftaran): bool
    {
        return $user->can('delete_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, JalurPendaftaran $jalurPendaftaran): bool
    {
        return $user->can('force_delete_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, JalurPendaftaran $jalurPendaftaran): bool
    {
        return $user->can('restore_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, JalurPendaftaran $jalurPendaftaran): bool
    {
        return $user->can('replicate_jalur::pendaftaran');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_jalur::pendaftaran');
    }
}

```

---

### 📄 `./app/Policies/JurusanPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JurusanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_jurusan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jurusan $jurusan): bool
    {
        return $user->can('view_jurusan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_jurusan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jurusan $jurusan): bool
    {
        return $user->can('update_jurusan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jurusan $jurusan): bool
    {
        return $user->can('delete_jurusan');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_jurusan');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Jurusan $jurusan): bool
    {
        return $user->can('force_delete_jurusan');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_jurusan');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Jurusan $jurusan): bool
    {
        return $user->can('restore_jurusan');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_jurusan');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Jurusan $jurusan): bool
    {
        return $user->can('replicate_jurusan');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_jurusan');
    }
}

```

---

### 📄 `./app/Policies/KabupatenPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Kabupaten;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KabupatenPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kabupaten');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Kabupaten $kabupaten): bool
    {
        return $user->can('view_kabupaten');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_kabupaten');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Kabupaten $kabupaten): bool
    {
        return $user->can('update_kabupaten');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Kabupaten $kabupaten): bool
    {
        return $user->can('delete_kabupaten');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kabupaten');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Kabupaten $kabupaten): bool
    {
        return $user->can('force_delete_kabupaten');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kabupaten');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Kabupaten $kabupaten): bool
    {
        return $user->can('restore_kabupaten');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kabupaten');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Kabupaten $kabupaten): bool
    {
        return $user->can('replicate_kabupaten');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kabupaten');
    }
}

```

---

### 📄 `./app/Policies/KecamatanPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Kecamatan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KecamatanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kecamatan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Kecamatan $kecamatan): bool
    {
        return $user->can('view_kecamatan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_kecamatan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Kecamatan $kecamatan): bool
    {
        return $user->can('update_kecamatan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Kecamatan $kecamatan): bool
    {
        return $user->can('delete_kecamatan');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kecamatan');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Kecamatan $kecamatan): bool
    {
        return $user->can('force_delete_kecamatan');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kecamatan');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Kecamatan $kecamatan): bool
    {
        return $user->can('restore_kecamatan');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kecamatan');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Kecamatan $kecamatan): bool
    {
        return $user->can('replicate_kecamatan');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kecamatan');
    }
}

```

---

### 📄 `./app/Policies/KelasPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KelasPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kelas');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Kelas $kelas): bool
    {
        return $user->can('view_kelas');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_kelas');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Kelas $kelas): bool
    {
        return $user->can('update_kelas');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Kelas $kelas): bool
    {
        return $user->can('delete_kelas');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kelas');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Kelas $kelas): bool
    {
        return $user->can('force_delete_kelas');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kelas');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Kelas $kelas): bool
    {
        return $user->can('restore_kelas');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kelas');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Kelas $kelas): bool
    {
        return $user->can('replicate_kelas');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kelas');
    }
}

```

---

### 📄 `./app/Policies/KelurahanPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Kelurahan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KelurahanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kelurahan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Kelurahan $kelurahan): bool
    {
        return $user->can('view_kelurahan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_kelurahan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Kelurahan $kelurahan): bool
    {
        return $user->can('update_kelurahan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Kelurahan $kelurahan): bool
    {
        return $user->can('delete_kelurahan');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kelurahan');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Kelurahan $kelurahan): bool
    {
        return $user->can('force_delete_kelurahan');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kelurahan');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Kelurahan $kelurahan): bool
    {
        return $user->can('restore_kelurahan');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kelurahan');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Kelurahan $kelurahan): bool
    {
        return $user->can('replicate_kelurahan');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kelurahan');
    }
}

```

---

### 📄 `./app/Policies/KetuaPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Ketua;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class KetuaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_ketua');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ketua $ketua): bool
    {
        return $user->can('view_ketua');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_ketua');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ketua $ketua): bool
    {
        return $user->can('update_ketua');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ketua $ketua): bool
    {
        return $user->can('delete_ketua');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_ketua');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Ketua $ketua): bool
    {
        return $user->can('force_delete_ketua');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_ketua');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Ketua $ketua): bool
    {
        return $user->can('restore_ketua');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_ketua');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Ketua $ketua): bool
    {
        return $user->can('replicate_ketua');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_ketua');
    }
}

```

---

### 📄 `./app/Policies/MataPelajaranPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\MataPelajaran;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MataPelajaranPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_mata::pelajaran');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MataPelajaran $mataPelajaran): bool
    {
        return $user->can('view_mata::pelajaran');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_mata::pelajaran');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MataPelajaran $mataPelajaran): bool
    {
        return $user->can('update_mata::pelajaran');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MataPelajaran $mataPelajaran): bool
    {
        return $user->can('delete_mata::pelajaran');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_mata::pelajaran');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, MataPelajaran $mataPelajaran): bool
    {
        return $user->can('force_delete_mata::pelajaran');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_mata::pelajaran');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, MataPelajaran $mataPelajaran): bool
    {
        return $user->can('restore_mata::pelajaran');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_mata::pelajaran');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, MataPelajaran $mataPelajaran): bool
    {
        return $user->can('replicate_mata::pelajaran');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_mata::pelajaran');
    }
}

```

---

### 📄 `./app/Policies/NegaraPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Negara;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NegaraPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_negara');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Negara $negara): bool
    {
        return $user->can('view_negara');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_negara');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Negara $negara): bool
    {
        return $user->can('update_negara');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Negara $negara): bool
    {
        return $user->can('delete_negara');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_negara');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Negara $negara): bool
    {
        return $user->can('force_delete_negara');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_negara');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Negara $negara): bool
    {
        return $user->can('restore_negara');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_negara');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Negara $negara): bool
    {
        return $user->can('replicate_negara');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_negara');
    }
}

```

---

### 📄 `./app/Policies/PimpinanPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Pimpinan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PimpinanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_pimpinan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pimpinan $pimpinan): bool
    {
        return $user->can('view_pimpinan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_pimpinan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pimpinan $pimpinan): bool
    {
        return $user->can('update_pimpinan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pimpinan $pimpinan): bool
    {
        return $user->can('delete_pimpinan');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_pimpinan');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Pimpinan $pimpinan): bool
    {
        return $user->can('force_delete_pimpinan');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_pimpinan');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Pimpinan $pimpinan): bool
    {
        return $user->can('restore_pimpinan');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_pimpinan');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Pimpinan $pimpinan): bool
    {
        return $user->can('replicate_pimpinan');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_pimpinan');
    }
}

```

---

### 📄 `./app/Policies/PrestasiPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Prestasi;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrestasiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_prestasi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Prestasi $prestasi): bool
    {
        return $user->can('view_prestasi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_prestasi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Prestasi $prestasi): bool
    {
        return $user->can('update_prestasi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Prestasi $prestasi): bool
    {
        return $user->can('delete_prestasi');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_prestasi');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Prestasi $prestasi): bool
    {
        return $user->can('force_delete_prestasi');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_prestasi');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Prestasi $prestasi): bool
    {
        return $user->can('restore_prestasi');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_prestasi');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Prestasi $prestasi): bool
    {
        return $user->can('replicate_prestasi');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_prestasi');
    }
}

```

---

### 📄 `./app/Policies/ProvinsiPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProvinsiPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_provinsi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Provinsi $provinsi): bool
    {
        return $user->can('view_provinsi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_provinsi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Provinsi $provinsi): bool
    {
        return $user->can('update_provinsi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Provinsi $provinsi): bool
    {
        return $user->can('delete_provinsi');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_provinsi');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Provinsi $provinsi): bool
    {
        return $user->can('force_delete_provinsi');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_provinsi');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Provinsi $provinsi): bool
    {
        return $user->can('restore_provinsi');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_provinsi');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Provinsi $provinsi): bool
    {
        return $user->can('replicate_provinsi');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_provinsi');
    }
}

```

---

### 📄 `./app/Policies/RolePolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_role');
    }

    public function view(User $user, Role $role): bool
    {
        return $user->can('view_role');
    }

    public function create(User $user): bool
    {
        return $user->can('create_role');
    }

    public function update(User $user, Role $role): bool
    {
        return $user->can('update_role');
    }

    public function delete(User $user, Role $role): bool
    {
        return $user->can('delete_role');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_role');
    }

    public function forceDelete(User $user, Role $role): bool
    {
        return $user->can('force_delete_role');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_role');
    }

    public function restore(User $user, Role $role): bool
    {
        return $user->can('restore_role');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_role');
    }

    public function replicate(User $user, Role $role): bool
    {
        return $user->can('replicate_role');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_role');
    }
}

```

---

### 📄 `./app/Policies/SekolahAsalPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\SekolahAsal;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SekolahAsalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_sekolah::asal');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SekolahAsal $sekolahAsal): bool
    {
        return $user->can('view_sekolah::asal');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_sekolah::asal');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SekolahAsal $sekolahAsal): bool
    {
        return $user->can('update_sekolah::asal');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SekolahAsal $sekolahAsal): bool
    {
        return $user->can('delete_sekolah::asal');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_sekolah::asal');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, SekolahAsal $sekolahAsal): bool
    {
        return $user->can('force_delete_sekolah::asal');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_sekolah::asal');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, SekolahAsal $sekolahAsal): bool
    {
        return $user->can('restore_sekolah::asal');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_sekolah::asal');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, SekolahAsal $sekolahAsal): bool
    {
        return $user->can('replicate_sekolah::asal');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_sekolah::asal');
    }
}

```

---

### 📄 `./app/Policies/SekolahPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SekolahPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_sekolah');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sekolah $sekolah): bool
    {
        return $user->can('view_sekolah');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_sekolah');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sekolah $sekolah): bool
    {
        return $user->can('update_sekolah');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sekolah $sekolah): bool
    {
        return $user->can('delete_sekolah');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_sekolah');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Sekolah $sekolah): bool
    {
        return $user->can('force_delete_sekolah');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_sekolah');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Sekolah $sekolah): bool
    {
        return $user->can('restore_sekolah');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_sekolah');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Sekolah $sekolah): bool
    {
        return $user->can('replicate_sekolah');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_sekolah');
    }
}

```

---

### 📄 `./app/Policies/SekretarisPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\Sekretaris;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SekretarisPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_sekretaris');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sekretaris $sekretaris): bool
    {
        return $user->can('view_sekretaris');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_sekretaris');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sekretaris $sekretaris): bool
    {
        return $user->can('update_sekretaris');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sekretaris $sekretaris): bool
    {
        return $user->can('delete_sekretaris');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_sekretaris');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Sekretaris $sekretaris): bool
    {
        return $user->can('force_delete_sekretaris');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_sekretaris');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Sekretaris $sekretaris): bool
    {
        return $user->can('restore_sekretaris');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_sekretaris');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Sekretaris $sekretaris): bool
    {
        return $user->can('replicate_sekretaris');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_sekretaris');
    }
}

```

---

### 📄 `./app/Policies/TahunPendaftaranPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\TahunPendaftaran;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TahunPendaftaranPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TahunPendaftaran $tahunPendaftaran): bool
    {
        return $user->can('view_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TahunPendaftaran $tahunPendaftaran): bool
    {
        return $user->can('update_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TahunPendaftaran $tahunPendaftaran): bool
    {
        return $user->can('delete_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, TahunPendaftaran $tahunPendaftaran): bool
    {
        return $user->can('force_delete_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, TahunPendaftaran $tahunPendaftaran): bool
    {
        return $user->can('restore_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, TahunPendaftaran $tahunPendaftaran): bool
    {
        return $user->can('replicate_tahun::pendaftaran');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_tahun::pendaftaran');
    }
}

```

---

### 📄 `./app/Policies/UserPolicy.php`

```php
<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_user');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return $user->can('view_user');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_user');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): bool
    {
        return $user->can('update_user');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->can('delete_user');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_user');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user): bool
    {
        return $user->can('force_delete_user');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_user');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user): bool
    {
        return $user->can('restore_user');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_user');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function replicate(User $user): bool
    {
        return $user->can('replicate_user');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_user');
    }
}

```

---

## ⚙️ Services

### 📄 `./app/Services/WhatsAppService.php`

```php
<?php

namespace App\Services;

use App\Jobs\SendWhatsAppJob;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    /**
     * Dispatch ke queue dengan random delay (mencegah banned).
     * Default range: 5–30 detik. Bisa di-override per call.
     */
    public function send(
        string $phone,
        string $message,
        int $minDelay = 5,
        int $maxDelay = 30,
    ): void {
        $delay = rand($minDelay, $maxDelay);

        SendWhatsAppJob::dispatch($phone, $message)
            ->delay(now()->addSeconds($delay));
    }

    /**
     * Kirim langsung (tanpa queue) — dipakai oleh Job itu sendiri.
     * Jangan panggil ini dari luar Job kecuali ada alasan khusus.
     */
    public function sendDirect(string $phone, string $message): bool
    {
        try {
            $normalized = $this->normalizePhone($phone);

            $response = Http::withHeaders([
                'X-Api-Key' => config('services.whatsapp.api_key'),
            ])->post(config('services.whatsapp.endpoint'), [
                'number' => $normalized,
                'message' => $message,
            ]);

            Log::info('WhatsApp send', [
                'phone' => $normalized,
                'endpoint' => config('services.whatsapp.endpoint'),
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if (! $response->successful()) {
                Log::warning('WhatsApp send failed', [
                    'phone' => $normalized,
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
            }

            return $response->successful();
        } catch (\Throwable $e) {
            Log::error('WhatsApp service error: '.$e->getMessage());

            return false;
        }
    }

    protected function normalizePhone(string $phone): string
    {
        $phone = preg_replace('/\D/', '', $phone);

        if (str_starts_with($phone, '0')) {
            $phone = '62'.substr($phone, 1);
        }

        if (! str_starts_with($phone, '62')) {
            $phone = '62'.$phone;
        }

        return $phone;
    }
}

```

---

## 🔧 Helpers

### 📄 `./app/Helpers/PdfDataHelper.php`

```php
<?php

namespace App\Helpers;

use App\Models\Ketua;
use App\Models\Pimpinan;
use App\Models\Sekolah;
use App\Models\Sekretaris;
use App\Models\TahunPendaftaran;

/**
 * Menyimpan data PDF yang sering diquery ke dalam container binding
 * sehingga per-request hanya query 1x, tidak peduli berapa kali view di-render.
 *
 * Dipakai di formulir.blade.php, kartu-tes.blade.php, skl.blade.php,
 * dan partial pdf-header.blade.php.
 */
class PdfDataHelper
{
    public static function instansi(): ?Sekolah
    {
        return once(fn () => Sekolah::first());
    }

    public static function tahunAktif(): ?TahunPendaftaran
    {
        return once(fn () => TahunPendaftaran::where('status', 'Aktif')->first());
    }

    public static function sekretarisAktif(): ?Sekretaris
    {
        return once(function () {
            $tahun = static::tahunAktif();

            return Sekretaris::where('tahun_pendaftaran_id', optional($tahun)->id)
                ->where('status', 'Aktif')
                ->first();
        });
    }

    public static function ketuaAktif(): ?Ketua
    {
        return once(function () {
            $tahun = static::tahunAktif();

            return Ketua::where('tahun_pendaftaran_id', optional($tahun)->id)
                ->where('status', 'Aktif')
                ->first();
        });
    }

    public static function pimpinanAktif(): ?Pimpinan
    {
        return once(function () {
            $tahun = static::tahunAktif();

            return Pimpinan::where('tahun_pendaftaran_id', optional($tahun)->id)
                ->where('status', 'Aktif')
                ->first();
        });
    }
}

```

---

## 📌 Constants

### 📄 `./app/Constants/FormOptions.php`

```php
<?php

namespace App\Constants;

class FormOptions
{
    public const JENIS_KELAMIN = [
        'Pria' => 'Laki-laki',
        'Wanita' => 'Perempuan',
    ];

    public const GOLONGAN_DARAH = [
        'A-' => 'A-',
        'A+' => 'A+',
        'B-' => 'B-',
        'B+' => 'B+',
        'AB-' => 'AB-',
        'AB+' => 'AB+',
        'O-' => 'O-',
        'O+' => 'O+',
    ];

    public const AGAMA = [
        'Islam' => 'Islam',
        'Kristen Katholik' => 'Kristen Katholik',
        'Kristen Protestan' => 'Kristen Protestan',
        'Hindu' => 'Hindu',
        'Buddha' => 'Buddha',
        'Konghucu' => 'Konghucu',
    ];

    public const TINGGAL_BERSAMA = [
        'Orang Tua' => 'Orang Tua',
        'Saudara' => 'Saudara',
        'Panti Asuhan' => 'Panti Asuhan',
        'Kost' => 'Kost',
        'Lainnya' => 'Lainnya',
    ];

    public const JARAK_KE_SEKOLAH = [
        '0 - 1 Km' => '0 - 1 Km',
        '1 - 5 Km' => '1 - 5 Km',
        '5 - 10 Km' => '5 - 10 Km',
        '10 - 15 Km' => '10 - 15 Km',
        '15 - 20 Km' => '15 - 20 Km',
        '20 - 25 Km' => '20 - 25 Km',
        '25 - 30 Km' => '25 - 30 Km',
    ];

    public const DISABILITAS = [
        'Non Disabilitas' => 'Non Disabilitas',
        'Fisik' => 'Fisik',
        'Penglihatan' => 'Penglihatan',
        'Pendengaran' => 'Pendengaran',
        'Kognitif' => 'Kognitif',
        'Mental' => 'Mental',
        'Lainnya' => 'Lainnya',
    ];

    public const PEKERJAAN = [
        'Tidak Bekerja' => 'Tidak Bekerja',
        'ASN' => 'ASN',
        'TNI/POLRI' => 'TNI/POLRI',
        'Karyawan Swasta' => 'Karyawan Swasta',
        'Pegawai Honorer' => 'Pegawai Honorer',
        'Wirausaha' => 'Wirausaha',
        'Wiraswasta' => 'Wiraswasta',
        'Buruh' => 'Buruh',
    ];

    public const PENGHASILAN = [
        'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
        'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
        'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
        'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
        'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
        'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
        'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
    ];

    public const PENDIDIKAN = [
        'Tidak Sekolah' => 'Tidak Sekolah',
        'SD/MI Sederajat' => 'SD/MI Sederajat',
        'SMP/MTS Sederajat' => 'SMP/MTS Sederajat',
        'SMA/SMK/MA Sederajat' => 'SMA/SMK/MA Sederajat',
        'D1' => 'D1',
        'D2' => 'D2',
        'D3' => 'D3',
        'D4' => 'D4',
        'S1' => 'S1',
        'S2' => 'S2',
        'S3' => 'S3',
    ];

    public const STATUS_HIDUP = [
        'Hidup' => 'Hidup',
        'Meninggal' => 'Meninggal',
    ];

    public const KEPEMILIKAN_RUMAH = [
        'Rumah Pribadi' => 'Rumah Pribadi',
        'Kontrakan' => 'Kontrakan',
        'Rumah Dinas' => 'Rumah Dinas',
        'Menumpang Saudara' => 'Menumpang Saudara',
    ];

    public const AKREDITASI = [
        'A' => 'A (Sangat Baik)',
        'B' => 'B (Baik)',
        'C' => 'C (Cukup)',
        'D' => 'D (Kurang)',
    ];

    public const STATUS_SEKOLAH = [
        'NEGERI' => 'NEGERI',
        'SWASTA' => 'SWASTA',
    ];

    public const STATUS_PENDAFTARAN_SUPER_ADMIN = [
        'Diproses' => 'Diproses',
        'Tidak Diterima' => 'Tidak Diterima',
        'Diterima' => 'Diterima',
        'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
        'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
    ];

    public const STATUS_PENDAFTARAN_REGULAR = [
        'Diproses' => 'Diproses',
    ];

    public const STATUS_FORMULIR = [
        'Diproses' => 'Diproses',
        'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
        'Disetujui' => 'Disetujui',
        'Ditolak' => 'Ditolak',
    ];

    // Helper untuk tahun lulus
    public static function tahunLulusOptions(): array
    {
        $tahun = range(date('Y'), date('Y') - 2);

        return array_combine($tahun, $tahun);
    }

    // Helper untuk jenjang sekolah berdasarkan jenjang instansi
    public static function jenjangSekolahAsal(?string $jenjangInstansi): array
    {
        return match ($jenjangInstansi) {
            'TK' => ['PAUD' => 'PAUD'],
            'SD', 'MI' => ['TK' => 'TK'],
            'SMP', 'MTS' => ['SD' => 'SD', 'MI' => 'MI'],
            'SMA', 'SMK', 'MA' => ['SMP' => 'SMP', 'MTS' => 'MTS'],
            default => [
                'PAUD' => 'PAUD',
                'TK' => 'TK',
                'SD' => 'SD',
                'MI' => 'MI',
                'SMP' => 'SMP',
                'MTS' => 'MTS',
                'SMA' => 'SMA',
                'SMK' => 'SMK',
                'MA' => 'MA',
            ],
        };
    }
}

```

---

## 🎮 Http (Controllers, Middleware, Requests)

### 📄 `./app/Http/Controllers/Controller.php`

```php
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

```

---

### 📄 `./app/Http/Controllers/LandingController.php`

```php
<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $tahun = Cache::remember(
            'landing:tahun_aktif',
            300,
            fn() =>
            TahunPendaftaran::where('status', 'Aktif')->first()
        );

        $jalurs = Cache::remember(
            'landing:jalur_aktif',
            300,
            fn() =>
            JalurPendaftaran::where('status', 'Aktif')
                ->with('tahunPendaftaran')
                ->when($tahun, fn($q) => $q->where('tahun_pendaftaran_id', $tahun->id))
                ->withCount(['calonSiswas as terisi'])
                ->get()
        );

        $informasis = Cache::remember(
            'landing:informasi',
            120,
            fn() =>
            Informasi::where('status', 'Publish')
                ->when($tahun, fn($q) => $q->where('tahun_pendaftaran_id', $tahun->id))
                ->latest('tanggal')
                ->limit(3)
                ->get()
        );

        return view('landing', compact('tahun', 'jalurs', 'informasis'));
    }
}

```

---

## 🧩 Filament Resources

### 📄 `./app/Filament/Resources/AnggotaResource/Pages/CreateAnggota.php`

```php
<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\AnggotaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateAnggota extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = AnggotaResource::class;

    protected string $panitiaLabel = 'Anggota';

    protected string $panitiaDirectory = 'assets/anggota';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/AnggotaResource/Pages/EditAnggota.php`

```php
<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\AnggotaResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditAnggota extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = AnggotaResource::class;

    protected string $panitiaLabel = 'Anggota';

    protected string $panitiaDirectory = 'assets/anggota';

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/AnggotaResource/Pages/ListAnggotas.php`

```php
<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnggotas extends ListRecords
{
    protected static string $resource = AnggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/AnggotaResource/Pages/ViewAnggota.php`

```php
<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAnggota extends ViewRecord
{
    protected static string $resource = AnggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/AnggotaResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaResource\Pages;
use App\Models\Anggota;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Anggota';

    protected static ?string $label = 'Anggota';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 5;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Anggota::count() > 10),

                TextColumn::make('nip')
                    ->label('NIP'),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(Anggota::count() > 10),

                ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('img/tte.png'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/BendaharaResource/Pages/CreateBendahara.php`

```php
<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\BendaharaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateBendahara extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = BendaharaResource::class;

    protected string $panitiaLabel = 'Bendahara';

    protected string $panitiaDirectory = 'assets/bendahara';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/BendaharaResource/Pages/EditBendahara.php`

```php
<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\BendaharaResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditBendahara extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = BendaharaResource::class;

    protected string $panitiaLabel = 'Bendahara';

    protected string $panitiaDirectory = 'assets/bendahara';

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/BendaharaResource/Pages/ListBendaharas.php`

```php
<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Resources\BendaharaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBendaharas extends ListRecords
{
    protected static string $resource = BendaharaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/BendaharaResource/Pages/ViewBendahara.php`

```php
<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Resources\BendaharaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBendahara extends ViewRecord
{
    protected static string $resource = BendaharaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/BendaharaResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BendaharaResource\Pages;
use App\Models\Bendahara;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class BendaharaResource extends Resource
{
    protected static ?string $model = Bendahara::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Bendahara';

    protected static ?string $label = 'Bendahara';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Bendahara::count() > 10),

                TextColumn::make('nip')
                    ->label('NIP'),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(Bendahara::count() > 10),

                ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('img/tte.png'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBendaharas::route('/'),
            'create' => Pages\CreateBendahara::route('/create'),
            'edit' => Pages\EditBendahara::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource/Pages/CreateCalonSiswa.php`

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use App\Models\FormulirPrestasi;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateCalonSiswa extends CreateRecord
{
    use CalonSiswaFormTrait, HasWizard;

    protected static string $resource = CalonSiswaResource::class;

    protected function getSteps(): array
    {
        return $this->getAllSteps(
            includeStatusSection: false,
            includeDataTes: false
        );
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        $tahun = TahunPendaftaran::where('status', 'Aktif')->first();
        $data['tahun_pendaftaran_id'] = $tahun?->id;

        return $data;
    }

    // -------------------------------------------------------------------------
    // Setelah create: cek apakah jalur = Prestasi & belum isi FormulirPrestasi
    // -------------------------------------------------------------------------

    protected function afterCreate(): void
    {
        $record = $this->record;

        $jalur = JalurPendaftaran::find($record->jalur_pendaftaran_id);

        if (
            $jalur &&
            strtolower($jalur->nama) === 'prestasi' &&
            ! FormulirPrestasi::where('calon_siswa_id', $record->id)->exists()
        ) {
            Notification::make()
                ->title('Lengkapi Formulir Prestasi')
                ->body('Kamu mendaftar via jalur Prestasi. Harap isi Formulir Prestasi sebelum pendaftaran diproses.')
                ->warning()
                ->persistent()
                ->send();
        }
    }

    protected function getRedirectUrl(): string
    {
        // Jika jalur prestasi, redirect langsung ke halaman buat formulir prestasi
        $jalur = JalurPendaftaran::find($this->record->jalur_pendaftaran_id);

        if ($jalur && strtolower($jalur->nama) === 'prestasi') {
            return route('filament.admin.resources.formulir-prestasis.create');
        }

        return $this->getResource()::getUrl('index');
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource/Pages/EditCalonSiswa.php`

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Filament\Resources\Pages\EditRecord;

class EditCalonSiswa extends EditRecord
{
    use CalonSiswaFormTrait, HasWizard;

    protected static string $resource = CalonSiswaResource::class;

    protected function getSteps(): array
    {
        return $this->getAllSteps(
            includeStatusSection: true,
            includeDataTes: true
        );
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource/Pages/ListCalonSiswas.php`

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Imports\CalonSiswaImporter;
use App\Filament\Resources\CalonSiswaResource;
use App\Models\CalonSiswa;
use Filament\Actions\Action;
use Filament\Actions\ExportAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListCalonSiswas extends ListRecords
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        $calonSiswa = $this->getCalonSiswaRecord();

        return [
            $this->getDaftarSekarangAction($calonSiswa),
            $this->getLihatFormulirAction($calonSiswa),
            $this->getUbahFormulirAction($calonSiswa),
            $this->getExportAction(),
            $this->getImportAction(),
        ];
    }

    // HELPER METHODS
    private function getCalonSiswaRecord(): ?CalonSiswa
    {
        if (! Auth::check()) {
            return null;
        }

        return CalonSiswa::where('nisn', Auth::user()->username)->first();
    }

    private function isCalonSiswa(): bool
    {
        return Auth::user()->roles->first()->name === 'calon_siswa';
    }

    private function isSuperAdmin(): bool
    {
        return Auth::user()->roles->first()->name === 'super_admin';
    }

    private function getFormulirUrl(?CalonSiswa $calonSiswa, string $action = ''): string
    {
        $baseUrl = '/formulir';

        if (! $calonSiswa) {
            return $action === 'create' ? "{$baseUrl}/create" : '';
        }

        return match ($action) {
            'view' => "{$baseUrl}/{$calonSiswa->id}",
            'edit' => "{$baseUrl}/{$calonSiswa->id}/edit",
            default => $baseUrl,
        };
    }

    // ACTION BUILDERS
    private function getDaftarSekarangAction(?CalonSiswa $calonSiswa): Action
    {
        return Action::make('buat_formulir_pendaftaran')
            ->label('Daftar Sekarang')
            ->icon('heroicon-o-clipboard-document-list')
            ->outlined()
            ->color('primary')
            ->url($this->getFormulirUrl(null, 'create'))
            ->hidden(! $this->isCalonSiswa() || $calonSiswa !== null);
    }

    private function getLihatFormulirAction(?CalonSiswa $calonSiswa): Action
    {
        $allowedStatuses = ['Diproses', 'Berkas Tidak Lengkap'];

        return Action::make('lihat_formulir_pendaftaran')
            ->label('Lihat')
            ->icon('heroicon-m-eye')
            ->outlined()
            ->url($this->getFormulirUrl($calonSiswa, 'view'))
            ->color(Color::Zinc)
            ->hidden(
                ! $this->isCalonSiswa()
                    || $calonSiswa === null
                    || in_array($calonSiswa->status_pendaftaran, $allowedStatuses)
            );
    }

    private function getUbahFormulirAction(?CalonSiswa $calonSiswa): Action
    {
        $blockedStatuses = [
            'Diterima',
            'Diterima Di Kelas Unggulan',
            'Diterima Di Kelas Reguler',
            'Tidak Diterima',
        ];

        return Action::make('ubah_formulir_pendaftaran')
            ->label('Ubah')
            ->icon('heroicon-m-pencil-square')
            ->url($this->getFormulirUrl($calonSiswa, 'edit'))
            ->color('success')
            ->outlined()
            ->hidden(
                ! $this->isCalonSiswa()
                    || $calonSiswa === null
                    || in_array($calonSiswa->status_pendaftaran, $blockedStatuses)
            )
            ->successRedirectUrl($this->getFormulirUrl($calonSiswa, 'view'));
    }

    private function getExportAction(): ExportAction
    {
        return ExportAction::make('export')
            ->label('Ekspor')
            ->outlined()
            ->icon('heroicon-m-cloud-arrow-down')
            ->color('success')
            ->exporter(CalonSiswaExporter::class)
            ->chunkSize(250)
            ->visible(fn () => CalonSiswa::count() > 0 && ! $this->isCalonSiswa());
    }

    private function getImportAction(): ImportAction
    {
        return ImportAction::make('import')
            ->label('Import')
            ->outlined()
            ->icon('heroicon-m-cloud-arrow-up')
            ->color(Color::Cyan)
            ->importer(CalonSiswaImporter::class)
            ->chunkSize(250)
            ->visible(function () {
                if (! $this->isSuperAdmin()) {
                    return false;
                }

                $tahunPendaftaran = DB::table('tahun_pendaftarans')
                    ->where('status', 'Aktif')
                    ->first();

                return $tahunPendaftaran && CalonSiswa::count() > 0;
            });
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource/Pages/ViewCalonSiswa.php`

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use App\Models\CalonSiswa;
use Carbon\Carbon;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ViewCalonSiswa extends ViewRecord
{
    use CalonSiswaFormTrait;

    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            $this->buildPdfAction(
                'cetak_formulir',
                'Formulir',
                'formulir',
                fn() => $this->canPrintFormulir()
            ),
            $this->buildPdfAction(
                'cetak_kartu_tes',
                'Kartu Tes',
                'kartu-tes',
                fn() => $this->canPrintKartuTes()
            ),
            $this->buildPdfAction(
                'cetak_skl',
                'Hasil',
                'skl',
                fn() => $this->canPrintHasil()
            ),
        ];
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make($this->getAllSteps(
                includeStatusSection: true,
                includeDataTes: false
            ))->columnSpanFull(),

            // ----------------------------------------------------------------
            // Section FormulirPrestasi — hanya tampil jika ada data
            // ----------------------------------------------------------------
            Section::make('Data Formulir Prestasi')
                ->icon('heroicon-o-trophy')
                ->collapsible()
                ->columnSpanFull()
                ->visible(fn() => $this->record->formulirPrestasis()->exists())
                ->schema([
                    \Filament\Forms\Components\Repeater::make('formulirPrestasis')
                        ->relationship('formulirPrestasis')
                        ->addable(false)
                        ->deletable(false)
                        ->reorderable(false)
                        ->label('')
                        ->schema([
                            \Filament\Forms\Components\TextInput::make('nama_prestasi')
                                ->label('Nama / Judul Prestasi')
                                ->disabled(),

                            \Filament\Forms\Components\Select::make('prestasi_id')
                                ->label('Jenis Prestasi')
                                ->relationship('prestasi', 'nama')
                                ->disabled(),

                            \Filament\Forms\Components\TextInput::make('tahun_prestasi')
                                ->label('Tahun')
                                ->disabled(),

                            \Filament\Forms\Components\TextInput::make('penyelenggara_prestasi')
                                ->label('Penyelenggara')
                                ->disabled(),

                            \Filament\Forms\Components\FileUpload::make('berkas_prestasi')
                                ->label('Berkas Bukti')
                                ->disabled()
                                ->downloadable()
                                ->openable()
                                ->visibility('private')
                                ->columnSpanFull(),
                        ])
                        ->columns(['sm' => 1, 'md' => 2, 'lg' => 4]),
                ]),
        ]);
    }

    // =========================================================================
    // PDF ACTION BUILDER
    // =========================================================================

    private function buildPdfAction(
        string $name,
        string $label,
        string $view,
        callable $visibleCallback
    ): Html2MediaAction {
        return Html2MediaAction::make($name)
            ->label($label)
            ->outlined()
            ->icon('heroicon-o-printer')
            ->filename(fn($record) => "{$label}_{$record->nama}_{$record->nisn}.pdf")
            ->savePdf()
            ->orientation('portrait')
            ->format('a4', 'mm')
            ->enableLinks()
            ->margin([10, 10, 10, 10])
            ->content(fn($record) => view($view, ['record' => $record]))
            ->visible($visibleCallback);
    }

    // =========================================================================
    // VISIBILITY RULES
    // =========================================================================

    private function getCalonSiswa(): ?CalonSiswa
    {
        return CalonSiswa::where('nisn', Auth::user()->username)->first();
    }

    private function canPrintFormulir(): bool
    {
        $cs = $this->getCalonSiswa();
        if (! $cs) {
            return false;
        }

        // Boleh cetak jika formulir sudah Disetujui
        return $cs->status_formulir === 'Disetujui';
    }

    private function canPrintKartuTes(): bool
    {
        $cs = $this->getCalonSiswa();
        if (! $cs) {
            return false;
        }

        // Blokir jika belum disetujui atau sudah final
        if (! in_array($cs->status_formulir, ['Disetujui'])) {
            return false;
        }

        if (in_array($cs->status_pendaftaran, [
            'Tidak Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
        ])) {
            return false;
        }

        return $this->isWithinKartuTesPeriod();
    }

    private function canPrintHasil(): bool
    {
        $cs = $this->getCalonSiswa();
        if (! $cs) {
            return false;
        }

        // Hanya yang sudah punya keputusan final
        if (! in_array($cs->status_pendaftaran, [
            'Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
            'Tidak Diterima',
        ])) {
            return false;
        }

        return $this->isWithinPengumumanPeriod();
    }

    // =========================================================================
    // DATE RANGE HELPERS
    // =========================================================================

    private function getActiveTahunPendaftaran(): ?object
    {
        return DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();
    }

    private function isWithinKartuTesPeriod(): bool
    {
        $t = $this->getActiveTahunPendaftaran();

        if (! $t?->tanggal_penerbitan_kartu_tes_mulai || ! $t?->tanggal_penerbitan_kartu_tes_selesai) {
            return false;
        }

        return Carbon::now()->between(
            Carbon::parse($t->tanggal_penerbitan_kartu_tes_mulai),
            Carbon::parse($t->tanggal_penerbitan_kartu_tes_selesai)
        );
    }

    private function isWithinPengumumanPeriod(): bool
    {
        $t = $this->getActiveTahunPendaftaran();
        if (! $t) {
            return false;
        }

        foreach (
            [
                ['tanggal_pengumuman_jalur_prestasi_mulai',  'tanggal_pengumuman_jalur_prestasi_selesai'],
                ['tanggal_pengumuman_jalur_reguler_mulai',   'tanggal_pengumuman_jalur_reguler_selesai'],
                ['tanggal_pengumuman_jalur_afirmasi_mulai',  'tanggal_pengumuman_jalur_afirmasi_selesai'],
                ['tanggal_pengumuman_jalur_zonasi_mulai',    'tanggal_pengumuman_jalur_zonasi_selesai'],
                ['tanggal_pengumuman_jalur_mutasi_mulai',    'tanggal_pengumuman_jalur_mutasi_selesai'],
            ] as [$mulai, $selesai]
        ) {
            if ($t->{$mulai} && $t->{$selesai}) {
                if (Carbon::now()->between(
                    Carbon::parse($t->{$mulai}),
                    Carbon::parse($t->{$selesai})
                )) {
                    return true;
                }
            }
        }

        return false;
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Constants\FormOptions;
use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource\Pages;
use App\Models\CalonSiswa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $navigationGroup = 'Pendaftaran';

    protected static ?string $slug = 'formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function getNavigationBadge(): ?string
    {
        return (string) CalonSiswa::count();
    }

    /**
     * Nonaktifkan skip antar step wizard.
     * User wajib menyelesaikan setiap step secara berurutan.
     * Ini memastikan semua field required terisi sebelum submit.
     */
    public static function canSkipWizardSteps(): bool
    {
        return false;
    }

    // -----------------------------------------------------------------------
    // Helpers
    // -----------------------------------------------------------------------

    private static function isCalonSiswa(): bool
    {
        return Auth::user()->hasRole('calon_siswa');
    }

    private static function isAdminOrAbove(): bool
    {
        return Auth::user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']);
    }

    private static function isSuperAdmin(): bool
    {
        return Auth::user()->hasRole('super_admin');
    }

    // -----------------------------------------------------------------------
    // Opsi reusable
    // -----------------------------------------------------------------------

    private static function opsiPekerjaan(): array
    {
        return [
            'Tidak Bekerja' => 'Tidak Bekerja',
            'ASN' => 'ASN',
            'TNI/POLRI' => 'TNI/POLRI',
            'Karyawan Swasta' => 'Karyawan Swasta',
            'Wirausaha' => 'Wirausaha',
            'Petani' => 'Petani',
            'Nelayan' => 'Nelayan',
            'Buruh' => 'Buruh',
            'Lainnya' => 'Lainnya',
        ];
    }

    private static function opsiPenghasilan(): array
    {
        return [
            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
            'Rp. 1.000.000 - Rp. 2.000.000' => 'Rp. 1.000.000 - Rp. 2.000.000',
            'Rp. 2.000.000 - Rp. 3.000.000' => 'Rp. 2.000.000 - Rp. 3.000.000',
            'Rp. 3.000.000 - Rp. 5.000.000' => 'Rp. 3.000.000 - Rp. 5.000.000',
            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
        ];
    }

    private static function opsiPendidikan(): array
    {
        return [
            'Tidak Sekolah' => 'Tidak Sekolah',
            'SD/MI Sederajat' => 'SD/MI Sederajat',
            'SMP/MTs Sederajat' => 'SMP/MTs Sederajat',
            'SMA/MA/SMK' => 'SMA/MA/SMK',
            'D1/D2/D3' => 'D1/D2/D3',
            'S1' => 'S1',
            'S2' => 'S2',
            'S3' => 'S3',
        ];
    }

    private static function opsiStatus(): array
    {
        return ['Hidup' => 'Hidup', 'Meninggal' => 'Meninggal'];
    }

    private static function opsiStatusPendaftaran(): array
    {
        $base = [
            'Diproses' => 'Diproses',
        ];

        $admin = [
            'Tidak Diterima' => 'Tidak Diterima',
            'Diterima' => 'Diterima',
            'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
        ];

        return self::isSuperAdmin() ? array_merge($base, $admin) : $base;
    }

    // -----------------------------------------------------------------------
    // Wilayah — reusable field group
    // -----------------------------------------------------------------------

    /**
     * Generate 5 field Select wilayah (Negara → Provinsi → Kabupaten → Kecamatan → Kelurahan)
     * dengan cascade reset otomatis.
     *
     * @param  string  $prefix  e.g. 'siswa', 'ibu', 'ayah', 'wali'
     */
    private static function wilayahFields(string $prefix, bool $required = true): array
    {
        $neg = "{$prefix}_negara_id";
        $pro = "{$prefix}_provinsi_id";
        $kab = "{$prefix}_kabupaten_id";
        $kec = "{$prefix}_kecamatan_id";
        $kel = "{$prefix}_kelurahan_id";

        return [
            Select::make($neg)
                ->label('Negara')
                ->relationship("{$prefix}Negara", 'nama')
                ->required($required)
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(fn (Set $set) => $set($pro, null)),

            Select::make($pro)
                ->label('Provinsi')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn (string $search, Get $get) => Provinsi::query()
                        ->where('negara_id', $get($neg))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn ($v): ?string => Provinsi::find($v)?->nama)
                ->afterStateUpdated(fn (Set $set) => $set($kab, null)),

            Select::make($kab)
                ->label('Kabupaten / Kota')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn (string $search, Get $get) => Kabupaten::query()
                        ->where('provinsi_id', $get($pro))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn ($v): ?string => Kabupaten::find($v)?->nama)
                ->afterStateUpdated(fn (Set $set) => $set($kec, null)),

            Select::make($kec)
                ->label('Kecamatan')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn (string $search, Get $get) => Kecamatan::query()
                        ->where('kabupaten_id', $get($kab))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn ($v): ?string => Kecamatan::find($v)?->nama)
                ->afterStateUpdated(fn (Set $set) => $set($kel, null)),

            Select::make($kel)
                ->label('Kelurahan / Desa')
                ->searchable()
                ->required($required)
                ->getSearchResultsUsing(
                    fn (string $search, Get $get) => Kelurahan::query()
                        ->where('kecamatan_id', $get($kec))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn ($v): ?string => Kelurahan::find($v)?->nama),
        ];
    }

    // -----------------------------------------------------------------------
    // Form
    // -----------------------------------------------------------------------

    public static function form(Form $form): Form
    {
        $isCalonSiswa = self::isCalonSiswa();

        return $form->schema([
            Wizard::make([

                // ============================================================
                // STEP 1 — Data Calon Siswa
                // ============================================================
                Step::make('Data Calon Siswa')
                    ->icon('heroicon-o-user')
                    ->schema([

                        // --- Section admin-only: status & kelas ---
                        Section::make('Status Pendaftaran')
                            ->visible(! $isCalonSiswa)
                            ->columns(2)
                            ->schema([
                                Select::make('status_pendaftaran')
                                    ->label('Status Pendaftaran')
                                    ->options(fn () => self::opsiStatusPendaftaran())
                                    ->default('Diproses')
                                    ->required()
                                    ->native(false)
                                    ->live(),

                                Select::make('status_formulir')
                                    ->label('Status Formulir')
                                    ->options([
                                        'Diproses' => 'Diproses',
                                        'Disetujui' => 'Disetujui',
                                        'Ditolak' => 'Ditolak',
                                    ])
                                    ->default('Diproses')
                                    ->required()
                                    ->native(false),

                                Select::make('kelas_id')
                                    ->label('Kelas')
                                    ->relationship('kelas', 'nama')
                                    ->native(false)
                                    ->searchable()
                                    ->preload()
                                    ->visible(fn (Get $get) => in_array($get('status_pendaftaran'), [
                                        'Diterima Di Kelas Reguler',
                                        'Diterima Di Kelas Unggulan',
                                    ]))
                                    ->required(fn (Get $get) => in_array($get('status_pendaftaran'), [
                                        'Diterima Di Kelas Reguler',
                                        'Diterima Di Kelas Unggulan',
                                    ])),
                            ]),

                        // --- Section: Biodata ---
                        Section::make('Biodata Calon Siswa')
                            ->icon('heroicon-m-identification')
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                Select::make('jalur_pendaftaran_id')
                                    ->label('Jalur Pendaftaran')
                                    ->relationship(
                                        'jalurPendaftaran',
                                        'nama',
                                        fn (Builder $q) => $q->where('status', 'Aktif')
                                    )
                                    ->required()
                                    ->native(false)
                                    ->live()
                                    ->getOptionLabelFromRecordUsing(
                                        fn (Model $r) => "{$r->nama} | {$r->tahunPendaftaran->nama}"
                                    ),

                                TextInput::make('nama')
                                    ->label('Nama Lengkap')
                                    ->required()
                                    ->maxLength(50)
                                    ->readOnly()
                                    ->default(fn () => Auth::user()->name),

                                TextInput::make('nisn')
                                    ->label('NISN')
                                    ->required()
                                    ->numeric()
                                    ->minLength(10)
                                    ->maxLength(10)
                                    ->readOnly()
                                    ->default(fn () => Auth::user()->username)
                                    ->unique(table: 'calon_siswas', column: 'nisn', ignoreRecord: true),

                                TextInput::make('nik')
                                    ->label('NIK')
                                    ->required()
                                    ->numeric()
                                    ->minLength(16)
                                    ->maxLength(16)
                                    ->unique(table: 'calon_siswas', column: 'nik', ignoreRecord: true),

                                TextInput::make('kk')
                                    ->label('Nomor Kartu Keluarga')
                                    ->required()
                                    ->numeric()
                                    ->minLength(16)
                                    ->maxLength(16),

                                TextInput::make('tempat_lahir')
                                    ->label('Tempat Lahir')
                                    ->required()
                                    ->maxLength(50),

                                DatePicker::make('tanggal_lahir')
                                    ->label('Tanggal Lahir')
                                    ->required()
                                    ->maxDate(now()->subYears(9))
                                    ->displayFormat('d/m/Y'),

                                Select::make('tahun_lulus')
                                    ->label('Tahun Lulus SD/MI')
                                    ->options(fn () => array_combine(
                                        range(date('Y'), date('Y') - 2),
                                        range(date('Y'), date('Y') - 2)
                                    ))
                                    ->required()
                                    ->native(false),

                                Select::make('jenis_kelamin')
                                    ->label('Jenis Kelamin')
                                    ->options(['Pria' => 'Laki-laki', 'Wanita' => 'Perempuan'])
                                    ->required()
                                    ->native(false),

                                Select::make('golongan_darah')
                                    ->label('Golongan Darah')
                                    ->options(['A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'])
                                    ->required()
                                    ->native(false),

                                Select::make('agama')
                                    ->label('Agama')
                                    ->options([
                                        'Islam' => 'Islam',
                                        'Kristen Katholik' => 'Kristen Katholik',
                                        'Kristen Protestan' => 'Kristen Protestan',
                                        'Hindu' => 'Hindu',
                                        'Buddha' => 'Buddha',
                                        'Konghucu' => 'Konghucu',
                                    ])
                                    ->required()
                                    ->native(false),

                                TextInput::make('anak_ke')->label('Anak Ke')->required()->numeric()->minValue(1),
                                TextInput::make('jumlah_saudara')->label('Dari (Jumlah Anak)')->required()->numeric()->minValue(1),

                                Select::make('tinggal_bersama')
                                    ->label('Tinggal Bersama')
                                    ->options(['Orang Tua' => 'Orang Tua', 'Saudara' => 'Saudara', 'Panti Asuhan' => 'Panti Asuhan', 'Kost' => 'Kost', 'Lainnya' => 'Lainnya'])
                                    ->required()->native(false),

                                Select::make('jarak_ke_sekolah')
                                    ->label('Jarak ke Sekolah')
                                    ->options(['0 - 1 Km' => '0 - 1 Km', '1 - 5 Km' => '1 - 5 Km', '5 - 10 Km' => '5 - 10 Km', '10 - 15 Km' => '10 - 15 Km', '15 - 20 Km' => '15 - 20 Km', '20 - 25 Km' => '20 - 25 Km', '25 - 30 Km' => '25 - 30 Km'])
                                    ->required()->native(false),

                                Select::make('disabilitas')
                                    ->label('Disabilitas')
                                    ->options(['Non Disabilitas' => 'Non Disabilitas', 'Fisik' => 'Fisik', 'Penglihatan' => 'Penglihatan', 'Pendengaran' => 'Pendengaran', 'Kognitif' => 'Kognitif', 'Mental' => 'Mental', 'Lainnya' => 'Lainnya'])
                                    ->required()->native(false),

                                TextInput::make('tinggi_badan')->label('Tinggi Badan')->numeric()->minValue(100)->maxValue(250)->suffix('cm'),
                                TextInput::make('berat_badan')->label('Berat Badan')->numeric()->minValue(20)->maxValue(200)->suffix('kg'),
                                TextInput::make('siswa_telepon')->label('Nomor Telepon (WhatsApp)')->tel()->maxLength(20),

                                Select::make('sekolah_asal_id')
                                    ->label('Sekolah Asal')
                                    ->relationship('sekolahAsal', 'nama')
                                    ->required()->native(false)->searchable()->preload()
                                    ->getOptionLabelFromRecordUsing(fn (Model $r) => "{$r->nama} | NPSN: {$r->npsn}"),

                                Select::make('ekstrakurikuler_id')
                                    ->label('Pilihan Ekstrakurikuler')
                                    ->relationship('ekstrakurikuler', 'nama')
                                    ->native(false)->searchable()->preload(),

                                Select::make('mata_pelajaran_id')
                                    ->label('Mata Pelajaran Favorit')
                                    ->relationship('mataPelajaran', 'nama')
                                    ->native(false)->searchable()->preload(),

                                Toggle::make('penerima_kip')
                                    ->label('Penerima KIP / KKS / PKH?')
                                    ->live()->columnSpanFull(),

                                TextInput::make('no_kip')->label('Nomor KIP')
                                    ->visible(fn (Get $get) => (bool) $get('penerima_kip'))
                                    ->required(fn (Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_kip', ignoreRecord: true),

                                TextInput::make('no_kks')->label('Nomor KKS')
                                    ->visible(fn (Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_kks', ignoreRecord: true),

                                TextInput::make('no_pkh')->label('Nomor PKH')
                                    ->visible(fn (Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_pkh', ignoreRecord: true),
                            ]),

                        // --- Section: Alamat ---
                        Section::make('Alamat Domisili')
                            ->icon('heroicon-m-map-pin')
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                ...self::wilayahFields('siswa'),
                                TextInput::make('siswa_alamat')
                                    ->label('Jalan / Kampung / Dusun')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Kp. Kebon Cau RT 001 RW 005')
                                    ->columnSpanFull(),
                            ]),

                        // --- Section: Berkas ---
                        Section::make('Upload Berkas')
                            ->icon('heroicon-m-paper-clip')
                            ->columns(['sm' => 1, 'md' => 2])
                            ->schema([
                                FileUpload::make('berkas_foto')
                                    ->label('Foto Formal (Latar Merah)')
                                    ->image()->required()
                                    ->directory(fn () => 'berkas/foto/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_kk')
                                    ->label('Kartu Keluarga (KK)')
                                    ->image()->required()
                                    ->directory(fn () => 'berkas/kk/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_akta')
                                    ->label('Akta Kelahiran')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn () => 'berkas/akta/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_skbb')
                                    ->label('SKBB')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn () => 'berkas/skbb/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_skab')
                                    ->label('SKAB')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn () => 'berkas/skab/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_nisn')
                                    ->label('Kartu NISN')
                                    ->image()
                                    ->directory(fn () => 'berkas/nisn/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('Opsional. JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_kip')
                                    ->label('Kartu KIP')
                                    ->image()
                                    ->visible(fn (Get $get) => (bool) $get('penerima_kip'))
                                    ->required(fn (Get $get) => (bool) $get('penerima_kip') && $get('no_kip'))
                                    ->directory(fn () => 'berkas/kip/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),

                                FileUpload::make('berkas_kks')
                                    ->label('Kartu KKS')
                                    ->image()
                                    ->visible(fn (Get $get) => (bool) $get('penerima_kip') && $get('no_kks'))
                                    ->directory(fn () => 'berkas/kks/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),

                                FileUpload::make('berkas_pkh')
                                    ->label('Kartu PKH')
                                    ->image()
                                    ->visible(fn (Get $get) => (bool) $get('penerima_kip') && $get('no_pkh'))
                                    ->directory(fn () => 'berkas/pkh/'.Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),
                            ]),
                    ]),

                // ============================================================
                // STEP 2 — Data Orang Tua / Wali
                // ============================================================
                Step::make('Data Orang Tua')
                    ->icon('heroicon-o-user-group')
                    ->schema([

                        // --- IBU ---
                        Section::make('Data Ibu Kandung')
                            ->icon('heroicon-m-user')
                            ->collapsible()
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                TextInput::make('ibu_nama')->label('Nama Ibu')->required()->maxLength(50),
                                TextInput::make('ibu_nik')->label('NIK Ibu')->required()->numeric()->minLength(16)->maxLength(16),
                                TextInput::make('ibu_telepon')->label('Nomor Telepon')->tel()->required()->maxLength(20),
                                Select::make('ibu_pekerjaan')->label('Pekerjaan')->options(fn () => self::opsiPekerjaan())->required()->native(false),
                                Select::make('ibu_penghasilan')->label('Penghasilan')->options(fn () => self::opsiPenghasilan())->required()->native(false),
                                Select::make('ibu_pendidikan')->label('Pendidikan Terakhir')->options(fn () => self::opsiPendidikan())->required()->native(false),
                                Select::make('ibu_status')->label('Status')->options(fn () => self::opsiStatus())->required()->native(false)->live(),
                                TextInput::make('ibu_alamat')->label('Jalan / Kampung / Dusun')->maxLength(255),
                                ...self::wilayahFields('ibu'),
                            ]),

                        // --- AYAH ---
                        Section::make('Data Ayah Kandung')
                            ->icon('heroicon-m-user')
                            ->collapsible()
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                TextInput::make('ayah_nama')->label('Nama Ayah')->required()->maxLength(50),
                                TextInput::make('ayah_nik')->label('NIK Ayah')->required()->numeric()->minLength(16)->maxLength(16),
                                TextInput::make('ayah_telepon')->label('Nomor Telepon')->tel()->required()->maxLength(20),
                                Select::make('ayah_pekerjaan')->label('Pekerjaan')->options(fn () => self::opsiPekerjaan())->required()->native(false),
                                Select::make('ayah_penghasilan')->label('Penghasilan')->options(fn () => self::opsiPenghasilan())->required()->native(false),
                                Select::make('ayah_pendidikan')->label('Pendidikan Terakhir')->options(fn () => self::opsiPendidikan())->required()->native(false),
                                Select::make('ayah_status')->label('Status')->options(fn () => self::opsiStatus())->required()->native(false)->live(),
                                Select::make('kepemilikan_rumah')
                                    ->label('Status Kepemilikan Rumah')
                                    ->options(['Rumah Pribadi' => 'Rumah Pribadi', 'Kontrakan' => 'Kontrakan', 'Rumah Dinas' => 'Rumah Dinas', 'Menumpang Saudara' => 'Menumpang Saudara'])
                                    ->required()->native(false),
                                TextInput::make('ayah_alamat')->label('Jalan / Kampung / Dusun')->maxLength(255),
                                ...self::wilayahFields('ayah'),
                            ]),

                        // --- WALI (opsional) ---
                        Section::make('Data Wali (Opsional)')
                            ->icon('heroicon-m-user')
                            ->collapsible()
                            ->collapsed()
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                TextInput::make('wali_nama')->label('Nama Wali')->maxLength(50),
                                TextInput::make('wali_nik')->label('NIK Wali')->numeric()->minLength(16)->maxLength(16),
                                TextInput::make('wali_telepon')->label('Nomor Telepon')->tel()->maxLength(20),
                                Select::make('wali_pekerjaan')->label('Pekerjaan')->options(fn () => self::opsiPekerjaan())->native(false),
                                Select::make('wali_penghasilan')->label('Penghasilan')->options(fn () => self::opsiPenghasilan())->native(false),
                                Select::make('wali_pendidikan')->label('Pendidikan Terakhir')->options(fn () => self::opsiPendidikan())->native(false),
                                Select::make('wali_status')->label('Status')->options(fn () => self::opsiStatus())->native(false),
                                TextInput::make('wali_alamat')->label('Jalan / Kampung / Dusun')->maxLength(255),
                                ...self::wilayahFields('wali', required: false),
                            ]),
                    ]),

                // ============================================================
                // STEP 3 — Data Tes (admin/panitia only)
                // ============================================================
                Step::make('Data Tes')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->hidden(fn () => $isCalonSiswa)
                    ->schema([
                        Section::make('Jadwal Tes')
                            ->columns(2)
                            ->schema([
                                TextInput::make('tes_sesi')
                                    ->label('Sesi Tes')
                                    ->maxLength(20),

                                TextInput::make('tes_ruang')
                                    ->label('Ruang Tes')
                                    ->maxLength(20),

                                DateTimePicker::make('tes_akademik')
                                    ->label('Waktu Tes Akademik')
                                    ->seconds(false)
                                    ->displayFormat('d/m/Y H:i'),

                                DateTimePicker::make('tes_praktik')
                                    ->label('Waktu Tes Praktik')
                                    ->seconds(false)
                                    ->displayFormat('d/m/Y H:i'),
                            ]),

                        Section::make('Nilai Tes')
                            ->columns(2)
                            ->schema([
                                TextInput::make('bobot_nilai_akademik')
                                    ->label('Bobot Nilai Akademik (%)')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->suffix('%'),

                                TextInput::make('bobot_nilai_praktik')
                                    ->label('Bobot Nilai Praktik (%)')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->suffix('%'),

                                TextInput::make('nilai_akademik')
                                    ->label('Nilai Tes Akademik')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100),

                                TextInput::make('nilai_praktik')
                                    ->label('Nilai Tes Praktik')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100),
                            ]),
                    ]),

            ])->columnSpanFull(),
        ]);
    }

    // -----------------------------------------------------------------------
    // Table
    // -----------------------------------------------------------------------

    public static function table(Table $table): Table
    {
        $isCalonSiswa = self::isCalonSiswa();
        $isSuperAdmin = self::isSuperAdmin();

        return $table
            ->query(
                $isCalonSiswa
                    ? CalonSiswa::query()->where('user_id', Auth::id())
                    : CalonSiswa::query()
            )
            ->defaultSort('created_at', 'desc')
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl(fn () => 'https://ui-avatars.com/api/?name=CS&color=7F9CF5&background=EBF4FF'),

                TextColumn::make('nomor_pendaftaran')
                    ->label('No. Daftar')
                    ->searchable()
                    ->copyable()
                    ->visible(! $isCalonSiswa),

                TextColumn::make('jalurPendaftaran.nama')
                    ->label('Jalur')
                    ->badge()
                    ->colors([
                        'primary' => 'Prestasi',
                        'success' => 'Reguler',
                        'warning' => 'Afirmasi',
                        'info' => 'Zonasi',
                        'danger' => 'Mutasi',
                    ]),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('sekolahAsal.nama')
                    ->label('Sekolah Asal')
                    ->searchable()
                    ->visible(! $isCalonSiswa)
                    ->limit(30)
                    ->tooltip(fn (TextColumn $col): ?string => strlen($col->getState()) > 30 ? $col->getState() : null),
                TextColumn::make('status_formulir')
                    ->label('Status Formulir')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'Diproses' => 'warning',
                        'Berkas Tidak Lengkap' => 'danger',
                        'Disetujui' => 'success',
                        'Ditolak' => 'danger',
                        default => 'gray',
                    }),
                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'Diproses' => 'gray',
                        'Diterima',
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan' => 'success',
                        'Tidak Diterima' => 'danger',
                        default => 'gray',
                    })
                    ->visible(fn () => ! $isCalonSiswa || $isSuperAdmin),
                TextColumn::make('kelas.nama')
                    ->label('Kelas')
                    ->badge()
                    ->visible(! $isCalonSiswa),

                TextColumn::make('created_at')
                    ->label('Tgl. Daftar')
                    ->date('d/m/Y')
                    ->sortable()
                    ->visible(! $isCalonSiswa),
            ])
            ->filters([
                TrashedFilter::make()
                    ->visible($isSuperAdmin),

                SelectFilter::make('jalur_pendaftaran_id')
                    ->label('Jalur Pendaftaran')
                    ->options(
                        fn () => \App\Models\JalurPendaftaran::where('status', 'Aktif')
                            ->pluck('nama', 'id')
                            ->toArray()
                    )
                    ->visible(! $isCalonSiswa),

                SelectFilter::make('status_formulir')
                    ->label('Status Formulir')
                    ->options(FormOptions::STATUS_FORMULIR)
                    ->visible(! $isCalonSiswa),

                SelectFilter::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options(FormOptions::STATUS_PENDAFTARAN_SUPER_ADMIN)
                    ->visible(! $isCalonSiswa),
                SelectFilter::make('kelas_id')
                    ->label('Kelas')
                    ->options(
                        fn () => \App\Models\Kelas::pluck('nama', 'id')->toArray()
                    )
                    ->visible(! $isCalonSiswa),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),

                    Tables\Actions\EditAction::make()
                        ->visible(fn () => ! $isCalonSiswa),

                    Tables\Actions\DeleteAction::make()
                        ->visible(fn ($record) => $isSuperAdmin && ! $record->trashed()),

                    Tables\Actions\RestoreAction::make()
                        ->visible(fn ($record) => $isSuperAdmin && $record->trashed()),

                    Tables\Actions\ForceDeleteAction::make()
                        ->visible(fn ($record) => $isSuperAdmin && $record->trashed()),
                    Tables\Actions\Action::make('kirim_notifikasi')
                        ->label('Kirim Notifikasi')
                        ->icon('heroicon-o-chat-bubble-left-ellipsis')
                        ->color('info')
                        ->requiresConfirmation()
                        ->modalHeading('Kirim Notifikasi WhatsApp')
                        ->modalDescription(fn ($record) => "Kirim ulang notifikasi status pendaftaran ke {$record->nama}?")
                        ->modalSubmitActionLabel('Kirim Sekarang')
                        ->visible(fn () => auth()->user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']))
                        ->action(function ($record) {
                            $telepon = $record->user?->telepon;

                            if (! $telepon) {
                                \Filament\Notifications\Notification::make()
                                    ->title('Gagal')
                                    ->body('Calon siswa ini tidak memiliki nomor WhatsApp.')
                                    ->danger()
                                    ->send();

                                return;
                            }

                            $pesan = "📢 *Informasi Status Pendaftaran*\n\n"
                                ."Halo, *{$record->nama}*!\n"
                                ."Berikut status pendaftaran kamu saat ini:\n\n"
                                ."📋 No. Pendaftaran : *{$record->nomor_pendaftaran}*\n"
                                ."📄 Status Formulir : *{$record->status_formulir}*\n"
                                ."📌 Status Pendaftaran : *{$record->status_pendaftaran}*\n\n"
                                ."Silakan login ke sistem PPDB untuk informasi lebih lanjut.\n"
                                .'_MTsN 1 Pandeglang_';

                            app(\App\Services\WhatsAppService::class)->send(
                                phone: $telepon,
                                message: $pesan,
                                minDelay: 1,
                                maxDelay: 10,
                            );

                            \Filament\Notifications\Notification::make()
                                ->title('Notifikasi dijadwalkan')
                                ->body("Pesan akan dikirim ke {$record->nama} dalam beberapa detik.")
                                ->success()
                                ->send();
                        }),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->visible($isSuperAdmin),

                    ForceDeleteBulkAction::make()
                        ->visible($isSuperAdmin),

                    RestoreBulkAction::make()
                        ->visible($isSuperAdmin),

                    ExportBulkAction::make()
                        ->exporter(CalonSiswaExporter::class)
                        ->visible(! $isCalonSiswa),

                    BulkAction::make('set_jalur_pendaftaran')
                        ->label('Set Jalur Pendaftaran')
                        ->icon('heroicon-o-sparkles')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->visible($isSuperAdmin)
                        ->form([
                            Select::make('jalur_pendaftaran_id')
                                ->label('Jalur Pendaftaran')
                                // Ganti relationship() → options() karena tidak ada model context di BulkAction
                                ->options(
                                    \App\Models\JalurPendaftaran::where('status', 'Aktif')
                                        ->pluck('nama', 'id')
                                        ->toArray()
                                )
                                ->native(false)
                                ->required(),
                        ])
                        ->action(
                            fn (Collection $records, array $data) => $records->each(
                                fn ($r) => CalonSiswa::where('id', $r->id)
                                    ->update(['jalur_pendaftaran_id' => $data['jalur_pendaftaran_id']])
                            )
                        ),

                    BulkAction::make('set_status_pendaftaran')
                        ->label('Set Status Pendaftaran')
                        ->icon('heroicon-o-arrow-path')
                        ->color('warning')
                        ->requiresConfirmation()
                        ->visible($isSuperAdmin)
                        ->form([
                            Select::make('status_pendaftaran')
                                ->label('Status')
                                ->options(fn () => self::opsiStatusPendaftaran())
                                ->native(false)
                                ->required(),

                            // Kelas muncul kondisional — pakai live() + visible()
                            Select::make('kelas_id')
                                ->label('Kelas')
                                ->options(
                                    \App\Models\Kelas::pluck('nama', 'id')->toArray()
                                )
                                ->native(false)
                                ->live()
                                ->visible(fn (Get $get) => in_array($get('status_pendaftaran'), [
                                    'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan',
                                ]))
                                ->required(fn (Get $get) => in_array($get('status_pendaftaran'), [
                                    'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan',
                                ])),
                        ])
                        ->action(
                            fn (Collection $records, array $data) => $records->each(function ($r) use ($data) {
                                $update = ['status_pendaftaran' => $data['status_pendaftaran']];

                                if (! empty($data['kelas_id'])) {
                                    $update['kelas_id'] = $data['kelas_id'];
                                }

                                CalonSiswa::where('id', $r->id)->update($update);
                            })
                        ),
                    Tables\Actions\BulkAction::make('kirim_notifikasi_massal')
                        ->label('Kirim Notifikasi')
                        ->icon('heroicon-o-chat-bubble-left-ellipsis')
                        ->color('info')
                        ->requiresConfirmation()
                        ->modalHeading('Kirim Notifikasi Massal')
                        ->modalDescription('Notifikasi status pendaftaran akan dikirim ke semua peserta yang dipilih.')
                        ->modalSubmitActionLabel('Kirim Sekarang')
                        ->deselectRecordsAfterCompletion()
                        ->visible(fn () => auth()->user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']))
                        ->action(function (\Illuminate\Support\Collection $records) {
                            $wa = app(\App\Services\WhatsAppService::class);

                            $berhasil = 0;
                            $gagal = 0;

                            foreach ($records as $record) {
                                $telepon = $record->user?->telepon;

                                if (! $telepon) {
                                    $gagal++;

                                    continue;
                                }

                                $pesan = "📢 *Informasi Status Pendaftaran*\n\n"
                                    ."Halo, *{$record->nama}*!\n"
                                    ."Berikut status pendaftaran kamu saat ini:\n\n"
                                    ."📋 No. Pendaftaran : *{$record->nomor_pendaftaran}*\n"
                                    ."📄 Status Formulir : *{$record->status_formulir}*\n"
                                    ."📌 Status Pendaftaran : *{$record->status_pendaftaran}*\n\n"
                                    ."Silakan login ke sistem PPDB untuk informasi lebih lanjut.\n"
                                    .'_MTsN 1 Pandeglang_';

                                // Delay lebih besar untuk bulk — spread pengiriman
                                $wa->send(
                                    phone: $telepon,
                                    message: $pesan,
                                    minDelay: 10,
                                    maxDelay: 120,
                                );

                                $berhasil++;
                            }

                            \Filament\Notifications\Notification::make()
                                ->title("Notifikasi dijadwalkan: {$berhasil} berhasil, {$gagal} dilewati")
                                ->body($gagal > 0 ? "{$gagal} peserta tidak memiliki nomor WhatsApp." : null)
                                ->success()
                                ->send();
                        }),
                ]),
            ])
            ->striped()
            ->poll('60s');
    }

    // -----------------------------------------------------------------------
    // Pages
    // -----------------------------------------------------------------------

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalonSiswas::route('/'),
            'create' => Pages\CreateCalonSiswa::route('/create'),
            'view' => Pages\ViewCalonSiswa::route('/{record}'),
            'edit' => Pages\EditCalonSiswa::route('/{record}/edit'),
        ];
    }

    // -----------------------------------------------------------------------
    // Eloquent query — pastikan soft delete scope benar
    // -----------------------------------------------------------------------

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource/Widgets/FormulirOverview.php`

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Widgets;

use App\Models\CalonSiswa;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class FormulirOverview extends BaseWidget
{
    protected static bool $isLazy = false;

    protected ?string $heading = 'Statistik Pendaftaran';

    protected static ?int $sort = 0;

    protected static ?string $pollingInterval = '60s';

    private function chartBy(string $col, ?string $val = null): array
    {
        return CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
            ->when($val, fn($q) => $q->where($col, $val))
            ->groupBy('hari')
            ->orderBy('hari')
            ->pluck('total')
            ->toArray();
    }

    private function makeStat(
        string $value,
        string $label,
        string $icon,
        string $color,
        array $chart,
        string $href
    ): Stat {
        return Stat::make('', $value)
            ->description($label)
            ->descriptionIcon($icon, IconPosition::Before)
            ->color($color)
            ->chart($chart)
            ->extraAttributes([
                'class' => 'cursor-pointer transition hover:opacity-80',
                'onclick' => "window.location.href='{$href}'",
            ]);
    }

    private function url(string $filter = ''): string
    {
        return "/formulir{$filter}";
    }

    protected function getStats(): array
    {
        $user = Auth::user();
        $isCalonSiswa = $user->hasRole('calon_siswa');

        $statusCount = CalonSiswa::selectRaw('status_pendaftaran, COUNT(*) as total')
            ->groupBy('status_pendaftaran')
            ->pluck('total', 'status_pendaftaran')
            ->toArray();

        $formulirCount = CalonSiswa::selectRaw('status_formulir, COUNT(*) as total')
            ->groupBy('status_formulir')
            ->pluck('total', 'status_formulir')
            ->toArray();

        $totalPendaftar   = array_sum($statusCount);
        $diproses         = $statusCount['Diproses'] ?? 0;
        $diterima         = $statusCount['Diterima'] ?? 0;
        $diterimaReguler  = $statusCount['Diterima Di Kelas Reguler'] ?? 0;
        $diterimaUnggulan = $statusCount['Diterima Di Kelas Unggulan'] ?? 0;
        $tidakDiterima    = $statusCount['Tidak Diterima'] ?? 0;

        $fDiproses  = $formulirCount['Diproses'] ?? 0;
        $fBerkas    = $formulirCount['Berkas Tidak Lengkap'] ?? 0;
        $fDisetujui = $formulirCount['Disetujui'] ?? 0;
        $fDitolak   = $formulirCount['Ditolak'] ?? 0;

        if ($isCalonSiswa) {
            $cs = CalonSiswa::withoutGlobalScope('tahun_aktif')
                ->where('user_id', $user->id)
                ->latest()
                ->first();

            $statusLabel  = $cs?->status_pendaftaran ?? 'Belum Mendaftar';
            $formulirLabel = $cs?->status_formulir ?? '-';

            [$statusColor, $statusIcon] = match ($cs?->status_pendaftaran) {
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan' => ['success', 'heroicon-o-check-circle'],
                'Tidak Diterima'             => ['danger',  'heroicon-o-no-symbol'],
                default                      => ['warning', 'heroicon-o-arrow-path'],
            };

            [$formulirColor, $formulirIcon] = match ($cs?->status_formulir) {
                'Disetujui'          => ['success', 'heroicon-o-document-check'],
                'Berkas Tidak Lengkap',
                'Ditolak'            => ['danger',  match ($cs?->status_formulir) {
                    'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                    default                => 'heroicon-o-x-circle',
                }],
                default              => ['warning', 'heroicon-o-arrow-path'],
            };

            return [
                $this->makeStat(
                    "{$totalPendaftar} Peserta",
                    'Total Pendaftar',
                    'heroicon-o-users',
                    'gray',
                    $this->chartBy('status_pendaftaran'),
                    $this->url()
                ),
                $this->makeStat(
                    $statusLabel,
                    'Status Pendaftaran Kamu',
                    $statusIcon,
                    $statusColor,
                    $this->chartBy('status_pendaftaran', $cs?->status_pendaftaran),
                    $this->url()
                ),
                $this->makeStat(
                    $formulirLabel,
                    'Status Formulir Kamu',
                    $formulirIcon,
                    $formulirColor,
                    $this->chartBy('status_formulir', $cs?->status_formulir),
                    $this->url()
                ),
            ];
        }

        return [
            $this->makeStat(
                "{$totalPendaftar} Peserta",
                'Total Pendaftar',
                'heroicon-o-users',
                'gray',
                $this->chartBy('status_pendaftaran'),
                $this->url()
            ),
            $this->makeStat(
                "{$fDiproses} Formulir",
                'Formulir Diproses',
                'heroicon-o-arrow-path',
                'warning',
                $this->chartBy('status_formulir', 'Diproses'),
                $this->url('?tableFilters[status_formulir][value]=Diproses')
            ),
            $this->makeStat(
                "{$fBerkas} Formulir",
                'Berkas Tidak Lengkap',
                'heroicon-o-document-minus',
                'danger',
                $this->chartBy('status_formulir', 'Berkas Tidak Lengkap'),
                $this->url('?tableFilters[status_formulir][value]=Berkas+Tidak+Lengkap')
            ),
            $this->makeStat(
                "{$fDisetujui} Formulir",
                'Formulir Disetujui',
                'heroicon-o-document-check',
                'success',
                $this->chartBy('status_formulir', 'Disetujui'),
                $this->url('?tableFilters[status_formulir][value]=Disetujui')
            ),
            $this->makeStat(
                "{$fDitolak} Formulir",
                'Formulir Ditolak',
                'heroicon-o-x-circle',
                'danger',
                $this->chartBy('status_formulir', 'Ditolak'),
                $this->url('?tableFilters[status_formulir][value]=Ditolak')
            ),
            $this->makeStat(
                "{$diproses} Peserta",
                'Pendaftaran Diproses',
                'heroicon-o-clock',
                'gray',
                $this->chartBy('status_pendaftaran', 'Diproses'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diproses')
            ),
            $this->makeStat(
                "{$diterima} Peserta",
                'Diterima — Jalur Prestasi',
                'heroicon-o-star',
                'success',
                $this->chartBy('status_pendaftaran', 'Diterima'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diterima')
            ),
            $this->makeStat(
                "{$diterimaReguler} Peserta",
                'Diterima — Kelas Reguler',
                'heroicon-o-shield-check',
                'success',
                $this->chartBy('status_pendaftaran', 'Diterima Di Kelas Reguler'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Reguler')
            ),
            $this->makeStat(
                "{$diterimaUnggulan} Peserta",
                'Diterima — Kelas Unggulan',
                'heroicon-o-shield-check',
                'info',
                $this->chartBy('status_pendaftaran', 'Diterima Di Kelas Unggulan'),
                $this->url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Unggulan')
            ),
            $this->makeStat(
                "{$tidakDiterima} Peserta",
                'Tidak Diterima',
                'heroicon-o-no-symbol',
                'danger',
                $this->chartBy('status_pendaftaran', 'Tidak Diterima'),
                $this->url('?tableFilters[status_pendaftaran][value]=Tidak+Diterima')
            ),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/EkstrakurikulerResource/Pages/CreateEkstrakurikuler.php`

```php
<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEkstrakurikuler extends CreateRecord
{
    protected static string $resource = EkstrakurikulerResource::class;
}

```

---

### 📄 `./app/Filament/Resources/EkstrakurikulerResource/Pages/EditEkstrakurikuler.php`

```php
<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditEkstrakurikuler extends EditRecord
{
    protected static string $resource = EkstrakurikulerResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/EkstrakurikulerResource/Pages/ListEkstrakurikulers.php`

```php
<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEkstrakurikulers extends ListRecords
{
    protected static string $resource = EkstrakurikulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/EkstrakurikulerResource/Pages/ViewEkstrakurikuler.php`

```php
<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEkstrakurikuler extends ViewRecord
{
    protected static string $resource = EkstrakurikulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/EkstrakurikulerResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstrakurikulerResource\Pages;
use App\Models\Ekstrakurikuler;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class EkstrakurikulerResource extends Resource
{
    protected static ?string $model = Ekstrakurikuler::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Ekstrakurikuler';

    protected static ?string $label = 'Ekstrakurikuler';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 11;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Ekstrakurikuler')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Ekstrakurikuler')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Ekstrakurikuler')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEkstrakurikulers::route('/'),
            'create' => Pages\CreateEkstrakurikuler::route('/create'),
            'edit' => Pages\EditEkstrakurikuler::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/FormulirPrestasiResource/Pages/CreateFormulirPrestasi.php`

```php
<?php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use App\Models\CalonSiswa;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateFormulirPrestasi extends CreateRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    // -----------------------------------------------------------------------
    // Validasi awal: calon_siswa harus sudah mendaftar lewat jalur prestasi
    // -----------------------------------------------------------------------

    public function mount(): void
    {
        parent::mount();

        if (auth()->user()?->hasRole('calon_siswa')) {
            $calonSiswa = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->with('jalurPendaftaran')
                ->first();

            // Belum isi formulir utama
            if (! $calonSiswa) {
                Notification::make()
                    ->title('Formulir Pendaftaran Belum Diisi')
                    ->body('Isi formulir pendaftaran utama terlebih dahulu.')
                    ->warning()
                    ->send();

                $this->redirect(route('filament.admin.resources.formulir.index'));

                return;
            }

            // Bukan jalur prestasi
            if (
                $calonSiswa->jalurPendaftaran &&
                strtolower($calonSiswa->jalurPendaftaran->nama) !== 'prestasi'
            ) {
                Notification::make()
                    ->title('Bukan Jalur Prestasi')
                    ->body('Fitur ini hanya untuk pendaftar jalur Prestasi.')
                    ->danger()
                    ->send();

                $this->redirect(route('filament.admin.resources.formulir.index'));
            }
        }
    }

    // -----------------------------------------------------------------------
    // Auto-inject calon_siswa_id untuk calon_siswa
    // Bypass withoutGlobalScopes() agar tidak kena scope tahun_aktif
    // -----------------------------------------------------------------------

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (auth()->user()?->hasRole('calon_siswa')) {
            $data['calon_siswa_id'] = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->value('id');
        }

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

```

---

### 📄 `./app/Filament/Resources/FormulirPrestasiResource/Pages/EditFormulirPrestasi.php`

```php
<?php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use App\Models\CalonSiswa;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditFormulirPrestasi extends EditRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    // -----------------------------------------------------------------------
    // Validasi akses: calon_siswa hanya bisa edit milik sendiri
    // -----------------------------------------------------------------------

    public function mount(int|string $record): void
    {
        parent::mount($record);

        if (auth()->user()?->hasRole('calon_siswa')) {
            $calonSiswaId = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->value('id');

            if ($this->record->calon_siswa_id !== $calonSiswaId) {
                Notification::make()
                    ->title('Akses Ditolak')
                    ->danger()
                    ->send();

                $this->redirect($this->getResource()::getUrl('index'));
            }
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()
                ->visible(auth()->user()?->hasAnyRole(['admin', 'super_admin'])),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

```

---

### 📄 `./app/Filament/Resources/FormulirPrestasiResource/Pages/ListFormulirPrestasis.php`

```php
<?php

// ListFormulirPrestasis.php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormulirPrestasis extends ListRecords
{
    protected static string $resource = FormulirPrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(auth()->user()?->hasAnyRole(['calon_siswa', 'admin', 'super_admin'])),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/FormulirPrestasiResource/Pages/ViewFormulirPrestasi.php`

```php
<?php

// ViewFormulirPrestasi.php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFormulirPrestasi extends ViewRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->visible(auth()->user()?->hasAnyRole(['calon_siswa', 'admin', 'super_admin'])),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/FormulirPrestasiResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormulirPrestasiResource\Pages;
use App\Models\CalonSiswa;
use App\Models\FormulirPrestasi;
use App\Models\Prestasi;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FormulirPrestasiResource extends Resource
{
    protected static ?string $model = FormulirPrestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationLabel = 'Formulir Prestasi';

    protected static ?string $navigationGroup = 'Pendaftaran';

    protected static ?int $navigationSort = 2;

    // -----------------------------------------------------------------------
    // Helper: cek apakah calon siswa yang login memilih jalur prestasi
    // Menggunakan once() agar query hanya jalan sekali per request
    // -----------------------------------------------------------------------

    protected static function isCalonSiswaJalurPrestasi(): bool
    {
        return once(function () {
            $calonSiswa = CalonSiswa::withoutGlobalScopes()
                ->with('jalurPendaftaran')
                ->where('user_id', auth()->id())
                ->first();

            if (! $calonSiswa || ! $calonSiswa->jalurPendaftaran) {
                return false;
            }

            return $calonSiswa->jalurPendaftaran->nama === 'Prestasi';
        });
    }

    // -----------------------------------------------------------------------
    // Navigasi: calon_siswa hanya lihat jika jalurnya Prestasi
    // -----------------------------------------------------------------------

    public static function shouldRegisterNavigation(): bool
    {
        $user = auth()->user();

        if (! $user) {
            return false;
        }

        if ($user->hasRole('calon_siswa')) {
            return self::isCalonSiswaJalurPrestasi();
        }

        return $user->hasAnyRole(['verifikator', 'panitia', 'admin', 'super_admin']);
    }

    // -----------------------------------------------------------------------
    // Query: calon_siswa hanya lihat milik sendiri + wajib jalur prestasi
    // -----------------------------------------------------------------------

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->user()?->hasRole('calon_siswa')) {
            // Block akses total jika bukan jalur prestasi (paksa via URL sekalipun)
            if (! self::isCalonSiswaJalurPrestasi()) {
                return $query->whereRaw('0 = 1');
            }

            $calonSiswaId = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->value('id');

            return $query->where('calon_siswa_id', $calonSiswaId);
        }

        return $query;
    }

    // -----------------------------------------------------------------------
    // Form
    // -----------------------------------------------------------------------

    public static function form(Form $form): Form
    {
        $isCalonSiswa = auth()->user()?->hasRole('calon_siswa');
        $isEditor = auth()->user()?->hasAnyRole(['admin', 'super_admin']);

        $calonSiswaId = $isCalonSiswa
            ? CalonSiswa::withoutGlobalScopes()->where('user_id', auth()->id())->value('id')
            : null;

        $nisn = $isCalonSiswa
            ? CalonSiswa::withoutGlobalScopes()->where('user_id', auth()->id())->value('nisn')
            : null;

        return $form->schema([

            Select::make('calon_siswa_id')
                ->label('Calon Siswa')
                ->relationship(
                    'calonSiswa',
                    'nama',
                    fn (Builder $query) => $query->withoutGlobalScopes()
                )
                ->getOptionLabelFromRecordUsing(
                    fn ($record) => "{$record->nama} — {$record->nisn}"
                )
                ->searchable()
                ->preload()
                ->required()
                ->default($calonSiswaId)
                ->hidden($isCalonSiswa)
                ->dehydrated(true),

            Select::make('prestasi_id')
                ->label('Jenis Prestasi')
                ->options(
                    Prestasi::all()->mapWithKeys(
                        fn ($p) => [
                            $p->id => "{$p->jenis} — {$p->nama}".($p->tingkat ? " ({$p->tingkat})" : ''),
                        ]
                    )
                )
                ->searchable()
                ->required()
                ->disabled(! $isCalonSiswa && ! $isEditor)
                ->columnSpanFull(),

            TextInput::make('nama_prestasi')
                ->label('Nama / Judul Prestasi')
                ->required()
                ->maxLength(100)
                ->placeholder('Contoh: Juara 1 MTQ Tingkat Kabupaten')
                ->disabled(! $isCalonSiswa && ! $isEditor),

            TextInput::make('tahun_prestasi')
                ->label('Tahun Prestasi')
                ->required()
                ->numeric()
                ->minValue(2000)
                ->maxValue((int) date('Y'))
                ->placeholder((string) date('Y'))
                ->disabled(! $isCalonSiswa && ! $isEditor),

            TextInput::make('penyelenggara_prestasi')
                ->label('Penyelenggara')
                ->required()
                ->maxLength(100)
                ->placeholder('Contoh: Kementerian Agama Kabupaten Pandeglang')
                ->disabled(! $isCalonSiswa && ! $isEditor),

            FileUpload::make('berkas_prestasi')
                ->label('Berkas Bukti Prestasi')
                ->helperText('Format: JPG, PNG, atau PDF. Ukuran: 10 KB – 1 MB.')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                ->minSize(10)
                ->maxSize(1024)
                ->visibility('private')
                ->directory(fn () => 'berkas/prestasi/'.($nisn ?? 'umum'))
                ->downloadable()
                ->openable()
                ->fetchFileInformation(false)
                ->disabled(! $isCalonSiswa && ! $isEditor)
                ->columnSpanFull(),

        ])->columns(2);
    }

    // -----------------------------------------------------------------------
    // Table
    // -----------------------------------------------------------------------

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('calonSiswa.nama')
                    ->label('Nama Pendaftar')
                    ->searchable()
                    ->sortable()
                    ->hidden(auth()->user()?->hasRole('calon_siswa')),

                TextColumn::make('prestasi.jenis')
                    ->label('Jenis')
                    ->badge()
                    ->sortable(),

                TextColumn::make('nama_prestasi')
                    ->label('Nama Prestasi')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('prestasi.tingkat')
                    ->label('Tingkat')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'Nasional' => 'danger',
                        'Provinsi' => 'warning',
                        'Kabupaten/Kota' => 'info',
                        default => 'gray',
                    }),

                TextColumn::make('tahun_prestasi')
                    ->label('Tahun')
                    ->sortable(),

                TextColumn::make('penyelenggara_prestasi')
                    ->label('Penyelenggara')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('berkas_prestasi')
                    ->label('Berkas')
                    ->formatStateUsing(fn ($state) => $state ? '✅ Ada' : '❌ Belum upload')
                    ->badge()
                    ->color(fn ($state) => $state ? 'success' : 'danger'),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('prestasi_id')
                    ->relationship('prestasi', 'jenis')
                    ->label('Jenis Prestasi'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->visible(
                        auth()->user()?->hasAnyRole(['calon_siswa', 'admin', 'super_admin'])
                    ),
                Tables\Actions\DeleteAction::make()
                    ->visible(
                        auth()->user()?->hasAnyRole(['admin', 'super_admin'])
                    ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(auth()->user()?->hasAnyRole(['admin', 'super_admin'])),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormulirPrestasis::route('/'),
            'create' => Pages\CreateFormulirPrestasi::route('/create'),
            'view' => Pages\ViewFormulirPrestasi::route('/{record}'),
            'edit' => Pages\EditFormulirPrestasi::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource/Pages/CreateInformasi.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Pages;

use App\Filament\Resources\InformasiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInformasi extends CreateRecord
{
    protected static string $resource = InformasiResource::class;
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource/Pages/EditInformasi.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Pages;

use App\Filament\Resources\InformasiResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditInformasi extends EditRecord
{
    protected static string $resource = InformasiResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource/Pages/ListInformasis.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Pages;

use App\Filament\Resources\InformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasis extends ListRecords
{
    protected static string $resource = InformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource/Pages/ViewInformasi.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Pages;

use App\Filament\Resources\InformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInformasi extends ViewRecord
{
    protected static string $resource = InformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiResource\Pages;
use App\Models\CalonSiswa;
use App\Models\Informasi;
use App\Services\WhatsAppService;
use Carbon\Carbon;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InformasiResource extends Resource
{
    protected static ?string $model = Informasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Informasi';

    protected static ?string $label = 'Informasi';

    protected static ?string $slug = 'informasi';

    protected static ?int $navigationSort = 8;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function getNavigationBadge(): ?string
    {
        return Informasi::count();
    }

    // =========================================================================
    // Form
    // =========================================================================

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->native(false)
                            ->live()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->columnSpanFull(),
                    ]),

                Section::make()
                    ->visible(fn ($get) => $get('tahun_pendaftaran_id') !== null)
                    ->schema([
                        TextInput::make('judul')
                            ->label('Judul')
                            ->required()
                            ->minLength(5)
                            ->maxLength(30)
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min' => 'Masukkan maksimal 30 karakter.',
                                'max' => 'Masukkan maksimal 30 karakter.',
                            ]),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Publish' => 'Publish', 'Draft' => 'Draft'])
                            ->native(false)
                            ->required()
                            ->live()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->dehydrated()
                            ->required()
                            ->hidden(fn (Get $get) => $get('status') !== 'Publish')
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable()
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes([
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                'application/pdf',
                                'image/png',
                                'image/jpeg',
                                'image/webp',
                            ]),

                        RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->fileAttachmentsDirectory('assets/lampiran-informasi')
                            ->fileAttachmentsVisibility('private')
                            ->disableGrammarly()
                            ->columnSpanFull(),
                    ])
                    ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
            ]);
    }

    // =========================================================================
    // Table
    // =========================================================================

    public static function table(Table $table): Table
    {
        // Konsisten dengan resource lain — pakai hasRole(), bukan cek username
        $isAdmin = Auth::user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']);

        if ($isAdmin) {
            return $table
                ->columns([
                    TextColumn::make('tahunPendaftaran.nama')
                        ->label('Tahun Pendaftaran')
                        ->badge()
                        ->color('gray')
                        ->icon('heroicon-o-calendar'),

                    TextColumn::make('judul')
                        ->label('Informasi')
                        ->description(fn (Informasi $r) => Str::limit($r->isi, 50))
                        ->icon('heroicon-o-information-circle')
                        ->iconColor('info'),

                    ImageColumn::make('gambar')
                        ->label('Lampiran'),

                    TextColumn::make('tanggal')
                        ->label('Tanggal')
                        ->dateTime('d F Y H:i:s')
                        ->sinceTooltip()
                        ->sortable(),

                    TextColumn::make('status')
                        ->label('Status')
                        ->badge()
                        ->color(fn (string $state) => match ($state) {
                            'Publish' => 'success',
                            'Draft' => 'gray',
                        }),
                ])
                ->filters([
                    SelectFilter::make('tahun_pendaftaran')
                        ->label('Tahun Pendaftaran')
                        ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif')),

                    SelectFilter::make('status')
                        ->label('Status')
                        ->options(['Publish' => 'Publish', 'Draft' => 'Draft']),
                ])
                ->actions([
                    ActionGroup::make([
                        ViewAction::make(),
                        EditAction::make(),
                        DeleteAction::make(),
                        self::notifikasiRowAction(),
                    ]),
                ], ActionsPosition::BeforeColumns)
                ->bulkActions([
                    DeleteBulkAction::make()
                        ->outlined()
                        ->hiddenLabel()
                        ->icon('heroicon-o-trash'),
                    self::notifikasiBulkAction(),
                ])
                ->striped()
                ->filtersLayout(FiltersLayout::AboveContentCollapsible)
                ->paginationPageOptions([10, 25, 50]);
        }

        // ------------------------------------------------------------------
        // View calon_siswa — read-only, tanpa action kirim notifikasi
        // ------------------------------------------------------------------
        return $table
            ->query(Informasi::where('status', 'Publish')->latest('updated_at'))
            ->columns([
                TextColumn::make('judul')
                    ->label('Informasi')
                    ->description(fn (Informasi $r) => Str::limit($r->isi, 50))
                    ->icon('heroicon-o-information-circle')
                    ->iconColor('info'),

                ImageColumn::make('gambar')
                    ->label('Lampiran'),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10]);
    }

    // =========================================================================
    // Pages
    // =========================================================================

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformasis::route('/'),
            'create' => Pages\CreateInformasi::route('/create'),
            'view' => Pages\ViewInformasi::route('/{record}'),
            'edit' => Pages\EditInformasi::route('/{record}/edit'),
        ];
    }

    // =========================================================================
    // Actions
    // =========================================================================

    private static function notifikasiRowAction(): Action
    {
        return Action::make('kirim_notifikasi')
            ->label('Kirim Notifikasi WA')
            ->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->color('info')
            ->disabled(fn ($record) => $record->status !== 'Publish')
            ->tooltip(fn ($record) => $record->status !== 'Publish' ? 'Hanya informasi berstatus Publish yang dapat dikirim' : null)
            ->form(self::targetForm())
            ->modalHeading('Kirim Notifikasi Informasi via WhatsApp')
            ->modalDescription(fn ($record) => "Informasi: \"{$record->judul}\" akan dikirim ke calon siswa yang dipilih.")
            ->modalSubmitActionLabel('Kirim Sekarang')
            ->action(function ($record, array $data) {
                // Guard — tolak jika somehow Draft lolos (misal via direct call)
                if ($record->status !== 'Publish') {
                    Notification::make()
                        ->title('Tidak dapat dikirim')
                        ->body('Hanya informasi berstatus Publish yang dapat dikirim.')
                        ->danger()
                        ->send();

                    return;
                }
                $phones = self::resolvePhones($data['targets'] ?? []);

                if ($phones->isEmpty()) {
                    Notification::make()
                        ->title('Tidak ada penerima')
                        ->body('Tidak ditemukan calon siswa dengan kriteria yang dipilih, atau belum ada nomor WhatsApp terdaftar.')
                        ->warning()
                        ->send();

                    return;
                }

                $jumlah = self::dispatchPesan($phones, self::buildPesan($record));

                Notification::make()
                    ->title("Notifikasi dijadwalkan untuk {$jumlah} penerima")
                    ->body('Pesan akan dikirim secara bertahap dalam beberapa menit.')
                    ->success()
                    ->send();
            });
    }

    private static function notifikasiBulkAction(): BulkAction
    {
        return BulkAction::make('kirim_notifikasi_massal')
            ->label('Kirim Notifikasi WA')
            ->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->color('info')
            ->deselectRecordsAfterCompletion()
            ->form(self::targetForm())
            ->modalHeading('Kirim Notifikasi Massal via WhatsApp')
            ->modalDescription('Semua informasi yang dipilih akan dikirim ke penerima yang dipilih secara bertahap.')
            ->modalSubmitActionLabel('Kirim Sekarang')
            ->action(function (Collection $records, array $data) {
                $phones = self::resolvePhones($data['targets'] ?? []);

                if ($phones->isEmpty()) {
                    Notification::make()
                        ->title('Tidak ada penerima')
                        ->body('Tidak ditemukan calon siswa dengan kriteria yang dipilih.')
                        ->warning()
                        ->send();

                    return;
                }

                $wa = app(WhatsAppService::class);
                $totalJob = 0;
                $skipped = 0;

                // Filter — hanya kirim yang Publish
                $published = $records->filter(fn ($r) => $r->status === 'Publish');
                $skipped = $records->count() - $published->count();

                foreach ($published as $record) {
                    $pesan = self::buildPesan($record);

                    foreach ($phones as $phone) {
                        $wa->send(phone: $phone, message: $pesan, minDelay: 15, maxDelay: 300);
                        $totalJob++;
                    }
                }

                if ($published->isEmpty()) {
                    Notification::make()
                        ->title('Tidak ada yang dikirim')
                        ->body('Semua informasi yang dipilih berstatus Draft.')
                        ->warning()
                        ->send();

                    return;
                }

                $skippedInfo = $skipped > 0 ? " ({$skipped} Draft dilewati)" : '';

                Notification::make()
                    ->title("{$totalJob} notifikasi dijadwalkan")
                    ->body("{$published->count()} informasi × {$phones->count()} penerima. Pesan akan terkirim secara bertahap.{$skippedInfo}")
                    ->success()
                    ->send();
            });
    }

    // =========================================================================
    // Helpers
    // =========================================================================

    private static function targetForm(): array
    {
        return [
            CheckboxList::make('targets')
                ->label('Kirim ke')
                ->options([
                    'semua' => '📋 Semua Calon Siswa',
                    'diverifikasi' => '🔍 Hanya yang Diverifikasi',
                    'diterima' => '🎉 Hanya yang Diterima',
                ])
                ->descriptions([
                    'semua' => 'Seluruh calon siswa yang terdaftar (semua status)',
                    'diverifikasi' => 'Calon siswa dengan status Diverifikasi',
                    'diterima' => 'Status Diterima, Diterima Di Kelas Reguler, atau Diterima Di Kelas Unggulan',
                ])
                ->required()
                ->validationMessages(['required' => 'Pilih minimal satu target penerima.']),
        ];
    }

    private static function resolvePhones(array $targets): Collection
    {
        $query = CalonSiswa::withoutGlobalScopes()
            ->with('user:id,telepon')
            ->whereHas('user', fn ($q) => $q->whereNotNull('telepon'));

        // Jika 'semua' dipilih → abaikan filter status lain
        if (in_array('semua', $targets)) {
            return $query
                ->get()
                ->map(fn ($cs) => $cs->user?->telepon)
                ->filter()
                ->unique()
                ->values();
        }

        $statusMap = [
            'diverifikasi' => ['Diverifikasi'],
            'diterima' => ['Diterima', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan'],
        ];

        $statuses = collect($targets)
            ->flatMap(fn ($t) => $statusMap[$t] ?? [])
            ->unique()
            ->values()
            ->all();

        if (! empty($statuses)) {
            $query->whereIn('status_pendaftaran', $statuses);
        }

        return $query
            ->get()
            ->map(fn ($cs) => $cs->user?->telepon)
            ->filter()
            ->unique()
            ->values();
    }

    private static function dispatchPesan(Collection $phones, string $pesan): int
    {
        $wa = app(WhatsAppService::class);

        foreach ($phones as $phone) {
            $wa->send(phone: $phone, message: $pesan, minDelay: 10, maxDelay: 180);
        }

        return $phones->count();
    }

    private static function buildPesan(Informasi $record): string
    {
        $tanggal = $record->tanggal
            ? Carbon::parse($record->tanggal)->translatedFormat('d F Y')
            : now()->translatedFormat('d F Y');

        return "📢 *Informasi PPDB MTsN 1 Pandeglang*\n\n"
            ."📌 *{$record->judul}*\n"
            ."🗓️ {$tanggal}\n\n"
            .strip_tags($record->isi)."\n\n"
            ."Silakan login ke sistem PPDB untuk informasi lebih lanjut.\n"
            .'_MTsN 1 Pandeglang_';
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource/Widgets/InformasiPublished.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Widgets;

use App\Models\CalonSiswa;
use App\Models\Informasi;
use Carbon\Carbon;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InformasiPublished extends TableWidget
{
    protected static ?int $sort = 1;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return 'Informasi';
    }

    private function getCalonSiswa(): ?CalonSiswa
    {
        return CalonSiswa::withoutGlobalScope('milik_sendiri')
            ->where('user_id', Auth::id())
            ->first();
    }

    private function statusColor(string $status): string
    {
        return match ($status) {
            'Diterima',
            'Diterima Di Kelas Reguler' => 'success',
            'Diterima Di Kelas Unggulan' => 'info',
            'Tidak Diterima'             => 'danger',
            default                      => 'warning',
        };
    }

    private function statusIcon(string $status): string
    {
        return match ($status) {
            'Berkas Tidak Lengkap'       => 'heroicon-o-document-minus',
            'Tidak Diterima'             => 'heroicon-o-no-symbol',
            'Diterima'                   => 'heroicon-o-check-circle',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
            default                      => 'heroicon-o-arrow-path',
        };
    }

    private function isInPengumumanPeriod(): bool
    {
        $tahun = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

        if (! $tahun) {
            return false;
        }

        $now = Carbon::now();

        foreach (['prestasi', 'reguler', 'afirmasi', 'zonasi', 'mutasi'] as $jalur) {
            $mulaiRaw   = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_mulai"} ?? null;
            $selesaiRaw = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_selesai"} ?? null;

            if (empty($mulaiRaw) || empty($selesaiRaw)) {
                continue;
            }

            if ($now->between(Carbon::parse($mulaiRaw), Carbon::parse($selesaiRaw))) {
                return true;
            }
        }

        return false;
    }

    private function isCalonSiswa(): bool
    {
        return Auth::user()->hasRole('calon_siswa');
    }

    public function table(Table $table): Table
    {
        $calonSiswa = $this->isCalonSiswa() ? $this->getCalonSiswa() : null;

        $statusPendaftaran = $calonSiswa?->status_pendaftaran ?? '';
        $inPengumuman      = $this->isInPengumumanPeriod();

        $terminalStatuses = [
            'Diterima',
            'Diterima Di Kelas Unggulan',
            'Diterima Di Kelas Reguler',
            'Tidak Diterima',
        ];

        $hasTerminalStatus      = $calonSiswa && in_array($statusPendaftaran, $terminalStatuses);
        $showPendaftaranBadge   = $this->isCalonSiswa() && $calonSiswa !== null && ! $hasTerminalStatus;

        $urlFormulir     = $calonSiswa ? '/formulir' : '';
        $urlViewFormulir = $calonSiswa ? "/formulir/{$calonSiswa->id}" : '';
        $urlInformasi    = $calonSiswa ? '/informasi' : '';

        return $table
            ->query(
                Informasi::where('status', 'Publish')->latest('updated_at')
            )
            ->columns([
                TextColumn::make('judul')
                    ->label('Informasi')
                    ->description(fn(Informasi $record): string => Str::limit($record->isi, 50))
                    ->icon('heroicon-o-information-circle')
                    ->iconColor('info'),

                ImageColumn::make('gambar')
                    ->label('Lampiran'),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->actions([
                Action::make('lihat')
                    ->hiddenLabel()
                    ->icon('heroicon-o-eye')
                    ->button()
                    ->url($urlInformasi)
                    ->outlined()
                    ->color('info'),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->paginationPageOptions([5]);
    }
}

```

---

### 📄 `./app/Filament/Resources/JalurPendaftaranResource/Pages/CreateJalurPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJalurPendaftaran extends CreateRecord
{
    protected static string $resource = JalurPendaftaranResource::class;
}

```

---

### 📄 `./app/Filament/Resources/JalurPendaftaranResource/Pages/EditJalurPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditJalurPendaftaran extends EditRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/JalurPendaftaranResource/Pages/ListJalurPendaftarans.php`

```php
<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJalurPendaftarans extends ListRecords
{
    protected static string $resource = JalurPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/JalurPendaftaranResource/Pages/ViewJalurPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJalurPendaftaran extends ViewRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/JalurPendaftaranResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JalurPendaftaranResource\Pages;
use App\Models\JalurPendaftaran;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class JalurPendaftaranResource extends Resource
{
    protected static ?string $model = JalurPendaftaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Jalur Pendaftaran';

    protected static ?string $label = 'Jalur Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Jalur Pendaftaran')
                    ->collapsible()
                    ->description('Data Jalur Pendaftaran.')
                    ->schema([
                        Select::make('nama')
                            ->label('Jalur Pendaftaran')
                            ->options([
                                'Prestasi' => 'Prestasi',
                                'Reguler' => 'Reguler',
                                'Afirmasi' => 'Afirmasi',
                                'Zonasi' => 'Zonasi',
                                'Mutasi' => 'Mutasi',
                            ])
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        TextInput::make('kuantitas')
                            ->label('Kuota Pendaftar')
                            ->numeric()
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->default('Aktif')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => '100%', 'md' => 4, 'lg' => 4, 'xl' => 4, '2xl' => 4]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Jalur Pendaftaran')
                    ->searchable(),

                TextColumn::make('kuantitas')
                    ->label('Kuota Pendaftar')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJalurPendaftarans::route('/'),
            'create' => Pages\CreateJalurPendaftaran::route('/create'),
            'edit' => Pages\EditJalurPendaftaran::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/JurusanResource/Pages/CreateJurusan.php`

```php
<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use App\Filament\Resources\JurusanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJurusan extends CreateRecord
{
    protected static string $resource = JurusanResource::class;
}

```

---

### 📄 `./app/Filament/Resources/JurusanResource/Pages/EditJurusan.php`

```php
<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use App\Filament\Resources\JurusanResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditJurusan extends EditRecord
{
    protected static string $resource = JurusanResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/JurusanResource/Pages/ListJurusans.php`

```php
<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use App\Filament\Resources\JurusanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListJurusans extends ListRecords
{
    protected static string $resource = JurusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Jurusan')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/JurusanResource/Pages/ViewJurusan.php`

```php
<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use App\Filament\Resources\JurusanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJurusan extends ViewRecord
{
    protected static string $resource = JurusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/JurusanResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurusanResource\Pages;
use App\Models\Jurusan;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Jurusan';

    protected static ?string $label = 'Jurusan';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 6;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Jurusan')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Nama Jurusan')
                        ->required()
                        ->validationMessages([
                            'required' => 'Form ini wajib diisi.',
                        ]),
                ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJurusans::route('/'),
            'create' => Pages\CreateJurusan::route('/create'),
            'edit' => Pages\EditJurusan::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KabupatenResource/Pages/CreateKabupaten.php`

```php
<?php

// Pages/CreateKabupaten.php

namespace App\Filament\Resources\KabupatenResource\Pages;

use App\Filament\Resources\KabupatenResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKabupaten extends CreateRecord
{
    protected static string $resource = KabupatenResource::class;
}

```

---

### 📄 `./app/Filament/Resources/KabupatenResource/Pages/EditKabupaten.php`

```php
<?php

// Pages/EditKabupaten.php

namespace App\Filament\Resources\KabupatenResource\Pages;

use App\Filament\Resources\KabupatenResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKabupaten extends EditRecord
{
    protected static string $resource = KabupatenResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/KabupatenResource/Pages/ListKabupatens.php`

```php
<?php

namespace App\Filament\Resources\KabupatenResource\Pages;

use App\Filament\Resources\KabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListKabupatens extends ListRecords
{
    protected static string $resource = KabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Kabupaten/Kota')
                    ->searchable(),
                TextColumn::make('provinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                TextColumn::make('provinsi.negara.nama')
                    ->label('Negara')
                    ->sortable(),
                ImageColumn::make('provinsi.negara.bendera')
                    ->label('Bendera')
                    ->defaultImageUrl('/img/bendera.png')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KabupatenResource/Pages/ViewKabupaten.php`

```php
<?php

namespace App\Filament\Resources\KabupatenResource\Pages;

use App\Filament\Resources\KabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKabupaten extends ViewRecord
{
    protected static string $resource = KabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KabupatenResource.php`

```php
<?php

// KabupatenResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KabupatenResource\Pages;
use App\Models\Kabupaten;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KabupatenResource extends Resource
{
    protected static ?string $model = Kabupaten::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kabupaten/Kota';

    protected static ?string $label = 'Kabupaten/Kota';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kabupaten/Kota')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Kabupaten/Kota')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('provinsi_id')
                        ->label('Provinsi')
                        ->relationship('provinsi', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKabupatens::route('/'),
            'create' => Pages\CreateKabupaten::route('/create'),
            'edit' => Pages\EditKabupaten::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KecamatanResource/Pages/CreateKecamatan.php`

```php
<?php

// Pages/CreateKecamatan.php

namespace App\Filament\Resources\KecamatanResource\Pages;

use App\Filament\Resources\KecamatanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKecamatan extends CreateRecord
{
    protected static string $resource = KecamatanResource::class;
}

```

---

### 📄 `./app/Filament/Resources/KecamatanResource/Pages/EditKecamatan.php`

```php
<?php

// Pages/EditKecamatan.php

namespace App\Filament\Resources\KecamatanResource\Pages;

use App\Filament\Resources\KecamatanResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKecamatan extends EditRecord
{
    protected static string $resource = KecamatanResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/KecamatanResource/Pages/ListKecamatans.php`

```php
<?php

namespace App\Filament\Resources\KecamatanResource\Pages;

use App\Filament\Resources\KecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListKecamatans extends ListRecords
{
    protected static string $resource = KecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Kecamatan')
                    ->searchable(),
                TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten/Kota')
                    ->sortable(),
                TextColumn::make('kabupaten.provinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                TextColumn::make('kabupaten.provinsi.negara.nama')
                    ->label('Negara')
                    ->sortable(),
                ImageColumn::make('kabupaten.provinsi.negara.bendera')
                    ->label('Bendera')
                    ->defaultImageUrl('/img/bendera.png')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KecamatanResource/Pages/ViewKecamatan.php`

```php
<?php

namespace App\Filament\Resources\KecamatanResource\Pages;

use App\Filament\Resources\KecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKecamatan extends ViewRecord
{
    protected static string $resource = KecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KecamatanResource.php`

```php
<?php

// KecamatanResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KecamatanResource\Pages;
use App\Models\Kecamatan;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KecamatanResource extends Resource
{
    protected static ?string $model = Kecamatan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kecamatan';

    protected static ?string $label = 'Kecamatan';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kecamatan')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Kecamatan')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('kabupaten_id')
                        ->label('Kabupaten')
                        ->relationship('kabupaten', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKecamatans::route('/'),
            'create' => Pages\CreateKecamatan::route('/create'),
            'edit' => Pages\EditKecamatan::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KelasResource/Pages/CreateKelas.php`

```php
<?php

// Pages/CreateKelas.php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKelas extends CreateRecord
{
    protected static string $resource = KelasResource::class;
}

```

---

### 📄 `./app/Filament/Resources/KelasResource/Pages/EditKelas.php`

```php
<?php

// Pages/EditKelas.php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKelas extends EditRecord
{
    protected static string $resource = KelasResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/KelasResource/Pages/ListKelas.php`

```php
<?php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListKelas extends ListRecords
{
    protected static string $resource = KelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Kelas')
                    ->searchable(),
                TextColumn::make('jurusan.nama')
                    ->label('Jurusan')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KelasResource/Pages/ViewKelas.php`

```php
<?php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKelas extends ViewRecord
{
    protected static string $resource = KelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KelasResource.php`

```php
<?php

// KelasResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KelasResource\Pages;
use App\Models\Kelas;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KelasResource extends Resource
{
    protected static ?string $model = Kelas::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kelas';

    protected static ?string $label = 'Kelas';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 7;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kelas')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Nama Kelas')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('jurusan_id')
                        ->label('Jurusan')
                        ->relationship('jurusan', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.'])
                        ->createOptionForm([
                            TextInput::make('nama')
                                ->label('Nama Jurusan')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                                ->placeholder('Contoh: Unggulan'),
                        ]),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelas::route('/'),
            'create' => Pages\CreateKelas::route('/create'),
            'edit' => Pages\EditKelas::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KelurahanResource/Pages/CreateKelurahan.php`

```php
<?php

// Pages/CreateKelurahan.php

namespace App\Filament\Resources\KelurahanResource\Pages;

use App\Filament\Resources\KelurahanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKelurahan extends CreateRecord
{
    protected static string $resource = KelurahanResource::class;
}

```

---

### 📄 `./app/Filament/Resources/KelurahanResource/Pages/EditKelurahan.php`

```php
<?php

// Pages/EditKelurahan.php

namespace App\Filament\Resources\KelurahanResource\Pages;

use App\Filament\Resources\KelurahanResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKelurahan extends EditRecord
{
    protected static string $resource = KelurahanResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/KelurahanResource/Pages/ListKelurahans.php`

```php
<?php

namespace App\Filament\Resources\KelurahanResource\Pages;

use App\Filament\Resources\KelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListKelurahans extends ListRecords
{
    protected static string $resource = KelurahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Kelurahan/Desa')
                    ->searchable(),
                TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan')
                    ->sortable(),
                TextColumn::make('kecamatan.kabupaten.nama')
                    ->label('Kabupaten/Kota')
                    ->sortable(),
                TextColumn::make('kecamatan.kabupaten.provinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                TextColumn::make('kecamatan.kabupaten.provinsi.negara.nama')
                    ->label('Negara')
                    ->sortable(),
                ImageColumn::make('kecamatan.kabupaten.provinsi.negara.bendera')
                    ->label('Bendera')
                    ->defaultImageUrl('/img/bendera.png')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KelurahanResource/Pages/ViewKelurahan.php`

```php
<?php

namespace App\Filament\Resources\KelurahanResource\Pages;

use App\Filament\Resources\KelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKelurahan extends ViewRecord
{
    protected static string $resource = KelurahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KelurahanResource.php`

```php
<?php

// KelurahanResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KelurahanResource\Pages;
use App\Models\Kelurahan;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KelurahanResource extends Resource
{
    protected static ?string $model = Kelurahan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kelurahan/Desa';

    protected static ?string $label = 'Kelurahan/Desa';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 5;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kelurahan/Desa')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Kelurahan/Desa')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('kecamatan_id')
                        ->label('Kecamatan')
                        ->relationship('kecamatan', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelurahans::route('/'),
            'create' => Pages\CreateKelurahan::route('/create'),
            'edit' => Pages\EditKelurahan::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KetuaResource/Pages/CreateKetua.php`

```php
<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\KetuaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateKetua extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = KetuaResource::class;

    protected string $panitiaLabel = 'Ketua';

    protected string $panitiaDirectory = 'assets/ketua';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/KetuaResource/Pages/EditKetua.php`

```php
<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\KetuaResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditKetua extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = KetuaResource::class;

    protected string $panitiaLabel = 'Ketua';

    protected string $panitiaDirectory = 'assets/ketua';

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/KetuaResource/Pages/ListKetuas.php`

```php
<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Resources\KetuaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKetuas extends ListRecords
{
    protected static string $resource = KetuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KetuaResource/Pages/ViewKetua.php`

```php
<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Resources\KetuaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKetua extends ViewRecord
{
    protected static string $resource = KetuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KetuaResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KetuaResource\Pages;
use App\Models\Ketua;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class KetuaResource extends Resource
{
    protected static ?string $model = Ketua::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Ketua';

    protected static ?string $label = 'Ketua';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Ketua::count() > 10),

                TextColumn::make('nip')
                    ->label('NIP'),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(Ketua::count() > 10),

                ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('img/tte.png'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKetuas::route('/'),
            'create' => Pages\CreateKetua::route('/create'),
            'edit' => Pages\EditKetua::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/MataPelajaranResource/Pages/CreateMataPelajaran.php`

```php
<?php

// Pages/CreateMataPelajaran.php

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use App\Filament\Resources\MataPelajaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMataPelajaran extends CreateRecord
{
    protected static string $resource = MataPelajaranResource::class;
}

```

---

### 📄 `./app/Filament/Resources/MataPelajaranResource/Pages/EditMataPelajaran.php`

```php
<?php

// Pages/EditMataPelajaran.php

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use App\Filament\Resources\MataPelajaranResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditMataPelajaran extends EditRecord
{
    protected static string $resource = MataPelajaranResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/MataPelajaranResource/Pages/ListMataPelajarans.php`

```php
<?php

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use App\Filament\Resources\MataPelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListMataPelajarans extends ListRecords
{
    protected static string $resource = MataPelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Mata Pelajaran')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/MataPelajaranResource/Pages/ViewMataPelajaran.php`

```php
<?php

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use App\Filament\Resources\MataPelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMataPelajaran extends ViewRecord
{
    protected static string $resource = MataPelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/MataPelajaranResource.php`

```php
<?php

// MataPelajaranResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\MataPelajaranResource\Pages;
use App\Models\MataPelajaran;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class MataPelajaranResource extends Resource
{
    protected static ?string $model = MataPelajaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Mata Pelajaran';

    protected static ?string $label = 'Mata Pelajaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 10;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Informasi Mata Pelajaran')
                ->schema([
                    TextInput::make('nama')
                        ->label('Mata Pelajaran')
                        ->required()
                        ->maxLength(255),
                ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMataPelajarans::route('/'),
            'create' => Pages\CreateMataPelajaran::route('/create'),
            'edit' => Pages\EditMataPelajaran::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/NegaraResource/Pages/CreateNegara.php`

```php
<?php

// Pages/CreateNegara.php

namespace App\Filament\Resources\NegaraResource\Pages;

use App\Filament\Resources\NegaraResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNegara extends CreateRecord
{
    protected static string $resource = NegaraResource::class;
}

```

---

### 📄 `./app/Filament/Resources/NegaraResource/Pages/EditNegara.php`

```php
<?php

// Pages/EditNegara.php

namespace App\Filament\Resources\NegaraResource\Pages;

use App\Filament\Resources\NegaraResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditNegara extends EditRecord
{
    protected static string $resource = NegaraResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/NegaraResource/Pages/ListNegaras.php`

```php
<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use App\Filament\Resources\NegaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListNegaras extends ListRecords
{
    protected static string $resource = NegaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Negara')
                    ->searchable(),
                ImageColumn::make('bendera')
                    ->label('Bendera')
                    ->defaultImageUrl('/img/bendera.png'),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/NegaraResource/Pages/ViewNegara.php`

```php
<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use App\Filament\Resources\NegaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewNegara extends ViewRecord
{
    protected static string $resource = NegaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/NegaraResource.php`

```php
<?php

// NegaraResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\NegaraResource\Pages;
use App\Models\Negara;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class NegaraResource extends Resource
{
    protected static ?string $model = Negara::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Negara';

    protected static ?string $label = 'Negara';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-globe-asia-australia';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Negara')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Negara')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    FileUpload::make('bendera')
                        ->label('Bendera')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([null, '4:3' => '4:3'])
                        ->fetchFileInformation(false)
                        ->directory('assets/bendera')
                        ->downloadable()
                        ->maxSize(500),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNegaras::route('/'),
            'create' => Pages\CreateNegara::route('/create'),
            'edit' => Pages\EditNegara::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/PimpinanResource/Pages/CreatePimpinan.php`

```php
<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\PimpinanResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreatePimpinan extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = PimpinanResource::class;

    protected string $panitiaLabel = 'Pimpinan';

    protected string $panitiaDirectory = 'assets/pimpinan';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/PimpinanResource/Pages/EditPimpinan.php`

```php
<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\PimpinanResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditPimpinan extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = PimpinanResource::class;

    protected string $panitiaLabel = 'Pimpinan';

    protected string $panitiaDirectory = 'assets/pimpinan';

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/PimpinanResource/Pages/ListPimpinans.php`

```php
<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Resources\PimpinanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPimpinans extends ListRecords
{
    protected static string $resource = PimpinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/PimpinanResource/Pages/ViewPimpinan.php`

```php
<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Resources\PimpinanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPimpinan extends ViewRecord
{
    protected static string $resource = PimpinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/PimpinanResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PimpinanResource\Pages;
use App\Models\Pimpinan;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class PimpinanResource extends Resource
{
    protected static ?string $model = Pimpinan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Pimpinan';

    protected static ?string $label = 'Pimpinan';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Pimpinan::count() > 10),

                TextColumn::make('nip')
                    ->label('NIP'),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(Pimpinan::count() > 10),

                ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('img/tte.png'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPimpinans::route('/'),
            'create' => Pages\CreatePimpinan::route('/create'),
            'edit' => Pages\EditPimpinan::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/PrestasiResource/Pages/CreatePrestasi.php`

```php
<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use App\Filament\Resources\PrestasiResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePrestasi extends CreateRecord
{
    protected static string $resource = PrestasiResource::class;
}

```

---

### 📄 `./app/Filament/Resources/PrestasiResource/Pages/EditPrestasi.php`

```php
<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use App\Filament\Resources\PrestasiResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPrestasi extends EditRecord
{
    protected static string $resource = PrestasiResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/PrestasiResource/Pages/ListPrestasis.php`

```php
<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use App\Filament\Resources\PrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListPrestasis extends ListRecords
{
    protected static string $resource = PrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Prestasi')
                    ->searchable(),
                TextColumn::make('jenis')
                    ->label('Jenis Prestasi')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Hafalan Al-Quran' => 'success',
                        'Olimpiade/Kejuaraan' => 'primary'
                    }),
                TextColumn::make('tingkat')
                    ->label('Tingkat')
                    ->searchable(),
                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->searchable(),
                TextColumn::make('peringkat')
                    ->label('Peringkat')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/PrestasiResource/Pages/ViewPrestasi.php`

```php
<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use App\Filament\Resources\PrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPrestasi extends ViewRecord
{
    protected static string $resource = PrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/PrestasiResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Models\Prestasi;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Prestasi';

    protected static ?string $label = 'Prestasi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 5;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Prestasi')
                ->collapsible()
                ->schema([
                    Section::make('')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Prestasi')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('jenis')
                                ->label('Jenis Prestasi')
                                ->options([
                                    'Hafalan Al-Quran' => 'Hafalan Al-Quran (Minimal 3 Juz)',
                                    'Olimpiade/Kejuaraan' => 'Olimpiade/Kejuaraan',
                                ])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->live(),
                        ])
                        ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),

                    Section::make('')
                        ->schema([
                            Select::make('tingkat')
                                ->label('Tingkat')
                                ->options([
                                    'Nasional' => 'Nasional',
                                    'Provinsi' => 'Provinsi',
                                    'Kabupaten/Kota' => 'Kabupaten/Kota',
                                ])
                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            Select::make('kategori')
                                ->label('Kategori')
                                ->options([
                                    'Regu/Kelompok' => 'Regu/Kelompok',
                                    'Individu' => 'Individu',
                                ])
                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            Select::make('peringkat')
                                ->label('Peringkat')
                                ->options(['1' => '1', '2' => '2', '3' => '3'])
                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3])
                        ->visible(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                ])
                ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/ProvinsiResource/Pages/CreateProvinsi.php`

```php
<?php

// Pages/CreateProvinsi.php

namespace App\Filament\Resources\ProvinsiResource\Pages;

use App\Filament\Resources\ProvinsiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProvinsi extends CreateRecord
{
    protected static string $resource = ProvinsiResource::class;
}

```

---

### 📄 `./app/Filament/Resources/ProvinsiResource/Pages/EditProvinsi.php`

```php
<?php

// Pages/EditProvinsi.php

namespace App\Filament\Resources\ProvinsiResource\Pages;

use App\Filament\Resources\ProvinsiResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditProvinsi extends EditRecord
{
    protected static string $resource = ProvinsiResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/ProvinsiResource/Pages/ListProvinsis.php`

```php
<?php

namespace App\Filament\Resources\ProvinsiResource\Pages;

use App\Filament\Resources\ProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListProvinsis extends ListRecords
{
    protected static string $resource = ProvinsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Provinsi')
                    ->searchable(),
                TextColumn::make('negara.nama')
                    ->label('Negara')
                    ->sortable(),
                ImageColumn::make('negara.bendera')
                    ->label('Bendera')
                    ->defaultImageUrl('/img/bendera.png')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/ProvinsiResource/Pages/ViewProvinsi.php`

```php
<?php

namespace App\Filament\Resources\ProvinsiResource\Pages;

use App\Filament\Resources\ProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProvinsi extends ViewRecord
{
    protected static string $resource = ProvinsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/ProvinsiResource.php`

```php
<?php

// ProvinsiResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\ProvinsiResource\Pages;
use App\Models\Provinsi;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class ProvinsiResource extends Resource
{
    protected static ?string $model = Provinsi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Provinsi';

    protected static ?string $label = 'Provinsi';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Provinsi')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Provinsi')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('negara_id')
                        ->label('Negara')
                        ->relationship('negara', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProvinsis::route('/'),
            'create' => Pages\CreateProvinsi::route('/create'),
            'edit' => Pages\EditProvinsi::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/RoleResource/Pages/CreateRole.php`

```php
<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use BezhanSalleh\FilamentShield\Support\Utils;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

    public Collection $permissions;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->permissions = collect($data)
            ->filter(function ($permission, $key) {
                return ! in_array($key, ['name', 'guard_name', 'select_all', Utils::getTenantModelForeignKey()]);
            })
            ->values()
            ->flatten()
            ->unique();

        if (Arr::has($data, Utils::getTenantModelForeignKey())) {
            return Arr::only($data, ['name', 'guard_name', Utils::getTenantModelForeignKey()]);
        }

        return Arr::only($data, ['name', 'guard_name']);
    }

    protected function afterCreate(): void
    {
        $permissionModels = collect();
        $this->permissions->each(function ($permission) use ($permissionModels) {
            $permissionModels->push(Utils::getPermissionModel()::firstOrCreate([
                /** @phpstan-ignore-next-line */
                'name' => $permission,
                'guard_name' => $this->data['guard_name'],
            ]));
        });

        $this->record->syncPermissions($permissionModels);
    }
}

```

---

### 📄 `./app/Filament/Resources/RoleResource/Pages/EditRole.php`

```php
<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use BezhanSalleh\FilamentShield\Support\Utils;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;

    public Collection $permissions;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->permissions = collect($data)
            ->filter(function ($permission, $key) {
                return ! in_array($key, ['name', 'guard_name', 'select_all', Utils::getTenantModelForeignKey()]);
            })
            ->values()
            ->flatten()
            ->unique();

        if (Arr::has($data, Utils::getTenantModelForeignKey())) {
            return Arr::only($data, ['name', 'guard_name', Utils::getTenantModelForeignKey()]);
        }

        return Arr::only($data, ['name', 'guard_name']);
    }

    protected function afterSave(): void
    {
        $permissionModels = collect();
        $this->permissions->each(function ($permission) use ($permissionModels) {
            $permissionModels->push(Utils::getPermissionModel()::firstOrCreate([
                'name' => $permission,
                'guard_name' => $this->data['guard_name'],
            ]));
        });

        $this->record->syncPermissions($permissionModels);
    }
}

```

---

### 📄 `./app/Filament/Resources/RoleResource/Pages/ListRoles.php`

```php
<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use BezhanSalleh\FilamentShield\Support\Utils;
use BezhanSalleh\FilamentShield\Traits\HasShieldFormComponents;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ListRoles extends ListRecords
{
    use HasShieldFormComponents;

    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Peran')
                    ->formatStateUsing(fn ($state): string => Str::headline($state))
                    ->searchable(),
                TextColumn::make('team.name')
                    ->default('Global')
                    ->badge()
                    ->color(fn (mixed $state): string => str($state)->contains('Global') ? 'gray' : 'primary')
                    ->label(__('filament-shield::filament-shield.column.team'))
                    ->searchable()
                    ->visible(fn (): bool => static::shield()->isCentralApp() && Utils::isTenancyEnabled()),
                TextColumn::make('permissions_count')
                    ->badge()
                    ->label('Perizinan')
                    ->counts('permissions')
                    ->colors(['success']),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->sinceTooltip()
                    ->dateTime('d F Y H:i:s'),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }
}

```

---

### 📄 `./app/Filament/Resources/RoleResource/Pages/ViewRole.php`

```php
<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRole extends ViewRecord
{
    protected static string $resource = RoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/RoleResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoleResource\Pages;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use BezhanSalleh\FilamentShield\Forms\ShieldSelectAllToggle;
use BezhanSalleh\FilamentShield\Support\Utils;
use BezhanSalleh\FilamentShield\Traits\HasShieldFormComponents;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\HtmlString;

class RoleResource extends Resource implements HasShieldPermissions
{
    use HasShieldFormComponents;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label(__('filament-shield::filament-shield.field.name'))
                                    ->unique(ignoreRecord: true)
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('guard_name')
                                    ->label(__('filament-shield::filament-shield.field.guard_name'))
                                    ->default(Utils::getFilamentAuthGuard())
                                    ->disabledOn('create')
                                    ->dehydrated()
                                    ->nullable()
                                    ->maxLength(255),

                                Forms\Components\Select::make(config('permission.column_names.team_foreign_key'))
                                    ->label(__('filament-shield::filament-shield.field.team'))
                                    ->placeholder(__('filament-shield::filament-shield.field.team.placeholder'))
                                    /** @phpstan-ignore-next-line */
                                    ->default([Filament::getTenant()?->id])
                                    ->options(fn (): Arrayable => Utils::getTenantModel() ? Utils::getTenantModel()::pluck('name', 'id') : collect())
                                    ->hidden(fn (): bool => ! (static::shield()->isCentralApp() && Utils::isTenancyEnabled()))
                                    ->dehydrated(fn (): bool => ! (static::shield()->isCentralApp() && Utils::isTenancyEnabled())),
                                ShieldSelectAllToggle::make('select_all')
                                    ->onIcon('heroicon-s-shield-check')
                                    ->offIcon('heroicon-s-shield-exclamation')
                                    ->label(__('filament-shield::filament-shield.field.select_all.name'))
                                    ->helperText(fn (): HtmlString => new HtmlString(__('filament-shield::filament-shield.field.select_all.message')))
                                    ->dehydrated(fn (bool $state): bool => $state),

                            ])
                            ->columns([
                                'sm' => 2,
                                'lg' => 3,
                            ]),
                    ]),
                static::getShieldFormComponents(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }

    public static function getCluster(): ?string
    {
        return Utils::getResourceCluster() ?? static::$cluster;
    }

    public static function getModel(): string
    {
        return Utils::getRoleModel();
    }

    public static function getModelLabel(): string
    {
        return __('filament-shield::filament-shield.resource.label.role');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-shield::filament-shield.resource.label.roles');
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Utils::isResourceNavigationRegistered();
    }

    public static function getNavigationGroup(): ?string
    {
        return Utils::isResourceNavigationGroupEnabled()
            ? __('filament-shield::filament-shield.nav.group')
            : '';
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-shield::filament-shield.nav.role.label');
    }

    public static function getNavigationIcon(): string
    {
        return __('filament-shield::filament-shield.nav.role.icon');
    }

    public static function getNavigationSort(): ?int
    {
        return Utils::getResourceNavigationSort();
    }

    public static function getSlug(): string
    {
        return Utils::getResourceSlug();
    }

    public static function getNavigationBadge(): ?string
    {
        return Utils::isResourceNavigationBadgeEnabled()
            ? strval(static::getEloquentQuery()->count())
            : null;
    }

    public static function isScopedToTenant(): bool
    {
        return Utils::isScopedToTenant();
    }

    public static function canGloballySearch(): bool
    {
        return Utils::isResourceGloballySearchable() && count(static::getGloballySearchableAttributes()) && static::canViewAny();
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahAsalResource/Concerns/HasSekolahAsalWizardSteps.php`

```php
<?php

namespace App\Filament\Resources\SekolahAsalResource\Concerns;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Collection;

trait HasSekolahAsalWizardSteps
{
    protected function sekolahAsalSteps(): array
    {
        return [
            Step::make('Data Instansi')
                ->schema([
                    Section::make('Instansi')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Instansi')
                                ->prefixIcon('heroicon-o-building-library')
                                ->required()
                                ->columnSpanFull()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('npsn')
                                ->label('NPSN')
                                ->numeric()
                                ->minLength(8)
                                ->maxLength(8)
                                ->validationMessages([
                                    'min_digits' => 'NPSN harus terdiri dari minimal 8 digit.',
                                    'max_digits' => 'NPSN tidak boleh lebih dari 8 digit.',
                                ]),

                            TextInput::make('nss')
                                ->label('NSS/NSM')
                                ->numeric()
                                ->minLength(12)
                                ->maxLength(12)
                                ->validationMessages([
                                    'min_digits' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                    'max_digits' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                ]),

                            Select::make('akreditasi')
                                ->label('Akreditasi')
                                ->native(false)
                                ->required()
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                    Section::make('Logo')
                        ->schema([
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                                ->fetchFileInformation(false)
                                ->directory('assets/institusi')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private'),

                            FileUpload::make('logo')
                                ->label('Logo Instansi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi-lain')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
                ]),

            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn (Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kabupaten_id')
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(fn (Set $set) => $set('kelurahan_id', null))
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kelurahan_id')
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),

            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->placeholder('https://mtsn1pandeglang.sch.id')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->tel()
                                ->prefixIcon('heroicon-m-phone')
                                ->placeholder('08**********')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope')
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahAsalResource/Pages/CreateSekolahAsal.php`

```php
<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
use App\Filament\Resources\SekolahAsalResource\Concerns\HasSekolahAsalWizardSteps;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateSekolahAsal extends CreateRecord
{
    use HasSekolahAsalWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahAsalResource::class;

    protected function getSteps(): array
    {
        return $this->sekolahAsalSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahAsalResource/Pages/EditSekolahAsal.php`

```php
<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
use App\Filament\Resources\SekolahAsalResource\Concerns\HasSekolahAsalWizardSteps;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditSekolahAsal extends EditRecord
{
    use HasSekolahAsalWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahAsalResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->sekolahAsalSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahAsalResource/Pages/ListSekolahAsals.php`

```php
<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
use App\Models\SekolahAsal;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;

class ListSekolahAsals extends ListRecords
{
    protected static string $resource = SekolahAsalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo'),
                TextColumn::make('nama')
                    ->description(
                        fn (SekolahAsal $record) => implode(' | ', array_filter([
                            'NPSN: '.$record->npsn ?? null,
                            'NSS: '.$record->nss ?? null,
                        ]))
                    )
                    ->wrap()
                    ->weight(FontWeight::Bold)
                    ->label('Nama Instansi'),
                TextColumn::make('jenjang')
                    ->label('Jenjang')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'PAUD' => 'gray',
                        'TK' => 'gray',
                        'SD' => 'danger',
                        'MI' => 'danger',
                        'SMP' => 'info',
                        'MTS' => 'info',
                        'SMA' => 'success',
                        'SMK' => 'success',
                        'MA' => 'success',
                    }),
                TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->suffix(fn (string $state): string => match ($state) {
                        'A' => ' (Sangat Baik)',
                        'B' => ' (Baik)',
                        'C' => ' (Cukup)',
                        'D' => ' (Kurang)'
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'A' => 'primary',
                        'B' => 'success',
                        'C' => 'warning',
                        'D' => 'danger'
                    })
                    ->badge(),
                TextColumn::make('alamat')
                    ->label('Alamat Lengkap')
                    ->description(
                        fn (SekolahAsal $record) => implode(', ', array_filter([
                            $record->kelurahan->nama ?? null,
                            $record->kecamatan->nama ?? null,
                            $record->kabupaten->nama ?? null,
                            $record->provinsi->nama ?? null,
                            $record->negara->nama ?? null,
                        ]))
                    )
                    ->copyable()
                    ->copyMessage('Alamat Disalin!')
                    ->wrap(),
                TextColumn::make('website')
                    ->copyable()
                    ->copyMessage('Website Disalin!')
                    ->wrap()
                    ->icon('heroicon-o-globe-alt')
                    ->iconColor('success')
                    ->label('Website'),
                TextColumn::make('telepon')
                    ->copyable()
                    ->copyMessage('Telepon Disalin!')
                    ->icon('heroicon-o-phone')
                    ->iconColor('success')
                    ->label('Telepon'),
                TextColumn::make('email')
                    ->copyable()
                    ->copyMessage('Email Disalin!')
                    ->icon('heroicon-o-envelope')
                    ->iconColor('success')
                    ->label('Email'),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    DeleteAction::make(),
                    EditAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->paginationPageOptions([0]);
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahAsalResource/Pages/ViewSekolahAsal.php`

```php
<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewSekolahAsal extends ViewRecord
{
    protected static string $resource = SekolahAsalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->icon('heroicon-o-pencil-square')
                ->outlined(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Fieldset::make('')
                    ->columns(1)
                    ->schema([
                        ImageEntry::make('logo')
                            ->alignCenter()
                            ->hiddenLabel(),
                        TextEntry::make('nama')
                            ->alignCenter()
                            ->extraAttributes(['class' => 'text-6xl font-bold'])
                            ->hiddenLabel(),
                    ]),
                Fieldset::make('Instansi')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('npsn')
                            ->label('NPSN'),
                        TextEntry::make('nss')
                            ->label('NSS/NSM'),
                        TextEntry::make('akreditasi')
                            ->badge()
                            ->suffix(fn (string $state): string => match ($state) {
                                'A' => ' (Sangat Baik)',
                                'B' => ' (Baik)',
                                'C' => ' (Cukup)',
                                'D' => ' (Kurang)'
                            })
                            ->color(fn (string $state): string => match ($state) {
                                'A' => 'primary',
                                'B' => 'success',
                                'C' => 'warning',
                                'D' => 'danger'
                            })
                            ->label('Akreditasi'),
                    ]),

                Fieldset::make('Kontak')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('website')
                            ->icon('heroicon-o-globe-alt')
                            ->iconColor('success')
                            ->label('Website'),
                        TextEntry::make('telepon')
                            ->icon('heroicon-o-phone')
                            ->iconColor('success')
                            ->label('Telepon'),
                        TextEntry::make('email')
                            ->icon('heroicon-o-envelope')
                            ->iconColor('success')
                            ->label('Email'),
                    ]),
                Fieldset::make('Alamat')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('alamat')
                            ->label('Jalan/Kampung/Dusun'),
                        TextEntry::make('kelurahan.nama')
                            ->label('Kelurahan'),
                        TextEntry::make('kecamatan.nama')
                            ->label('Kecamatan'),
                        TextEntry::make('kabupaten.nama')
                            ->label('Kabupaten'),
                        TextEntry::make('provinsi.nama')
                            ->label('Provinsi'),
                        TextEntry::make('negara.nama')
                            ->label('Negara'),
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahAsalResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SekolahAsalResource\Pages\CreateSekolahAsal;
use App\Filament\Resources\SekolahAsalResource\Pages\EditSekolahAsal;
use App\Filament\Resources\SekolahAsalResource\Pages\ListSekolahAsals;
use App\Filament\Resources\SekolahAsalResource\Pages\ViewSekolahAsal;
use App\Models\SekolahAsal;
use Filament\Resources\Resource;

class SekolahAsalResource extends Resource
{
    protected static ?string $model = SekolahAsal::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Instansi Lain';

    protected static ?string $label = 'Instansi Lain';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function getPages(): array
    {
        return [
            'index' => ListSekolahAsals::route('/'),
            'create' => CreateSekolahAsal::route('/create'),
            'view' => ViewSekolahAsal::route('/{record}'),
            'edit' => EditSekolahAsal::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahResource/Concerns/HasSekolahWizardSteps.php`

```php
<?php

namespace App\Filament\Resources\SekolahResource\Concerns;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Collection;

trait HasSekolahWizardSteps
{
    protected function sekolahSteps(): array
    {
        return [
            Step::make('Data Instansi')
                ->schema([
                    Section::make('Instansi')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Instansi')
                                ->prefixIcon('heroicon-o-building-library')
                                ->required()
                                ->columnSpanFull()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('npsn')
                                ->label('NPSN')
                                ->numeric()
                                ->minLength(8)
                                ->maxLength(8)
                                ->validationMessages([
                                    'min_digits' => 'NPSN harus terdiri dari minimal 8 digit.',
                                    'max_digits' => 'NPSN tidak boleh lebih dari 8 digit.',
                                ]),

                            TextInput::make('nss')
                                ->label('NSS/NSM')
                                ->numeric()
                                ->minLength(12)
                                ->maxLength(12)
                                ->validationMessages([
                                    'min_digits' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                    'max_digits' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                ]),

                            Select::make('pimpinan_id')
                                ->label('Kepala Instansi')
                                ->relationship('pimpinan', 'nama')
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('akreditasi')
                                ->label('Akreditasi')
                                ->native(false)
                                ->required()
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                    Section::make('Logo')
                        ->schema([
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                                ->fetchFileInformation(false)
                                ->directory('assets/institusi')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private'),

                            FileUpload::make('logo')
                                ->label('Logo Instansi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
                ]),

            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn (Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kabupaten_id')
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(fn (Set $set) => $set('kelurahan_id', null))
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kelurahan_id')
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),

            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->placeholder('https://mtsn1pandeglang.sch.id')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->tel()
                                ->prefixIcon('heroicon-m-phone')
                                ->placeholder('08**********')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope')
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                    Section::make('Surat')
                        ->schema([
                            TextInput::make('nomor_surat')
                                ->label('Nomor SKL')
                                ->minLength(5)
                                ->maxLength(20)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                    'min' => 'No. SKL: Nomor SKL terlalu pendek.',
                                    'max' => 'No. SKL: Nomor WKL terlalu panjang.',
                                ]),
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahResource/Pages/CreateSekolah.php`

```php
<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use App\Filament\Resources\SekolahResource\Concerns\HasSekolahWizardSteps;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateSekolah extends CreateRecord
{
    use HasSekolahWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahResource::class;

    protected function getSteps(): array
    {
        return $this->sekolahSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahResource/Pages/EditSekolah.php`

```php
<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use App\Filament\Resources\SekolahResource\Concerns\HasSekolahWizardSteps;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditSekolah extends EditRecord
{
    use HasSekolahWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->sekolahSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahResource/Pages/ListSekolahs.php`

```php
<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use App\Models\Sekolah;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;

class ListSekolahs extends ListRecords
{
    protected static string $resource = SekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->icon('heroicon-o-plus')
                ->outlined()
                ->hiddenLabel()
                ->visible(fn () => Sekolah::count() === 0),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo'),
                TextColumn::make('nama')
                    ->description(
                        fn (Sekolah $record) => implode(' | ', array_filter([
                            'NPSN: '.$record->npsn ?? null,
                            'NSS: '.$record->nss ?? null,
                        ]))
                    )
                    ->wrap()
                    ->weight(FontWeight::Bold)
                    ->label('Nama Instansi'),
                TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->suffix(fn (string $state): string => match ($state) {
                        'A' => ' (Sangat Baik)',
                        'B' => ' (Baik)',
                        'C' => ' (Cukup)',
                        'D' => ' (Kurang)'
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'A' => 'primary',
                        'B' => 'success',
                        'C' => 'warning',
                        'D' => 'danger'
                    })
                    ->badge(),
                TextColumn::make('pimpinan.nama')
                    ->icon('heroicon-o-user-circle')
                    ->iconColor('success')
                    ->label('Kepala Instansi'),
                TextColumn::make('alamat')
                    ->label('Alamat Lengkap')
                    ->description(
                        fn (Sekolah $record) => implode(', ', array_filter([
                            $record->kelurahan->nama ?? null,
                            $record->kecamatan->nama ?? null,
                            $record->kabupaten->nama ?? null,
                            $record->provinsi->nama ?? null,
                            $record->negara->nama ?? null,
                        ]))
                    )
                    ->copyable()
                    ->copyMessage('Alamat Disalin!')
                    ->wrap(),
                TextColumn::make('website')
                    ->copyable()
                    ->copyMessage('Website Disalin!')
                    ->wrap()
                    ->icon('heroicon-o-globe-alt')
                    ->iconColor('success')
                    ->label('Website'),
                TextColumn::make('telepon')
                    ->copyable()
                    ->copyMessage('Telepon Disalin!')
                    ->icon('heroicon-o-phone')
                    ->iconColor('success')
                    ->label('Telepon'),
                TextColumn::make('email')
                    ->copyable()
                    ->copyMessage('Email Disalin!')
                    ->icon('heroicon-o-envelope')
                    ->iconColor('success')
                    ->label('Email'),
                TextColumn::make('nomor_surat')
                    ->copyable()
                    ->copyMessage('Nomor SKL Disalin!')
                    ->label('Nomor SKL'),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    DeleteAction::make(),
                    EditAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->paginationPageOptions([0]);
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahResource/Pages/ViewSekolah.php`

```php
<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewSekolah extends ViewRecord
{
    protected static string $resource = SekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->icon('heroicon-o-pencil-square')
                ->outlined(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Fieldset::make('')
                    ->columns(1)
                    ->schema([
                        ImageEntry::make('logo')
                            ->alignCenter()
                            ->hiddenLabel(),
                        TextEntry::make('nama')
                            ->alignCenter()
                            ->extraAttributes(['class' => 'text-6xl font-bold'])
                            ->hiddenLabel(),
                    ]),
                Fieldset::make('Instansi')
                    ->columns([
                        'sm' => 1,
                        'md' => 4,
                        'lg' => 4,
                        'xl' => 4,
                    ])
                    ->schema([
                        TextEntry::make('npsn')
                            ->label('NPSN'),
                        TextEntry::make('nss')
                            ->label('NSS/NSM'),
                        TextEntry::make('akreditasi')
                            ->badge()
                            ->suffix(fn (string $state): string => match ($state) {
                                'A' => ' (Sangat Baik)',
                                'B' => ' (Baik)',
                                'C' => ' (Cukup)',
                                'D' => ' (Kurang)'
                            })
                            ->color(fn (string $state): string => match ($state) {
                                'A' => 'primary',
                                'B' => 'success',
                                'C' => 'warning',
                                'D' => 'danger'
                            })
                            ->label('Akreditasi'),
                        TextEntry::make('pimpinan.nama')
                            ->icon('heroicon-o-user-circle')
                            ->iconColor('success')
                            ->label('Kepala Instansi'),
                    ]),

                Fieldset::make('Kontak')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('website')
                            ->icon('heroicon-o-globe-alt')
                            ->iconColor('success')
                            ->label('Website'),
                        TextEntry::make('telepon')
                            ->icon('heroicon-o-phone')
                            ->iconColor('success')
                            ->label('Telepon'),
                        TextEntry::make('email')
                            ->icon('heroicon-o-envelope')
                            ->iconColor('success')
                            ->label('Email'),
                    ]),
                Fieldset::make('Alamat')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('alamat')
                            ->label('Jalan/Kampung/Dusun'),
                        TextEntry::make('kelurahan.nama')
                            ->label('Kelurahan'),
                        TextEntry::make('kecamatan.nama')
                            ->label('Kecamatan'),
                        TextEntry::make('kabupaten.nama')
                            ->label('Kabupaten'),
                        TextEntry::make('provinsi.nama')
                            ->label('Provinsi'),
                        TextEntry::make('negara.nama')
                            ->label('Negara'),
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SekolahResource\Pages\CreateSekolah;
use App\Filament\Resources\SekolahResource\Pages\EditSekolah;
use App\Filament\Resources\SekolahResource\Pages\ListSekolahs;
use App\Filament\Resources\SekolahResource\Pages\ViewSekolah;
use App\Models\Sekolah;
use Filament\Resources\Resource;

class SekolahResource extends Resource
{
    protected static ?string $model = Sekolah::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Instansi';

    protected static ?string $label = 'Instansi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function getPages(): array
    {
        return [
            'index' => ListSekolahs::route('/'),
            'create' => CreateSekolah::route('/create'),
            'view' => ViewSekolah::route('/{record}'),
            'edit' => EditSekolah::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekretarisResource/Pages/CreateSekretaris.php`

```php
<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\SekretarisResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateSekretaris extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = SekretarisResource::class;

    protected string $panitiaLabel = 'Sekretaris';

    protected string $panitiaDirectory = 'assets/sekretaris';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/SekretarisResource/Pages/EditSekretaris.php`

```php
<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\SekretarisResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditSekretaris extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = SekretarisResource::class;

    protected string $panitiaLabel = 'Sekretaris';

    protected string $panitiaDirectory = 'assets/sekretaris';

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}

```

---

### 📄 `./app/Filament/Resources/SekretarisResource/Pages/ListSekretaris.php`

```php
<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Resources\SekretarisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSekretaris extends ListRecords
{
    protected static string $resource = SekretarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekretarisResource/Pages/ViewSekretaris.php`

```php
<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Resources\SekretarisResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSekretaris extends ViewRecord
{
    protected static string $resource = SekretarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekretarisResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SekretarisResource\Pages;
use App\Models\Sekretaris;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class SekretarisResource extends Resource
{
    protected static ?string $model = Sekretaris::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Sekretaris';

    protected static ?string $label = 'Sekretaris';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Sekretaris::count() > 10),

                TextColumn::make('nip')
                    ->label('NIP'),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(Sekretaris::count() > 10),

                ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('img/tte.png'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSekretaris::route('/'),
            'create' => Pages\CreateSekretaris::route('/create'),
            'edit' => Pages\EditSekretaris::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/TahunPendaftaranResource/Pages/CreateTahunPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTahunPendaftaran extends CreateRecord
{
    protected static string $resource = TahunPendaftaranResource::class;
}

```

---

### 📄 `./app/Filament/Resources/TahunPendaftaranResource/Pages/EditTahunPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditTahunPendaftaran extends EditRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/TahunPendaftaranResource/Pages/ListTahunPendaftarans.php`

```php
<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTahunPendaftarans extends ListRecords
{
    protected static string $resource = TahunPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/TahunPendaftaranResource/Pages/ViewTahunPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTahunPendaftaran extends ViewRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/TahunPendaftaranResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TahunPendaftaranResource\Pages\CreateTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\EditTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\ListTahunPendaftarans;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class TahunPendaftaranResource extends Resource
{
    protected static ?string $model = TahunPendaftaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Tahun Pendaftaran';

    protected static ?string $label = 'Tahun Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    // -------------------------------------------------------------------------
    // Form Helpers
    // -------------------------------------------------------------------------

    /**
     * Section pendaftaran/pengumuman per jalur — visible hanya jika jalur aktif.
     */
    private static function jalurSection(string $nama, string $tipe): Section
    {
        $namaLower = strtolower($nama);
        $fieldPrefix = "tanggal_{$tipe}_jalur_{$namaLower}";
        $label = ucfirst($tipe) === 'Pendaftaran' ? 'pendaftaran' : 'pengumuman';

        return Section::make(ucfirst($tipe)." Jalur {$nama}")
            ->visible(fn () => JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', $nama)->exists())
            ->description("Tanggal {$label} untuk jalur {$nama}.")
            ->schema([
                DateTimePicker::make("{$fieldPrefix}_mulai")
                    ->label('Tanggal Mulai '.ucfirst($tipe)." Jalur {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),

                DateTimePicker::make("{$fieldPrefix}_selesai")
                    ->label('Tanggal Selesai '.ucfirst($tipe)." Jalur {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),
            ])
            ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]);
    }

    /**
     * Section tes (Akademik / Praktik) — visible setelah kartu tes diisi.
     */
    private static function tesSection(string $nama): Section
    {
        $namaLower = strtolower($nama);

        return Section::make("Tes {$nama}")
            ->visible(fn ($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))
            ->description("Tanggal tes {$namaLower}.")
            ->schema([
                DateTimePicker::make("tanggal_tes_{$namaLower}_mulai")
                    ->label("Tanggal Mulai Tes {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),

                DateTimePicker::make("tanggal_tes_{$namaLower}_selesai")
                    ->label("Tanggal Selesai Tes {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),
            ])
            ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]);
    }

    // -------------------------------------------------------------------------
    // Table Helpers
    // -------------------------------------------------------------------------

    /**
     * Kolom tanggal dengan description hingga-selesai yang berulang di table.
     */
    private static function tanggalColumn(
        string $field,
        string $label,
        string $fieldSelesai,
        string $format = 'd F Y H:i:s'
    ): TextColumn {
        return TextColumn::make($field)
            ->label($label)
            ->dateTime($format)
            ->description(
                fn (TahunPendaftaran $record): string => $record->{$fieldSelesai}
                    ? 'Hingga: '.Carbon::parse($record->{$fieldSelesai})->translatedFormat($format)
                    : 'Hingga: (Sekarang)'
            );
    }

    // -------------------------------------------------------------------------
    // Form & Table
    // -------------------------------------------------------------------------

    public static function form(Form $form): Form
    {
        $jalurs = ['Prestasi', 'Reguler', 'Afirmasi', 'Zonasi', 'Mutasi'];

        $jalurSections = collect($jalurs)
            ->flatMap(fn (string $jalur) => [
                self::jalurSection($jalur, 'pendaftaran'),
                self::jalurSection($jalur, 'pengumuman'),
            ])
            ->all();

        return $form
            ->schema([
                Section::make('Tahun Pendaftaran')
                    ->description('Data Tahun Pendaftaran.')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Tahun Pendaftaran')
                            ->required()
                            ->minLength(9)
                            ->maxLength(9)
                            ->placeholder('Contoh: 2025/2026')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min' => 'Tahun Pendaftaran: Minimal 9 Karakter.',
                                'max' => 'Tahun Pendaftaran: Maksimal 9 Karakter.',
                            ]),

                        TextInput::make('kuantitas')
                            ->label('Kuota Maksimal Registrasi Akun')
                            ->numeric()
                            ->postfix('Akun')
                            ->required()
                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->default('Aktif')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 3, 'lg' => 3, 'xl' => 3, '2xl' => 3]),

                Section::make('Daftar Akun')
                    ->description('Tanggal Daftar Akun PPDB.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DatePicker::make('tanggal_ppdb_selesai')
                            ->label('Tanggal Selesai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]),

                Section::make('Penerbitan Kartu Tes')
                    ->description('Tanggal penerbitan kartu tes.')
                    ->schema([
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                            ->live()
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                            ->label('Tanggal Selesai Penerbitan Kartu Tes')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]),

                Section::make('Registrasi Berkas')
                    ->description('Tanggal registrasi berkas.')
                    ->schema([
                        DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                            ->label('Tanggal Mulai Registrasi Berkas')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                            ->label('Tanggal Selesai Registrasi Berkas')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]),

                ...$jalurSections,

                self::tesSection('Akademik'),
                self::tesSection('Praktik'),
            ]);
    }

    public static function table(Table $table): Table
    {
        $jalurs = ['Prestasi', 'Reguler', 'Afirmasi', 'Zonasi', 'Mutasi'];

        $jalurColumns = collect($jalurs)
            ->flatMap(fn (string $jalur) => [
                self::tanggalColumn(
                    'tanggal_pendaftaran_jalur_'.strtolower($jalur).'_mulai',
                    "Pendaftaran Jalur {$jalur}",
                    'tanggal_pendaftaran_jalur_'.strtolower($jalur).'_selesai',
                ),
                self::tanggalColumn(
                    'tanggal_pengumuman_jalur_'.strtolower($jalur).'_mulai',
                    "Pengumuman Jalur {$jalur}",
                    'tanggal_pengumuman_jalur_'.strtolower($jalur).'_selesai',
                ),
            ])
            ->all();

        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('kuantitas')
                    ->label('Kuota')
                    ->numeric()
                    ->suffix(' Pendaftar')
                    ->badge(),

                self::tanggalColumn('tanggal_ppdb_mulai', 'Pendaftaran Akun', 'tanggal_ppdb_selesai', 'd F Y'),
                self::tanggalColumn('tanggal_penerbitan_kartu_tes_mulai', 'Penerbitan Kartu Tes', 'tanggal_penerbitan_kartu_tes_selesai'),
                self::tanggalColumn('tanggal_tes_akademik_mulai', 'Tes Akademik', 'tanggal_tes_akademik_selesai'),
                self::tanggalColumn('tanggal_tes_praktik_mulai', 'Tes Praktik', 'tanggal_tes_praktik_selesai'),
                self::tanggalColumn('tanggal_registrasi_berkas_mulai', 'Registrasi Berkas', 'tanggal_registrasi_berkas_selesai'),

                ...$jalurColumns,

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTahunPendaftarans::route('/'),
            'create' => CreateTahunPendaftaran::route('/create'),
            'edit' => EditTahunPendaftaran::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/UserResource/Pages/CreateUser.php`

```php
<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}

```

---

### 📄 `./app/Filament/Resources/UserResource/Pages/EditUser.php`

```php
<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}

```

---

### 📄 `./app/Filament/Resources/UserResource/Pages/ListUsers.php`

```php
<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/UserResource/Pages/ViewUser.php`

```php
<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/UserResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Pengguna';

    protected static ?string $label = 'Pengguna';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 9;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        $isCreate = $form->getRecord() === null;

        return $form
            ->schema([
                Fieldset::make('Pengguna')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        TextInput::make('username')
                            ->label('Nomor Induk Siswa Nasional (NISN)')
                            ->unique(ignoreRecord: true)
                            ->rule(fn ($record) => $record === null
                                ? 'unique:users,username'
                                : 'unique:users,username,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ?: null)
                            ->when(
                                $isCreate,
                                fn (TextInput $field) => $field
                                    ->required()
                                    ->numeric()
                                    ->minLength(10)
                                    ->maxLength(10)
                            )
                            ->validationMessages([
                                'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                                'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                'required' => 'Form ini wajib diisi.',
                            ]),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->unique(ignoreRecord: true)
                            ->rule(fn ($record) => $record === null
                                ? 'unique:users,email'
                                : 'unique:users,email,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ?: null)
                            ->disabledOn('edit')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'unique' => 'Email: Email ini sudah pernah di isi.',
                            ]),

                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn ($record) => $record === null)
                            ->dehydrateStateUsing(fn ($state, $record) => $state ? bcrypt($state) : $record->password),

                        DateTimePicker::make('email_verified_at')
                            ->label('Diverifikasi')
                            ->default(now()),

                        Select::make('roles')
                            ->label('Peran')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->when(
                                $isCreate,
                                fn (Select $field) => $field
                                    ->required()
                                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->default('Aktif')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        FileUpload::make('avatar')
                            ->label('Avatar')
                            ->image()
                            ->minSize(5)
                            ->maxSize(100)
                            ->visibility('private')
                            ->directory('assets/avatar')
                            ->columnSpan(2),
                    ])
                    ->columns(['sm' => 1, 'md' => 3, 'lg' => 3, 'xl' => 3, '2xl' => 3]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('email_verified_at')
                    ->label('Diverifikasi')
                    ->dateTime('d F Y H:i:s')
                    ->sortable(),

                TextColumn::make('roles.name')
                    ->label('Peran')
                    ->formatStateUsing(fn (string $state): string => Str::headline($state))
                    ->badge()
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Aktif' => 'heroicon-o-check-circle',
                        'Nonaktif' => 'heroicon-o-x-mark',
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([
                TrashedFilter::make(),

                SelectFilter::make('role')
                    ->label('Peran')
                    ->relationship('roles', 'name')
                    ->visible(Auth::user()->username === 'super_admin'),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                    ForceDeleteAction::make(),
                    RestoreAction::make(),
                ])->hidden(fn ($record) => $record->username === 'super_admin'),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/UserResource/Widgets/UserRegisters.php`

```php
<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Support\Facades\Auth;

class UserRegisters extends TableWidget
{
    protected static ?int $sort = 2;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return 'Log Akun';
    }

    public static function canView(): bool
    {
        return ! Auth::user()->hasRole('calon_siswa');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::whereHas('roles', fn($q) => $q->where('name', 'calon_siswa'))
                    ->latest('email_verified_at')
            )
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->defaultImageUrl('/img/avatar.png'),

                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('username')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('telepon')
                    ->label('WhatsApp'),

                TextColumn::make('email_verified_at')
                    ->label('Diverifikasi')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif'    => 'success',
                        'Nonaktif' => 'gray',
                        default    => 'gray',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Aktif'    => 'heroicon-o-check-circle',
                        'Nonaktif' => 'heroicon-o-x-mark',
                        default    => 'heroicon-o-x-mark',
                    }),
            ])
            ->striped()
            ->paginationPageOptions([5]);
    }
}

```

---

## 📤 Filament Exports

### 📄 `./app/Filament/Exports/CalonSiswaExporter.php`

```php
<?php

namespace App\Filament\Exports;

use App\Models\CalonSiswa;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class CalonSiswaExporter extends Exporter
{
    protected static ?string $model = CalonSiswa::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('nisn')
                ->label('NISN'),
            ExportColumn::make('nama')
                ->label('Nama Lengkap'),
            ExportColumn::make('sekolahAsal.nama')
                ->label('Sekolah Asal'),
            ExportColumn::make('sekolahAsal.npsn')
                ->label('NPSN Sekolah Asal'),
            ExportColumn::make('sekolahAsal.nss')
                ->label('NSS/NSM Sekolah Asal'),
            ExportColumn::make('jalurPendaftaran.nama')
                ->label('Jalur Pendaftaran'),
            ExportColumn::make('nik')
                ->label('NIK'),
            ExportColumn::make('kk')
                ->label('KK'),
            ExportColumn::make('tempat_lahir')
                ->label('Tempat Lahir'),
            ExportColumn::make('tanggal_lahir')
                ->label('Tanggal Lahir'),
            ExportColumn::make('tahun_lulus')
                ->label('Tahun Lulus'),
            ExportColumn::make('jenis_kelamin')
                ->label('Jenis Kelamin'),
            ExportColumn::make('golongan_darah')
                ->label('Golongan Darah'),
            ExportColumn::make('agama')
                ->label('Agama'),
            ExportColumn::make('anak_ke')
                ->label('Anak Ke'),
            ExportColumn::make('jumlah_saudara')
                ->label('Jumlah Saudara'),
            ExportColumn::make('tinggal_bersama')
                ->label('Tinggal Bersama'),
            ExportColumn::make('jarak_ke_sekolah')
                ->label('Jarak Ke Sekolah'),
            ExportColumn::make('disabilitas')
                ->label('Disabilitas'),
            ExportColumn::make('tinggi_badan')
                ->label('Tinggi Badan'),
            ExportColumn::make('berat_badan')
                ->label('Berat Badan'),
            ExportColumn::make('no_kip')
                ->label('Nomor KIP'),
            ExportColumn::make('no_kks')
                ->label('Nomor KKS'),
            ExportColumn::make('no_pkh')
                ->label('Nomor PKH'),
            ExportColumn::make('siswa_telepon')
                ->label('Nomor Telepon'),

            // // Alamat Peserta
            ExportColumn::make('siswa_alamat')
                ->label('Alamat Peserta'),
            ExportColumn::make('siswaKelurahan.nama')
                ->label('Kelurahan/Desa Peserta'),
            ExportColumn::make('siswaKecamatan.nama')
                ->label('Kecamatan Peserta'),
            ExportColumn::make('siswaKabupaten.nama')
                ->label('Kabupaten/Kota Peserta'),
            ExportColumn::make('siswaProvinsi.nama')
                ->label('Provinsi Peserta'),
            ExportColumn::make('siswaNegara.nama')
                ->label('Negara Peserta'),
            ExportColumn::make('siswaKelurahan.kode_pos')
                ->label('Kode Pos Peserta'),

            // // Lainnya
            ExportColumn::make('prestasi.jenis')
                ->label('Jenis Prestasi'),
            ExportColumn::make('prestasi.nama')
                ->label('Nama Prestasi'),
            ExportColumn::make('prestasi.tingkat')
                ->label('Tingkat Prestasi'),
            ExportColumn::make('prestasi.kategori')
                ->label('Kategori Prestasi'),
            ExportColumn::make('prestasi.peringkat')
                ->label('Peringkat Prestasi'),
            ExportColumn::make('ekstrakurikuler.nama')
                ->label('Peminatan Ekstrakurikuler'),
            ExportColumn::make('mataPelajaran.nama')
                ->label('Peminatan Mata Pelajaran'),

            // // Berkas
            ExportColumn::make('berkas_foto')
                ->label('Foto'),
            ExportColumn::make('berkas_kk')
                ->label('Berkas KK'),
            ExportColumn::make('berkas_akta')
                ->label('Berkas Akta'),
            ExportColumn::make('berkas_kip')
                ->label('Berkas KIP'),
            ExportColumn::make('berkas_kks')
                ->label('Berkas KKS'),
            ExportColumn::make('berkas_pkh')
                ->label('Berkas PKH'),
            ExportColumn::make('berkas_nisn')
                ->label('Berkas NISN'),
            ExportColumn::make('berkas_skbb')
                ->label('Berkas SKBB'),
            ExportColumn::make('berkas_skab')
                ->label('Berkas SKAB'),
            ExportColumn::make('berkas_prestasi')
                ->label('Berkas Prestasi'),

            // // Data Ibu
            ExportColumn::make('ibu_nama')
                ->label('Nama Ibu'),
            ExportColumn::make('ibu_nik')
                ->label('NIK Ibu'),
            ExportColumn::make('ibu_telepon')
                ->label('Nomor Telepon Ibu'),
            ExportColumn::make('ibu_pendidikan')
                ->label('Pendidikan Ibu'),
            ExportColumn::make('ibu_pekerjaan')
                ->label('Pekerjaan Ibu'),
            ExportColumn::make('ibu_penghasilan')
                ->label('Penghasilan Bulanan Ibu'),
            ExportColumn::make('ibu_status')
                ->label('Status Ibu'),
            ExportColumn::make('ibu_alamat')
                ->label('Alamat Ibu'),
            ExportColumn::make('ibuKelurahan.nama')
                ->label('Kelurahan/Desa Ibu'),
            ExportColumn::make('ibuKecamatan.nama')
                ->label('Kecamatan Ibu'),
            ExportColumn::make('ibuKabupaten.nama')
                ->label('Kabupaten/Kota Ibu'),
            ExportColumn::make('ibuProvinsi.nama')
                ->label('Provinsi Ibu'),
            ExportColumn::make('ibuNegara.nama')
                ->label('Negara Ibu'),
            ExportColumn::make('ibuKelurahan.kode_pos')
                ->label('Kode Pos Ibu'),

            // // Data Ayah
            ExportColumn::make('ayah_nama')
                ->label('Nama Ayah'),
            ExportColumn::make('ayah_nik')
                ->label('NIK Ayah'),
            ExportColumn::make('ayah_telepon')
                ->label('Nomor Telepon Ayah'),
            ExportColumn::make('ayah_pendidikan')
                ->label('Pendidikan Ayah'),
            ExportColumn::make('ayah_pekerjaan')
                ->label('Pekerjaan Ayah'),
            ExportColumn::make('ayah_penghasilan')
                ->label('Penghasilan Bulanan Ayah'),
            ExportColumn::make('ayah_status')
                ->label('Status Ayah'),
            ExportColumn::make('ayah_alamat')
                ->label('Alamat Ayah'),
            ExportColumn::make('ayahKelurahan.nama')
                ->label('Kelurahan/Desa Ayah'),
            ExportColumn::make('ayahKecamatan.nama')
                ->label('Kecamatan Ayah'),
            ExportColumn::make('ayahKabupaten.nama')
                ->label('Kabupaten/Kota Ayah'),
            ExportColumn::make('ayahProvinsi.nama')
                ->label('Provinsi Ayah'),
            ExportColumn::make('ayahNegara.nama')
                ->label('Negara Ayah'),
            ExportColumn::make('ayahKelurahan.kode_pos')
                ->label('Kode Pos Ayah'),

            // // Data Wali
            ExportColumn::make('wali_nama')
                ->label('Nama Wali'),
            ExportColumn::make('wali_nik')
                ->label('NIK Wali'),
            ExportColumn::make('wali_telepon')
                ->label('Nomor Telepon Wali'),
            ExportColumn::make('wali_pendidikan')
                ->label('Pendidikan Wali'),
            ExportColumn::make('wali_pekerjaan')
                ->label('Pekerjaan Wali'),
            ExportColumn::make('wali_penghasilan')
                ->label('Penghasilan Wali'),
            ExportColumn::make('wali_status')
                ->label('Status Wali'),
            ExportColumn::make('wali_alamat')
                ->label('Alamat Wali'),
            ExportColumn::make('waliKelurahan.nama')
                ->label('Kelurahan/Desa Wali'),
            ExportColumn::make('waliKecamatan.nama')
                ->label('Kecamatan Wali'),
            ExportColumn::make('waliKabupaten.nama')
                ->label('Kabupaten/Kota Wali'),
            ExportColumn::make('waliProvinsi.nama')
                ->label('Provinsi Wali'),
            ExportColumn::make('waliNegara.nama')
                ->label('Negara Wali'),
            ExportColumn::make('waliKelurahan.kode_pos')
                ->label('Kode Pos Wali'),

            // Jadwal Tes
            ExportColumn::make('tes_sesi')
                ->label('Sesi Tes'),
            ExportColumn::make('tes_ruang')
                ->label('Ruang Tes'),
            ExportColumn::make('tes_akademik')
                ->label('Tanggal Tes Akademik'),
            ExportColumn::make('tes_praktik')
                ->label('Tanggal Tes Praktik'),

            // Nilai Tes
            ExportColumn::make('bobot_nilai_akademik')
                ->label('Bobot Nilai Tes Akademik'),
            ExportColumn::make('bobot_nilai_praktik')
                ->label('Bobot Nilai Tes Praktik'),
            ExportColumn::make('nilai_akademik')
                ->label('Nilai Tes Akademik'),
            ExportColumn::make('nilai_praktik')
                ->label('Nilai Tes Praktik'),
            ExportColumn::make('status_pendaftaran')
                ->label('Status Pendaftaran'),
            ExportColumn::make('kelas_id')
                ->label('Kelas'),
            // Timestamp
            // ExportColumn::make('created_at')
            //     ->label('Dibuat'),
            // ExportColumn::make('updated_at')
            //     ->label('Diubah'),
            // ExportColumn::make('deleted_at')
            //     ->label('Dihapus'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your calon siswa export has completed and '.number_format($export->successful_rows).' '.str('row')->plural($export->successful_rows).' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to export.';
        }

        return $body;
    }
}

```

---

## 📥 Filament Imports

### 📄 `./app/Filament/Imports/CalonSiswaImporter.php`

```php
<?php

namespace App\Filament\Imports;

use App\Models\CalonSiswa;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class CalonSiswaImporter extends Importer
{
    protected static ?string $model = CalonSiswa::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('nisn')
                ->label('NISN')
                ->requiredMapping()
                ->rules(['required', 'max:10']),

            ImportColumn::make('nama')
                ->label('Nama Lengkap')
                ->requiredMapping()
                ->rules(['required', 'max:50']),

            ImportColumn::make('tes_sesi')
                ->label('Sesi Tes')
                ->rules(['nullable', 'max:50']),

            ImportColumn::make('tes_ruang')
                ->label('Ruang Tes')
                ->rules(['nullable', 'max:50']),

            ImportColumn::make('tes_akademik')
                ->label('Tanggal Tes Akademik')
                ->rules(['nullable', 'date']),

            ImportColumn::make('tes_praktik')
                ->label('Tanggal Tes Praktik')
                ->rules(['nullable', 'date']),

            ImportColumn::make('bobot_nilai_akademik')
                ->label('Bobot Nilai Akademik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('bobot_nilai_praktik')
                ->label('Bobot Nilai Praktik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('nilai_akademik')
                ->label('Nilai Akademik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('nilai_praktik')
                ->label('Nilai Praktik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('status_pendaftaran')
                ->label('Status Pendaftaran')
                ->rules(['nullable', 'in:Diproses,Berkas Tidak Lengkap,Diverifikasi,Ditolak,Diterima,Tidak Diterima,Diterima Di Kelas Reguler,Diterima Di Kelas Unggulan']),

            ImportColumn::make('kelas')
                ->label('Kelas')
                ->relationship('kelas', 'nama')
                ->rules(['nullable', 'exists:kelas,nama']),
        ];
    }

    public function resolveRecord(): ?CalonSiswa
    {
        // Update existing record jika NISN sudah ada,
        // buat baru jika belum — bypass global scope agar
        // bisa update data lintas tahun pendaftaran
        return CalonSiswa::withoutGlobalScopes()
            ->firstOrNew(['nisn' => $this->data['nisn']]);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Import calon siswa selesai. '
            .number_format($import->successful_rows).' '
            .str('baris')->plural($import->successful_rows)
            .' berhasil diimport.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '
                .str('baris')->plural($failedRowsCount)
                .' gagal diimport.';
        }

        return $body;
    }
}

```

---

## 📄 Filament Pages

### 📄 `./app/Filament/Pages/Auth/EditProfileCustom.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Pages\Auth\EditProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class EditProfileCustom extends EditProfile
{
    use HasCustomLayout;

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getAvatarFormComponent(),
                        $this->getNameFormComponent(),
                        $this->getUsernameFormComponent(),
                        $this->getTeleponFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->operation('edit')
                    ->model($this->getUser())
                    ->statePath('data')
                    ->inlineLabel(! static::isSimple()),
            ),
        ];
    }

    protected function getAvatarFormComponent(): Component
    {
        return FileUpload::make('avatar')
            ->label('Avatar')
            ->image()
            ->minSize(5)
            ->maxSize(500)
            ->visibility('private')
            ->directory('assets/avatar');
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label('Nama Lengkap')
            ->suffixIcon('heroicon-o-user-circle')
            ->required()
            ->maxLength(100)
            ->autofocus();
    }

    protected function getUsernameFormComponent(): Component
    {
        // Gunakan hasRole() — aman meski user tidak punya role
        if (Auth::user()->hasRole('calon_siswa')) {
            return TextInput::make('username')
                ->label('Nomor Induk Siswa Nasional (NISN)')
                ->suffixIcon('heroicon-o-identification')
                ->required()
                ->numeric()
                ->minLength(10)
                ->maxLength(10)
                ->unique(ignoreRecord: true)
                ->validationMessages([
                    'max' => 'NISN: Masukkan maksimal 10 Angka.',
                    'min' => 'NISN: Masukkan minimal 10 Angka.',
                    'unique' => 'NISN: Nomor ini sudah pernah diisi.',
                    'required' => 'Form ini wajib diisi.',
                ]);
        }

        return TextInput::make('username')
            ->label('Username')
            ->suffixIcon('heroicon-o-identification')
            ->required()
            ->unique(ignoreRecord: true)
            ->validationMessages([
                'unique' => 'Username: Username sudah pernah diisi.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getTeleponFormComponent(): Component
    {
        return TextInput::make('telepon')
            ->label('Nomor WhatsApp Aktif')
            ->suffixIcon('heroicon-o-phone')
            ->tel()
            ->maxLength(15)
            ->placeholder('Contoh: 08123456789')
            ->helperText('Nomor ini digunakan untuk notifikasi dan verifikasi OTP.')
            // Hanya calon_siswa yang wajib isi — role lain opsional
            ->required(fn () => Auth::user()->hasRole('calon_siswa'))
            ->validationMessages([
                'required' => 'Nomor WhatsApp wajib diisi.',
                'max' => 'Nomor WhatsApp maksimal 15 karakter.',
            ]);
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label('Email')
            ->suffixIcon('heroicon-o-envelope')
            ->email()
            ->required()
            ->maxLength(50)
            ->unique(ignoreRecord: true)
            ->validationMessages([
                'max' => 'Email: Masukkan maksimal 50 Karakter.',
                'unique' => 'Email: Email ini sudah pernah diisi.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label('Password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->rule(Password::default())
            ->autocomplete('new-password')
            ->dehydrated(fn ($state): bool => filled($state))
            ->dehydrateStateUsing(fn ($state): string => Hash::make($state))
            ->live(debounce: 500)
            ->same('passwordConfirmation')
            ->validationMessages([
                'same' => 'Password: Password tidak sesuai dengan isian password konfirmasi.',
                'min' => 'Password: Masukkan minimal 8 karakter alfanumerik.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label('Ulangi Password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->visible(fn (Get $get): bool => filled($get('password')))
            ->dehydrated(false);
    }
}

```

---

### 📄 `./app/Filament/Pages/Auth/ForgotPasswordCustom.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\WhatsAppService;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\SimplePage;
use Illuminate\Support\Facades\Redis;

class ForgotPasswordCustom extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.forgot-password-custom';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('identity')
                    ->label('Username / Email / Nomor WhatsApp')
                    ->required()
                    ->suffixIcon('heroicon-o-user')
                    ->autofocus()
                    ->placeholder('Masukkan salah satu')
                    ->validationMessages([
                        'required' => 'Field ini wajib diisi.',
                    ]),
            ])
            ->statePath('data');
    }

    public function kirim(): void
    {
        $data = $this->form->getState();
        $identity = trim($data['identity']);

        // Cari user berdasarkan username, email, atau telepon
        $user = User::where('username', $identity)
            ->orWhere('email', $identity)
            ->orWhere('telepon', $identity)
            ->where('status', 'Aktif')
            ->first();

        // Selalu tampilkan pesan sukses untuk mencegah user enumeration
        if (! $user) {
            Notification::make()
                ->title('Data tidak ditemukan.')
                ->success()
                ->send();

            return;
        }

        if (! $user->telepon) {
            Notification::make()
                ->title('Akun ini tidak memiliki nomor WhatsApp terdaftar.')
                ->body('Hubungi panitia PPDB untuk bantuan.')
                ->danger()
                ->send();

            return;
        }

        // Cek cooldown
        $cooldownKey = "otp_cooldown:{$user->id}";
        if (Redis::exists($cooldownKey)) {
            $ttl = Redis::ttl($cooldownKey);
            Notification::make()
                ->title("Tunggu {$ttl} detik sebelum meminta OTP baru.")
                ->warning()
                ->send();

            return;
        }

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        Redis::setex("reset_otp:{$user->id}", 300, $otp);   // OTP TTL 5 menit
        Redis::setex($cooldownKey, 60, 1);                    // cooldown 60 detik

        $message = "Halo {$user->name},\n\n"
            ."Kode OTP reset password PPDB MTsN 1 Pandeglang Anda:\n\n"
            ."*{$otp}*\n\n"
            .'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send(
            phone: $user->telepon,
            message: $message,
            minDelay: 1,
            maxDelay: 5,
        );

        session(['reset_otp_user_id' => $user->id]);

        Notification::make()
            ->title('Kode OTP telah dikirim ke WhatsApp Anda.')
            ->success()
            ->send();

        $this->redirect(route('otp.reset-password'));
    }

    public function getTitle(): string
    {
        return 'Lupa Password';
    }
}

```

---

### 📄 `./app/Filament/Pages/Auth/LoginCustom.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Filament\Pages\Auth\VerifikasiOtp;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Login;
use Illuminate\Validation\ValidationException;

class LoginCustom extends Login
{
    use HasCustomLayout;

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getLoginFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('login')
            ->label(__('Email/Nomor Induk Siswa Nasional (NISN)'))
            ->required()
            ->suffixIcon('heroicon-o-lock-closed')
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        $login_type = filter_var($data['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            $login_type => $data['login'],
            'password' => $data['password'],
        ];
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.login' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }

    public function authenticate(): ?\Filament\Http\Responses\Auth\Contracts\LoginResponse
    {
        $response = parent::authenticate();

        $user = \Illuminate\Support\Facades\Auth::user();

        if ($user && ! $user->hasVerifiedEmail()) {
            session(['otp_user_id' => $user->id]);

            \Illuminate\Support\Facades\Auth::logout();

            $this->redirect('/verifikasi-otp');
            return null;
        }

        return $response;
    }
}

```

---

### 📄 `./app/Filament/Pages/Auth/NewPassword.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\WhatsAppService;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\SimplePage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rules\Password;

class NewPassword extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.new-password';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

    public function mount(): void
    {
        $userId = session('reset_otp_user_id');

        if (! $userId || ! Redis::exists("reset_token:{$userId}")) {
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('password')
                    ->label('Password Baru')
                    ->password()
                    ->revealable(filament()->arePasswordsRevealable())
                    ->required()
                    ->rule(Password::default())
                    ->same('password_confirmation')
                    ->autofocus()
                    ->validationMessages([
                        'required' => 'Password wajib diisi.',
                        'same' => 'Password tidak sesuai dengan konfirmasi.',
                        'min' => 'Password minimal 8 karakter.',
                    ]),

                TextInput::make('password_confirmation')
                    ->label('Ulangi Password Baru')
                    ->password()
                    ->revealable(filament()->arePasswordsRevealable())
                    ->required()
                    ->dehydrated(false),
            ])
            ->statePath('data');
    }

    public function simpanPassword(): void
    {
        $data = $this->form->getState();
        $userId = session('reset_otp_user_id');

        if (! Redis::exists("reset_token:{$userId}")) {
            Notification::make()->title('Sesi reset password sudah kadaluarsa.')->body('Silakan ulangi proses lupa password.')->danger()->send();
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $user = User::find($userId);

        if (! $user) {
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $user->forceFill([
            'password' => Hash::make($data['password']),
        ])->save();

        Redis::del("reset_token:{$userId}");
        Redis::del("otp_cooldown:{$userId}");
        session()->forget('reset_otp_user_id');

        $message = "Halo {$user->name},\n\n"
            ."Password akun PPDB MTsN 1 Pandeglang Anda telah berhasil diubah.\n\n"
            .'Jika Anda tidak merasa melakukan perubahan ini, segera hubungi panitia PPDB.';

        app(WhatsAppService::class)->send(
            phone: $user->telepon,
            message: $message,
            minDelay: 1,
            maxDelay: 5,
        );

        Notification::make()->title('Password berhasil diubah.')->body('Silakan login dengan password baru Anda.')->success()->send();

        $this->redirect(filament()->getLoginUrl());
    }

    public function getTitle(): string
    {
        return 'Buat Password Baru';
    }
}

```

---

### 📄 `./app/Filament/Pages/Auth/RegisterCustom.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Services\WhatsAppService;
use Carbon\Carbon;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Notifications\Notification;
use Filament\Pages\Auth\Register;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Password;

class RegisterCustom extends Register
{
    use HasCustomLayout;

    // -----------------------------------------------------------------------
    // Guard: cek jadwal PPDB setiap kali halaman di-render
    // Octane-safe karena mount() dipanggil per-request
    // -----------------------------------------------------------------------

    public function mount(): void
    {
        if (! $this->isRegistrationOpen()) {
            Notification::make()
                ->title('Pendaftaran Ditutup')
                ->body('Pendaftaran belum dibuka atau sudah ditutup.')
                ->warning()
                ->send();

            $this->redirect(filament()->getLoginUrl());

            return;
        }

        parent::mount();
    }

    protected function isRegistrationOpen(): bool
    {
        return Cache::remember('ppdb:registration_open', 60, function () {
            try {
                if (! Schema::hasTable('tahun_pendaftarans')) {
                    return false;
                }

                $tahun = DB::table('tahun_pendaftarans')
                    ->where('status', 'Aktif')
                    ->first();

                if (! $tahun) {
                    return false;
                }

                $now = Carbon::now();
                $start = Carbon::parse($tahun->tanggal_ppdb_mulai);
                $end = Carbon::parse($tahun->tanggal_ppdb_selesai);

                return $now->between($start, $end);
            } catch (\Throwable $e) {
                Log::error('RegisterCustom::isRegistrationOpen error: '.$e->getMessage());

                return false;
            }
        });
    }

    // -----------------------------------------------------------------------
    // Form
    // -----------------------------------------------------------------------

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getUsernameFormComponent(),
                        $this->getTeleponFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label('Nama Lengkap')
            ->required()
            ->suffixIcon('heroicon-o-user-circle')
            ->maxLength(100)
            ->autofocus();
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label('Nomor Induk Siswa Nasional (NISN)')
            ->required()
            ->suffixIcon('heroicon-o-identification')
            ->numeric()
            ->maxLength(10)
            ->minLength(10)
            ->validationMessages([
                'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                'unique' => 'NISN: Nomor ini sudah pernah diisi.',
                'required' => 'Form ini wajib diisi.',
            ])
            ->unique($this->getUserModel());
    }

    protected function getTeleponFormComponent(): Component
    {
        return TextInput::make('telepon')
            ->label('Nomor WhatsApp Aktif')
            ->required()
            ->suffixIcon('heroicon-o-phone')
            ->tel()
            ->maxLength(15)
            ->placeholder('Contoh: 08123456789')
            ->helperText('Nomor ini akan digunakan untuk mengirim kode OTP verifikasi.')
            ->validationMessages([
                'required' => 'Nomor WhatsApp wajib diisi.',
                'max' => 'Nomor WhatsApp maksimal 15 karakter.',
            ]);
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label('Email')
            ->email()
            ->required()
            ->suffixIcon('heroicon-o-envelope')
            ->maxLength(50)
            ->validationMessages([
                'max' => 'Email: Masukkan maksimal 50 Karakter.',
                'unique' => 'Email: Email ini sudah pernah diisi.',
                'required' => 'Form ini wajib diisi.',
            ])
            ->unique($this->getUserModel());
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label('Password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->rule(Password::default())
            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
            ->same('passwordConfirmation')
            ->validationMessages([
                'same' => 'Password: Password tidak sesuai dengan isian password konfirmasi.',
                'min' => 'Password: Masukkan minimal 8 karakter alfanumerik.',
                'required' => 'Form ini wajib diisi.',
            ])
            ->validationAttribute(__('filament-panels::pages/auth/register.form.password.validation_attribute'));
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label('Ulangi Password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->dehydrated(false);
    }

    // -----------------------------------------------------------------------
    // Register — kirim OTP setelah user dibuat
    // -----------------------------------------------------------------------

    public function register(): ?RegistrationResponse
    {
        $data = $this->form->getState();

        $user = $this->getUserModel()::create($data);

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $ttl = 300;

        Redis::setex("otp:{$user->id}", $ttl, $otp);

        $message = "Halo {$user->name},\n\n"
            ."Kode OTP verifikasi akun PPDB MTsN 1 Pandeglang Anda:\n\n"
            ."*{$otp}*\n\n"
            .'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send(
            phone: $user->telepon,
            message: $message,
            minDelay: 1,   // OTP: kirim cepat
            maxDelay: 5,
        );

        session(['otp_user_id' => $user->id]);

        $this->redirect(route('otp.verifikasi'));

        return null;
    }
}

```

---

### 📄 `./app/Filament/Pages/Auth/ResetPasswordOtp.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\WhatsAppService;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\SimplePage;
use Illuminate\Support\Facades\Redis;

class ResetPasswordOtp extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.reset-password-otp';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

    public function mount(): void
    {
        if (! session('reset_otp_user_id')) {
            $this->redirect(route('otp.forgot-password'));

            return;
        }
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('otp')
                    ->label('Kode OTP')
                    ->required()
                    ->numeric()
                    ->length(6)
                    ->placeholder('Masukkan 6 digit kode OTP')
                    ->suffixIcon('heroicon-o-key')
                    ->autofocus()
                    ->validationMessages([
                        'required' => 'Kode OTP wajib diisi.',
                        'digits' => 'Kode OTP harus 6 digit.',
                    ]),
            ])
            ->statePath('data');
    }

    public function verifikasiOtp(): void
    {
        $data = $this->form->getState();
        $userId = session('reset_otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()->title('Sesi tidak valid. Silakan ulangi proses lupa password.')->danger()->send();
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $storedOtp = Redis::get("reset_otp:{$userId}");

        if (! $storedOtp) {
            Notification::make()->title('Kode OTP sudah kadaluarsa.')->body('Silakan minta kode OTP baru.')->danger()->send();

            return;
        }

        // OPTIMASI: Mencegah Timing Attack
        if (! hash_equals((string) $storedOtp, (string) $data['otp'])) {
            Notification::make()->title('Kode OTP tidak valid.')->body('Periksa kembali kode yang dikirim ke WhatsApp Anda.')->danger()->send();

            return;
        }

        Redis::del("reset_otp:{$userId}");
        Redis::setex("reset_token:{$userId}", 900, 1);

        Notification::make()->title('OTP valid. Silakan buat password baru.')->success()->send();
        $this->redirect(route('otp.new-password'));
    }

    public function resend(): void
    {
        $userId = session('reset_otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()->title('Sesi tidak valid.')->danger()->send();

            return;
        }

        $cooldownKey = "otp_cooldown:{$userId}";
        if (Redis::exists($cooldownKey)) {
            $ttl = Redis::ttl($cooldownKey);
            Notification::make()->title("Tunggu {$ttl} detik sebelum meminta OTP baru.")->warning()->send();

            return;
        }

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        Redis::setex("reset_otp:{$userId}", 300, $otp);
        Redis::setex($cooldownKey, 60, 1);

        $message = "Halo {$user->name},\n\nKode OTP baru reset password PPDB MTsN 1 Pandeglang Anda:\n\n*{$otp}*\n\nKode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.";

        app(WhatsAppService::class)->send(
            phone: $user->telepon,
            message: $message,
            minDelay: 1,
            maxDelay: 5,
        );

        Notification::make()->title('Kode OTP baru telah dikirim ke WhatsApp Anda.')->success()->send();
    }

    public function getTitle(): string
    {
        return 'Verifikasi OTP';
    }
}

```

---

### 📄 `./app/Filament/Pages/Auth/VerifikasiOtp.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\WhatsAppService;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\SimplePage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class VerifikasiOtp extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.verifikasi-otp';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

    public function mount(): void
    {
        $user = Auth::user() ?? User::find(session('otp_user_id'));

        if (! $user) {
            $this->redirect(filament()->getLoginUrl());
            return;
        }

        if ($user->hasVerifiedEmail()) {
            $this->redirect(filament()->getUrl());
            return;
        }

        // Simpan ke session agar resend & verifikasi bisa pakai
        session(['otp_user_id' => $user->id]);

        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('otp')
                    ->label('Kode OTP')
                    ->required()
                    ->numeric()
                    ->length(6)
                    ->placeholder('Masukkan 6 digit kode OTP')
                    ->suffixIcon('heroicon-o-key')
                    ->autofocus()
                    ->validationMessages([
                        'required' => 'Kode OTP wajib diisi.',
                        'digits' => 'Kode OTP harus 6 digit.',
                    ]),
            ])
            ->statePath('data');
    }

    public function verifikasi(): void
    {
        $data = $this->form->getState();
        $userId = session('otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()->title('Sesi tidak valid. Silakan daftar ulang.')->danger()->send();
            $this->redirect(filament()->getLoginUrl());

            return;
        }

        $storedOtp = Redis::get("otp:{$userId}");

        if (! $storedOtp) {
            Notification::make()->title('Kode OTP sudah kadaluarsa.')->body('Silakan minta kode OTP baru.')->danger()->send();

            return;
        }

        // OPTIMASI: Mencegah Timing Attack
        if (! hash_equals((string) $storedOtp, (string) $data['otp'])) {
            Notification::make()->title('Kode OTP tidak valid.')->body('Periksa kembali kode yang dikirim ke WhatsApp Anda.')->danger()->send();

            return;
        }

        $user->forceFill([
            'email_verified_at' => now(),
            'status' => 'Aktif',
        ])->save();

        Redis::del("otp:{$userId}");
        Redis::del("otp_cooldown:{$userId}");
        session()->forget('otp_user_id');

        Auth::login($user);

        Notification::make()->title('Akun berhasil diverifikasi!')->body('Selamat datang di PPDB MTsN 1 Pandeglang.')->success()->send();
        $this->redirect(filament()->getUrl());
    }

    public function resend(): void
    {
        $userId = session('otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()->title('Sesi tidak valid.')->danger()->send();

            return;
        }

        $cooldownKey = "otp_cooldown:{$userId}";
        if (Redis::exists($cooldownKey)) {
            $ttl = Redis::ttl($cooldownKey);
            Notification::make()->title("Tunggu {$ttl} detik sebelum meminta OTP baru.")->warning()->send();

            return;
        }

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        Redis::setex("otp:{$userId}", 300, $otp);
        Redis::setex($cooldownKey, 60, 1);

        $message = "Halo {$user->name},\n\nKode OTP baru verifikasi akun PPDB MTsN 1 Pandeglang Anda:\n\n*{$otp}*\n\nKode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.";
        app(WhatsAppService::class)->send(
            phone: $user->telepon,
            message: $message,
            minDelay: 1,
            maxDelay: 5,
        );

        Notification::make()->title('Kode OTP baru telah dikirim ke WhatsApp Anda.')->success()->send();
    }

    public function getTitle(): string
    {
        return 'Verifikasi OTP';
    }
}

```

---

## 🔗 Filament Concerns

### 📄 `./app/Filament/Concerns/HasPanitiaWizardSteps.php`

```php
<?php

namespace App\Filament\Concerns;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;

trait HasPanitiaWizardSteps
{
    /**
     * Label untuk Step 1, Step 2, dan direktori upload.
     * Override di page jika perlu, atau biarkan default dari abstract method.
     *
     * Contoh:
     *   protected string $panitiaLabel = 'Bendahara';
     *   protected string $panitiaDirectory = 'assets/bendahara';
     */
    protected function panitiaSteps(): array
    {
        $label = $this->panitiaLabel ?? 'Panitia';
        $directory = $this->panitiaDirectory ?? 'assets/panitia';

        return [
            Step::make("Data {$label}")
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->numeric()
                                ->minLength(18)
                                ->maxLength(18)
                                ->prefix('NIP')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ]),

                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 2, 'lg' => 4]),
                ]),

            Step::make("Berkas {$label}")
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1', '3:4' => '3:4'])
                                ->fetchFileInformation(false)
                                ->directory($directory)
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                                ->fetchFileInformation(false)
                                ->directory($directory)
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->acceptedFileTypes(['application/pdf'])
                                ->fetchFileInformation(false)
                                ->directory($directory)
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),
        ];
    }
}

```

---

## 🔗 Filament Traits

### 📄 `./app/Filament/Traits/CalonSiswaFormTrait.php`

```php
<?php

namespace App\Filament\Traits;

use App\Constants\FormOptions;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;

trait CalonSiswaFormTrait
{
    // ========================================================================
    // SINGLE FIELDS (Reusable across Create/Edit/View)
    // ========================================================================

    protected function getJalurPendaftaranField(): Select
    {
        return Select::make('jalur_pendaftaran_id')
            ->label('Jalur Pendaftaran')
            ->relationship('jalurPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
            ->required()
            ->validationMessages(['required' => 'Form ini wajib diisi.'])
            ->native(false)
            ->live()
            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}");
    }

    protected function getNamaField(): TextInput
    {
        return TextInput::make('nama')
            ->label('Nama Lengkap')
            ->required()
            ->disabledOn('create')
            ->dehydrated()
            ->default(fn () => Auth::user()->name)
            ->validationMessages(['required' => 'Form ini wajib diisi.']);
    }

    protected function getNikField(): TextInput
    {
        return TextInput::make('nik')
            ->label('Nomor Induk Kependudukan (NIK)')
            ->required()
            ->unique(ignoreRecord: true)
            ->dehydrateStateUsing(fn ($state) => $state ?: null)
            ->numeric()
            ->maxLength(16)
            ->minLength(16)
            ->validationMessages([
                'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getKkField(): TextInput
    {
        return TextInput::make('kk')
            ->label('Nomor Kartu Keluarga (KK)')
            ->required()
            ->maxLength(16)
            ->numeric()
            ->minLength(16)
            ->validationMessages([
                'max_digits' => 'KK: Masukkan maksimal 16 Angka.',
                'min_digits' => 'KK: Masukkan minimal 16 Angka.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getNisnField(): TextInput
    {
        return TextInput::make('nisn')
            ->label('Nomor Induk Siswa Nasional (NISN)')
            ->required()
            ->disabled(true)
            ->dehydrated()
            ->default(fn () => Auth::user()->username)
            ->unique(ignoreRecord: true)
            ->dehydrateStateUsing(fn ($state) => $state ?: null)
            ->numeric()
            ->maxLength(10)
            ->minLength(10)
            ->validationMessages([
                'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getTempatLahirField(): TextInput
    {
        return TextInput::make('tempat_lahir')
            ->label('Tempat Lahir')
            ->required()
            ->validationMessages(['required' => 'Form ini wajib diisi.']);
    }

    protected function getTanggalLahirField(): DatePicker
    {
        return DatePicker::make('tanggal_lahir')
            ->label('Tanggal Lahir')
            ->maxDate(now())
            ->required()
            ->validationMessages(['required' => 'Form ini wajib diisi.']);
    }

    // ========================================================================
    // FIELD GROUPS (Complex reusable structures)
    // ========================================================================

    protected function getWilayahFields(string $prefix, bool $required = true): array
    {
        return [
            Select::make("{$prefix}_negara_id")
                ->label('Negara')
                ->relationship("{$prefix}Negara", 'nama')
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_provinsi_id", null);
                    $set("{$prefix}_kabupaten_id", null);
                    $set("{$prefix}_kecamatan_id", null);
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_provinsi_id")
                ->label('Provinsi')
                ->options(fn (Get $get): Collection => Provinsi::query()
                    ->where('negara_id', $get("{$prefix}_negara_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kabupaten_id", null);
                    $set("{$prefix}_kecamatan_id", null);
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kabupaten_id")
                ->label('Kabupaten')
                ->options(fn (Get $get): Collection => Kabupaten::query()
                    ->where('provinsi_id', $get("{$prefix}_provinsi_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kecamatan_id", null);
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kecamatan_id")
                ->label('Kecamatan')
                ->options(fn (Get $get): Collection => Kecamatan::query()
                    ->where('kabupaten_id', $get("{$prefix}_kabupaten_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kelurahan_id")
                ->label('Kelurahan')
                ->options(fn (Get $get): Collection => Kelurahan::query()
                    ->where('kecamatan_id', $get("{$prefix}_kecamatan_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false),

            TextInput::make("{$prefix}_alamat")
                ->label('Jalan/Kampung/Dusun')
                ->required($required)
                ->placeholder('KP KEBON CAU RT 001 RW 005')
                ->validationMessages(['required' => 'Form ini wajib diisi.']),
        ];
    }

    protected function getOrangTuaFields(string $type, bool $required = true): array
    {
        $label = ucfirst($type);

        return [
            TextInput::make("{$type}_nama")
                ->label("Nama Lengkap {$label} Kandung")
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.']),

            TextInput::make("{$type}_nik")
                ->label("NIK {$label} Kandung")
                ->required($required)
                ->maxLength(16)
                ->minLength(16)
                ->numeric()
                ->validationMessages([
                    'required' => 'Form ini wajib diisi.',
                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                ]),

            TextInput::make("{$type}_telepon")
                ->label('Nomor Telepon')
                ->tel()
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.']),

            Select::make("{$type}_pekerjaan")
                ->label('Pekerjaan')
                ->options(FormOptions::PEKERJAAN)
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false),

            Select::make("{$type}_penghasilan")
                ->label('Penghasilan Bulanan')
                ->options(FormOptions::PENGHASILAN)
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false),

            Select::make("{$type}_pendidikan")
                ->label('Pendidikan')
                ->options(FormOptions::PENDIDIKAN)
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false),

            Select::make("{$type}_status")
                ->label('Status')
                ->options(FormOptions::STATUS_HIDUP)
                ->required($required)
                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                ->native(false),
        ];
    }

    protected function getBerkasField(string $type, string $label, $required = true, ?string $helperText = null): FileUpload
    {
        $field = FileUpload::make("berkas_{$type}")
            ->label($label)
            ->required($required)
            ->validationMessages(['required' => 'Form ini wajib diisi.'])
            ->fetchFileInformation(false)
            ->directory(fn ($get) => "berkas/{$type}/".$get('nisn'))
            ->downloadable()
            ->openable()
            ->maxSize(500)
            ->minSize(10)
            ->visibility('private');

        if (in_array($type, ['skbb', 'skab'])) {
            $field->acceptedFileTypes(['application/pdf']);
        } else {
            $field->image()
                ->imageEditor()
                ->imageEditorAspectRatios([null, '1:1' => '1:1', '3:4' => '3:4']);
        }

        if ($helperText) {
            $field->helperText(new HtmlString($helperText));
        }

        return $field;
    }

    // ========================================================================
    // TAB SCHEMAS
    // ========================================================================

    protected function getDataCalonSiswaTab(): Tabs\Tab
    {
        return Tabs\Tab::make('Biodata')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema([
                $this->getJalurPendaftaranField(),
                $this->getNamaField(),
                $this->getNikField(),
                $this->getKkField(),
                $this->getNisnField(),
                $this->getTempatLahirField(),
                $this->getTanggalLahirField(),

                Select::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->options(FormOptions::tahunLulusOptions())
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),

                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options(FormOptions::JENIS_KELAMIN)
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),

                Select::make('golongan_darah')
                    ->label('Golongan Darah')
                    ->options(FormOptions::GOLONGAN_DARAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),

                Select::make('agama')
                    ->label('Agama')
                    ->options(FormOptions::AGAMA)
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),

                TextInput::make('anak_ke')
                    ->label('Anak Ke')
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->numeric(),

                TextInput::make('jumlah_saudara')
                    ->label('Dari (Jumlah Anak)')
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->numeric(),

                Select::make('tinggal_bersama')
                    ->label('Tinggal Bersama')
                    ->options(FormOptions::TINGGAL_BERSAMA)
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),

                Select::make('jarak_ke_sekolah')
                    ->label('Jarak Ke Sekolah')
                    ->options(FormOptions::JARAK_KE_SEKOLAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),

                Select::make('disabilitas')
                    ->label('Disabilitas')
                    ->options(FormOptions::DISABILITAS)
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),

                TextInput::make('tinggi_badan')
                    ->label('Tinggi Badan')
                    ->suffix('cm')
                    ->numeric(),

                TextInput::make('berat_badan')
                    ->label('Berat Badan')
                    ->suffix('kg')
                    ->numeric(),

                TextInput::make('no_kip')
                    ->label('Nomor Kartu Indonesia Pintar')
                    ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki KIP.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->maxLength(6)
                    ->minLength(6)
                    ->live()
                    ->validationMessages([
                        'max' => 'KIP: Masukkan maksimal 6 Karakter.',
                        'min' => 'KIP: Masukkan minimal 6 Karakter.',
                        'unique' => 'KIP: Nomor ini sudah pernah di isi.',
                    ]),

                TextInput::make('no_kks')
                    ->label('Nomor Kartu Keluarga Sejahtera')
                    ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki KKS.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->maxLength(6)
                    ->minLength(6)
                    ->live()
                    ->validationMessages([
                        'max' => 'KKS: Masukkan maksimal 6 Karakter.',
                        'min' => 'KKS: Masukkan minimal 6 Karakter.',
                        'unique' => 'KKS: Nomor ini sudah pernah di isi.',
                    ]),

                TextInput::make('no_pkh')
                    ->label('Nomor Kartu Program Keluarga Harapan')
                    ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki PKH.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->maxLength(6)
                    ->minLength(6)
                    ->live()
                    ->validationMessages([
                        'max' => 'PKH: Masukkan maksimal 6 Karakter.',
                        'min' => 'PKH: Masukkan minimal 6 Karakter.',
                        'unique' => 'PKH: Nomor ini sudah pernah di isi.',
                    ]),

                TextInput::make('siswa_telepon')
                    ->label('Nomor Telepon')
                    ->numeric()
                    ->tel(),

                $this->getSekolahAsalField(),
            ]);
    }

    protected function getSekolahAsalField(): Select
    {
        return Select::make('sekolah_asal_id')
            ->label('Sekolah Asal')
            ->relationship('sekolahAsal', 'nama')
            ->required()
            ->validationMessages(['required' => 'Form ini wajib diisi.'])
            ->native(false)
            ->searchable()
            ->preload()
            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
            ->createOptionForm($this->getSekolahAsalForm());
    }

    protected function getSekolahAsalForm(): array
    {
        return [
            Wizard::make([
                Wizard\Step::make('Data Instansi')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Instansi')
                            ->prefixIcon('heroicon-o-building-library')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->columnSpanFull(),

                        Select::make('jenjang')
                            ->label('Jenjang')
                            ->native(false)
                            ->required()
                            ->live()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->options(fn () => FormOptions::jenjangSekolahAsal(Sekolah::first()?->jenjang)),

                        TextInput::make('npsn')
                            ->label('NPSN')
                            ->numeric()
                            ->minLength(8)
                            ->maxLength(8)
                            ->required()
                            ->validationMessages([
                                'min_digits' => 'NPSN harus 8 digit.',
                                'max_digits' => 'NPSN harus 8 digit.',
                                'required' => 'Form ini wajib diisi.',
                            ]),

                        TextInput::make('nss')
                            ->visible(fn ($get) => in_array($get('jenjang'), ['MI', 'MTS', 'MA']))
                            ->label('NSS/NSM')
                            ->required()
                            ->numeric()
                            ->minLength(12)
                            ->maxLength(12)
                            ->validationMessages([
                                'min_digits' => 'NSS/NSM harus 12 digit.',
                                'max_digits' => 'NSS/NSM harus 12 digit.',
                                'required' => 'Form ini wajib diisi.',
                            ]),

                        Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->options(FormOptions::AKREDITASI),

                        Select::make('status')
                            ->label('Status')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->options(FormOptions::STATUS_SEKOLAH),

                        FileUpload::make('logo')
                            ->label('Logo Instansi')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                            ->fetchFileInformation(false)
                            ->directory('assets/instansi-lain')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                Wizard\Step::make('Data Alamat')
                    ->schema($this->getWilayahFields(''))
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                Wizard\Step::make('Data Kontak')
                    ->schema([
                        TextInput::make('website')
                            ->label('Website')
                            ->url()
                            ->prefixIcon('heroicon-m-globe-alt')
                            ->placeholder('https://mtsn1pandeglang.sch.id'),

                        TextInput::make('telepon')
                            ->label('Telepon')
                            ->tel()
                            ->placeholder('08**********')
                            ->prefixIcon('heroicon-m-phone'),

                        TextInput::make('email')
                            ->label('Email')
                            ->placeholder('adm@mtsn1pandeglang.sch.id')
                            ->email()
                            ->prefixIcon('heroicon-m-envelope'),
                    ])
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
            ]),
        ];
    }

    // ========================================================================
    // SECTION SCHEMAS
    // ========================================================================

    protected function getStatusFormulirSection(): Section
    {
        return Section::make('Status Formulir')
            ->icon('heroicon-m-document-check')
            ->visible(Auth::user()->roles->first()->name !== 'calon_siswa')
            ->columns(['sm' => '100%', 'md' => 1, 'lg' => 1])
            ->schema([
                Select::make('status_formulir')
                    ->label('Status Formulir')
                    ->options(FormOptions::STATUS_FORMULIR)
                    ->native(false)
                    ->default('Diproses')
                    ->required(),
            ]);
    }

    protected function getStatusPendaftaranSection(): Section
    {
        return Section::make('Status Pendaftaran')
            ->icon('heroicon-m-clipboard-document-list')
            ->visible(Auth::user()->roles->first()->name !== 'calon_siswa')
            ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2])
            ->schema([
                Select::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options(fn () => Auth::user()->hasRole('super_admin')
                        ? FormOptions::STATUS_PENDAFTARAN_SUPER_ADMIN
                        : FormOptions::STATUS_PENDAFTARAN_REGULAR)
                    ->native(false)
                    ->live()
                    ->default('Diproses')
                    ->required(),

                Select::make('kelas_id')
                    ->label('Kelas')
                    ->visible(fn ($get) => in_array($get('status_pendaftaran'), [
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan',
                    ]))
                    ->required(fn ($get) => in_array($get('status_pendaftaran'), [
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan',
                    ]))
                    ->relationship('kelas', 'nama')
                    ->native(false),
            ]);
    }

    protected function getDataTesStep(): Wizard\Step
    {
        return Wizard\Step::make('Data Tes')
            ->hidden(Auth::user()->hasRole('calon_siswa'))
            ->schema([
                Tabs::make('Data Kartu Tes')
                    ->tabs([
                        Tabs\Tab::make('Data Kartu Tes')
                            ->icon('heroicon-m-bell')
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                TextInput::make('tes_sesi')->label('Sesi Tes'),
                                TextInput::make('tes_ruang')->label('Ruang Tes'),
                                DateTimePicker::make('tes_akademik')->label('Tanggal Tes Akademik'),
                                DateTimePicker::make('tes_praktik')->label('Tanggal Tes Praktik'),
                            ]),
                    ])
                    ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),

                Tabs::make('Data Nilai Tes')
                    ->tabs([
                        Tabs\Tab::make('Data Nilai Tes')
                            ->icon('heroicon-m-bell')
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                TextInput::make('bobot_nilai_akademik')->label('Bobot Nilai Tes Akademik')->numeric(),
                                TextInput::make('bobot_nilai_praktik')->label('Bobot Nilai Tes Praktik')->numeric(),
                                TextInput::make('nilai_akademik')->label('Nilai Tes Akademik')->numeric(),
                                TextInput::make('nilai_praktik')->label('Nilai Tes Praktik')->numeric(),
                            ]),
                    ])
                    ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
            ])
            ->columns(['sm' => '100%', 'md' => '100%', 'lg' => 2])
            ->columnSpanFull();
    }

    // ========================================================================
    // HIGH-LEVEL WIZARD STEPS
    // ========================================================================

    protected function getAllSteps(bool $includeStatusSection = false, bool $includeDataTes = false): array
    {
        $isCalonSiswa = Auth::user()->hasRole('calon_siswa');

        $steps = [];

        // ----------------------------------------------------------------
        // Step 0 — Status (hanya untuk admin/non-calon_siswa)
        // ----------------------------------------------------------------
        if ($includeStatusSection && ! $isCalonSiswa) {
            $steps[] = Wizard\Step::make('Status')
                ->icon('heroicon-o-flag')
                ->description('Status formulir & pendaftaran')
                ->schema([
                    $this->getStatusFormulirSection(),
                    $this->getStatusPendaftaranSection(),
                ]);
        }

        // ----------------------------------------------------------------
        // Step 1 — Data Calon Siswa
        // ----------------------------------------------------------------
        $steps[] = Wizard\Step::make('Data Calon Siswa')
            ->icon('heroicon-o-user')
            ->description('Biodata, alamat & berkas')
            ->schema([
                Tabs::make('Biodata')
                    ->tabs([
                        $this->getDataCalonSiswaTab(),
                        $this->getAlamatTab('siswa'),
                        $this->getBerkasTab(),
                    ])
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
            ]);

        // ----------------------------------------------------------------
        // Step 2 — Data Orang Tua
        // ----------------------------------------------------------------
        $steps[] = Wizard\Step::make('Data Orang Tua')
            ->icon('heroicon-o-user-group')
            ->description('Data ibu, ayah & wali')
            ->schema([
                $this->getOrangTuaTabs('ibu', 'Ibu Kandung'),
                $this->getOrangTuaTabs('ayah', 'Ayah Kandung'),
                $this->getOrangTuaTabs('wali', 'Wali', false),
                $this->getKepemilikanRumahSection(),
            ])
            ->columnSpanFull();

        // ----------------------------------------------------------------
        // Step 3 — Data Tes (hanya admin)
        // ----------------------------------------------------------------
        if ($includeDataTes) {
            $steps[] = $this->getDataTesStep();
        }

        return $steps;
    }

    protected function getAlamatTab(string $prefix): Tabs\Tab
    {
        return Tabs\Tab::make('Alamat')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema($this->getWilayahFields($prefix));
    }

    protected function getBerkasTab(): Tabs\Tab
    {
        return Tabs\Tab::make('Berkas')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema([
                $this->getBerkasField('foto', 'Foto Latar Merah'),
                $this->getBerkasField('kk', 'Kartu Keluarga'),
                $this->getBerkasField('akta', 'Akta Kelahiran'),
                $this->getBerkasField('nisn', 'Kartu NISN/Tangkapan Layar NISN (Web)'),
                $this->getBerkasField('skbb', 'Surat Keterangan Berkelakuan Baik'),
                $this->getBerkasField('skab', 'Surat Keterangan Aktif Belajar'),

                $this->getBerkasField(
                    'kip',
                    'Kartu Indonesia Pintar',
                    fn ($get) => $get('no_kip') !== null,
                    '<small><i>Abaikan jika tidak memiliki KIP.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_kip') !== null),

                $this->getBerkasField(
                    'kks',
                    'Kartu Keluarga Sejahtera',
                    fn ($get) => $get('no_kks') !== null,
                    '<small><i>Abaikan jika tidak memiliki KKS.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_kks') !== null),

                $this->getBerkasField(
                    'pkh',
                    'Kartu Program Keluarga Harapan',
                    fn ($get) => $get('no_pkh') !== null,
                    '<small><i>Abaikan jika tidak memiliki PKH.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_pkh') !== null),
            ]);
    }

    protected function getOrangTuaTabs(string $type, string $label, bool $required = true): Tabs
    {
        return Tabs::make("Data {$label}")
            ->tabs([
                Tabs\Tab::make("Data {$label}")
                    ->icon('heroicon-m-bell')
                    ->iconPosition(IconPosition::After)
                    ->schema($this->getOrangTuaFields($type, $required)),

                Tabs\Tab::make('Alamat')
                    ->icon('heroicon-m-bell')
                    ->iconPosition(IconPosition::After)
                    ->schema($this->getWilayahFields($type, $required)),
            ])
            ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]);
    }

    protected function getKepemilikanRumahSection(): Section
    {
        return Section::make('Kepemilikan Rumah')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema([
                Select::make('kepemilikan_rumah')
                    ->label('Status Kepemilikan Rumah')
                    ->options(FormOptions::KEPEMILIKAN_RUMAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                    ->native(false),
            ]);
    }
}

```

---

## ⚙️ Providers

### 📄 `./app/Providers/AppServiceProvider.php`

```php
<?php

namespace App\Providers;

use App\Models\CalonSiswa;
use App\Observers\CalonSiswaObserver;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');
        Carbon::setLocale('id');
        CalonSiswa::observe(CalonSiswaObserver::class);
    }
}

```

---

### 📄 `./app/Providers/Filament/AdminPanelProvider.php`

```php
<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\EditProfileCustom;
use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\LoginCustom;
use App\Filament\Pages\Auth\RegisterCustom;
use App\Filament\Pages\Auth\VerifikasiOtp;
use App\Filament\Resources\CalonSiswaResource\Widgets\FormulirOverview;
use App\Filament\Resources\InformasiResource\Widgets\InformasiPublished;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Widgets\UserRegisters;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Devonab\FilamentEasyFooter\EasyFooterPlugin;
use DiogoGPinto\AuthUIEnhancer\AuthUIEnhancerPlugin;
use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('')
            ->default()
            ->spa()
            // ->topNavigation()
            ->login(LoginCustom::class)
            ->registration(RegisterCustom::class)
            ->passwordReset(ForgotPasswordCustom::class)
            ->emailVerification(VerifikasiOtp::class)
            ->profile(EditProfileCustom::class)
            ->globalSearch(false)
            ->maxContentWidth(MaxWidth::Full)
            ->unsavedChangesAlerts()
            // ->databaseNotifications()
            ->defaultThemeMode(ThemeMode::Dark)
            ->font('Lexend')
            ->favicon(asset('/favicon.ico'))
            ->darkModeBrandLogo(asset('/img/brand-darkmode.png'))
            ->brandLogo(asset('/img/brand-lightmode.png'))
            ->brandLogoHeight('2.6rem')
            ->colors([
                'primary' => Color::Emerald,
            ])
            ->userMenuItems([
                MenuItem::make()
                    ->label('Manajemen Pengguna')
                    ->url(fn(): string => UserResource::getUrl())
                    ->icon('heroicon-o-identification')
                    ->visible(fn() => Auth::user()?->roles?->where('name', 'super_admin')->first() !== null),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                FormulirOverview::class,
                InformasiPublished::class,
                UserRegisters::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->theme(asset('css/filament/admin/theme.css'))
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->plugins([
                FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3,
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 4,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),

                EasyFooterPlugin::make()
                    ->withFooterPosition('footer')
                    ->withLinks([
                        ['title' => 'Dibuat dan dikembangkan dengan ❤ oleh Yahya Zulfikri', 'url' => 'https://github.com/zulfikriyahya', 'open_in_new_tab' => true],
                    ])
                    ->withLoadTime('Halaman ini dimuat dalam')
                    ->withBorder(),

                AuthUIEnhancerPlugin::make()
                    ->formPanelPosition('left')
                    ->formPanelWidth('45%')
                    ->formPanelBackgroundColor(Color::hex('#010101'))
                    ->emptyPanelBackgroundImageUrl('img/wallpaper.png')
                    ->emptyPanelBackgroundColor(Color::hex('#010101'))
                    ->showEmptyPanelOnMobile(false),
            ]);
    }
}

```

---

## 🧱 App (Other)

### 📄 `./app/Jobs/SendWhatsAppJob.php`

```php
<?php

namespace App\Jobs;

use App\Services\WhatsAppService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWhatsAppJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $backoff = 60;

    public function __construct(
        public readonly string $phone,
        public readonly string $message,
    ) {}

    public function handle(WhatsAppService $wa): void
    {
        $wa->sendDirect($this->phone, $this->message);
    }

    public function tags(): array
    {
        return ['whatsapp', 'phone:'.$this->phone];
    }
}

```

---

### 📄 `./app/Observers/CalonSiswaObserver.php`

```php
<?php

namespace App\Observers;

use App\Models\CalonSiswa;
use App\Services\WhatsAppService;

class CalonSiswaObserver
{
    public function __construct(private WhatsAppService $wa) {}

    // -------------------------------------------------------------------------
    // Saat formulir pertama kali dibuat
    // -------------------------------------------------------------------------

    public function created(CalonSiswa $model): void
    {
        $this->kirim(
            $model,
            "✅ *Pendaftaran Berhasil*\n\n"
                ."Halo, *{$model->nama}*!\n"
                ."Formulir pendaftaran kamu telah kami terima.\n\n"
                ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                ."📄 Status Formulir : *{$model->status_formulir}*\n"
                ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n\n"
                ."Pantau status pendaftaran kamu secara berkala.\n"
                .'_MTsN 1 Pandeglang_'
        );
    }

    // -------------------------------------------------------------------------
    // Saat status_formulir atau status_pendaftaran berubah
    // -------------------------------------------------------------------------

    public function updated(CalonSiswa $model): void
    {
        $formulirBerubah = $model->wasChanged('status_formulir');
        $pendaftaranBerubah = $model->wasChanged('status_pendaftaran');

        if (! $formulirBerubah && ! $pendaftaranBerubah) {
            return;
        }

        $pesan = null;

        if ($pendaftaranBerubah) {
            $pesan = match ($model->status_pendaftaran) {
                'Diterima', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan' => "🎉 *Selamat, Kamu Diterima!*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Kamu dinyatakan *{$model->status_pendaftaran}* di MTsN 1 Pandeglang.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n\n"
                    ."Segera lakukan registrasi ulang.\n"
                    .'_MTsN 1 Pandeglang_',

                'Tidak Diterima' => "ℹ️ *Hasil Seleksi*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Mohon maaf, kamu dinyatakan *tidak diterima* pada seleksi ini.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n\n"
                    ."Tetap semangat!\n"
                    .'_MTsN 1 Pandeglang_',

                default => null,
            };
        }

        if (! $pesan && $formulirBerubah) {
            $pesan = match ($model->status_formulir) {
                'Berkas Tidak Lengkap' => "⚠️ *Berkas Tidak Lengkap*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Berkas pendaftaran kamu dinyatakan *tidak lengkap*.\n"
                    ."Segera lengkapi berkas melalui sistem PPDB.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

                'Disetujui' => "✅ *Formulir Disetujui*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Formulir pendaftaran kamu telah *disetujui* oleh panitia.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

                'Ditolak' => "❌ *Formulir Ditolak*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Formulir pendaftaran kamu *ditolak* oleh panitia.\n"
                    ."Silakan hubungi panitia untuk informasi lebih lanjut.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

                default => null,
            };
        }

        if ($pesan) {
            $this->kirim($model, $pesan);
        }
    }

    // -------------------------------------------------------------------------
    // Helper
    // -------------------------------------------------------------------------

    private function kirim(CalonSiswa $model, string $pesan): void
    {
        $telepon = $model->user?->telepon
            ?? $model->loadMissing('user')->user?->telepon;

        if (! $telepon) {
            return;
        }

        // Delay lebih panjang untuk notifikasi massal (bulk update)
        $this->wa->send($telepon, $pesan, minDelay: 5, maxDelay: 60);
    }
}

```

---

## 🏗️ Migrations

### 📄 `./database/migrations/0001_01_01_000000_create_users_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->index();
            $table->string('username', 13)->unique()->index();
            $table->string('telepon', 20)->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

```

---

### 📄 `./database/migrations/0001_01_01_000001_create_calon_siswas_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Relasi ke users via FK standar (user_id), bukan FK ke kolom non-PK
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete()->cascadeOnUpdate();
            $table->string('nomor_pendaftaran', 20)->nullable()->unique();
            $table->foreignId('tahun_pendaftaran_id')->nullable()->constrained('tahun_pendaftarans')->cascadeOnUpdate();
            $table->string('nama', 50);
            $table->string('nik')->unique();
            $table->string('kk');
            $table->string('nisn', 10)->unique();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('golongan_darah', ['A-', 'A+', 'B-', 'B+', 'AB-', 'AB+', 'O+', 'O-'])->nullable();
            $table->enum('agama', ['Islam', 'Kristen Katholik', 'Kristen Protestan', 'Hindu', 'Buddha', 'Konghucu']);
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->enum('tinggal_bersama', ['Orang Tua', 'Saudara', 'Panti Asuhan', 'Kost', 'Lainnya']);
            $table->enum('jarak_ke_sekolah', ['0 - 1 Km', '1 - 5 Km', '5 - 10 Km', '10 - 15 Km', '15 - 20 Km', '20 - 25 Km', '25 - 30 Km']);
            $table->enum('disabilitas', ['Non Disabilitas', 'Fisik', 'Penglihatan', 'Pendengaran', 'Kognitif', 'Mental', 'Lainnya']);
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->boolean('penerima_kip')->default(false);
            $table->string('no_kip')->unique()->nullable();
            $table->string('no_kks')->unique()->nullable();
            $table->string('no_pkh')->unique()->nullable();
            $table->string('siswa_telepon')->nullable();
            $table->string('siswa_alamat');
            $table->foreignId('siswa_negara_id')->constrained('negaras')->cascadeOnUpdate();
            $table->foreignId('siswa_provinsi_id')->constrained('provinsis')->cascadeOnUpdate();
            $table->foreignId('siswa_kabupaten_id')->constrained('kabupatens')->cascadeOnUpdate();
            $table->foreignId('siswa_kecamatan_id')->constrained('kecamatans')->cascadeOnUpdate();
            $table->foreignId('siswa_kelurahan_id')->constrained('kelurahans')->cascadeOnUpdate();
            $table->string('berkas_foto');
            $table->string('berkas_kk');
            $table->string('berkas_akta')->nullable();
            $table->string('berkas_kip')->nullable();
            $table->string('berkas_kks')->nullable();
            $table->string('berkas_pkh')->nullable();
            $table->string('berkas_nisn')->nullable();
            $table->string('berkas_skbb')->nullable();
            $table->string('berkas_skab')->nullable();
            $table->string('berkas_prestasi')->nullable();

            // Data Ibu
            $table->string('ibu_nama');
            $table->string('ibu_nik');
            $table->string('ibu_telepon')->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->string('ibu_penghasilan')->nullable();
            $table->string('ibu_pendidikan')->nullable();
            $table->enum('ibu_status', ['Hidup', 'Meninggal']);
            $table->string('ibu_alamat')->nullable();
            $table->foreignId('ibu_negara_id')->nullable()->constrained('negaras')->cascadeOnUpdate();
            $table->foreignId('ibu_provinsi_id')->nullable()->constrained('provinsis')->cascadeOnUpdate();
            $table->foreignId('ibu_kabupaten_id')->nullable()->constrained('kabupatens')->cascadeOnUpdate();
            $table->foreignId('ibu_kecamatan_id')->nullable()->constrained('kecamatans')->cascadeOnUpdate();
            $table->foreignId('ibu_kelurahan_id')->nullable()->constrained('kelurahans')->cascadeOnUpdate();

            // Data Ayah
            $table->string('ayah_nama');
            $table->string('ayah_nik');
            $table->string('ayah_telepon')->nullable();
            $table->string('ayah_pekerjaan')->nullable();
            $table->string('ayah_penghasilan')->nullable();
            $table->string('ayah_pendidikan')->nullable();
            $table->enum('ayah_status', ['Hidup', 'Meninggal']);
            $table->string('kepemilikan_rumah');
            $table->string('ayah_alamat')->nullable();
            $table->foreignId('ayah_negara_id')->nullable()->constrained('negaras')->cascadeOnUpdate();
            $table->foreignId('ayah_provinsi_id')->nullable()->constrained('provinsis')->cascadeOnUpdate();
            $table->foreignId('ayah_kabupaten_id')->nullable()->constrained('kabupatens')->cascadeOnUpdate();
            $table->foreignId('ayah_kecamatan_id')->nullable()->constrained('kecamatans')->cascadeOnUpdate();
            $table->foreignId('ayah_kelurahan_id')->nullable()->constrained('kelurahans')->cascadeOnUpdate();

            // Data Wali
            $table->string('wali_nama')->nullable();
            $table->string('wali_nik')->nullable();
            $table->string('wali_telepon')->nullable();
            $table->string('wali_pekerjaan')->nullable();
            $table->string('wali_penghasilan')->nullable();
            $table->string('wali_pendidikan')->nullable();
            $table->enum('wali_status', ['Hidup', 'Meninggal'])->nullable();
            $table->string('wali_alamat')->nullable();
            $table->foreignId('wali_negara_id')->nullable()->constrained('negaras')->cascadeOnUpdate();
            $table->foreignId('wali_provinsi_id')->nullable()->constrained('provinsis')->cascadeOnUpdate();
            $table->foreignId('wali_kabupaten_id')->nullable()->constrained('kabupatens')->cascadeOnUpdate();
            $table->foreignId('wali_kecamatan_id')->nullable()->constrained('kecamatans')->cascadeOnUpdate();
            $table->foreignId('wali_kelurahan_id')->nullable()->constrained('kelurahans')->cascadeOnUpdate();

            $table->foreignId('sekolah_asal_id')->nullable()->constrained()->cascadeOnUpdate();
            $table->foreignId('jalur_pendaftaran_id')->nullable()->constrained()->cascadeOnUpdate();
            $table->foreignId('prestasi_id')->nullable()->constrained('prestasis')->cascadeOnUpdate();
            $table->foreignId('ekstrakurikuler_id')->nullable()->constrained('ekstrakurikulers')->cascadeOnUpdate();
            $table->foreignId('mata_pelajaran_id')->nullable()->constrained('mata_pelajarans')->cascadeOnUpdate();

            $table->integer('bobot_nilai_akademik')->nullable();
            $table->integer('bobot_nilai_praktik')->nullable();
            $table->integer('nilai_akademik')->nullable();
            $table->integer('nilai_praktik')->nullable();
            $table->enum('status_pendaftaran', [
                'Diproses',
                'Tidak Diterima',
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan',
            ])->default('Diproses')->nullable();
            $table->enum('status_formulir', [
                'Diproses',
                'Berkas Tidak Lengkap',
                'Disetujui',
                'Ditolak',
            ])->default('Diproses');

            $table->foreignId('kelas_id')->nullable()->constrained('kelas')->cascadeOnUpdate();
            $table->string('tes_sesi')->nullable();
            $table->string('tes_ruang')->nullable();
            $table->dateTime('tes_akademik')->nullable();
            $table->dateTime('tes_praktik')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('calon_siswas');
    }
};

```

---

### 📄 `./database/migrations/0001_01_01_000002_create_cache_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};

```

---

### 📄 `./database/migrations/0001_01_01_000003_create_jobs_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });
        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->integer('total_jobs');
            $table->integer('pending_jobs');
            $table->integer('failed_jobs');
            $table->longText('failed_job_ids');
            $table->mediumText('options')->nullable();
            $table->integer('cancelled_at')->nullable();
            $table->integer('created_at');
            $table->integer('finished_at')->nullable();
        });
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143839_create_tahun_pendaftarans_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('tahun_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->dateTime('tanggal_ppdb_mulai');
            $table->dateTime('tanggal_ppdb_selesai');
            $table->dateTime('tanggal_pendaftaran_jalur_prestasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_prestasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_prestasi_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_reguler_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_reguler_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_reguler_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_reguler_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_afirmasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_afirmasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_afirmasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_afirmasi_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_zonasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_zonasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_zonasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_zonasi_selesai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_mutasi_mulai')->nullable();
            $table->dateTime('tanggal_pendaftaran_jalur_mutasi_selesai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_mutasi_mulai')->nullable();
            $table->dateTime('tanggal_pengumuman_jalur_mutasi_selesai')->nullable();
            $table->dateTime('tanggal_penerbitan_kartu_tes_mulai')->nullable();
            $table->dateTime('tanggal_penerbitan_kartu_tes_selesai')->nullable();
            $table->dateTime('tanggal_tes_akademik_mulai')->nullable();
            $table->dateTime('tanggal_tes_akademik_selesai')->nullable();
            $table->dateTime('tanggal_tes_praktik_mulai')->nullable();
            $table->dateTime('tanggal_tes_praktik_selesai')->nullable();
            $table->dateTime('tanggal_registrasi_berkas_mulai')->nullable();
            $table->dateTime('tanggal_registrasi_berkas_selesai')->nullable();
            $table->integer('kuantitas');
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('tahun_pendaftarans');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143840_create_pimpinans_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pimpinans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('berkas_foto')->nullable();
            $table->string('berkas_tte')->nullable();
            $table->string('berkas_sk')->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pimpinans');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143841_create_ketuas_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ketuas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('berkas_foto')->nullable();
            $table->string('berkas_tte')->nullable();
            $table->string('berkas_sk')->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ketuas');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143842_create_sekretaris_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sekretaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('berkas_foto')->nullable();
            $table->string('berkas_tte')->nullable();
            $table->string('berkas_sk')->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sekretaris');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143843_create_bendaharas_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bendaharas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('berkas_foto')->nullable();
            $table->string('berkas_tte')->nullable();
            $table->string('berkas_sk')->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bendaharas');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143844_create_negaras_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('negaras', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bendera')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('negaras');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143845_create_provinsis_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('provinsis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('negara_id')->constrained('negaras')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('provinsis');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143846_create_kabupatens_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('kabupatens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('provinsi_id')->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('kabupatens');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143847_create_kecamatans_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('kecamatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kabupaten_id')->constrained('kabupatens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('kecamatans');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143848_create_kelurahans_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('kelurahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kecamatan_id')->constrained('kecamatans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('kelurahans');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143849_create_informasis_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('informasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi');
            $table->string('gambar')->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['Publish', 'Draft'])->default('Publish');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('informasis');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143850_create_sekolahs_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('npsn', 8)->nullable();
            $table->string('nss', 12)->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_institusi')->nullable();
            $table->enum('jenjang', ['PAUD', 'TK', 'SD', 'MI', 'SMP', 'MTS', 'SMA', 'SMK', 'MA'])->nullable();
            $table->enum('status', ['NEGERI', 'SWASTA'])->nullable();
            $table->enum('akreditasi', ['A', 'B', 'C', 'D'])->nullable();
            $table->string('alamat', 50)->nullable();
            $table->foreignId('negara_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provinsi_id')->nullable()->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kabupaten_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kecamatan_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kelurahan_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('pimpinan_id')->nullable()->constrained('pimpinans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('website', 50)->nullable();
            $table->string('telepon', 13)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('nomor_surat', 50)->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143851_create_sekolah_asals_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('sekolah_asals', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('npsn', 8)->nullable();
            $table->string('nss', 12)->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_institusi')->nullable();
            $table->enum('jenjang', ['PAUD', 'TK', 'SD', 'MI', 'SMP', 'MTS', 'SMA', 'SMK', 'MA'])->nullable();
            $table->enum('status', ['NEGERI', 'SWASTA'])->nullable();
            $table->enum('akreditasi', ['A', 'B', 'C', 'D'])->nullable();
            $table->string('alamat', 50)->nullable();
            $table->foreignId('negara_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('provinsi_id')->nullable()->constrained('provinsis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kabupaten_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kecamatan_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kelurahan_id')->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('website', 50)->nullable();
            $table->string('telepon', 13)->nullable();
            $table->string('email', 50)->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('sekolah_asals');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143853_create_prestasis_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Hafalan Al-Quran', 'Olimpiade/Kejuaraan']);
            $table->string('nama');
            $table->enum('tingkat', ['Nasional', 'Provinsi', 'Kabupaten/Kota'])->nullable();
            $table->enum('kategori', ['Regu/Kelompok', 'Individu'])->nullable();
            $table->enum('peringkat', ['1', '2', '3'])->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143854_create_jalur_pendaftarans_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('jalur_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->enum('nama', ['Prestasi', 'Reguler', 'Mutasi', 'Zonasi', 'Afirmasi']);
            $table->integer('kuantitas');
            $table->enum('status', ['Aktif', 'Nonaktif']);
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('jalur_pendaftarans');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143855_create_kelas_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('jurusan_id')->constrained('jurusans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};

```

---

### 📄 `./database/migrations/2025_03_07_143958_create_notifications_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->morphs('notifiable');
            $table->text('data');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};

```

---

### 📄 `./database/migrations/2025_03_10_000722_create_anggotas_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->foreignId('tahun_pendaftaran_id')->constrained('tahun_pendaftarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('berkas_foto')->nullable();
            $table->string('berkas_tte')->nullable();
            $table->string('berkas_sk')->nullable();
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};

```

---

### 📄 `./database/migrations/2025_03_11_203459_create_jurusans_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};

```

---

### 📄 `./database/migrations/2025_03_11_221601_create_ekstrakurikulers_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ekstrakurikulers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ekstrakurikulers');
    }
};

```

---

### 📄 `./database/migrations/2025_03_16_043544_create_imports_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->timestamp('completed_at')->nullable();
            $table->string('file_name');
            $table->string('file_path');
            $table->string('importer');
            $table->unsignedInteger('processed_rows')->default(0);
            $table->unsignedInteger('total_rows');
            $table->unsignedInteger('successful_rows')->default(0);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imports');
    }
};

```

---

### 📄 `./database/migrations/2025_03_16_043545_create_exports_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exports', function (Blueprint $table) {
            $table->id();
            $table->timestamp('completed_at')->nullable();
            $table->string('file_disk');
            $table->string('file_name')->nullable();
            $table->string('exporter');
            $table->unsignedInteger('processed_rows')->default(0);
            $table->unsignedInteger('total_rows');
            $table->unsignedInteger('successful_rows')->default(0);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exports');
    }
};

```

---

### 📄 `./database/migrations/2025_03_16_043546_create_failed_import_rows_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('failed_import_rows', function (Blueprint $table) {
            $table->id();
            $table->json('data');
            $table->foreignId('import_id')->constrained()->cascadeOnDelete();
            $table->text('validation_error')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('failed_import_rows');
    }
};

```

---

### 📄 `./database/migrations/2025_03_17_054959_create_mata_pelajarans_table.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mata_pelajarans');
    }
};

```

---

### 📄 `./database/migrations/2025_03_17_192122_create_permission_tables.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $teams = config('permission.teams');
        $tableNames = config('permission.table_names');
        $columnNames = config('permission.column_names');
        $pivotRole = $columnNames['role_pivot_key'] ?? 'role_id';
        $pivotPermission = $columnNames['permission_pivot_key'] ?? 'permission_id';

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }
        if ($teams && empty($columnNames['team_foreign_key'] ?? null)) {
            throw new \Exception('Error: team_foreign_key on config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        Schema::create($tableNames['permissions'], static function (Blueprint $table) {
            // $table->engine('InnoDB');
            $table->bigIncrements('id'); // permission id
            $table->string('name');       // For MyISAM use string('name', 225); // (or 166 for InnoDB with Redundant/Compact row format)
            $table->string('guard_name'); // For MyISAM use string('guard_name', 25);
            $table->timestamps();

            $table->unique(['name', 'guard_name']);
        });

        Schema::create($tableNames['roles'], static function (Blueprint $table) use ($teams, $columnNames) {
            // $table->engine('InnoDB');
            $table->bigIncrements('id'); // role id
            if ($teams || config('permission.testing')) { // permission.testing is a fix for sqlite testing
                $table->unsignedBigInteger($columnNames['team_foreign_key'])->nullable();
                $table->index($columnNames['team_foreign_key'], 'roles_team_foreign_key_index');
            }
            $table->string('name');       // For MyISAM use string('name', 225); // (or 166 for InnoDB with Redundant/Compact row format)
            $table->string('guard_name'); // For MyISAM use string('guard_name', 25);
            $table->timestamps();
            if ($teams || config('permission.testing')) {
                $table->unique([$columnNames['team_foreign_key'], 'name', 'guard_name']);
            } else {
                $table->unique(['name', 'guard_name']);
            }
        });

        Schema::create($tableNames['model_has_permissions'], static function (Blueprint $table) use ($tableNames, $columnNames, $pivotPermission, $teams) {
            $table->unsignedBigInteger($pivotPermission);

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_permissions_model_id_model_type_index');

            $table->foreign($pivotPermission)
                ->references('id') // permission id
                ->on($tableNames['permissions'])
                ->onDelete('cascade');
            if ($teams) {
                $table->unsignedBigInteger($columnNames['team_foreign_key']);
                $table->index($columnNames['team_foreign_key'], 'model_has_permissions_team_foreign_key_index');

                $table->primary(
                    [$columnNames['team_foreign_key'], $pivotPermission, $columnNames['model_morph_key'], 'model_type'],
                    'model_has_permissions_permission_model_type_primary'
                );
            } else {
                $table->primary(
                    [$pivotPermission, $columnNames['model_morph_key'], 'model_type'],
                    'model_has_permissions_permission_model_type_primary'
                );
            }
        });

        Schema::create($tableNames['model_has_roles'], static function (Blueprint $table) use ($tableNames, $columnNames, $pivotRole, $teams) {
            $table->unsignedBigInteger($pivotRole);

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_roles_model_id_model_type_index');

            $table->foreign($pivotRole)
                ->references('id') // role id
                ->on($tableNames['roles'])
                ->onDelete('cascade');
            if ($teams) {
                $table->unsignedBigInteger($columnNames['team_foreign_key']);
                $table->index($columnNames['team_foreign_key'], 'model_has_roles_team_foreign_key_index');

                $table->primary(
                    [$columnNames['team_foreign_key'], $pivotRole, $columnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary'
                );
            } else {
                $table->primary(
                    [$pivotRole, $columnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary'
                );
            }
        });

        Schema::create($tableNames['role_has_permissions'], static function (Blueprint $table) use ($tableNames, $pivotRole, $pivotPermission) {
            $table->unsignedBigInteger($pivotPermission);
            $table->unsignedBigInteger($pivotRole);

            $table->foreign($pivotPermission)
                ->references('id') // permission id
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign($pivotRole)
                ->references('id') // role id
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary([$pivotPermission, $pivotRole], 'role_has_permissions_permission_id_role_id_primary');
        });

        app('cache')
            ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));
    }

    public function down(): void
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new \Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
        }

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
};

```

---

### 📄 `./database/migrations/2026_03_05_060527_create_formulir_prestasis.php`

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('formulir_prestasis', function (Blueprint $table) {
            $table->id();

            // OPTIMASI: Menggunakan foreignUuid bawaan Laravel
            $table->foreignUuid('calon_siswa_id')
                ->constrained('calon_siswas')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('prestasi_id')
                ->constrained('prestasis')
                ->cascadeOnUpdate();

            $table->string('nama_prestasi');
            $table->year('tahun_prestasi');
            $table->string('penyelenggara_prestasi');
            $table->string('berkas_prestasi')->nullable();

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        Schema::dropIfExists('formulir_prestasis');
    }
};

```

---

## 🛣️ Routes

### 📄 `./routes/api.php`

```php
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

```

---

### 📄 `./routes/console.php`

```php
<?php

use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

```

---

### 📄 `./routes/web.php`

```php
<?php

use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\NewPassword;
use App\Filament\Pages\Auth\ResetPasswordOtp;
use App\Filament\Pages\Auth\VerifikasiOtp;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::middleware('web')->group(function () {
    Route::get('/verifikasi-otp', VerifikasiOtp::class)->name('otp.verifikasi');
    Route::get('/lupa-password', ForgotPasswordCustom::class)->name('otp.forgot-password');
    Route::get('/reset-password', ResetPasswordOtp::class)->name('otp.reset-password');
    Route::get('/new-password', NewPassword::class)->name('otp.new-password');
});

```

---

## 🖼️ Views

### 📄 `./resources/views/filament/pages/auth/forgot-password-custom.blade.php`

```blade
<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="kirim">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Kirim Kode OTP
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 text-sm text-center text-gray-600 dark:text-gray-400">
        Sudah ingat password?
        <a
            href="{{ filament()->getLoginUrl() }}"
            class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300"
        >
            Kembali ke Login
        </a>
    </div>
</x-filament-panels::page.simple>

```

---

### 📄 `./resources/views/filament/pages/auth/new-password.blade.php`

```blade
<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="simpanPassword">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Simpan Password Baru
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 text-sm text-center">
        <a
            href="{{ route('otp.forgot-password') }}"
            class="font-medium text-gray-500 transition duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200"
        >
            &larr; Kembali
        </a>
    </div>
</x-filament-panels::page.simple>

```

---

### 📄 `./resources/views/filament/pages/auth/reset-password-otp.blade.php`

```blade
<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="verifikasiOtp">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Verifikasi OTP
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 space-y-4 text-sm text-center text-gray-600 dark:text-gray-400">
        <div>
            Belum menerima kode OTP?
            <button
                wire:click="resend"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50 cursor-not-allowed"
                type="button"
                class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300"
            >
                Kirim ulang
            </button>
        </div>

        <div>
            <a
                href="{{ route('otp.forgot-password') }}"
                class="inline-block font-medium text-gray-500 transition duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200"
            >
                &larr; Kembali
            </a>
        </div>
    </div>
</x-filament-panels::page.simple>

```

---

### 📄 `./resources/views/filament/pages/auth/verifikasi-otp.blade.php`

```blade
<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="verifikasi">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Verifikasi
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 text-sm text-center text-gray-600 dark:text-gray-400">
        Belum menerima kode OTP?
        <button
            wire:click="resend"
            wire:loading.attr="disabled"
            wire:loading.class="opacity-50 cursor-not-allowed"
            type="button"
            class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300"
        >
            Kirim ulang
        </button>
    </div>
</x-filament-panels::page.simple>

```

---

### 📄 `./resources/views/formulir.blade.php`

```blade
{{-- @php
    use Illuminate\Support\Facades\Storage;

    $isJalurPrestasi = optional($record->jalurPendaftaran)->nama === 'Prestasi';
    $jenisKelamin    = $record->jenis_kelamin === 'Pria' ? 'Laki-laki' : 'Perempuan';
    $fotoUrl         = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload       = url('/admin/formulir/' . $record->id);
    $isDraft         = $record->status_formulir !== 'Disetujui';
    $kota            = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));

    $alamatSiswa = collect([
        $record->siswa_alamat, optional($record->siswaKelurahan)->nama,
        optional($record->siswaKecamatan)->nama, optional($record->siswaKabupaten)->nama,
        optional($record->siswaProvinsi)->nama,
    ])->filter()->implode(', ');

    $biodata = [
        ['No. Pendaftaran', $record->nomor_pendaftaran ?? '-'],
        ['Nama Lengkap', strtoupper($record->nama ?? '-')],
        ['Jalur Pendaftaran', strtoupper(optional($record->jalurPendaftaran)->nama ?? '-')],
        ['NISN / NIK', ($record->nisn ?? '-') . '  /  ' . ($record->nik ?? '-')],
        ['Tempat, Tgl Lahir', ucwords(strtolower($record->tempat_lahir ?? '')) . ', ' . ($record->tanggal_lahir ? date('d F Y', strtotime($record->tanggal_lahir)) : '-')],
        ['Jenis Kelamin', $jenisKelamin],
        ['Agama', ucwords(strtolower($record->agama ?? '-'))],
        ['Asal Sekolah', strtoupper(optional($record->sekolahAsal)->nama ?? '-')],
        ['No. Telepon', $record->siswa_telepon ?? '-'],
        ['Alamat Siswa', ucwords(strtolower($alamatSiswa))],
    ];

    if ($record->penerima_kip) {
        $biodata[] = ['KIP / KKS / PKH', ($record->no_kip ?? '-') . ' / ' . ($record->no_kks ?? '-') . ' / ' . ($record->no_pkh ?? '-')];
    }
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<style>
    @page { size: A4 portrait; margin: 15mm; }
    body { font-family: 'Helvetica', 'Arial', sans-serif; font-size: 9.5pt; color: #374151; line-height: 1.5; }
    table { border-collapse: collapse; width: 100%; }
    .title-doc { font-family: 'Georgia', serif; text-align: center; font-size: 14pt; font-weight: bold; color: #111827; letter-spacing: 1px; text-transform: uppercase; margin-top: 15px; }
    .subtitle-doc { text-align: center; font-size: 10pt; color: #6b7280; margin-bottom: 20px; letter-spacing: 0.5px; }
    .section-title { background-color: #f3f4f6; color: #111827; padding: 6px 10px; font-size: 9pt; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-left: 4px solid #059669; margin: 15px 0 8px 0; }
    .data-table td { padding: 6px 4px; border-bottom: 1px solid #f3f4f6; vertical-align: top; }
    .data-table tr:last-child td { border-bottom: none; }
    .data-table .lbl { width: 30%; color: #6b7280; font-size: 8.5pt; text-transform: uppercase; letter-spacing: 0.5px; }
    .data-table .cln { width: 3%; text-align: center; color: #9ca3af; }
    .data-table .val { font-weight: bold; color: #1f2937; }
    .photo-wrapper { width: 3.5cm; padding-left: 15px; vertical-align: top; }
    .photo-box { width: 3cm; height: 4cm; border: 2px solid #e5e7eb; border-radius: 4px; padding: 3px; text-align: center; background: #f9fafb; display: table-cell; vertical-align: middle; }
    .photo-box img { width: 100%; height: 100%; object-fit: cover; border-radius: 2px; }
    .photo-text { font-size: 8pt; color: #9ca3af; letter-spacing: 1px; }
    .watermark { position: absolute; top: 35%; left: 0; right: 0; text-align: center; font-size: 80pt; font-family: 'Georgia', serif; color: rgba(220, 38, 38, 0.05); transform: rotate(-30deg); z-index: -1000; letter-spacing: 5px; }
    .signature-area { margin-top: 30px; page-break-inside: avoid; }
    .sig-box { text-align: center; font-size: 9.5pt; color: #374151; vertical-align: bottom; }
    .sig-name { font-weight: bold; color: #111827; text-decoration: underline; margin-bottom: 2px; display: inline-block; }
</style>
</head>
<body>

@if ($isDraft) <div class="watermark">DRAFT DOCUMENT</div> @endif

@include('partials.pdf-header', ['instansi' => $instansi])

<div class="title-doc">Formulir Pendaftaran Calon Peserta Didik</div>
<div class="subtitle-doc">Tahun Pelajaran {{ $tahunPendaftaran?->nama ?? '' }}</div>

<div class="section-title">A. Identitas Calon Peserta Didik</div>
<table>
    <tr>
        <td style="vertical-align: top; padding: 0;">
            <table class="data-table">
                @foreach ($biodata as [$label, $value])
                <tr>
                    <td class="lbl">{{ $label }}</td><td class="cln">:</td><td class="val">{{ $value }}</td>
                </tr>
                @endforeach
            </table>
        </td>
        <td class="photo-wrapper">
            <div class="photo-box">
                @if ($fotoUrl) <img src="{{ $fotoUrl }}" alt="Foto">
                @else <span class="photo-text">FOTO<br>3x4</span> @endif
            </div>
        </td>
    </tr>
</table>

<div class="section-title">B. Data Orang Tua / Wali</div>
<table class="data-table">
    <tr>
        <td class="lbl" style="width: 25%;">Nama Ayah / Ibu</td><td class="cln">:</td>
        <td class="val">{{ strtoupper($record->ayah_nama ?? '-') }} &nbsp;|&nbsp; {{ strtoupper($record->ibu_nama ?? '-') }}</td>
    </tr>
    <tr>
        <td class="lbl">Pekerjaan</td><td class="cln">:</td>
        <td class="val">{{ $record->ayah_pekerjaan ?? '-' }} &nbsp;|&nbsp; {{ $record->ibu_pekerjaan ?? '-' }}</td>
    </tr>
    <tr>
        <td class="lbl">No. Telepon/WhatsApp</td><td class="cln">:</td>
        <td class="val">{{ $record->ayah_telepon ?? $record->ibu_telepon ?? '-' }}</td>
    </tr>
</table>

@if ($isJalurPrestasi)
<div class="section-title">C. Rekam Prestasi</div>
<table style="width: 100%; border-collapse: collapse; margin-top: 5px;">
    <thead>
        <tr style="background-color: #f9fafb; border-bottom: 2px solid #e5e7eb;">
            <th style="padding: 8px; text-align: left; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">No</th>
            <th style="padding: 8px; text-align: left; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">Nama Prestasi / Perlombaan</th>
            <th style="padding: 8px; text-align: center; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">Tingkat</th>
            <th style="padding: 8px; text-align: center; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">Peringkat</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($record->formulirPrestasis as $i => $fp)
        <tr style="border-bottom: 1px solid #f3f4f6;">
            <td style="padding: 8px; font-weight: bold;">{{ $i + 1 }}</td>
            <td style="padding: 8px; color: #111827;">{{ $fp->nama_prestasi }}</td>
            <td style="padding: 8px; text-align: center;">{{ optional($fp->prestasi)->tingkat ?? '-' }}</td>
            <td style="padding: 8px; text-align: center; font-weight: bold;">{{ optional($fp->prestasi)->peringkat ?? '-' }}</td>
        </tr>
        @empty
        <tr><td colspan="4" style="padding: 15px; text-align: center; font-style: italic; color: #9ca3af;">Tidak ada data prestasi yang dilampirkan.</td></tr>
        @endforelse
    </tbody>
</table>
@endif

<div class="signature-area">
    <table>
        <tr>
            <td style="width: 25%; vertical-align: bottom;">
                {!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}
                <div style="font-size: 7.5pt; color: #9ca3af; margin-top: 5px; letter-spacing: 0.5px;">SCAN TO VERIFY</div>
            </td>
            <td class="sig-box" style="width: 37.5%;">
                {{ $kota }}, {{ date('d F Y', strtotime($record->updated_at)) }}<br>
                <span style="color: #6b7280; font-size: 9pt;">Ketua Panitia PPDB,</span>
                <div style="height: 70px;">
                    @if ($ketua?->berkas_tte) <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:60px; margin-top:5px;"> @endif
                </div>
                <div class="sig-name">{{ $ketua?->nama ?? str_repeat('.', 35) }}</div><br>
                <span style="font-size: 8.5pt; color: #6b7280;">NIP. {{ $ketua?->nip ?? '-' }}</span>
            </td>
            <td class="sig-box" style="width: 37.5%;">
                <br>
                <span style="color: #6b7280; font-size: 9pt;">Sekretaris Panitia,</span>
                <div style="height: 70px;">
                    @if ($sekretaris?->berkas_tte) <img src="{{ Storage::url($sekretaris->berkas_tte) }}" style="height:60px; margin-top:5px;"> @endif
                </div>
                <div class="sig-name">{{ $sekretaris?->nama ?? str_repeat('.', 35) }}</div><br>
                <span style="font-size: 8.5pt; color: #6b7280;">NIP. {{ $sekretaris?->nip ?? '-' }}</span>
            </td>
        </tr>
    </table>
</div>

</body>
</html> --}}

```

---

### 📄 `./resources/views/kartu-tes.blade.php`

```blade
@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Storage;

    $fotoUrl      = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload    = url('/admin/formulir/' . $record->id);
    $tglAkademik  = $record->tes_akademik ? Carbon::parse($record->tes_akademik) : null;
    $tglPraktik   = $record->tes_praktik  ? Carbon::parse($record->tes_praktik)  : null;
    $kota         = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));
    $tglTtd       = $tahunPendaftaran?->tanggal_penerbitan_kartu_tes_mulai ? date('d F Y', strtotime($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)) : date('d F Y');
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<style>
    @page { size: A4 portrait; margin: 15mm; }
    body { font-family: 'Helvetica', sans-serif; font-size: 10pt; color: #1f2937; line-height: 1.4; }
    table { border-collapse: collapse; width: 100%; }
    .card-container { border: 2px solid #111827; border-radius: 8px; padding: 20px; position: relative; }
    .card-header { text-align: center; border-bottom: 2px dashed #d1d5db; padding-bottom: 15px; margin-bottom: 15px; }
    .card-title { font-family: 'Georgia', serif; font-size: 16pt; font-weight: bold; color: #111827; text-transform: uppercase; letter-spacing: 2px; }
    .card-subtitle { font-size: 10pt; color: #4b5563; margin-top: 5px; letter-spacing: 1px; }
    .info-lbl { font-size: 9pt; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
    .info-val { font-size: 11pt; font-weight: bold; color: #111827; margin-bottom: 12px; }
    .photo-box { width: 3.5cm; height: 4.5cm; border: 3px solid #e5e7eb; border-radius: 6px; padding: 3px; text-align: center; display: table-cell; vertical-align: middle; }
    .photo-box img { width: 100%; height: 100%; object-fit: cover; border-radius: 3px; }
    .schedule-box { border: 1px solid #d1d5db; border-radius: 6px; overflow: hidden; margin-top: 10px; }
    .schedule-header { background-color: #f3f4f6; padding: 8px; text-align: center; font-weight: bold; font-size: 9.5pt; letter-spacing: 1px; color: #374151; border-bottom: 1px solid #d1d5db; }
    .schedule-cell { padding: 10px; text-align: center; }
    .schedule-time { font-size: 12pt; font-weight: bold; color: #059669; }
    .schedule-date { font-size: 9pt; color: #4b5563; margin-top: 4px; }
    .cbt-alert { background-color: #eff6ff; border: 1px solid #bfdbfe; border-left: 4px solid #3b82f6; border-radius: 4px; padding: 12px 15px; margin-top: 20px; }
    .cbt-title { font-size: 9pt; font-weight: bold; color: #1e3a8a; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
    .cbt-creds { font-family: 'Courier New', Courier, monospace; font-size: 14pt; font-weight: bold; color: #1e40af; letter-spacing: 2px; }
    .card-footer { margin-top: 25px; border-top: 2px dashed #d1d5db; padding-top: 15px; }
</style>
</head>
<body>

@include('partials.pdf-header', ['instansi' => $instansi])

<div class="card-container">
    <div class="card-header">
        <div class="card-title">Kartu Ujian Peserta</div>
        <div class="card-subtitle">Penerimaan Peserta Didik Baru &mdash; {{ $tahunPendaftaran?->nama ?? '' }}</div>
    </div>

    <table>
        <tr>
            <td style="vertical-align: top; width: 70%;">
                <div class="info-lbl">Nomor Registrasi</div>
                <div class="info-val" style="font-size: 14pt; color: #059669;">{{ $record->nomor_pendaftaran ?? '-' }}</div>

                <div class="info-lbl">Nama Lengkap Peserta</div>
                <div class="info-val" style="font-size: 13pt;">{{ strtoupper($record->nama ?? '-') }}</div>

                <div class="info-lbl">Asal Sekolah</div>
                <div class="info-val">{{ strtoupper(optional($record->sekolahAsal)->nama ?? '-') }}</div>

                <div class="info-lbl">Jalur Pendaftaran</div>
                <div class="info-val">{{ strtoupper(optional($record->jalurPendaftaran)->nama ?? '-') }}</div>
            </td>
            <td style="vertical-align: top; text-align: right; width: 30%;">
                <div class="photo-box" style="float: right;">
                    @if ($fotoUrl) <img src="{{ $fotoUrl }}" alt="Foto">
                    @else <span style="font-size: 9pt; color: #9ca3af;">PAS FOTO</span> @endif
                </div>
            </td>
        </tr>
    </table>

    <table class="schedule-box">
        <tr>
            <td style="width: 50%; border-right: 1px solid #d1d5db; padding: 0;">
                <div class="schedule-header">UJIAN AKADEMIK (CBT)</div>
                <div class="schedule-cell">
                    <div class="info-lbl">Ruang / Sesi</div>
                    <div style="font-weight: bold; font-size: 11pt; color: #111827; margin-bottom: 8px;">{{ $record->tes_ruang ?? '-' }} / Sesi {{ $record->tes_sesi ?? '-' }}</div>
                    <div class="schedule-time">{{ $tglAkademik ? $tglAkademik->format('H:i') . ' WIB' : '-' }}</div>
                    <div class="schedule-date">{{ $tglAkademik ? $tglAkademik->translatedFormat('l, d F Y') : '-' }}</div>
                </div>
            </td>
            <td style="width: 50%; padding: 0;">
                <div class="schedule-header">UJIAN PRAKTIK IBADAH</div>
                <div class="schedule-cell">
                    <div class="info-lbl">Ruang / Sesi</div>
                    <div style="font-weight: bold; font-size: 11pt; color: #111827; margin-bottom: 8px;">{{ $record->tes_ruang ?? '-' }} / Sesi {{ $record->tes_sesi ?? '-' }}</div>
                    <div class="schedule-time">{{ $tglPraktik ? $tglPraktik->format('H:i') . ' WIB' : '-' }}</div>
                    <div class="schedule-date">{{ $tglPraktik ? $tglPraktik->translatedFormat('l, d F Y') : '-' }}</div>
                </div>
            </td>
        </tr>
    </table>

    <div class="cbt-alert">
        <div class="cbt-title">Kredensial Login Aplikasi Ujian (CBT)</div>
        <table>
            <tr>
                <td style="width: 120px; color: #3b82f6; font-size: 10pt;">Username</td>
                <td class="cbt-creds">{{ $record->nisn ?? '-' }}</td>
            </tr>
            <tr>
                <td style="color: #3b82f6; font-size: 10pt;">Password</td>
                <td class="cbt-creds">{{ $record->nik ?? '-' }}</td>
            </tr>
        </table>
    </div>

    <div class="card-footer">
        <table>
            <tr>
                <td style="width: 25%; vertical-align: middle;">
                    {!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}
                </td>
                <td style="width: 75%; text-align: right; vertical-align: bottom;">
                    <span style="font-size: 9pt; color: #6b7280;">{{ $kota }}, {{ $tglTtd }}</span><br>
                    <span style="font-size: 9.5pt; font-weight: bold; color: #111827;">Panitia Penerimaan Peserta Didik Baru</span>
                    <div style="height: 60px; margin-top: 5px;">
                        @if ($ketua?->berkas_tte) <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:55px;"> @endif
                    </div>
                    <span style="font-size: 9.5pt; font-weight: bold; text-decoration: underline;">{{ $ketua?->nama ?? '............................................' }}</span><br>
                    <span style="font-size: 8.5pt; color: #6b7280;">Ketua Pelaksana</span>
                </td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>

```

---

### 📄 `./resources/views/landing.blade.php`

```blade
@php
    use Carbon\Carbon;

    $now = Carbon::now();

    $jadwals = [];
    if ($tahun) {
        $map = [
            ['🏆', 'Jalur Prestasi',       'tanggal_pendaftaran_jalur_prestasi_mulai',  'tanggal_pendaftaran_jalur_prestasi_selesai'],
            ['📚', 'Jalur Reguler',         'tanggal_pendaftaran_jalur_reguler_mulai',   'tanggal_pendaftaran_jalur_reguler_selesai'],
            ['🤝', 'Jalur Afirmasi',        'tanggal_pendaftaran_jalur_afirmasi_mulai',  'tanggal_pendaftaran_jalur_afirmasi_selesai'],
            ['🏘️', 'Jalur Zonasi',          'tanggal_pendaftaran_jalur_zonasi_mulai',    'tanggal_pendaftaran_jalur_zonasi_selesai'],
            ['🔄', 'Jalur Mutasi',          'tanggal_pendaftaran_jalur_mutasi_mulai',    'tanggal_pendaftaran_jalur_mutasi_selesai'],
            ['📝', 'Tes Seleksi (CBT)',     'tanggal_tes_akademik_mulai',               'tanggal_tes_akademik_selesai'],
            ['📢', 'Pengumuman Reguler',    'tanggal_pengumuman_jalur_reguler_mulai',    'tanggal_pengumuman_jalur_reguler_selesai'],
            ['✅', 'Registrasi Berkas',     'tanggal_registrasi_berkas_mulai',           'tanggal_registrasi_berkas_selesai'],
        ];
        foreach ($map as [$icon, $label, $mk, $sk]) {
            if ($tahun->$mk) {
                $jadwals[] = ['icon' => $icon, 'label' => $label, 'mulai' => $tahun->$mk, 'selesai' => $tahun->$sk];
            }
        }
    }

    $jalurMeta = [
        'Prestasi' => ['icon' => '🏆', 'color' => '#d4a843', 'bg' => 'rgba(212,168,67,.12)', 'border' => 'rgba(212,168,67,.3)'],
        'Reguler'  => ['icon' => '📚', 'color' => '#10b981', 'bg' => 'rgba(16,185,129,.12)',  'border' => 'rgba(16,185,129,.3)'],
        'Afirmasi' => ['icon' => '🤝', 'color' => '#60a5fa', 'bg' => 'rgba(96,165,250,.12)',  'border' => 'rgba(96,165,250,.3)'],
        'Zonasi'   => ['icon' => '🏘️', 'color' => '#a78bfa', 'bg' => 'rgba(167,139,250,.12)', 'border' => 'rgba(167,139,250,.3)'],
        'Mutasi'   => ['icon' => '🔄', 'color' => '#fb923c', 'bg' => 'rgba(251,146,60,.12)',  'border' => 'rgba(251,146,60,.3)'],
    ];

    $jalurDesc = [
        'Prestasi' => 'Untuk siswa berprestasi akademik/non-akademik di tingkat kabupaten, provinsi, atau nasional.',
        'Reguler'  => 'Seleksi berbasis tes CBT dan ujian praktik. Terbuka untuk semua calon peserta didik.',
        'Afirmasi' => 'Untuk keluarga pemegang KIP, PKH, atau KKS. Bukti kartu bantuan wajib dilampirkan.',
        'Zonasi'   => 'Diprioritaskan bagi yang berdomisili terdekat dengan madrasah berdasarkan Kartu Keluarga.',
        'Mutasi'   => 'Untuk calon peserta yang pindah domisili karena orang tua dipindahtugaskan secara resmi.',
    ];

    $closestDeadline = null;
    foreach ($jadwals as $j) {
        if ($j['selesai'] && Carbon::parse($j['selesai'])->isFuture()) {
            $closestDeadline = $j['selesai'];
            break;
        }
    }
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PPDB MTsN 1 Pandeglang {{ $tahun?->nama ?? '' }} — Pendaftaran online peserta didik baru.">
    <title>PPDB MTsN 1 Pandeglang{{ $tahun ? ' — ' . $tahun->nama : '' }}</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; font-size: 16px; }

        :root {
            --green:   #059669;
            --green-l: #10b981;
            --gold:    #d4a843;
            --gold-l:  #f0c96a;

            --bg:       #0b0f0e;
            --surface:  #111a17;
            --card:     rgba(255,255,255,.04);
            --border:   rgba(255,255,255,.08);
            --text:     #e8f1ee;
            --muted:    #7a9e92;
            --radius:   16px;
        }
        html.light {
            --bg:      #f4f7f5;
            --surface: #ffffff;
            --card:    rgba(255,255,255,.9);
            --border:  rgba(0,0,0,.08);
            --text:    #0d1f1a;
            --muted:   #5a7a6e;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            transition: background .3s, color .3s;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* ─── nav brand mobile truncation fix ─── */
        @media (max-width: 400px) {
            .nav-name { font-size: .78rem; }
            .nav-sub  { display: none; }
        }

        /* ─── scrollbar ─── */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--green); border-radius: 4px; }

        /* ─── ambient ─── */
        .orb {
            position: fixed; border-radius: 50%; filter: blur(110px);
            opacity: .12; pointer-events: none; z-index: 0;
        }
        html.light .orb { opacity: .06; }
        .orb-1 { width: 600px; height: 600px; background: var(--green); top: -200px; left: -200px; }
        .orb-2 { width: 400px; height: 400px; background: var(--gold);  bottom: 0;   right: -150px; }

        /* ─── layout helpers ─── */
        .wrap { max-width: 1180px; margin: 0 auto; padding: 0 1.5rem; }
        section { padding: 5rem 1.5rem; position: relative; z-index: 1; }
        .section-header { margin-bottom: 3rem; }
        .section-header.center { text-align: center; }
        .section-header.center .divider { margin: .5rem auto 0; }

        /* ─── type ─── */
        .eyebrow {
            display: inline-flex; align-items: center; gap: .4rem;
            padding: .28rem .85rem; border-radius: 999px;
            font-size: .72rem; font-weight: 700; letter-spacing: .08em; text-transform: uppercase;
            background: rgba(16,185,129,.1); color: var(--green-l);
            border: 1px solid rgba(16,185,129,.2); margin-bottom: .75rem;
        }
        .divider {
            width: 40px; height: 3px;
            background: linear-gradient(90deg, var(--green), var(--gold));
            border-radius: 999px; margin: .5rem 0 0;
        }
        h1, h2 { font-weight: 800; letter-spacing: -.03em; line-height: 1.1; }
        h1 { font-size: clamp(2.2rem, 5vw, 3.6rem); }
        h2 { font-size: clamp(1.7rem, 3.5vw, 2.5rem); margin-bottom: .75rem; }
        .grad {
            background: linear-gradient(135deg, var(--green-l), var(--gold));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .lead { font-size: 1.05rem; color: var(--muted); max-width: 540px; line-height: 1.75; }

        /* ─── glass card ─── */
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            backdrop-filter: blur(10px);
            transition: border-color .25s, transform .25s, box-shadow .25s;
        }
        html.light .card { box-shadow: 0 2px 16px rgba(0,0,0,.06); }
        .card-hover:hover {
            border-color: rgba(16,185,129,.3);
            transform: translateY(-3px);
            box-shadow: 0 8px 32px rgba(5,150,105,.12);
        }

        /* ─── buttons ─── */
        .btn {
            display: inline-flex; align-items: center; gap: .4rem;
            padding: .6rem 1.4rem; border-radius: 10px;
            font-size: .875rem; font-weight: 600; cursor: pointer;
            border: none; text-decoration: none; transition: all .2s;
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--green), #047857);
            color: #fff; box-shadow: 0 0 20px rgba(5,150,105,.25);
        }
        .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 4px 28px rgba(5,150,105,.4); }
        .btn-ghost {
            background: transparent; color: var(--muted);
            border: 1px solid var(--border);
        }
        .btn-ghost:hover { color: var(--green-l); border-color: rgba(16,185,129,.4); background: rgba(16,185,129,.06); }
        .btn-lg { padding: .8rem 2rem; font-size: 1rem; border-radius: 12px; }

        /* ─── badge ─── */
        .badge {
            display: inline-block; padding: .2rem .7rem; border-radius: 999px;
            font-size: .7rem; font-weight: 700; text-transform: uppercase; letter-spacing: .06em;
        }

        /* ═══════════════════════════════════════
           NAV
        ═══════════════════════════════════════ */
        nav {
            position: fixed; top: 0; left: 0; right: 0; z-index: 200;
            height: 60px; padding: 0 1.5rem;
            display: flex; align-items: center; justify-content: space-between;
            background: rgba(11,15,14,.85); border-bottom: 1px solid var(--border);
            backdrop-filter: blur(18px) saturate(160%);
            transition: background .3s, border-color .3s;
        }
        html.light nav { background: rgba(244,247,245,.92); }

        .nav-brand {
            display: flex; align-items: center; gap: .7rem;
            text-decoration: none; color: inherit; font-weight: 700; flex-shrink: 0;
        }
        .nav-logo {
            width: 34px; height: 34px; border-radius: 9px; flex-shrink: 0;
            background: linear-gradient(135deg, var(--green), var(--gold));
            display: flex; align-items: center; justify-content: center; font-size: 1.1rem;
        }
        .nav-name { font-size: .88rem; line-height: 1.25; }
        .nav-sub  { font-size: .68rem; font-weight: 400; color: var(--muted); }

        .nav-links { display: flex; gap: .1rem; list-style: none; }
        .nav-links a {
            text-decoration: none; color: var(--muted); font-size: .82rem;
            padding: .35rem .65rem; border-radius: 8px; transition: all .2s;
        }
        .nav-links a:hover, .nav-links a.active { color: var(--green-l); background: rgba(16,185,129,.08); }

        .nav-right { display: flex; align-items: center; gap: .6rem; flex-shrink: 0; }

        #themeBtn {
            width: 34px; height: 34px; border-radius: 8px;
            border: 1px solid var(--border); background: var(--card);
            cursor: pointer; display: flex; align-items: center; justify-content: center;
            font-size: 1rem; color: inherit; transition: all .2s;
        }
        #themeBtn:hover { transform: scale(1.1); }

        /* hamburger */
        #menuBtn {
            display: none; width: 34px; height: 34px; border-radius: 8px;
            border: 1px solid var(--border); background: var(--card);
            cursor: pointer; flex-direction: column; align-items: center; justify-content: center;
            gap: 4px; color: inherit;
        }
        #menuBtn span {
            display: block; width: 16px; height: 2px; background: currentColor;
            border-radius: 2px; transition: all .3s;
        }
        #menuBtn.open span:nth-child(1) { transform: translateY(6px) rotate(45deg); }
        #menuBtn.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        #menuBtn.open span:nth-child(3) { transform: translateY(-6px) rotate(-45deg); }

        /* drawer */
        .drawer {
            position: fixed; top: 56px; left: 0; right: 0; z-index: 190;
            flex-direction: column; padding: 0 1.25rem;
            background: #0b0f0e;
            border-bottom: 1px solid transparent;
            max-height: 0; overflow: hidden;
            transition: max-height .3s ease, padding .3s ease, border-color .3s;
            display: flex;
        }
        html.light .drawer { background: #f4f7f5; }
        .drawer.open {
            max-height: 420px;
            padding: 1rem 1.25rem 1.5rem;
            border-color: var(--border);
        }
        .drawer.open { opacity: 1; transform: translateY(0); }
        .drawer a {
            text-decoration: none; color: var(--muted); font-size: .9rem; font-weight: 500;
            padding: .6rem .9rem; border-radius: 10px; transition: all .2s;
        }
        .drawer a:hover { color: var(--green-l); background: rgba(16,185,129,.08); }
        .drawer hr { border: none; border-top: 1px solid var(--border); margin: .6rem 0; }

        /* ═══════════════════════════════════════
           HERO
        ═══════════════════════════════════════ */
        #hero {
            min-height: 100vh; padding-top: 60px;
            display: flex; align-items: center;
        }
        .hero-grid {
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 4rem; align-items: center; max-width: 1180px; margin: 0 auto; width: 100%;
        }
        .hero-eyebrow {
            display: inline-flex; align-items: center; gap: .45rem;
            padding: .35rem 1rem; border-radius: 999px; font-size: .75rem; font-weight: 600;
            background: rgba(212,168,67,.1); border: 1px solid rgba(212,168,67,.2);
            color: var(--gold-l); margin-bottom: 1.25rem;
        }
        .hero-cta { display: flex; gap: .85rem; flex-wrap: wrap; margin-top: 2rem; }
        .hero-stats {
            display: flex; gap: 2rem; flex-wrap: wrap;
            margin-top: 2.5rem; padding-top: 2rem; border-top: 1px solid var(--border);
        }
        .stat-val {
            font-size: 1.6rem; font-weight: 800;
            background: linear-gradient(135deg, var(--green-l), var(--gold));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .stat-lbl { font-size: .74rem; color: var(--muted); margin-top: .15rem; }

        /* hero card */
        .hero-card { padding: 1.75rem; border-radius: 22px; max-width: 400px; width: 100%; }
        .cd-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: .65rem; margin-top: 1.25rem; }
        .cd-box {
            background: rgba(255,255,255,.05); border: 1px solid var(--border);
            border-radius: 12px; padding: .9rem .5rem; text-align: center;
        }
        html.light .cd-box { background: rgba(0,0,0,.04); }
        .cd-n {
            font-size: 1.75rem; font-weight: 900; font-variant-numeric: tabular-nums;
            background: linear-gradient(135deg, var(--green-l), var(--gold));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .cd-l { font-size: .6rem; color: var(--muted); text-transform: uppercase; letter-spacing: .1em; margin-top: .15rem; }

        .quota-row { display: flex; align-items: center; justify-content: space-between; font-size: .8rem; }
        .progress { width: 70px; height: 5px; background: rgba(255,255,255,.08); border-radius: 999px; overflow: hidden; }
        html.light .progress { background: rgba(0,0,0,.08); }
        .progress-fill { height: 100%; border-radius: 999px; }

        /* ═══════════════════════════════════════
           STATS ROW
        ═══════════════════════════════════════ */
        .stats-row {
            display: grid; grid-template-columns: repeat(4, 1fr);
            gap: 1px; background: var(--border);
            border: 1px solid var(--border); border-radius: var(--radius); overflow: hidden;
            margin: 0 auto; max-width: 1180px;
        }
        .stat-box {
            background: var(--surface); padding: 2rem 1.5rem; text-align: center;
        }
        .stat-box .val { font-size: 2rem; font-weight: 800; }
        .stat-box .lbl { font-size: .78rem; color: var(--muted); margin-top: .25rem; }

        /* ═══════════════════════════════════════
           JALUR
        ═══════════════════════════════════════ */
        .jalur-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(210px,1fr)); gap: 1rem; }
        .jalur-card { padding: 1.5rem; border-radius: var(--radius); position: relative; overflow: hidden; }
        .jalur-icon {
            width: 46px; height: 46px; border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem; margin-bottom: 1rem;
        }
        .jalur-name  { font-size: .95rem; font-weight: 700; margin-bottom: .4rem; }
        .jalur-desc  { font-size: .78rem; color: var(--muted); line-height: 1.6; }
        .jalur-quota { margin-top: 1rem; }
        .quota-label { display: flex; justify-content: space-between; font-size: .72rem; color: var(--muted); margin-bottom: .35rem; }

        /* ═══════════════════════════════════════
           TIMELINE + JADWAL
        ═══════════════════════════════════════ */
        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start; }

        .timeline { padding-left: 1.75rem; position: relative; }
        .timeline::before {
            content: ''; position: absolute; left: .35rem; top: 0; bottom: 0;
            width: 2px; background: linear-gradient(to bottom, var(--green), var(--gold), transparent);
        }
        .tl-item { position: relative; padding: 1rem 0 1rem 1.25rem; border-bottom: 1px solid var(--border); }
        .tl-item:last-child { border-bottom: none; }
        .tl-dot {
            position: absolute; left: -1.75rem; top: 1.2rem;
            width: 12px; height: 12px; border-radius: 50%;
            background: var(--green); border: 3px solid var(--bg); transition: background .2s;
        }
        html.light .tl-dot { border-color: var(--bg); }
        .tl-item:hover .tl-dot { background: var(--gold); }
        .tl-step  { font-size: .68rem; font-weight: 700; text-transform: uppercase; letter-spacing: .07em; color: var(--green-l); margin-bottom: .25rem; }
        .tl-title { font-size: .9rem; font-weight: 700; margin-bottom: .2rem; }
        .tl-desc  { font-size: .78rem; color: var(--muted); line-height: 1.6; }

        .sched-list { display: flex; flex-direction: column; }
        .sched-item {
            display: flex; align-items: center; gap: .85rem;
            padding: .85rem 0; border-bottom: 1px solid var(--border);
        }
        .sched-item:last-child { border-bottom: none; }
        .sched-ico {
            min-width: 38px; height: 38px; border-radius: 10px;
            display: flex; align-items: center; justify-content: center; font-size: 1rem;
            background: rgba(255,255,255,.04); border: 1px solid var(--border);
            flex-shrink: 0;
        }
        .sched-title { font-size: .82rem; font-weight: 700; }
        .sched-date  { font-size: .72rem; color: var(--muted); margin-top: .1rem; }
        .sched-badge { margin-left: auto; }

        /* ═══════════════════════════════════════
           PROGRAM
        ═══════════════════════════════════════ */
        .prog-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px,1fr)); gap: 1rem; }
        .prog-card { padding: 1.5rem; border-radius: var(--radius); text-align: center; }
        .prog-ico   { font-size: 2.2rem; display: block; margin-bottom: .6rem; }
        .prog-title { font-size: .88rem; font-weight: 700; margin-bottom: .35rem; }
        .prog-desc  { font-size: .76rem; color: var(--muted); line-height: 1.55; }

        /* ═══════════════════════════════════════
           SYARAT
        ═══════════════════════════════════════ */
        .req-grid { display: grid; grid-template-columns: 1fr 1fr; gap: .75rem; margin-top: 1.5rem; }
        .req-item { display: flex; align-items: flex-start; gap: .75rem; padding: 1rem; border-radius: 12px; }
        .req-num {
            min-width: 26px; height: 26px; border-radius: 7px; flex-shrink: 0;
            background: linear-gradient(135deg, var(--green), #047857);
            display: flex; align-items: center; justify-content: center;
            font-size: .7rem; font-weight: 800; color: #fff;
        }
        .req-text { font-size: .82rem; line-height: 1.6; }
        .req-text strong { display: block; margin-bottom: .15rem; }

        /* ═══════════════════════════════════════
           INFORMASI
        ═══════════════════════════════════════ */
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px,1fr)); gap: 1rem; }
        .info-card { padding: 1.5rem; border-radius: var(--radius); display: flex; flex-direction: column; }
        .info-tag  { font-size: .68rem; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; color: var(--green-l); margin-bottom: .6rem; }
        .info-title { font-size: .95rem; font-weight: 700; margin-bottom: .5rem; line-height: 1.4; flex: 1; }
        .info-excerpt { font-size: .78rem; color: var(--muted); line-height: 1.65; }
        .info-date  { font-size: .72rem; color: var(--muted); margin-top: .85rem; }

        /* ═══════════════════════════════════════
           FAQ
        ═══════════════════════════════════════ */
        .faq-wrap { max-width: 760px; margin: 2.5rem auto 0; }
        .faq-item  { border-radius: 12px; overflow: hidden; margin-bottom: .6rem; }
        .faq-btn {
            width: 100%; display: flex; align-items: center; justify-content: space-between; gap: 1rem;
            padding: 1.1rem 1.25rem; background: transparent; border: none;
            color: inherit; cursor: pointer; text-align: left; font-size: .88rem; font-weight: 600;
            transition: color .2s;
        }
        .faq-btn:hover { color: var(--green-l); }
        .faq-chevron {
            min-width: 20px; height: 20px; border-radius: 50%;
            background: rgba(16,185,129,.1); border: 1px solid rgba(16,185,129,.2);
            display: flex; align-items: center; justify-content: center;
            font-size: .65rem; color: var(--green-l); transition: transform .3s;
        }
        .faq-body { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
        .faq-body p {
            padding: 0 1.25rem 1.1rem; font-size: .83rem; color: var(--muted);
            line-height: 1.75; border-top: 1px solid var(--border);
        }

        /* ═══════════════════════════════════════
           CTA
        ═══════════════════════════════════════ */
        .cta-section { text-align: center; padding: 6rem 1.5rem; }
        .cta-inner { max-width: 600px; margin: 0 auto; }
        .cta-inner h2 { font-size: clamp(2rem, 4.5vw, 3rem); margin-bottom: 1rem; }
        .cta-inner .lead { margin: 0 auto 2rem; }
        .cta-btns { display: flex; gap: .85rem; justify-content: center; flex-wrap: wrap; }

        /* ═══════════════════════════════════════
           FOOTER
        ═══════════════════════════════════════ */
        footer {
            border-top: 1px solid var(--border); padding: 2.5rem 1.5rem;
            text-align: center; position: relative; z-index: 1;
        }
        .footer-logo { font-size: .95rem; font-weight: 800; margin-bottom: .3rem; }
        .footer-sub  { font-size: .78rem; color: var(--muted); }
        .footer-links { display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap; margin-top: 1.5rem; }
        .footer-links a { font-size: .78rem; color: var(--muted); text-decoration: none; transition: color .2s; }
        .footer-links a:hover { color: var(--green-l); }
        .footer-copy { font-size: .73rem; color: var(--muted); margin-top: 1.5rem; }
        .footer-copy a { color: var(--green-l); text-decoration: none; }

        /* ═══════════════════════════════════════
           RESPONSIVE
        ═══════════════════════════════════════ */
        @media (max-width: 960px) {
            .hero-grid    { grid-template-columns: 1fr; gap: 3rem; }
            .hero-visual  { display: none; }
            .stats-row    { grid-template-columns: repeat(2,1fr); }
            .two-col      { grid-template-columns: 1fr; gap: 3rem; }
        }

        @media (max-width: 768px) {
            section { padding: 3.5rem 1.25rem; }
            nav { padding: 0 1rem; height: 56px; }
            #hero { padding-top: 56px; min-height: calc(100svh - 56px); padding-bottom: 3rem; align-items: flex-start; }
            .nav-links { display: none; }
            .req-grid  { grid-template-columns: 1fr; }
            .prog-grid { grid-template-columns: repeat(2,1fr); }
            #loginBtnNav, #registerBtnNav { display: none !important; }
            .hero-grid { padding: 2.5rem 0 0; }
            h1 { font-size: clamp(1.85rem, 7vw, 2.5rem); }
            .lead { font-size: .92rem; }
            .hero-cta { flex-direction: column; gap: .65rem; margin-top: 1.5rem; }
            .hero-cta .btn { width: 100%; justify-content: center; padding: .85rem 1.5rem; font-size: .95rem; }
            .hero-stats { gap: 0; margin-top: 2rem; padding-top: 1.5rem; display: grid; grid-template-columns: repeat(2,1fr); row-gap: 1.25rem; }
            .stat-val { font-size: 1.4rem; }
        }

        @media (max-width: 480px) {
            h2 { font-size: 1.5rem; }
            .stats-row { grid-template-columns: repeat(2,1fr); }
            .cta-btns { flex-direction: column; align-items: stretch; }
            .cta-btns .btn { width: 100%; justify-content: center; }
            .prog-grid { grid-template-columns: 1fr 1fr; }
            .jalur-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>

{{-- ═══ NAV ═══ --}}
<nav>
    <a href="{{ route('landing') }}" class="nav-brand">
        <div class="nav-logo">🕌</div>
        <div>
            <div class="nav-name">MTsN 1 Pandeglang</div>
            <div class="nav-sub">PPDB {{ $tahun?->nama ?? '' }}</div>
        </div>
    </a>

    <ul class="nav-links">
        <li><a href="#jalur">Jalur</a></li>
        <li><a href="#alur">Alur</a></li>
        <li><a href="#syarat">Syarat</a></li>
        <li><a href="#program">Program</a></li>
        <li><a href="#informasi">Informasi</a></li>
        <li><a href="#faq">FAQ</a></li>
    </ul>

    <div class="nav-right">
        <button id="themeBtn" title="Ganti tema">🌙</button>
        <button id="menuBtn" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
        <a href="{{ url('/login') }}"  class="btn btn-ghost"   style="display:none;" id="loginBtnNav">Masuk</a>
        <a href="{{ url('/register') }}" class="btn btn-primary" id="registerBtnNav">📝 Daftar</a>
    </div>
</nav>

<nav class="drawer" id="drawer">
    <a href="#jalur"     class="d-link">🗂️ Jalur Pendaftaran</a>
    <a href="#alur"      class="d-link">🗺️ Alur Daftar</a>
    <a href="#syarat"    class="d-link">📄 Persyaratan</a>
    <a href="#program"   class="d-link">🎓 Program Unggulan</a>
    <a href="#informasi" class="d-link">📰 Informasi</a>
    <a href="#faq"       class="d-link">❓ FAQ</a>
    <hr>
    <a href="{{ url('/login') }}"    class="d-link">🔐 Masuk Akun</a>
    <a href="{{ url('/register') }}" class="d-link" style="color:var(--green-l);font-weight:700;">📝 Daftar Sekarang</a>
</nav>

<main>

{{-- ═══ HERO ═══ --}}
<section id="hero">
    <div class="hero-grid wrap">
        {{-- left --}}
        <div>
            <div class="hero-eyebrow">✨ Penerimaan Peserta Didik Baru {{ $tahun?->nama ?? '' }}</div>
            <h1>Raih Masa Depan<br><span class="grad">Bersama Kami</span></h1>
            <p class="lead" style="margin-top:1rem;">
                MTsN 1 Pandeglang — Madrasah unggulan dengan kurikulum terpadu antara ilmu umum dan ilmu agama. Tempat terbaik untuk generasi penerus bangsa yang berakhlak mulia dan berprestasi.
            </p>
            <div class="hero-cta">
                <a href="{{ url('/register') }}" class="btn btn-primary btn-lg">📝 Daftar Sekarang</a>
                <a href="#alur"                  class="btn btn-ghost btn-lg">Lihat Alur →</a>
            </div>
            <div class="hero-stats">
                <div><div class="stat-val">1.200+</div><div class="stat-lbl">Siswa Aktif</div></div>
                <div><div class="stat-val">98%</div>   <div class="stat-lbl">Kelulusan</div></div>
                <div><div class="stat-val">50+</div>   <div class="stat-lbl">Prestasi Nasional</div></div>
                @if($tahun)
                <div><div class="stat-val">{{ $tahun->kuantitas }}</div><div class="stat-lbl">Kuota Total</div></div>
                @endif
            </div>
        </div>

        {{-- right card --}}
        <div class="hero-visual" style="display:flex;align-items:center;justify-content:center;">
            <div class="card hero-card">
                <div class="eyebrow" style="justify-content:center;display:flex;margin-bottom:.75rem;">
                    @if($closestDeadline) ⏳ Pendaftaran Ditutup Dalam @else 📋 Status PPDB @endif
                </div>

                @if($closestDeadline)
                <div class="cd-grid" id="countdown" data-deadline="{{ Carbon::parse($closestDeadline)->toIso8601String() }}">
                    <div class="cd-box"><div class="cd-n" id="cd-d">--</div><div class="cd-l">Hari</div></div>
                    <div class="cd-box"><div class="cd-n" id="cd-h">--</div><div class="cd-l">Jam</div></div>
                    <div class="cd-box"><div class="cd-n" id="cd-m">--</div><div class="cd-l">Menit</div></div>
                    <div class="cd-box"><div class="cd-n" id="cd-s">--</div><div class="cd-l">Detik</div></div>
                </div>
                @else
                <p style="text-align:center;padding:1.5rem 0;font-size:.85rem;color:var(--muted);">Tidak ada sesi pendaftaran aktif saat ini.</p>
                @endif

                @if($jalurs->isNotEmpty())
                <div style="margin-top:1.25rem;padding-top:1.1rem;border-top:1px solid var(--border);">
                    <p style="font-size:.7rem;color:var(--muted);text-align:center;margin-bottom:.75rem;">Sisa Kuota Per Jalur</p>
                    <div style="display:flex;flex-direction:column;gap:.6rem;">
                        @foreach($jalurs as $j)
                        @php
                            $m    = $jalurMeta[$j->nama] ?? ['icon'=>'📋','color'=>'#10b981','bg'=>'rgba(16,185,129,.12)','border'=>'rgba(16,185,129,.3)'];
                            $sisa = max(0, $j->kuantitas - ($j->terisi ?? 0));
                            $pct  = $j->kuantitas > 0 ? round(($j->terisi / $j->kuantitas) * 100) : 0;
                        @endphp
                        <div class="quota-row">
                            <span style="font-size:.78rem;">{{ $m['icon'] }} {{ $j->nama }}</span>
                            <div style="display:flex;align-items:center;gap:.5rem;">
                                <div class="progress">
                                    <div class="progress-fill" style="width:{{ $pct }}%;background:{{ $m['color'] }};"></div>
                                </div>
                                <span style="font-size:.7rem;font-weight:700;color:{{ $m['color'] }};">{{ $sisa }} sisa</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- ═══ STATS ROW ═══ --}}
<div style="padding:0 1.5rem;position:relative;z-index:1;max-width:1180px;margin:0 auto;">
    <div class="stats-row">
        <div class="stat-box"><div class="val grad">54</div><div class="lbl">Tahun Berdiri</div></div>
        <div class="stat-box"><div class="val" style="background:linear-gradient(135deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">70</div><div class="lbl">Tenaga Pendidik</div></div>
        <div class="stat-box"><div class="val grad">A</div><div class="lbl">Akreditasi</div></div>
        <div class="stat-box"><div class="val" style="background:linear-gradient(135deg,#fb923c,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">100+</div><div class="lbl">Prestasi Kejuaraan</div></div>
    </div>
</div>

{{-- ═══ JALUR ═══ --}}
<section id="jalur">
    <div class="wrap">
        <div class="section-header">
            <div class="eyebrow">📋 Jalur Pendaftaran</div>
            <h2>Pilih Jalur yang<br><span class="grad">Tepat Untukmu</span></h2>
            <div class="divider"></div>
        </div>

        @if($jalurs->isNotEmpty())
        <div class="jalur-grid">
            @foreach($jalurs as $j)
            @php
                $m    = $jalurMeta[$j->nama] ?? ['icon'=>'📋','color'=>'#10b981','bg'=>'rgba(16,185,129,.12)','border'=>'rgba(16,185,129,.3)'];
                $desc = $jalurDesc[$j->nama]  ?? 'Lihat informasi lengkap persyaratan jalur ini.';
                $sisa = max(0, $j->kuantitas - ($j->terisi ?? 0));
                $pct  = $j->kuantitas > 0 ? round(($j->terisi / $j->kuantitas) * 100) : 0;
            @endphp
            <div class="card card-hover jalur-card" style="background:linear-gradient(135deg,{{ $m['bg'] }},transparent);">
                <div class="jalur-icon" style="background:{{ $m['bg'] }};border:1px solid {{ $m['border'] }};">{{ $m['icon'] }}</div>
                <div class="badge" style="background:{{ $m['bg'] }};color:{{ $m['color'] }};border:1px solid {{ $m['border'] }};margin-bottom:.6rem;">{{ $j->kuantitas }} Kursi</div>
                <div class="jalur-name">Jalur {{ $j->nama }}</div>
                <p class="jalur-desc">{{ $desc }}</p>
                <div class="jalur-quota">
                    <div class="quota-label">
                        <span>Terisi {{ $j->terisi ?? 0 }}</span>
                        <span style="color:{{ $m['color'] }};font-weight:700;">{{ $sisa }} sisa</span>
                    </div>
                    <div class="progress" style="width:100%;">
                        <div class="progress-fill" style="width:{{ $pct }}%;background:{{ $m['color'] }};"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="card" style="padding:3rem;text-align:center;color:var(--muted);">
            Informasi jalur pendaftaran belum tersedia. Pantau terus halaman ini.
        </div>
        @endif
    </div>
</section>

{{-- ═══ ALUR + JADWAL ═══ --}}
<section id="alur">
    <div class="wrap">
        <div class="two-col">
            {{-- alur --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">🗺️ Alur Pendaftaran</div>
                    <h2>Cara<br><span class="grad">Mendaftar</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="timeline">
                    @foreach([
                        ['Langkah 1','Buat Akun',              'Daftar menggunakan NISN, email, dan nomor WhatsApp aktif. Verifikasi akun melalui OTP yang dikirim ke WhatsApp.'],
                        ['Langkah 2','Isi Formulir',           'Lengkapi data diri, data orang tua, pilih jalur pendaftaran, dan unggah seluruh dokumen yang dipersyaratkan.'],
                        ['Langkah 3','Verifikasi Berkas',      'Panitia memeriksa dokumen. Notifikasi status dikirim otomatis ke WhatsApp pendaftar.'],
                        ['Langkah 4','Ikuti Tes Seleksi',      'Cetak kartu tes dari sistem, lalu ikuti ujian akademik CBT dan ujian praktik ibadah sesuai jadwal.'],
                        ['Langkah 5','Pengumuman & Daftar Ulang','Cek hasil seleksi melalui akun. Jika diterima, lakukan daftar ulang dengan membawa berkas asli.'],
                    ] as [$step, $title, $desc])
                    <div class="tl-item">
                        <div class="tl-dot"></div>
                        <div class="tl-step">{{ $step }}</div>
                        <div class="tl-title">{{ $title }}</div>
                        <div class="tl-desc">{{ $desc }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- jadwal --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">📅 Jadwal PPDB</div>
                    <h2>Timeline<br><span class="grad">Kegiatan</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="card" style="padding:1.5rem;">
                    <div class="sched-list">
                        @forelse($jadwals as $j)
                        @php
                            $m = Carbon::parse($j['mulai']);
                            $s = Carbon::parse($j['selesai']);
                            if ($now->lt($m))             { $st = 'Mendatang'; $sc = 'rgba(255,255,255,.06)'; $tc = 'var(--muted)'; }
                            elseif ($now->between($m,$s)) { $st = 'Aktif';     $sc = 'rgba(212,168,67,.15)'; $tc = '#d4a843'; }
                            else                          { $st = 'Selesai';   $sc = 'rgba(16,185,129,.12)'; $tc = '#10b981'; }
                        @endphp
                        <div class="sched-item">
                            <div class="sched-ico">{{ $j['icon'] }}</div>
                            <div>
                                <div class="sched-title">{{ $j['label'] }}</div>
                                <div class="sched-date">{{ $m->translatedFormat('d M') }} – {{ $s->translatedFormat('d M Y') }}</div>
                            </div>
                            <div class="sched-badge badge" style="background:{{ $sc }};color:{{ $tc }};border:1px solid {{ $tc }}44;">{{ $st }}</div>
                        </div>
                        @empty
                        <p style="text-align:center;padding:2rem;font-size:.85rem;color:var(--muted);">Jadwal PPDB belum ditetapkan.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ PERSYARATAN ═══ --}}
<section id="syarat">
    <div class="wrap">
        <div class="two-col">
            {{-- dokumen --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">📄 Dokumen</div>
                    <h2>Berkas yang<br><span class="grad">Diperlukan</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.75rem;">Siapkan dokumen berikut sebelum memulai pendaftaran. Format JPG/PNG/PDF, maks 1 MB, min 10 KB.</p>
                </div>
                <div class="req-grid">
                    @foreach([
                        ['Kartu Keluarga',   'Scan/foto KK asli yang masih berlaku.'],
                        ['Akta Kelahiran',   'Scan/foto akta kelahiran yang jelas.'],
                        ['Pas Foto Formal',  'Berlatar merah, berpakaian formal.'],
                        ['Screenshot NISN',  'Dari nisn.data.kemdikbud.go.id.'],
                        ['SKBB & SKAB',      'Surat keterangan dari kepala sekolah asal.'],
                        ['KIP / PKH / KKS',  'Jika berlaku — kartu bantuan sosial.'],
                    ] as $i => [$dok, $ket])
                    <div class="card req-item">
                        <div class="req-num">{{ $i+1 }}</div>
                        <div class="req-text"><strong>{{ $dok }}</strong>{{ $ket }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ketentuan --}}
            <div>
                <div class="section-header">
                    <div class="eyebrow">✅ Ketentuan</div>
                    <h2>Ketentuan<br><span class="grad">Umum</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="card" style="padding:1.75rem;">
                    <ul style="list-style:none;display:flex;flex-direction:column;gap:.9rem;">
                        @foreach([
                            'Calon peserta didik telah <strong>lulus SD/MI</strong> atau sederajat.',
                            'Berusia <strong>maksimal 15 tahun</strong> per 1 Juli tahun berjalan.',
                            'Memiliki <strong>NISN yang valid</strong> sesuai data Kemendikbud.',
                            'Pendaftaran dilakukan <strong>sepenuhnya online</strong> melalui sistem ini.',
                            'Setiap pendaftar hanya dapat <strong>memilih satu jalur</strong>.',
                            'Berkas asli diminta saat <strong>verifikasi dan daftar ulang</strong>.',
                        ] as $ket)
                        <li style="display:flex;gap:.65rem;font-size:.85rem;line-height:1.65;align-items:flex-start;">
                            <span style="color:var(--green-l);font-size:1rem;flex-shrink:0;margin-top:.05rem;">✓</span>
                            <span>{!! $ket !!}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ PROGRAM ═══ --}}
<section id="program">
    <div class="wrap">
        <div class="section-header center">
            <div class="eyebrow">🎓 Unggulan</div>
            <h2>Program & <span class="grad">Ekstrakurikuler</span></h2>
            <div class="divider"></div>
        </div>
        <div class="prog-grid">
            @foreach([
                ['📖','Tahfidz Al-Qur\'an','Target minimal 3 juz selama 3 tahun belajar.'],
                ['🔬','Olimpiade Sains',   'Persiapan OSN mulai dari tingkat kabupaten hingga nasional.'],
                ['💻','Teknologi & IT',    'Literasi digital, coding dasar, dan robotika.'],
                ['⚽','Olahraga Prestasi', 'Sepak bola, bulu tangkis, karate, dan atletik.'],
                ['🎭','Seni & Budaya',     'Paskibra, drumband, hadroh, dan seni rupa.'],
                ['🌍','Bahasa Asing',      'English Club dan Arabic Club untuk era global.'],
            ] as [$ico,$judul,$desc])
            <div class="card card-hover prog-card">
                <span class="prog-ico">{{ $ico }}</span>
                <div class="prog-title">{{ $judul }}</div>
                <p class="prog-desc">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ INFORMASI ═══ --}}
<section id="informasi">
    <div class="wrap">
        <div style="display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:1rem;margin-bottom:2rem;">
            <div>
                <div class="eyebrow">📰 Informasi</div>
                <h2>Berita & <span class="grad">Pengumuman</span></h2>
                <div class="divider"></div>
            </div>
            <a href="{{ url('/informasi') }}" class="btn btn-ghost">Lihat Semua →</a>
        </div>
        @if($informasis->isNotEmpty())
        <div class="info-grid">
            @foreach($informasis as $info)
            <div class="card card-hover info-card">
                <div class="info-tag">{{ $info->status === 'Publish' ? '📢 Pengumuman' : '📋 Informasi' }}</div>
                <div class="info-title">{{ $info->judul }}</div>
                <p class="info-excerpt">{{ \Illuminate\Support\Str::limit(strip_tags($info->isi), 110) }}</p>
                <div class="info-date">📅 {{ ($info->tanggal ?? $info->updated_at)->translatedFormat('d F Y') }}</div>
            </div>
            @endforeach
        </div>
        @else
        <div class="card" style="padding:3rem;text-align:center;color:var(--muted);">Belum ada informasi yang dipublikasikan.</div>
        @endif
    </div>
</section>

{{-- ═══ FAQ ═══ --}}
<section id="faq">
    <div class="wrap">
        <div class="section-header center">
            <div class="eyebrow">❓ FAQ</div>
            <h2>Pertanyaan yang<br><span class="grad">Sering Diajukan</span></h2>
            <div class="divider"></div>
        </div>
        <div class="faq-wrap">
            @foreach([
                ['Apakah pendaftaran bisa dilakukan secara offline?',
                 'Tidak. Seluruh proses pendaftaran dilakukan secara online melalui sistem PPDB ini. Panitia tidak melayani pendaftaran manual.'],
                ['Berapa jalur yang bisa dipilih oleh satu calon peserta didik?',
                 'Setiap calon peserta didik hanya boleh memilih satu jalur pendaftaran sesuai kondisi dan dokumen yang dimiliki.'],
                ['Apa yang terjadi jika dokumen yang diunggah tidak memenuhi syarat?',
                 'Panitia akan mengirim notifikasi melalui WhatsApp. Pendaftar diberikan kesempatan mengunggah ulang sebelum batas waktu verifikasi.'],
                ['Apakah nilai rapor memengaruhi seleksi jalur Reguler?',
                 'Tidak. Jalur Reguler menggunakan hasil tes CBT dan ujian praktik ibadah sebagai dasar seleksi, bukan nilai rapor.'],
                ['Apakah ada biaya pendaftaran?',
                 'Tidak ada. Seluruh proses PPDB MTsN 1 Pandeglang tidak dipungut biaya apapun.'],
                ['Kapan pengumuman hasil seleksi disampaikan?',
                 'Pengumuman disampaikan sesuai jadwal yang tertera di Timeline Kegiatan. Notifikasi otomatis juga dikirim ke WhatsApp pendaftar.'],
                ['Apa yang harus dibawa saat daftar ulang?',
                 'Peserta wajib membawa seluruh dokumen asli: KK, akta kelahiran, pas foto terbaru, dan surat keterangan dari sekolah asal.'],
            ] as [$q, $a])
            <div class="card faq-item">
                <button class="faq-btn" onclick="toggleFaq(this)">
                    <span>{{ $q }}</span>
                    <span class="faq-chevron">▼</span>
                </button>
                <div class="faq-body">
                    <p>{{ $a }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section class="cta-section" style="position:relative;z-index:1;">
    <div style="position:absolute;inset:0;background:radial-gradient(ellipse at center,rgba(5,150,105,.1) 0%,transparent 70%);pointer-events:none;"></div>
    <div class="cta-inner" style="position:relative;">
        <div style="font-size:3rem;margin-bottom:.75rem;">🎓</div>
        <h2>Bergabunglah Bersama<br><span class="grad">Generasi Terbaik</span></h2>
        <p class="lead">
            @if($tahun && $tahun->kuantitas) Kuota {{ $tahun->kuantitas }} peserta, terbatas. @endif
            Daftarkan diri sekarang dan wujudkan masa depan lebih cerah.
        </p>
        <div class="cta-btns">
            <a href="{{ url('/register') }}" class="btn btn-primary btn-lg">📝 Daftar Sekarang</a>
            <a href="{{ url('/login') }}"    class="btn btn-ghost btn-lg">🔐 Masuk Akun</a>
        </div>
    </div>
</section>

</main>

{{-- ═══ FOOTER ═══ --}}
<footer>
    <div class="wrap">
        <div style="font-size:2rem;margin-bottom:.5rem;">🕌</div>
        <div class="footer-logo">MTs Negeri 1 Pandeglang</div>
        <div class="footer-sub">Kementerian Agama Kabupaten Pandeglang · PPDB {{ $tahun?->nama ?? '' }}</div>
        <div class="footer-sub" style="margin-top:.25rem;">Jl. Raya Labuan, Kabupaten Pandeglang, Banten 42213</div>
        <div class="footer-links">
            <a href="#jalur">Jalur</a>
            <a href="#alur">Alur Daftar</a>
            <a href="#syarat">Persyaratan</a>
            <a href="#program">Program</a>
            <a href="#informasi">Informasi</a>
            <a href="#faq">FAQ</a>
            <a href="https://mtsn1pandeglang.sch.id" target="_blank" rel="noopener">Website Resmi ↗</a>
        </div>
        <div class="footer-copy">
            &copy; 1970–{{ date('Y') }} MTs Negeri 1 Pandeglang.
            Dikembangkan oleh <a href="https://github.com/zulfikriyahya" target="_blank" rel="noopener">Yahya Zulfikri</a>.
        </div>
    </div>
</footer>

<script>
// ── theme ──
const html = document.documentElement;
const themeBtn = document.getElementById('themeBtn');
const saved = localStorage.getItem('theme');
if (saved === 'light') { html.classList.add('light'); themeBtn.textContent = '🌙'; }
else                   { themeBtn.textContent = '☀️'; }
themeBtn.addEventListener('click', () => {
    html.classList.toggle('light');
    const light = html.classList.contains('light');
    themeBtn.textContent = light ? '🌙' : '☀️';
    localStorage.setItem('theme', light ? 'light' : 'dark');
});

// ── hamburger ──
const menuBtn = document.getElementById('menuBtn');
const drawer  = document.getElementById('drawer');
menuBtn.addEventListener('click', () => {
    const open = drawer.classList.toggle('open');
    menuBtn.classList.toggle('open', open);
});
drawer.querySelectorAll('.d-link').forEach(a => a.addEventListener('click', () => {
    drawer.classList.remove('open'); menuBtn.classList.remove('open');
}));
document.addEventListener('click', e => {
    if (!drawer.contains(e.target) && !menuBtn.contains(e.target)) {
        drawer.classList.remove('open'); menuBtn.classList.remove('open');
    }
});

// ── countdown ──
const cdEl = document.getElementById('countdown');
if (cdEl) {
    const dead = new Date(cdEl.dataset.deadline);
    const pad  = n => String(n).padStart(2,'0');
    function tick() {
        const diff = dead - Date.now();
        if (diff <= 0) {
            cdEl.innerHTML = '<p style="grid-column:span 4;text-align:center;padding:1rem;opacity:.5;font-size:.8rem;">Pendaftaran telah ditutup.</p>';
            return;
        }
        document.getElementById('cd-d').textContent = pad(Math.floor(diff/86400000));
        document.getElementById('cd-h').textContent = pad(Math.floor((diff%86400000)/3600000));
        document.getElementById('cd-m').textContent = pad(Math.floor((diff%3600000)/60000));
        document.getElementById('cd-s').textContent = pad(Math.floor((diff%60000)/1000));
    }
    tick(); setInterval(tick, 1000);
}

// ── active nav ──
const sections = document.querySelectorAll('section[id]');
const navAs    = document.querySelectorAll('.nav-links a');
new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (!e.isIntersecting) return;
        navAs.forEach(a => a.classList.remove('active'));
        const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
        if (a) a.classList.add('active');
    });
}, { threshold: 0.35 }).observe;
sections.forEach(s => new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (!e.isIntersecting) return;
        navAs.forEach(a => a.classList.remove('active'));
        const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
        if (a) a.classList.add('active');
    });
}, { threshold: 0.35 }).observe(s));

// ── faq ──
function toggleFaq(btn) {
    const body    = btn.nextElementSibling;
    const chevron = btn.querySelector('.faq-chevron');
    const isOpen  = body.style.maxHeight && body.style.maxHeight !== '0px';
    document.querySelectorAll('.faq-body').forEach(b => b.style.maxHeight = '0px');
    document.querySelectorAll('.faq-chevron').forEach(c => c.style.transform = '');
    if (!isOpen) {
        body.style.maxHeight = body.scrollHeight + 'px';
        chevron.style.transform = 'rotate(180deg)';
    }
}
</script>
</body>
</html>

```

---

### 📄 `./resources/views/partials/pdf-header.blade.php`

```blade
@php
    use Illuminate\Support\Facades\Storage;
    $logoInstitusi = $instansi?->logo_institusi ? Storage::url($instansi->logo_institusi) : null;
    $logoMadrasah  = $instansi?->logo ? Storage::url($instansi->logo) : null;

    $alamat = collect([
        $instansi?->alamat,
        optional($instansi?->kelurahan)->nama,
        optional($instansi?->kecamatan)->nama,
        optional($instansi?->kabupaten)->nama,
        optional($instansi?->provinsi)->nama,
    ])->filter()->map(fn($item) => ucwords(strtolower($item)))->implode(', ');

    $kontak = collect([
        $instansi?->website ? 'Website: ' . $instansi->website : null,
        $instansi?->email   ? 'Email: '   . $instansi->email   : null,
        $instansi?->telepon ? 'Telp: '    . $instansi->telepon : null,
    ])->filter()->implode('  |  ');
@endphp

<table width="100%" style="border-collapse: collapse; margin-bottom: 0; padding: 0;">
    <tr>
        <td width="85" align="left" valign="middle">
            @if ($logoInstitusi)
                <img src="{{ $logoInstitusi }}" alt="Logo Kemenag" style="width: 75px; height: auto;">
            @else
                <div style="width: 75px; height: 75px;"></div>
            @endif
        </td>

        <td align="center" valign="middle" style="padding: 0 10px; line-height: 1.3;">
            <div style="font-size: 11pt; font-weight: bold; text-transform: uppercase; letter-spacing: 0.5pt;">
                Kementerian Agama Republik Indonesia<br>
                Kantor Kementerian Agama {{ ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Kabupaten Pandeglang')) }}
            </div>
            <div style="font-size: 14pt; font-weight: bold; text-transform: uppercase; letter-spacing: 1pt; margin-top: 3px;">
                {{ $instansi?->nama ?? 'MTs Negeri 1 Pandeglang' }}
            </div>
            @if ($alamat)
                <div style="font-size: 9pt; margin-top: 4px; color: #111;">{{ $alamat }}</div>
            @endif
            @if ($kontak)
                <div style="font-size: 8.5pt; margin-top: 1px; color: #333;">{{ $kontak }}</div>
            @endif
        </td>

        <td width="85" align="right" valign="middle">
            @if ($logoMadrasah)
                <img src="{{ $logoMadrasah }}" alt="Logo Madrasah" style="width: 75px; height: auto;">
            @else
                <div style="width: 75px; height: 75px;"></div>
            @endif
        </td>
    </tr>
</table>

<div style="border-top: 3px solid #000; margin-top: 6px;"></div>
<div style="border-top: 1px solid #000; margin-top: 2px; margin-bottom: 15px;"></div>

```

---

### 📄 `./resources/views/skl.blade.php`

```blade
@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Storage;

    $fotoUrl = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload = url('/admin/formulir/' . $record->id);

    $now = Carbon::now();
    $tanggalTtd = $now;
    if ($tahunPendaftaran) {
        $periodes = [
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai,
            ],
            [
                $tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai,
                $tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai,
            ],
        ];
        foreach ($periodes as [$mulai, $selesai]) {
            if ($mulai && $selesai && $now->between(Carbon::parse($mulai), Carbon::parse($selesai))) {
                $tanggalTtd = Carbon::parse($mulai);
                break;
            }
        }
    }

    $kota = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));
    $namaMadrasah = $instansi?->nama ?? 'MTsN 1 Pandeglang';
    $diterima = in_array($record->status_pendaftaran, [
        'Diterima',
        'Diterima Di Kelas Reguler',
        'Diterima Di Kelas Unggulan',
    ]);
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm 20mm;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            font-size: 11pt;
            color: #111827;
            line-height: 1.6;
            text-align: justify;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            text-align: left;
        }

        .sans {
            font-family: 'Helvetica', sans-serif;
        }

        .doc-title {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-decoration: underline;
            margin-top: 10px;
        }

        .doc-nomor {
            text-align: center;
            font-size: 10.5pt;
            font-family: 'Helvetica', sans-serif;
            color: #4b5563;
            margin-bottom: 25px;
        }

        .data-box {
            border: 1px solid #d1d5db;
            padding: 15px;
            margin: 20px 0;
            background-color: #fcfcfc;
        }

        .data-box td {
            padding: 4px;
            vertical-align: top;
            font-family: 'Helvetica', sans-serif;
            font-size: 10pt;
        }

        .data-box .lbl {
            color: #6b7280;
            font-weight: bold;
            width: 35%;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stamp-container {
            text-align: center;
            margin: 30px 0;
        }

        .stamp {
            display: inline-block;
            padding: 10px 40px;
            font-family: 'Helvetica', sans-serif;
            font-size: 16pt;
            font-weight: 900;
            letter-spacing: 4px;
            text-transform: uppercase;
            border: 4px solid;
            border-radius: 8px;
            transform: rotate(-3deg);
        }

        .stamp-pass {
            color: #047857;
            border-color: #047857;
            background-color: rgba(4, 120, 87, 0.05);
        }

        .stamp-fail {
            color: #b91c1c;
            border-color: #b91c1c;
            background-color: rgba(185, 28, 28, 0.05);
        }

        .sig-area {
            margin-top: 40px;
            page-break-inside: avoid;
        }

        .sig-block {
            text-align: center;
            font-family: 'Helvetica', sans-serif;
            font-size: 9.5pt;
        }

        .sig-title {
            color: #4b5563;
            margin-bottom: 60px;
            display: block;
        }

        .sig-name {
            font-weight: bold;
            color: #111827;
            text-decoration: underline;
            font-size: 10pt;
        }

        .page-break {
            page-break-before: always;
        }

        .clean-table {
            border: 1px solid #e5e7eb;
            font-family: 'Helvetica', sans-serif;
            font-size: 9.5pt;
        }

        .clean-table th {
            background-color: #f3f4f6;
            padding: 10px;
            text-align: left;
            color: #374151;
            font-weight: bold;
            border-bottom: 2px solid #d1d5db;
            text-transform: uppercase;
            font-size: 8.5pt;
            letter-spacing: 0.5px;
        }

        .clean-table td {
            padding: 10px;
            border-bottom: 1px solid #e5e7eb;
            color: #1f2937;
        }
    </style>
</head>

<body>

    {{-- ==================== LEMBAR 1: SKL ==================== --}}
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title">SURAT KEPUTUSAN KELULUSAN</div>
    <div class="doc-nomor">Nomor: {{ $instansi?->nomor_surat ?? '......./Mts.01/PPDB/' . date('Y') }}</div>

    <p>
        Berdasarkan hasil Keputusan Sidang Pleno Panitia Penerimaan Peserta Didik Baru (PPDB) <b>{{ $namaMadrasah }}</b>
        Tahun Pelajaran {{ $tahunPendaftaran?->nama ?? '' }}, setelah melakukan evaluasi terhadap kelengkapan
        administrasi dan hasil uji seleksi, maka Panitia menetapkan bahwa peserta didik di bawah ini:
    </p>

    <div class="data-box">
        <table>
            <tr>
                <td class="lbl">Nomor Registrasi</td>
                <td>:</td>
                <td style="font-weight: bold; font-size: 11pt; color: #111827;">{{ $record->nomor_pendaftaran ?? '-' }}
                </td>
            </tr>
            <tr>
                <td class="lbl">Nama Lengkap</td>
                <td>:</td>
                <td style="font-weight: bold; font-size: 11pt; color: #111827;">{{ strtoupper($record->nama ?? '-') }}
                </td>
            </tr>
            <tr>
                <td class="lbl">Jalur Pendaftaran</td>
                <td>:</td>
                <td>{{ strtoupper(optional($record->jalurPendaftaran)->nama ?? '-') }}</td>
            </tr>
            <tr>
                <td class="lbl">Asal Sekolah Dasar</td>
                <td>:</td>
                <td>{{ strtoupper(optional($record->sekolahAsal)->nama ?? '-') }}</td>
            </tr>
        </table>
    </div>

    <p style="text-align: center; font-size: 12pt; margin-top: 30px;">Dinyatakan:</p>

    <div class="stamp-container">
        <div class="stamp {{ $diterima ? 'stamp-pass' : 'stamp-fail' }}">
            {{ $diterima ? 'L U L U S' : 'TIDAK LULUS' }}
        </div>
    </div>

    <p>
        Demikian Surat Keputusan ini diterbitkan agar dapat dipergunakan sebagaimana mestinya. Keputusan Panitia
        bersifat mutlak dan tidak dapat diganggu gugat. Bagi peserta didik yang dinyatakan <b>LULUS</b>, diwajibkan
        untuk segera melakukan tahapan Daftar Ulang sesuai dengan jadwal yang telah ditentukan.
    </p>

    <div class="sig-area">
        <table>
            <tr>
                <td style="width: 25%; vertical-align: bottom;">{!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}</td>
                <td class="sig-block" style="width: 37.5%; vertical-align: top;">
                    <span class="sig-title">{{ $kota }}, {{ $tanggalTtd->translatedFormat('d F Y') }}<br>Ketua
                        Panitia PPDB,</span>
                    <div style="position: relative; top: -50px; height: 0;">
                        @if ($ketua?->berkas_tte)
                            <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:60px;">
                        @endif
                    </div>
                    <span class="sig-name">{{ $ketua?->nama ?? '.....................................' }}</span><br>
                    NIP. {{ $ketua?->nip ?? '-' }}
                </td>
                <td class="sig-block" style="width: 37.5%; vertical-align: top;">
                    <span class="sig-title">Mengetahui,<br>Kepala {{ ucwords(strtolower($namaMadrasah)) }}</span>
                    <div style="position: relative; top: -50px; height: 0;">
                        @if ($pimpinan?->berkas_tte)
                            <img src="{{ Storage::url($pimpinan->berkas_tte) }}" style="height:60px;">
                        @endif
                    </div>
                    <span class="sig-name">{{ $pimpinan?->nama ?? '.....................................' }}</span><br>
                    NIP. {{ $pimpinan?->nip ?? '-' }}
                </td>
            </tr>
        </table>
    </div>

    {{-- ==================== LEMBAR 2: PAKTA INTEGRITAS ==================== --}}
    <div class="page-break"></div>
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title" style="font-size: 13pt; margin-bottom: 25px;">PAKTA INTEGRITAS ORANG TUA / WALI</div>

    <p>Saya yang bertanda tangan di bawah ini:</p>
    <table class="sans" style="margin: 15px 0 20px 20px; width: 90%;">
        <tr>
            <td style="width: 30%; color: #4b5563;">Nama Lengkap</td>
            <td style="width: 2%;">:</td>
            <td style="font-weight: bold;">
                {{ strtoupper($record->ayah_nama ?? ($record->wali_nama ?? '......................................')) }}
            </td>
        </tr>
        <tr>
            <td style="color: #4b5563;">Status Hubungan</td>
            <td>:</td>
            <td>Orang Tua / Wali Peserta Didik</td>
        </tr>
    </table>

    <p>Adalah benar orang tua / wali dari Calon Peserta Didik Baru:</p>
    <table class="sans" style="margin: 15px 0 20px 20px; width: 90%;">
        <tr>
            <td style="width: 30%; color: #4b5563;">Nama Lengkap Siswa</td>
            <td style="width: 2%;">:</td>
            <td style="font-weight: bold; font-size: 12pt;">{{ strtoupper($record->nama) }}</td>
        </tr>
        <tr>
            <td style="color: #4b5563;">Nomor Registrasi</td>
            <td>:</td>
            <td>{{ $record->nomor_pendaftaran }}</td>
        </tr>
    </table>

    <p>Menyatakan dengan sesungguhnya bahwa:</p>
    <ol style="margin-top: 10px; padding-left: 25px; line-height: 1.8;">
        <li>Seluruh data dan dokumen yang saya berikan kepada pihak panitia adalah <b>benar, absah, dan dapat
                dipertanggungjawabkan secara hukum</b>.</li>
        <li>Apabila dikemudian hari ditemukan indikasi pemalsuan data/dokumen, saya bersedia menerima sanksi berupa
            <b>pembatalan kelulusan</b> putra/putri saya.</li>
        <li>Saya sepenuhnya sanggup dan bersedia bekerja sama dengan pihak madrasah untuk membimbing putra/putri saya
            agar senantiasa mematuhi <b>Tata Tertib dan Peraturan Madarasah</b>.</li>
        <li>Saya berkomitmen untuk tidak melakukan tindakan penyuapan, pemaksaan, maupun gratifikasi kepada panitia
            pelaksana, dewan guru, atau staf madrasah dalam bentuk apa pun.</li>
    </ol>

    <p style="margin-top: 20px;">Demikian Pakta Integritas ini saya buat dalam keadaan sadar, sehat jasmani dan rohani,
        serta tanpa adanya tekanan dari pihak mana pun.</p>

    <table class="sig-area sans">
        <tr>
            <td style="width: 55%;"></td>
            <td class="sig-block" style="width: 45%;">
                <span style="display: block; margin-bottom: 10px;">{{ $kota }},
                    {{ $tanggalTtd->translatedFormat('d F Y') }}<br>Yang Membuat Pernyataan,</span>
                <div
                    style="border: 1px dashed #9ca3af; width: 80px; height: 40px; line-height: 40px; margin: 0 auto 10px; font-size: 8pt; color: #9ca3af;">
                    Meterai 10rb</div>
                <span class="sig-name"
                    style="font-size: 11pt;">{{ strtoupper($record->ayah_nama ?? ($record->wali_nama ?? '......................................')) }}</span>
            </td>
        </tr>
    </table>

    {{-- ==================== LEMBAR 3: SURAT PERNYATAAN SISWA ==================== --}}
    <div class="page-break"></div>
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title" style="font-size: 13pt; margin-bottom: 25px;">SURAT PERNYATAAN PESERTA DIDIK</div>

    <p>Saya yang bertanda tangan di bawah ini, Calon Peserta Didik Baru {{ $namaMadrasah }}:</p>
    <table class="sans"
        style="margin: 15px 0 20px 20px; width: 90%; background-color: #f9fafb; padding: 15px; border-left: 3px solid #059669;">
        <tr>
            <td style="width: 30%; color: #4b5563; padding: 4px;">Nama Lengkap</td>
            <td style="width: 2%;">:</td>
            <td style="font-weight: bold; font-size: 12pt;">{{ strtoupper($record->nama) }}</td>
        </tr>
        <tr>
            <td style="color: #4b5563; padding: 4px;">NISN</td>
            <td>:</td>
            <td>{{ $record->nisn }}</td>
        </tr>
        <tr>
            <td style="color: #4b5563; padding: 4px;">Asal Sekolah</td>
            <td>:</td>
            <td>{{ strtoupper(optional($record->sekolahAsal)->nama ?? '-') }}</td>
        </tr>
    </table>

    <p>Dengan memohon ridha Allah SWT, saya berjanji dan menyatakan bahwa saya:</p>
    <ol style="margin-top: 10px; padding-left: 25px; line-height: 1.8;">
        <li>Akan senantiasa menjaga nama baik agama, keluarga, dan almamater {{ $namaMadrasah }} di mana pun saya
            berada.</li>
        <li>Sanggup mematuhi dan melaksanakan segala tata tertib, peraturan madrasah, serta menjunjung tinggi norma
            kesopanan dan akhlakul karimah terhadap Guru dan sesama teman.</li>
        <li>Bersedia mengikuti seluruh kegiatan intrakurikuler maupun ekstrakurikuler yang telah ditetapkan oleh pihak
            madrasah dengan penuh tanggung jawab.</li>
        <li><b>TIDAK AKAN</b> terlibat secara langsung maupun tidak langsung dalam tindakan kriminalitas,
            perkelahian/tawuran pelajar, perundungan (<i>bullying</i>), mengkonsumsi rokok/miras/narkotika, serta
            pergaulan bebas.</li>
        <li>Apabila saya terbukti melanggar pernyataan di atas, saya <b>SIAP MENERIMA SANKSI TERBERAT</b> dari pihak
            madrasah, yaitu dikembalikan pembinaannya kepada orang tua / wali (Dikeluarkan).</li>
    </ol>

    <table class="sig-area sans">
        <tr>
            <td class="sig-block" style="width: 45%;">
                <span style="display: block; margin-bottom: 70px;">Mengetahui dan Menyetujui,<br>Orang Tua / Wali
                    Siswa</span>
                <span class="sig-name"
                    style="font-size: 11pt;">{{ strtoupper($record->ayah_nama ?? ($record->wali_nama ?? '......................................')) }}</span>
            </td>
            <td style="width: 10%;"></td>
            <td class="sig-block" style="width: 45%;">
                <span style="display: block; margin-bottom: 70px;">{{ $kota }},
                    {{ $tanggalTtd->translatedFormat('d F Y') }}<br>Calon Peserta Didik</span>
                <span class="sig-name" style="font-size: 11pt;">{{ strtoupper($record->nama) }}</span>
            </td>
        </tr>
    </table>

    {{-- ==================== LEMBAR 4: CHECKLIST ==================== --}}
    <div class="page-break"></div>
    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="doc-title" style="font-size: 13pt; margin-bottom: 25px; font-family: 'Helvetica', sans-serif;">PANDUAN &
        CHECKLIST DAFTAR ULANG</div>

    <p class="sans" style="font-size: 10.5pt; color: #374151; margin-bottom: 15px;">
        Selamat, Anda telah dinyatakan Lulus! Sebagai syarat akhir penerimaan, harap membawa dokumen-dokumen di bawah
        ini saat proses Daftar Ulang. Masukkan seluruh dokumen ke dalam <b>MAP SNELHECTER PLASTIK</b> (Warna Merah untuk
        Laki-laki, Warna Kuning untuk Perempuan).
    </p>

    <table class="clean-table" style="width: 100%;">
        <thead>
            <tr>
                <th style="width: 5%; text-align: center;">No</th>
                <th style="width: 45%;">Nama Dokumen Pemberkasan</th>
                <th style="width: 10%; text-align: center;">Jumlah</th>
                <th style="width: 30%;">Keterangan</th>
                <th style="width: 10%; text-align: center;">Cek (✓)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center;">1</td>
                <td>Formulir Pendaftaran (Lembar 1)</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td>Dicetak dari sistem PPDB</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">2</td>
                <td>Pakta Integritas (Lembar 2)</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td>Bermeterai 10.000 & Ditandatangani</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">3</td>
                <td>Surat Pernyataan (Lembar 3)</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td>Ditandatangani Siswa & Ortu</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">4</td>
                <td>Fotokopi Kartu Keluarga (KK)</td>
                <td style="text-align:center; font-weight:bold;">2 Lembar</td>
                <td>Dilegalisir Desa/Kelurahan</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">5</td>
                <td>Fotokopi Akta Kelahiran</td>
                <td style="text-align:center; font-weight:bold;">2 Lembar</td>
                <td>Jelas & Terbaca</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">6</td>
                <td>Fotokopi Ijazah / SKL</td>
                <td style="text-align:center; font-weight:bold;">2 Lembar</td>
                <td>Dilegalisir Asal Sekolah</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">7</td>
                <td>Pas Foto Resmi 3x4</td>
                <td style="text-align:center; font-weight:bold;">4 Lembar</td>
                <td>Berlatar Belakang Merah</td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
            <tr>
                <td style="text-align:center;">8</td>
                <td>Kartu KIP / PKH / KKS</td>
                <td style="text-align:center; font-weight:bold;">1 Lembar</td>
                <td><i style="color: #6b7280;">Hanya bagi yang memiliki</i></td>
                <td style="font-size: 14pt; text-align:center;">☐</td>
            </tr>
        </tbody>
    </table>

</body>

</html>

```

---

### 📄 `./resources/views/vendor/filament-easy-footer/easy-footer.blade.php`

```blade
@php
    use Filament\Support\Enums\MaxWidth;
@endphp

<footer
    @class([
        'fi-footer my-4 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm text-gray-500 dark:text-gray-400',
        'border-t border-gray-200 dark:border-gray-700 py-4 text-center' => in_array($footerPosition, ['sidebar', 'sidebar.footer']) || $borderTopEnabled,
        'fi-sidebar flex-col md:flex-row' => in_array($footerPosition, ['sidebar', 'sidebar.footer']),
        'mx-auto w-full px-4 md:px-6 lg:px-8' => $footerPosition === 'footer',
        match ($maxContentWidth ??= filament()->getMaxContentWidth() ?? MaxWidth::SevenExtraLarge) {
            MaxWidth::ExtraSmall, 'xs' => 'max-w-xs',
            MaxWidth::Small, 'sm' => 'max-w-sm',
            MaxWidth::Medium, 'md' => 'max-w-md',
            MaxWidth::Large, 'lg' => 'max-w-lg',
            MaxWidth::ExtraLarge, 'xl' => 'max-w-xl',
            MaxWidth::TwoExtraLarge, '2xl' => 'max-w-2xl',
            MaxWidth::ThreeExtraLarge, '3xl' => 'max-w-3xl',
            MaxWidth::FourExtraLarge, '4xl' => 'max-w-4xl',
            MaxWidth::FiveExtraLarge, '5xl' => 'max-w-5xl',
            MaxWidth::SixExtraLarge, '6xl' => 'max-w-6xl',
            MaxWidth::SevenExtraLarge, '7xl' => 'max-w-7xl',
            MaxWidth::Full, 'full' => 'max-w-full',
            default => $maxContentWidth,
        } => $footerPosition === 'footer',
    ])
>
    <!-- Copyright & Title -->
    <div class="flex items-center gap-2 font-medium text-gray-600 dark:text-gray-300">
        <a href="https://mtsn1pandeglang.sch.id" target="_blank" class="transition hover:text-primary-600 dark:hover:text-primary-400">
            &copy; 1970 &mdash; {{ now()->format('Y') }} MTs Negeri 1 Pandeglang
        </a>

        @if($sentence)
            <span class="hidden md:inline">&bull;</span>
            <span class="inline-flex items-center">
                @if($isHtmlSentence)
                    {!! $sentence !!}
                @else
                    {{ $sentence }}
                @endif
            </span>
        @endif
    </div>

    <!-- Links -->
    @if(count($links) > 0)
        <ul class="flex items-center gap-4">
            @foreach($links as $link)
                <li>
                    <a href="{{ $link['url'] }}" target="_blank" class="font-medium transition hover:text-primary-600 dark:hover:text-primary-400">
                        {{ $link['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Logo -->
    @if($logoPath)
        <div class="flex items-center gap-2">
            @if($logoText)
                <span class="font-medium">{{ $logoText }}</span>
            @endif
            @if($logoUrl)
                <a href="{{ $logoUrl }}" target="_blank" class="transition hover:opacity-80">
            @endif
                <img src="{{ $logoPath }}" alt="Logo Footer" class="object-contain w-auto" style="height: {{ $logoHeight }}px;">
            @if($logoUrl)
                </a>
            @endif
        </div>
    @endif

    <!-- Github Info -->
    @if($githubEnabled)
        <div class="flex items-center pl-4 border-l border-gray-300 dark:border-gray-600">
            <livewire:devonab.filament-easy-footer.github-version :show-logo="$showLogo" :show-url="$showUrl" />
        </div>
    @endif

    <!-- Load Time -->
    @if($loadTime)
        <div class="font-mono text-xs text-gray-400 dark:text-gray-500">
            {{ $loadTimePrefix ?? '' }} {{ $loadTime }}s 🚀
        </div>
    @endif
</footer>

```

---

### 📄 `./resources/views/vendor/filament-easy-footer/github-version.blade.php`

```blade
<div class="flex items-center gap-2 text-sm font-medium text-gray-600 dark:text-gray-400">
    @if($version)
        <span>{{ str()->startsWith($version, 'v') ? $version : 'v' . $version }}</span>

        @if($showUrl)
            <a
                href="{{ $this->getGithubUrl() }}"
                target="_blank"
                class="transition-transform hover:scale-110"
                title="View on GitHub"
            >
                @if($showLogo)
                    <svg viewBox="0 0 24 24" aria-hidden="true" class="transition size-5 fill-gray-500 hover:fill-gray-900 dark:fill-gray-400 dark:hover:fill-white">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z"></path>
                    </svg>
                @endif
            </a>
        @endif
    @endif
</div>

```

---

### 📄 `./resources/views/vendor/filament-easy-footer/.gitkeep`

```

```

---

## 🎨 Resources (Other)

### 📄 `./resources/css/app.css`

```css
@tailwind base;
@tailwind components;
@tailwind utilities;

[x-cloak] {
    display: none;
}
```

---

### 📄 `./resources/css/filament/admin/tailwind.config.js`

```javascript
import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/diogogpinto/filament-auth-ui-enhancer/resources/**/*.blade.php',
    ],
}

```

---

### 📄 `./resources/css/filament/admin/theme.css`

```css
@import '../../../../vendor/filament/filament/resources/css/base.css';
@tailwind base;
@tailwind components;
@tailwind utilities;
@tailwind variants;

@config 'tailwind.config.js';

```

---

### 📄 `./resources/js/app.js`

```javascript
import './bootstrap';

```

---

### 📄 `./resources/js/bootstrap.js`

```javascript
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

```

---

## ⚙️ Config

### 📄 `./config/app.php`

```php
<?php

return [
    'name' => env('APP_NAME', 'PPDB MTs Negeri 1 Pandeglang'),
    'env' => env('APP_ENV', 'production'),
    'debug' => (bool) env('APP_DEBUG', false),
    'url' => env('APP_URL', 'https://daftar.mtsn1pandeglang.sch.id'),
    'timezone' => env('APP_TIMEZONE', 'Asia/Jakarta'),
    'locale' => env('APP_LOCALE', 'id'),
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'id'),
    'faker_locale' => env('APP_FAKER_LOCALE', 'id_ID'),
    'cipher' => 'AES-256-CBC',
    'key' => env('APP_KEY'),
    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],
    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],
];

```

---

### 📄 `./config/auth.php`

```php
<?php

return [
    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],
    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),
];

```

---

### 📄 `./config/cache.php`

```php
<?php

use Illuminate\Support\Str;

return [
    'default' => env('CACHE_STORE', 'database'),
    'stores' => [
        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],
        'database' => [
            'driver' => 'database',
            'connection' => env('DB_CACHE_CONNECTION'),
            'table' => env('DB_CACHE_TABLE', 'cache'),
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
            'lock_table' => env('DB_CACHE_LOCK_TABLE'),
        ],
        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],
        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],
        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],
        'octane' => [
            'driver' => 'octane',
        ],
    ],
    'prefix' => env('CACHE_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_cache_'),
];

```

---

### 📄 `./config/database.php`

```php
<?php

use Illuminate\Support\Str;

return [
    'default' => env('DB_CONNECTION', 'sqlite'),
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
        ],
        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],
        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],
    ],
    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],
    'redis' => [
        'client' => env('REDIS_CLIENT', 'phpredis'),
        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],
        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],
        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],
    ],
];

```

---

### 📄 `./config/filament-easy-footer.php`

```php
<?php

return [
    'app_name' => env('APP_NAME', ''),
    'github' => [
        'repository' => env('GITHUB_REPOSITORY', ''),
        'token' => env('GITHUB_TOKEN', ''),
        'cache_ttl' => env('GITHUB_CACHE_TTL', 3600),
    ],
];

```

---

### 📄 `./config/filament.php`

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Broadcasting
    |--------------------------------------------------------------------------
    |
    | By uncommenting the Laravel Echo configuration, you may connect Filament
    | to any Pusher-compatible websockets server.
    |
    | This will allow your users to receive real-time notifications.
    |
    */

    'broadcasting' => [

        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'wsHost' => env('VITE_PUSHER_HOST'),
        //     'wsPort' => env('VITE_PUSHER_PORT'),
        //     'wssPort' => env('VITE_PUSHER_PORT'),
        //     'authEndpoint' => '/broadcasting/auth',
        //     'disableStats' => true,
        //     'encrypted' => true,
        //     'forceTLS' => true,
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Filament will use to store files. You may use
    | any of the disks defined in the `config/filesystems.php`.
    |
    */

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Assets Path
    |--------------------------------------------------------------------------
    |
    | This is the directory where Filament's assets will be published to. It
    | is relative to the `public` directory of your Laravel application.
    |
    | After changing the path, you should run `php artisan filament:assets`.
    |
    */

    'assets_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Cache Path
    |--------------------------------------------------------------------------
    |
    | This is the directory that Filament will use to store cache files that
    | are used to optimize the registration of components.
    |
    | After changing the path, you should run `php artisan filament:cache-components`.
    |
    */

    'cache_path' => base_path('bootstrap/cache/filament'),

    /*
    |--------------------------------------------------------------------------
    | Livewire Loading Delay
    |--------------------------------------------------------------------------
    |
    | This sets the delay before loading indicators appear.
    |
    | Setting this to 'none' makes indicators appear immediately, which can be
    | desirable for high-latency connections. Setting it to 'default' applies
    | Livewire's standard 200ms delay.
    |
    */

    'livewire_loading_delay' => 'default',

];

```

---

### 📄 `./config/filament-shield.php`

```php
<?php

return [
    'shield_resource' => [
        'should_register_navigation' => true,
        'slug' => 'shield/roles',
        'navigation_sort' => -1,
        'navigation_badge' => true,
        'navigation_group' => true,
        'is_globally_searchable' => false,
        'show_model_path' => true,
        'is_scoped_to_tenant' => true,
        'cluster' => null,
    ],

    'tenant_model' => null,

    'auth_provider_model' => [
        'fqcn' => 'App\\Models\\User',
    ],

    'super_admin' => [
        'enabled' => true,
        'name' => 'super_admin', // ← disesuaikan dengan nama role di Spatie
        'define_via_gate' => true,
        'intercept_gate' => 'before',
    ],

    'panel_user' => [
        'enabled' => true,
        'name' => 'panel_user',
    ],

    'permission_prefixes' => [
        'resource' => [
            'view',
            'view_any',
            'create',
            'update',
            'restore',
            'restore_any',
            'replicate',
            'reorder',
            'delete',
            'delete_any',
            'force_delete',
            'force_delete_any',
        ],
        'page' => 'page',
        'widget' => 'widget',
    ],

    'entities' => [
        'pages' => true,
        'widgets' => true,
        'resources' => true,
        'custom_permissions' => false,
    ],

    'generator' => [
        'option' => 'policies_and_permissions',
        'policy_directory' => 'Policies',
        'policy_namespace' => 'Policies',
    ],

    'exclude' => [
        'enabled' => true,
        'pages' => [
            'Dashboard',
        ],
        'widgets' => [
            'AccountWidget',
            'FilamentInfoWidget',
        ],
        'resources' => [],
    ],

    'discovery' => [
        'discover_all_resources' => false,
        'discover_all_widgets' => false,
        'discover_all_pages' => false,
    ],

    'register_role_policy' => [
        'enabled' => true,
    ],
];

```

---

### 📄 `./config/filesystems.php`

```php
<?php

return [
    'default' => env('FILESYSTEM_DISK', 'local'),
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],
    ],
    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];

```

---

### 📄 `./config/logging.php`

```php
<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [
    'default' => env('LOG_CHANNEL', 'stack'),
    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],
    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', env('LOG_STACK', 'single')),
            'ignore_exceptions' => false,
        ],
        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],
        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
        ],
        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],
        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],
        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],
        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
        ],
        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],
        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],
        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],
];

```

---

### 📄 `./config/mail.php`

```php
<?php

return [
    'default' => env('MAIL_MAILER', 'log'),
    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'scheme' => env('MAIL_SCHEME'),
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url(env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],
        'ses' => [
            'transport' => 'ses',
        ],
        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],
        'resend' => [
            'transport' => 'resend',
        ],
        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],
        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],
        'array' => [
            'transport' => 'array',
        ],
        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
        ],
    ],
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
];

```

---

### 📄 `./config/permission.php`

```php
<?php

return [

    'models' => [

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your permissions. Of course, it
         * is often just the "Permission" model but you may use whatever you like.
         *
         * The model you want to use as a Permission model needs to implement the
         * `Spatie\Permission\Contracts\Permission` contract.
         */

        'permission' => Spatie\Permission\Models\Permission::class,

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission\Contracts\Role` contract.
         */

        'role' => Spatie\Permission\Models\Role::class,

    ],

    'table_names' => [

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'roles' => 'roles',

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * table should be used to retrieve your permissions. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'permissions' => 'permissions',

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * table should be used to retrieve your models permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_permissions' => 'model_has_permissions',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your models roles. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_roles' => 'model_has_roles',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'role_has_permissions' => 'role_has_permissions',
    ],

    'column_names' => [
        /*
         * Change this if you want to name the related pivots other than defaults
         */
        'role_pivot_key' => null, // default 'role_id',
        'permission_pivot_key' => null, // default 'permission_id',

        /*
         * Change this if you want to name the related model primary key other than
         * `model_id`.
         *
         * For example, this would be nice if your primary keys are all UUIDs. In
         * that case, name this `model_uuid`.
         */

        'model_morph_key' => 'model_id',

        /*
         * Change this if you want to use the teams feature and your related model's
         * foreign key is other than `team_id`.
         */

        'team_foreign_key' => 'team_id',
    ],

    /*
     * When set to true, the method for checking permissions will be registered on the gate.
     * Set this to false if you want to implement custom logic for checking permissions.
     */

    'register_permission_check_method' => true,

    /*
     * When set to true, Laravel\Octane\Events\OperationTerminated event listener will be registered
     * this will refresh permissions on every TickTerminated, TaskTerminated and RequestTerminated
     * NOTE: This should not be needed in most cases, but an Octane/Vapor combination benefited from it.
     */
    'register_octane_reset_listener' => false,

    /*
     * Events will fire when a role or permission is assigned/unassigned:
     * \Spatie\Permission\Events\RoleAttached
     * \Spatie\Permission\Events\RoleDetached
     * \Spatie\Permission\Events\PermissionAttached
     * \Spatie\Permission\Events\PermissionDetached
     *
     * To enable, set to true, and then create listeners to watch these events.
     */
    'events_enabled' => false,

    /*
     * Teams Feature.
     * When set to true the package implements teams using the 'team_foreign_key'.
     * If you want the migrations to register the 'team_foreign_key', you must
     * set this to true before doing the migration.
     * If you already did the migration then you must make a new migration to also
     * add 'team_foreign_key' to 'roles', 'model_has_roles', and 'model_has_permissions'
     * (view the latest version of this package's migration file)
     */

    'teams' => false,

    /*
     * The class to use to resolve the permissions team id
     */
    'team_resolver' => \Spatie\Permission\DefaultTeamResolver::class,

    /*
     * Passport Client Credentials Grant
     * When set to true the package will use Passports Client to check permissions
     */

    'use_passport_client_credentials' => false,

    /*
     * When set to true, the required permission names are added to exception messages.
     * This could be considered an information leak in some contexts, so the default
     * setting is false here for optimum safety.
     */

    'display_permission_in_exception' => false,

    /*
     * When set to true, the required role names are added to exception messages.
     * This could be considered an information leak in some contexts, so the default
     * setting is false here for optimum safety.
     */

    'display_role_in_exception' => false,

    /*
     * By default wildcard permission lookups are disabled.
     * See documentation to understand supported syntax.
     */

    'enable_wildcard_permission' => false,

    /*
     * The class to use for interpreting wildcard permissions.
     * If you need to modify delimiters, override the class and specify its name here.
     */
    // 'permission.wildcard_permission' => Spatie\Permission\WildcardPermission::class,

    /* Cache-specific settings */

    'cache' => [

        /*
         * By default all permissions are cached for 24 hours to speed up performance.
         * When permissions or roles are updated the cache is flushed automatically.
         */

        'expiration_time' => \DateInterval::createFromDateString('24 hours'),

        /*
         * The cache key used to store all permissions.
         */

        'key' => 'spatie.permission.cache',

        /*
         * You may optionally indicate a specific cache driver to use for permission and
         * role caching using any of the `store` drivers listed in the cache.php config
         * file. Using 'default' here means to use the `default` set in cache.php.
         */

        'store' => 'default',
    ],
];

```

---

### 📄 `./config/queue.php`

```php
<?php

return [
    'default' => env('QUEUE_CONNECTION', 'database'),
    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],
        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],
        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],
        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],
    ],
    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],
    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],
];

```

---

### 📄 `./config/sanctum.php`

```php
<?php

use Laravel\Sanctum\Sanctum;

return [
    'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
        '%s%s',
        'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
        Sanctum::currentApplicationUrlWithPort()
    ))),
    'guard' => ['web'],
    'expiration' => null,
    'token_prefix' => env('SANCTUM_TOKEN_PREFIX', ''),
    'middleware' => [
        'authenticate_session' => Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
        'encrypt_cookies' => Illuminate\Cookie\Middleware\EncryptCookies::class,
        'validate_csrf_token' => Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
    ],
];

```

---

### 📄 `./config/services.php`

```php
<?php

return [
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],
    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'resend' => [
        'key' => env('RESEND_KEY'),
    ],
    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | WhatsApp Gateway — zedlabs.id
    |--------------------------------------------------------------------------
    | Header : X-Api-Key
    | Body   : number (628xx...), message
    |
    | Endpoint : WHATSAPP_ENDPOINT=https://wapi.zedlabs.id/api/messages/send
    | API Key  : WHATSAPP_API_KEY=<your_key>
    */
    'whatsapp' => [
        'endpoint' => env('WHATSAPP_ENDPOINT'),
        'api_key' => env('WHATSAPP_API_KEY'),
    ],
];

```

---

### 📄 `./config/session.php`

```php
<?php

use Illuminate\Support\Str;

return [
    'driver' => env('SESSION_DRIVER', 'database'),
    'lifetime' => (int) env('SESSION_LIFETIME', 120),
    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),
    'encrypt' => env('SESSION_ENCRYPT', false),
    'files' => storage_path('framework/sessions'),
    'connection' => env('SESSION_CONNECTION'),
    'table' => env('SESSION_TABLE', 'sessions'),
    'store' => env('SESSION_STORE'),
    'lottery' => [2, 100],
    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
    ),
    'path' => env('SESSION_PATH', '/'),
    'domain' => env('SESSION_DOMAIN'),
    'secure' => env('SESSION_SECURE_COOKIE'),
    'http_only' => env('SESSION_HTTP_ONLY', true),
    'same_site' => env('SESSION_SAME_SITE', 'lax'),
    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),
];

```

---

## 🚀 Bootstrap

### 📄 `./bootstrap/app.php`

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

```

---

### 📄 `./bootstrap/providers.php`

```php
<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
];

```

---

## 🌐 Public (Custom)

### 📄 `./public/.htaccess`

```
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Handle X-XSRF-Token Header
    RewriteCond %{HTTP:x-xsrf-token} .
    RewriteRule .* - [E=HTTP_X_XSRF_TOKEN:%{HTTP:X-XSRF-Token}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

```

---

### 📄 `./public/index.php`

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

```

---

### 📄 `./public/js/devonab/filament-easy-footer/filament-easy-footer-scripts.js`

```javascript

```

---

### 📄 `./public/robots.txt`

```
User-agent: *
Disallow:

```

---

## 📦 Root

### 📄 `./composer.json`

```json
{
    "$schema": "https://getcomposer.org/schema.json",
    "name": "laravel/laravel",
    "type": "project",
    "description": "The skeleton application for the Laravel framework.",
    "keywords": ["laravel", "framework"],
    "license": "MIT",
    "require": {
        "php": "^8.2",
        "andreia/filament-nord-theme": "^1.0",
        "barryvdh/laravel-dompdf": "^3.1",
        "bezhansalleh/filament-shield": "^3.3",
        "devonab/filament-easy-footer": "^1.1",
        "diogogpinto/filament-auth-ui-enhancer": "^1.0",
        "filament/filament": "^3.3",
        "flowframe/laravel-trend": "^0.4.0",
        "laravel/framework": "^12.0",
        "laravel/octane": "^2.8",
        "laravel/sanctum": "^4.0",
        "laravel/tinker": "^2.10.1",
        "livewire/livewire": "^3.0",
        "simplesoftwareio/simple-qrcode": "^4.2",
        "torgodly/html2media": "^1.1"
    },
    "require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel-shift/blueprint": "^2.11",
        "laravel/pail": "^1.2.2",
        "laravel/pint": "^1.13",
        "laravel/sail": "^1.41",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.6",
        "pestphp/pest": "^3.7",
        "pestphp/pest-plugin-laravel": "^3.1"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi",
            "@php artisan filament:upgrade"
        ],
        "post-update-cmd": [
            "@php artisan vendor:publish --tag=laravel-assets --ansi --force"
        ],
        "post-root-package-install": [
            "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "@php artisan key:generate --ansi",
            "@php -r \"file_exists('database/database.sqlite') || touch('database/database.sqlite');\"",
            "@php artisan migrate --graceful --ansi"
        ],
        "dev": [
            "Composer\\Config::disableProcessTimeout",
            "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"php artisan pail --timeout=0\" \"npm run dev\" --names=server,queue,logs,vite"
        ]
    },
    "extra": {
        "laravel": {
            "dont-discover": []
        }
    },
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "allow-plugins": {
            "pestphp/pest-plugin": true,
            "php-http/discovery": true
        }
    },
    "minimum-stability": "stable",
    "prefer-stable": true
}

```

---

### 📄 `./.env.example`

```
APP_NAME="PPDB MTSN 1 PANDEGLANG"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_LOCALE=id
APP_FALLBACK_LOCALE=id
APP_FAKER_LOCALE=id_ID
APP_TIMEZONE=Asia/Jakarta
APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4
BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=redis
SESSION_LIFETIME=120
SESSION_ENCRYPT=true
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=redis
CACHE_STORE=redis

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mail.mtsn1pandeglang.sch.id
MAIL_PORT=465
MAIL_USERNAME=adm@mtsn1pandeglang.sch.id
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=adm@mtsn1pandeglang.sch.id
MAIL_FROM_NAME="${APP_NAME}"

WHATSAPP_ENDPOINT=https://wapi.zedlabs.id/api/messages/send
WHATSAPP_API_KEY=

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

```

---

### 📄 `./package.json`

```json
{
    "private": true,
    "type": "module",
    "scripts": {
        "build": "vite build",
        "dev": "vite"
    },
    "devDependencies": {
        "@tailwindcss/forms": "^0.5.10",
        "@tailwindcss/typography": "^0.5.16",
        "@tailwindcss/vite": "^4.0.0",
        "autoprefixer": "^10.4.21",
        "axios": "^1.7.4",
        "concurrently": "^9.0.1",
        "laravel-vite-plugin": "^1.2.0",
        "postcss": "^8.5.3",
        "postcss-nesting": "^13.0.1",
        "tailwindcss": "^3.4.17",
        "vite": "^6.0.11"
    }
}

```

---

### 📄 `./postcss.config.js`

```javascript
export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
};

```

---

### 📄 `./tailwind.config.js`

```javascript
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};

```

---

### 📄 `./vite.config.js`

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/filament/admin/theme.css',
                'vendor/andreia/filament-nord-theme/resources/css/theme.css',
            ],
            refresh: true,
        }),
    ],
});

```

---

