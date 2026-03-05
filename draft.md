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
database/seeders/AnggotaSeeder.php
database/seeders/BendaharaSeeder.php
database/seeders/DatabaseSeeder.php
database/seeders/EkstrakurikulerSeeder.php
database/seeders/JalurPendaftaranSeeder.php
database/seeders/JurusanSeeder.php
database/seeders/KabupatenSeeder.php
database/seeders/KecamatanSeeder.php
database/seeders/KelasSeeder.php
database/seeders/KelurahanSeeder.php
database/seeders/KetuaSeeder.php
database/seeders/MataPelajaranSeeder.php
database/seeders/NegaraSeeder.php
database/seeders/PimpinanSeeder.php
database/seeders/PrestasiSeeder.php
database/seeders/ProvinsiSeeder.php
database/seeders/RoleSeeder.php
database/seeders/SekolahAsalSeeder.php
database/seeders/SekolahSeeder.php
database/seeders/SekretarisSeeder.php
database/seeders/ShieldSeeder.php
database/seeders/TahunPendaftaranSeeder.php
database/seeders/UserSeeder.php
database/.gitignore
routes/api.php
routes/console.php
routes/web.php
resources/views/filament/pages/auth/forgot-password-custom.blade.php
resources/views/filament/pages/auth/new-password.blade.php
resources/views/filament/pages/auth/reset-password-otp.blade.php
resources/views/filament/pages/auth/verifikasi-otp.blade.php
resources/views/formulir.blade.php
resources/views/kartu-tes.blade.php
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
artisan
composer.json
.editorconfig
.env
.env.example
generate.sh
.gitattributes
.gitignore
package.json
phpunit.xml
.pnp.cjs
.pnp.loader.mjs
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
            $tahun = Cache::rememberForever('tahun_pendaftaran_aktif', fn() => TahunPendaftaran::where('status', 'Aktif')->first());
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
        $tahun = Cache::rememberForever('tahun_pendaftaran_aktif', fn() => TahunPendaftaran::where('status', 'Aktif')->first());
        $prefix = 'PPDB-' . ($tahun ? substr($tahun->nama, 0, 4) : date('Y'));

        $last = static::withoutGlobalScopes()
            ->where('nomor_pendaftaran', 'like', $prefix . '-%')
            ->orderByDesc('nomor_pendaftaran')
            ->lockForUpdate()
            ->value('nomor_pendaftaran');

        $seq = $last ? ((int) substr($last, -6)) + 1 : 1;
        return $prefix . '-' . str_pad($seq, 6, '0', STR_PAD_LEFT);
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
        $flushCache = fn() => Cache::forget('tahun_pendaftaran_aktif');
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
            return asset('storage/'.$this->avatar);
        }

        // Prioritas 2: foto formal dari formulir pendaftaran (khusus calon_siswa)
        $foto = $this->calonSiswa?->berkas_foto;
        if ($foto) {
            return asset('storage/'.$foto);
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

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    public function send(string $phone, string $message): bool
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

    /**
     * Normalisasi nomor: 08xx → 628xx
     */
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
use App\Models\Sekolah;
use App\Models\Pimpinan;
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
        return once(fn() => Sekolah::first());
    }

    public static function tahunAktif(): ?TahunPendaftaran
    {
        return once(fn() => TahunPendaftaran::where('status', 'Aktif')->first());
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
        'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
        'Diverifikasi' => 'Diverifikasi',
        'Tidak Diterima' => 'Tidak Diterima',
        'Diterima' => 'Diterima',
        'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
        'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
    ];

    public const STATUS_PENDAFTARAN_REGULAR = [
        'Diproses' => 'Diproses',
        'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
        'Diverifikasi' => 'Diverifikasi',
    ];

    public const STATUS_FORMULIR = [
        'Diproses' => 'Diproses',
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

## 🧩 Filament Resources

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
        $label     = $this->panitiaLabel ?? 'Panitia';
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
                                ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
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
            ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
            ->required()
            ->validationMessages(['required' => 'Form ini wajib diisi.'])
            ->native(false)
            ->live()
            ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}");
    }

    protected function getNamaField(): TextInput
    {
        return TextInput::make('nama')
            ->label('Nama Lengkap')
            ->required()
            ->disabledOn('create')
            ->dehydrated()
            ->default(fn() => Auth::user()->name)
            ->validationMessages(['required' => 'Form ini wajib diisi.']);
    }

    protected function getNikField(): TextInput
    {
        return TextInput::make('nik')
            ->label('Nomor Induk Kependudukan (NIK)')
            ->required()
            ->unique(ignoreRecord: true)
            ->dehydrateStateUsing(fn($state) => $state ?: null)
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
            ->default(fn() => Auth::user()->username)
            ->unique(ignoreRecord: true)
            ->dehydrateStateUsing(fn($state) => $state ?: null)
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
                ->options(fn(Get $get): Collection => Provinsi::query()
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
                ->options(fn(Get $get): Collection => Kabupaten::query()
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
                ->options(fn(Get $get): Collection => Kecamatan::query()
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
                ->options(fn(Get $get): Collection => Kelurahan::query()
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
            ->directory(fn($get) => "berkas/{$type}/" . $get('nisn'))
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
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
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
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
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
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
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
            ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
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
                            ->options(fn() => FormOptions::jenjangSekolahAsal(Sekolah::first()?->jenjang)),

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
                            ->visible(fn($get) => in_array($get('jenjang'), ['MI', 'MTS', 'MA']))
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
        return Section::make('Formulir Pendaftaran')
            ->schema([
                Select::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options(fn() => Auth::user()->hasRole('super_admin')
                        ? FormOptions::STATUS_PENDAFTARAN_SUPER_ADMIN
                        : FormOptions::STATUS_PENDAFTARAN_REGULAR)
                    ->native(false)
                    ->live()
                    ->default('Diproses'),

                Select::make('kelas_id')
                    ->label('Kelas')
                    ->visible(fn($get) => in_array($get('status_pendaftaran'), [
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan',
                    ]))
                    ->relationship('kelas', 'nama')
                    ->native(false),
            ])
            ->visible(Auth::user()->roles->first()->name !== 'calon_siswa')
            ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]);
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
        $steps = [
            Wizard\Step::make('Data Calon Siswa')
                ->schema([
                    ...($includeStatusSection ? [$this->getStatusFormulirSection()] : []),

                    Tabs::make('Biodata')
                        ->tabs([
                            $this->getDataCalonSiswaTab(),
                            $this->getAlamatTab('siswa'),
                            $this->getBerkasTab(),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),

            Wizard\Step::make('Data Orang Tua')
                ->schema([
                    $this->getOrangTuaTabs('ibu', 'Ibu Kandung'),
                    $this->getOrangTuaTabs('ayah', 'Ayah Kandung'),
                    $this->getOrangTuaTabs('wali', 'Wali', false),
                    $this->getKepemilikanRumahSection(),
                ])
                ->columnSpanFull(),
        ];

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
                    fn($get) => $get('no_kip') !== null,
                    '<small><i>Abaikan jika tidak memiliki KIP.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_kip') !== null),

                $this->getBerkasField(
                    'kks',
                    'Kartu Keluarga Sejahtera',
                    fn($get) => $get('no_kks') !== null,
                    '<small><i>Abaikan jika tidak memiliki KKS.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_kks') !== null),

                $this->getBerkasField(
                    'pkh',
                    'Kartu Program Keluarga Harapan',
                    fn($get) => $get('no_pkh') !== null,
                    '<small><i>Abaikan jika tidak memiliki PKH.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_pkh') !== null),
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
