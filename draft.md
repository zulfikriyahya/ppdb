# Laravel Project Blueprint - PMBM MTsN 1 Pandeglang

> Auto-generated. Berisi seluruh file inti project.
> Dikecualikan: node_modules, vendor, tests, .yarn, public/vendor,
>               public/build, storage, bootstrap/cache, dan file biner.

## File Tree

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
app/Observers/CalonSiswaObserver.php
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
app/Services/OtpMessageService.php
app/Services/WhatsAppService.php
app/Jobs/SendWhatsAppJob.php
app/Helpers/PdfDataHelper.php
app/Constants/FormOptions.php
app/Http/Controllers/Controller.php
app/Http/Controllers/FormulirController.php
app/Http/Controllers/LandingController.php
app/Filament/Resources/AnggotaResource/Pages/CreateAnggota.php
app/Filament/Resources/AnggotaResource/Pages/EditAnggota.php
app/Filament/Resources/AnggotaResource/Pages/ListAnggotas.php
app/Filament/Resources/AnggotaResource/Pages/ViewAnggota.php
app/Filament/Resources/BendaharaResource/Pages/CreateBendahara.php
app/Filament/Resources/BendaharaResource/Pages/EditBendahara.php
app/Filament/Resources/BendaharaResource/Pages/ListBendaharas.php
app/Filament/Resources/BendaharaResource/Pages/ViewBendahara.php
app/Filament/Resources/CalonSiswaResource/Pages/CreateCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Pages/EditCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Pages/ListCalonSiswas.php
app/Filament/Resources/CalonSiswaResource/Pages/ViewCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Widgets/FormulirOverview.php
app/Filament/Resources/EkstrakurikulerResource/Pages/CreateEkstrakurikuler.php
app/Filament/Resources/EkstrakurikulerResource/Pages/EditEkstrakurikuler.php
app/Filament/Resources/EkstrakurikulerResource/Pages/ListEkstrakurikulers.php
app/Filament/Resources/EkstrakurikulerResource/Pages/ViewEkstrakurikuler.php
app/Filament/Resources/FormulirPrestasiResource/Pages/CreateFormulirPrestasi.php
app/Filament/Resources/FormulirPrestasiResource/Pages/EditFormulirPrestasi.php
app/Filament/Resources/FormulirPrestasiResource/Pages/ListFormulirPrestasis.php
app/Filament/Resources/FormulirPrestasiResource/Pages/ViewFormulirPrestasi.php
app/Filament/Resources/InformasiResource/Pages/CreateInformasi.php
app/Filament/Resources/InformasiResource/Pages/EditInformasi.php
app/Filament/Resources/InformasiResource/Pages/ListInformasis.php
app/Filament/Resources/InformasiResource/Pages/ViewInformasi.php
app/Filament/Resources/InformasiResource/Widgets/InformasiPublished.php
app/Filament/Resources/JalurPendaftaranResource/Pages/CreateJalurPendaftaran.php
app/Filament/Resources/JalurPendaftaranResource/Pages/EditJalurPendaftaran.php
app/Filament/Resources/JalurPendaftaranResource/Pages/ListJalurPendaftarans.php
app/Filament/Resources/JalurPendaftaranResource/Pages/ViewJalurPendaftaran.php
app/Filament/Resources/JurusanResource/Pages/CreateJurusan.php
app/Filament/Resources/JurusanResource/Pages/EditJurusan.php
app/Filament/Resources/JurusanResource/Pages/ListJurusans.php
app/Filament/Resources/JurusanResource/Pages/ViewJurusan.php
app/Filament/Resources/KabupatenResource/Pages/CreateKabupaten.php
app/Filament/Resources/KabupatenResource/Pages/EditKabupaten.php
app/Filament/Resources/KabupatenResource/Pages/ListKabupatens.php
app/Filament/Resources/KabupatenResource/Pages/ViewKabupaten.php
app/Filament/Resources/KecamatanResource/Pages/CreateKecamatan.php
app/Filament/Resources/KecamatanResource/Pages/EditKecamatan.php
app/Filament/Resources/KecamatanResource/Pages/ListKecamatans.php
app/Filament/Resources/KecamatanResource/Pages/ViewKecamatan.php
app/Filament/Resources/KelasResource/Pages/CreateKelas.php
app/Filament/Resources/KelasResource/Pages/EditKelas.php
app/Filament/Resources/KelasResource/Pages/ListKelas.php
app/Filament/Resources/KelasResource/Pages/ViewKelas.php
app/Filament/Resources/KelurahanResource/Pages/CreateKelurahan.php
app/Filament/Resources/KelurahanResource/Pages/EditKelurahan.php
app/Filament/Resources/KelurahanResource/Pages/ListKelurahans.php
app/Filament/Resources/KelurahanResource/Pages/ViewKelurahan.php
app/Filament/Resources/KetuaResource/Pages/CreateKetua.php
app/Filament/Resources/KetuaResource/Pages/EditKetua.php
app/Filament/Resources/KetuaResource/Pages/ListKetuas.php
app/Filament/Resources/KetuaResource/Pages/ViewKetua.php
app/Filament/Resources/MataPelajaranResource/Pages/CreateMataPelajaran.php
app/Filament/Resources/MataPelajaranResource/Pages/EditMataPelajaran.php
app/Filament/Resources/MataPelajaranResource/Pages/ListMataPelajarans.php
app/Filament/Resources/MataPelajaranResource/Pages/ViewMataPelajaran.php
app/Filament/Resources/NegaraResource/Pages/CreateNegara.php
app/Filament/Resources/NegaraResource/Pages/EditNegara.php
app/Filament/Resources/NegaraResource/Pages/ListNegaras.php
app/Filament/Resources/NegaraResource/Pages/ViewNegara.php
app/Filament/Resources/PimpinanResource/Pages/CreatePimpinan.php
app/Filament/Resources/PimpinanResource/Pages/EditPimpinan.php
app/Filament/Resources/PimpinanResource/Pages/ListPimpinans.php
app/Filament/Resources/PimpinanResource/Pages/ViewPimpinan.php
app/Filament/Resources/PrestasiResource/Pages/CreatePrestasi.php
app/Filament/Resources/PrestasiResource/Pages/EditPrestasi.php
app/Filament/Resources/PrestasiResource/Pages/ListPrestasis.php
app/Filament/Resources/PrestasiResource/Pages/ViewPrestasi.php
app/Filament/Resources/ProvinsiResource/Pages/CreateProvinsi.php
app/Filament/Resources/ProvinsiResource/Pages/EditProvinsi.php
app/Filament/Resources/ProvinsiResource/Pages/ListProvinsis.php
app/Filament/Resources/ProvinsiResource/Pages/ViewProvinsi.php
app/Filament/Resources/RoleResource/Pages/CreateRole.php
app/Filament/Resources/RoleResource/Pages/EditRole.php
app/Filament/Resources/RoleResource/Pages/ListRoles.php
app/Filament/Resources/RoleResource/Pages/ViewRole.php
app/Filament/Resources/SekolahAsalResource/Concerns/HasSekolahAsalWizardSteps.php
app/Filament/Resources/SekolahAsalResource/Pages/CreateSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/EditSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/ListSekolahAsals.php
app/Filament/Resources/SekolahAsalResource/Pages/ViewSekolahAsal.php
app/Filament/Resources/SekolahResource/Concerns/HasSekolahWizardSteps.php
app/Filament/Resources/SekolahResource/Pages/CreateSekolah.php
app/Filament/Resources/SekolahResource/Pages/EditSekolah.php
app/Filament/Resources/SekolahResource/Pages/ListSekolahs.php
app/Filament/Resources/SekolahResource/Pages/ViewSekolah.php
app/Filament/Resources/SekretarisResource/Pages/CreateSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/EditSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/ListSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/ViewSekretaris.php
app/Filament/Resources/TahunPendaftaranResource/Pages/CreateTahunPendaftaran.php
app/Filament/Resources/TahunPendaftaranResource/Pages/EditTahunPendaftaran.php
app/Filament/Resources/TahunPendaftaranResource/Pages/ListTahunPendaftarans.php
app/Filament/Resources/TahunPendaftaranResource/Pages/ViewTahunPendaftaran.php
app/Filament/Resources/UserResource/Pages/CreateUser.php
app/Filament/Resources/UserResource/Pages/EditUser.php
app/Filament/Resources/UserResource/Pages/ListUsers.php
app/Filament/Resources/UserResource/Pages/ViewUser.php
app/Filament/Resources/UserResource/Widgets/UserRegisters.php
app/Filament/Resources/AnggotaResource.php
app/Filament/Resources/BendaharaResource.php
app/Filament/Resources/CalonSiswaResource.php
app/Filament/Resources/EkstrakurikulerResource.php
app/Filament/Resources/FormulirPrestasiResource.php
app/Filament/Resources/InformasiResource.php
app/Filament/Resources/JalurPendaftaranResource.php
app/Filament/Resources/JurusanResource.php
app/Filament/Resources/KabupatenResource.php
app/Filament/Resources/KecamatanResource.php
app/Filament/Resources/KelasResource.php
app/Filament/Resources/KelurahanResource.php
app/Filament/Resources/KetuaResource.php
app/Filament/Resources/MataPelajaranResource.php
app/Filament/Resources/NegaraResource.php
app/Filament/Resources/PimpinanResource.php
app/Filament/Resources/PrestasiResource.php
app/Filament/Resources/ProvinsiResource.php
app/Filament/Resources/RoleResource.php
app/Filament/Resources/SekolahAsalResource.php
app/Filament/Resources/SekolahResource.php
app/Filament/Resources/SekretarisResource.php
app/Filament/Resources/TahunPendaftaranResource.php
app/Filament/Resources/UserResource.php
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
routes/api.php
routes/console.php
routes/web.php
resources/views/filament/pages/auth/edit-profile.blade.php
resources/views/filament/pages/auth/forgot-password.blade.php
resources/views/filament/pages/auth/login.blade.php
resources/views/filament/pages/auth/new-password.blade.php
resources/views/filament/pages/auth/register.blade.php
resources/views/filament/pages/auth/reset-password-otp.blade.php
resources/views/filament/pages/auth/verifikasi-otp.blade.php
resources/views/partials/pdf-header.blade.php
resources/views/components/auth-wrapper.blade.php
resources/views/formulir.blade.php
resources/views/kartu-tes.blade.php
resources/views/landing.blade.php
resources/views/skl.blade.php
resources/views/vendor/filament-easy-footer/easy-footer.blade.php
resources/views/vendor/filament-easy-footer/github-version.blade.php
resources/views/vendor/filament-easy-footer/.gitkeep
resources/css/app.css
resources/css/filament/dashboard/tailwind.config.js
resources/css/filament/dashboard/theme.css
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
public/js/devonab/filament-easy-footer/filament-easy-footer-scripts.js
public/.htaccess
public/index.php
public/robots.txt
composer.json
.env.example
juknis-bersama.md
juknis-mandiri.md
konsep.md
lirik.md
package.json
postcss.config.js
ringkasan.md
SRS-Bersama.md
SRS-Mandiri.md
SRS-System.md
tailwind.config.js
vite.config.js
```

---

## Models

### ./app/Models/Anggota.php

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

### ./app/Models/Bendahara.php

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

### ./app/Models/CalonSiswa.php

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
        'no_sktm',
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
        'berkas_sktm',
        'berkas_faktur_listrik',
        'berkas_rumah_depan',
        'berkas_rumah_dalam',
        'berkas_rumah_belakang',
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
        $prefix = 'PMBM-' . ($tahun ? substr($tahun->nama, 0, 4) : date('Y'));

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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->ayah_status !== 'Meninggal' || $model->ibu_status !== 'Meninggal') {
                $model->wali_status = null; // kosongkan jika wali tidak relevan
            }
        });
    }
}

```

---

### ./app/Models/Ekstrakurikuler.php

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

### ./app/Models/FormulirPrestasi.php

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

### ./app/Models/Informasi.php

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

### ./app/Models/JalurPendaftaran.php

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

### ./app/Models/Jurusan.php

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

### ./app/Models/Kabupaten.php

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

### ./app/Models/Kecamatan.php

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

### ./app/Models/Kelas.php

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

### ./app/Models/Kelurahan.php

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

### ./app/Models/Ketua.php

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

### ./app/Models/MataPelajaran.php

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

### ./app/Models/Negara.php

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

### ./app/Models/Pimpinan.php

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

### ./app/Models/Prestasi.php

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

### ./app/Models/Provinsi.php

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

### ./app/Models/SekolahAsal.php

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

### ./app/Models/Sekolah.php

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

### ./app/Models/Sekretaris.php

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

### ./app/Models/TahunPendaftaran.php

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

### ./app/Models/User.php

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

## Observers

### ./app/Observers/CalonSiswaObserver.php

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
                    ."Segera lengkapi berkas melalui sistem PMBM.\n\n"
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

## Policies

### ./app/Policies/AnggotaPolicy.php

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

### ./app/Policies/BendaharaPolicy.php

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

### ./app/Policies/CalonSiswaPolicy.php

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

### ./app/Policies/EkstrakurikulerPolicy.php

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

### ./app/Policies/InformasiPolicy.php

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

### ./app/Policies/JalurPendaftaranPolicy.php

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

### ./app/Policies/JurusanPolicy.php

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

### ./app/Policies/KabupatenPolicy.php

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

### ./app/Policies/KecamatanPolicy.php

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

### ./app/Policies/KelasPolicy.php

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

### ./app/Policies/KelurahanPolicy.php

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

### ./app/Policies/KetuaPolicy.php

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

### ./app/Policies/MataPelajaranPolicy.php

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

### ./app/Policies/NegaraPolicy.php

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

### ./app/Policies/PimpinanPolicy.php

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

### ./app/Policies/PrestasiPolicy.php

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

### ./app/Policies/ProvinsiPolicy.php

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

### ./app/Policies/RolePolicy.php

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

### ./app/Policies/SekolahAsalPolicy.php

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

### ./app/Policies/SekolahPolicy.php

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

### ./app/Policies/SekretarisPolicy.php

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

### ./app/Policies/TahunPendaftaranPolicy.php

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

### ./app/Policies/UserPolicy.php

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

## Services

### ./app/Services/OtpMessageService.php

```php
<?php

namespace App\Services;

class OtpMessageService
{
    public static function verifikasi(string $name, string $otp): string
    {
        return "Halo {$name},\n\n"
            . "Kode OTP verifikasi akun PMBM MTsN 1 Pandeglang Anda:\n\n"
            . "*{$otp}*\n\n"
            . 'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';
    }

    public static function resetPassword(string $name, string $otp): string
    {
        return "Halo {$name},\n\n"
            . "Kode OTP reset password PMBM MTsN 1 Pandeglang Anda:\n\n"
            . "*{$otp}*\n\n"
            . 'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';
    }

    public static function passwordBerhasilDiubah(string $name): string
    {
        return "Halo {$name},\n\n"
            . "Password akun PMBM MTsN 1 Pandeglang Anda telah berhasil diubah.\n\n"
            . 'Jika Anda tidak merasa melakukan perubahan ini, segera hubungi panitia PMBM.';
    }
}

```

---

### ./app/Services/WhatsAppService.php

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

## Jobs

### ./app/Jobs/SendWhatsAppJob.php

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

## Helpers

### ./app/Helpers/PdfDataHelper.php

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

## Constants

### ./app/Constants/FormOptions.php

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
        'TT' => 'TT (Tidak Terakreditasi)',
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
        $tahun = range(date('Y'), date('Y') - 1);

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

## Http - Controllers

### ./app/Http/Controllers/Controller.php

```php
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

```

---

### ./app/Http/Controllers/FormulirController.php

```php
<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use App\Models\Ketua;
use App\Models\Pimpinan;
use App\Models\Sekretaris;
use App\Models\TahunPendaftaran;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Fluent;

class FormulirController extends Controller
{
    // =========================================================================
    // SHARED
    // =========================================================================

    private function getTahun(): ?TahunPendaftaran
    {
        return TahunPendaftaran::where('status', 'Aktif')->first();
    }

    private function getInstansi(): Fluent
    {
        return new Fluent([
            'nama'           => 'MTs Negeri 1 Pandeglang',
            'alamat'         => 'Jl. Raya Labuan',
            'website'        => 'mtsn1pandeglang.sch.id',
            'email'          => 'adm@mtsn1pandeglang.sch.id',
            'telepon'        => '+62 8953-5185-6267',
            'nomor_surat'    => null,
            'logo'           => asset('img/logo.png'),
            'logo_institusi' => asset('img/logo-institusi.png'),
            'kabupaten'      => new Fluent(['nama' => 'Pandeglang']),
            'kecamatan'      => new Fluent(['nama' => 'Kaduhejo']),
            'kelurahan'      => new Fluent(['nama' => 'Palurahan']),
            'provinsi'       => new Fluent(['nama' => 'Banten']),
        ]);
    }

    private function getViewData(CalonSiswa $record): array
    {
        $tahunPendaftaran = $this->getTahun();

        $ketua = Ketua::where('tahun_pendaftaran_id', $tahunPendaftaran?->id)
            ->where('status', 'Aktif')
            ->first();

        $sekretaris = Sekretaris::where('tahun_pendaftaran_id', $tahunPendaftaran?->id)
            ->where('status', 'Aktif')
            ->first();

        $pimpinan = Pimpinan::where('tahun_pendaftaran_id', $tahunPendaftaran?->id)
            ->where('status', 'Aktif')
            ->first();

        return compact('record', 'tahunPendaftaran', 'ketua', 'sekretaris', 'pimpinan')
            + ['instansi' => $this->getInstansi()];
    }

    private function authorize(CalonSiswa $calonSiswa): void
    {
        if (
            Auth::user()->hasRole('calon_siswa') &&
            $calonSiswa->user_id !== Auth::id()
        ) {
            abort(403, 'Anda tidak memiliki akses.');
        }
    }

    private function loadRelasi(CalonSiswa $calonSiswa): void
    {
        $calonSiswa->load([
            'jalurPendaftaran',
            'sekolahAsal',
            'siswaKelurahan',
            'siswaKecamatan',
            'siswaKabupaten',
            'siswaProvinsi',
            'formulirPrestasis.prestasi',
        ]);
    }

    // =========================================================================
    // CETAK FORMULIR
    // =========================================================================

    public function cetak(CalonSiswa $calonSiswa)
    {
        $this->authorize($calonSiswa);

        if ($calonSiswa->status_formulir !== 'Disetujui') {
            abort(403, 'Formulir belum disetujui.');
        }

        $this->loadRelasi($calonSiswa);

        return view('formulir', $this->getViewData($calonSiswa));
    }

    // =========================================================================
    // CETAK KARTU TES
    // =========================================================================

    public function cetakKartuTes(CalonSiswa $calonSiswa)
    {
        $this->authorize($calonSiswa);

        if ($calonSiswa->status_formulir !== 'Disetujui') {
            abort(403, 'Formulir belum disetujui.');
        }

        if (in_array($calonSiswa->status_pendaftaran, [
            'Tidak Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
        ])) {
            abort(403, 'Kartu tes tidak tersedia untuk status pendaftaran ini.');
        }

        $tahun = $this->getTahun();

        if (
            ! $tahun?->tanggal_penerbitan_kartu_tes_mulai ||
            ! $tahun?->tanggal_penerbitan_kartu_tes_selesai ||
            ! Carbon::now()->between(
                Carbon::parse($tahun->tanggal_penerbitan_kartu_tes_mulai),
                Carbon::parse($tahun->tanggal_penerbitan_kartu_tes_selesai)
            )
        ) {
            abort(403, 'Kartu tes belum atau sudah tidak dapat dicetak.');
        }

        $this->loadRelasi($calonSiswa);

        return view('kartu-tes', $this->getViewData($calonSiswa));
    }

    // =========================================================================
    // CETAK SKL / PENGUMUMAN HASIL
    // =========================================================================

    public function cetakSkl(CalonSiswa $calonSiswa)
    {
        $this->authorize($calonSiswa);

        if (! in_array($calonSiswa->status_pendaftaran, [
            'Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
            'Tidak Diterima',
        ])) {
            abort(403, 'Pengumuman hasil belum tersedia.');
        }

        $tahun   = $this->getTahun();
        $periodes = [
            ['tanggal_pengumuman_jalur_prestasi_mulai',  'tanggal_pengumuman_jalur_prestasi_selesai'],
            ['tanggal_pengumuman_jalur_reguler_mulai',   'tanggal_pengumuman_jalur_reguler_selesai'],
            ['tanggal_pengumuman_jalur_afirmasi_mulai',  'tanggal_pengumuman_jalur_afirmasi_selesai'],
            ['tanggal_pengumuman_jalur_zonasi_mulai',    'tanggal_pengumuman_jalur_zonasi_selesai'],
            ['tanggal_pengumuman_jalur_mutasi_mulai',    'tanggal_pengumuman_jalur_mutasi_selesai'],
        ];

        $dalamPeriode = false;
        foreach ($periodes as [$mulai, $selesai]) {
            if (
                $tahun?->{$mulai} && $tahun?->{$selesai} &&
                Carbon::now()->between(
                    Carbon::parse($tahun->{$mulai}),
                    Carbon::parse($tahun->{$selesai})
                )
            ) {
                $dalamPeriode = true;
                break;
            }
        }

        if (! $dalamPeriode) {
            abort(403, 'Pengumuman hasil belum atau sudah tidak dapat dicetak.');
        }

        $this->loadRelasi($calonSiswa);

        return view('skl', $this->getViewData($calonSiswa));
    }
}

```

---

### ./app/Http/Controllers/LandingController.php

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
            fn () => TahunPendaftaran::where('status', 'Aktif')->first()
        );

        $jalurs = Cache::remember(
            'landing:jalur_aktif',
            300,
            fn () => JalurPendaftaran::where('status', 'Aktif')
                ->with('tahunPendaftaran')
                ->when($tahun, fn ($q) => $q->where('tahun_pendaftaran_id', $tahun->id))
                ->withCount(['calonSiswas as terisi'])
                ->get()
        );

        $informasis = Cache::remember(
            'landing:informasi',
            120,
            fn () => Informasi::where('status', 'Publish')
                ->when($tahun, fn ($q) => $q->where('tahun_pendaftaran_id', $tahun->id))
                ->latest('tanggal')
                ->limit(3)
                ->get()
        );

        return view('landing', compact('tahun', 'jalurs', 'informasis'));
    }
}

```

---

## Filament Resource - Anggota

### ./app/Filament/Resources/AnggotaResource/Pages/CreateAnggota.php

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

### ./app/Filament/Resources/AnggotaResource/Pages/EditAnggota.php

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

### ./app/Filament/Resources/AnggotaResource/Pages/ListAnggotas.php

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

### ./app/Filament/Resources/AnggotaResource/Pages/ViewAnggota.php

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

## Filament Resource - Bendahara

### ./app/Filament/Resources/BendaharaResource/Pages/CreateBendahara.php

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

### ./app/Filament/Resources/BendaharaResource/Pages/EditBendahara.php

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

### ./app/Filament/Resources/BendaharaResource/Pages/ListBendaharas.php

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

### ./app/Filament/Resources/BendaharaResource/Pages/ViewBendahara.php

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

## Filament Resource - CalonSiswa

### ./app/Filament/Resources/CalonSiswaResource/Pages/CreateCalonSiswa.php

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

### ./app/Filament/Resources/CalonSiswaResource/Pages/EditCalonSiswa.php

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

### ./app/Filament/Resources/CalonSiswaResource/Pages/ListCalonSiswas.php

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
        $baseUrl = '/dashboard/formulir';

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
        $visibleStatuses = ['Disetujui'];

        return Action::make('lihat_formulir_pendaftaran')
            ->label('Lihat')
            ->icon('heroicon-m-eye')
            ->outlined()
            ->url($this->getFormulirUrl($calonSiswa, 'view'))
            ->color(Color::Zinc)
            ->hidden(
                ! $this->isCalonSiswa()
                    || $calonSiswa === null
                    || ! in_array($calonSiswa->status_formulir, $visibleStatuses)
            );
    }

    private function getUbahFormulirAction(?CalonSiswa $calonSiswa): Action
    {
        $visibleStatuses = [
            'Diproses',
            'Berkas Tidak Lengkap',
            'Ditolak',
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
                    || ! in_array($calonSiswa->status_formulir, $visibleStatuses)
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
            ->visible(fn() => CalonSiswa::count() > 0 && ! $this->isCalonSiswa());
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

### ./app/Filament/Resources/CalonSiswaResource/Pages/ViewCalonSiswa.php

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;

class ViewCalonSiswa extends ViewRecord
{
    use CalonSiswaFormTrait;

    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make($this->getAllSteps(
                includeStatusSection: true,
                includeDataTes: false
            ))->columnSpanFull(),

            Section::make('Data Formulir Prestasi')
                ->icon('heroicon-o-trophy')
                ->collapsible()
                ->columnSpanFull()
                ->visible(fn() => $this->record->formulirPrestasis()->exists())
                ->schema([
                    Repeater::make('formulirPrestasis')
                        ->relationship('formulirPrestasis')
                        ->addable(false)
                        ->deletable(false)
                        ->reorderable(false)
                        ->label('')
                        ->schema([
                            TextInput::make('nama_prestasi')
                                ->label('Nama / Judul Prestasi')
                                ->disabled(),

                            Select::make('prestasi_id')
                                ->label('Jenis Prestasi')
                                ->relationship('prestasi', 'nama')
                                ->disabled(),

                            TextInput::make('tahun_prestasi')
                                ->label('Tahun')
                                ->disabled(),

                            TextInput::make('penyelenggara_prestasi')
                                ->label('Penyelenggara')
                                ->disabled(),

                            FileUpload::make('berkas_prestasi')
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
}

```

---

### ./app/Filament/Resources/CalonSiswaResource/Widgets/FormulirOverview.php

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Widgets;

use App\Models\CalonSiswa;
use Carbon\Carbon;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormulirOverview extends BaseWidget
{
    protected static bool $isLazy = false;

    protected ?string $heading = 'Statistik Pendaftaran';

    protected static ?int $sort = 0;

    protected static ?string $pollingInterval = '60s';

    // =========================================================================
    // HELPERS
    // =========================================================================

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
        string $href,
        bool $newTab = false
    ): Stat {
        $onclick = $newTab
            ? "window.open('{$href}', '_blank')"
            : "window.location.href='{$href}'";

        return Stat::make('', $value)
            ->description($label)
            ->descriptionIcon($icon, IconPosition::Before)
            ->color($color)
            ->chart($chart)
            ->extraAttributes([
                'class'   => 'cursor-pointer transition hover:opacity-80',
                'onclick' => $onclick,
            ]);
    }

    private function url(string $filter = ''): string
    {
        return "/dashboard/formulir{$filter}";
    }

    // =========================================================================
    // CETAK HELPERS
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
        if (! $t) return false;

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

    private function canPrintKartuTes(CalonSiswa $cs): bool
    {
        if ($cs->status_formulir !== 'Disetujui') return false;

        if (in_array($cs->status_pendaftaran, [
            'Tidak Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
        ])) return false;

        return $this->isWithinKartuTesPeriod();
    }

    private function canPrintHasil(CalonSiswa $cs): bool
    {
        if (! in_array($cs->status_pendaftaran, [
            'Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
            'Tidak Diterima',
        ])) return false;

        return $this->isWithinPengumumanPeriod();
    }

    // =========================================================================
    // STATS
    // =========================================================================

    protected function getStats(): array
    {
        $user         = Auth::user();
        $isCalonSiswa = $user->hasRole('calon_siswa');

        $statusCount = CalonSiswa::selectRaw('status_pendaftaran, COUNT(*) as total')
            ->groupBy('status_pendaftaran')
            ->pluck('total', 'status_pendaftaran')
            ->toArray();

        $formulirCount = CalonSiswa::selectRaw('status_formulir, COUNT(*) as total')
            ->groupBy('status_formulir')
            ->pluck('total', 'status_formulir')
            ->toArray();

        $totalPendaftar  = array_sum($statusCount);
        $diproses        = $statusCount['Diproses'] ?? 0;
        $diterima        = $statusCount['Diterima'] ?? 0;
        $diterimaReguler = $statusCount['Diterima Di Kelas Reguler'] ?? 0;
        $diterimaUnggulan = $statusCount['Diterima Di Kelas Unggulan'] ?? 0;
        $tidakDiterima   = $statusCount['Tidak Diterima'] ?? 0;

        $fDiproses  = $formulirCount['Diproses'] ?? 0;
        $fBerkas    = $formulirCount['Berkas Tidak Lengkap'] ?? 0;
        $fDisetujui = $formulirCount['Disetujui'] ?? 0;
        $fDitolak   = $formulirCount['Ditolak'] ?? 0;

        // ── CALON SISWA ───────────────────────────────────────────────────────
        if ($isCalonSiswa) {
            $cs = CalonSiswa::withoutGlobalScope('tahun_aktif')
                ->where('user_id', $user->id)
                ->latest()
                ->first();

            $statusLabel   = $cs?->status_pendaftaran ?? 'Belum Mendaftar';
            $formulirLabel = $cs?->status_formulir    ?? 'Daftar Sekarang!';

            [$statusColor, $statusIcon] = match ($cs?->status_pendaftaran) {
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan' => ['success', 'heroicon-o-check-circle'],
                'Tidak Diterima'             => ['danger',  'heroicon-o-no-symbol'],
                default                      => ['warning', 'heroicon-o-arrow-path'],
            };

            [$formulirColor, $formulirIcon] = match ($cs?->status_formulir) {
                'Disetujui'           => ['success', 'heroicon-o-document-check'],
                'Berkas Tidak Lengkap',
                'Ditolak'             => ['danger', match ($cs?->status_formulir) {
                    'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                    default                => 'heroicon-o-x-circle',
                }],
                default               => ['warning', 'heroicon-o-arrow-path'],
            };

            $stats = [
                $this->makeStat(
                    "{$totalPendaftar} Peserta",
                    'Total Pendaftar',
                    'heroicon-o-users',
                    'gray',
                    $this->chartBy('status_pendaftaran'),
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
                $this->makeStat(
                    $statusLabel,
                    'Status Pendaftaran Kamu',
                    $statusIcon,
                    $statusColor,
                    $this->chartBy('status_pendaftaran', $cs?->status_pendaftaran),
                    $this->url()
                ),
            ];

            if ($cs) {
                // Cetak Formulir
                if ($cs->status_formulir === 'Disetujui') {
                    $stats[] = $this->makeStat(
                        'Cetak Formulir',
                        'Klik untuk mencetak formulir pendaftaran',
                        'heroicon-o-printer',
                        'info',
                        [],
                        route('formulir.cetak', $cs->id),
                        newTab: true
                    );
                }

                // Cetak Kartu Tes
                if ($this->canPrintKartuTes($cs)) {
                    $stats[] = $this->makeStat(
                        'Cetak Kartu Tes',
                        'Klik untuk mencetak kartu tes',
                        'heroicon-o-identification',
                        'warning',
                        [],
                        route('kartu-tes.cetak', $cs->id),
                        newTab: true
                    );
                }

                // Cetak SKL / Pengumuman Hasil
                if ($this->canPrintHasil($cs)) {
                    $stats[] = $this->makeStat(
                        'Cetak Hasil',
                        'Klik untuk mencetak pengumuman hasil',
                        'heroicon-o-document-text',
                        match ($cs->status_pendaftaran) {
                            'Diterima',
                            'Diterima Di Kelas Reguler',
                            'Diterima Di Kelas Unggulan' => 'success',
                            default                      => 'danger',
                        },
                        [],
                        route('skl.cetak', $cs->id),
                        newTab: true
                    );
                }
            }

            return $stats;
        }

        // ── ADMIN / STAFF ─────────────────────────────────────────────────────
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

## Filament Resource - Ekstrakurikuler

### ./app/Filament/Resources/EkstrakurikulerResource/Pages/CreateEkstrakurikuler.php

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

### ./app/Filament/Resources/EkstrakurikulerResource/Pages/EditEkstrakurikuler.php

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

### ./app/Filament/Resources/EkstrakurikulerResource/Pages/ListEkstrakurikulers.php

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

### ./app/Filament/Resources/EkstrakurikulerResource/Pages/ViewEkstrakurikuler.php

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

## Filament Resource - FormulirPrestasi

### ./app/Filament/Resources/FormulirPrestasiResource/Pages/CreateFormulirPrestasi.php

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

### ./app/Filament/Resources/FormulirPrestasiResource/Pages/EditFormulirPrestasi.php

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

### ./app/Filament/Resources/FormulirPrestasiResource/Pages/ListFormulirPrestasis.php

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

### ./app/Filament/Resources/FormulirPrestasiResource/Pages/ViewFormulirPrestasi.php

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

## Filament Resource - Informasi

### ./app/Filament/Resources/InformasiResource/Pages/CreateInformasi.php

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

### ./app/Filament/Resources/InformasiResource/Pages/EditInformasi.php

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

### ./app/Filament/Resources/InformasiResource/Pages/ListInformasis.php

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

### ./app/Filament/Resources/InformasiResource/Pages/ViewInformasi.php

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

### ./app/Filament/Resources/InformasiResource/Widgets/InformasiPublished.php

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

    public function getColumnSpan(): int | string | array
    {
        return Auth::user()->hasRole('calon_siswa') ? 'full' : 1;
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return Auth::user()->hasRole('calon_siswa') ? [5, 10] : [5];
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
            'Tidak Diterima' => 'danger',
            default => 'warning',
        };
    }

    private function statusIcon(string $status): string
    {
        return match ($status) {
            'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
            'Tidak Diterima' => 'heroicon-o-no-symbol',
            'Diterima' => 'heroicon-o-check-circle',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
            default => 'heroicon-o-arrow-path',
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
            $mulaiRaw = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_mulai"} ?? null;
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
        $inPengumuman = $this->isInPengumumanPeriod();

        $terminalStatuses = [
            'Diterima',
            'Diterima Di Kelas Unggulan',
            'Diterima Di Kelas Reguler',
            'Tidak Diterima',
        ];

        $hasTerminalStatus = $calonSiswa && in_array($statusPendaftaran, $terminalStatuses);
        $showPendaftaranBadge = $this->isCalonSiswa() && $calonSiswa !== null && ! $hasTerminalStatus;

        $urlFormulir = $calonSiswa ? '/dashboard/formulir' : '';
        $urlViewFormulir = $calonSiswa ? "/dashboard/formulir/{$calonSiswa->id}" : '';
        $urlInformasi = $calonSiswa ? '/dashboard/informasi' : '';

        return $table
            ->query(
                Informasi::where('status', 'Publish')->latest('updated_at')
            )
            ->columns([
                TextColumn::make('judul')
                    ->label('Informasi')
                    ->description(fn (Informasi $record): string => Str::limit($record->isi, 50))
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

## Filament Resource - JalurPendaftaran

### ./app/Filament/Resources/JalurPendaftaranResource/Pages/CreateJalurPendaftaran.php

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

### ./app/Filament/Resources/JalurPendaftaranResource/Pages/EditJalurPendaftaran.php

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

### ./app/Filament/Resources/JalurPendaftaranResource/Pages/ListJalurPendaftarans.php

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

### ./app/Filament/Resources/JalurPendaftaranResource/Pages/ViewJalurPendaftaran.php

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

## Filament Resource - Jurusan

### ./app/Filament/Resources/JurusanResource/Pages/CreateJurusan.php

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

### ./app/Filament/Resources/JurusanResource/Pages/EditJurusan.php

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

### ./app/Filament/Resources/JurusanResource/Pages/ListJurusans.php

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

### ./app/Filament/Resources/JurusanResource/Pages/ViewJurusan.php

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

## Filament Resource - Kabupaten

### ./app/Filament/Resources/KabupatenResource/Pages/CreateKabupaten.php

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

### ./app/Filament/Resources/KabupatenResource/Pages/EditKabupaten.php

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

### ./app/Filament/Resources/KabupatenResource/Pages/ListKabupatens.php

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

### ./app/Filament/Resources/KabupatenResource/Pages/ViewKabupaten.php

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

## Filament Resource - Kecamatan

### ./app/Filament/Resources/KecamatanResource/Pages/CreateKecamatan.php

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

### ./app/Filament/Resources/KecamatanResource/Pages/EditKecamatan.php

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

### ./app/Filament/Resources/KecamatanResource/Pages/ListKecamatans.php

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

### ./app/Filament/Resources/KecamatanResource/Pages/ViewKecamatan.php

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

## Filament Resource - Kelas

### ./app/Filament/Resources/KelasResource/Pages/CreateKelas.php

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

### ./app/Filament/Resources/KelasResource/Pages/EditKelas.php

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

### ./app/Filament/Resources/KelasResource/Pages/ListKelas.php

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

### ./app/Filament/Resources/KelasResource/Pages/ViewKelas.php

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

## Filament Resource - Kelurahan

### ./app/Filament/Resources/KelurahanResource/Pages/CreateKelurahan.php

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

### ./app/Filament/Resources/KelurahanResource/Pages/EditKelurahan.php

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

### ./app/Filament/Resources/KelurahanResource/Pages/ListKelurahans.php

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

### ./app/Filament/Resources/KelurahanResource/Pages/ViewKelurahan.php

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

## Filament Resource - Ketua

### ./app/Filament/Resources/KetuaResource/Pages/CreateKetua.php

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

### ./app/Filament/Resources/KetuaResource/Pages/EditKetua.php

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

### ./app/Filament/Resources/KetuaResource/Pages/ListKetuas.php

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

### ./app/Filament/Resources/KetuaResource/Pages/ViewKetua.php

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

## Filament Resource - MataPelajaran

### ./app/Filament/Resources/MataPelajaranResource/Pages/CreateMataPelajaran.php

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

### ./app/Filament/Resources/MataPelajaranResource/Pages/EditMataPelajaran.php

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

### ./app/Filament/Resources/MataPelajaranResource/Pages/ListMataPelajarans.php

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

### ./app/Filament/Resources/MataPelajaranResource/Pages/ViewMataPelajaran.php

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

## Filament Resource - Negara

### ./app/Filament/Resources/NegaraResource/Pages/CreateNegara.php

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

### ./app/Filament/Resources/NegaraResource/Pages/EditNegara.php

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

### ./app/Filament/Resources/NegaraResource/Pages/ListNegaras.php

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

### ./app/Filament/Resources/NegaraResource/Pages/ViewNegara.php

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

## Filament Resource - Pimpinan

### ./app/Filament/Resources/PimpinanResource/Pages/CreatePimpinan.php

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

### ./app/Filament/Resources/PimpinanResource/Pages/EditPimpinan.php

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

### ./app/Filament/Resources/PimpinanResource/Pages/ListPimpinans.php

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

### ./app/Filament/Resources/PimpinanResource/Pages/ViewPimpinan.php

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

## Filament Resource - Prestasi

### ./app/Filament/Resources/PrestasiResource/Pages/CreatePrestasi.php

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

### ./app/Filament/Resources/PrestasiResource/Pages/EditPrestasi.php

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

### ./app/Filament/Resources/PrestasiResource/Pages/ListPrestasis.php

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

### ./app/Filament/Resources/PrestasiResource/Pages/ViewPrestasi.php

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

## Filament Resource - Provinsi

### ./app/Filament/Resources/ProvinsiResource/Pages/CreateProvinsi.php

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

### ./app/Filament/Resources/ProvinsiResource/Pages/EditProvinsi.php

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

### ./app/Filament/Resources/ProvinsiResource/Pages/ListProvinsis.php

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

### ./app/Filament/Resources/ProvinsiResource/Pages/ViewProvinsi.php

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

## Filament Resource - Role

### ./app/Filament/Resources/RoleResource/Pages/CreateRole.php

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

### ./app/Filament/Resources/RoleResource/Pages/EditRole.php

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

### ./app/Filament/Resources/RoleResource/Pages/ListRoles.php

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

### ./app/Filament/Resources/RoleResource/Pages/ViewRole.php

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

## Filament Resource - SekolahAsal

### ./app/Filament/Resources/SekolahAsalResource/Concerns/HasSekolahAsalWizardSteps.php

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

### ./app/Filament/Resources/SekolahAsalResource/Pages/CreateSekolahAsal.php

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

### ./app/Filament/Resources/SekolahAsalResource/Pages/EditSekolahAsal.php

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

### ./app/Filament/Resources/SekolahAsalResource/Pages/ListSekolahAsals.php

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

### ./app/Filament/Resources/SekolahAsalResource/Pages/ViewSekolahAsal.php

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

## Filament Resource - Sekolah

### ./app/Filament/Resources/SekolahResource/Concerns/HasSekolahWizardSteps.php

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

### ./app/Filament/Resources/SekolahResource/Pages/CreateSekolah.php

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

### ./app/Filament/Resources/SekolahResource/Pages/EditSekolah.php

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

### ./app/Filament/Resources/SekolahResource/Pages/ListSekolahs.php

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

### ./app/Filament/Resources/SekolahResource/Pages/ViewSekolah.php

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

## Filament Resource - Sekretaris

### ./app/Filament/Resources/SekretarisResource/Pages/CreateSekretaris.php

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

### ./app/Filament/Resources/SekretarisResource/Pages/EditSekretaris.php

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

### ./app/Filament/Resources/SekretarisResource/Pages/ListSekretaris.php

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

### ./app/Filament/Resources/SekretarisResource/Pages/ViewSekretaris.php

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

## Filament Resource - TahunPendaftaran

### ./app/Filament/Resources/TahunPendaftaranResource/Pages/CreateTahunPendaftaran.php

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

### ./app/Filament/Resources/TahunPendaftaranResource/Pages/EditTahunPendaftaran.php

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

### ./app/Filament/Resources/TahunPendaftaranResource/Pages/ListTahunPendaftarans.php

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

### ./app/Filament/Resources/TahunPendaftaranResource/Pages/ViewTahunPendaftaran.php

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

## Filament Resource - User

### ./app/Filament/Resources/UserResource/Pages/CreateUser.php

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

### ./app/Filament/Resources/UserResource/Pages/EditUser.php

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

### ./app/Filament/Resources/UserResource/Pages/ListUsers.php

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

### ./app/Filament/Resources/UserResource/Pages/ViewUser.php

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

### ./app/Filament/Resources/UserResource/Widgets/UserRegisters.php

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
                User::whereHas('roles', fn ($q) => $q->where('name', 'calon_siswa'))
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
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                        default => 'gray',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Aktif' => 'heroicon-o-check-circle',
                        'Nonaktif' => 'heroicon-o-x-mark',
                        default => 'heroicon-o-x-mark',
                    }),
            ])
            ->striped()
            ->paginationPageOptions([5]);
    }
}

```

---

## Filament Resources

### ./app/Filament/Resources/AnggotaResource.php

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

### ./app/Filament/Resources/BendaharaResource.php

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

### ./app/Filament/Resources/CalonSiswaResource.php

```php
<?php

namespace App\Filament\Resources;

use App\Constants\FormOptions;
use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource\Pages;
use App\Models\CalonSiswa;
use App\Models\JalurPendaftaran;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelas;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Services\WhatsAppService;
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
use Filament\Notifications\Notification;
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

    private static function opsiStatusFormulir(): array
    {
        $base = [
            'Diproses' => 'Diproses',
        ];

        $admin = [
            'Diproses' => 'Diproses',
            'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
            'Disetujui' => 'Disetujui',
            'Ditolak' => 'Ditolak',
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
                ->afterStateUpdated(fn(Set $set) => $set($pro, null)),

            Select::make($pro)
                ->label('Provinsi')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Provinsi::query()
                        ->where('negara_id', $get($neg))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Provinsi::find($v)?->nama)
                ->afterStateUpdated(fn(Set $set) => $set($kab, null)),

            Select::make($kab)
                ->label('Kabupaten / Kota')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Kabupaten::query()
                        ->where('provinsi_id', $get($pro))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Kabupaten::find($v)?->nama)
                ->afterStateUpdated(fn(Set $set) => $set($kec, null)),

            Select::make($kec)
                ->label('Kecamatan')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Kecamatan::query()
                        ->where('kabupaten_id', $get($kab))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Kecamatan::find($v)?->nama)
                ->afterStateUpdated(fn(Set $set) => $set($kel, null)),

            Select::make($kel)
                ->label('Kelurahan / Desa')
                ->searchable()
                ->required($required)
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Kelurahan::query()
                        ->where('kecamatan_id', $get($kec))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Kelurahan::find($v)?->nama),
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
                                    ->options(fn() => self::opsiStatusPendaftaran())
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
                                    ->visible(fn(Get $get) => in_array($get('status_pendaftaran'), [
                                        'Diterima Di Kelas Reguler',
                                        'Diterima Di Kelas Unggulan',
                                    ]))
                                    ->required(fn(Get $get) => in_array($get('status_pendaftaran'), [
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
                                        fn(Builder $q) => $q->where('status', 'Aktif')
                                    )
                                    ->required()
                                    ->native(false)
                                    ->live()
                                    ->getOptionLabelFromRecordUsing(
                                        fn(Model $r) => "{$r->nama} | {$r->tahunPendaftaran->nama}"
                                    ),

                                TextInput::make('nama')
                                    ->label('Nama Lengkap')
                                    ->required()
                                    ->maxLength(50)
                                    ->readOnly()
                                    ->default(fn() => Auth::user()->name),

                                TextInput::make('nisn')
                                    ->label('NISN')
                                    ->required()
                                    ->numeric()
                                    ->minLength(10)
                                    ->maxLength(10)
                                    ->readOnly()
                                    ->default(fn() => Auth::user()->username)
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
                                    ->options(fn() => array_combine(
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
                                    ->getOptionLabelFromRecordUsing(fn(Model $r) => "{$r->nama} | NPSN: {$r->npsn}"),

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
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->required(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_kip', ignoreRecord: true),

                                TextInput::make('no_kks')->label('Nomor KKS')
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_kks', ignoreRecord: true),

                                TextInput::make('no_pkh')->label('Nomor PKH')
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
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
                                    ->directory(fn() => 'berkas/foto/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_kk')
                                    ->label('Kartu Keluarga (KK)')
                                    ->image()->required()
                                    ->directory(fn() => 'berkas/kk/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_akta')
                                    ->label('Akta Kelahiran')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn() => 'berkas/akta/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_skbb')
                                    ->label('SKBB')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn() => 'berkas/skbb/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_skab')
                                    ->label('SKAB')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn() => 'berkas/skab/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_nisn')
                                    ->label('Kartu NISN')
                                    ->image()
                                    ->directory(fn() => 'berkas/nisn/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('Opsional. JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_kip')
                                    ->label('Kartu KIP')
                                    ->image()
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->required(fn(Get $get) => (bool) $get('penerima_kip') && $get('no_kip'))
                                    ->directory(fn() => 'berkas/kip/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),

                                FileUpload::make('berkas_kks')
                                    ->label('Kartu KKS')
                                    ->image()
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip') && $get('no_kks'))
                                    ->directory(fn() => 'berkas/kks/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),

                                FileUpload::make('berkas_pkh')
                                    ->label('Kartu PKH')
                                    ->image()
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip') && $get('no_pkh'))
                                    ->directory(fn() => 'berkas/pkh/' . Auth::user()->username)
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
                                Select::make('ibu_pekerjaan')->label('Pekerjaan')->options(fn() => self::opsiPekerjaan())->required()->native(false),
                                Select::make('ibu_penghasilan')->label('Penghasilan')->options(fn() => self::opsiPenghasilan())->required()->native(false),
                                Select::make('ibu_pendidikan')->label('Pendidikan Terakhir')->options(fn() => self::opsiPendidikan())->required()->native(false),
                                Select::make('ibu_status')->label('Status')->options(fn() => self::opsiStatus())->required()->native(false)->live(),
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
                                Select::make('ayah_pekerjaan')->label('Pekerjaan')->options(fn() => self::opsiPekerjaan())->required()->native(false),
                                Select::make('ayah_penghasilan')->label('Penghasilan')->options(fn() => self::opsiPenghasilan())->required()->native(false),
                                Select::make('ayah_pendidikan')->label('Pendidikan Terakhir')->options(fn() => self::opsiPendidikan())->required()->native(false),
                                Select::make('ayah_status')->label('Status')->options(fn() => self::opsiStatus())->required()->native(false)->live(),
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
                                Select::make('wali_pekerjaan')->label('Pekerjaan')->options(fn() => self::opsiPekerjaan())->native(false),
                                Select::make('wali_penghasilan')->label('Penghasilan')->options(fn() => self::opsiPenghasilan())->native(false),
                                Select::make('wali_pendidikan')->label('Pendidikan Terakhir')->options(fn() => self::opsiPendidikan())->native(false),
                                Select::make('wali_status')->label('Status')->options(fn() => self::opsiStatus())->native(false),
                                TextInput::make('wali_alamat')->label('Jalan / Kampung / Dusun')->maxLength(255),
                                ...self::wilayahFields('wali', required: false),
                            ]),
                    ]),

                // ============================================================
                // STEP 3 — Data Tes (admin/panitia only)
                // ============================================================
                Step::make('Data Tes')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->hidden(fn() => $isCalonSiswa)
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
                    ->defaultImageUrl(fn() => 'https://ui-avatars.com/api/?name=CS&color=7F9CF5&background=EBF4FF'),

                TextColumn::make('nomor_pendaftaran')
                    ->label('No. Daftar')
                    ->searchable()
                    ->copyable(),

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
                    ->tooltip(fn(TextColumn $col): ?string => strlen($col->getState()) > 30 ? $col->getState() : null),
                TextColumn::make('status_formulir')
                    ->label('Status Formulir')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'Diproses' => 'warning',
                        'Berkas Tidak Lengkap' => 'danger',
                        'Disetujui' => 'success',
                        'Ditolak' => 'danger',
                        default => 'gray',
                    }),
                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'Diproses' => 'gray',
                        'Diterima',
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan' => 'success',
                        'Tidak Diterima' => 'danger',
                        default => 'gray',
                    }),
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
                        fn() => JalurPendaftaran::where('status', 'Aktif')
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
                        fn() => Kelas::pluck('nama', 'id')->toArray()
                    )
                    ->visible(! $isCalonSiswa),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn() => ! $isCalonSiswa),
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),


                    Tables\Actions\DeleteAction::make()
                        ->visible(fn($record) => $isSuperAdmin && ! $record->trashed()),

                    Tables\Actions\RestoreAction::make()
                        ->visible(fn($record) => $isSuperAdmin && $record->trashed()),

                    Tables\Actions\ForceDeleteAction::make()
                        ->visible(fn($record) => $isSuperAdmin && $record->trashed()),
                    Tables\Actions\Action::make('kirim_notifikasi')
                        ->label('Kirim Notifikasi')
                        ->icon('heroicon-o-chat-bubble-left-ellipsis')
                        ->color('info')
                        ->requiresConfirmation()
                        ->modalHeading('Kirim Notifikasi WhatsApp')
                        ->modalDescription(fn($record) => "Kirim ulang notifikasi status pendaftaran ke {$record->nama}?")
                        ->modalSubmitActionLabel('Kirim Sekarang')
                        ->visible(fn() => auth()->user()->hasAnyRole(['super_admin', 'admin', 'verifikator']))
                        ->action(function ($record) {
                            $telepon = $record->user?->telepon;

                            if (! $telepon) {
                                Notification::make()
                                    ->title('Gagal')
                                    ->body('Calon siswa ini tidak memiliki nomor WhatsApp.')
                                    ->danger()
                                    ->send();

                                return;
                            }

                            $pesan = "📢 *Informasi Status Pendaftaran*\n\n"
                                . "Halo, *{$record->nama}*!\n"
                                . "Berikut status pendaftaran kamu saat ini:\n\n"
                                . "📋 No. Pendaftaran : *{$record->nomor_pendaftaran}*\n"
                                . "📄 Status Formulir : *{$record->status_formulir}*\n"
                                . "📌 Status Pendaftaran : *{$record->status_pendaftaran}*\n\n"
                                . "Silakan login ke sistem PMBM untuk informasi lebih lanjut.\n"
                                . '_MTsN 1 Pandeglang_';

                            app(WhatsAppService::class)->send(
                                phone: $telepon,
                                message: $pesan,
                                minDelay: 1,
                                maxDelay: 10,
                            );

                            Notification::make()
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
                                    JalurPendaftaran::where('status', 'Aktif')
                                        ->pluck('nama', 'id')
                                        ->toArray()
                                )
                                ->native(false)
                                ->required(),
                        ])
                        ->action(
                            fn(Collection $records, array $data) => $records->each(
                                fn($r) => CalonSiswa::where('id', $r->id)
                                    ->update(['jalur_pendaftaran_id' => $data['jalur_pendaftaran_id']])
                            )
                        ),

                    BulkAction::make('set_status_formulir')
                        ->label('Set Status Formulir')
                        ->icon('heroicon-o-check-badge')
                        ->color('success')
                        ->requiresConfirmation()
                        ->visible($isSuperAdmin)
                        ->form([
                            Select::make('status_formulir')
                                ->label('Status')
                                ->options(fn() => self::opsiStatusFormulir())
                                ->native(false)
                                ->required(),
                        ])
                        ->action(
                            fn(Collection $records, array $data) => $records->each(function ($r) use ($data) {
                                $update = ['status_formulir' => $data['status_formulir']];

                                CalonSiswa::where('id', $r->id)->update($update);
                            })
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
                                ->options(fn() => self::opsiStatusPendaftaran())
                                ->native(false)
                                ->required(),

                            // Kelas muncul kondisional — pakai live() + visible()
                            Select::make('kelas_id')
                                ->label('Kelas')
                                ->options(
                                    Kelas::pluck('nama', 'id')->toArray()
                                )
                                ->native(false)
                                ->live()
                                ->visible(fn(Get $get) => in_array($get('status_pendaftaran'), [
                                    'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan',
                                ]))
                                ->required(fn(Get $get) => in_array($get('status_pendaftaran'), [
                                    'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan',
                                ])),
                        ])
                        ->action(
                            fn(Collection $records, array $data) => $records->each(function ($r) use ($data) {
                                $update = ['status_pendaftaran' => $data['status_pendaftaran']];

                                if (! empty($data['kelas_id'])) {
                                    $update['kelas_id'] = $data['kelas_id'];
                                }

                                CalonSiswa::where('id', $r->id)->update($update);
                            })
                        ),

                    BulkAction::make('kirim_notifikasi_massal')
                        ->label('Kirim Notifikasi')
                        ->icon('heroicon-o-chat-bubble-left-ellipsis')
                        ->color('info')
                        ->requiresConfirmation()
                        ->modalHeading('Kirim Notifikasi Massal')
                        ->modalDescription('Notifikasi status pendaftaran akan dikirim ke semua peserta yang dipilih.')
                        ->modalSubmitActionLabel('Kirim Sekarang')
                        ->deselectRecordsAfterCompletion()
                        ->visible(fn() => auth()->user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']))
                        ->action(function (Collection $records) {
                            $wa = app(WhatsAppService::class);

                            $berhasil = 0;
                            $gagal = 0;

                            foreach ($records as $record) {
                                $telepon = $record->user?->telepon;

                                if (! $telepon) {
                                    $gagal++;

                                    continue;
                                }

                                $pesan = "📢 *Informasi Status Pendaftaran*\n\n"
                                    . "Halo, *{$record->nama}*!\n"
                                    . "Berikut status pendaftaran kamu saat ini:\n\n"
                                    . "📋 No. Pendaftaran : *{$record->nomor_pendaftaran}*\n"
                                    . "📄 Status Formulir : *{$record->status_formulir}*\n"
                                    . "📌 Status Pendaftaran : *{$record->status_pendaftaran}*\n\n"
                                    . "Silakan login ke sistem PMBM untuk informasi lebih lanjut.\n"
                                    . '_MTsN 1 Pandeglang_';

                                // Delay lebih besar untuk bulk — spread pengiriman
                                $wa->send(
                                    phone: $telepon,
                                    message: $pesan,
                                    minDelay: 10,
                                    maxDelay: 120,
                                );

                                $berhasil++;
                            }

                            Notification::make()
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

### ./app/Filament/Resources/EkstrakurikulerResource.php

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

### ./app/Filament/Resources/FormulirPrestasiResource.php

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
use Illuminate\Support\HtmlString;

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
                    fn(Builder $query) => $query->withoutGlobalScopes()
                )
                ->getOptionLabelFromRecordUsing(
                    fn($record) => "{$record->nama} — {$record->nisn}"
                )
                ->searchable()
                ->preload()
                ->required()
                ->default($calonSiswaId)
                ->hidden($isCalonSiswa)
                ->dehydrated(true),

            // Select::make('prestasi_id')
            //     ->label('Jenis Prestasi')
            //     ->options(
            //         Prestasi::all()->mapWithKeys(
            //             fn ($p) => [
            //                 $p->id => "{$p->jenis} — {$p->nama}".($p->tingkat ? " ({$p->tingkat})" : ''),
            //             ]
            //         )
            //     )
            //     ->searchable()
            //     ->required()
            //     ->disabled(! $isCalonSiswa && ! $isEditor)
            //     ->columnSpanFull(),
            Select::make('prestasi_id')
                ->label('Jenis Prestasi')
                ->options(
                    Prestasi::all()
                        ->groupBy('jenis')
                        ->map(
                            fn($group) =>
                            $group->mapWithKeys(fn($p) => [
                                $p->id => collect([
                                    $p->nama,
                                    $p->tingkat   ? "Tk. {$p->tingkat}"    : null,
                                    $p->kategori  ? "Kat. {$p->kategori}"  : null,
                                    $p->peringkat ? "Juara {$p->peringkat}" : null,
                                ])->filter()->implode(' — ')
                            ])
                        )
                        ->toArray()
                )
                ->searchable()
                ->required()
                ->disabled(! $isCalonSiswa && ! $isEditor)
                ->columnSpanFull()
                ->helperText(function (?string $state) {
                    if (! $state) return new HtmlString(
                        '<small style="color:var(--gray-400)">Pilih jenis prestasi yang sesuai dengan sertifikat yang dimiliki.</small>'
                    );

                    $p = Prestasi::find($state);
                    if (! $p) return null;

                    $rows = collect([
                        'Jenis'     => $p->jenis,
                        'Nama'      => $p->nama,
                        'Tingkat'   => $p->tingkat,
                        'Kategori'  => $p->kategori,
                        'Peringkat' => $p->peringkat,
                    ])->filter()->map(
                        fn($v, $k) =>
                        "<tr>
                <td style='padding:2px 8px 2px 0;color:#9ca3af;font-size:.78rem;white-space:nowrap'>{$k}</td>
                <td style='padding:2px 0;font-size:.78rem;font-weight:600'>: {$v}</td>
            </tr>"
                    )->implode('');

                    return new HtmlString("
            <table style='margin-top:.4rem;border-collapse:collapse'>{$rows}</table>
        ");
                }),

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
                ->required(fn($get) => $get('nama_prestasi') && $get('tahun_prestasi') && $get('penyelenggara_prestasi'))
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                ->validationMessages([
                    'accepted_file_types' => 'Berkas harus berupa JPG, PNG, atau PDF.',
                    'min_size' => 'Ukuran berkas minimal 10 KB.',
                    'max_size' => 'Ukuran berkas maksimal 1 MB.',
                    'required' => 'Berkas bukti prestasi wajib diunggah jika nama prestasi, tahun, dan penyelenggara sudah diisi.',
                ])
                ->maxSize(1024)
                ->visibility('private')
                ->directory(fn() => 'berkas/prestasi/' . ($nisn ?? 'umum'))
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
                    ->color(fn($state) => match ($state) {
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
                    ->formatStateUsing(fn($state) => $state ? '✅ Ada' : '❌ Belum upload')
                    ->badge()
                    ->color(fn($state) => $state ? 'success' : 'danger'),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('prestasi_id')
                    ->label('Jenis Prestasi')
                    ->options(
                        Prestasi::all()
                            ->groupBy('jenis')
                            ->map(
                                fn($group) =>
                                $group->mapWithKeys(fn($p) => [
                                    $p->id => collect([
                                        $p->nama,
                                        $p->tingkat   ? "Tk. {$p->tingkat}"   : null,
                                        $p->kategori  ? "Kat. {$p->kategori}" : null,
                                        $p->peringkat ? "Juara {$p->peringkat}" : null,
                                    ])->filter()->implode(' — ')
                                ])
                            )
                            ->toArray()
                    )
                    ->attribute('prestasi_id'),
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

### ./app/Filament/Resources/InformasiResource.php

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

        return "📢 *Informasi PMBM MTsN 1 Pandeglang*\n\n"
            ."📌 *{$record->judul}*\n"
            ."🗓️ {$tanggal}\n\n"
            .strip_tags($record->isi)."\n\n"
            ."Silakan login ke sistem PMBM untuk informasi lebih lanjut.\n"
            .'_MTsN 1 Pandeglang_';
    }
}

```

---

### ./app/Filament/Resources/JalurPendaftaranResource.php

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

### ./app/Filament/Resources/JurusanResource.php

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

### ./app/Filament/Resources/KabupatenResource.php

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

### ./app/Filament/Resources/KecamatanResource.php

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

### ./app/Filament/Resources/KelasResource.php

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

### ./app/Filament/Resources/KelurahanResource.php

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

### ./app/Filament/Resources/KetuaResource.php

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

### ./app/Filament/Resources/MataPelajaranResource.php

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

### ./app/Filament/Resources/NegaraResource.php

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

### ./app/Filament/Resources/PimpinanResource.php

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

### ./app/Filament/Resources/PrestasiResource.php

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

### ./app/Filament/Resources/ProvinsiResource.php

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

### ./app/Filament/Resources/RoleResource.php

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

### ./app/Filament/Resources/SekolahAsalResource.php

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

### ./app/Filament/Resources/SekolahResource.php

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

### ./app/Filament/Resources/SekretarisResource.php

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

### ./app/Filament/Resources/TahunPendaftaranResource.php

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
                    ->description('Tanggal Daftar Akun PMBM.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai Daftar Akun PMBM')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DatePicker::make('tanggal_ppdb_selesai')
                            ->label('Tanggal Selesai Daftar Akun PMBM')
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

### ./app/Filament/Resources/UserResource.php

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
                            ->rule(fn($record) => $record === null
                                ? 'unique:users,username'
                                : 'unique:users,username,' . $record->id)
                            ->dehydrateStateUsing(fn($state) => $state ?: null)
                            ->when(
                                $isCreate,
                                fn(TextInput $field) => $field
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

                        TextInput::make('telepon')
                            ->label('Nomor Telepon')
                            ->unique(ignoreRecord: true)
                            ->rule(fn($record) => $record === null
                                ? 'unique:users,telepon'
                                : 'unique:users,telepon,' . $record->id)
                            ->dehydrateStateUsing(fn($state) => $state ?: null)
                            ->when(
                                $isCreate,
                                fn(TextInput $field) => $field
                                    ->required()
                                    ->numeric()
                                    ->minLength(10)
                                    ->maxLength(15)
                            )
                            ->validationMessages([
                                'max_digits' => 'Nomor Telepon: Masukkan maksimal 15 Angka.',
                                'min_digits' => 'Nomor Telepon: Masukkan minimal 10 Angka.',
                                'unique' => 'Nomor Telepon: Nomor ini sudah pernah di isi.',
                                'required' => 'Form ini wajib diisi.',
                            ]),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->unique(ignoreRecord: true)
                            ->rule(fn($record) => $record === null
                                ? 'unique:users,email'
                                : 'unique:users,email,' . $record->id)
                            ->dehydrateStateUsing(fn($state) => $state ?: null)
                            ->disabledOn('edit')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'unique' => 'Email: Email ini sudah pernah di isi.',
                            ]),

                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn($record) => $record === null)
                            ->dehydrateStateUsing(fn($state, $record) => $state ? bcrypt($state) : $record->password),

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
                                fn(Select $field) => $field
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
                    ->formatStateUsing(fn(string $state): string => Str::headline($state))
                    ->badge()
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    })
                    ->icon(fn(string $state): string => match ($state) {
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
                ])->hidden(fn($record) => $record->username === 'super_admin'),
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

## Filament Exports

### ./app/Filament/Exports/CalonSiswaExporter.php

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

## Filament Imports

### ./app/Filament/Imports/CalonSiswaImporter.php

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

## Filament Pages

### ./app/Filament/Pages/Auth/EditProfileCustom.php

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
    protected static string $view = 'filament.pages.auth.edit-profile';

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
            ->required(fn() => Auth::user()->hasRole('calon_siswa'))
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
            ->dehydrated(fn($state): bool => filled($state))
            ->dehydrateStateUsing(fn($state): string => Hash::make($state))
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
            ->visible(fn(Get $get): bool => filled($get('password')))
            ->dehydrated(false);
    }
}

```

---

### ./app/Filament/Pages/Auth/ForgotPasswordCustom.php

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\OtpMessageService;
use App\Services\WhatsAppService;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\SimplePage;
use Illuminate\Support\Facades\Redis;

class ForgotPasswordCustom extends SimplePage implements HasForms
{
    use HasCustomLayout;
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.forgot-password';

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
                ->body('Hubungi panitia PMBM untuk bantuan.')
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

        $message = OtpMessageService::resetPassword($user->name, $otp);

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

### ./app/Filament/Pages/Auth/LoginCustom.php

```php
<?php

namespace App\Filament\Pages\Auth;

use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Pages\Auth\Login;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;
use Illuminate\Validation\ValidationException;

class LoginCustom extends Login
{
    use HasCustomLayout;

    protected static string $view = 'filament.pages.auth.login';

    public function getTitle(): string|Htmlable
    {
        return 'Masuk ke Sistem PMBM MTsN 1 Pandeglang';
    }

    public function getHeading(): string|Htmlable
    {
        return 'Selamat Datang Kembali';
    }

    public function getSubheading(): string|Htmlable|null
    {
        return 'Silakan masuk dengan akun Anda untuk melanjutkan';
    }

    protected function getLayoutData(): array
    {
        return [
            'emptyPanelBackgroundImageUrl' => $this->getBackgroundImage(),
            'emptyPanelBackgroundColor' => $this->getBackgroundColor(),
        ];
    }

    protected function getBackgroundImage(): string
    {
        return asset('/img/wallpaper.png');
    }

    protected function getBackgroundColor(): string
    {
        return '';
    }

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

    protected function getRememberFormComponent(): Component
    {
        return Checkbox::make('remember')
            ->label(__('Ingat Saya'))
            ->hint(new HtmlString(
                '<a href="https://daftar.mtsn1pandeglang.sch.id"
                class="text-sm text-blue-500 transition hover:text-primary-600">
                ← Kembali Beranda
            </a>'
            ));
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

    public function getFooter(): ?View
    {
        return view('filament.pages.auth.login-footer');
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

    public function authenticate(): ?LoginResponse
    {
        $response = parent::authenticate();

        $user = Auth::user();

        if ($user && ! $user->hasVerifiedEmail()) {
            session(['otp_user_id' => $user->id]);

            Auth::logout();

            $this->redirect('/verifikasi-otp');

            return null;
        }

        return $response;
    }
}

```

---

### ./app/Filament/Pages/Auth/NewPassword.php

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\OtpMessageService;
use App\Services\WhatsAppService;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
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
    use HasCustomLayout;

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

        $message = OtpMessageService::passwordBerhasilDiubah($user->name);

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

### ./app/Filament/Pages/Auth/RegisterCustom.php

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Services\OtpMessageService;
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

    protected static string $view = 'filament.pages.auth.register';

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
        return Cache::remember('ppdb:registration_open', 5, function () {
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
                Log::error('RegisterCustom::isRegistrationOpen error: ' . $e->getMessage());

                return false;
            }
        });
    }

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
                'unique' => 'NISN: Nomor ini sudah pernah dipakai.',
                'required' => 'Form ini harus diisi.',
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
            ->validationMessages([
                'required' => 'Nomor WhatsApp harus diisi.',
                'max' => 'Nomor WhatsApp maksimal 15 karakter.',
                'unique' => 'Nomor WhatsApp: Nomor ini sudah pernah dipakai.',
            ])
            ->unique($this->getUserModel());
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
                'unique' => 'Email: Email ini sudah pernah dipakai.',
                'required' => 'Form ini harus diisi.',
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
            ->dehydrateStateUsing(fn($state) => Hash::make($state))
            ->same('passwordConfirmation')
            ->validationMessages([
                'same' => 'Password: Password tidak sesuai dengan isian password konfirmasi.',
                'min' => 'Password: Masukkan minimal 8 karakter alfanumerik.',
                'required' => 'Form ini harus diisi.',
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

        $message = OtpMessageService::verifikasi($user->name, $otp);

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

### ./app/Filament/Pages/Auth/ResetPasswordOtp.php

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\OtpMessageService;
use App\Services\WhatsAppService;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
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
    use HasCustomLayout;

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

        $message = OtpMessageService::resetPassword($user->name, $otp);

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

### ./app/Filament/Pages/Auth/VerifikasiOtp.php

```php
<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\OtpMessageService;
use App\Services\WhatsAppService;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
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
    use HasCustomLayout;

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

        Notification::make()->title('Akun berhasil diverifikasi!')->body('Selamat datang di PMBM MTsN 1 Pandeglang.')->success()->send();
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

        $message = OtpMessageService::verifikasi($user->name, $otp);

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

## Filament Concerns

### ./app/Filament/Concerns/HasPanitiaWizardSteps.php

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

## Filament Traits

### ./app/Filament/Traits/CalonSiswaFormTrait.php

```php
<?php

namespace App\Filament\Traits;

use App\Constants\FormOptions;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Carbon\Carbon;
use Closure;
use Filament\Forms\Components\Actions\Action;
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
            ->validationMessages(['required' => 'Form ini perlu diisi.'])
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
            ->validationMessages(['required' => 'Form ini perlu diisi.']);
    }

    protected function getNikField(): TextInput
    {
        return TextInput::make('nik')
            ->label('Nomor Induk Kependudukan (NIK)')
            ->required()
            ->unique(ignoreRecord: true)
            ->dehydrateStateUsing(fn($state) => $state ?: null)
            ->numeric()
            ->placeholder('Contoh: 3201234567890123')
            ->maxLength(16)
            ->minLength(16)
            ->validationMessages([
                'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                'required' => 'Form ini perlu diisi.',
            ]);
    }

    protected function getKkField(): TextInput
    {
        return TextInput::make('kk')
            ->label('Nomor Kartu Keluarga (KK)')
            ->required()
            ->placeholder('Contoh: 3201234567890123')
            ->maxLength(16)
            ->numeric()
            ->minLength(16)
            ->validationMessages([
                'max_digits' => 'KK: Masukkan maksimal 16 Angka.',
                'min_digits' => 'KK: Masukkan minimal 16 Angka.',
                'required' => 'Form ini perlu diisi.',
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
                'required' => 'Form ini perlu diisi.',
            ]);
    }

    protected function getTempatLahirField(): TextInput
    {
        return TextInput::make('tempat_lahir')
            ->label('Tempat Lahir')
            ->required()
            ->placeholder('Contoh: Pandeglang')
            ->formatStateUsing(fn($state) => strtoupper($state))
            ->dehydrateStateUsing(fn($state) => strtoupper($state))
            ->validationMessages(['required' => 'Form ini perlu diisi.']);
    }

    protected function getTanggalLahirField(): DatePicker
    {
        return DatePicker::make('tanggal_lahir')
            ->label('Tanggal Lahir')
            ->minDate(fn() => Carbon::create(now()->year, 7, 1)->subYears(15)) // 1 Juli 2011
            ->maxDate(fn() => Carbon::create(now()->year, 7, 1)->subYears(13)) // 1 Juli 2013
            ->required()
            ->rules([
                'date',
                'after_or_equal:'  . Carbon::create(now()->year, 7, 1)->subYears(15)->toDateString(),
                'before_or_equal:' . Carbon::create(now()->year, 7, 1)->subYears(13)->toDateString(),
            ])
            ->validationMessages([
                'required'        => 'Form ini perlu diisi.',
                'after_or_equal'  => 'Usia minimal 13 tahun dihitung per 1 Juli ' . now()->year . '.',
                'before_or_equal' => 'Usia maksimal 15 tahun dihitung per 1 Juli ' . now()->year . '.',
                'date'            => 'Format tanggal tidak valid.',
            ]);
    }

    // ========================================================================
    // FIELD GROUPS (Complex reusable structures)
    // ========================================================================

    protected function getWilayahFields(string $prefix, bool|Closure $required = true): array
    {
        return [
            Select::make("{$prefix}_negara_id")
                ->label('Negara')
                ->relationship("{$prefix}Negara", 'nama')
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
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
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kabupaten_id", null);
                    $set("{$prefix}_kecamatan_id", null);
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kabupaten_id")
                ->label('Kabupaten/Kota')
                ->options(fn(Get $get): Collection => Kabupaten::query()
                    ->where('provinsi_id', $get("{$prefix}_provinsi_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
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
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kelurahan_id")
                ->label('Kelurahan/Desa')
                ->options(fn(Get $get): Collection => Kelurahan::query()
                    ->where('kecamatan_id', $get("{$prefix}_kecamatan_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),

            TextInput::make("{$prefix}_alamat")
                ->label('Jalan/Kampung/Dusun')
                ->required($required)
                ->placeholder('KP KEBON CAU RT 001 RW 005')
                ->validationMessages(['required' => 'Form ini perlu diisi.']),
        ];
    }

    protected function getOrangTuaFields(string $type, bool $required = true): array
    {
        $label = ucfirst($type);

        // Untuk wali: wajib hanya jika ayah DAN ibu meninggal
        $isWali         = $type === 'wali';
        $wajibJikaWali  = fn(Get $get) => $get('ayah_status') === 'Meninggal' && $get('ibu_status') === 'Meninggal';

        $isRequired     = $isWali
            ? $wajibJikaWali
            : $required;

        return [
            TextInput::make("{$type}_nama")
                ->label($isWali ? 'Nama Lengkap Wali' : "Nama Lengkap {$label} Kandung")
                ->required($isRequired)
                ->validationMessages(['required' => 'Form ini perlu diisi.']),

            TextInput::make("{$type}_nik")
                ->label($isWali ? 'NIK Wali' : "NIK {$label} Kandung")
                ->required($isRequired)
                ->maxLength(16)
                ->minLength(16)
                ->numeric()
                ->validationMessages([
                    'required'   => 'Form ini perlu diisi.',
                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                ]),

            Select::make("{$type}_status")
                ->label('Status')
                ->options(FormOptions::STATUS_HIDUP)
                ->required($isRequired)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->live()
                ->default($isWali ? 'Hidup' : null)
                ->disabled($isWali)
                ->dehydrated(),

            TextInput::make("{$type}_telepon")
                ->label('Nomor Telepon')
                ->tel()
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status')  === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }
                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn(Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.']),

            Select::make("{$type}_pekerjaan")
                ->label('Pekerjaan')
                ->options(FormOptions::PEKERJAAN)
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status')  === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }
                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn(Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),

            Select::make("{$type}_penghasilan")
                ->label('Penghasilan Bulanan')
                ->options(FormOptions::PENGHASILAN)
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status')  === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }
                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn(Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),

            Select::make("{$type}_pendidikan")
                ->label('Pendidikan')
                ->options(FormOptions::PENDIDIKAN)
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status')  === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }
                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn(Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),
        ];
    }

    protected function getBerkasField(string $type, string $label, $required = true, ?string $helperText = null): FileUpload
    {
        $field = FileUpload::make("berkas_{$type}")
            ->label($label)
            ->required($required)
            ->validationMessages(['required' => 'Form ini perlu diisi.'])
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
                    ->label('Tahun Lulus Dari Sekolah Asal')
                    ->options(FormOptions::tahunLulusOptions())
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->default(date('Y'))
                    ->native(false),

                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options(FormOptions::JENIS_KELAMIN)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('golongan_darah')
                    ->label('Golongan Darah')
                    ->options(FormOptions::GOLONGAN_DARAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('agama')
                    ->label('Agama')
                    ->options(FormOptions::AGAMA)
                    ->default('Islam')
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                TextInput::make('anak_ke')
                    ->label('Anak Ke')
                    ->required()
                    ->placeholder('Contoh: 1')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(20)
                    ->live()
                    ->validationMessages(['required' => 'Form ini perlu diisi.']),

                TextInput::make('jumlah_saudara')
                    ->label('Dari (Jumlah Anak)')
                    ->required()
                    ->numeric()
                    ->placeholder('Contoh: 3')
                    ->minValue(1)
                    ->maxValue(20)
                    ->live()
                    ->rules([
                        fn(Get $get) => function (string $attribute, $value, Closure $fail) use ($get) {
                            $anakKe = (int) $get('anak_ke');
                            $jumlah = (int) $value;

                            if ($anakKe && $jumlah < $anakKe) {
                                $fail("Jumlah anak tidak boleh kurang dari anak ke-{$anakKe}.");
                            }
                        }
                    ])
                    ->validationMessages([
                        'required' => 'Form ini perlu diisi.',
                        'max' => 'Form ini perlu diisi.'
                    ]),

                Select::make('tinggal_bersama')
                    ->label('Tinggal Bersama')
                    ->options(FormOptions::TINGGAL_BERSAMA)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('jarak_ke_sekolah')
                    ->label('Jarak Ke Sekolah')
                    ->options(FormOptions::JARAK_KE_SEKOLAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('disabilitas')
                    ->label('Disabilitas')
                    ->options(FormOptions::DISABILITAS)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                TextInput::make('tinggi_badan')
                    ->label('Tinggi Badan')
                    ->suffix('cm')
                    ->placeholder('Contoh: 150')
                    ->maxValue(300)
                    ->minValue(30)
                    ->validationMessages(['max' => 'Tinggi badan tidak boleh lebih dari 300 cm.', 'min' => 'Tinggi badan tidak boleh kurang dari 30 cm.'])
                    ->numeric(),

                TextInput::make('berat_badan')
                    ->label('Berat Badan')
                    ->suffix('kg')
                    ->placeholder('Contoh: 45')
                    ->maxValue(500)
                    ->minValue(10)
                    ->validationMessages(['max' => 'Berat badan tidak boleh lebih dari 500 kg.', 'min' => 'Berat badan tidak boleh kurang dari 10 kg.'])
                    ->numeric(),

                TextInput::make('no_kip')
                    ->label('Nomor Kartu Indonesia Pintar')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti KIP.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
                    ->placeholder('Contoh: 180234')
                    ->minLength(6)
                    ->maxLength(6)
                    ->live()
                    ->validationMessages([
                        'min' => 'KIP: Nomor harus 6 digit.',
                        'max' => 'KIP: Nomor harus 6 digit.',
                        'unique'     => 'KIP: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('no_kks')
                    ->label('Nomor Kartu Keluarga Sejahtera')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti KKS.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
                    ->placeholder('Contoh: A1B2C3 atau sesuai kartu')
                    ->minLength(5)
                    ->maxLength(16)
                    ->live()
                    ->validationMessages([
                        'min' => 'KKS: Nomor harus 5-16 karakter.',
                        'max' => 'KKS: Nomor harus 5-16 karakter.',
                        'unique'     => 'KKS: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('no_pkh')
                    ->label('Nomor Kartu Program Keluarga Harapan')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti PKH.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
                    ->placeholder('Contoh: 3201234567890123')
                    ->minLength(15)
                    ->maxLength(15)
                    ->live()
                    ->validationMessages([
                        'min'    => 'PKH: Nomor harus 15 karakter.',
                        'max'    => 'PKH: Nomor harus 15 karakter.',
                        'unique' => 'PKH: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('no_sktm')
                    ->label('Nomor Surat Keterangan Tidak Mampu')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti SKTM.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
                    ->minLength(8)
                    ->placeholder('Contoh: 474.3/001/DS-NAMADESA/2024')
                    ->maxLength(50)
                    ->live()
                    ->validationMessages([
                        'min'    => 'SKTM: Masukkan minimal 8 karakter.',
                        'max'    => 'SKTM: Masukkan maksimal 50 karakter.',
                        'unique' => 'SKTM: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('siswa_telepon')
                    ->label('Nomor Telepon')
                    ->required()
                    ->disabled(true)
                    ->dehydrated()
                    ->default(fn() => Auth::user()->telepon)
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn($state) => $state ?: null)
                    ->numeric()
                    ->maxLength(15)
                    ->minLength(10)
                    ->validationMessages([
                        'max_digits' => 'Masukkan maksimal 15 Angka.',
                        'min_digits' => 'Masukkan minimal 10 Angka.'
                    ])
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
            ->validationMessages(['required' => 'Form ini perlu diisi.'])
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
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->columnSpanFull(),

                        Select::make('jenjang')
                            ->label('Jenjang')
                            ->native(false)
                            ->required()
                            ->live()
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->options(fn() => FormOptions::jenjangSekolahAsal(Sekolah::first()?->jenjang)),

                        TextInput::make('npsn')
                            ->label('NPSN')
                            ->numeric()
                            ->minLength(8)
                            ->maxLength(8)
                            ->required()
                            ->hintAction(
                                Action::make('cek_npsn')
                                    ->label('Buka Web NPSN')
                                    ->icon('heroicon-o-arrow-top-right-on-square')
                                    ->url('https://sekolah.data.kemendikdasmen.go.id/sekolah')
                                    ->openUrlInNewTab()
                            )
                            ->validationMessages([
                                'min_digits' => 'NPSN harus 8 digit.',
                                'max_digits' => 'NPSN harus 8 digit.',
                                'required'   => 'Form ini perlu diisi.',
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
                                'required' => 'Form ini perlu diisi.',
                            ]),

                        Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->options(FormOptions::AKREDITASI),

                        Select::make('status')
                            ->label('Status')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->options(FormOptions::STATUS_SEKOLAH),

                        // FileUpload::make('logo')
                        //     ->label('Logo Instansi')
                        //     ->image()
                        //     ->imageEditor()
                        //     ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                        //     ->fetchFileInformation(false)
                        //     ->directory('assets/instansi-lain')
                        //     ->downloadable()
                        //     ->openable()
                        //     ->maxSize(500)
                        //     ->minSize(10)
                        //     ->visibility('private')
                        //     ->required()
                        //     ->validationMessages(['required' => 'Form ini perlu diisi.']),
                    ])
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                Wizard\Step::make('Data Alamat')
                    ->schema($this->getWilayahFields(''))
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                // Wizard\Step::make('Data Kontak')
                //     ->schema([
                //         TextInput::make('website')
                //             ->label('Website')
                //             ->url()
                //             ->prefixIcon('heroicon-m-globe-alt')
                //             ->placeholder('https://mtsn1pandeglang.sch.id'),

                //         TextInput::make('telepon')
                //             ->label('Telepon')
                //             ->tel()
                //             ->placeholder('08**********')
                //             ->prefixIcon('heroicon-m-phone'),

                //         TextInput::make('email')
                //             ->label('Email')
                //             ->placeholder('adm@mtsn1pandeglang.sch.id')
                //             ->email()
                //             ->prefixIcon('heroicon-m-envelope'),
                //     ])
                //     ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
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
                    ->required()
                    ->live(),
            ]);
    }

    protected function getStatusPendaftaranSection(): Section
    {
        return Section::make('Status Pendaftaran')
            ->icon('heroicon-m-clipboard-document-list')
            ->visible(function () {
                if (Auth::user()->roles->first()->name === 'calon_siswa') {
                    return false;
                }

                // Ambil nilai status_formulir dari state form
                $statusFormulir = $this->data['status_formulir'] ?? 'Diproses';

                return $statusFormulir !== 'Diproses';
            })
            ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2])
            ->schema([
                Select::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options(fn() => Auth::user()->hasRole('super_admin')
                        ? FormOptions::STATUS_PENDAFTARAN_SUPER_ADMIN
                        : FormOptions::STATUS_PENDAFTARAN_REGULAR)
                    ->native(false)
                    ->live()
                    ->default('Diproses')
                    ->required(),

                Select::make('kelas_id')
                    ->label('Kelas')
                    ->visible(fn(Get $get) => in_array($get('status_pendaftaran'), [
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan',
                    ]))
                    ->required(fn(Get $get) => in_array($get('status_pendaftaran'), [
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
                $this->getBerkasField('nisn', 'Kartu NISN/Tangkapan Layar NISN (Web)')
                    ->hintAction(
                        Action::make('cek_nisn')
                            ->label('Buka Web NISN')
                            ->icon('heroicon-o-arrow-top-right-on-square')
                            ->url(fn(Get $get) => 'https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynisn/' . $get('nisn'))
                            ->openUrlInNewTab()
                    ),
                $this->getBerkasField('skbb', 'Surat Keterangan Berkelakuan Baik'),
                $this->getBerkasField('skab', 'Surat Keterangan Aktif Belajar'),

                $this->getBerkasField(
                    'kip',
                    'Kartu Indonesia Pintar',
                    fn($get) => $get('no_kip') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti KIP.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_kip') !== null),

                $this->getBerkasField(
                    'kks',
                    'Kartu Keluarga Sejahtera',
                    fn($get) => $get('no_kks') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti KKS.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_kks') !== null),

                $this->getBerkasField(
                    'pkh',
                    'Kartu Program Keluarga Harapan',
                    fn($get) => $get('no_pkh') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti PKH.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_pkh') !== null),

                $this->getBerkasField(
                    'sktm',
                    'Surat Keterangan Tidak Mampu',
                    fn($get) => $get('no_sktm') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti SKTM.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'faktur_listrik',
                    'Faktur Listrik',
                    fn($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah Faktur Pembayaran Listrik 3 Bulan Terakhir.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'rumah_depan',
                    'Foto Depan Rumah',
                    fn($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah foto depan rumah.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'rumah_dalam',
                    'Foto Dalam Rumah',
                    fn($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah foto dalam rumah.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'rumah_belakang',
                    'Foto Belakang Rumah',
                    fn($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah foto belakang rumah.<sup style="color:red">*</sup></i></small>'
                )->visible(fn($get) => $get('no_sktm') !== null),
            ]);
    }


    protected function getOrangTuaTabs(string $type, string $label, bool $required = true): Tabs
    {
        $isWali        = $type === 'wali';
        $wajibJikaWali = fn(Get $get) =>
        $get('ayah_status') === 'Meninggal' &&
            $get('ibu_status')  === 'Meninggal';

        return Tabs::make("Data {$label}")
            // Tab wali hanya tampil jika ayah DAN ibu meninggal
            ->visible($isWali ? $wajibJikaWali : true)
            ->tabs([
                Tabs\Tab::make("Data {$label}")
                    ->icon('heroicon-m-bell')
                    ->iconPosition(IconPosition::After)
                    ->schema($this->getOrangTuaFields($type, $required)),

                Tabs\Tab::make('Alamat')
                    ->icon('heroicon-m-bell')
                    ->iconPosition(IconPosition::After)
                    ->schema($this->getWilayahFields(
                        $type,
                        // Alamat wali wajib hanya jika ayah DAN ibu meninggal
                        $isWali ? $wajibJikaWali : $required
                    )),
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
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),
            ]);
    }
}

```

---

## Providers

### ./app/Providers/AppServiceProvider.php

```php
<?php

namespace App\Providers;

use App\Models\CalonSiswa;
use App\Observers\CalonSiswaObserver;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
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
        FilamentColor::register([
            'primary' => Color::hex('#0f766e'),
            'gray' => Color::hex('#1e293b'),
            'info' => Color::hex('#6366f1'),
            'success' => Color::hex('#10b981'),
            'warning' => Color::hex('#f59e0b'),
            'danger' => Color::hex('#ef4444'),
        ]);
    }
}

```

---

### ./app/Providers/Filament/AdminPanelProvider.php

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
            ->path('dashboard')
            ->default()
            ->breadcrumbs(false)
            ->spa()
            ->topNavigation()
            ->login(LoginCustom::class)
            ->registration(RegisterCustom::class)
            ->passwordReset(ForgotPasswordCustom::class)
            ->emailVerification(VerifikasiOtp::class)
            ->profile(EditProfileCustom::class)
            ->globalSearch(false)
            ->maxContentWidth(MaxWidth::Full)
            ->unsavedChangesAlerts()
            ->databaseNotifications()
            ->darkMode(true)
            ->defaultThemeMode(ThemeMode::Dark)
            ->font('Lexend')
            ->favicon(asset('/favicon.ico'))
            ->brandLogo(asset('/img/brand-darkmode.png'))
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
            ->theme(asset('css/filament/dashboard/theme.css'))
            ->viteTheme('resources/css/filament/dashboard/theme.css')
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
                    ->withBorder(),

                AuthUIEnhancerPlugin::make()
                    ->formPanelPosition('left')
                    ->formPanelWidth('45%')
                    ->formPanelBackgroundColor(Color::hex('#010101'))
                    ->emptyPanelBackgroundImageUrl('/img/wallpaper.png')
                    ->emptyPanelBackgroundColor(Color::hex('#010101'))
                    ->showEmptyPanelOnMobile(false),
            ]);
    }
}

```

---

## Migrations

### ./database/migrations/0001_01_01_000000_create_users_table.php

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

### ./database/migrations/0001_01_01_000001_create_calon_siswas_table.php

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
            $table->string('no_sktm')->unique()->nullable();
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
            $table->string('berkas_sktm')->nullable();
            $table->string('berkas_prestasi')->nullable();
            $table->string('berkas_faktur_listrik')->nullable();
            $table->string('berkas_rumah_depan')->nullable();
            $table->string('berkas_rumah_dalam')->nullable();
            $table->string('berkas_rumah_belakang')->nullable();

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

### ./database/migrations/0001_01_01_000002_create_cache_table.php

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

### ./database/migrations/0001_01_01_000003_create_jobs_table.php

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

### ./database/migrations/2025_03_07_143839_create_tahun_pendaftarans_table.php

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

### ./database/migrations/2025_03_07_143840_create_pimpinans_table.php

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

### ./database/migrations/2025_03_07_143841_create_ketuas_table.php

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

### ./database/migrations/2025_03_07_143842_create_sekretaris_table.php

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

### ./database/migrations/2025_03_07_143843_create_bendaharas_table.php

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

### ./database/migrations/2025_03_07_143844_create_negaras_table.php

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

### ./database/migrations/2025_03_07_143845_create_provinsis_table.php

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

### ./database/migrations/2025_03_07_143846_create_kabupatens_table.php

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

### ./database/migrations/2025_03_07_143847_create_kecamatans_table.php

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

### ./database/migrations/2025_03_07_143848_create_kelurahans_table.php

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

### ./database/migrations/2025_03_07_143849_create_informasis_table.php

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

### ./database/migrations/2025_03_07_143850_create_sekolahs_table.php

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

### ./database/migrations/2025_03_07_143851_create_sekolah_asals_table.php

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
            $table->enum('akreditasi', ['A', 'B', 'C', 'D', 'TT'])->nullable();
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

### ./database/migrations/2025_03_07_143853_create_prestasis_table.php

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
            $table->enum('jenis', ['Hafalan Al-Quran', 'Olimpiade/Kejuaraan', 'Lainnya'])->nullable();
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

### ./database/migrations/2025_03_07_143854_create_jalur_pendaftarans_table.php

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

### ./database/migrations/2025_03_07_143855_create_kelas_table.php

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

### ./database/migrations/2025_03_07_143958_create_notifications_table.php

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

### ./database/migrations/2025_03_10_000722_create_anggotas_table.php

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

### ./database/migrations/2025_03_11_203459_create_jurusans_table.php

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

### ./database/migrations/2025_03_11_221601_create_ekstrakurikulers_table.php

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

### ./database/migrations/2025_03_16_043544_create_imports_table.php

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

### ./database/migrations/2025_03_16_043545_create_exports_table.php

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

### ./database/migrations/2025_03_16_043546_create_failed_import_rows_table.php

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

### ./database/migrations/2025_03_17_054959_create_mata_pelajarans_table.php

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

### ./database/migrations/2025_03_17_192122_create_permission_tables.php

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
            throw new Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }
        if ($teams && empty($columnNames['team_foreign_key'] ?? null)) {
            throw new Exception('Error: team_foreign_key on config/permission.php not loaded. Run [php artisan config:clear] and try again.');
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
            throw new Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
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

### ./database/migrations/2026_03_05_060527_create_formulir_prestasis.php

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

## Routes

### ./routes/api.php

```php
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

```

---

### ./routes/console.php

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

### ./routes/web.php

```php
<?php

use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\NewPassword;
use App\Filament\Pages\Auth\ResetPasswordOtp;
use App\Filament\Pages\Auth\VerifikasiOtp;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::middleware(['auth'])->group(function () {
    Route::get('/formulir/{calonSiswa}/cetak',  [FormulirController::class, 'cetak'])->name('formulir.cetak');
    Route::get('/kartu-tes/{calonSiswa}/cetak', [FormulirController::class, 'cetakKartuTes'])->name('kartu-tes.cetak');
    Route::get('/skl/{calonSiswa}/cetak',       [FormulirController::class, 'cetakSkl'])->name('skl.cetak');
});

Route::middleware('web')->group(function () {
    Route::get('/verifikasi-otp', VerifikasiOtp::class)->name('otp.verifikasi');
    Route::get('/lupa-password', ForgotPasswordCustom::class)->name('otp.forgot-password');
    Route::get('/reset-password', ResetPasswordOtp::class)->name('otp.reset-password');
    Route::get('/new-password', NewPassword::class)->name('otp.new-password');
});

```

---

## Views - Filament

### ./resources/views/filament/pages/auth/edit-profile.blade.php

```blade
<x-filament-panels::page.simple>


    <x-filament-panels::form wire:submit="authenticate">
        {{ $this->form }}

        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
    </x-filament-panels::form>


    <hr>
    <p class="text-xs text-center text-gray-500 ">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p>
</x-filament-panels::page.simple>

```

---

### ./resources/views/filament/pages/auth/forgot-password.blade.php

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
        <a href="{{ filament()->getLoginUrl() }}"
            class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300">
            Kembali ke Login
        </a>
    </div>

    <hr>
    <p class="text-xs text-center text-gray-500 ">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p>
</x-filament-panels::page.simple>

```

---

### ./resources/views/filament/pages/auth/login.blade.php

```blade
<x-filament-panels::page.simple>
    @if (filament()->hasRegistration())
        <x-slot name="subheading">
            {{ __('filament-panels::pages/auth/login.actions.register.before') }}
            {{ $this->registerAction }}
        </x-slot>
    @endif


    <x-filament-panels::form wire:submit="authenticate">
        {{ $this->form }}
        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
    </x-filament-panels::form>


    {{-- <hr>
    <p class="text-xs text-center text-gray-500">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p> --}}
</x-filament-panels::page.simple>

```

---

### ./resources/views/filament/pages/auth/new-password.blade.php

```blade
<x-filament-panels::page.simple>


    <x-filament-panels::form wire:submit="simpanPassword">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Simpan Password Baru
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 text-sm text-center">
        <a href="{{ route('otp.forgot-password') }}"
            class="font-medium text-gray-500 transition duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
            &larr; Kembali
        </a>
    </div>


    <hr>
    <p class="text-xs text-center text-gray-500 ">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p>
</x-filament-panels::page.simple>

```

---

### ./resources/views/filament/pages/auth/register.blade.php

```blade
<x-filament-panels::page.simple>
    @if (filament()->hasLogin())
        <x-slot name="subheading">
            {{ __('filament-panels::pages/auth/register.actions.login.before') }}
            {{ $this->loginAction }}
        </x-slot>
    @endif


    <x-filament-panels::form wire:submit="register">
        {{ $this->form }}

        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
    </x-filament-panels::form>

    <hr>
    <p class="text-xs text-center text-gray-500 ">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p>
</x-filament-panels::page.simple>

```

---

### ./resources/views/filament/pages/auth/reset-password-otp.blade.php

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
            <button wire:click="resend" wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed"
                type="button"
                class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300">
                Kirim ulang
            </button>
        </div>

        <div>
            <a href="{{ route('otp.forgot-password') }}"
                class="inline-block font-medium text-gray-500 transition duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200">
                &larr; Kembali
            </a>
        </div>
    </div>
    <hr>
    <p class="text-xs text-center text-gray-500 ">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p>
</x-filament-panels::page.simple>

```

---

### ./resources/views/filament/pages/auth/verifikasi-otp.blade.php

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
        <button wire:click="resend" wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed"
            type="button"
            class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300">
            Kirim ulang
        </button>
    </div>

    <hr>
    <p class="text-xs text-center text-gray-500 ">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p>
</x-filament-panels::page.simple>

```

---

## Views - Partials

### ./resources/views/partials/pdf-header.blade.php

```blade
@php
    use Illuminate\Support\Facades\Storage;
    $logoMadrasah = $instansi?->logo ?? null;
    $logoInstitusi = $instansi?->logo_institusi ?? null;

    $alamat = collect([
        $instansi?->alamat,
        optional($instansi?->kelurahan)->nama,
        optional($instansi?->kecamatan)->nama,
        optional($instansi?->kabupaten)->nama,
        optional($instansi?->provinsi)->nama,
    ])
        ->filter()
        ->map(fn($item) => ucwords(strtolower($item)))
        ->implode(', ');

    $kontak = collect([
        $instansi?->website ? 'Website: ' . $instansi->website : null,
        $instansi?->email ? 'Email: ' . $instansi->email : null,
        $instansi?->telepon ? 'Telp: ' . $instansi->telepon : null,
    ])
        ->filter()
        ->implode('  |  ');
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
                Kantor Kementerian Agama
                {{ ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Kabupaten Pandeglang')) }}
            </div>
            <div
                style="font-size: 14pt; font-weight: bold; text-transform: uppercase; letter-spacing: 1pt; margin-top: 3px;">
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

## Views

### ./resources/views/components/auth-wrapper.blade.php

```blade
<div class="custom-auth-form-wrapper">
    {{ $slot }}

    <hr class="my-3 border-gray-700">
    <p class="text-xs text-center text-gray-500">
        &copy; {{ date('Y') }} PMBM MTsN 1 Pandeglang. All rights reserved.
    </p>
</div>

```

---

### ./resources/views/formulir.blade.php

```blade
@php
    use Illuminate\Support\Facades\Storage;
    use Carbon\Carbon;

    // Set locale Carbon ke Indonesia
    Carbon::setLocale('id');

    $isJalurPrestasi = optional($record->jalurPendaftaran)->nama === 'Prestasi';
    $jenisKelamin = $record->jenis_kelamin === 'Pria' ? 'Laki-laki' : 'Perempuan';
    $fotoUrl = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload = url('/dashboard/formulir/' . $record->id);
    $isDraft = $record->status_formulir !== 'Disetujui';
    $kota = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));

    // Format tanggal Indonesia
    $tglLahir = $record->tanggal_lahir ? Carbon::parse($record->tanggal_lahir)->translatedFormat('d F Y') : '-';

    $tglDibuatPada = Carbon::parse($record->updated_at)->translatedFormat('d F Y');

    $alamatSiswa = collect([
        $record->siswa_alamat,
        optional($record->siswaKelurahan)->nama,
        optional($record->siswaKecamatan)->nama,
        optional($record->siswaKabupaten)->nama,
        optional($record->siswaProvinsi)->nama,
    ])
        ->filter()
        ->implode(', ');

    $biodata = [
        ['No. Pendaftaran', $record->nomor_pendaftaran ?? '-'],
        ['Nama Lengkap', strtoupper($record->nama ?? '-')],
        ['Jalur Pendaftaran', strtoupper(optional($record->jalurPendaftaran)->nama ?? '-')],
        ['NISN / NIK', ($record->nisn ?? '-') . '  /  ' . ($record->nik ?? '-')],
        ['Tempat, Tgl Lahir', ucwords(strtolower($record->tempat_lahir ?? '')) . ', ' . $tglLahir],
        ['Jenis Kelamin', $jenisKelamin],
        ['Agama', ucwords(strtolower($record->agama ?? '-'))],
        ['Asal Sekolah', strtoupper(optional($record->sekolahAsal)->nama ?? '-')],
        ['No. Telepon', $record->siswa_telepon ?? '-'],
        ['Alamat Siswa', ucwords(strtolower($alamatSiswa))],
    ];

    if ($record->penerima_kip) {
        $biodata[] = [
            'KIP / KKS / PKH',
            ($record->no_kip ?? '-') . ' / ' . ($record->no_kks ?? '-') . ' / ' . ($record->no_pkh ?? '-'),
        ];
    }
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm;
        }

        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 9.5pt;
            color: #374151;
            line-height: 1.5;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .title-doc {
            font-family: 'Georgia', serif;
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
            color: #111827;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 15px;
        }

        .subtitle-doc {
            text-align: center;
            font-size: 10pt;
            color: #6b7280;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .section-title {
            background-color: #f3f4f6;
            color: #111827;
            padding: 6px 10px;
            font-size: 9pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-left: 4px solid #059669;
            margin: 15px 0 8px 0;
        }

        .data-table td {
            padding: 6px 4px;
            border-bottom: 1px solid #f3f4f6;
            vertical-align: top;
        }

        .data-table tr:last-child td {
            border-bottom: none;
        }

        .data-table .lbl {
            width: 30%;
            color: #6b7280;
            font-size: 8.5pt;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .data-table .cln {
            width: 3%;
            text-align: center;
            color: #9ca3af;
        }

        .data-table .val {
            font-weight: bold;
            color: #1f2937;
        }

        .photo-wrapper {
            width: 3.5cm;
            padding-left: 15px;
            vertical-align: top;
        }

        .photo-box {
            width: 3cm;
            height: 4cm;
            border: 2px solid #e5e7eb;
            border-radius: 4px;
            padding: 3px;
            text-align: center;
            background: #f9fafb;
            display: table-cell;
            vertical-align: middle;
        }

        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 2px;
        }

        .photo-text {
            font-size: 8pt;
            color: #9ca3af;
            letter-spacing: 1px;
        }

        .watermark {
            position: absolute;
            top: 35%;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 80pt;
            font-family: 'Georgia', serif;
            color: rgba(220, 38, 38, 0.05);
            transform: rotate(-30deg);
            z-index: -1000;
            letter-spacing: 5px;
        }

        .signature-area {
            margin-top: 30px;
            page-break-inside: avoid;
        }

        .sig-box {
            text-align: center;
            font-size: 9.5pt;
            color: #374151;
            vertical-align: bottom;
        }

        .sig-name {
            font-weight: bold;
            color: #111827;
            text-decoration: underline;
            margin-bottom: 2px;
            display: inline-block;
        }

        @media print {
            .no-print {
                display: none !important;
            }

            body {
                margin: 0;
            }
        }
    </style>
</head>

<body>

    @if ($isDraft)
        <div class="watermark">DRAFT DOCUMENT</div>
    @endif

    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="title-doc">Formulir Pendaftaran Murid Baru Madrasah</div>
    <div class="subtitle-doc">Tahun Pelajaran {{ $tahunPendaftaran?->nama ?? '' }}</div>

    <div class="section-title">A. Identitas Calon Peserta Didik</div>
    <table>
        <tr>
            <td style="vertical-align: top; padding: 0;">
                <table class="data-table">
                    @foreach ($biodata as [$label, $value])
                        <tr>
                            <td class="lbl">{{ $label }}</td>
                            <td class="cln">:</td>
                            <td class="val">{{ $value }}</td>
                        </tr>
                    @endforeach
                </table>
            </td>
            <td class="photo-wrapper">
                <div class="photo-box">
                    @if ($fotoUrl)
                        <img src="{{ $fotoUrl }}" alt="Foto">
                    @else
                        <span class="photo-text">FOTO<br>3x4</span>
                    @endif
                </div>
            </td>
        </tr>
    </table>

    <div class="section-title">B. Data Orang Tua / Wali</div>
    <table class="data-table">
        <tr>
            <td class="lbl" style="width: 25%;">Nama Ayah / Ibu</td>
            <td class="cln">:</td>
            <td class="val">{{ strtoupper($record->ayah_nama ?? '-') }} &nbsp;|&nbsp;
                {{ strtoupper($record->ibu_nama ?? '-') }}</td>
        </tr>
        <tr>
            <td class="lbl">Pekerjaan</td>
            <td class="cln">:</td>
            <td class="val">{{ $record->ayah_pekerjaan ?? '-' }} &nbsp;|&nbsp; {{ $record->ibu_pekerjaan ?? '-' }}
            </td>
        </tr>
        <tr>
            <td class="lbl">No. Telepon/WhatsApp</td>
            <td class="cln">:</td>
            <td class="val">{{ $record->ayah_telepon ?? ($record->ibu_telepon ?? '-') }}</td>
        </tr>
    </table>

    @if ($isJalurPrestasi)
        <div class="section-title">C. Rekam Prestasi</div>
        <table style="width: 100%; border-collapse: collapse; margin-top: 5px;">
            <thead>
                <tr style="background-color: #f9fafb; border-bottom: 2px solid #e5e7eb;">
                    <th
                        style="padding: 8px; text-align: left; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">
                        No</th>
                    <th
                        style="padding: 8px; text-align: left; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">
                        Nama Prestasi / Perlombaan</th>
                    <th
                        style="padding: 8px; text-align: center; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">
                        Tingkat</th>
                    <th
                        style="padding: 8px; text-align: center; font-size: 8.5pt; color: #6b7280; text-transform: uppercase;">
                        Peringkat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($record->formulirPrestasis as $i => $fp)
                    <tr style="border-bottom: 1px solid #f3f4f6;">
                        <td style="padding: 8px; font-weight: bold;">{{ $i + 1 }}</td>
                        <td style="padding: 8px; color: #111827;">{{ $fp->nama_prestasi }}</td>
                        <td style="padding: 8px; text-align: center;">{{ optional($fp->prestasi)->tingkat ?? '-' }}
                        </td>
                        <td style="padding: 8px; text-align: center; font-weight: bold;">
                            {{ optional($fp->prestasi)->peringkat ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4"
                            style="padding: 15px; text-align: center; font-style: italic; color: #9ca3af;">Tidak ada
                            data prestasi yang dilampirkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @endif

    <div class="signature-area">
        <table>
            <tr>
                <td style="width: 25%; vertical-align: bottom;">
                    {!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}
                    <div style="font-size: 7.5pt; color: #9ca3af; margin-top: 5px; letter-spacing: 0.5px;">SCAN TO
                        VERIFY</div>
                </td>
                <td class="sig-box" style="width: 37.5%;">
                    {{ $kota }}, {{ $tglDibuatPada }}<br>
                    <span style="color: #6b7280; font-size: 9pt;">Ketua Panitia PMBM,</span>
                    <div style="height: 70px;">
                        @if ($ketua?->berkas_tte)
                            <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:60px; margin-top:5px;">
                        @endif
                    </div>
                    <div class="sig-name">{{ $ketua?->nama ?? str_repeat('.', 35) }}</div><br>
                    <span style="font-size: 8.5pt; color: #6b7280;">NIP. {{ $ketua?->nip ?? '-' }}</span>
                </td>
                <td class="sig-box" style="width: 37.5%;">
                    <br>
                    <span style="color: #6b7280; font-size: 9pt;">Sekretaris Panitia,</span>
                    <div style="height: 70px;">
                        @if ($sekretaris?->berkas_tte)
                            <img src="{{ Storage::url($sekretaris->berkas_tte) }}"
                                style="height:60px; margin-top:5px;">
                        @endif
                    </div>
                    <div class="sig-name">{{ $sekretaris?->nama ?? str_repeat('.', 35) }}</div><br>
                    <span style="font-size: 8.5pt; color: #6b7280;">NIP. {{ $sekretaris?->nip ?? '-' }}</span>
                </td>
            </tr>
        </table>
    </div>

    {{-- Tombol Print (tidak muncul saat print) --}}
    <div class="no-print" style="text-align:center; margin-top: 30px;">
        <button onclick="window.print()"
            style="padding: 10px 30px; background: #059669; color: white; border: none;
               border-radius: 8px; font-size: 14px; cursor: pointer; letter-spacing: 0.5px;">
            🖨️ Cetak Formulir
        </button>
    </div>

</body>

</html>

```

---

### ./resources/views/kartu-tes.blade.php

```blade
@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Storage;

    $fotoUrl = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload = url('/dashboard/formulir/' . $record->id);
    $tglAkademik = $record->tes_akademik ? Carbon::parse($record->tes_akademik) : null;
    $tglPraktik = $record->tes_praktik ? Carbon::parse($record->tes_praktik) : null;
    $kota = ucwords(strtolower(optional($instansi?->kabupaten)->nama ?? 'Pandeglang'));
    $tglTtd = $tahunPendaftaran?->tanggal_penerbitan_kartu_tes_mulai
        ? date('d F Y', strtotime($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai))
        : date('d F Y');
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm;
        }

        body {
            font-family: 'Helvetica', sans-serif;
            font-size: 10pt;
            color: #1f2937;
            line-height: 1.4;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .card-container {
            border: 2px solid #111827;
            border-radius: 8px;
            padding: 20px;
            position: relative;
        }

        .card-header {
            text-align: center;
            border-bottom: 2px dashed #d1d5db;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .card-title {
            font-family: 'Georgia', serif;
            font-size: 16pt;
            font-weight: bold;
            color: #111827;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card-subtitle {
            font-size: 10pt;
            color: #4b5563;
            margin-top: 5px;
            letter-spacing: 1px;
        }

        .info-lbl {
            font-size: 9pt;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        .info-val {
            font-size: 11pt;
            font-weight: bold;
            color: #111827;
            margin-bottom: 12px;
        }

        .photo-box {
            width: 3.5cm;
            height: 4.5cm;
            border: 3px solid #e5e7eb;
            border-radius: 6px;
            padding: 3px;
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 3px;
        }

        .schedule-box {
            border: 1px solid #d1d5db;
            border-radius: 6px;
            overflow: hidden;
            margin-top: 10px;
        }

        .schedule-header {
            background-color: #f3f4f6;
            padding: 8px;
            text-align: center;
            font-weight: bold;
            font-size: 9.5pt;
            letter-spacing: 1px;
            color: #374151;
            border-bottom: 1px solid #d1d5db;
        }

        .schedule-cell {
            padding: 10px;
            text-align: center;
        }

        .schedule-time {
            font-size: 12pt;
            font-weight: bold;
            color: #059669;
        }

        .schedule-date {
            font-size: 9pt;
            color: #4b5563;
            margin-top: 4px;
        }

        .cbt-alert {
            background-color: #eff6ff;
            border: 1px solid #bfdbfe;
            border-left: 4px solid #3b82f6;
            border-radius: 4px;
            padding: 12px 15px;
            margin-top: 20px;
        }

        .cbt-title {
            font-size: 9pt;
            font-weight: bold;
            color: #1e3a8a;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .cbt-creds {
            font-family: 'Courier New', Courier, monospace;
            font-size: 14pt;
            font-weight: bold;
            color: #1e40af;
            letter-spacing: 2px;
        }

        .card-footer {
            margin-top: 25px;
            border-top: 2px dashed #d1d5db;
            padding-top: 15px;
        }
    </style>
</head>

<body>

    @include('partials.pdf-header', ['instansi' => $instansi])

    <div class="card-container">
        <div class="card-header">
            <div class="card-title">Kartu Tes Peserta</div>
            <div class="card-subtitle">Penerimaan Murid Baru Madrasah Tahun Pelajaran
                {{ $tahunPendaftaran?->nama ?? '' }}</div>
        </div>

        <table>
            <tr>
                <td style="vertical-align: top; width: 70%;">
                    <div class="info-lbl">Nomor Registrasi</div>
                    <div class="info-val" style="font-size: 14pt; color: #059669;">{{ $record->nomor_pendaftaran ?? '-' }}
                    </div>

                    <div class="info-lbl">Nama Lengkap Peserta</div>
                    <div class="info-val" style="font-size: 13pt;">{{ strtoupper($record->nama ?? '-') }}</div>

                    <div class="info-lbl">Asal Sekolah</div>
                    <div class="info-val">{{ strtoupper(optional($record->sekolahAsal)->nama ?? '-') }}</div>

                    <div class="info-lbl">Jalur Pendaftaran</div>
                    <div class="info-val">{{ strtoupper(optional($record->jalurPendaftaran)->nama ?? '-') }}</div>
                </td>
                <td style="vertical-align: top; text-align: right; width: 30%;">
                    <div class="photo-box" style="float: right;">
                        @if ($fotoUrl)
                            <img src="{{ $fotoUrl }}" alt="Foto">
                        @else
                            <span style="font-size: 9pt; color: #9ca3af;">PAS FOTO</span>
                        @endif
                    </div>
                </td>
            </tr>
        </table>

        <table class="schedule-box">
            <tr>
                {{-- <td style="width: 50%; border-right: 1px solid #d1d5db; padding: 0;">
                    <div class="schedule-header">UJIAN AKADEMIK (CBT)</div>
                    <div class="schedule-cell">
                        <div class="info-lbl">Ruang / Sesi</div>
                        <div style="font-weight: bold; font-size: 11pt; color: #111827; margin-bottom: 8px;">
                            {{ $record->tes_ruang ?? '-' }} / Sesi {{ $record->tes_sesi ?? '-' }}</div>
                        <div class="schedule-time">{{ $tglAkademik ? $tglAkademik->format('H:i') . ' WIB' : '-' }}</div>
                        <div class="schedule-date">{{ $tglAkademik ? $tglAkademik->translatedFormat('l, d F Y') : '-' }}
                        </div>
                    </div>
                </td> --}}
                <td style="width: 50%; padding: 0;">
                    <div class="schedule-header">TES PRAKTIK IBADAH & BTQ</div>
                    <div class="schedule-cell">
                        <div class="info-lbl">Ruang / Sesi</div>
                        <div style="font-weight: bold; font-size: 11pt; color: #111827; margin-bottom: 8px;">
                            {{ $record->tes_ruang ?? '-' }} / Sesi {{ $record->tes_sesi ?? '-' }}</div>
                        <div class="schedule-time">{{ $tglPraktik ? $tglPraktik->format('H:i') . ' WIB' : '-' }}</div>
                        <div class="schedule-date">{{ $tglPraktik ? $tglPraktik->translatedFormat('l, d F Y') : '-' }}
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        {{-- <div class="cbt-alert">
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
        </div> --}}

        <div class="card-footer">
            <table>
                <tr>
                    <td style="width: 25%; vertical-align: middle;">
                        {!! QrCode::size(70)->margin(0)->generate($qrPayload) !!}
                    </td>
                    <td style="width: 75%; text-align: right; vertical-align: bottom;">
                        <span style="font-size: 9pt; color: #6b7280;">{{ $kota }},
                            {{ $tglTtd }}</span><br>
                        <span style="font-size: 9.5pt; font-weight: bold; color: #111827;">Panitia Penerimaan Peserta
                            Didik Baru</span>
                        <div style="height: 60px; margin-top: 5px;">
                            @if ($ketua?->berkas_tte)
                                <img src="{{ Storage::url($ketua->berkas_tte) }}" style="height:55px;">
                            @endif
                        </div>
                        <span
                            style="font-size: 9.5pt; font-weight: bold; text-decoration: underline;">{{ $ketua?->nama ?? '............................................' }}</span><br>
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

### ./resources/views/landing.blade.php

```blade
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description"
        content="PMBM MTsN 1 Pandeglang TP 2026/2027 — Pendaftaran peserta didik baru Jalur Prestasi, Afirmasi, dan Reguler. Gratis, transparan, dan objektif.">
    <meta property="og:title" content="PMBM MTsN 1 Pandeglang TP 2026/2027">
    <meta property="og:description"
        content="3 Jalur Pendaftaran: Prestasi, Afirmasi & Reguler. 224 Kuota Tersedia. Gratis.">
    <title>PMBM MTsN 1 Pandeglang — TP 2026/2027</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px
        }

        :root {
            --teal: #0d9488;
            --teal-l: #14b8a6;
            --teal-d: #0f766e;
            --teal-xl: #5eead4;
            --gold: #d4a843;
            --gold-l: #f0c96a;
            --red: #dc2626;
            --red-l: #ef4444;
            --blue: #2563eb;
            --blue-l: #60a5fa;
            --amber: #f59e0b;
            --bg: #060d0c;
            --bg2: #091210;
            --surface: #0e1a18;
            --card: rgba(20, 184, 166, .06);
            --card2: rgba(255, 255, 255, .03);
            --border: rgba(20, 184, 166, .12);
            --border2: rgba(255, 255, 255, .06);
            --text: #e2f4f1;
            --muted: #6aada3;
            --muted2: #4a8078;
            --radius: 16px;
            --nav-h: 62px;
            --shadow-teal: 0 0 40px rgba(13, 148, 136, .18);
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            overflow-x: hidden;
            line-height: 1.65;
            -webkit-font-smoothing: antialiased
        }

        ::-webkit-scrollbar {
            width: 4px
        }

        ::-webkit-scrollbar-thumb {
            background: var(--teal);
            border-radius: 4px
        }

        /* ── NOISE TEXTURE OVERLAY ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.03'/%3E%3C/svg%3E");
            opacity: .4;
            pointer-events: none;
            z-index: 0
        }

        /* ── ORB / GLOW ── */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(140px);
            opacity: .07;
            pointer-events: none;
            z-index: 0;
            animation: orb-drift 18s ease-in-out infinite alternate
        }

        .orb-1 {
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, var(--teal), transparent 70%);
            top: -300px;
            left: -300px
        }

        .orb-2 {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--gold), transparent 70%);
            bottom: -200px;
            right: -250px;
            animation-delay: -9s
        }

        @keyframes orb-drift {
            0% {
                transform: translate(0, 0) scale(1)
            }

            100% {
                transform: translate(30px, 20px) scale(1.08)
            }
        }

        /* ── GRID LINES BG ── */
        .grid-bg {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background-image: linear-gradient(rgba(13, 148, 136, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(13, 148, 136, .04) 1px, transparent 1px);
            background-size: 60px 60px;
            mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, black 40%, transparent 100%)
        }

        /* ── NAV ── */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 200;
            height: var(--nav-h);
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(6, 13, 12, .88);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(24px) saturate(180%);
            transition: background .3s, box-shadow .3s
        }

        nav.scrolled {
            background: rgba(6, 13, 12, .97);
            box-shadow: 0 1px 0 var(--border), var(--shadow-teal)
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: .65rem;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            flex-shrink: 0
        }

        .nav-logo {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
            border: 1px solid var(--border)
        }

        .nav-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .nav-name {
            font-size: .86rem;
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: -.01em
        }

        .nav-sub {
            font-size: .62rem;
            font-weight: 500;
            color: var(--teal-l)
        }

        .nav-links {
            display: flex;
            gap: .1rem;
            list-style: none
        }

        .nav-links a {
            text-decoration: none;
            color: var(--muted);
            font-size: .79rem;
            font-weight: 500;
            padding: .38rem .65rem;
            border-radius: 8px;
            transition: all .2s;
            white-space: nowrap
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--teal-xl);
            background: rgba(20, 184, 166, .1)
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: .5rem;
            flex-shrink: 0
        }

        .n-btn {
            height: 34px;
            padding: 0 .65rem;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: var(--card2);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .8rem;
            color: inherit;
            transition: all .2s;
            white-space: nowrap;
            font-weight: 600
        }

        .n-btn:hover {
            border-color: var(--teal);
            color: var(--teal-xl);
            background: rgba(20, 184, 166, .1)
        }

        #menuBtn {
            width: 36px;
            flex-direction: column;
            gap: 5px;
            display: none
        }

        #menuBtn span {
            display: block;
            width: 18px;
            height: 2px;
            background: currentColor;
            border-radius: 2px;
            transition: all .3s;
            margin: 0 auto
        }

        #menuBtn.open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg)
        }

        #menuBtn.open span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0)
        }

        #menuBtn.open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg)
        }

        /* ── DRAWER ── */
        .drawer {
            position: fixed;
            top: var(--nav-h);
            left: 0;
            right: 0;
            z-index: 190;
            flex-direction: column;
            background: rgba(6, 13, 12, .98);
            border-bottom: 1px solid transparent;
            max-height: 0;
            overflow: hidden;
            transition: max-height .38s cubic-bezier(.4, 0, .2, 1), padding .3s, border-color .3s;
            display: flex;
            backdrop-filter: blur(20px)
        }

        .drawer.open {
            max-height: 560px;
            padding: 1rem 1.5rem 2rem;
            border-color: var(--border)
        }

        .drawer a {
            text-decoration: none;
            color: var(--muted);
            font-size: .88rem;
            font-weight: 500;
            padding: .6rem .9rem;
            border-radius: 10px;
            transition: all .2s
        }

        .drawer a:hover {
            color: var(--teal-xl);
            background: rgba(20, 184, 166, .08)
        }

        .drawer hr {
            border: none;
            border-top: 1px solid var(--border);
            margin: .6rem 0
        }

        /* ── LAYOUT ── */
        .wrap {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 1.5rem
        }

        section {
            padding: 5.5rem 1.5rem;
            position: relative;
            z-index: 1
        }

        h1,
        h2,
        h3 {
            font-weight: 800;
            letter-spacing: -.03em;
            line-height: 1.1
        }

        h1 {
            font-size: clamp(2.2rem, 5vw, 3.8rem)
        }

        h2 {
            font-size: clamp(1.6rem, 3.5vw, 2.4rem)
        }

        .grad {
            background: linear-gradient(135deg, var(--teal-xl), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .grad-teal {
            background: linear-gradient(135deg, var(--teal-l), var(--teal-xl));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .3rem .9rem;
            border-radius: 999px;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            background: rgba(20, 184, 166, .1);
            color: var(--teal-xl);
            border: 1px solid rgba(20, 184, 166, .25);
            margin-bottom: .85rem
        }

        .divider {
            width: 44px;
            height: 3px;
            background: linear-gradient(90deg, var(--teal), var(--gold));
            border-radius: 999px;
            margin: .6rem 0 0
        }

        .section-header {
            margin-bottom: 3rem
        }

        .section-header.center {
            text-align: center
        }

        .section-header.center .divider {
            margin: .6rem auto 0
        }

        .lead {
            font-size: .95rem;
            color: var(--muted);
            line-height: 1.85
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            backdrop-filter: blur(12px);
            transition: border-color .3s, transform .3s, box-shadow .3s
        }

        .card-hover:hover {
            border-color: rgba(20, 184, 166, .35);
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(13, 148, 136, .15)
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            padding: .7rem 1.6rem;
            border-radius: 10px;
            font-size: .88rem;
            font-weight: 700;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: all .25s;
            white-space: nowrap;
            letter-spacing: -.01em
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--teal), var(--teal-d));
            color: #fff;
            box-shadow: 0 0 28px rgba(13, 148, 136, .28)
        }

        .btn-primary:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 36px rgba(13, 148, 136, .44)
        }

        .btn-ghost {
            background: transparent;
            color: var(--muted);
            border: 1px solid var(--border2)
        }

        .btn-ghost:hover {
            color: var(--teal-xl);
            border-color: rgba(20, 184, 166, .45);
            background: rgba(20, 184, 166, .07)
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--gold), #b8882a);
            color: #fff;
            box-shadow: 0 0 24px rgba(212, 168, 67, .22)
        }

        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 32px rgba(212, 168, 67, .36)
        }

        .btn-lg {
            padding: .9rem 2.2rem;
            font-size: .98rem;
            border-radius: 12px
        }

        .badge {
            display: inline-block;
            padding: .22rem .8rem;
            border-radius: 999px;
            font-size: .67rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .07em
        }

        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.5rem;
            align-items: start
        }

        .infobox {
            display: flex;
            gap: .8rem;
            padding: 1rem 1.25rem;
            border-radius: 12px;
            font-size: .82rem;
            line-height: 1.7;
            align-items: flex-start;
            margin-top: 1.5rem
        }

        .infobox-icon {
            font-size: 1rem;
            flex-shrink: 0;
            margin-top: .15rem
        }

        /* ── HERO ── */
        #hero {
            min-height: 100svh;
            padding-top: var(--nav-h);
            display: flex;
            align-items: center;
            overflow: hidden
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 4rem;
            align-items: center;
            max-width: 1180px;
            margin: 0 auto;
            width: 100%;
            padding: 4rem 1.5rem
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .35rem .9rem;
            border-radius: 999px;
            font-size: .7rem;
            font-weight: 700;
            background: rgba(212, 168, 67, .1);
            border: 1px solid rgba(212, 168, 67, .28);
            color: var(--gold-l);
            margin-bottom: 1.25rem;
            animation: fade-up .6s ease both .1s;
            max-width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .hero-title {
            animation: fade-up .7s ease both .2s
        }

        .hero-desc {
            animation: fade-up .7s ease both .3s
        }

        .hero-cta {
            display: flex;
            gap: .75rem;
            flex-wrap: wrap;
            margin-top: 2rem;
            animation: fade-up .7s ease both .4s
        }

        .hero-cta .btn {
            flex: 1 1 auto;
            min-width: 0;
            justify-content: center;
            text-align: center
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            margin-top: 2.5rem;
            padding-top: 1.75rem;
            border-top: 1px solid var(--border);
            animation: fade-up .7s ease both .5s
        }

        .stat-val {
            font-size: 1.6rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--teal-xl), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1.1
        }

        .stat-lbl {
            font-size: .65rem;
            color: var(--muted);
            margin-top: .2rem;
            line-height: 1.3
        }

        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        /* ── COUNTDOWN CARD ── */
        .cd-card {
            padding: 1.85rem;
            border-radius: 22px;
            background: rgba(13, 148, 136, .07);
            border: 1px solid rgba(20, 184, 166, .18);
            backdrop-filter: blur(16px);
            animation: fade-up .8s ease both .4s;
            position: relative;
            overflow: hidden
        }

        .cd-card::before {
            content: '';
            position: absolute;
            top: -60%;
            left: -60%;
            width: 220%;
            height: 220%;
            background: radial-gradient(circle at 60% 40%, rgba(20, 184, 166, .08), transparent 55%);
            pointer-events: none
        }

        .cd-label {
            font-size: .69rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: var(--gold-l);
            text-align: center;
            margin-bottom: .85rem
        }

        .cd-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: .6rem
        }

        .cd-box {
            background: rgba(13, 148, 136, .1);
            border: 1px solid rgba(20, 184, 166, .15);
            border-radius: 12px;
            padding: .95rem .4rem;
            text-align: center
        }

        .cd-n {
            font-size: 1.95rem;
            font-weight: 900;
            font-variant-numeric: tabular-nums;
            background: linear-gradient(135deg, var(--teal-xl), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1
        }

        .cd-l {
            font-size: .57rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: .12em;
            margin-top: .28rem
        }

        .cd-footer {
            margin-top: 1.25rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border);
            font-size: .71rem;
            color: var(--muted);
            text-align: center
        }

        .cd-footer a {
            color: var(--teal-xl);
            text-decoration: none
        }

        .cd-jalur-row {
            display: flex;
            flex-direction: column;
            gap: .55rem;
            margin-top: .95rem;
            padding-top: .9rem;
            border-top: 1px solid var(--border)
        }

        .cd-jalur-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: .77rem;
            gap: .5rem
        }

        /* ── STATS BAR ── */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            max-width: 1180px;
            margin: 0 auto
        }

        .stat-box {
            background: var(--surface);
            padding: 1.85rem 1.25rem;
            text-align: center;
            transition: background .2s
        }

        .stat-box:hover {
            background: rgba(13, 148, 136, .08)
        }

        .stat-box .val {
            font-size: 2rem;
            font-weight: 900
        }

        .stat-box .lbl {
            font-size: .74rem;
            color: var(--muted);
            margin-top: .3rem
        }

        /* ── SECTION DIVIDER ── */
        .sec-sep {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 0;
            position: relative;
            z-index: 1
        }

        /* ── JALUR CARDS ── */
        .jalur-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.35rem
        }

        .jalur-card {
            padding: 1.85rem;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            gap: .45rem;
            position: relative;
            overflow: hidden
        }

        .jalur-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            opacity: 0;
            transition: opacity .3s;
            border-radius: 0 0 var(--radius) var(--radius)
        }

        .jalur-card:hover::after {
            opacity: 1
        }

        .jalur-card.c-gold::after {
            background: linear-gradient(90deg, var(--gold), var(--gold-l))
        }

        .jalur-card.c-blue::after {
            background: linear-gradient(90deg, var(--blue), var(--blue-l))
        }

        .jalur-card.c-teal::after {
            background: linear-gradient(90deg, var(--teal), var(--teal-xl))
        }

        .jalur-name {
            font-size: 1.05rem;
            font-weight: 800;
            margin: .3rem 0;
            letter-spacing: -.02em
        }

        .jalur-desc {
            font-size: .82rem;
            color: var(--muted);
            line-height: 1.75;
            flex: 1
        }

        .jalur-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1.1rem;
            padding-top: .9rem;
            border-top: 1px solid var(--border2);
            font-size: .73rem;
            color: var(--muted)
        }

        /* ── JADWAL / SCHED ── */
        .sched-list {
            display: flex;
            flex-direction: column
        }

        .sched-item {
            display: flex;
            align-items: flex-start;
            gap: .85rem;
            padding: .85rem 0;
            border-bottom: 1px solid var(--border2);
            transition: background .2s;
            border-radius: 8px;
            padding-left: .5rem;
            padding-right: .5rem
        }

        .sched-item:last-child {
            border-bottom: none
        }

        .sched-item:hover {
            background: rgba(13, 148, 136, .05)
        }

        .sched-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: rgba(20, 184, 166, .1);
            border: 1px solid rgba(20, 184, 166, .18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .82rem;
            flex-shrink: 0;
            margin-top: .1rem
        }

        .sched-content {
            flex: 1
        }

        .sched-title {
            font-size: .84rem;
            font-weight: 700
        }

        .sched-date {
            font-size: .72rem;
            color: var(--muted);
            margin-top: .15rem;
            line-height: 1.5
        }

        .sched-badge {
            flex-shrink: 0;
            margin-top: .1rem
        }

        /* ── TIMELINE ── */
        .timeline {
            padding-left: 1.85rem;
            position: relative
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: .38rem;
            top: .6rem;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--teal), var(--gold), transparent)
        }

        .tl-item {
            position: relative;
            padding: .95rem 0 .95rem 1.1rem;
            border-bottom: 1px solid var(--border2)
        }

        .tl-item:last-child {
            border-bottom: none
        }

        .tl-dot {
            position: absolute;
            left: -1.85rem;
            top: 1.2rem;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--teal);
            border: 3px solid var(--bg);
            box-shadow: 0 0 0 3px rgba(13, 148, 136, .2), 0 0 12px rgba(13, 148, 136, .3)
        }

        .tl-step {
            font-size: .64rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--teal-xl);
            margin-bottom: .2rem
        }

        .tl-title {
            font-size: .88rem;
            font-weight: 700;
            margin-bottom: .25rem
        }

        .tl-desc {
            font-size: .79rem;
            color: var(--muted);
            line-height: 1.7
        }

        /* ── PERSYARATAN ── */
        .req-tabs {
            display: flex;
            gap: .5rem;
            margin-bottom: 1.6rem;
            flex-wrap: wrap
        }

        .req-tab {
            padding: .44rem 1.15rem;
            border-radius: 999px;
            font-size: .79rem;
            font-weight: 700;
            cursor: pointer;
            border: 1px solid var(--border);
            background: transparent;
            color: var(--muted);
            transition: all .25s
        }

        .req-panel {
            display: none
        }

        .req-panel.active {
            display: block
        }

        .req-list {
            display: flex;
            flex-direction: column;
            gap: .65rem;
            margin-top: .75rem
        }

        .req-item {
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            padding: 1rem 1.15rem;
            border-radius: 12px;
            background: var(--card2);
            border: 1px solid var(--border2)
        }

        .req-num {
            min-width: 28px;
            height: 28px;
            border-radius: 8px;
            flex-shrink: 0;
            background: linear-gradient(135deg, var(--teal), var(--teal-d));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .72rem;
            font-weight: 800;
            color: #fff
        }

        .req-text {
            font-size: .83rem;
            line-height: 1.65
        }

        .req-text strong {
            display: block;
            margin-bottom: .1rem
        }

        .req-note {
            font-size: .73rem;
            color: var(--muted);
            margin-top: .22rem;
            line-height: 1.6
        }

        .req-cond {
            background: rgba(255, 255, 255, .025);
            border-color: rgba(255, 255, 255, .07)
        }

        .map-box {
            padding: 1.1rem 1.4rem;
            border-radius: 12px;
            text-align: center;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .4rem
        }

        .map-box-icon {
            font-size: 1.75rem
        }

        .map-box-label {
            font-size: .82rem;
            font-weight: 700
        }

        .map-box-sub {
            font-size: .7rem;
            color: var(--muted)
        }

        /* ── SELEKSI ── */
        .seleksi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.15rem;
            margin-top: .5rem
        }

        .seleksi-card {
            padding: 1.65rem;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            gap: .5rem
        }

        .seleksi-name {
            font-size: .92rem;
            font-weight: 800;
            margin-bottom: .3rem
        }

        .seleksi-body {
            font-size: .8rem;
            color: var(--muted);
            line-height: 1.8;
            flex: 1
        }

        .formula-box {
            background: rgba(20, 184, 166, .09);
            border: 1px solid rgba(20, 184, 166, .22);
            border-radius: 10px;
            padding: 1rem 1.25rem;
            margin-top: .85rem;
            text-align: center;
            font-size: .9rem;
            font-weight: 700
        }

        .formula-box span {
            color: var(--teal-xl)
        }

        .tiebreak {
            margin-top: .75rem;
            font-size: .74rem;
            color: var(--muted);
            line-height: 1.75;
            padding: .8rem;
            background: rgba(255, 255, 255, .03);
            border-radius: 8px;
            border: 1px solid var(--border2)
        }

        /* ── GUGUR ── */
        .gugur-list {
            display: flex;
            flex-direction: column;
            gap: .55rem;
            margin-top: 1rem
        }

        .gugur-item {
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            padding: .95rem 1rem;
            border-radius: 12px;
            border: 1px solid rgba(220, 38, 38, .2);
            background: rgba(220, 38, 38, .05);
            font-size: .83rem;
            line-height: 1.7;
            transition: border-color .2s
        }

        .gugur-item:hover {
            border-color: rgba(220, 38, 38, .38)
        }

        .gugur-no {
            color: #ef4444;
            font-size: 1rem;
            flex-shrink: 0;
            margin-top: .05rem;
            font-weight: 700
        }

        /* ── KUOTA ── */
        .kuota-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.15rem;
            margin-top: .5rem
        }

        .kuota-card {
            padding: 1.65rem;
            border-radius: var(--radius);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .45rem
        }

        .kuota-num {
            font-size: 2.5rem;
            font-weight: 900;
            line-height: 1
        }

        .kuota-label {
            font-size: .82rem;
            font-weight: 700;
            margin-top: .25rem
        }

        .kuota-sub {
            font-size: .73rem;
            color: var(--muted);
            line-height: 1.55
        }

        .kuota-note-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: .85rem;
            margin-top: 1.5rem
        }

        /* ── PROGRAM ── */
        .prog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem
        }

        .prog-card {
            padding: 1.5rem;
            border-radius: var(--radius);
            display: flex;
            flex-direction: column;
            gap: .3rem
        }

        .prog-icon {
            font-size: 1.65rem;
            margin-bottom: .4rem
        }

        .prog-title {
            font-size: .88rem;
            font-weight: 700
        }

        .prog-desc {
            font-size: .77rem;
            color: var(--muted);
            line-height: 1.65
        }

        /* ── FAQ ── */
        .faq-wrap {
            max-width: 780px;
            margin: 2.5rem auto 0
        }

        .faq-item {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: .55rem
        }

        .faq-btn {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 1.15rem 1.3rem;
            background: transparent;
            border: none;
            color: inherit;
            cursor: pointer;
            text-align: left;
            font-size: .87rem;
            font-weight: 600;
            transition: color .2s;
            line-height: 1.45
        }

        .faq-btn:hover {
            color: var(--teal-xl)
        }

        .faq-chev {
            min-width: 22px;
            height: 22px;
            border-radius: 50%;
            background: rgba(20, 184, 166, .1);
            border: 1px solid rgba(20, 184, 166, .22);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .62rem;
            color: var(--teal-xl);
            transition: transform .3s;
            flex-shrink: 0
        }

        .faq-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height .38s ease
        }

        .faq-body p {
            padding: .25rem 1.3rem 1.15rem;
            font-size: .82rem;
            color: var(--muted);
            line-height: 1.85;
            border-top: 1px solid var(--border2)
        }

        .faq-group {
            margin-bottom: .85rem
        }

        .faq-group-label {
            font-size: .68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            padding: .35rem .95rem;
            border-radius: 999px;
            display: inline-block;
            margin: 0 .25rem 1rem
        }

        /* ── CTA FINAL ── */
        .cta-section {
            text-align: center;
            padding: 6.5rem 1.5rem;
            position: relative;
            z-index: 1
        }

        .cta-glow {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 80% 60% at 50% 50%, rgba(13, 148, 136, .1), transparent);
            pointer-events: none
        }

        .cta-inner {
            max-width: 620px;
            margin: 0 auto;
            position: relative
        }

        .cta-btns {
            display: flex;
            gap: .9rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2.2rem
        }

        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 3.5rem 1.5rem;
            position: relative;
            z-index: 1
        }

        .footer-inner {
            max-width: 1180px;
            margin: 0 auto
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 2.5rem;
            margin-bottom: 2.5rem
        }

        .footer-col-title {
            font-size: .76rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: var(--teal-xl);
            margin-bottom: 1rem
        }

        .footer-col p,
        .footer-col a {
            font-size: .79rem;
            color: var(--muted);
            line-height: 1.8;
            text-decoration: none;
            display: block
        }

        .footer-col a:hover {
            color: var(--teal-xl)
        }

        .footer-bottom {
            border-top: 1px solid var(--border);
            padding-top: 1.5rem;
            text-align: center;
            font-size: .73rem;
            color: var(--muted2);
            line-height: 1.85
        }

        .footer-bottom a {
            color: var(--teal-l);
            text-decoration: none
        }

        /* ── WA FAB ── */
        .wa-fab {
            position: fixed;
            bottom: 1.75rem;
            right: 1.75rem;
            z-index: 300;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: linear-gradient(135deg, #25d366, #128c7e);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 24px rgba(37, 211, 102, .38);
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: transform .2s, box-shadow .2s
        }

        .wa-fab:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 32px rgba(37, 211, 102, .55)
        }

        .wa-fab-pulse {
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid rgba(37, 211, 102, .4);
            animation: wa-pulse 2s ease infinite
        }

        @keyframes wa-pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: .6
            }

            50% {
                transform: scale(1.15);
                opacity: 0
            }
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .55s ease, transform .55s ease
        }

        .reveal.visible {
            opacity: 1;
            transform: none
        }

        .reveal-delay-1 {
            transition-delay: .1s
        }

        .reveal-delay-2 {
            transition-delay: .18s
        }

        .reveal-delay-3 {
            transition-delay: .26s
        }

        /* ── RESPONSIVE ── */
        @media(max-width:1060px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
                text-align: center;
                padding: 3rem 1.25rem
            }

            .hero-cta {
                justify-content: center
            }

            .hero-stats {
                justify-content: center
            }

            .hero-visual {
                display: none !important
            }

            .hero-eyebrow {
                font-size: .65rem;
                padding: .3rem .8rem
            }
        }

        @media(max-width:900px) {

            .jalur-grid,
            .seleksi-grid,
            .kuota-grid,
            .prog-grid {
                grid-template-columns: 1fr 1fr
            }

            .stats-row {
                grid-template-columns: repeat(2, 1fr)
            }

            .two-col {
                grid-template-columns: 1fr;
                gap: 2rem
            }

            .footer-top {
                grid-template-columns: 1fr 1fr
            }
        }

        @media(max-width:768px) {
            :root {
                --nav-h: 56px
            }

            section {
                padding: 3rem 1rem
            }

            .wrap {
                padding: 0 1rem
            }

            .nav-links,
            #daftarBtnNav {
                display: none !important
            }

            #menuBtn {
                display: flex
            }

            .jalur-grid,
            .seleksi-grid,
            .kuota-grid {
                grid-template-columns: 1fr
            }

            .prog-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .cta-btns {
                flex-direction: column;
                align-items: center
            }

            .cta-btns .btn {
                width: 100%;
                max-width: 100%;
                justify-content: center
            }

            h1 {
                font-size: 1.95rem;
                letter-spacing: -.02em
            }

            h2 {
                font-size: 1.4rem
            }

            .footer-top {
                grid-template-columns: 1fr
            }

            .two-col {
                gap: 1.75rem
            }

            .hero-cta {
                flex-direction: column;
                gap: .6rem
            }

            .hero-cta .btn {
                width: 100%;
                max-width: 100%
            }

            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
                gap: .75rem
            }

            .stats-row {
                grid-template-columns: repeat(2, 1fr)
            }

            .stat-box {
                padding: 1.25rem .75rem
            }

            .stat-box .val {
                font-size: 1.6rem
            }

            .seleksi-grid {
                grid-template-columns: 1fr
            }

            .kuota-note-grid {
                grid-template-columns: 1fr
            }
        }

        @media(max-width:480px) {
            :root {
                --nav-h: 52px
            }

            section {
                padding: 2.5rem 1rem
            }

            .prog-grid {
                grid-template-columns: 1fr
            }

            .btn-lg {
                padding: .75rem 1.4rem;
                font-size: .88rem
            }

            .hero-eyebrow {
                font-size: .62rem;
                padding: .28rem .7rem
            }

            h1 {
                font-size: 1.75rem
            }

            h2 {
                font-size: 1.3rem
            }

            .nav-name {
                font-size: .8rem
            }

            .nav-logo {
                width: 32px;
                height: 32px
            }

            .jalur-card {
                padding: 1.4rem
            }

            .cd-n {
                font-size: 1.6rem
            }

            .req-item {
                padding: .85rem .9rem
            }

            .faq-btn {
                font-size: .83rem;
                padding: 1rem
            }

            .infobox {
                flex-direction: column;
                gap: .5rem
            }
        }

        @media(max-width:360px) {
            .nav-sub {
                display: none
            }

            h1 {
                font-size: 1.6rem
            }

            .hero-eyebrow {
                white-space: normal;
                text-align: center;
                font-size: .6rem
            }

            .stat-val {
                font-size: 1.35rem
            }
        }
    </style>
</head>

<body>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="grid-bg"></div>

    <!-- ═══ NAVBAR ═══ -->
    <nav id="mainNav">
        <a href="#" class="nav-brand">
            <div class="nav-logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo MTsN 1 Pandeglang">
            </div>
            <div>
                <div class="nav-name">MTsN 1 Pandeglang</div>
                <div class="nav-sub">PMBM TP 2026/2027</div>
            </div>
        </a>
        <ul class="nav-links">
            <li><a href="#jalur">Jalur</a></li>
            <li><a href="#jadwal">Jadwal</a></li>
            <li><a href="#alur">Cara Daftar</a></li>
            <li><a href="#syarat">Persyaratan</a></li>
            <li><a href="#seleksi">Seleksi</a></li>
            <li><a href="#kuota">Kuota</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>
        <div class="nav-right">
            <button class="n-btn" id="menuBtn" aria-label="Menu"><span></span><span></span><span></span></button>
            <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-primary" id="daftarBtnNav"
                style="height:36px;font-size:.78rem;padding:.4rem 1.1rem;">✦ Daftar Sekarang</a>
        </div>
    </nav>

    <!-- MOBILE DRAWER -->
    <div class="drawer" id="drawer">
        <a href="#jalur" class="d-link">📋 Jalur Pendaftaran</a>
        <a href="#jadwal" class="d-link">📅 Jadwal Kegiatan</a>
        <a href="#alur" class="d-link">📌 Cara Mendaftar</a>
        <a href="#syarat" class="d-link">📄 Persyaratan</a>
        <a href="#seleksi" class="d-link">⚖️ Mekanisme Seleksi</a>
        <a href="#gugur" class="d-link">❌ Ketentuan Gugur</a>
        <a href="#kuota" class="d-link">🏫 Kuota & Rombel</a>
        <a href="#faq" class="d-link">❓ FAQ</a>
        <hr>
        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" style="color:var(--gold-l);font-weight:700;">🏆 Daftar
            Prestasi / Afirmasi →</a>
        <a href="https://pmbm-kanwilbanten.com" style="color:var(--teal-xl);font-weight:700;">📝 Daftar Reguler →</a>
    </div>

    <main>

        <!-- ═══ HERO ═══ -->
        <section id="hero" style="padding:0">
            <div class="hero-grid">
                <div>
                    <div class="hero-eyebrow">Penerimaan Murid Baru Madrasah · TP 2026/2027</div>
                    <h1 class="hero-title">Bergabung &amp;<br><span class="grad">Berprestasi</span><br>di MTsN 1</h1>
                    <p class="lead hero-desc" style="margin-top:1.1rem;max-width:500px;">
                        MTsN 1 Pandeglang membuka pendaftaran peserta didik baru melalui <strong>3 jalur resmi</strong>
                        — Prestasi, Afirmasi, dan Reguler. Gratis, transparan, dan penuh peluang.
                    </p>
                    <p style="font-size:.79rem;color:var(--muted2);margin-top:.85rem;" class="hero-desc">
                        Kepala Madrasah: <strong style="color:var(--muted)">Hj. Yanti Mariah, S.S., M.Pd.</strong>
                        &nbsp;·&nbsp; Ketua PMBM: <strong style="color:var(--muted)">Umar Mu'tamar, S.Ag.</strong>
                    </p>
                    <div class="hero-cta">
                        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-gold btn-lg">🏆 Daftar
                            Prestasi / Afirmasi</a>
                        <a href="https://pmbm-kanwilbanten.com" class="btn btn-ghost btn-lg">📝 Daftar Reguler →</a>
                    </div>
                    <div class="hero-stats">
                        <div>
                            <div class="stat-val">224</div>
                            <div class="stat-lbl">Kuota Reguler</div>
                        </div>
                        <div>
                            <div class="stat-val">A</div>
                            <div class="stat-lbl">Akreditasi</div>
                        </div>
                        <div>
                            <div class="stat-val">3</div>
                            <div class="stat-lbl">Jalur Masuk</div>
                        </div>
                        <div>
                            <div class="stat-val">Rp 0</div>
                            <div class="stat-lbl">Biaya Daftar</div>
                        </div>
                    </div>
                </div>
                <!-- HERO VISUAL DESKTOP -->
                <div class="hero-visual" style="display:flex;justify-content:center;">
                    <div class="cd-card" style="width:100%;max-width:360px;">
                        <div class="cd-label" id="cd-label">Menghitung Waktu…</div>
                        <div class="cd-grid">
                            <div class="cd-box">
                                <div class="cd-n" id="cd-d">--</div>
                                <div class="cd-l">Hari</div>
                            </div>
                            <div class="cd-box">
                                <div class="cd-n" id="cd-h">--</div>
                                <div class="cd-l">Jam</div>
                            </div>
                            <div class="cd-box">
                                <div class="cd-n" id="cd-m">--</div>
                                <div class="cd-l">Menit</div>
                            </div>
                            <div class="cd-box">
                                <div class="cd-n" id="cd-s">--</div>
                                <div class="cd-l">Detik</div>
                            </div>
                        </div>
                        <div class="cd-jalur-row">
                            <div class="cd-jalur-item">
                                <span>Prestasi &amp; Afirmasi</span>
                                <span style="font-size:.72rem;color:var(--gold);font-weight:700;">6–8 Apr 2026</span>
                            </div>
                            <div class="cd-jalur-item">
                                <span>Jalur Reguler</span>
                                <span style="font-size:.72rem;color:var(--teal-xl);font-weight:700;">18–27 Apr
                                    2026</span>
                            </div>
                            <div class="cd-jalur-item">
                                <span>Pengumuman Reguler</span>
                                <span style="font-size:.72rem;color:var(--blue-l);font-weight:700;">5 Mei 2026</span>
                            </div>
                        </div>
                        <div class="cd-footer">Lapor diri terakhir: <strong>12 Mei 2026</strong> · <a
                                href="https://pmbm-kanwilbanten.com">pmbm-kanwilbanten.com</a></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS BAR -->
        <div style="padding:0 1.5rem;position:relative;z-index:1;margin-top:.5rem;">
            <div class="stats-row wrap" style="padding:0">
                <div class="stat-box reveal">
                    <div class="val grad-teal">1970</div>
                    <div class="lbl">Tahun Berdiri</div>
                </div>
                <div class="stat-box reveal reveal-delay-1">
                    <div class="val"
                        style="background:linear-gradient(135deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                        70+</div>
                    <div class="lbl">Tenaga Pendidik</div>
                </div>
                <div class="stat-box reveal reveal-delay-2">
                    <div class="val grad-teal">A</div>
                    <div class="lbl">Akreditasi BAN-S/M</div>
                </div>
                <div class="stat-box reveal reveal-delay-3">
                    <div class="val"
                        style="background:linear-gradient(135deg,#fb923c,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                        1000+</div>
                    <div class="lbl">Prestasi Kejuaraan</div>
                </div>
            </div>
        </div>

        <div class="sec-sep" style="margin-top:3rem"></div>

        <!-- ═══ 3 JALUR ═══ -->
        <section id="jalur">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Jalur Pendaftaran</div>
                    <h2>3 Jalur, <span class="grad">1 Tujuan</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;max-width:540px;margin-left:auto;margin-right:auto;">
                        Pilih jalur yang paling sesuai dengan kondisimu. Tidak lolos Prestasi/Afirmasi? Kamu masih bisa
                        daftar ke Jalur Reguler.</p>
                </div>
                <div class="jalur-grid">
                    <!-- Prestasi -->
                    <div class="card card-hover jalur-card c-gold reveal"
                        style="background:linear-gradient(160deg,rgba(212,168,67,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(212,168,67,.15);color:#d4a843;border:1px solid rgba(212,168,67,.3);align-self:flex-start;">
                            🏆 Jalur Prestasi</div>
                        <div class="jalur-name">Jalur Prestasi</div>
                        <p class="jalur-desc">Untuk siswa berprestasi di bidang <strong>Tahfidz</strong> (min. 3 juz),
                            <strong>Akademik</strong> (KSM, OSN, MYRES, OSP, OSK), atau <strong>Non-Akademik</strong>
                            (MTQ, O2SN, FLS2N, Kaligrafi, dll). Minimal Juara 1 tingkat Kabupaten/Kota.
                        </p>
                        <div class="jalur-meta">
                            <span>📅 Buka: 6–8 April 2026</span>
                            <span style="color:#dc2626;font-weight:700;">Map Merah</span>
                        </div>
                        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-ghost"
                            style="margin-top:1rem;width:100%;justify-content:center;border-color:rgba(212,168,67,.4);color:#d4a843;">Daftar
                            Jalur Prestasi →</a>
                    </div>
                    <!-- Afirmasi -->
                    <div class="card card-hover jalur-card c-blue reveal reveal-delay-1"
                        style="background:linear-gradient(160deg,rgba(96,165,250,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(96,165,250,.15);color:#60a5fa;border:1px solid rgba(96,165,250,.3);align-self:flex-start;">
                            🤝 Jalur Afirmasi</div>
                        <div class="jalur-name">Jalur Afirmasi</div>
                        <p class="jalur-desc">Untuk keluarga penerima manfaat program sosial pemerintah: pemegang
                            <strong>KIP</strong>, <strong>PKH</strong>, <strong>KKS</strong>, atau <strong>SKTM</strong>
                            dari pemerintah daerah. Memberikan akses pendidikan yang berkeadilan.
                        </p>
                        <div class="jalur-meta">
                            <span>📅 Buka: 6–8 April 2026</span>
                            <span style="color:#eab308;font-weight:700;">Map Kuning</span>
                        </div>
                        <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-ghost"
                            style="margin-top:1rem;width:100%;justify-content:center;border-color:rgba(96,165,250,.4);color:#60a5fa;">Daftar
                            Jalur Afirmasi →</a>
                    </div>
                    <!-- Reguler -->
                    <div class="card card-hover jalur-card c-teal reveal reveal-delay-2"
                        style="background:linear-gradient(160deg,rgba(20,184,166,.07),transparent);">
                        <div class="badge"
                            style="background:rgba(20,184,166,.13);color:var(--teal-xl);border:1px solid rgba(20,184,166,.28);align-self:flex-start;">
                            📝 Jalur Reguler</div>
                        <div class="jalur-name">Jalur Reguler</div>
                        <p class="jalur-desc">Terbuka untuk <strong>semua</strong> lulusan MI/SD sederajat. Seleksi
                            menggunakan <strong>CBT</strong> dan <strong>Tes BTQ</strong>. Kuota 224 kursi melalui
                            sistem PMBM Bersama Kanwil Kemenag Banten. Pendaftaran di situs khusus.</p>
                        <div class="jalur-meta">
                            <span>📅 Buka: 18–27 April 2026</span>
                            <span style="color:#16a34a;font-weight:700;">Map Hijau</span>
                        </div>
                        <a href="https://pmbm-kanwilbanten.com" class="btn btn-ghost"
                            style="margin-top:1rem;width:100%;justify-content:center;border-color:rgba(20,184,166,.4);color:var(--teal-xl);">Daftar
                            Jalur Reguler →</a>
                    </div>
                </div>
                <div class="infobox reveal"
                    style="background:rgba(20,184,166,.06);border:1px solid rgba(20,184,166,.22);">
                    <span class="infobox-icon">💡</span>
                    <div><strong>Tidak lolos Prestasi/Afirmasi? Tenang!</strong> Berkas dapat diambil kembali sehari
                        setelah pengumuman <strong>(15 April 2026)</strong>. Kamu masih bisa mendaftar ke <strong>Jalur
                            Reguler mulai 18 April 2026</strong> melalui https://pmbm-kanwilbanten.com.</div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ JADWAL ═══ -->
        <section id="jadwal"
            style="background:linear-gradient(180deg,transparent,rgba(13,148,136,.03),transparent)">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Timeline Kegiatan</div>
                    <h2>Jadwal <span class="grad">PMBM 2026</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Tandai kalendermu! Jadwal berikut berlaku untuk
                        seluruh jalur pendaftaran.</p>
                </div>
                <div class="two-col">
                    <div class="reveal">
                        <div class="badge"
                            style="background:rgba(212,168,67,.12);color:#d4a843;border:1px solid rgba(212,168,67,.3);margin-bottom:1rem;font-size:.72rem;padding:.35rem 1rem;">
                            🏆 Jalur Prestasi &amp; Afirmasi</div>
                        <div class="card" style="padding:1.5rem;">
                            <div class="sched-list" id="sched-pa"></div>
                            <div
                                style="margin-top:1rem;padding-top:1rem;border-top:1px solid var(--border2);font-size:.73rem;color:var(--muted);">
                                ⏰ Jam layanan panitia: <strong>08.00–14.00 WIB</strong> &nbsp;|&nbsp; Istirahat:
                                <strong>11.30–13.00 WIB</strong>
                            </div>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-1">
                        <div class="badge"
                            style="background:rgba(20,184,166,.1);color:var(--teal-xl);border:1px solid rgba(20,184,166,.28);margin-bottom:1rem;font-size:.72rem;padding:.35rem 1rem;">
                            📝 Jalur Reguler (PMBM Bersama Kanwil)</div>
                        <div class="card" style="padding:1.5rem;">
                            <div class="sched-list" id="sched-reg"></div>
                            <div
                                style="margin-top:1rem;padding-top:1rem;border-top:1px solid var(--border2);font-size:.73rem;color:var(--muted);">
                                🔗 Sistem pendaftaran: <a href="https://pmbm-kanwilbanten.com"
                                    style="color:var(--teal-xl);text-decoration:none;font-weight:600;">pmbm-kanwilbanten.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ CARA DAFTAR ═══ -->
        <section id="alur">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Panduan Lengkap</div>
                    <h2>Cara <span class="grad">Mendaftar</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Ikuti langkah-langkah berikut sesuai jalur yang kamu
                        pilih.</p>
                </div>
                <div class="two-col">
                    <!-- Prestasi & Afirmasi -->
                    <div class="reveal">
                        <div
                            style="font-size:.75rem;font-weight:700;color:#d4a843;text-transform:uppercase;letter-spacing:.08em;margin-bottom:1.15rem;">
                            🏆 Jalur Prestasi &amp; Afirmasi</div>
                        <div class="timeline">
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 1</div>
                                <div class="tl-title">Isi Formulir Pendaftaran Online</div>
                                <div class="tl-desc">Akses <strong>daftar.mtsn1pandeglang.sch.id/dashboard</strong>,
                                    pilih jalur (Prestasi atau Afirmasi), dan isi formulir menggunakan NISN.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 2</div>
                                <div class="tl-title">Siapkan &amp; Masukkan Berkas ke Map</div>
                                <div class="tl-desc">Kumpulkan semua dokumen yang disyaratkan. Masukkan ke dalam
                                    <strong>map snelhecter berwarna sesuai jalur</strong> (Merah = Prestasi, Kuning =
                                    Afirmasi). Tempelkan label identitas.
                                </div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 3</div>
                                <div class="tl-title">Serahkan Berkas ke Sekretariat PMBM</div>
                                <div class="tl-desc">Antar langsung ke Sekretariat PMBM MTsN 1 Pandeglang pada
                                    <strong>6–8 April 2026</strong>, pukul <strong>08.00–14.00 WIB</strong> (istirahat
                                    11.30–13.00).
                                </div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 4</div>
                                <div class="tl-title">Ikuti Tes Seleksi</div>
                                <div class="tl-desc">Hadir di MTsN 1 Pandeglang pada <strong>13 April 2026</strong>
                                    paling lambat pukul <strong>07.00 WIB</strong> untuk mengikuti tes kemampuan dan
                                    BTQ. Khusus Tahfidz: tes hafalan langsung.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-step">Langkah 5</div>
                                <div class="tl-title">Cek Pengumuman &amp; Lapor Diri</div>
                                <div class="tl-desc">Pengumuman hasil: <strong>14 April 2026</strong>. Jika diterima,
                                    wajib lapor diri langsung ke madrasah pada <strong>15–16 April 2026</strong>. <span
                                        style="color:#ef4444;font-weight:600;">Tidak lapor diri = gugur.</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- Reguler -->
                    <div class="reveal reveal-delay-1">
                        <div
                            style="font-size:.75rem;font-weight:700;color:var(--teal-xl);text-transform:uppercase;letter-spacing:.08em;margin-bottom:1.15rem;">
                            📝 Jalur Reguler (PMBM Bersama)</div>
                        <div class="timeline">
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 1</div>
                                <div class="tl-title">Akses Portal Pendaftaran</div>
                                <div class="tl-desc">Buka <strong>pmbm-kanwilbanten.com</strong> mulai <strong>18 April
                                        2026</strong> pukul 08.00 WIB. Masukkan <strong>NISN</strong> untuk memulai
                                    proses pendaftaran.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 2</div>
                                <div class="tl-title">Isi Formulir &amp; Pilih Madrasah</div>
                                <div class="tl-desc">Lengkapi seluruh data diri, data orang tua, dan informasi sekolah
                                    asal. Pilih <strong>MTsN 1 Pandeglang</strong> sebagai madrasah tujuan (minimal 1,
                                    maksimal 2 pilihan).</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 3</div>
                                <div class="tl-title">Unggah Dokumen Persyaratan</div>
                                <div class="tl-desc">Upload KK (terbit sebelum Maret 2026), Ijazah MI/SD, dan Surat
                                    Pernyataan Pertanggungjawaban Mutlak bermaterai Rp 10.000. Tambahkan dokumen
                                    kondisional jika diperlukan.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 4</div>
                                <div class="tl-title">Cetak Bukti &amp; Ikuti Seleksi CBT</div>
                                <div class="tl-desc">Cetak bukti pendaftaran setelah berkas dinyatakan lengkap. Ikuti
                                    Uji Coba CBT <strong>30 April</strong>, lalu CBT resmi <strong>2 Mei 2026</strong>
                                    dan Tes BTQ <strong>2–3 Mei 2026</strong>.</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-dot"
                                    style="background:var(--teal-l);box-shadow:0 0 0 3px rgba(20,184,166,.18),0 0 12px rgba(20,184,166,.3)">
                                </div>
                                <div class="tl-step">Langkah 5</div>
                                <div class="tl-title">Cek Hasil &amp; Lapor Diri</div>
                                <div class="tl-desc">Pengumuman kelulusan: <strong>5 Mei 2026</strong> di
                                    pmbm-kanwilbanten.com. Jika diterima, wajib lapor diri ke madrasah <strong>6–12 Mei
                                        2026</strong>. <span style="color:#ef4444;font-weight:600;">Tidak lapor diri =
                                        gugur.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ PERSYARATAN ═══ -->
        <section id="syarat"
            style="background:linear-gradient(180deg,transparent,rgba(212,168,67,.02),transparent)">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Dokumen Pendaftaran</div>
                    <h2>Persyaratan <span class="grad">Lengkap</span></h2>
                    <div class="divider"></div>
                </div>
                <!-- Syarat Umum -->
                <div style="margin-bottom:2.5rem;" class="reveal">
                    <div
                        style="font-size:.75rem;font-weight:700;color:var(--teal-xl);text-transform:uppercase;letter-spacing:.08em;margin-bottom:1rem;">
                        Persyaratan Umum — Berlaku untuk Semua Jalur</div>
                    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:.7rem;">
                        <div class="req-item">
                            <div class="req-num">1</div>
                            <div class="req-text"><strong>Usia Maksimal 15 Tahun</strong>Dihitung per 1 Juli 2026</div>
                        </div>
                        <div class="req-item">
                            <div class="req-num">2</div>
                            <div class="req-text"><strong>Surat Keterangan Aktif Kelas VI</strong>Diterbitkan oleh
                                sekolah/madrasah asal</div>
                        </div>
                        <div class="req-item">
                            <div class="req-num">3</div>
                            <div class="req-text"><strong>Akta Kelahiran Berbarcode</strong>Wajib terbitan resmi Dinas
                                Dukcapil</div>
                        </div>
                        <div class="req-item">
                            <div class="req-num">4</div>
                            <div class="req-text"><strong>Kartu Keluarga Berbarcode</strong>Wajib terbitan resmi Dinas
                                Dukcapil</div>
                        </div>
                    </div>
                    <div class="infobox"
                        style="background:rgba(251,191,36,.06);border:1px solid rgba(251,191,36,.2);margin-top:1rem;">
                        <span class="infobox-icon">⚠️</span>
                        <span>KK dan Akta Kelahiran <strong>wajib berbarcode</strong> — yaitu dokumen resmi terbitan
                            Dinas Kependudukan dan Catatan Sipil (Dukcapil). Dokumen lama tanpa barcode <strong>tidak
                                diterima</strong>.</span>
                    </div>
                </div>
                <!-- Tab Per Jalur -->
                <div class="reveal">
                    <div class="req-tabs" id="reqTabs">
                        <button class="req-tab active" data-panel="tab-prestasi"
                            style="background:rgba(212,168,67,.1);color:#d4a843;border-color:#d4a843;">🏆 Jalur
                            Prestasi</button>
                        <button class="req-tab" data-panel="tab-afirmasi">🤝 Jalur Afirmasi</button>
                        <button class="req-tab" data-panel="tab-reguler">📝 Jalur Reguler</button>
                    </div>
                    <!-- PRESTASI -->
                    <div id="tab-prestasi" class="req-panel active">
                        <div class="req-list">
                            <div class="req-item">
                                <div class="req-num">1</div>
                                <div class="req-text"><strong>Print Out Formulir Pendaftaran Online</strong>Dicetak
                                    dari daftar.mtsn1pandeglang.sch.id setelah pengisian selesai</div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">2</div>
                                <div class="req-text"><strong>Sertifikat Prestasi Asli</strong>
                                    <div class="req-note"><strong>Akademik:</strong> KSM/OMI, MYRES, OSN, OSP, OSK —
                                        Juara 1–3 minimal tingkat Kab/Kota, diselenggarakan Kemenag, Kemendikbud, BRIN,
                                        atau PT Terakreditasi</div>
                                    <div class="req-note"><strong>Non-Akademik:</strong> MTQ, MHQ, MSQ, Pidato Arab,
                                        Kaligrafi, O2SN, FLS2N, Olahraga — Juara 1 Kab/Kota · Juara 1–2 Provinsi · Juara
                                        1–3 Nasional</div>
                                    <div class="req-note"><strong>Tahfidz:</strong> Sertifikat hafalan minimal 3 juz.
                                        <em>Akan ada tes hafalan langsung pada 13 April 2026</em>
                                    </div>
                                    <div class="req-note"><strong>Olahraga Beregu:</strong> Hanya untuk <em>top
                                            scorer</em> atau pemain terbaik yang tercantum namanya di sertifikat</div>
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">3</div>
                                <div class="req-text"><strong>Dokumen Persyaratan Umum</strong>Akta kelahiran
                                    berbarcode + KK berbarcode + surat keterangan aktif kelas VI</div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(220,38,38,.05);border-color:rgba(220,38,38,.2);">
                                <div class="req-num" style="background:linear-gradient(135deg,#dc2626,#b91c1c);">📁
                                </div>
                                <div class="req-text"><strong>Semua Berkas → Map Snelhecter Warna MERAH</strong>
                                    <div class="req-note">Tempel label di map: Nama Lengkap · Asal Sekolah · Jalur
                                        Prestasi</div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:1.25rem;display:flex;gap:1rem;flex-wrap:wrap;">
                            <div class="map-box"
                                style="background:rgba(220,38,38,.07);border-color:rgba(220,38,38,.3);">
                                <div class="map-box-icon">📁</div>
                                <div class="map-box-label" style="color:#ef4444;">Map Merah</div>
                                <div class="map-box-sub">Jalur Prestasi</div>
                            </div>
                        </div>
                    </div>
                    <!-- AFIRMASI -->
                    <div id="tab-afirmasi" class="req-panel">
                        <div class="req-list">
                            <div class="req-item">
                                <div class="req-num">1</div>
                                <div class="req-text"><strong>Print Out Formulir Pendaftaran Online</strong>Dicetak
                                    dari daftar.mtsn1pandeglang.sch.id/dashboard setelah pengisian selesai</div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">2</div>
                                <div class="req-text"><strong>Fotokopi Kartu KIP / PKH / KKS / SKTM yang
                                        Dilegalisir</strong>
                                    <div class="req-note">Pilih salah satu sesuai yang dimiliki keluarga. Pastikan
                                        sudah dilegalisir oleh instansi penerbit.</div>
                                </div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(251,191,36,.05);border-color:rgba(251,191,36,.25);">
                                <div class="req-num" style="background:linear-gradient(135deg,#f59e0b,#d97706);">⚠️
                                </div>
                                <div class="req-text"><strong>Khusus Pengguna SKTM — Wajib Tambah 2 Dokumen
                                        Ini:</strong>
                                    <div class="req-note">📄 Fotokopi tagihan/rekening listrik <strong>3 bulan
                                            terakhir</strong></div>
                                    <div class="req-note">📸 Foto tampak depan, dalam, dan belakang rumah</div>
                                    <div class="req-note" style="color:#f59e0b;margin-top:.3rem;">SKTM hanya diterima
                                        jika diterbitkan oleh pemerintah daerah (kelurahan, kecamatan, atau dinas
                                        sosial). SKTM dari RT/RW <strong>tidak diterima</strong></div>
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">3</div>
                                <div class="req-text"><strong>Dokumen Persyaratan Umum</strong>Akta kelahiran
                                    berbarcode + KK berbarcode + surat keterangan aktif kelas VI</div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(234,179,8,.05);border-color:rgba(234,179,8,.25);">
                                <div class="req-num" style="background:linear-gradient(135deg,#ca8a04,#a16207);">📁
                                </div>
                                <div class="req-text"><strong>Semua Berkas → Map Snelhecter Warna KUNING</strong>
                                    <div class="req-note">Tempel label di map: Nama Lengkap · Asal Sekolah · Jalur
                                        Afirmasi</div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:1.25rem;display:flex;gap:1rem;flex-wrap:wrap;">
                            <div class="map-box"
                                style="background:rgba(234,179,8,.07);border-color:rgba(234,179,8,.35);">
                                <div class="map-box-icon">📁</div>
                                <div class="map-box-label" style="color:#eab308;">Map Kuning</div>
                                <div class="map-box-sub">Jalur Afirmasi</div>
                            </div>
                        </div>
                    </div>
                    <!-- REGULER -->
                    <div id="tab-reguler" class="req-panel">
                        <div class="req-list">
                            <div class="req-item">
                                <div class="req-num">1</div>
                                <div class="req-text"><strong>NISN (Nomor Induk Siswa Nasional)</strong>Harus terdaftar
                                    di EMIS atau DAPODIK. Bisa dicek di sekolah asal atau nisn.data.kemdikbud.go.id
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">2</div>
                                <div class="req-text"><strong>Kartu Keluarga (KK)</strong>Diterbitkan Dinas Dukcapil —
                                    <strong>sebelum Maret 2026</strong>
                                </div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">3</div>
                                <div class="req-text"><strong>Ijazah MI/SD atau Surat Keterangan Lulus</strong>Dokumen
                                    resmi yang membuktikan penyelesaian pendidikan dasar</div>
                            </div>
                            <div class="req-item">
                                <div class="req-num">4</div>
                                <div class="req-text"><strong>Surat Pernyataan Pertanggungjawaban Mutlak</strong>
                                    <div class="req-note">Ditandatangani orang tua/wali, bermaterai Rp 10.000. Format
                                        tersedia di portal pmbm-kanwilbanten.com. Menyatakan keabsahan seluruh dokumen
                                        yang diunggah.</div>
                                </div>
                            </div>
                            <div class="req-item req-cond">
                                <div class="req-num"
                                    style="background:rgba(255,255,255,.12);color:var(--muted);font-size:.8rem;">⚙️
                                </div>
                                <div class="req-text"><strong>Sertifikat Akreditasi Sekolah Asal</strong> <span
                                        style="color:var(--gold);font-size:.72rem;font-weight:700;">KONDISIONAL</span>
                                    <div class="req-note">Hanya wajib jika asal sekolah dari <strong>luar Provinsi
                                            Banten.</strong> Sekolah yang belum/tidak terakreditasi → nilai akreditasi
                                        dihitung otomatis = 65.</div>
                                </div>
                            </div>
                            <div class="req-item req-cond">
                                <div class="req-num"
                                    style="background:rgba(255,255,255,.12);color:var(--muted);font-size:.8rem;">⚙️
                                </div>
                                <div class="req-text"><strong>Surat Rekomendasi / Kesetaraan Ijazah</strong> <span
                                        style="color:var(--gold);font-size:.72rem;font-weight:700;">KONDISIONAL</span>
                                    <div class="req-note">Hanya untuk calon murid dari <strong>sekolah asing</strong>.
                                        Diterbitkan oleh Kemenag atau Kemendikdasmen.</div>
                                </div>
                            </div>
                            <div class="req-item"
                                style="background:rgba(22,163,74,.05);border-color:rgba(22,163,74,.25);">
                                <div class="req-num" style="background:linear-gradient(135deg,#16a34a,#15803d);">📁
                                </div>
                                <div class="req-text"><strong>Semua Berkas → Map Snelhecter Warna HIJAU</strong>
                                    <div class="req-note">Tempel label di map: Nama Lengkap · Asal Sekolah · Jalur
                                        Reguler. Berkas fisik diserahkan saat lapor diri ke madrasah pada <strong>6–12
                                            Mei 2026</strong>.</div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:1.25rem;display:flex;gap:1rem;flex-wrap:wrap;">
                            <div class="map-box"
                                style="background:rgba(22,163,74,.08);border-color:rgba(22,163,74,.4);">
                                <div class="map-box-icon">📁</div>
                                <div class="map-box-label" style="color:#16a34a;">Map Hijau</div>
                                <div class="map-box-sub">Jalur Reguler</div>
                            </div>
                        </div>
                        <div class="infobox"
                            style="background:rgba(20,184,166,.06);border:1px solid rgba(20,184,166,.2);margin-top:1rem;">
                            <span class="infobox-icon">ℹ️</span><span>Semua dokumen <strong>diunggah secara
                                    online</strong> melalui pmbm-kanwilbanten.com. Setelah berkas dinyatakan lengkap,
                                cetak bukti pendaftaran. Lapor diri fisik dengan <strong>map hijau</strong> hanya
                                dilakukan setelah pengumuman kelulusan (6–12 Mei 2026).</span>
                        </div>
                        <div class="infobox"
                            style="background:rgba(220,38,38,.05);border:1px solid rgba(220,38,38,.18);margin-top:.75rem;">
                            <span class="infobox-icon">🚫</span><span><strong>Pemalsuan dokumen</strong> akan
                                mengakibatkan diskualifikasi dari seluruh proses seleksi dan <strong>sanksi
                                    hukum</strong> sesuai peraturan perundang-undangan yang berlaku.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ SELEKSI ═══ -->
        <section id="seleksi">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Sistem Penilaian</div>
                    <h2>Mekanisme <span class="grad">Seleksi</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Setiap jalur memiliki metode seleksi yang berbeda.
                        Pahami agar kamu bisa mempersiapkan diri dengan baik.</p>
                </div>
                <div class="seleksi-grid">
                    <div class="card seleksi-card reveal"
                        style="background:linear-gradient(160deg,rgba(212,168,67,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(212,168,67,.15);color:#d4a843;border:1px solid rgba(212,168,67,.3);align-self:flex-start;">
                            Prestasi</div>
                        <div class="seleksi-name">Jalur Prestasi</div>
                        <div class="seleksi-body">Seleksi berdasarkan <strong>verifikasi sertifikat prestasi
                                asli</strong> oleh panitia madrasah.<br><br>Khusus <strong>Tahfidz</strong>: verifikasi
                            sertifikat disertai <strong>tes hafalan langsung</strong> pada 13 April 2026 di
                            madrasah.<br><br><span style="color:#d4a843;font-weight:600;">Tidak ada CBT untuk jalur
                                ini.</span></div>
                    </div>
                    <div class="card seleksi-card reveal reveal-delay-1"
                        style="background:linear-gradient(160deg,rgba(96,165,250,.08),transparent);">
                        <div class="badge"
                            style="background:rgba(96,165,250,.15);color:#60a5fa;border:1px solid rgba(96,165,250,.3);align-self:flex-start;">
                            Afirmasi</div>
                        <div class="seleksi-name">Jalur Afirmasi</div>
                        <div class="seleksi-body">Seleksi berdasarkan <strong>verifikasi kelayakan ekonomi</strong>
                            melalui dokumen KIP/PKH/KKS/SKTM.<br><br>Pengguna SKTM: panitia akan melakukan
                            <strong>pengecekan lapangan</strong> berdasarkan foto rumah dan tagihan listrik yang
                            dilampirkan.<br><br><span style="color:#60a5fa;font-weight:600;">Tidak ada CBT untuk jalur
                                ini.</span>
                        </div>
                    </div>
                    <div class="card seleksi-card reveal reveal-delay-2"
                        style="background:linear-gradient(160deg,rgba(20,184,166,.07),transparent);">
                        <div class="badge"
                            style="background:rgba(20,184,166,.13);color:var(--teal-xl);border:1px solid rgba(20,184,166,.25);align-self:flex-start;">
                            Reguler</div>
                        <div class="seleksi-name">Jalur Reguler</div>
                        <div class="seleksi-body">Nilai Akhir dihitung dari dua komponen tes:
                            <div class="formula-box">Nilai Akhir = <span>70%</span> CBT <span
                                    style="color:var(--muted)">+</span> <span>30%</span> BTQ</div>
                            <div class="tiebreak"><strong>Aturan jika nilai akhir sama:</strong><br>1. Prioritas siswa
                                dengan <strong>usia lebih tua</strong><br>2. Jika usia sama → prioritas <strong>waktu
                                    daftar lebih awal</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ KETENTUAN GUGUR ═══ -->
        <section id="gugur" style="padding-top:2rem;">
            <div class="wrap">
                <div style="max-width:800px;margin:0 auto;" class="reveal">
                    <div class="eyebrow"
                        style="background:rgba(220,38,38,.1);color:#ef4444;border-color:rgba(220,38,38,.22);">⚠️
                        Perhatian Penting</div>
                    <h2 style="margin-bottom:.5rem;">Ketentuan <span
                            style="background:linear-gradient(135deg,#ef4444,#f97316);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Gugur</span>
                    </h2>
                    <div class="divider" style="background:linear-gradient(90deg,#ef4444,#f97316)"></div>
                    <p style="color:var(--muted);font-size:.85rem;margin:.85rem 0 1.1rem;line-height:1.75;">Bacalah
                        dengan seksama. Peserta yang melanggar ketentuan berikut <strong>tidak dapat diproses lebih
                            lanjut</strong>:</p>
                    <div class="gugur-list">
                        <div class="gugur-item"><span class="gugur-no">✗</span><span>Mengisi formulir online
                                <strong>tanpa menyerahkan berkas fisik</strong> ke sekretariat (Prestasi &amp; Afirmasi)
                                — keduanya wajib dilakukan</span></div>
                        <div class="gugur-item"><span class="gugur-no">✗</span><span>Menyerahkan berkas fisik
                                <strong>tanpa mengisi formulir online</strong> (Prestasi &amp; Afirmasi) — keduanya
                                wajib dilakukan</span></div>
                        <div class="gugur-item"><span class="gugur-no">✗</span><span>Dokumen fisik yang diserahkan
                                <strong>tidak sesuai</strong> dengan data yang diunggah secara online</span></div>
                        <div class="gugur-item"><span class="gugur-no">✗</span><span>Tidak lapor diri ke madrasah
                                sesuai jadwal → dianggap secara otomatis <strong>mengundurkan diri</strong>, meskipun
                                telah dinyatakan lulus seleksi</span></div>
                        <div class="gugur-item"><span class="gugur-no">✗</span><span>Terbukti <strong>memalsukan data
                                    atau dokumen</strong> → diskualifikasi dari seluruh proses seleksi + sanksi hukum
                                sesuai peraturan perundang-undangan</span></div>
                    </div>
                    <div class="infobox"
                        style="background:rgba(20,184,166,.06);border:1px solid rgba(20,184,166,.2);margin-top:1.35rem;">
                        <span class="infobox-icon">💡</span>
                        <div>Tidak lolos Jalur Prestasi atau Afirmasi? <strong>Berkas dapat diambil kembali mulai 15
                                April 2026</strong> (sehari setelah pengumuman) di Sekretariat PMBM. Kamu masih bisa
                            mendaftar ke <strong>Jalur Reguler mulai 18 April 2026</strong>.</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ KUOTA ═══ -->
        <section id="kuota">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Kapasitas Penerimaan</div>
                    <h2>Kuota &amp; <span class="grad">Rombongan Belajar</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Informasi kuota penerimaan untuk Tahun Pelajaran
                        2026/2027.</p>
                </div>
                <div class="kuota-grid">
                    <div class="card kuota-card reveal"
                        style="background:linear-gradient(160deg,rgba(212,168,67,.08),transparent);">
                        <div class="kuota-num"
                            style="background:linear-gradient(135deg,#d4a843,#f0c96a);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                            TBD</div>
                        <div class="kuota-label">Kuota Jalur Prestasi</div>
                        <div class="kuota-sub">Dikonfirmasi oleh Panitia PMBM<br>MTsN 1 Pandeglang</div>
                    </div>
                    <div class="card kuota-card reveal reveal-delay-1"
                        style="background:linear-gradient(160deg,rgba(96,165,250,.08),transparent);">
                        <div class="kuota-num"
                            style="background:linear-gradient(135deg,#60a5fa,#a78bfa);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">
                            TBD</div>
                        <div class="kuota-label">Kuota Jalur Afirmasi</div>
                        <div class="kuota-sub">Dikonfirmasi oleh Panitia PMBM<br>MTsN 1 Pandeglang</div>
                    </div>
                    <div class="card kuota-card reveal reveal-delay-2"
                        style="background:linear-gradient(160deg,rgba(20,184,166,.07),transparent);">
                        <div class="kuota-num grad">224</div>
                        <div class="kuota-label">Kuota Jalur Reguler</div>
                        <div class="kuota-sub">Estimasi 7 kelas baru<br>Maks. 32 murid per kelas</div>
                    </div>
                </div>
                <div class="kuota-note-grid">
                    <div class="card req-item reveal" style="margin:0">
                        <div class="req-num" style="background:linear-gradient(135deg,var(--teal),var(--teal-d))">🆓
                        </div>
                        <div class="req-text"><strong>Biaya Pendidikan: Rp 0 (GRATIS)</strong>
                            <div class="req-note">Seluruh biaya dibebankan pada anggaran BOS/BOP Madrasah. Tidak ada
                                pungutan dari peserta didik.</div>
                        </div>
                    </div>
                    <div class="card req-item reveal reveal-delay-1" style="margin:0">
                        <div class="req-num" style="background:linear-gradient(135deg,#1d4ed8,#1e40af)">🏫</div>
                        <div class="req-text"><strong>Kapasitas Per Kelas: 32 Murid</strong>
                            <div class="req-note">Sesuai ketentuan rombongan belajar Kemenag RI.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ PROGRAM ═══ -->
        <section id="program"
            style="background:linear-gradient(180deg,transparent,rgba(13,148,136,.03),transparent)">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">Keunggulan Madrasah</div>
                    <h2>Program &amp; <span class="grad">Ekstrakurikuler</span></h2>
                    <div class="divider"></div>
                    <p class="lead" style="margin-top:.9rem;">Lebih dari sekadar belajar — temukan passionmu di
                        sini.</p>
                </div>
                <div class="prog-grid">
                    <div class="card card-hover prog-card reveal">
                        <div class="prog-icon">📖</div>
                        <div class="prog-title">Tahfidz Al-Qur'an</div>
                        <p class="prog-desc">Target minimal 3 juz selama 3 tahun dengan bimbingan hafiz berpengalaman.
                        </p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-1">
                        <div class="prog-icon">🔬</div>
                        <div class="prog-title">Olimpiade Sains</div>
                        <p class="prog-desc">Persiapan KSM & OSN mulai dari tingkat kabupaten hingga nasional.</p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-2">
                        <div class="prog-icon">💻</div>
                        <div class="prog-title">Teknologi & IT</div>
                        <p class="prog-desc">Literasi digital dan coding dasar untuk menyiapkan generasi era global.
                        </p>
                    </div>
                    <div class="card card-hover prog-card reveal">
                        <div class="prog-icon">⚽</div>
                        <div class="prog-title">Olahraga Prestasi</div>
                        <p class="prog-desc">O2SN, sepak bola, bulu tangkis, karate, dan atletik bersama pelatih
                            berpengalaman.</p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-1">
                        <div class="prog-icon">🎭</div>
                        <div class="prog-title">Seni & Budaya</div>
                        <p class="prog-desc">Paskibra, drumband, hadroh, kaligrafi, MTQ, dan seni rupa.</p>
                    </div>
                    <div class="card card-hover prog-card reveal reveal-delay-2">
                        <div class="prog-icon">🌐</div>
                        <div class="prog-title">Bahasa Asing</div>
                        <p class="prog-desc">English Club & Arabic Club untuk mendukung komunikasi internasional.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="sec-sep"></div>

        <!-- ═══ FAQ ═══ -->
        <section id="faq">
            <div class="wrap">
                <div class="section-header center reveal">
                    <div class="eyebrow">FAQ</div>
                    <h2>Pertanyaan yang<br><span class="grad">Sering Diajukan</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="faq-wrap" id="faqList"></div>
            </div>
        </section>

        <!-- ═══ CTA FINAL ═══ -->
        <section class="cta-section">
            <div class="cta-glow"></div>
            <div class="cta-inner reveal">
                <div class="eyebrow" style="margin-bottom:1rem;display:inline-flex;">⏳ Kuota Terbatas</div>
                <h2>Siap Bergabung?<br><span class="grad">Daftar Sekarang</span></h2>
                <p class="lead" style="margin:1rem auto 0;max-width:460px;">Pendaftaran gratis, transparan, dan
                    objektif. Pilih jalur yang tepat dan raih masa depanmu bersama MTsN 1 Pandeglang.</p>
                <div class="cta-btns">
                    <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard" class="btn btn-gold btn-lg">🏆 Prestasi
                        / Afirmasi →</a>
                    <a href="https://pmbm-kanwilbanten.com" class="btn btn-ghost btn-lg">📝 Reguler (PMBM Bersama)
                        →</a>
                </div>
            </div>
        </section>

    </main>

    <!-- ═══ FOOTER ═══ -->
    <footer>
        <div class="footer-inner">
            <div class="footer-top">
                <div class="footer-col">
                    <div class="footer-col-title">MTsN 1 Pandeglang</div>
                    <p>Madrasah Tsanawiyah Negeri 1 Pandeglang</p>
                    <p>Jl. Raya Labuan, Kadulisung</p>
                    <p>Pandeglang, Banten 42253</p>
                    <p style="margin-top:.5rem;">adm@mtsn1pandeglang.sch.id</p>
                    <p><em>+62895351856267</em></p>
                </div>
                <div class="footer-col">
                    <div class="footer-col-title">Pimpinan</div>
                    <p>Kepala Madrasah:</p>
                    <p><strong style="color:var(--text)">Hj. Yanti Mariah, S.S., M.Pd.</strong></p>
                    <p style="margin-top:.6rem;">Ketua PMBM:</p>
                    <p><strong style="color:var(--text)">Umar Mu'tamar, S.Ag.</strong></p>
                    <p style="margin-top:.6rem;font-size:.74rem;line-height:1.65;color:var(--muted2)">Kementerian
                        Agama<br>Kabupaten Pandeglang</p>
                </div>
                <div class="footer-col">
                    <div class="footer-col-title">Link Penting</div>
                    <a href="https://daftar.mtsn1pandeglang.sch.id/dashboard">Daftar Prestasi / Afirmasi</a>
                    <a href="https://pmbm-kanwilbanten.com">Portal Reguler (PMBM Bersama)</a>
                    <a href="https://mtsn1pandeglang.sch.id">Website Resmi Madrasah</a>
                    <a href="https://banten.kemenag.go.id">Kanwil Kemenag Banten</a>
                    <a href="https://nisn.data.kemdikbud.go.id">Cek NISN</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Diselenggarakan berdasarkan Keputusan Kepala Kanwil Kemenag Provinsi Banten No. 009/B/Tahun 2026
                    &amp; Juknis PMBM MTsN 1 Pandeglang Tahun 2026.</p>
                <p style="margin-top:.4rem;">© 2026 MTs Negeri 1 Pandeglang</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp FAB -->
    <a class="wa-fab" href="https://wa.me/62895351856267" target="_blank" rel="noopener"
        title="Hubungi Panitia via WhatsApp">
        <div class="wa-fab-pulse"></div>
        💬
    </a>

    <!-- ═══ SCRIPT ═══ -->
    <script>
        // ── DATA ─────────────────────────────────────────────────────────
        const schedPA = [{
                icon: '📋',
                label: 'Pendaftaran Online',
                mulai: '2026-04-06',
                selesai: '2026-04-08',
                note: 'daftar.mtsn1pandeglang.sch.id/dashboard'
            },
            {
                icon: '📁',
                label: 'Penyerahan Berkas Fisik',
                mulai: '2026-04-06',
                selesai: '2026-04-08',
                note: 'Sekretariat PMBM MTsN 1 Pandeglang'
            },
            {
                icon: '🔍',
                label: 'Verifikasi Berkas',
                mulai: '2026-04-09',
                selesai: '2026-04-10',
                note: 'Dilakukan panitia'
            },
            {
                icon: '✍️',
                label: 'Tes Kemampuan & BTQ',
                mulai: '2026-04-13',
                selesai: '2026-04-13',
                note: 'Hadir max. pukul 07.00 WIB'
            },
            {
                icon: '📢',
                label: 'Pengumuman Hasil',
                mulai: '2026-04-14',
                selesai: '2026-04-14',
                note: 'Website resmi madrasah'
            },
            {
                icon: '🏫',
                label: 'Lapor Diri & Pemberkasan',
                mulai: '2026-04-15',
                selesai: '2026-04-16',
                note: 'Langsung ke madrasah'
            },
        ];
        const schedReg = [{
                icon: '📋',
                label: 'Pendaftaran Online',
                mulai: '2026-04-18',
                selesai: '2026-04-27',
                note: '08.00 buka – 16.00 tutup WIB'
            },
            {
                icon: '🔍',
                label: 'Verifikasi Dokumen',
                mulai: '2026-04-19',
                selesai: '2026-04-28',
                note: '08.00–16.00 WIB'
            },
            {
                icon: '📢',
                label: 'Pengumuman Peserta CBT',
                mulai: '2026-04-29',
                selesai: '2026-04-29',
                note: '08.00 WIB'
            },
            {
                icon: '🖥️',
                label: 'Uji Coba CBT',
                mulai: '2026-04-30',
                selesai: '2026-04-30',
                note: '07.30–16.00 WIB'
            },
            {
                icon: '🖥️',
                label: 'Pelaksanaan CBT',
                mulai: '2026-05-02',
                selesai: '2026-05-02',
                note: '07.30–16.00 WIB'
            },
            {
                icon: '📖',
                label: "Tes BTQ (Al-Qur'an)",
                mulai: '2026-05-02',
                selesai: '2026-05-03',
                note: '07.30–16.00 WIB'
            },
            {
                icon: '🎉',
                label: 'Pengumuman Kelulusan',
                mulai: '2026-05-05',
                selesai: '2026-05-05',
                note: '08.00 WIB di pmbm-kanwilbanten.com'
            },
            {
                icon: '🏫',
                label: 'Lapor Diri & Berkas (Map Hijau)',
                mulai: '2026-05-06',
                selesai: '2026-05-12',
                note: '08.00–16.00 WIB · Bawa map hijau'
            },
        ];
        const faqData = [{
                group: 'Umum & Teknis',
                items: [
                    ['Apakah ada biaya pendaftaran?',
                        'Tidak ada biaya sama sekali. Seluruh proses PMBM MTsN 1 Pandeglang 100% gratis — tidak ada pungutan dalam bentuk apapun dari calon peserta didik. Semua biaya operasional ditanggung anggaran BOS/BOP Madrasah sesuai regulasi Kemenag RI.'
                    ],
                    ['Apakah boleh mendaftar di dua jalur sekaligus (Prestasi dan Afirmasi)?',
                        'Tidak boleh. Setiap calon murid hanya dapat memilih satu jalur antara Prestasi atau Afirmasi. Jika terbukti mendaftar di dua jalur sekaligus, keduanya dapat dibatalkan. Namun jika tidak lolos, kamu masih bisa mendaftar ke Jalur Reguler mulai 18 April 2026.'
                    ],
                    ['Apakah siswa dari luar Pandeglang atau luar Banten bisa mendaftar?',
                        'Bisa. Tidak ada batasan domisili untuk mendaftar. Untuk Jalur Reguler, jika sekolah asal berasal dari luar Provinsi Banten, wajib melampirkan sertifikat akreditasi sekolah asal. Jika tidak terakreditasi, nilainya dihitung otomatis = 65.'
                    ],
                    ['Apa itu NISN dan bagaimana cara mengeceknya?',
                        'NISN (Nomor Induk Siswa Nasional) adalah nomor identitas unik setiap siswa yang terdaftar di EMIS (Kemenag) atau DAPODIK (Kemendikbud). Cara cek: hubungi guru/wali kelas di sekolah asal, atau cek mandiri di nisn.data.kemdikbud.go.id. Pastikan NISN sudah aktif sebelum mendaftar.'
                    ],
                    ['Mengapa KK dan Akta Kelahiran harus berbarcode?',
                        'Barcode pada dokumen kependudukan adalah tanda keaslian yang membuktikan dokumen diterbitkan resmi oleh Dinas Dukcapil. Dokumen lama (format lama tanpa barcode) tidak dapat diterima karena tidak dapat diverifikasi secara digital. Jika dokumenmu belum berbarcode, segera urus pembaruan di kantor Dukcapil setempat — prosesnya gratis.'
                    ],
                    ['Apa warna map snelhecter untuk masing-masing jalur?',
                        'Warna map berbeda untuk tiap jalur dan wajib sesuai: 🔴 Merah = Jalur Prestasi, 🟡 Kuning = Jalur Afirmasi, 🟢 Hijau = Jalur Reguler. Menggunakan warna yang salah dapat menyebabkan berkas sulit diproses. Tempel label identitas (Nama, Asal Sekolah, Jalur) di bagian depan map.'
                    ],
                    ['Di mana lokasi Sekretariat PMBM MTsN 1 Pandeglang?',
                        'Sekretariat PMBM berada di MTsN 1 Pandeglang, Jl. Raya Labuan, Kadulisung, Pandeglang, Banten 42253. Jam pelayanan: 08.00–14.00 WIB (istirahat 11.30–13.00 WIB) selama periode penyerahan berkas berlangsung.'
                    ],
                    ['Bagaimana cara menghubungi panitia jika ada pertanyaan?',
                        'Kamu bisa menghubungi panitia PMBM melalui WhatsApp di nomor +62895351856267, atau klik tombol 💬 di pojok kanan bawah halaman ini. Bisa juga melalui email adm@mtsn1pandeglang.sch.id. Harap hubungi di jam kerja (08.00–14.00 WIB).'
                    ],
                    ['Apakah ada batas usia untuk mendaftar?',
                        'Ya. Calon peserta didik baru maksimal berusia 15 tahun dihitung per 1 Juli 2026. Artinya, calon murid yang lahir sebelum 1 Juli 2011 tidak dapat diterima.'
                    ],
                    ['Apakah anak berkebutuhan khusus (ABK) bisa mendaftar?',
                        'Untuk informasi lebih lanjut mengenai penerimaan peserta didik berkebutuhan khusus, silakan hubungi langsung panitia PMBM karena ketentuannya bersifat kasuistis dan memerlukan koordinasi khusus.'
                    ],
                ]
            },
            {
                group: 'Jalur Prestasi',
                items: [
                    ['Prestasi apa saja yang diakui untuk Jalur Prestasi?',
                        'Ada tiga kategori: (1) Tahfidz: sertifikat hafalan minimal 3 juz — akan ada tes hafalan langsung. (2) Akademik: KSM/OMI, MYRES, OSN, OSP, OSK — diselenggarakan Kemenag, Kemendikbud, BRIN, atau PT Terakreditasi, minimal Juara 1–3 Kab/Kota. (3) Non-Akademik: MTQ, MHQ, MSQ, Pidato Arab, Kaligrafi, O2SN, FLS2N, Olahraga — minimal Juara 1 Kab/Kota, Juara 1–2 Provinsi, atau Juara 1–3 Nasional.'
                    ],
                    ['Apakah sertifikat fotokopi bisa diterima?',
                        'Tidak. Sertifikat yang diserahkan harus asli. Fotokopi, scan, atau sertifikat digital tidak diterima untuk proses verifikasi. Pastikan sertifikat asli dalam kondisi baik dan terbaca jelas.'
                    ],
                    ['Bagaimana jika sertifikat prestasi sudah lama atau sudah rusak?',
                        'Sertifikat tetap harus asli. Jika rusak atau hilang, coba urus surat keterangan pengganti dari instansi penyelenggara lomba. Konfirmasi terlebih dahulu ke panitia PMBM apakah surat keterangan pengganti dapat diterima.'
                    ],
                    ['Untuk olahraga beregu, siapa yang bisa menggunakan sertifikat tersebut?',
                        'Hanya top scorer atau pemain terbaik yang namanya tercantum secara eksplisit di sertifikat beregu. Anggota tim biasa yang tidak tercantum namanya di sertifikat tidak dapat menggunakan sertifikat beregu tersebut.'
                    ],
                    ['Apakah prestasi dari tingkat kecamatan atau sekolah bisa digunakan?',
                        'Tidak. Minimal harus Juara 1 tingkat Kabupaten/Kota untuk kategori Non-Akademik, dan minimal Juara 1–3 tingkat Kab/Kota untuk Akademik. Prestasi tingkat kecamatan atau internal sekolah tidak diakui.'
                    ],
                    ['Apakah ada tes tambahan selain verifikasi sertifikat?',
                        'Untuk kategori Tahfidz: ya, ada tes hafalan langsung pada 13 April 2026 di madrasah. Untuk kategori Akademik dan Non-Akademik: seleksi hanya berupa verifikasi sertifikat oleh panitia, tidak ada CBT.'
                    ],
                    ['Jika punya lebih dari satu sertifikat prestasi, apakah semua bisa dilampirkan?',
                        'Boleh melampirkan lebih dari satu sertifikat, namun panitia akan mempertimbangkan sertifikat dengan tingkat tertinggi. Lampirkan semua yang relevan untuk memperkuat berkas pendaftaran.'
                    ],
                ]
            },
            {
                group: 'Jalur Afirmasi',
                items: [
                    ['Dokumen apa saja yang bisa digunakan untuk Jalur Afirmasi?',
                        'Pilih salah satu yang dimiliki keluarga: KIP (Kartu Indonesia Pintar), PKH (Kartu Program Keluarga Harapan), KKS (Kartu Keluarga Sejahtera), atau SKTM (Surat Keterangan Tidak Mampu) dari pemerintah daerah. Semua harus difotokopi dan dilegalisir oleh instansi penerbit.'
                    ],
                    ['SKTM dari RT/RW apakah bisa digunakan?',
                        'Tidak bisa. SKTM hanya diterima jika diterbitkan oleh pemerintah daerah — minimal tingkat kelurahan, kecamatan, atau dinas sosial. SKTM dari RT/RW tidak memiliki kekuatan hukum yang cukup dan tidak akan diterima panitia.'
                    ],
                    ['Apa saja dokumen tambahan untuk pengguna SKTM?',
                        'Pengguna SKTM wajib melampirkan dua dokumen tambahan: (1) Fotokopi tagihan/rekening listrik 3 bulan terakhir, dan (2) Foto kondisi rumah dari tiga sisi: tampak depan, tampak dalam, dan tampak belakang. Panitia dapat melakukan pengecekan lapangan berdasarkan dokumen ini.'
                    ],
                    ['KIP yang digunakan, atas nama siapa — anak atau orang tua?',
                        'KIP yang digunakan adalah KIP atas nama calon murid (anak), bukan orang tua. Pastikan KIP masih aktif dan telah dilegalisir oleh instansi penerbit sebelum dilampirkan.'
                    ],
                    ['Apakah ada tes atau seleksi tambahan untuk Jalur Afirmasi?',
                        'Tidak ada CBT atau tes akademik untuk Jalur Afirmasi. Seleksi dilakukan murni berdasarkan verifikasi dokumen kelayakan ekonomi. Khusus pengguna SKTM, panitia dapat melakukan pengecekan lapangan.'
                    ],
                    ['Jika keluarga punya KIP dan PKH sekaligus, mana yang harus dilampirkan?',
                        'Cukup lampirkan salah satu yang paling kuat dan mudah diverifikasi. Namun boleh juga melampirkan keduanya sebagai penguat. Pastikan semua dokumen yang dilampirkan sudah dilegalisir.'
                    ],
                ]
            },
            {
                group: 'Jalur Reguler',
                items: [
                    ['Berapa madrasah yang bisa dipilih di Jalur Reguler?',
                        'Minimal 1 dan maksimal 2 madrasah tujuan dalam satu kali pendaftaran di sistem pmbm-kanwilbanten.com. Pertimbangkan baik-baik pilihan madrasah karena akan memengaruhi penempatan jika diterima.'
                    ],
                    ['Bagaimana sistem penilaian Jalur Reguler?',
                        'Nilai Akhir dihitung dari: 70% Nilai CBT + 30% Nilai BTQ. Jika nilai akhir sama, prioritas diberikan kepada siswa yang lebih tua usianya. Jika usia pun sama persis, yang mendaftar lebih awal yang diprioritaskan. Tidak ada nilai rapor atau nilai akademik lain yang diperhitungkan.'
                    ],
                    ['Apa itu CBT dan BTQ? Materi apa yang diujikan?',
                        'CBT (Computer Based Test) adalah tes berbasis komputer yang menguji kemampuan akademik. BTQ (Baca Tulis Al-Qur\'an) adalah tes kemampuan membaca dan menulis Al-Qur\'an. Untuk persiapan CBT, pelajari materi pelajaran SD/MI kelas 4–6. Untuk BTQ, pastikan kemampuan membaca Al-Qur\'an dengan baik dan benar.'
                    ],
                    ['Kapan dan di mana pelaksanaan CBT?',
                        'Uji Coba CBT dilaksanakan pada 30 April 2026 (07.30–16.00 WIB), dan CBT resmi pada 2 Mei 2026 (07.30–16.00 WIB) di MTsN 1 Pandeglang. Tes BTQ dilaksanakan 2–3 Mei 2026. Pastikan hadir tepat waktu karena keterlambatan bisa menyebabkan tidak diperkenankan mengikuti tes.'
                    ],
                    ['Apakah ada uji coba CBT sebelum tes resmi?',
                        'Ya. Uji Coba CBT diadakan pada 30 April 2026 agar peserta bisa mengenal sistem dan antarmuka CBT sebelum tes sesungguhnya. Sangat disarankan untuk hadir.'
                    ],
                    ['Dokumen apa yang perlu diunggah saat daftar online Reguler?',
                        'Tiga dokumen wajib: (1) KK diterbitkan sebelum Maret 2026, (2) Ijazah MI/SD atau Surat Keterangan Lulus, (3) Surat Pernyataan Pertanggungjawaban Mutlak bermaterai Rp 10.000 (format tersedia di pmbm-kanwilbanten.com). Dokumen kondisional: Sertifikat Akreditasi Sekolah (jika dari luar Banten) atau Surat Rekomendasi (jika dari sekolah asing).'
                    ],
                    ['KK saya terbit setelah Maret 2026, apakah masih bisa mendaftar?',
                        'KK yang diterbitkan pada atau setelah Maret 2026 tidak memenuhi syarat untuk Jalur Reguler. Segera hubungi panitia PMBM untuk mendapatkan solusi atau informasi alternatif dokumen yang dapat digunakan.'
                    ],
                    ['Sekolah asal saya belum terakreditasi, apakah bisa mendaftar?',
                        'Bisa. Jika sekolah asal belum atau tidak terakreditasi, sistem akan menghitung nilai akreditasi secara otomatis sebesar 65. Tidak perlu dokumen akreditasi dalam kondisi ini.'
                    ],
                    ['Kapan dan di mana menyerahkan map hijau Jalur Reguler?',
                        'Map snelhecter warna HIJAU berisi berkas fisik diserahkan langsung ke madrasah saat lapor diri, yaitu 6–12 Mei 2026 (setelah pengumuman kelulusan 5 Mei 2026), pukul 08.00–16.00 WIB. Pendaftaran online dilakukan lebih dulu melalui pmbm-kanwilbanten.com.'
                    ],
                    ['Apa yang terjadi jika diterima tapi tidak lapor diri?',
                        'Peserta dianggap secara otomatis mengundurkan diri dan kursinya hangus. Lapor diri adalah kewajiban mutlak yang harus dilakukan pada 6–12 Mei 2026 dengan membawa map hijau dan seluruh berkas. Tidak ada perpanjangan waktu lapor diri.'
                    ],
                ]
            },
            {
                group: 'Jadwal & Pengumuman',
                items: [
                    ['Di mana bisa melihat pengumuman hasil seleksi?',
                        'Pengumuman Jalur Prestasi & Afirmasi: 14 April 2026 di website resmi madrasah (daftar.mtsn1pandeglang.sch.id). Pengumuman Jalur Reguler: 5 Mei 2026 pukul 08.00 WIB di pmbm-kanwilbanten.com. Pantau terus kedua situs tersebut pada tanggal pengumuman.'
                    ],
                    ['Bagaimana jika tidak lolos Jalur Prestasi atau Afirmasi?',
                        'Berkas fisik dapat diambil kembali di Sekretariat PMBM mulai 15 April 2026 (sehari setelah pengumuman). Setelah itu, kamu masih bisa mendaftar ke Jalur Reguler yang dibuka 18–27 April 2026 melalui pmbm-kanwilbanten.com. Tidak lolos satu jalur bukan akhir segalanya!'
                    ],
                    ['Apakah ada masa sanggah atau banding hasil seleksi?',
                        'Untuk Jalur Prestasi dan Afirmasi, keputusan panitia bersifat final berdasarkan verifikasi dokumen. Jika merasa ada kekeliruan, segera hubungi panitia PMBM sebelum batas lapor diri. Untuk Jalur Reguler, nilai dan peringkat ditetapkan otomatis oleh sistem PMBM Bersama Kanwil.'
                    ],
                    ['Kapan tahun ajaran baru dimulai?',
                        'Tahun Pelajaran 2026/2027 diperkirakan dimulai pada Juli 2026. Informasi lebih lanjut mengenai hari pertama masuk sekolah akan diumumkan setelah proses lapor diri selesai.'
                    ],
                    ['Apakah ada orientasi atau MATSAMA setelah diterima?',
                        'Informasi mengenai kegiatan Masa Ta\'aruf Siswa Madrasah (MATSAMA) akan disampaikan saat atau setelah lapor diri. Pantau pengumuman resmi dari madrasah.'
                    ],
                ]
            },
            {
                group: 'Dokumen & Teknis',
                items: [
                    ['Bagaimana jika NISN saya tidak ditemukan di sistem?',
                        'Segera koordinasikan dengan operator sekolah asal untuk memastikan NISN sudah terdaftar dan aktif di EMIS/DAPODIK. Proses sinkronisasi data bisa memakan waktu. Jangan menunggu mepet deadline untuk mengecek NISN.'
                    ],
                    ['Dokumen saya ada yang hilang atau belum jadi, apa yang harus dilakukan?',
                        'Segera urus dokumen yang kurang sebelum periode pendaftaran berakhir. Untuk dokumen kependudukan (KK, Akta), bisa diurus di kantor Dukcapil. Untuk surat keterangan aktif, minta ke sekolah asal. Jangan menunda karena tidak ada perpanjangan waktu untuk pengumpulan berkas.'
                    ],
                    ['Apakah formulir online harus diisi sebelum menyerahkan berkas fisik (Prestasi/Afirmasi)?',
                        'Ya, keduanya wajib dilakukan dan saling melengkapi. Isi formulir online terlebih dahulu di daftar.mtsn1pandeglang.sch.id/dashboard, lalu cetak buktinya dan lampirkan bersama berkas fisik ke sekretariat. Salah satu saja tanpa yang lain = dinyatakan gugur.'
                    ],
                    ['Apakah berkas yang sudah diserahkan bisa diubah atau ditarik kembali?',
                        'Berkas yang sudah diserahkan ke sekretariat tidak bisa diubah selama proses verifikasi berlangsung. Jika ada kesalahan data, segera hubungi panitia PMBM sesegera mungkin. Berkas hanya bisa diambil kembali jika dinyatakan tidak lolos seleksi (mulai 15 April 2026 untuk Prestasi/Afirmasi).'
                    ],
                    ['Format foto rumah untuk Jalur Afirmasi (SKTM) seperti apa?',
                        'Foto harus jelas, tidak buram, dan menampilkan kondisi nyata rumah dari tiga sudut: tampak depan (terlihat fasad dan pintu utama), tampak dalam (ruang utama), dan tampak belakang. Foto bisa diambil dengan kamera HP. Tidak perlu resolusi tinggi, yang penting terang dan jelas.'
                    ],
                    ['Apakah pendaftaran bisa dilakukan malam hari atau di luar jam kerja?',
                        'Pendaftaran online (mengisi formulir di website) bisa dilakukan kapan saja selama server aktif. Namun penyerahan berkas fisik ke sekretariat hanya bisa dilakukan pada jam layanan panitia: 08.00–14.00 WIB (istirahat 11.30–13.00 WIB) pada tanggal yang telah ditentukan.'
                    ],
                ]
            },
        ];

        // ── RENDER JADWAL ────────────────────────────────────────────────
        function statusBadge(mulai, selesai) {
            const now = new Date(),
                m = new Date(mulai),
                s = new Date(selesai);
            s.setHours(23, 59, 59);
            if (now < m) return {
                text: 'Mendatang',
                bg: 'rgba(255,255,255,.05)',
                tc: 'var(--muted)'
            };
            if (now <= s) return {
                text: '🔴 Aktif',
                bg: 'rgba(212,168,67,.15)',
                tc: '#d4a843'
            };
            return {
                text: '✓ Selesai',
                bg: 'rgba(20,184,166,.12)',
                tc: 'var(--teal-xl)'
            };
        }

        function fmtDate(a, b) {
            const o = {
                day: 'numeric',
                month: 'short'
            };
            const da = new Date(a).toLocaleDateString('id-ID', o);
            const db = new Date(b).toLocaleDateString('id-ID', {
                ...o,
                year: 'numeric'
            });
            return a === b ? db : da + ' – ' + db;
        }

        function renderSched(data, elId) {
            const el = document.getElementById(elId);
            if (!el) return;
            el.innerHTML = data.map(j => {
                const {
                    text,
                    bg,
                    tc
                } = statusBadge(j.mulai, j.selesai);
                return `<div class="sched-item">
      <div class="sched-icon">${j.icon}</div>
      <div class="sched-content">
        <div class="sched-title">${j.label}</div>
        <div class="sched-date">${fmtDate(j.mulai,j.selesai)}${j.note?' · '+j.note:''}</div>
      </div>
      <div class="sched-badge badge" style="background:${bg};color:${tc};border:1px solid ${tc}33;">${text}</div>
    </div>`;
            }).join('');
        }
        renderSched(schedPA, 'sched-pa');
        renderSched(schedReg, 'sched-reg');

        // ── RENDER FAQ ───────────────────────────────────────────────────
        const grpClrs = {
            'Umum & Teknis': {
                bg: 'rgba(20,184,166,.1)',
                tc: 'var(--teal-xl)'
            },
            'Jalur Prestasi': {
                bg: 'rgba(212,168,67,.12)',
                tc: '#d4a843'
            },
            'Jalur Afirmasi': {
                bg: 'rgba(96,165,250,.12)',
                tc: '#60a5fa'
            },
            'Jalur Reguler': {
                bg: 'rgba(20,184,166,.1)',
                tc: 'var(--teal-xl)'
            },
            'Jadwal & Pengumuman': {
                bg: 'rgba(167,139,250,.12)',
                tc: '#a78bfa'
            },
            'Dokumen & Teknis': {
                bg: 'rgba(251,146,60,.1)',
                tc: '#fb923c'
            }
        };
        let faqHtml = '';
        faqData.forEach(grp => {
            const c = grpClrs[grp.group] || {
                bg: 'rgba(255,255,255,.06)',
                tc: 'var(--muted)'
            };
            faqHtml +=
                `<div class="faq-group"><div class="faq-group-label" style="background:${c.bg};color:${c.tc};border:1px solid ${c.tc}33;">${grp.group}</div>`;
            grp.items.forEach(([q, a]) => {
                faqHtml +=
                    `<div class="card faq-item"><button class="faq-btn" onclick="toggleFaq(this)"><span>${q}</span><span class="faq-chev">▼</span></button><div class="faq-body"><p>${a}</p></div></div>`;
            });
            faqHtml += '</div>';
        });
        document.getElementById('faqList').innerHTML = faqHtml;

        // ── COUNTDOWN ────────────────────────────────────────────────────
        (function() {
            const pad = n => String(n).padStart(2, '0');
            const deadlines = [{
                    label: 'Pendaftaran Prestasi &amp; Afirmasi',
                    d: '2026-04-08T16:00:00'
                },
                {
                    label: 'Pendaftaran Reguler Ditutup',
                    d: '2026-04-27T16:00:00'
                },
                {
                    label: 'Pengumuman Kelulusan Reguler',
                    d: '2026-05-05T08:00:00'
                },
                {
                    label: 'Batas Lapor Diri',
                    d: '2026-05-12T16:00:00'
                },
            ];
            const lEl = document.getElementById('cd-label'),
                dEl = document.getElementById('cd-d'),
                hEl = document.getElementById('cd-h'),
                mEl = document.getElementById('cd-m'),
                sEl = document.getElementById('cd-s');
            if (!lEl) return;

            function getActive() {
                const now = Date.now();
                return deadlines.find(d => new Date(d.d).getTime() > now) || null
            }

            function tick() {
                const active = getActive();
                if (!active) {
                    lEl.textContent = 'Seluruh proses PMBM 2026 telah selesai.';
                    return
                }
                const diff = new Date(active.d).getTime() - Date.now();
                if (diff <= 0) {
                    tick();
                    return
                }
                lEl.innerHTML = active.label;
                dEl.textContent = pad(Math.floor(diff / 86400000));
                hEl.textContent = pad(Math.floor((diff % 86400000) / 3600000));
                mEl.textContent = pad(Math.floor((diff % 3600000) / 60000));
                sEl.textContent = pad(Math.floor((diff % 60000) / 1000));
            }
            tick();
            setInterval(tick, 1000);
        })();

        // ── NAV SCROLL ───────────────────────────────────────────────────
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 40)
        }, {
            passive: true
        });

        // ── DRAWER ───────────────────────────────────────────────────────
        const menuBtn = document.getElementById('menuBtn'),
            drawer = document.getElementById('drawer');
        menuBtn.addEventListener('click', () => {
            const o = drawer.classList.toggle('open');
            menuBtn.classList.toggle('open', o)
        });
        drawer.querySelectorAll('.d-link,a').forEach(a => a.addEventListener('click', () => {
            drawer.classList.remove('open');
            menuBtn.classList.remove('open')
        }));
        document.addEventListener('click', e => {
            if (!drawer.contains(e.target) && !menuBtn.contains(e.target)) {
                drawer.classList.remove('open');
                menuBtn.classList.remove('open')
            }
        });

        // ── NAV ACTIVE ───────────────────────────────────────────────────
        const secEls = document.querySelectorAll('section[id]'),
            navAs = document.querySelectorAll('.nav-links a');
        secEls.forEach(s => new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                navAs.forEach(a => a.classList.remove('active'));
                const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
                if (a) a.classList.add('active')
            })
        }, {
            threshold: .3
        }).observe(s));

        // ── FAQ TOGGLE ───────────────────────────────────────────────────
        function toggleFaq(btn) {
            const body = btn.nextElementSibling,
                chev = btn.querySelector('.faq-chev');
            const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
            document.querySelectorAll('.faq-body').forEach(b => b.style.maxHeight = '0px');
            document.querySelectorAll('.faq-chev').forEach(c => c.style.transform = '');
            if (!isOpen) {
                body.style.maxHeight = body.scrollHeight + 'px';
                chev.style.transform = 'rotate(180deg)'
            }
        }

        // ── REQ TABS ─────────────────────────────────────────────────────
        const tabClrs = {
            'tab-prestasi': {
                bg: 'rgba(212,168,67,.1)',
                tc: '#d4a843',
                bc: '#d4a843'
            },
            'tab-afirmasi': {
                bg: 'rgba(96,165,250,.1)',
                tc: '#60a5fa',
                bc: '#60a5fa'
            },
            'tab-reguler': {
                bg: 'rgba(20,184,166,.1)',
                tc: 'var(--teal-xl)',
                bc: 'var(--teal)'
            }
        };
        document.getElementById('reqTabs').addEventListener('click', e => {
            const btn = e.target.closest('.req-tab');
            if (!btn) return;
            const pId = btn.dataset.panel;
            document.querySelectorAll('.req-tab').forEach(t => {
                t.classList.remove('active');
                t.style.background = 'transparent';
                t.style.color = 'var(--muted)';
                t.style.borderColor = 'var(--border)'
            });
            document.querySelectorAll('.req-panel').forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            const c = tabClrs[pId];
            if (c) {
                btn.style.background = c.bg;
                btn.style.color = c.tc;
                btn.style.borderColor = c.bc
            }
            const panel = document.getElementById(pId);
            if (panel) panel.classList.add('active');
        });

        // ── SCROLL REVEAL ────────────────────────────────────────────────
        const revealEls = document.querySelectorAll('.reveal');
        const revealObs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    revealObs.unobserve(e.target)
                }
            })
        }, {
            threshold: .12,
            rootMargin: '0px 0px -40px 0px'
        });
        revealEls.forEach(el => revealObs.observe(el));

        // ── TOMBOL DAFTAR DINAMIS ─────────────────────────────────────────
        // Letakkan script ini di bagian bawah <body>, setelah elemen navbar ada
        // atau gabungkan dengan script yang sudah ada di halaman

        (function() {
            const btn = document.getElementById('daftarBtnNav');
            if (!btn) return;

            // Definisi periode — gunakan format YYYY-MM-DDTHH:MM:SS (WIB = UTC+7)
            const phases = [{
                    // Prestasi & Afirmasi dibuka
                    start: '2026-04-06T08:00:00+07:00',
                    end: '2026-04-08T16:00:00+07:00',
                    href: 'https://daftar.mtsn1pandeglang.sch.id/dashboard',
                    label: '🏆 Daftar Prestasi / Afirmasi',
                    style: {
                        background: 'linear-gradient(135deg,#d4a843,#b8882a)',
                        boxShadow: '0 0 24px rgba(212,168,67,.3)'
                    },
                    disabled: false,
                },
                {
                    // Jeda verifikasi & tes (9–17 April)
                    start: '2026-04-08T16:00:01+07:00',
                    end: '2026-04-17T23:59:59+07:00',
                    href: null,
                    label: '⏳ Sedang Diverifikasi',
                    style: {
                        background: 'rgba(255,255,255,.06)',
                        color: 'var(--muted)',
                        boxShadow: 'none',
                        cursor: 'not-allowed',
                        border: '1px solid var(--border)'
                    },
                    disabled: true,
                },
                {
                    // Reguler dibuka
                    start: '2026-04-18T08:00:00+07:00',
                    end: '2026-04-27T16:00:00+07:00',
                    href: 'https://pmbm-kanwilbanten.com',
                    label: '📝 Daftar Reguler',
                    style: {
                        background: 'linear-gradient(135deg,var(--teal),var(--teal-d))',
                        boxShadow: '0 0 28px rgba(13,148,136,.3)'
                    },
                    disabled: false,
                },
                {
                    // Pendaftaran ditutup
                    start: '2026-04-27T16:00:01+07:00',
                    end: '2099-12-31T00:00:00+07:00',
                    href: null,
                    label: '🔒 Pendaftaran Ditutup',
                    style: {
                        background: 'rgba(220,38,38,.12)',
                        color: '#ef4444',
                        boxShadow: 'none',
                        cursor: 'not-allowed',
                        border: '1px solid rgba(220,38,38,.3)'
                    },
                    disabled: true,
                },
            ];

            // Default — sebelum semua periode (sebelum 6 April)
            const defaultPhase = {
                href: null,
                label: '🕐 Belum Dibuka',
                style: {
                    background: 'rgba(255,255,255,.05)',
                    color: 'var(--muted)',
                    boxShadow: 'none',
                    cursor: 'not-allowed',
                    border: '1px solid var(--border)'
                },
                disabled: true,
            };

            function applyPhase(phase) {
                // Teks
                btn.textContent = phase.label;

                // Style
                Object.assign(btn.style, {
                    background: '',
                    color: '#fff',
                    boxShadow: '',
                    cursor: 'pointer',
                    border: 'none',
                    ...phase.style,
                });

                // Link & klik
                if (phase.disabled) {
                    btn.removeAttribute('href');
                    btn.style.pointerEvents = 'none';
                    btn.setAttribute('aria-disabled', 'true');
                } else {
                    btn.setAttribute('href', phase.href);
                    btn.style.pointerEvents = 'auto';
                    btn.removeAttribute('aria-disabled');
                }
            }

            function update() {
                const now = Date.now();
                const active = phases.find(p =>
                    now >= new Date(p.start).getTime() &&
                    now <= new Date(p.end).getTime()
                );
                applyPhase(active || defaultPhase);
            }

            // Jalankan langsung & perbarui tiap menit
            update();
            setInterval(update, 60_000);
        })();
    </script>
</body>

</html>

```

---

### ./resources/views/skl.blade.php

```blade
@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Storage;

    $fotoUrl = $record->berkas_foto ? Storage::url($record->berkas_foto) : null;
    $qrPayload = url('/dashboard/formulir/' . $record->id);
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

    // ── Logika Wali untuk Pakta Integritas ───────────────────────────────────
    $ayahHidup = $record->ayah_status !== 'Meninggal' && $record->ayah_nama;
    $ibuHidup = $record->ibu_status !== 'Meninggal' && $record->ibu_nama;

    if ($ayahHidup) {
        $namaWali = $record->ayah_nama;
        $hubunganWali = 'Ayah Kandung';
    } elseif ($ibuHidup) {
        $namaWali = $record->ibu_nama;
        $hubunganWali = 'Ibu Kandung';
    } else {
        $namaWali = $record->wali_nama;
        $hubunganWali = 'Wali';
    }

    $namaWaliDisplay = $namaWali ? strtoupper($namaWali) : '......................................';
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
    <div class="doc-nomor">Nomor: {{ $instansi?->nomor_surat ?? '......./Mts.01/PMBM/' . date('Y') }}</div>

    <p>
        Berdasarkan hasil Keputusan Sidang Pleno Panitia Penerimaan Peserta Didik Baru (PMBM) <b>{{ $namaMadrasah }}</b>
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
                        Panitia PMBM,</span>
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
            <td style="font-weight: bold;">{{ $namaWaliDisplay }}</td>
        </tr>
        <tr>
            <td style="color: #4b5563;">Status Hubungan</td>
            <td>:</td>
            <td>{{ $hubunganWali }} Peserta Didik</td>
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
            <b>pembatalan kelulusan</b> putra/putri saya.
        </li>
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
                <td>Dicetak dari sistem PMBM</td>
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

### ./resources/views/vendor/filament-easy-footer/easy-footer.blade.php

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

### ./resources/views/vendor/filament-easy-footer/github-version.blade.php

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

### ./resources/views/vendor/filament-easy-footer/.gitkeep

```

```

---

## Resources - CSS

### ./resources/css/app.css

```css
@tailwind base;
@tailwind components;
@tailwind utilities;

[x-cloak] {
    display: none;
}

```

---

### ./resources/css/filament/dashboard/tailwind.config.js

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

### ./resources/css/filament/dashboard/theme.css

```css
@import "../../../../vendor/filament/filament/resources/css/base.css";
@tailwind base;
@tailwind components;
@tailwind utilities;
@tailwind variants;
@config 'tailwind.config.js';

@layer components {

    /* ══════════════════════════════════════
       AUTH FORM WRAPPER — Border Gradient
    ══════════════════════════════════════ */
    .custom-auth-form-wrapper {
        border: 2px solid transparent;
        background:
            linear-gradient(#111827, #111827) padding-box,
            linear-gradient(135deg, #10b981, #06b6d4, #f59e0b) border-box;
        border-radius: 1rem;
        padding: 1.5rem;
    }

    /* Input wrapper border gradient */
    .custom-auth-form-wrapper .fi-input-wrp {
        border: 1.5px solid transparent !important;
        background:
            linear-gradient(#1f2937, #1f2937) padding-box,
            linear-gradient(135deg, #10b981, #06b6d4, #f59e0b) border-box !important;
        border-radius: 0.5rem !important;
        box-shadow: none !important;
        --tw-ring-shadow: none !important;
        --tw-shadow: none !important;
    }

    .custom-auth-form-wrapper .fi-input-wrp:focus-within {
        background:
            linear-gradient(#1f2937, #1f2937) padding-box,
            linear-gradient(135deg, #f59e0b, #06b6d4, #10b981) border-box !important;
    }

    /* ── Teks input ── */
    .custom-auth-form-wrapper .fi-input,
    .custom-auth-form-wrapper input {
        color: #f3f4f6 !important;
        background: transparent !important;
    }

    .custom-auth-form-wrapper input::placeholder {
        color: #6b7280 !important;
    }

    /* ── Label field ── */
    .custom-auth-form-wrapper label,
    .custom-auth-form-wrapper .fi-fo-field-wrp-label label {
        color: #d1d5db !important;
    }

    /* ── Judul halaman ── */
    .custom-auth-form-wrapper h1,
    .custom-auth-form-wrapper h2 {
        color: #f9fafb !important;
    }

    /* ── Sub-teks / deskripsi ── */
    .custom-auth-form-wrapper p {
        color: #9ca3af !important;
    }

    /* ── Span teks biasa ── */
    .custom-auth-form-wrapper span {
        color: #d1d5db !important;
    }

    /* ── Checkbox label ── */
    .custom-auth-form-wrapper .fi-checkbox-label,
    .custom-auth-form-wrapper [class*="checkbox"] label {
        color: #d1d5db !important;
    }

    /* ── Link ── */
    .custom-auth-form-wrapper a {
        color: #10b981 !important;
    }

    .custom-auth-form-wrapper a:hover {
        color: #34d399 !important;
    }

    /* ── Icon SVG dalam input ── */
    .custom-auth-form-wrapper .fi-input-wrp svg {
        color: #6b7280 !important;
    }

    /* ── Required asterisk (*) ── */
    .custom-auth-form-wrapper .fi-fo-field-wrp-label .fi-fo-field-wrp-label-required {
        color: #f87171 !important;
    }
}

```

---

## Resources - JS

### ./resources/js/app.js

```javascript
import './bootstrap';

```

---

### ./resources/js/bootstrap.js

```javascript
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

```

---

## Config

### ./config/app.php

```php
<?php

return [
    'name' => env('APP_NAME', 'PMBM MTs Negeri 1 Pandeglang'),
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

### ./config/auth.php

```php
<?php

use App\Models\User;

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
            'model' => env('AUTH_MODEL', User::class),
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

### ./config/cache.php

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

### ./config/database.php

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

### ./config/filament-easy-footer.php

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

### ./config/filament.php

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

### ./config/filament-shield.php

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

### ./config/filesystems.php

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

### ./config/logging.php

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

### ./config/mail.php

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

### ./config/permission.php

```php
<?php

use Spatie\Permission\DefaultTeamResolver;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

        'permission' => Permission::class,

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission\Contracts\Role` contract.
         */

        'role' => Role::class,

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
    'team_resolver' => DefaultTeamResolver::class,

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

        'expiration_time' => DateInterval::createFromDateString('24 hours'),

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

### ./config/queue.php

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

### ./config/sanctum.php

```php
<?php

use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Laravel\Sanctum\Http\Middleware\AuthenticateSession;
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
        'authenticate_session' => AuthenticateSession::class,
        'encrypt_cookies' => EncryptCookies::class,
        'validate_csrf_token' => ValidateCsrfToken::class,
    ],
];

```

---

### ./config/services.php

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

### ./config/session.php

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

## Bootstrap

### ./bootstrap/app.php

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

### ./bootstrap/providers.php

```php
<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;

return [
    AppServiceProvider::class,
    AdminPanelProvider::class,
];

```

---

## Public - JS

### ./public/js/devonab/filament-easy-footer/filament-easy-footer-scripts.js

```javascript

```

---

## Public

### ./public/.htaccess

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

### ./public/index.php

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

### ./public/robots.txt

```
User-agent: *
Disallow:

```

---

## Root

### ./composer.json

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

### ./.env.example

```
APP_NAME="PMBM MTSN 1 PANDEGLANG"
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

### ./juknis-bersama.md

```markdown
KEMENTERIAN AGAMA REPUBLIK INDONESIA
KANTOR WILAYAH KEMENTERIAN AGAMA

PROVINSI BANTEN
Kawasan Pusat Pemerintah Provinsi Banten

Jalan Syekh Nawawi Al Bantani Blok Instansi Vertikal No. 01 Serang 42171
Telepon (0254) 8480080 Faksimili (0254) 8480083

website : http://banten.kemenag.go.id email : kanwilbanten@kemenag.go.id
Nomor : SP-5/Kw.28.02/PP.00/03/2026 17 Maret 2026
Sifat : Biasa
Lampiran : 1 (satu) bundel
Hal : Surat Penyampain Petunjuk Pelaksanaan PMBM Bersama
di Lingkungan Kantor Wilayah Kementerian Agama Provinsi Banten
Tahun Pelajaran 2026/2027
Yth. Kepala Kantor Kementerian Agama Kab./Kota;
se-Provinsi Banten.
Assalamu’alaikum Wr.Wb.
Dengan hormat, dalam rangka Penerimaan Murid Baru Madrasah Bersama, Kantor
Wilayah Kementerian Agama Provinsi Banten telah menetapkan Keputusan Kepala Kantor
Wilayah Kementerian Agama Provinsi Banten Nomor: 009/B/ Tahun 2026 tanggal 16 Maret
2026 tentang Petunjuk Pelaksanaan Penerimaan Murid Baru Madrasah Bersama Madrasah
Tsanawiyah Negeri dan Madrasah Aliyah Negeri di Lingkungan Kantor Wilayah Kementerian
Agama Provinsi Banten Tahun Pelajaran 2026/2027. Berkenaan dengan hal tersebut, kami
mohon Saudara untuk memberikan dukungan terhadap penyelenggaraan PMBM Bersama
Tahun Pelajaran 2026/2027 dengan melaksanakan hal-hal sebagai berikut:
1. Menyampaikan dan mensosialisasikan Petunjuk Pelaksanaan PMBM Bersama Tahun
Pelajaran 20206/2027 sebagaimana terlampir secara luring maupun daring melalui
media publikasi cetak maupun elektorinik kepada, seluruh Madrasah Ibtidaiyah
(MI)/Sederajat, Madrasah Tsanawiyah (MTs)/Sederajat di wilayah masing-masing dan
instansi/Dinas Pendidikan Kabupaten Kota untuk mendaftarkan muridnya ke MTsN
dan MAN di Provinsi Banten;
2. Melakukan koordinasi dengan Madrasah Tsanawiah Negeri dan Madrasah Aliyah
Negeri terkait untuk teknis fasilitasi dan pemanfaatan lokasi CBT yang menjadi
penyelenggara;
3. Membentuk kepanitiaan atau tim khusus di madrasah penyelenggara untuk
memastikan pelaksanaan PMBM Bersama berjalan secara baik dan transparan;
4. Menyediakan kanal pengaduan dan mengelola pengaduan masyarakat sebagaimana
mestinya untuk menyelesaikan permasalahan PMBM Bersama.
Demikian, untuk dipedomani atas perhatiannya diucapkan terima kasih.
Wassalamu’alaikum Wr. Wb.

a.n. Kepala
Kepala Bidang Pendidikan Madrasah,

${ttd}

Hairul Umam

Tembusan :
Kepala Kantor Wilayah Kementerian Agama Provinsi Banten.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik
yang diterbitkan oleh Balai Besar Sertifikasi Elektronik (BSrE), Badan Siber dan Sandi Negara (BSSN).

Powered by TCPDF (www.tcpdf.org)

1 / 1

Powered by TCPDF (www.tcpdf.org)

1 / 1

KEPUTUSAN

KEPALA KANTOR WILAYAH KEMENTERIAN AGAMA PROVINSI BANTEN

NOMOR 009/B/TAHUN 2026

TENTANG

PETUNJUK PELAKSANAN PENERIMAAN MURID BARU MADRASAH BERSAMA
PADA MADRASAH TSANAWIYAH NEGERI DAN MADRASAH ALIYAH NEGERI
DI LINGKUNGAN KANTOR WILAYAH KEMENTERIAN AGAMA PROVINSI BANTEN

TAHUN PELAJARAN 2026/2027
DENGAN RAHMAT TUHAN YANG MAHA ESA

KEPALA KANTOR WILAYAH KEMENTERIAN AGAMA PROVINSI BANTEN,
Menimbang : a. bahwa untuk menjamin kualitas dan pencapaian standar
Penerimaan Murid Baru pada Madrasah Tsanawiyah
Negeri dan Madrasah Aliyah Negeri, perlu dilaksanakan
Penerimaan Murid Baru Madrasah Bersama;
b. bahwa untuk tertib administrasi dan mengatur mekanisme
Penerimaan Murid Baru Madrasah Berama sebagaimana
dimaksud dalam huruf a, perlu diatur dalam Petunjuk
Pelaksanaan;
c. bahwa berdasarkan pertimbangan sebagaimana dimaksud
dalam huruf a, dan huruf b, perlu menetapkan Keputusan
Kepala Kantor Wilayah Kementerian Agama Provinsi
Banten tentang Petunjuk Pelaksanaan Penerimaan Murid
Baru Madrasah Bersama pada Madrasah Tsanawiyah
Negeri dan Madrasah Aliyah Negeri di lingkungan Kantor
Wilayah Kementerian Agama Provinsi Banten Tahun
Pelajaran 2026/2027;

Mengingat : 1. Undang-Undang Nomor 20 Tahun 2003 tentang Sistem
Pendidikan Nasional (Lembaran Negara Republik Indonesia
Tahun 2003 Nomor 78, Tambahan Lembaran Negara
Republik Indonesia Nomor 4301);
2. Undang-Undang Nomor 30 Tahun 2014 tentang
Administrasi Pemerintahan (Lembaran Negara Republik
Indonesia Tahun 2014 Nomor 292, Tambahan Lembaran
Negara Republik Indonesia Nomor 5601);
3. Peraturan Pemerintah Nomor 48 Tahun 2008 tentang
Pendanaan Pendidikan (Lembaran Negara Republik
Indonesia Tahun 2008 Nomor 91, Tambahan Lembaran
Negara Republik Indonesia Nomor 4864) sebagaimana
telah diubah dengan Peraturan Pemerintah Nomor 18
Tahun 2022 tentang Perubahan atas Peraturan
Pemerintah Nomor 48 tahun 2008 tentang Pendanaan
Pendidikan (Lembaran Negara Republik Indonesia Tahun
2022 Nomor 121);

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-2-

4. Peraturan Pemerintah Nomor 17 Tahun 2010 tentang
Pengelolaan dan Penyelenggaraan Pendidikan (Lembaran
Negara Republik Indonesia Tahun 2010 Nomor 23,
Tambahan Lembaran Negara Republik Indonesia Nomor
5105) sebagaimana telah diubah dengan Peraturan
Pemerintah Nomor 66 Tahun 2010 tentang Perubahan
atas Peraturan Pemerintah Nomor 17 Tahun 2010 tentang
Pengelolaan dan Penyelenggaraan Pendidikan (Lembaran
Negara Republik Indonesia Tahun 2010 Nomor 112,
Tambahan Lembaran Negara Republik Indonesia Nomor
5157);
5. Peraturan Pemerintah Nomor 57 Tahun 2021 tentang
Standar Nasional Pendidikan (Lembaran Negara Republik
Indonesia Tahun 2021 Nomor 87, Tambahan Lembaran
Negara Republik Indonesia Tahun 2021 Nomor 6676)
sebagaimana telah beberapa kali diubah dengan Peraturan
Pemerintah Nomor 4 Tahun 2022 tentang perubahan atas
Peraturan Pemerintah Nomor 57 Tahun 2021 tentang
Standar Nasional Pendidikan (Lembaran Negara Republik
Indonesia Tahun 2022 Nomor 14, Tambahan Lembaran
Negara Republik Indonesia Nomor 6762);
6. Peraturan Presiden Nomor 152 Tahun 2024 tentang
Kementerian Agama (Lembaran Negara Republik Indonesia
Tahun 2024 Nomor 348);
7. Peraturan Menteri Agama Nomor 90 Tahun 2013 tentang
Penyelenggaraan Pendidikan Madrasah (Berita Negara
Republik Indonesia Tahun 2013 Nomor 1382)
sebagaimana telah beberapa kali diubah terakhir dengan
Peraturan Menteri Agama Republik Indonesia Nomor 66
Tahun 2016 tentang Perubahan Kedua Atas Peraturan
Menteri Agama Republik Indonesia Nomor 90 Tahun 2013
tentang Penyelenggaraan Pendidikan Madrasah (Berita
Negara Republik Indonesia Tahun 2016 Nomor 2101);
8. Peraturan Menteri Agama Nomor 19 Tahun 2019 tentang
Organisasi dan Tata Kerja Instansi Vertikal Kementerian
Agama (Berita Negara Republik Indonesia Tahun 2019
Nomor 1115) sebagaimana telah dengan Peraturan Menteri
Agama Republik Indonesia Nomor 6 Tahun 2022 tentang
Perubahan Atas Peraturan Menteri Agama Republik
Indonesia Nomor 19 Tahun 2019 tentang Organisasi dan
Tata Kerja Instansi Vertikal Kementerian Agama (Berita
Negara Republik Indonesia Tahun 2022 Nomor 288);
9. Peraturan Menteri Agama Nomor 33 Tahun 2024 tentang
Organisasi dan Tata Kerja Instansi Vertikal Kementerian
Agama (Berita Negara Republik Indonesia Tahun 2024
Nomor 1070)
10. Keputusan Direktur Jenderal Pendidikan Islam
Kementerian Agama Nomor 10041 Tahun 2025 tentang
Petunjuk Teknis Penerimaan Murid Baru Madrasah Tahun
Pelajajaran 2026/2027;

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-3-

MEMUTUSKAN :

Menetapkan : KEPUTUSAN KEPALA KANTOR WILAYAH KEMENTERIAN
AGAMA PROVINSI BANTEN TENTANG PETUNJUK
PELAKSANAAN PENERIMAAN MURID BARU MADRASAH
BERSAMA PADA MADRASAH TSANAWIYAH NEGERI DAN
MADRASAH ALIYAH NEGERI DI LINGKUNGAN KANTOR
WILAYAH KEMENTERIAN AGAMA PROVINSI BANTEN TAHUN
PELAJARAN 2026/2027

KESATU : Menetapkan Petunjuk Pelaksanaan Penerimaan Murid Baru
Madrasah Bersama pada Madrasah Tsanawiyah Negeri dan
Madrasah Aliyah Negeri di lingkungan Kantor Wilayah
Kementerian Agama Provinsi Banten Tahun Pelajaran
2026/2027 sebagaimana tercantum dalam Lampiran yang
merupakan bagian tidak terpisahkan dari keputusan ini.
KEDUA : Petunjuk Pelaksanaan sebagaimana dimaksud dalam diktum
KESATU merupakan pedoman dalam pelaksanaan Penerimaan
Murid Baru Madrasah bersama.

KETIGA : Keputusan ini mulai berlaku pada tanggal ditetapkan.

Ditetapkan di Serang
pada tanggal 16 Maret 2026
KEPALA KANTOR WILAYAH
KEMENTERIAN AGAMA PROVINSI BANTEN,
^

AMRULLAH

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-4-

LAMPIRAN
KEPUTUSAN KEPALA KANTOR WILAYAH KEMENTERIAN AGAMA
PROVINSI BANTEN
NOMOR 009/B/TAHUN 2026
TENTANG
PETUNJUK PELAKSANAAN PENERIMAAN MURID BARU MADRASAH
BERSAMA UNTUK MADRASAH TSANAWIYAH NEGERI DAN
MADRASAH ALIYAH NEGERI DI LINGKUNGAN KANTOR WILAYAH
KEMENTERIAN AGAMA PROVINSI BANTEN TAHUN PELAJARAN
2026/2027

BAB I
PENDAHULUAN

A.
Latar Belakang
Madrasah adalah salah satu jenis pendidikan umum yang mempunyai
kekhasan Agama Islam dalam binaan Menteri Agama. Pelaksanaan Penerimaan
Murid Baru Madrasah merupakan layanan pendidikan guna memenuhi hak-hak
dasar warga negara untuk memperoleh pendidikan yang bermutu dan
berkeadilan dengan menerapkan asas objektif, akuntabel, transparan dan tidak
diskriminatif sehingga mendorong peningkatan akses layanan pendidikan yang
bermutu.
Dalam rangka peningkatan akses dan mutu serta relevansi pendidikan, pada
tahun pelajaran 2026/2027 Kantor Wilayah Kementerian Agama Provinsi Banten
berkomitmen memberikan akses pendidikan yang bermutu di madrasah. Oleh
karena itu, untuk memberikan panduan Penerimaan Murid Baru Madrasah pada
Madrasah Tsanawiyah Negeri dan Madrasah Aliyah Negeri melalui Kantor
Wilayah Kementerian Agama Provinsi Banten menetapkan Petunjuk Pelaksanaan
Penerimaan Murid Baru Madrasah Bersama pada Madrasah Tsanawiyah Negeri
dan Madrasah Aliyah Negeri di Lingkungan Kantor Wilayah Kementerian Agama
Provinsi Banten Tahun Pelajaran 2026/2027.
B.
Tujuan
Petunjuk Pelaksanaan Penerimaan Murid Baru Madrasah Bersama pada
Madrasah Tsanawiyah Negeri dan Madrasah Aliyah Negeri di Lingkungan Kantor
Wilayah Kementerian Agama Provinsi Banten Tahun Pelajaran 2026/2027
bertujuan untuk:
1. Menjamin Penerimaan Murid Baru di madrasah berjalan secara objektif,
akuntabel, transparan dan tidak diskriminatif sehingga mendorong
peningkatan akses layanan pendidikan yang berkeadilan.
2. Memberikan pedoman bagi Kepala Madrasah, orang tua murid, masyarakat
dan para pemangku kepentingan dalam rangka pelaksanaan Penerimaan
Murid Baru Madrasah.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-5-
BAB II
PERSYARATAN

A. Ketentuan Umum
1) Sistem Penerimaan Murid Baru Madrasah Bersama pada MTsN dan MAN ini
dilakukan secara daring dengan menggunakan sistem teknologi yang
dirancang untuk melakukan pendaftaran, verifikasi, proses seleksi, dan
pengumuman dengan media online/internet;
2) Untuk Madrasah Berasrama pelaksanaan Penerimaan Murid Baru Madrasah
disesuaikan dengan kebutuhan satuan pendidikan masing-masing.
B. Persyaratan Calon Murid Baru Madrasah Tsanawiyah Negeri (MTsN)
NO PERSYARATAN Reguler
1 Asal Madrasah/Sekolah harus memiliki NPSN (Nomor Pokok
Sekolah Nasional) dan terdaftar di EMIS (Madrasah) atau
DAPODIK (Sekolah).

√

2
Calon Murid Baru harus memiliki NISN dan terdaftar di EMIS
(Madrasah) atau DAPODIK (Sekolah).

√
3 Calon Murid Baru MTsN Berusia paling tinggi 15 (lima belas)
tahun pada tanggal 1 Juli tahun berjalan.

√
4 Ijazah MI/SD sederajat atau Dokumen lain yang menjelaskan
telah menyelesaikan Pendidikan.
5 Calon Murid Baru asal Madrasah/Sekolah luar provinsi Banten
yang sudah Terakreditasi Mengunggah Sertifikat Akreditasi.

√
6 Mengunggah Kartu Keluarga yang diterbitkan oleh Dinas
Kependudukan dan Catatan Sipil paling lambat sebelum bulan
Maret 2026.

√
7 Calon Murid Baru yang bertempat tinggal dan bersekolah di
Provinsi Banten berdasarkan Kartu Keluarga (KK) dan NIK
Calon Murid Baru asal dari Provinsi Banten.

√
8 Calon Murid Baru yang bertempat tinggal di Provinsi Banten
berdasarkan Kartu Keluarga (KK) dan bersekolah di luar
Provinsi Banten dengan NIK Calon Murid Baru asal dari
Provinsi Banten.

√
9 Calon Murid Baru yang bertempat tinggal di luar Provinsi
Banten berdasarkan Kartu Keluarga (KK) dan bersekolah di
Provinsi Banten.

√
10 Calon Murid Baru yang bertempat tinggal di luar Provinsi
Banten berdasarkan Kartu Keluarga (KK) dan bersekolah di luar
Provinsi Banten.

√
11 Calon Murid Baru yang berasal dari Sekolah Asing wajib
melampirkan Surat Rekomendasi/Kesetaraan Ijazah dari
Kementerian Agama atau Kementerian Pendidikan Dasar dan
Menengah.

√
12 Mengunggah Surat Pernyataan Pertanggung Jawaban Mutlak
(sesuai format pada lampiran) tentang keabsahan dokumen dari
orang tua/wali calon Murid Baru bermaterai Rp.10.000,-

√
13 Mengunggah Syahadah Diniyah untuk Calon Murid Baru yang
bertempat tinggal di dalam dan luar Kabupaten Serang dan
akan bersekolah di Kabupaten Serang.

√

14 Pemberkasan Manual di madrasah tujuan masing–masing. √

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-6-

C. Persyaratan Calon Murid Baru Madrasah Aliyah Negeri (MAN)

D. Kepanitiaan
Kepanitian Penerimaan Murid Baru Madrasah Bersama pada MTsN dan MAN
dilingkungan Kantor Wilayah Kementerian Agama Provinsi Banten Tahun
Pelajaran 2026/2027 terdiri dari:
1. Panitia Tingkat Provinsi, ditetapkan oleh Kepala Wilayah Kementerian Agama
Provinsi Banten;
2. Panitia Tingkat Satuan Pendidikan ditetapkan oleh Kepala MTsN dan MAN
setempat.
NO PERSYARATAN Reguler
1 Asal Madrasah/Sekolah harus memiliki NPSN (Nomor Pokok
Sekolah Nasional) dan terdaftar di EMIS (Madrasah) atau
DAPODIK (Sekolah).

√

2
Calon Murid Baru harus memiliki NISN dan terdaftar di EMIS
(Madrasah) atau DAPODIK (Sekolah).

√
3 Calon Murid Baru MAN Berusia paling tinggi 21 (dua puluh
satu) pada tanggal 1 Juli tahun berjalan.

√
4 Ijazah MTs/SMP sederajat atau Dokumen lain yang
menjelaskan telah menyelesaikan Pendidikan.
5 Calon Murid Baru asal Madrasah/Sekolah luar provinsi Banten
yang sudah Terakreditasi Mengunggah Sertifikat Akreditasi.

√
6 Mengunggah Kartu Keluarga yang diterbitkan oleh Dinas
Kependudukan dan Catatan Sipil paling lambat sebelum bulan
Maret 2026.

√
7 Calon Murid Baru yang bertempat tinggal dan bersekolah di
Provinsi Banten berdasarkan Kartu Keluarga (KK) dan NIK
Calon Murid Baru asal dari Provinsi Banten.

√
8 Calon Murid Baru yang bertempat tinggal di Provinsi Banten
berdasarkan Kartu Keluarga (KK) dan bersekolah di luar
Provinsi Banten dengan NIK Calon Murid Baru asal dari
Provinsi Banten.

√
9 Calon Murid Baru yang bertempat tinggal di luar Provinsi
Banten berdasarkan Kartu Keluarga (KK) dan bersekolah di
Provinsi Banten.

√
10 Calon Murid Baru yang bertempat tinggal di luar Provinsi
Banten berdasarkan Kartu Keluarga (KK) dan bersekolah di luar
Provinsi Banten.

√
11 Calon Murid Baru yang berasal dari Sekolah Asing wajib
melampirkan Surat Rekomendasi/Kesetaraan Ijazah dari
Kementerian Agama atau Kementerian Pendidikan Dasar dan
Menengah.

√
12 Mengunggah Surat Pernyataan Pertanggung Jawaban Mutlak
(sesuai format pada lampiran) tentang keabsahan dokumen dari
orang tua/wali calon Murid Baru bermaterai Rp.10.000,-

√
13 Pemberkasan Manual di madrasah tujuan masing–masing. √

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-7-
E. Pembagian Tugas Dan Tanggung Jawab
1. Kantor Wilayah Kementerian Agama Provinsi Banten
a. Menyusun petunjuk pelaksanaan Penerimaan Murid Baru Madrasah;
b. Melakukan sosialisasi Penerimaan Murid Baru Madrasah;
c. Melakukan koordinasi pendataan, persiapan, pelaksanaan, Penerimaan
Murid Baru Madrasah di tingkat provinsi;
d. Mensosialisasikan sistem aplikasi pendaftaran Penerimaan Murid Baru
Madrasah;
e. Menyiapkan aplikasi Pendaftaran dan CBT Penerimaan Murid Baru
Madrasah;
f. Menyiapkan Tim Helpdesk dalam rangka pengelolaan aplikasi;
g. Menyiapkan Posko PMBM;
h. Menetapkan calon murid baru lolos verifikasi berkas pendaftaran dan
mengikuti tes; dan
i. Menetapkan kelulusan calon murid baru.
2. Kantor Kementerian Agama Kabupaten/Kota
a. Melakukan sosialisasi Penerimaan Murid Baru Madrasah;
b. Mensosialisasikan sistem aplikasi pendaftaran Penerimaan Murid Baru
Madrasah.
3. Tingkat Satuan Pendidikan
a. Melakukan sosialisasi Penerimaan Murid Baru Madrasah;
b. Mensosialiasikan informasi mekanisme pendaftaran Penerimaan Murid
Baru Madrasah;
c. Mensosialisasikan dan memberikan bimbingan teknis tentang
pengoperasian Sistem aplikasi pendaftaran PMBM;
d. Melakukan verifikasi berkas pendaftaran dan mengusulkan nominasi
calon murid baru yang mengikuti tes;
e. Membuka meja pelayanan dan konsultasi secara tatap muka;
f. Memfasilitasi tempat penyelenggaraan tes CBT dan BTQ.
F. Pembiayaan
1. Pembiayaan Penerimaan Murid Baru Madrasah pada madrasah negeri tidak
boleh dibebankan kepada calon murid;
2. Biaya dalam pelaksanaan Penerimaan Murid Baru Madrasah pada Madrasah
Tsanawiyah Negeri dan Madrasah Aliyah Negeri dibebankan pada anggaran
BOS dan/atau BOP Madrasah sebagaimana tercantum dalam anggaran pada
tahun anggaran berjalan.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-8-
BAB III

KETENTUAN PENDAFTARAN DAN MEKANISME SELEKSI

A. Ketentuan Pendaftaran
Pendaftaran Penerimaan Murid Baru Madrasah jenjang MTsN dan MAN:
1. Penerimaan murid baru dilaksanakan secara online;
2. Calon murid baru mengisi formulir pendaftaran dan mengunggah berkas
persyaratan PMBM melalui website http://pmbm-kanwilbanten.com/
3. Nilai Akreditasi Lembaga asal Madrasah/Sekolah diberlakukan sebagai
berikut :
a. Status Terakreditasi dan Tidak Terakreditasi diinput Calon Murid Baru
sesuai dengan nilai yang tertera dalam Sertifikat Akreditasi;
b. Status Belum Terakreditasi dan/atau lulusan luar negeri akan memperoleh
nilai akreditasi 65.
4. Calon Murid Baru Wajib mengunggah dokumen yang dibutuhkan;
5. Bukti Pendaftaran Wajib dicetak bagi pendaftar yang dinyatakan lengkap
berkasnya;
6. Verifikasi kelengkapan berkas dan data pendaftaran dilakukan secara online;
7. Pengumuman kelulusan dapat diakses melalui aplikasi PMBM.
B. Tata Cara Pendaftara
Tata cara pendaftaran calon murid baru tingkat MTsN:
1. Calon murid baru mengakses website http://pmbm-kanwilbanten.com/
2. Calon murid baru melakukan pendaftaran berbasis Nomor Induk Siswa
Nasional (NISN);
3. Calon murid baru mengisi formulir pendaftaran secara online;
4. Calon murid baru memilih minimal 1 (satu) atau maksimal 2 (dua) pilihan
madrasah tujuan;
5. Calon murid baru mengunggah berkas persyaratan sebagai berikut:
a. Kartu Keluarga (KK);
b. Ijazah MI/SD sederajat atau Dokumen lain yang menjelaskan telah
menyelesaikan pendidikan;
c. Syahadah Diniyah yang bertempat tinggal di dalam dan luar Kabupaten
Serang dan akan bersekolah di Kabupaten Serang;
d. Mengunggah Sertifikat Akreditasi Madrasah/Sekolah asal (bagi asal
Madrasah/Sekolah di luar Provinsi Banten);
e. Mengunggah Surat Pernyataan Pertanggung Jawaban Mutlak (sesuai
format pada lampiran) tentang keabsahan dokumen dari orang tua/wali
calon Murid Baru bermaterai Rp.10.000,-
f. Surat Rekomendasi/Kesetaraan Ijazah dari Kementerian Agama atau
Kementerian Pendidikan Dasar dan Menengah khusus bagi calon murid
baru yang berasal dari Madrasah/Sekolah asing;
6. Calon murid baru yang telah memenuhi persyaratan dan mengajukan
pendaftaran dapat mencetak bukti pendaftaran secara online.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-9-

Tata cara pendaftaran calon murid baru tingkat MAN:
1. Calon murid baru mengakses website http://pmbm-kanwilbanten.com/
2. Calon murid baru melakukan pendaftaran berbasis Nomor Induk Siswa
Nasional (NISN);
3. Calon murid baru mengisi formulir pendaftaran secara online;
4. Calon murid baru memilih minimal 1 (satu) atau maksimal 2 (dua) pilihan
madrasah tujuan;
5. Calon murid baru mengunggah berkas persyaratan sebagai berikut:
a. Kartu Keluarga (KK);
b. Ijazah MTs/SMP sederajat atau Dokumen lain yang menjelaskan telah
menyelesaikan pendidikan;
c. Mengunggah Sertifikat Akreditasi Madrasah/Sekolah asal (bagi asal
Madrasah/Sekolah di luar Provinsi Banten);
d. Mengunggah Surat Pernyataan Pertanggung Jawaban Mutlak (sesuai
format pada lampiran) tentang keabsahan dokumen dari orang tua/wali
calon Murid Baru bermaterai Rp.10.000,-
e. Surat Rekomendasi/Kesetaraan Ijazah dari Kementerian Agama atau
Kementerian Pendidikan Dasar dan Menengah khusus bagi calon murid
baru yang berasal dari Madrasah/Sekolah asing;
6. Calon murid baru yang telah memenuhi persyaratan dan mengajukan
pendaftaran dapat mencetak bukti pendaftaran secara online.
C. Mekanisme Seleksi Penerimaan Murid Baru Madrasah
a. Jalur Prestasi
Pelaksanaan Seleksi untuk Jalur prestasi dilaksanakan di Madrasah
Tsanawiyah Negeri dan Madrasah Aliyah Negeri masing-masing.
b. Jalur Afirmasi
Pelaksanaan Seleksi untuk Jalur Afirmasi dilaksanakan di Madrasah
Tsanawiyah Negeri dan Madrasah Aliyah Negeri masing-masing.
c. Jalur Reguler
1) Calon Murid Baru dari Madrasah Ibtidaiyah/Sekolah Dasar dan atau
Madrasah Tsanawiyah/Sekolah Menengah Pertama;
2) Mekanisme Seleksi Calon Murid Baru Jalur Reguler menggunakan
Computer Based Test (CBT) dan Tes Baca Tulis Al-Qur’an;
3) Untuk Tes Baca Tulis Al-Qur’an dilaksanakan di madrasah pilihan atau di
lokasi CBT;
4) Calon Murid Baru yang dinyatakan diterima sesuai dengan hasil seleksi
akhir adalah berdasarkan Hasil Nilai Computer Based Test (CBT) dan Nilai
BTQ;
5) Nilai Akhir yang dimaksud adalah 70% Nilai Computer Based Test (CBT)
dan ditambah 30% Nilai BTQ;
6) Apabila terdapat nilai akhir sama, pengurutan seleksi dilakukan
berdasarkan usia paling tua.
7) Apabila terdapat nilai akhir sama dan usia juga sama,
pengurutan seleksi diurutkan berdasarkan waktu mendaftar.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-10-
D. Pengumuman dan Lapor Diri (Daftar Ulang)
1. Pengumuman penerimaan murid baru yang diterima maupun tidak
ditema pada jenjang MTsN dan MAN dilakukan secara online melalui
website http://pmbm-kanwilbanten.com/
2.Calon murid baru yang dinyatakan diterima, wajib melakukan lapor
diri secara langsung ke madrasah tempat diterima sesuai jadwal yang
ditentukan;
3.Calon murid baru yang dinyatakan diterima tapi tidak melakukan
lapor diri, maka dianggap gugur dari hasil seleksi;
4.Ketentuan teknis dan persyaratan lapor diri diatur oleh madrasah
masing-masing;
5.Calon murid baru yang dinyatakan tidak diterima, dapat mengikuti
jalur seleksi lainnya pada seleksi PMBM pada tahun 2026.

E.JADWAL PENERIMAN MURID BARU MADRASAH
JADWAL PMBM MTsN dan MAN

JALUR REGULER MAN

URAIAN TANGGAL KETERANGAN

Informasi dan Sosialisasi Maret-April
Pendaftaran 6-15 April Dibuka tanggal 6 April
2026 jam 08.00 WIB dan
ditutup tanggal 15 April
jam 16.00
Verifikasi Dokumen Pendaftaran 7-15 April 08.00 -16.00 WIB
Pengumuman Peserta CBT 16 April 08.00 WIB
Uji Coba CBT 17 April 07.30 -16.00 WIB
Pelaksanaan CBT 18 April 07.30 -16.00 WIB
Tes Baca Tulis Al-Qur’an 18-19 April 07.30 -16.00 WIB
Pengumuman Hasil Kelulusan 21 April 08.00 WIB
Lapor Diri dan Pemberkasan
Manual

22-29 April Dibuka tanggal 22 April
jam 08.00 WIB dan ditutup
29 April jam 16.00 WIB

JALUR REGULER MTsN

URAIAN TANGGAL KETERANGAN

Informasi dan Sosialisasi Maret-April
Pendaftaran 18-27 April Dibuka tanggal 18 April
2026 jam 08.00 WIB dan
ditutup tanggal 27 April
jam 16.00
Verifikasi Dokumen Pendaftaran 19-28 April 08.00 -16.00 WIB
Pengumuman Peserta CBT 29 April 08.00 WIB
Uji Coba CBT 30 April 07.30 -16.00 WIB
Pelaksanaan CBT 2 Mei 07.30 -16.00 WIB
Tes Baca Tulis Al-Qur’an 2-3 Mei 07.30 -16.00 WIB
Penguman Hasil Kelulusan 5 Mei 08.00 WIB
Lapor Diri dan Pemberkasan
Manual

6-12 Mei Dibuka tanggal 6 Mei jam
08.00 WIB dan ditutup 12
Mei jam 16.00 WIB

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-11-

F.Pilihan Madrasah
1. Madrasah Tsanawiyah Negeri
No. Nama Madrasah Alamat

1
MTsN 1 PANDEGLANG
KABUPATEN PANDEGLANG

Jl. Raya labuan, Kadulisung-Pandeglang
mtsnpdg1.417849@gmail.com

2
MTSN 2 PANDEGLANG
KABUPATEN PANDEGLANG

Jl. Raya Labuan Km. 02 Karabohong Labuan
mtsnpandeglang2@gmail.com

3
MTsN 3 PANDEGLANG
KABUPATEN PANDEGLANG

Jl. Alun-alun Timur Sukajadi Cibaliung
Pandeglang
mtsn03pandeglang@gmail.com

4
MTsN 5 PANDEGLANG
KABUPATEN PANDEGLANG

Jln raya ceuning KM 9 cikedal Pandeglang
Mtsncening@gmail.com

5
MTsN 7 PANDEGLANG
KABUPATEN PANDEGLANG

Jl. Raya munjul panimbang KM.4 Desa
Cikayas Kec Angsana Kab. Pandeglang kode
pos 42277
mtsn7pandeglang@gmail.com

6
MTSN 1 LEBAK
KABUPATEN LEBAK

Jl. Komplek Pendidikan NO. 31 L Kel. MC.
Timur kec. Rangkasbitung Lebak
mtsnpasirsukarayat65@gmail.com

7
MTsN 3 TANGERANG
KABUPATEN TANGERANG

JLn. H. Abdurrahman No. 85A Desa Jatake
Kecamatan Pagedangan Kabupaten
Tangerang
mtsnlegok@gmail.com

8
MTsN 6 TANGERANG
KABUPATEN TANGERANG

Jalan Gili Cisadane Teluk Naga Tangerang
mtsn6tng2020@gmail.com

9
MTSN 1 SERANG
KABUPATEN SERANG

JL. Ciptayasa KM. 01 DS. Singamerta Kec.
Ciruas kab. Serang
mtsn1srg@gmail.com

10
MTsN 2 SERANG
KABUPATEN SERANG

JL. Palka KM. 25 DS. Cisaat Kec.
Padarincang kab. Serang-banten
mtsnmodelpadarincang@gmail.com

11
MTsN 3 SERANG
KABUPATEN SERANG

Jl. Raya Cikeusal - Panosogan Km.O3,
Kp.Kubang Asem RT.007,RW.002 Cikeusal
Serang
mtsnceko@gmail.com

12
MTsN 4 SERANG
KABUPATEN SERANG

Jl.Raya jaha Km.01 Kubar Desa Mekarsari
kecamatan Anyer Kabupaten Serang Banten
www.mtsn4kabserang.sch.id

13
MTsN 5 SERANG
KABUPATEN SERANG

Jl. Ki. M. Idris Kp. Sumuranja RT. 001 RW.
001 Ds. Sumuranja Kec. Pulo Ampel Kab.
Serang Kode Pos 42455
mtsn5serang@gmail.com

14 MTSN 3 KOTA TANGERANG

Jl. Adi Sucipto RT 02/08 Kelurahan
Belendung Kecamatan Benda Kota Tangerang
mtsn3.kotang@gmail.com

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-12-

No. Nama Madrasah Alamat

15 MTsN 1 KOTA CILEGON

Jl. Bhayangkara KM.1.5 Kebondalem Kec.
Purwakarta Kota Cilegon
mtsn.cilegon@ymail.com

16 MTsN 2 KOTA CILEGON

Jl. Ir. Sutami Link. Cimerak RT. 003 RW. 003
Kel. Kebonsari kec. Citangkil kota cilegon
provinsi banten
ad.mtsn2kotacilegon@gmail.com

17 MTsN 3 KOTA CILEGON

Jl. H. Leman Kebayuran Baru, Jl. H. Leman
Pintu Air, Gerem, Kec. Gerogol, Kota Cilegon,
Banten 42438
mtsn3kotacilegon@gmail.com

18
MTSN 1 KOTA SERANG

Jl. Bhayangkara No. 84 kel. Sumurpecung
Kec. Serang Kota Serang
mtsnserang@yahoo.com

19
MTSN 1 KOTA TANGERANG
SELATAN

Jalan Pajajaran NO. 31 Pamulang Kota
Tangerang Selatan
humas@mtsn1kotatangsel.sch.id

2. Madrasah Aliyah Negeri
No. Nama Madrasah Alamat

1
MAN 1 PANDEGLANG
KABUPATEN PANDEGLANG

Jl. Raya Labuan Km. 02 Ciekek Karaton
Pandeglang
man.pandeglang@gmail.com

2
MAN 2 PANDEGLANG
KABUPATEN PANDEGLANG

Jl. Raya Labuan, Km. 10, Cigunung,
Cimanuk, Pandeglang.
humas.mandapa@gmail.com

3
MAN 3 PANDEGLANG
KABUPATEN PANDEGLANG

JL.Raya Panimbang Km 01 Solodongen
Pandeglang
man_panimbang@yahoo.co.id

4
MAN 4 PANDEGLANG
KABUPATEN PANDEGLANG

Jl. Sukajadi Barat Blok Situ Sadang Sukajadi
Cibaliung
man4pandeglang@gmail.com

5
MAN 1 LEBAK
KABUPATEN LEBAK

Jl. Siliwangi Pasir Ona Rangkas Bitung Kab.
Lebak
man_rangkasbitung@yahoo.co.id

6
MAN 2 LEBAK
KABUPATEN LEBAK

Jl. Raya Bayah Cikotok KM 2.5 Kec. Bayah
Kab Lebak
man2lebak@gmail.com

7
MAN 1 TANGERANG
KABUATEN TANGERANG

Jl. Aria Wangsakara, Desa Tapos Kec.
Tigaraksa Kab Tangerang
man1tangerang@gmail.com

8
MAN 2 TANGERANG
KABUPATEN TANGERANG

Jl. Raya Serang Talagasari Kec. Balaraja Kab.
Tangerang
man2tangerang@gmail.com

9
MAN 3 TANGERANG
KABUPATEN TANGERANG

Jl. Raya Mauk KM. 16 Ds. Buaranjati Kec.
Sukadiri Kab. Tangerang Prop. Banten 15530
admin@man3tangerang.sch.id

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-13-

No. Nama Madrasah Alamat

10
MAN 4 TANGERANG
KABUPATEN TANGERANG

Jl. Kronjo KM 3 Kp Pejamuran Ds Pasilian
Kec. Kronjo - Tangerang 15550
admin@man4tangerang.sch.id

11
MAN 5 TANGERANG
KABUPATEN TANGERANG

Jl.Cinogo Pesanggrahan kec. Solear Kab
Tangerang
man05tangerang@gmail.com

12
MAN 1 SERANG
KABUPATEN SERANG

Jl. Sentul - Pematang KM 1.5 Ds Kendayakan
Kec, Kragilan Kab Serang.
man_kragilan@yahoo.co.id

13
MAN 2 SERANG
KABUPATEN SERANG

Jl. Raya Cikeusal Panosogan Km 03 Cikeusal
Kab. Serang
ma.negeri2serang@gmail.com

14
MAN 3 SERANG
KABUPATEN SERANG

Jl. Palka Km 25 Kp. Kebon Desa Cisaat Kec.
Padarincang Kode pos 42168 Kab Serang
man3kab.serang@gmail.com

15 MAN 1 KOTA TANGERANG

Jl. Lamda Raya No. 1 RT/RW 05/05 Cimone
Permai - Karawaci Baru - Kota Tangerang
mantangerang8@gmail.com

16 MAN 2 KOTA TANGERANG

Jl. Panglima Polim No, 6 Pors Plawad Utara
Cipondoh Kota Tangerang.
mancipondoh364@gmail.com

17 MAN 1 KOTA CILEGON

Jl. Ir. Sutami Km 2,5 Lebak Denok, Kec,
Citangkil, Kota Cilegon, 42442
man1cilegon@gmail.com

18 MAN 2 KOTA CILEGON

Jl. Puskesmas Rawa Arum Kp. Bujang
gadung Kel Rawa Arum Kec. Grogol Kota
Cilegon
man2.kotacilegon@gmail.com

19 MAN 1 KOTA SERANG

Jl. Empat Lima No.20 1, RW.5, Serang, Kec.
Serang, Kota Serang
mansatukotaserang@gmail.com

20 MAN 2 KOTA SERANG

JL. KH. Abd. Hadi No. 03 RT.03 RW. 16 Kel.
Cipare Kota Serang
man2_serang@yahoo.com

G. Kuota Madrasah
1. Madrasah Tsanawiyah Negeri
NO NAMA MADRASAH KABUPATEN/KOTA KUOTA
1 MTsN 1 Serang Kabupaten Serang 202
2 MTsN 2 Serang Kabupaten Serang 224
3 MTsN 3 Serang Kabupaten Serang 224
4 MTsN 4 Serang Kabupaten Serang 324
5 MTsN 5 Serang Kabupaten Serang 198
6 MTsN 1 Lebak Kabupaten Lebak 156

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-14-

NO NAMA MADRASAH KABUPATEN/KOTA KUOTA
7 MTsN 1 Pandeglang Kabupaten Pandeglang 224
8 MTsN 2 Pandeglang Kabupaten Pandeglang 200
9 MTsN 3 Pandeglang Kabupaten Pandeglang 224
10 MTsN 5 Pandeglang Kabupaten Pandeglang 157
11 MTsN 7 Pandeglang Kabupaten Pandeglang 90
12 MTsN 1 Kota Cilegon Kota Cilegon 32
13 MTsN 2 kota Cilegon Kota Cilegon 32
14 MTsN 3 Kota Cilegon Kota Cilegon 32
15 MTsN 1 Kota Serang Kota Cilegon 160
16 MTsN 3 Tangerang Kabupaten Tangerang 134
17 MTsN 6 Tangerang Kabupaten Tangerang 100
18 MTsN 3 Kota Tangerang Kota Tangerang 100
19 MTsN 1 Kota Tangerang Selatan Kota Tangerang Selatan 190
Jumlah 3003

2. Madrasah Aliyah Negeri
NO NAMA MADRASAH KABUPATEN/KOTA KUOTA
1 MAN 1 Pandeglang Kabupaten Pandeglang 101
2 MAN 2 Pandeglang Kabupaten Pandeglang 74
3 MAN 3 Pandeglang Kabupaten Pandeglang 180
4 MAN 4 Pandeglang Kabupaten Pandeglang 101
5 MAN 1 Lebak Kabupaten Lebak 88
6 MAN 2 Lebak Kabupaten Lebak 85
7 MAN 1 Tangerang Kabupaten Tangerang 126
8 MAN 2 Tangerang Kabupaten Tangerang 100
9 MAN 3 Tangerang Kabupaten Tangerang 126
10 MAN 4 Tangerang Kabupaten Tangerang 101
11 MAN 5 Tangerang Kabupaten Tangerang 144
12 MAN 1 Serang Kabupaten Serang 254
13 MAN 2 Serang Kabupaten Serang 140
14 MAN 3 Serang Kabupaten Serang 70
15 MAN 1 Kota Tangerang Kota Tangerang 90
16 MAN 2 Kota Tangerang Kpta Tangerang 83
17 MAN 1 Kota Cilegon Kota Cilegon 88
18 MAN 2 Kota Cilegon Kota Cilegon 75
19 MAN 1 Kota Serang Kota Serang 288
20 MAN 2 Kota Serang Kota Serang 324
JUMLAH 2638

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-15-
BAB IV

ROMBONGAN BELAJAR
A. Jumlah Murid dalam Satu Rombongan Belajar
Jumlah murid dalam satu rombongan belajar diatur sebagai berikut :
1. Madrasah Tsanawiyah dalam satu kelas berjumlah paling banyak 32 (tiga
puluh dua) murid; dan
2. Madrasah Aliyah dalam satu kelas berjumlah paling banyak 36 (tiga puluh
enam) murid.
B. Jumlah Rombongan Belajar pada Madrasah
Jumlah Rombongan Belajar pada Madrasah diatur sebagai berikut :
1. MTs berjumlah paling sedikit 3 (tiga) dan paling banyak 32 (tiga puluh dua)
Rombongan Belajar, masing-masing tingkat paling banyak 11 (sebelas)
Rombongan Belajar;
2. MA berjumlah paling sedikit 3 (tiga) dan paling banyak 36 (tiga puluh enam)
Rombongan Belajar, masing-masing tingkat paling banyak 12 (dua belas)
Rombongan Belajar; dan
3. Madrasah dapat mempunyai jumlah rombongan belajar melebihi ketentuan
yang ditetapkan diatas dengan ketentuan sebagai berikut:
a. Madrasah menjamin/memastikan tercapainya mutu pembelajaran
minimal sesuai Standar Nasional Pendidikan (SNP) sehingga penambahan
jumlah rombongan belajar tidak mengganggu pencapaian mutu
pembelajaran/pelayanan;
b. Madrasah menjamin/memastikan tercukupinya ruang kelas yang ada
sehingga penambahan jumlah rombongan belajar tidak berdampak pada
pembangunan jumlah ruang kelas baru; dan
c. Madrasah menjamin/memastikan tercukupinya jumlah guru yang ada
sehingga penambahan jumlah rombongan belajar tidak berdampak pada
pengangkatan guru baru.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-16-
BAB V

PERPINDAHAN MURID
A. Perpindahan Murid antar madrasah/sekolah
1. Perpindahan murid antar madrasah/sekolah dalam suatu daerah
kabupaten/kota, antar kabupaten/kota dalam satu daerah provinsi, atau
antar provinsi dilaksanakan atas dasar persetujuan kepala satuan
pendidikan asal dan kepala madrasah yang dituju; dan
2. Dalam hal terdapat perpindahan murid sebagaimana dimaksud pada poin 1,
maka madrasah yang bersangkutan wajib memperbaharui Data Pokok pada
EMIS.
B. Perpindahan Murid dari Luar Negeri
1. Murid pendidikan dasar setara MI/SD di negara lain dapat pindah ke MI di
Provinsi Banten setelah memenuhi persyaratan :
a. Lulus tes kelayakan dan penempatan yang diselenggarakan madrasah
yang dituju;
b. Mendapatkan surat pernyataan dari kepala satuan pendidikan asal; dan
c. Mendapatkan surat rekomendasi dari Direktur Jenderal Pendidikan Islam.
Tata cara mendapatkan surat rekomendasi pindah dari Direktur Jenderal
Pendidikan Islam mengacu pada peraturan perundang-undangan yang
berlaku.
2. Murid pendidikan dasar dan menengah setara MTs/SMP, MA/SMA atau
MAK/SMK di negara lain dapat diterima di MTs, MA dan MAK di Provinsi
Banten setelah menunjukkan :
a. Ijazah atau dokumen lain yang membuktikan bahwa murid yang
bersangkutan telah menyelesaikan pendidikan jenjang sebelumnya;
b. Surat pernyataan dari kepala satuan pendidikan asal;
c. Lulus tes kelayakan dan penempatan yang diselenggarakan madrasah
yang dituju; dan
d. Mendapatkan surat kesetaraan ijazah luar negeri yang diterbitkan oleh
Kementerian Agama dan/atau Kementerian Pendidikan Dasar dan
Menengah.

C. Perpindahan Murid dari satuan pendidikan non formal dan/atau informal
1. Murid jalur non formal dan informal dapat diterima di MTs tidak pada awal
kelas 7 (tujuh) setelah memenuhi persyaratan :
a. Lulus ujian kesetaraan Paket A; dan
b. Lulus tes kelayakan dan penempatan yang diselenggarakan oleh MTs atau
bentuk lain yang sederajat yang bersangkutan.
2. Murid jalur non formal dan informal dapat diterima di MA atau MAK tidak
pada awal kelas 10 (sepuluh) setelah :
a. Lulus ujian kesetaraan Paket B; dan
b. Lulus tes kelayakan dan penempatan yang diselenggarakan oleh MA atau
MAK yang bersangkutan.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-17-

3. Madrasah menentukan syarat dalam tes kelayakan dan penempatan
perpindahan murid jalur non formal dan informal ke madarasah yang
bersangkutan; dan
4. Dalam hal terdapat perpindahan murid dari satuan pendidikan non formal
atau informal ke madrasah sebagaimana dimaksud pada poin 1, 2, 3 dan 4,
maka madrasah yang bersangkutan wajib memperbaharui data EMIS.
D. Biaya Perpindahan
Biaya perpindahan murid ke madrasah yang diselenggarakan oleh Pemerintah
tidak dapat dilakukan pungutan dari murid.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-18-
BAB VI

PELAPORAN DAN PENGAWASAN

1. Madrasah wajib melaporkan pelaksanaan PMBM Bersama pada MTsN dan MAN,
dan perpindahan murid antar madrasah/sekolah setiap tahun pelajaran kepada
Kantor Wilayah Kementerian Agama Provinsi Banten,
2. Madrasah wajib melakukan pengisian, pengiriman dan pemutakhiran data
murid dan Rombongan Belajar dalam EMIS (termasuk data NISN dan data
NPSN) sejak awal tahun pelajaran baru berjalan dan secara berkala paling
sedikit 1 (satu) kali dalam 1 (satu) semester;
3. Kantor Wilayah Kementerian Agama Provinsi Banten memiliki kanal pelaporan
untuk menerima laporan masyarakat terkait pelaksanaan PMBM Bersama pada
MTsN dan MAN; dan
4. Kantor Wilayah Kementerian Agama Provinsi Banten melakukan pemantauan
dan evaluasi terhadap pelaksanaan PMBM Bersama pada MTsN dan MAN sesuai
dengan peraturan perundang-undangan yang berlaku.

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).
Token : FWNLzRAN

-19-
BAB VII
SANKSI DAN PENUTUP

1. SANKSI
Pemalsuan dalam penginputan data dan atau dokumen-dokumen yang
disertakan pada saat pendaftaran PMBM Bersama pada MTsN dan MAN dikenai
sanksi diskualifikasi dan sanksi lain sesuai ketentuan perundang-undangan.
2. PENUTUP
Petunjuk Pelaksanaan ini merupakan panduan teknis bagi para pemangku
kepentingan terkait pelaksanaan Penerimaan Murid Baru Madrasah Bersama
pada MTsN dan MAN.

KEPALA KANTOR WILAYAH
KEMENTERIAN AGAMA PROVINSI BANTEN,
$
AMRULLAH

Dokumen ini telah ditandatangani secara elektronik menggunakan sertifikat elektronik yang diterbitkan Balai Besar Sertifikasi Elektronik (BBSrE).

```

---

### ./juknis-mandiri.md

```markdown
# Ringkasan Juknis PMBM MTsN 1 Pandeglang
**Tahun Pelajaran 2026/2027**

---

## Jalur yang Dibuka

| Jalur | Kuota | Warna Map |
|---|---|---|
| Prestasi | - | Merah |
| Afirmasi | - | Kuning |

---

## Jadwal Kegiatan

| Kegiatan | Tanggal | Keterangan |
|---|---|---|
| Pendaftaran Online | 6–8 April 2026 | Website |
| Penyerahan Berkas | 6–8 April 2026 | Sekretariat PMBM |
| Verifikasi | 9–10 April 2026 | Panitia |
| Tes Kemampuan & BTQ | 13 April 2026 | Hadir pukul 07.00 WIB |
| Pengumuman Hasil | 14 April 2026 | Website |
| Lapor Diri & Pemberkasan | 15–16 April 2026 | Sekolah |

> Jam kerja panitia: **08.00–14.00 WIB** | Istirahat: **11.30–13.00 WIB**

---

## Persyaratan Umum (Semua Jalur)

- Usia maksimal **15 tahun** per 1 Juli 2026
- Surat keterangan aktif murid kelas VI
- Akta kelahiran & Kartu Keluarga **berbarcode**

---

## Jalur Prestasi

### Kategori yang Diakui
- **Tahfidz** — minimal 3 juz, dibuktikan sertifikat + tes hafalan
- **Akademik** — KSM/OMI, MYRES, OSN, OSP, OSK; juara 1–3 minimal tingkat kabupaten/kota; diselenggarakan Kemenag, Kemendikbud, BRIN, atau PT Terakreditasi
- **Non-Akademik** — MTQ, MHQ, MSQ, Pidato Arab, Kaligrafi, Olahraga (hanya top score/pemain terbaik untuk beregu), O2SN, FLS2N
  - Tingkat kabupaten/kota: Juara 1
  - Tingkat provinsi: Juara 1–2
  - Tingkat nasional: Juara 1–3

### Berkas yang Diserahkan
1. Print out formulir pendaftaran online
2. Sertifikat prestasi **asli**
3. Semua dimasukkan map snelhecter **merah**, diberi label identitas

---

## Jalur Afirmasi

### Kriteria
- Pemegang **KIP, PKH, KKS**, atau **SKTM** dari pemerintah daerah
- SKTM wajib dilengkapi:
  - Fotokopi rekening listrik 3 bulan terakhir
  - Foto tampak depan, dalam, dan belakang rumah

### Berkas yang Diserahkan
1. Print out formulir pendaftaran online
2. Fotokopi kartu KIP/PKH/KKS/SKTM yang dilegalisir
3. Semua dimasukkan map snelhecter **kuning**, diberi label identitas

---

## Ketentuan Gugur

Pendaftar dinyatakan **gugur** apabila:
- Isi formulir online tapi tidak serahkan berkas
- Serahkan berkas tapi tidak isi formulir online
- Dokumen fisik tidak sesuai dengan yang diunggah
- Tidak lapor diri sesuai jadwal → dinyatakan **mengundurkan diri**

---

## Informasi Penting

- Peserta tidak lolos → boleh daftar ulang ke **Jalur Reguler (PMBM Bersama)**
- Berkas peserta tidak lolos dapat diambil sehari setelah pengumuman
- Pendaftaran **gratis**, tidak ada pungutan biaya apapun
- Website resmi: **daftar.mtsn1pandeglang.sch.id**

---

*Pandeglang, 31 Maret 2026*
*Kepala Madrasah: Hj. Yanti Mariah, S.S., M.Pd.*
*Ketua PMBM: Umar Mu'tamar, S.Ag*

```

---

### ./konsep.md

```markdown

## File Tree

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
app/Observers/CalonSiswaObserver.php
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
app/Jobs/SendWhatsAppJob.php
app/Helpers/PdfDataHelper.php
app/Constants/FormOptions.php
app/Http/Controllers/Controller.php
app/Http/Controllers/FormulirController.php
app/Http/Controllers/LandingController.php
app/Filament/Resources/AnggotaResource/Pages/CreateAnggota.php
app/Filament/Resources/AnggotaResource/Pages/EditAnggota.php
app/Filament/Resources/AnggotaResource/Pages/ListAnggotas.php
app/Filament/Resources/AnggotaResource/Pages/ViewAnggota.php
app/Filament/Resources/BendaharaResource/Pages/CreateBendahara.php
app/Filament/Resources/BendaharaResource/Pages/EditBendahara.php
app/Filament/Resources/BendaharaResource/Pages/ListBendaharas.php
app/Filament/Resources/BendaharaResource/Pages/ViewBendahara.php
app/Filament/Resources/CalonSiswaResource/Pages/CreateCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Pages/EditCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Pages/ListCalonSiswas.php
app/Filament/Resources/CalonSiswaResource/Pages/ViewCalonSiswa.php
app/Filament/Resources/CalonSiswaResource/Widgets/FormulirOverview.php
app/Filament/Resources/EkstrakurikulerResource/Pages/CreateEkstrakurikuler.php
app/Filament/Resources/EkstrakurikulerResource/Pages/EditEkstrakurikuler.php
app/Filament/Resources/EkstrakurikulerResource/Pages/ListEkstrakurikulers.php
app/Filament/Resources/EkstrakurikulerResource/Pages/ViewEkstrakurikuler.php
app/Filament/Resources/FormulirPrestasiResource/Pages/CreateFormulirPrestasi.php
app/Filament/Resources/FormulirPrestasiResource/Pages/EditFormulirPrestasi.php
app/Filament/Resources/FormulirPrestasiResource/Pages/ListFormulirPrestasis.php
app/Filament/Resources/FormulirPrestasiResource/Pages/ViewFormulirPrestasi.php
app/Filament/Resources/InformasiResource/Pages/CreateInformasi.php
app/Filament/Resources/InformasiResource/Pages/EditInformasi.php
app/Filament/Resources/InformasiResource/Pages/ListInformasis.php
app/Filament/Resources/InformasiResource/Pages/ViewInformasi.php
app/Filament/Resources/InformasiResource/Widgets/InformasiPublished.php
app/Filament/Resources/JalurPendaftaranResource/Pages/CreateJalurPendaftaran.php
app/Filament/Resources/JalurPendaftaranResource/Pages/EditJalurPendaftaran.php
app/Filament/Resources/JalurPendaftaranResource/Pages/ListJalurPendaftarans.php
app/Filament/Resources/JalurPendaftaranResource/Pages/ViewJalurPendaftaran.php
app/Filament/Resources/JurusanResource/Pages/CreateJurusan.php
app/Filament/Resources/JurusanResource/Pages/EditJurusan.php
app/Filament/Resources/JurusanResource/Pages/ListJurusans.php
app/Filament/Resources/JurusanResource/Pages/ViewJurusan.php
app/Filament/Resources/KabupatenResource/Pages/CreateKabupaten.php
app/Filament/Resources/KabupatenResource/Pages/EditKabupaten.php
app/Filament/Resources/KabupatenResource/Pages/ListKabupatens.php
app/Filament/Resources/KabupatenResource/Pages/ViewKabupaten.php
app/Filament/Resources/KecamatanResource/Pages/CreateKecamatan.php
app/Filament/Resources/KecamatanResource/Pages/EditKecamatan.php
app/Filament/Resources/KecamatanResource/Pages/ListKecamatans.php
app/Filament/Resources/KecamatanResource/Pages/ViewKecamatan.php
app/Filament/Resources/KelasResource/Pages/CreateKelas.php
app/Filament/Resources/KelasResource/Pages/EditKelas.php
app/Filament/Resources/KelasResource/Pages/ListKelas.php
app/Filament/Resources/KelasResource/Pages/ViewKelas.php
app/Filament/Resources/KelurahanResource/Pages/CreateKelurahan.php
app/Filament/Resources/KelurahanResource/Pages/EditKelurahan.php
app/Filament/Resources/KelurahanResource/Pages/ListKelurahans.php
app/Filament/Resources/KelurahanResource/Pages/ViewKelurahan.php
app/Filament/Resources/KetuaResource/Pages/CreateKetua.php
app/Filament/Resources/KetuaResource/Pages/EditKetua.php
app/Filament/Resources/KetuaResource/Pages/ListKetuas.php
app/Filament/Resources/KetuaResource/Pages/ViewKetua.php
app/Filament/Resources/MataPelajaranResource/Pages/CreateMataPelajaran.php
app/Filament/Resources/MataPelajaranResource/Pages/EditMataPelajaran.php
app/Filament/Resources/MataPelajaranResource/Pages/ListMataPelajarans.php
app/Filament/Resources/MataPelajaranResource/Pages/ViewMataPelajaran.php
app/Filament/Resources/NegaraResource/Pages/CreateNegara.php
app/Filament/Resources/NegaraResource/Pages/EditNegara.php
app/Filament/Resources/NegaraResource/Pages/ListNegaras.php
app/Filament/Resources/NegaraResource/Pages/ViewNegara.php
app/Filament/Resources/PimpinanResource/Pages/CreatePimpinan.php
app/Filament/Resources/PimpinanResource/Pages/EditPimpinan.php
app/Filament/Resources/PimpinanResource/Pages/ListPimpinans.php
app/Filament/Resources/PimpinanResource/Pages/ViewPimpinan.php
app/Filament/Resources/PrestasiResource/Pages/CreatePrestasi.php
app/Filament/Resources/PrestasiResource/Pages/EditPrestasi.php
app/Filament/Resources/PrestasiResource/Pages/ListPrestasis.php
app/Filament/Resources/PrestasiResource/Pages/ViewPrestasi.php
app/Filament/Resources/ProvinsiResource/Pages/CreateProvinsi.php
app/Filament/Resources/ProvinsiResource/Pages/EditProvinsi.php
app/Filament/Resources/ProvinsiResource/Pages/ListProvinsis.php
app/Filament/Resources/ProvinsiResource/Pages/ViewProvinsi.php
app/Filament/Resources/RoleResource/Pages/CreateRole.php
app/Filament/Resources/RoleResource/Pages/EditRole.php
app/Filament/Resources/RoleResource/Pages/ListRoles.php
app/Filament/Resources/RoleResource/Pages/ViewRole.php
app/Filament/Resources/SekolahAsalResource/Concerns/HasSekolahAsalWizardSteps.php
app/Filament/Resources/SekolahAsalResource/Pages/CreateSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/EditSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/ListSekolahAsals.php
app/Filament/Resources/SekolahAsalResource/Pages/ViewSekolahAsal.php
app/Filament/Resources/SekolahResource/Concerns/HasSekolahWizardSteps.php
app/Filament/Resources/SekolahResource/Pages/CreateSekolah.php
app/Filament/Resources/SekolahResource/Pages/EditSekolah.php
app/Filament/Resources/SekolahResource/Pages/ListSekolahs.php
app/Filament/Resources/SekolahResource/Pages/ViewSekolah.php
app/Filament/Resources/SekretarisResource/Pages/CreateSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/EditSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/ListSekretaris.php
app/Filament/Resources/SekretarisResource/Pages/ViewSekretaris.php
app/Filament/Resources/TahunPendaftaranResource/Pages/CreateTahunPendaftaran.php
app/Filament/Resources/TahunPendaftaranResource/Pages/EditTahunPendaftaran.php
app/Filament/Resources/TahunPendaftaranResource/Pages/ListTahunPendaftarans.php
app/Filament/Resources/TahunPendaftaranResource/Pages/ViewTahunPendaftaran.php
app/Filament/Resources/UserResource/Pages/CreateUser.php
app/Filament/Resources/UserResource/Pages/EditUser.php
app/Filament/Resources/UserResource/Pages/ListUsers.php
app/Filament/Resources/UserResource/Pages/ViewUser.php
app/Filament/Resources/UserResource/Widgets/UserRegisters.php
app/Filament/Resources/AnggotaResource.php
app/Filament/Resources/BendaharaResource.php
app/Filament/Resources/CalonSiswaResource.php
app/Filament/Resources/EkstrakurikulerResource.php
app/Filament/Resources/FormulirPrestasiResource.php
app/Filament/Resources/InformasiResource.php
app/Filament/Resources/JalurPendaftaranResource.php
app/Filament/Resources/JurusanResource.php
app/Filament/Resources/KabupatenResource.php
app/Filament/Resources/KecamatanResource.php
app/Filament/Resources/KelasResource.php
app/Filament/Resources/KelurahanResource.php
app/Filament/Resources/KetuaResource.php
app/Filament/Resources/MataPelajaranResource.php
app/Filament/Resources/NegaraResource.php
app/Filament/Resources/PimpinanResource.php
app/Filament/Resources/PrestasiResource.php
app/Filament/Resources/ProvinsiResource.php
app/Filament/Resources/RoleResource.php
app/Filament/Resources/SekolahAsalResource.php
app/Filament/Resources/SekolahResource.php
app/Filament/Resources/SekretarisResource.php
app/Filament/Resources/TahunPendaftaranResource.php
app/Filament/Resources/UserResource.php
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
routes/api.php
routes/console.php
routes/web.php
resources/views/filament/pages/auth/forgot-password-custom.blade.php
resources/views/filament/pages/auth/new-password.blade.php
resources/views/filament/pages/auth/reset-password-otp.blade.php
resources/views/filament/pages/auth/verifikasi-otp.blade.php
resources/views/partials/pdf-header.blade.php
resources/views/formulir.blade.php
resources/views/kartu-tes.blade.php
resources/views/landing.blade.php
resources/views/skl.blade.php
resources/views/vendor/filament-easy-footer/easy-footer.blade.php
resources/views/vendor/filament-easy-footer/github-version.blade.php
resources/views/vendor/filament-easy-footer/.gitkeep
resources/css/app.css
resources/css/filament/dashboard/tailwind.config.js
resources/css/filament/dashboard/theme.css
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
public/js/devonab/filament-easy-footer/filament-easy-footer-scripts.js
public/.htaccess
public/index.php
public/robots.txt
composer.json
.env.example
juknis-bersama.md
juknis-mandiri.md
lirik.md
package.json
postcss.config.js
ringkasan.md
SRS-Bersama.md
SRS-Mandiri.md
SRS-System.md
tailwind.config.js
vite.config.js
```

---

## DASHBOARD JALUR PRESTASI
### WIDGET
- Jumlah Pendaftar Semua Jalur -> (Kecualikan Klik)
- Jumlah Pendaftar Jalur Prestasi -> (Kecualikan Klik)
- Status Formulir Pendaftaran -> Jika Belum Mengisi Formulir (Klik -> Masuk ke /dashboard/formulir/create)
- Status Formulir Prestasi -> ()
- Status Pendaftaran -> (Kecualikan Klik) -> Munculkan Hanya Pada Tanggal Pengumuman

```

---

### ./lirik.md

```markdown
# Anak Lanang - Ajeng Febria

## Verse 1
Aku iki anak lanang
_Aku ini anak laki-laki_
Kerjo ku mung turut dalan
_Pekerjaanku hanya mengikuti jalan_
Mugo iso mulyakke drajate keluargo
_Semoga bisa memuliakan derajat keluarga_
Pak e bu e rekasane
_Susah payahnya ayah dan ibu_
Ngrawat aku kanti gede
_Merawatku hingga besar_
Cen kathah luput ku
_Memang banyak kesalahanku_
Kulo nyuwun pangestu
_Saya mohon doa restu_

## Verse 2
Biyen omahku gedek
_Dulu rumahku berdinding gedek (anyaman bambu)_
Trocoh yen udan bledek
_Bocor kalau hujan deras_
Bapak kerjo yen mung ono proyek
_Bapak kerja kalau hanya ada proyek_
Biyen durung kramikan
_Dulu belum menikah_
Arep turu adem kanginan
_Mau tidur pun gerah kegerahan_
Penting saben dino iso mangan
_Yang penting setiap hari bisa makan_

## Verse 3
Saiki aku wes gede
_Sekarang aku sudah besar_
Iso golek duit dewe
_Bisa mencari uang sendiri_
Senajan biyen mung iso nyusahke
_Meskipun dulu hanya bisa menyusahkan_
Pak e buk e ngapurane
_Ayah dan ibu maafkanlah_
Saiki aku wis kerjo
_Sekarang aku sudah bekerja_
Senajan uripku rekoso
_Meskipun hidupku susah_
Ikhlas bekti kanggo keluargo
_Ikhlas berbakti untuk keluarga_

## Chorus
Aku iki anak lanang
_Aku ini anak laki-laki_
Kerjo ku mung turut dalan
_Pekerjaanku hanya mengikuti jalan_
Mugo iso mulyakke drajate keluargo
_Semoga bisa memuliakan derajat keluarga_
Pak e bu e rekasane
_Susah payahnya ayah dan ibu_
Ngrawat aku kanti gede
_Merawatku hingga besar_
Cen kathah luput ku
_Memang banyak kesalahanku_
Kulo nyuwun pangestu
_Saya mohon doa restu_

## Verse 4
Biyen durung kramikan
_Dulu belum menikah_
Arep turu adem kanginan
_Mau tidur pun gerah kegerahan_
Penting saben dino iso mangan
_Yang penting setiap hari bisa makan_

## Verse 5
Saiki aku wes gede
_Sekarang aku sudah besar_
Iso golek duit dewe
_Bisa mencari uang sendiri_
Senajan biyen mung iso nyusahke
_Meskipun dulu hanya bisa menyusahkan_
Pak e buk e ngapurane
_Ayah dan ibu maafkanlah_
Saiki aku wis kerjo
_Sekarang aku sudah bekerja_
Senajan uripku rekoso
_Meskipun hidupku susah_
Ikhlas bekti kanggo keluargo
_Ikhlas berbakti untuk keluarga_

## Chorus
Aku iki anak lanang
_Aku ini anak laki-laki_
Kerjo ku mung turut dalan
_Pekerjaanku hanya mengikuti jalan_
Mugo iso mulyakke drajate keluargo
_Semoga bisa memuliakan derajat keluarga_
Pak e bu e rekasane
_Susah payahnya ayah dan ibu_
Ngrawat aku kanti gede
_Merawatku hingga besar_
Cen kathah luput ku
_Memang banyak kesalahanku_
Kulo nyuwun pangestu
_Saya mohon doa restu_

## Outro
Aku iki anak lanang
_Aku ini anak laki-laki_
Kerjo ku mung turut dalan
_Pekerjaanku hanya mengikuti jalan_
Mugo iso mulyakke drajate keluargo
_Semoga bisa memuliakan derajat keluarga_
Pak e bu e rekasane
_Susah payahnya ayah dan ibu_
Ngrawat aku kanti gede
_Merawatku hingga besar_
Cen kathah luput ku
_Memang banyak kesalahanku_
Kulo nyuwun pangestu
_Saya mohon doa restu_
Cen kathah luput ku
_Memang banyak kesalahanku_
Kulo nyuwun pangestu
_Saya mohon doa restu_
Kathah klenta klentu
_Banyak kekeliruan dan kesalahan_
Kulo nyuwun donga restu
_Saya mohon doa restu_
Biyen pedot sekolah
_Dulu putus sekolah_
Mergo kahanane susah
_Karena keadaan susah_
Weling bapak dadi wong sing genah
_Pesan bapak jadilah orang yang benar_

```

---

### ./package.json

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

### ./postcss.config.js

```javascript
export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
};

```

---

### ./ringkasan.md

```markdown

```

---

### ./SRS-Bersama.md

```markdown
# KONSEP SOFTWARE REQUIREMENTS SPECIFICATION (SRS)
## Landing Page PMBM MTsN 1 Pandeglang
### Tahun Pelajaran 2026/2027

---

## LANGKAH 1 — GAMBARAN UMUM SISTEM

### 1.1 Deskripsi Produk
Landing page ini adalah antarmuka web satu halaman (single-page) yang berfungsi sebagai:
- Pusat informasi resmi PMBM MTsN 1 Pandeglang TP 2026/2027
- Panduan lengkap pendaftaran bagi calon murid dan orang tua
- Pintu masuk (gateway) menuju sistem pendaftaran online resmi di http://pmbm-kanwilbanten.com/
- Kanal komunikasi antara madrasah dan masyarakat

### 1.2 Ruang Lingkup
- Cakupan: Informasi PMBM Jalur Reguler MTsN 1 Pandeglang
- Platform: Website (responsif — desktop, tablet, mobile)
- Bahasa: Bahasa Indonesia
- Bukan sistem pendaftaran (tidak ada database murid di sisi ini)

### 1.3 Pengguna Sistem (User Persona)

| Persona | Deskripsi | Kebutuhan Utama |
|---|---|---|
| Orang tua/wali | Dewasa, literasi digital menengah | Informasi syarat, jadwal, cara daftar |
| Calon murid (anak SD/MI) | Usia 10–12 tahun, melek gadget | Visual menarik, langkah daftar mudah dipahami |
| Guru/operator MI/SD | Profesional pendidikan | Data teknis: NISN, NPSN, EMIS, kuota |
| Masyarakat umum | Beragam | Info umum madrasah, kontak, pengaduan |

---

## LANGKAH 2 — STRUKTUR HALAMAN (SITEMAP / SECTION LAYOUT)

Landing page terdiri dari **9 section** yang tersusun secara linear dari atas ke bawah:

```
[1] HERO / BANNER UTAMA
[2] TENTANG PMBM
[3] PERSYARATAN PENDAFTARAN
[4] ALUR / TATA CARA PENDAFTARAN
[5] JADWAL PENTING
[6] MEKANISME SELEKSI
[7] KUOTA & ROMBEL
[8] FAQ
[9] FOOTER & KONTAK
```

---

## LANGKAH 3 — DETAIL SETIAP SECTION

---

### SECTION 1 — HERO / BANNER UTAMA

**Tujuan:** Memberikan kesan pertama yang kuat dan menyampaikan informasi inti dalam 3 detik.

**Elemen yang harus ada:**
- Logo MTsN 1 Pandeglang (placeholder jika belum tersedia)
- Logo Kementerian Agama RI
- Judul besar: *"Penerimaan Murid Baru Madrasah (PMBM) MTsN 1 Pandeglang Tahun Pelajaran 2026/2027"*
- Subjudul: *"Pendaftaran Online Jalur Reguler — Terbuka untuk Lulusan MI/SD Sederajat"*
- Informasi ringkas kuota: **224 kursi tersedia**
- Dua tombol CTA (Call to Action):
  - **[Daftar Sekarang]** → link ke http://pmbm-kanwilbanten.com/
  - **[Unduh Panduan]** → opsional, file PDF juknis
- Countdown timer: Hitung mundur menuju tanggal buka pendaftaran (18 April 2026)
- Background: Foto eksterior madrasah atau ilustrasi islami (placeholder awal)

---

### SECTION 2 — TENTANG PMBM

**Tujuan:** Memberi konteks mengapa PMBM diadakan dan siapa penyelenggaranya.

**Elemen yang harus ada:**
- Penjelasan singkat PMBM (2–3 paragraf):
  - Dasar hukum: Keputusan Kanwil Kemenag Banten No. 009/B/Tahun 2026
  - Prinsip: Objektif, akuntabel, transparan, tidak diskriminatif
  - Gratis: tidak ada pungutan biaya dari calon murid
- Informasi madrasah:
  - Nama: MTsN 1 Pandeglang
  - Alamat: Jl. Raya Labuan, Kadulisung, Pandeglang
  - Email: mtsnpdg1.417849@gmail.com
- Badge/highlight: "Terakreditasi", "Negeri", "Gratis"

---

### SECTION 3 — PERSYARATAN PENDAFTARAN

**Tujuan:** Memastikan calon murid dan orang tua tahu apa saja yang perlu disiapkan sebelum mendaftar.

**Elemen yang harus ada:**

**3A. Persyaratan Umum (checklist visual):**
1. Asal sekolah memiliki NPSN dan terdaftar di EMIS/DAPODIK
2. Calon murid memiliki NISN dan terdaftar di EMIS/DAPODIK
3. Usia maksimal **15 tahun** per 1 Juli 2026
4. Ijazah MI/SD sederajat atau dokumen penyelesaian pendidikan

**3B. Dokumen yang Harus Diunggah (checklist visual):**
1. Kartu Keluarga (KK) — diterbitkan sebelum Maret 2026
2. Ijazah MI/SD sederajat
3. Syahadah Diniyah *(khusus calon murid yang tinggal di dalam/luar Kab. Serang dan akan sekolah di Kab. Serang — tidak berlaku untuk MTsN 1 Pandeglang)*
4. Sertifikat Akreditasi sekolah asal *(hanya bagi asal luar Provinsi Banten)*
5. Surat Pernyataan Pertanggungjawaban Mutlak — bermaterai Rp 10.000
6. Surat Rekomendasi/Kesetaraan Ijazah *(hanya bagi asal sekolah asing)*

**3C. Catatan penting:**
- Calon murid yang sekolah asal belum/tidak terakreditasi → nilai akreditasi otomatis = **65**
- Pemalsuan dokumen = **diskualifikasi + sanksi hukum**

**Desain rekomendasi:** Tampilkan sebagai card checklist dengan ikon centang, beri tanda "Wajib" vs "Kondisional".

---

### SECTION 4 — ALUR / TATA CARA PENDAFTARAN

**Tujuan:** Memandu calon murid langkah demi langkah agar tidak bingung.

**Desain rekomendasi:** Stepper horizontal atau vertikal (numbered steps dengan ikon).

**Langkah-langkah:**

**TAHAP 1 — Persiapan Dokumen**
> Siapkan semua dokumen digital (scan/foto): KK, Ijazah, Surat Pernyataan bermaterai, dan dokumen kondisional lainnya.

**TAHAP 2 — Akses Website Pendaftaran**
> Buka http://pmbm-kanwilbanten.com/ menggunakan browser di HP atau komputer.

**TAHAP 3 — Input NISN**
> Masukkan NISN (Nomor Induk Siswa Nasional) sebagai identitas pendaftaran.

**TAHAP 4 — Isi Formulir Online**
> Lengkapi data diri, data orang tua, dan informasi sekolah asal.

**TAHAP 5 — Pilih Madrasah Tujuan**
> Pilih minimal 1 dan maksimal 2 madrasah tujuan. Salah satunya bisa MTsN 1 Pandeglang.

**TAHAP 6 — Unggah Dokumen**
> Upload semua berkas persyaratan sesuai ketentuan (format file dan ukuran menyesuaikan sistem).

**TAHAP 7 — Cetak Bukti Pendaftaran**
> Setelah berkas dinyatakan lengkap, cetak bukti pendaftaran secara online.

**TAHAP 8 — Tunggu Verifikasi**
> Panitia madrasah akan melakukan verifikasi berkas secara online (7–15 April).

**TAHAP 9 — Cek Pengumuman Peserta CBT**
> Pengumuman peserta yang lolos verifikasi dan berhak mengikuti CBT pada 29 April 2026.

**TAHAP 10 — Ikuti Uji Coba & Pelaksanaan CBT**
> Uji coba: 30 April. Pelaksanaan CBT: 2 Mei. Tes BTQ: 2–3 Mei.

**TAHAP 11 — Cek Hasil Kelulusan**
> Pengumuman hasil kelulusan pada 5 Mei 2026 melalui http://pmbm-kanwilbanten.com/

**TAHAP 12 — Lapor Diri (Daftar Ulang)**
> Jika diterima, wajib lapor diri langsung ke madrasah pada 6–12 Mei 2026. Jika tidak lapor diri = **gugur**.

---

### SECTION 5 — JADWAL PENTING

**Tujuan:** Menampilkan timeline PMBM MTsN secara visual agar mudah diingat.

**Desain rekomendasi:** Timeline card horizontal dengan warna berbeda per fase.

| No | Kegiatan | Tanggal | Waktu |
|---|---|---|---|
| 1 | Informasi & Sosialisasi | Maret – April 2026 | — |
| 2 | **Pendaftaran Online** | **18 – 27 April 2026** | 08.00–16.00 WIB |
| 3 | Verifikasi Dokumen | 19 – 28 April 2026 | 08.00–16.00 WIB |
| 4 | Pengumuman Peserta CBT | 29 April 2026 | 08.00 WIB |
| 5 | Uji Coba CBT | 30 April 2026 | 07.30–16.00 WIB |
| 6 | Pelaksanaan CBT | 2 Mei 2026 | 07.30–16.00 WIB |
| 7 | Tes Baca Tulis Al-Qur'an | 2 – 3 Mei 2026 | 07.30–16.00 WIB |
| 8 | **Pengumuman Kelulusan** | **5 Mei 2026** | 08.00 WIB |
| 9 | Lapor Diri & Berkas Manual | 6 – 12 Mei 2026 | 08.00–16.00 WIB |

**Fitur tambahan:** Highlight jadwal yang sedang aktif / akan datang berdasarkan tanggal hari ini (JavaScript).

---

### SECTION 6 — MEKANISME SELEKSI

**Tujuan:** Menjelaskan bagaimana penilaian dilakukan agar calon murid dapat mempersiapkan diri.

**Elemen yang harus ada:**

**6A. Jenis Jalur Seleksi:**
- Jalur Reguler (yang dibahas di landing page ini)
- Jalur Prestasi dan Afirmasi → arahkan ke madrasah untuk info lebih lanjut

**6B. Komponen Nilai Akhir (Jalur Reguler):**

```
NILAI AKHIR = (70% × Nilai CBT) + (30% × Nilai BTQ)
```

- **CBT (Computer Based Test):** Tes berbasis komputer di lokasi yang ditentukan
- **BTQ (Baca Tulis Al-Qur'an):** Dilaksanakan di madrasah pilihan atau lokasi CBT

**6C. Aturan Tie-Breaking (jika nilai sama):**
1. Prioritas usia lebih tua
2. Jika usia juga sama → prioritas waktu mendaftar lebih awal

**6D. Pengumuman:**
- Hasil dapat diakses di: http://pmbm-kanwilbanten.com/
- Jika diterima: wajib lapor diri langsung ke madrasah
- Jika tidak diterima: dapat mengikuti jalur seleksi lainnya pada PMBM 2026

---

### SECTION 7 — KUOTA & ROMBONGAN BELAJAR

**Tujuan:** Transparansi kapasitas penerimaan.

**Elemen:**
- Kuota MTsN 1 Pandeglang: **224 murid baru**
- Maksimal per kelas (rombel): **32 murid**
- Estimasi jumlah kelas baru: **7 kelas**
- Catatan: biaya pendidikan = Rp 0 (gratis, dibiayai BOS/BOP Madrasah)

---

### SECTION 8 — FAQ (Pertanyaan yang Sering Diajukan)

**Desain rekomendasi:** Accordion (expand/collapse).

**Daftar FAQ yang disarankan:**

1. **Apakah pendaftaran dikenakan biaya?**
   → Tidak. Seluruh biaya PMBM dibebankan pada anggaran BOS/BOP Madrasah.

2. **Berapa madrasah yang bisa dipilih?**
   → Minimal 1, maksimal 2 madrasah tujuan.

3. **Apa itu NISN dan bagaimana cara mendapatkannya?**
   → NISN adalah Nomor Induk Siswa Nasional. Bisa dicek di sekolah asal atau di https://nisn.data.kemdikbud.go.id/

4. **Saya lulusan sekolah luar Provinsi Banten, apakah bisa daftar?**
   → Bisa, dengan syarat mengunggah Sertifikat Akreditasi sekolah asal.

5. **Apa itu Surat Pernyataan Pertanggungjawaban Mutlak?**
   → Surat bermaterai Rp 10.000 dari orang tua/wali yang menyatakan keabsahan seluruh dokumen. Format tersedia di website pendaftaran.

6. **Jika diterima, kapan lapor diri?**
   → 6 – 12 Mei 2026, langsung datang ke MTsN 1 Pandeglang.

7. **Apa yang terjadi jika tidak lapor diri meski dinyatakan diterima?**
   → Dianggap gugur dari hasil seleksi.

8. **Apa yang diujikan dalam CBT?**
   → Materi CBT mengacu pada kurikulum MI/SD. Detail materi dapat ditanyakan langsung ke panitia madrasah.

9. **Di mana saya bisa mengadukan masalah pendaftaran?**
   → Melalui kanal pengaduan yang disediakan Kanwil Kemenag Banten atau langsung ke meja pelayanan MTsN 1 Pandeglang.

---

### SECTION 9 — FOOTER & KONTAK

**Elemen yang harus ada:**
- Nama resmi: MTsN 1 Pandeglang
- Alamat lengkap: Jl. Raya Labuan, Kadulisung, Pandeglang, Banten
- Email: mtsnpdg1.417849@gmail.com
- Nomor telepon: *(perlu diisi dari pihak madrasah)*
- Link eksternal:
  - Website pendaftaran: http://pmbm-kanwilbanten.com/
  - Website Kanwil Kemenag Banten: http://banten.kemenag.go.id
- Tombol CTA terakhir: **[Daftar Sekarang →]**
- Keterangan hukum: *"Diselenggarakan berdasarkan Keputusan Kepala Kanwil Kemenag Provinsi Banten No. 009/B/Tahun 2026"*
- Tahun: © 2026 MTsN 1 Pandeglang

---

## LANGKAH 4 — SPESIFIKASI TEKNIS

### 4.1 Platform & Stack Teknologi (rekomendasi)
| Komponen | Rekomendasi |
|---|---|
| Frontend | HTML5 + CSS3 + JavaScript (atau React/Vue jika dinamis) |
| Framework CSS | Tailwind CSS atau Bootstrap 5 |
| Hosting | GitHub Pages / Netlify / VPS Kemenag |
| Domain | Subdomain madrasah atau domain baru |
| Responsif | Wajib (mobile-first) |

### 4.2 Fitur Fungsional
| ID | Fitur | Prioritas |
|---|---|---|
| F-01 | Countdown timer ke tanggal buka pendaftaran | Tinggi |
| F-02 | Highlight jadwal aktif (berdasarkan tanggal hari ini) | Tinggi |
| F-03 | Tombol CTA ke link pendaftaran eksternal | Tinggi |
| F-04 | Accordion FAQ | Sedang |
| F-05 | Smooth scroll navigasi | Sedang |
| F-06 | Sticky navbar | Sedang |
| F-07 | Tombol WhatsApp/kontak cepat | Sedang |
| F-08 | Download template Surat Pernyataan | Sedang |
| F-09 | Dark/Light mode | Rendah |
| F-10 | Multi-bahasa (Indonesia/Arab) | Rendah |

### 4.3 Fitur Non-Fungsional
- Waktu loading: < 3 detik pada jaringan 4G
- Kompatibel browser: Chrome, Firefox, Safari, Edge (versi 2 tahun terakhir)
- Aksesibilitas: Teks dapat dibaca di layar kecil (font min 14px)
- Keamanan: HTTPS wajib
- SEO: Meta tag, Open Graph, judul halaman deskriptif

---

## LANGKAH 5 — ASET YANG PERLU DISIAPKAN

Karena dimulai dari nol, berikut daftar aset yang perlu dikumpulkan dari pihak madrasah:

| No | Aset | Format | Prioritas |
|---|---|---|---|
| 1 | Logo MTsN 1 Pandeglang | PNG transparan | Wajib |
| 2 | Logo Kementerian Agama RI | PNG transparan | Wajib |
| 3 | Foto eksterior gedung madrasah | JPG min 1200px | Wajib |
| 4 | Foto kegiatan belajar/siswa | JPG min 800px | Dianjurkan |
| 5 | Nomor telepon resmi madrasah | Teks | Wajib |
| 6 | Nomor WhatsApp panitia | Teks | Dianjurkan |
| 7 | Template Surat Pernyataan | DOCX/PDF | Wajib |
| 8 | Nama Kepala Madrasah | Teks | Dianjurkan |
| 9 | Akun media sosial resmi | URL | Opsional |

---

## LANGKAH 6 — PANDUAN DESAIN VISUAL

### 6.1 Identitas Warna (rekomendasi)
- **Hijau tua** (#1B5E20) — warna primer, identitas Islam/Kemenag
- **Hijau muda** (#4CAF50) — aksen
- **Putih** (#FFFFFF) — background utama
- **Abu-abu terang** (#F5F5F5) — background section alternatif
- **Emas/kuning** (#FFC107) — highlight/CTA
- **Merah** (#D32F2F) — peringatan/batas waktu

### 6.2 Tipografi (rekomendasi)
- Judul: **Poppins Bold** atau **Plus Jakarta Sans Bold**
- Body: **Poppins Regular** atau **Inter**
- Arab/Islami (jika diperlukan): **Amiri** atau **Scheherazade New**

### 6.3 Tone Visual
- Bersih, profesional, terpercaya (institusi pemerintah)
- Ramah dan mudah dipahami (untuk orang tua dan anak)
- Islami namun modern

---

*Dokumen ini merupakan konsep awal SRS Landing Page PMBM MTsN 1 Pandeglang TP 2026/2027. Revisi dapat dilakukan sesuai kebutuhan dan masukan stakeholder.*

```

---

### ./SRS-Mandiri.md

```markdown
# KONSEP SOFTWARE REQUIREMENTS SPECIFICATION (SRS)
## Landing Page PMBM MTsN 1 Pandeglang
### Tahun Pelajaran 2026/2027

---

## LANGKAH 1 — GAMBARAN UMUM SISTEM

### 1.1 Deskripsi Produk
Landing page ini adalah antarmuka web satu halaman (single-page) yang berfungsi sebagai:
- Pusat informasi resmi PMBM MTsN 1 Pandeglang TP 2026/2027 untuk **3 jalur sekaligus**
- Panduan lengkap pendaftaran bagi calon murid dan orang tua
- Pintu masuk ke dua sistem pendaftaran:
  - Jalur Prestasi & Afirmasi → **daftar.mtsn1pandeglang.sch.id** (sistem lokal madrasah)
  - Jalur Reguler → **http://pmbm-kanwilbanten.com/** (sistem Kanwil Kemenag Banten)
- Kanal komunikasi antara madrasah dan masyarakat

### 1.2 Ruang Lingkup
- Cakupan: PMBM MTsN 1 Pandeglang — Jalur Prestasi, Afirmasi, dan Reguler
- Platform: Website responsif (desktop, tablet, mobile)
- Bahasa: Bahasa Indonesia
- Sifat: Informatif + gateway; bukan sistem pendaftaran itu sendiri

### 1.3 Pengguna Sistem (User Persona)

| Persona | Deskripsi | Kebutuhan Utama |
|---|---|---|
| Orang tua/wali | Dewasa, literasi digital menengah | Syarat, jadwal, biaya, cara daftar |
| Calon murid (kelas VI MI/SD) | Usia 10–12 tahun, melek gadget | Langkah daftar visual & mudah dipahami |
| Guru/operator MI/SD | Profesional pendidikan | Data teknis: NISN, NPSN, jalur, kuota |
| Masyarakat umum | Beragam | Info umum, kontak, kanal pengaduan |

---

## LANGKAH 2 — ARSITEKTUR INFORMASI & STRUKTUR HALAMAN

### 2.1 Konsep Utama: "3 Jalur, 1 Pintu"
Landing page dirancang dengan konsep **satu pintu masuk** yang memandu pengunjung memilih jalur yang tepat sebelum masuk ke sistem pendaftaran masing-masing. Alurnya:

```
Pengunjung tiba
      ↓
[Hero] → Pilih Jalur
      ↓              ↓              ↓
[Prestasi]      [Afirmasi]      [Reguler]
      ↓              ↓              ↓
daftar.mtsn1   daftar.mtsn1   pmbm-kanwil
pandeglang     pandeglang     banten.com
.sch.id        .sch.id
```

### 2.2 Susunan Section (Linear Scroll)

```
[01] HERO / BANNER UTAMA
[02] PENGENALAN 3 JALUR (Pemilihan Jalur)
[03] JADWAL — Prestasi & Afirmasi
[04] JADWAL — Reguler (PMBM Bersama)
[05] PERSYARATAN UMUM (Semua Jalur)
[06] DETAIL JALUR PRESTASI
[07] DETAIL JALUR AFIRMASI
[08] DETAIL JALUR REGULER
[09] MEKANISME SELEKSI
[10] KETENTUAN GUGUR (Penting!)
[11] KUOTA & ROMBONGAN BELAJAR
[12] FAQ
[13] FOOTER & KONTAK
```

---

## LANGKAH 3 — DETAIL SETIAP SECTION

---

### SECTION 01 — HERO / BANNER UTAMA

**Tujuan:** Kesan pertama kuat; sampaikan inti informasi dalam 3 detik.

**Elemen wajib:**
- Logo MTsN 1 Pandeglang + Logo Kementerian Agama RI (berdampingan)
- Judul utama:
  *"Penerimaan Murid Baru Madrasah (PMBM) MTsN 1 Pandeglang — Tahun Pelajaran 2026/2027"*
- Subjudul:
  *"Terbuka untuk Lulusan MI/SD Sederajat | 3 Jalur Pendaftaran | Gratis"*
- Nama Kepala Madrasah: **Hj. Yanti Mariah, S.S., M.Pd.**
- Kuota tersedia: **224 kursi** (Jalur Reguler) + kuota Prestasi & Afirmasi *(diisi setelah data tersedia)*
- **Countdown timer** menuju tanggal pembukaan terdekat:
  - Prestasi & Afirmasi: **6 April 2026**
  - Reguler: **18 April 2026**
  - Logika: tampilkan countdown ke tanggal terdekat yang belum lewat
- Dua tombol CTA:
  - **[Daftar Prestasi/Afirmasi]** → daftar.mtsn1pandeglang.sch.id
  - **[Daftar Reguler]** → http://pmbm-kanwilbanten.com/
- Background: foto eksterior madrasah atau ilustrasi islami (placeholder awal)

---

### SECTION 02 — PENGENALAN 3 JALUR

**Tujuan:** Bantu pengunjung memahami perbedaan jalur agar bisa memilih yang tepat.

**Desain rekomendasi:** 3 card berdampingan, masing-masing berwarna berbeda sesuai warna map fisik.

| Elemen | Jalur Prestasi | Jalur Afirmasi | Jalur Reguler |
|---|---|---|---|
| Warna card | Merah | Kuning | Biru/Hijau |
| Ikon | 🏆 Piala | 💛 Hati | 📝 Formulir |
| Singkatan untuk siapa | Berprestasi (akademik/non-akademik/tahfidz) | Keluarga kurang mampu (KIP/PKH/KKS/SKTM) | Umum / semua calon murid |
| Sistem daftar | daftar.mtsn1pandeglang.sch.id | daftar.mtsn1pandeglang.sch.id | pmbm-kanwilbanten.com |
| Jadwal buka | 6 April 2026 | 6 April 2026 | 18 April 2026 |
| Tombol CTA | [Pelajari & Daftar] | [Pelajari & Daftar] | [Pelajari & Daftar] |

**Catatan:** Tiap tombol CTA melakukan smooth scroll ke section detail jalur masing-masing, bukan langsung ke link eksternal — agar pengunjung membaca syarat terlebih dahulu.

**Catatan penting untuk pengunjung (infoboks):**
> "Tidak lolos Jalur Prestasi/Afirmasi? Anda masih bisa mendaftar ke Jalur Reguler (PMBM Bersama) yang dibuka mulai 18 April 2026."

---

### SECTION 03 — JADWAL PRESTASI & AFIRMASI

**Tujuan:** Tampilkan timeline Jalur Prestasi & Afirmasi secara visual.

**Desain rekomendasi:** Timeline vertikal dengan indikator status (mendatang / sedang berlangsung / selesai) berbasis tanggal hari ini.

| No | Kegiatan | Tanggal | Keterangan |
|---|---|---|---|
| 1 | Pendaftaran Online | 6 – 8 April 2026 | Website: daftar.mtsn1pandeglang.sch.id |
| 2 | Penyerahan Berkas Fisik | 6 – 8 April 2026 | Sekretariat PMBM MTsN 1 Pandeglang |
| 3 | Verifikasi Berkas | 9 – 10 April 2026 | Dilakukan panitia |
| 4 | Tes Kemampuan & BTQ | 13 April 2026 | Hadir pukul **07.00 WIB** |
| 5 | Pengumuman Hasil | 14 April 2026 | Website resmi madrasah |
| 6 | Lapor Diri & Pemberkasan | 15 – 16 April 2026 | Langsung ke madrasah |

**Infoboks jam kerja panitia:**
> ⏰ Jam layanan panitia: **08.00 – 14.00 WIB** | Istirahat: **11.30 – 13.00 WIB**

---

### SECTION 04 — JADWAL REGULER (PMBM BERSAMA)

**Tujuan:** Tampilkan timeline Jalur Reguler dengan sumber dari Juknis Kanwil Kemenag Banten.

| No | Kegiatan | Tanggal | Keterangan |
|---|---|---|---|
| 1 | Informasi & Sosialisasi | Maret – April 2026 | — |
| 2 | Pendaftaran Online | 18 – 27 April 2026 | Buka 18 Apr 08.00 WIB, tutup 27 Apr 16.00 WIB |
| 3 | Verifikasi Dokumen | 19 – 28 April 2026 | 08.00 – 16.00 WIB |
| 4 | Pengumuman Peserta CBT | 29 April 2026 | 08.00 WIB |
| 5 | Uji Coba CBT | 30 April 2026 | 07.30 – 16.00 WIB |
| 6 | Pelaksanaan CBT | 2 Mei 2026 | 07.30 – 16.00 WIB |
| 7 | Tes Baca Tulis Al-Qur'an | 2 – 3 Mei 2026 | 07.30 – 16.00 WIB |
| 8 | Pengumuman Kelulusan | 5 Mei 2026 | 08.00 WIB |
| 9 | Lapor Diri & Berkas Manual | 6 – 12 Mei 2026 | Buka 6 Mei 08.00, tutup 12 Mei 16.00 WIB |

---

### SECTION 05 — PERSYARATAN UMUM (SEMUA JALUR)

**Tujuan:** Tampilkan syarat dasar yang berlaku untuk semua jalur agar tidak terulang di tiap section.

**Checklist visual:**
1. ✅ Usia maksimal **15 tahun** per 1 Juli 2026
2. ✅ Surat keterangan aktif murid **kelas VI** (MI/SD)
3. ✅ Akta kelahiran **berbarcode**
4. ✅ Kartu Keluarga **berbarcode**

**Infoboks:**
> ⚠️ Dokumen KK dan Akta Kelahiran **wajib berbarcode** (terbitan Dinas Dukcapil). Dokumen lama tanpa barcode tidak dapat diterima.

---

### SECTION 06 — DETAIL JALUR PRESTASI

**Tujuan:** Informasi lengkap Jalur Prestasi agar calon murid dapat menilai kelayakan dirinya.

**Desain rekomendasi:** Background/aksen warna merah sesuai warna map.

**6A. Kategori Prestasi yang Diakui:**

| Kategori | Ketentuan | Bukti |
|---|---|---|
| **Tahfidz** | Minimal 3 juz | Sertifikat + tes hafalan langsung |
| **Akademik** | KSM/OMI, MYRES, OSN, OSP, OSK — Juara 1–3, minimal tingkat Kab/Kota; diselenggarakan Kemenag, Kemendikbud, BRIN, atau PT Terakreditasi | Sertifikat asli |
| **Non-Akademik** | MTQ, MHQ, MSQ, Pidato Arab, Kaligrafi, O2SN, FLS2N, Olahraga (beregu: hanya top scorer/pemain terbaik) | Sertifikat asli |

**6B. Jenjang Kejuaraan yang Diakui:**

| Tingkat | Juara yang Diakui |
|---|---|
| Kabupaten / Kota | Juara 1 |
| Provinsi | Juara 1 dan 2 |
| Nasional | Juara 1, 2, dan 3 |

**6C. Berkas yang Diserahkan Secara Fisik:**
1. Print out formulir pendaftaran online
2. Sertifikat prestasi **asli**
3. Dokumen persyaratan umum (akta, KK, surat keterangan aktif)
4. Semua dimasukkan **map snelhecter warna MERAH** + label identitas (nama, asal sekolah, jalur)

**6D. Tombol CTA:**
- **[Daftar Jalur Prestasi →]** → daftar.mtsn1pandeglang.sch.id

---

### SECTION 07 — DETAIL JALUR AFIRMASI

**Tujuan:** Informasi lengkap Jalur Afirmasi agar keluarga yang berhak dapat mendaftar dengan percaya diri.

**Desain rekomendasi:** Background/aksen warna kuning sesuai warna map.

**7A. Kriteria Penerima:**
Calon murid yang berasal dari keluarga penerima manfaat program sosial pemerintah:
- 🟡 Kartu Indonesia Pintar (KIP)
- 🟡 Program Keluarga Harapan (PKH)
- 🟡 Kartu Keluarga Sejahtera (KKS)
- 🟡 Surat Keterangan Tidak Mampu (SKTM) dari pemerintah daerah

**7B. Dokumen Tambahan Khusus SKTM:**
Jika menggunakan SKTM, wajib melampirkan:
- Fotokopi rekening/tagihan listrik **3 bulan terakhir**
- Foto rumah: tampak **depan, dalam, dan belakang**

**7C. Berkas yang Diserahkan Secara Fisik:**
1. Print out formulir pendaftaran online
2. Fotokopi kartu KIP/PKH/KKS/SKTM yang telah **dilegalisir**
3. Dokumen persyaratan umum (akta, KK, surat keterangan aktif)
4. *(Jika SKTM)* Fotokopi rekening listrik 3 bulan + foto rumah
5. Semua dimasukkan **map snelhecter warna KUNING** + label identitas

**7D. Tombol CTA:**
- **[Daftar Jalur Afirmasi →]** → daftar.mtsn1pandeglang.sch.id

---

### SECTION 08 — DETAIL JALUR REGULER

**Tujuan:** Panduan lengkap Jalur Reguler (PMBM Bersama Kanwil Kemenag Banten).

**8A. Tata Cara Pendaftaran (Stepper):**

1. Akses **http://pmbm-kanwilbanten.com/**
2. Input **NISN** sebagai identitas pendaftaran
3. Isi formulir pendaftaran online secara lengkap
4. Pilih **1–2 madrasah tujuan** (MTsN 1 Pandeglang masuk pilihan)
5. Unggah dokumen:
   - Kartu Keluarga (diterbitkan sebelum Maret 2026)
   - Ijazah MI/SD sederajat
   - Sertifikat Akreditasi sekolah asal *(hanya jika asal luar Provinsi Banten)*
   - Surat Pernyataan Pertanggungjawaban Mutlak bermaterai Rp 10.000
   - Surat Rekomendasi/Kesetaraan Ijazah *(hanya jika asal sekolah asing)*
6. Cetak bukti pendaftaran setelah berkas dinyatakan lengkap

**8B. Informasi Nilai Akreditasi:**
- Sekolah asal terakreditasi → nilai akreditasi sesuai sertifikat
- Sekolah belum/tidak terakreditasi → nilai akreditasi otomatis = **65**

**8C. Tombol CTA:**
- **[Daftar Jalur Reguler →]** → http://pmbm-kanwilbanten.com/
- **[Unduh Template Surat Pernyataan]** *(opsional, jika file tersedia)*

---

### SECTION 09 — MEKANISME SELEKSI

**Tujuan:** Jelaskan bagaimana penilaian dilakukan di masing-masing jalur.

**9A. Jalur Prestasi:**
- Seleksi berdasarkan verifikasi sertifikat prestasi + tes hafalan (khusus Tahfidz)
- Tidak ada CBT

**9B. Jalur Afirmasi:**
- Seleksi berdasarkan verifikasi kelayakan ekonomi (dokumen KIP/PKH/KKS/SKTM)
- Tidak ada CBT

**9C. Jalur Reguler:**

```
NILAI AKHIR = (70% × Nilai CBT) + (30% × Nilai BTQ)
```

- **CBT** = Computer Based Test, dilaksanakan 2 Mei 2026
- **BTQ** = Tes Baca Tulis Al-Qur'an, dilaksanakan 2–3 Mei 2026

**Aturan tie-breaking (jika nilai akhir sama):**
1. Prioritas usia **lebih tua**
2. Jika usia juga sama → prioritas **waktu mendaftar lebih awal**

---

### SECTION 10 — KETENTUAN GUGUR ⚠️

**Tujuan:** Peringatan tegas agar calon murid tidak melakukan kesalahan prosedural.

**Desain rekomendasi:** Card dengan warna merah/oranye, ikon peringatan, teks tegas tapi tidak menakutkan.

**Calon murid dinyatakan GUGUR apabila:**

| # | Kondisi |
|---|---|
| 1 | Mengisi formulir online **tapi tidak menyerahkan berkas fisik** (Prestasi/Afirmasi) |
| 2 | Menyerahkan berkas fisik **tapi tidak mengisi formulir online** (Prestasi/Afirmasi) |
| 3 | Dokumen fisik **tidak sesuai** dengan yang diunggah secara online |
| 4 | Tidak lapor diri sesuai jadwal → dianggap **mengundurkan diri** |
| 5 | Terbukti memalsukan data/dokumen → **diskualifikasi + sanksi hukum** |

**Catatan positif (bawah section):**
> 💡 Tidak lolos Jalur Prestasi atau Afirmasi? Tenang — Anda masih bisa mendaftar ke **Jalur Reguler** mulai 18 April 2026. Berkas yang tidak lolos dapat diambil **sehari setelah pengumuman** (15 April 2026).

---

### SECTION 11 — KUOTA & ROMBONGAN BELAJAR

**Elemen:**
- Kuota Jalur Reguler MTsN 1 Pandeglang: **224 murid baru**
- Kuota Jalur Prestasi: *(diisi sesuai keputusan madrasah)*
- Kuota Jalur Afirmasi: *(diisi sesuai keputusan madrasah)*
- Maksimal murid per kelas: **32 murid**
- Estimasi kelas baru dari Jalur Reguler: ~7 kelas
- Biaya pendidikan: **Rp 0 (Gratis)** — dibiayai BOS/BOP Madrasah

---

### SECTION 12 — FAQ

**Desain:** Accordion expand/collapse. Kelompokkan per jalur.

**FAQ Umum:**
1. Apakah pendaftaran dikenakan biaya? → Tidak, gratis.
2. Bisakah mendaftar lebih dari satu jalur? → *(perlu konfirmasi ke panitia — umumnya tidak diperbolehkan mendaftar dua jalur sekaligus untuk madrasah yang sama)*
3. Apa itu NISN? → Nomor Induk Siswa Nasional. Bisa dicek di sekolah asal.
4. Mengapa KK dan Akta harus berbarcode? → Karena harus diterbitkan resmi oleh Dinas Dukcapil sebagai dokumen terverifikasi.

**FAQ Jalur Prestasi:**
5. Apakah piagam tanpa cap basah diterima? → *(perlu konfirmasi panitia)*
6. Sertifikat beregu apakah bisa digunakan? → Hanya untuk top scorer/pemain terbaik yang tercantum.

**FAQ Jalur Afirmasi:**
7. SKTM dari RT/RW apakah bisa? → Tidak, harus dari pemerintah daerah (kelurahan/kecamatan/dinas sosial).
8. Apakah foto rumah bisa selfie dari HP? → *(perlu konfirmasi panitia; umumnya diterima selama jelas)*

**FAQ Jalur Reguler:**
9. Berapa madrasah yang bisa dipilih? → Minimal 1, maksimal 2.
10. Nilai akreditasi sekolah saya 0/belum akreditasi, apakah bisa daftar? → Bisa, nilai akreditasi otomatis dihitung 65.
11. Jika diterima tapi tidak lapor diri, apa yang terjadi? → Dinyatakan gugur/mengundurkan diri.

---

### SECTION 13 — FOOTER & KONTAK

**Elemen wajib:**
- Nama resmi: **MTsN 1 Pandeglang**
- Alamat: Jl. Raya Labuan, Kadulisung, Pandeglang, Banten
- Email: mtsnpdg1.417849@gmail.com
- Nomor telepon: *(diisi pihak madrasah)*
- WhatsApp Panitia: *(diisi pihak madrasah)*
- Ketua PMBM: **Umar Mu'tamar, S.Ag**
- Kepala Madrasah: **Hj. Yanti Mariah, S.S., M.Pd.**
- Link penting:
  - Pendaftaran Prestasi/Afirmasi: daftar.mtsn1pandeglang.sch.id
  - Pendaftaran Reguler: http://pmbm-kanwilbanten.com/
  - Kanwil Kemenag Banten: http://banten.kemenag.go.id
- Tombol CTA terakhir: **[Daftar Sekarang →]** (dengan dropdown pilihan jalur)
- Teks hukum:
  *"Diselenggarakan berdasarkan Keputusan Kepala Kanwil Kemenag Prov. Banten No. 009/B/Tahun 2026 dan Juknis PMBM MTsN 1 Pandeglang Tahun 2026."*
- © 2026 MTsN 1 Pandeglang — Pandeglang, 31 Maret 2026

---

## LANGKAH 4 — SPESIFIKASI TEKNIS

### 4.1 Stack Teknologi (Rekomendasi)
| Komponen | Rekomendasi |
|---|---|
| Frontend | HTML5 + CSS3 + JavaScript |
| Framework CSS | Tailwind CSS atau Bootstrap 5 |
| Hosting | GitHub Pages / Netlify / hosting madrasah |
| Domain | daftar.mtsn1pandeglang.sch.id atau subdomain |
| Responsif | Wajib (mobile-first) |

### 4.2 Fitur Fungsional

| ID | Fitur | Prioritas | Catatan |
|---|---|---|---|
| F-01 | Countdown timer ke tanggal pembukaan terdekat | Tinggi | Otomatis switch ke jalur berikutnya |
| F-02 | Highlight status jadwal (mendatang/aktif/selesai) | Tinggi | Berbasis tanggal hari ini |
| F-03 | Tombol CTA per jalur ke link eksternal | Tinggi | Beda URL per jalur |
| F-04 | Smooth scroll dari card jalur ke section detail | Tinggi | UX penting |
| F-05 | Accordion FAQ | Sedang | Grouped per jalur |
| F-06 | Sticky navbar dengan link ke tiap section | Sedang | |
| F-07 | Tombol WhatsApp floating (kontak panitia) | Sedang | |
| F-08 | Download template Surat Pernyataan (Reguler) | Sedang | |
| F-09 | Infoboks "Tidak lolos? Daftar Reguler" | Tinggi | Lintas jalur |
| F-10 | Pop-up/modal pengumuman penting | Rendah | Opsional |

### 4.3 Fitur Non-Fungsional
- Waktu loading: < 3 detik pada jaringan 4G
- Kompatibel: Chrome, Firefox, Safari, Edge (2 tahun terakhir)
- Font minimum: 14px untuk body teks
- HTTPS wajib
- SEO: meta tag, Open Graph, deskripsi halaman

---

## LANGKAH 5 — ASET YANG PERLU DIKUMPULKAN

| No | Aset | Format | Prioritas | Sumber |
|---|---|---|---|---|
| 1 | Logo MTsN 1 Pandeglang | PNG transparan | Wajib | TU Madrasah |
| 2 | Logo Kementerian Agama RI | PNG transparan | Wajib | kemenag.go.id |
| 3 | Foto eksterior gedung | JPG min 1200px | Wajib | Dokumentasi madrasah |
| 4 | Foto kegiatan belajar/siswa | JPG min 800px | Dianjurkan | Dokumentasi madrasah |
| 5 | Nomor telepon resmi madrasah | Teks | Wajib | TU Madrasah |
| 6 | Nomor WhatsApp panitia PMBM | Teks | Wajib | Ketua PMBM |
| 7 | Kuota Jalur Prestasi & Afirmasi | Angka | Wajib | Ketua PMBM |
| 8 | Template Surat Pernyataan (PDF/DOCX) | File | Dianjurkan | Panitia |
| 9 | Akun media sosial resmi madrasah | URL | Opsional | TU Madrasah |
| 10 | Foto Kepala Madrasah | JPG | Opsional | TU Madrasah |

---

## LANGKAH 6 — PANDUAN DESAIN VISUAL

### 6.1 Palet Warna
| Fungsi | Warna | Hex |
|---|---|---|
| Primer (institusi/islami) | Hijau tua | #1B5E20 |
| Aksen primer | Hijau muda | #4CAF50 |
| Jalur Prestasi | Merah | #C62828 |
| Jalur Afirmasi | Kuning/Amber | #F9A825 |
| Jalur Reguler | Biru tua | #1565C0 |
| Background utama | Putih | #FFFFFF |
| Background alternatif | Abu-abu terang | #F5F5F5 |
| CTA / tombol utama | Emas | #FFC107 |
| Peringatan/gugur | Merah cerah | #D32F2F |

### 6.2 Tipografi
- Judul: **Poppins Bold** atau **Plus Jakarta Sans Bold**
- Body: **Poppins Regular** atau **Inter**
- Elemen Arab/Islami: **Amiri** atau **Scheherazade New**

### 6.3 Tone Visual
- Bersih, profesional, terpercaya (institusi pemerintah)
- Ramah dan mudah dipahami (orang tua dan anak)
- Islami namun modern — hindari terlalu formal/kaku

---

## LANGKAH 7 — PERTANYAAN TERBUKA (Perlu Konfirmasi ke Pihak Madrasah)

Beberapa hal yang belum tercantum di juknis dan perlu dikonfirmasi sebelum development:

| No | Pertanyaan | Untuk Section |
|---|---|---|
| 1 | Berapa kuota Jalur Prestasi & Afirmasi? | Section 02, 11 |
| 2 | Apakah boleh mendaftar dua jalur berbeda sekaligus? | FAQ |
| 3 | Nomor telepon/WhatsApp panitia PMBM? | Section 13 |
| 4 | Apakah ada template resmi Surat Pernyataan untuk Jalur Reguler? | Section 08 |
| 5 | Apakah piagam fotokopi bisa diterima untuk Jalur Prestasi? | FAQ, Section 06 |
| 6 | Lokasi tepat sekretariat PMBM untuk penyerahan berkas fisik? | Section 03 |
| 7 | Apakah ada media sosial resmi yang perlu ditampilkan? | Section 13 |

---

*Dokumen ini merupakan konsep SRS Landing Page PMBM MTsN 1 Pandeglang TP 2026/2027 yang mencakup 3 jalur pendaftaran. Revisi dapat dilakukan sesuai kebutuhan dan masukan stakeholder.*

*Referensi: Keputusan Kepala Kanwil Kemenag Prov. Banten No. 009/B/Tahun 2026 & Juknis PMBM MTsN 1 Pandeglang, Pandeglang 31 Maret 2026.*

```

---

### ./SRS-System.md

```markdown
# Software Requirements Specification (SRS)

## PPDB MTsN 1 Pandeglang

---

## 1. Pendahuluan

### 1.1 Tujuan Dokumen

Dokumen ini mendeskripsikan kebutuhan fungsional dan non-fungsional sistem Penerimaan Peserta Didik Baru (PPDB) MTsN 1 Pandeglang secara lengkap, mencakup alur logika bisnis, struktur teknis, dan daftar fitur yang perlu disempurnakan.

### 1.2 Ruang Lingkup

Sistem ini adalah aplikasi web berbasis Laravel 12 dengan antarmuka Filament v3. Sistem mengelola seluruh siklus PPDB mulai dari registrasi akun calon siswa, pengisian formulir, verifikasi berkas, penjadwalan tes, pengumuman hasil, hingga daftar ulang. Notifikasi dikirim secara otomatis melalui WhatsApp menggunakan gateway eksternal dengan sistem antrian.

### 1.3 Definisi dan Singkatan

| Istilah | Keterangan |
|---|---|
| PPDB | Penerimaan Peserta Didik Baru |
| OTP | One-Time Password |
| NISN | Nomor Induk Siswa Nasional |
| NIK | Nomor Induk Kependudukan |
| KIP | Kartu Indonesia Pintar |
| KKS | Kartu Keluarga Sejahtera |
| PKH | Program Keluarga Harapan |
| SKL | Surat Keterangan Lulus |
| SKBB | Surat Keterangan Berkelakuan Baik |
| SKAB | Surat Keterangan Aktif Belajar |
| CBT | Computer Based Test |
| TTE | Tanda Tangan Elektronik |
| SRS | Software Requirements Specification |

---

## 2. Gambaran Umum Sistem

### 2.1 Perspektif Sistem

Sistem berjalan sebagai aplikasi monolitik Laravel dengan Filament sebagai admin panel. Antrian job menggunakan Redis. Cache menggunakan Redis. Session menggunakan Redis. Penyimpanan file menggunakan disk lokal. Autentikasi menggunakan session-based dengan verifikasi OTP via WhatsApp, bukan email standar Laravel.

### 2.2 Fungsi Utama

Sistem memiliki tiga domain utama: manajemen master data, proses pendaftaran, dan administrasi PPDB.

Manajemen master data mencakup data wilayah (negara, provinsi, kabupaten, kecamatan, kelurahan), data referensi (jalur pendaftaran, prestasi, ekstrakurikuler, mata pelajaran, jurusan, kelas), data administrasi (pimpinan, ketua, sekretaris, bendahara, anggota), dan data instansi (sekolah, sekolah asal).

Proses pendaftaran mencakup registrasi akun dengan verifikasi OTP WhatsApp, pengisian formulir multi-step wizard, unggah berkas, formulir prestasi khusus jalur prestasi, pembuatan kartu tes, dan pencetakan dokumen PDF.

Administrasi PPDB mencakup verifikasi berkas, perubahan status formulir dan pendaftaran, penjadwalan tes, penilaian, penetapan kelas, pengiriman notifikasi WhatsApp, ekspor dan impor data, serta publikasi informasi.

### 2.3 Aktor Sistem

| Role | Kewenangan |
|---|---|
| super_admin | Akses penuh ke seluruh fitur termasuk manajemen pengguna, perubahan status apapun, dan penghapusan permanen |
| admin | Akses ke verifikasi, perubahan status formulir dan pendaftaran, penjadwalan tes, dan pengiriman notifikasi |
| verifikator | Akses terbatas untuk memeriksa dan mengubah status formulir |
| panitia | Akses untuk melihat data dan mengirim notifikasi |
| calon_siswa | Akses hanya pada data milik sendiri: membuat formulir, melihat status, mencetak dokumen |

---

## 3. Alur Logika Bisnis

### 3.1 Alur Registrasi dan Verifikasi Akun

Sistem memeriksa apakah pendaftaran akun sedang dibuka dengan mengambil data TahunPendaftaran yang berstatus Aktif dari cache (TTL 60 detik). Jika tanggal saat ini berada di luar rentang tanggal_ppdb_mulai dan tanggal_ppdb_selesai, halaman register dialihkan ke halaman login dengan notifikasi penutupan.

Jika pendaftaran terbuka, calon siswa mengisi form: nama lengkap, NISN (10 digit numerik, unik), nomor WhatsApp aktif, email (unik), password, dan konfirmasi password. Sistem membuat akun User dengan role calon_siswa yang ditetapkan otomatis melalui event User::created di model booted(). Status email_verified_at dibiarkan null.

Sistem menghasilkan OTP 6 digit acak, menyimpannya di Redis dengan TTL 300 detik menggunakan key "otp:{user_id}", kemudian mengirim OTP ke nomor WhatsApp melalui WhatsAppService::send() yang mendispatch SendWhatsAppJob dengan delay 1-5 detik. Session menyimpan otp_user_id.

Pengguna diarahkan ke halaman verifikasi OTP. Pengguna memasukkan 6 digit OTP. Sistem mengambil OTP dari Redis, membandingkan dengan hash_equals() untuk mencegah timing attack. Jika cocok, sistem mengupdate user: email_verified_at diisi now(), status diubah ke Aktif. Redis key OTP dan cooldown dihapus. User di-login otomatis lalu diarahkan ke dashboard.

Jika OTP kadaluarsa (Redis key tidak ada), pengguna dapat meminta ulang dengan batasan cooldown 60 detik menggunakan Redis key "otp_cooldown:{user_id}".

Jika pengguna login tanpa verifikasi email, LoginCustom::authenticate() mendeteksi hasVerifiedEmail() false, menyimpan otp_user_id ke session, logout, lalu redirect ke halaman verifikasi OTP.

### 3.2 Alur Lupa Password

Pengguna memasukkan identitas: username, email, atau nomor WhatsApp. Sistem mencari user yang cocok di salah satu kolom tersebut dengan kondisi status Aktif. Jika tidak ditemukan, sistem tetap menampilkan pesan sukses palsu untuk mencegah user enumeration.

Sistem memeriksa cooldown Redis key "otp_cooldown:{user_id}". Jika ada, sistem menolak dengan informasi sisa waktu tunggu. Jika tidak ada, sistem menghasilkan OTP baru, menyimpan di Redis "reset_otp:{user_id}" (TTL 300 detik) dan cooldown 60 detik, lalu mengirim ke WhatsApp. Session menyimpan reset_otp_user_id.

Pengguna mengisi OTP di halaman ResetPasswordOtp. Setelah OTP valid, Redis key OTP dihapus dan Redis key "reset_token:{user_id}" dibuat dengan TTL 900 detik. Pengguna diarahkan ke halaman NewPassword.

Di halaman NewPassword, sistem memverifikasi keberadaan reset_token di Redis. Jika ada, password baru disimpan menggunakan forceFill dengan Hash::make(). Semua Redis key terkait dihapus. Notifikasi WhatsApp konfirmasi perubahan password dikirim. Pengguna diarahkan ke halaman login.

### 3.3 Alur Pengisian Formulir Pendaftaran

Calon siswa yang sudah terverifikasi mengakses ListCalonSiswas. Jika belum pernah mendaftar, tombol "Daftar Sekarang" ditampilkan yang mengarah ke CreateCalonSiswa.

Formulir menggunakan Wizard 3 step dengan canSkipWizardSteps() false (urutan wajib):

Step 1 berisi data calon siswa: jalur pendaftaran (hanya yang berstatus Aktif), nama (diisi otomatis dari Auth::user()->name, readonly), NISN (dari username, disabled), NIK (unik), KK, tempat lahir, tanggal lahir, tahun lulus, data demografis, data bantuan sosial (KIP/KKS/PKH bersifat kondisional), nomor telepon, sekolah asal, pilihan ekstrakurikuler dan mata pelajaran, serta alamat domisili dengan cascade wilayah. Upload berkas foto, KK, akta, SKBB, SKAB, NISN. Berkas KIP/KKS/PKH muncul hanya jika nomor yang bersesuaian diisi.

Step 2 berisi data orang tua: ibu kandung, ayah kandung, wali (opsional, collapsed by default), dan kepemilikan rumah.

Step 3 berisi data tes: hanya terlihat bagi non-calon_siswa. Berisi jadwal tes (sesi, ruang, waktu akademik, waktu praktik) dan nilai tes (bobot dan nilai akademik/praktik).

Pada mutateFormDataBeforeCreate, sistem mengisi user_id dari Auth::id() dan tahun_pendaftaran_id dari TahunPendaftaran yang berstatus Aktif. Nomor pendaftaran di-generate otomatis di model CalonSiswa::booted() melalui static::creating, menggunakan lockForUpdate() untuk mencegah race condition, dengan format "PPDB-{TAHUN}-{NNNNNN}".

Setelah create berhasil, afterCreate() memeriksa apakah jalur pendaftaran adalah "Prestasi". Jika ya dan belum ada FormulirPrestasi, ditampilkan notifikasi peringatan dan pengguna diarahkan ke halaman CreateFormulirPrestasi.

CalonSiswaObserver::created() dipanggil dan mengirim notifikasi WhatsApp konfirmasi pendaftaran ke nomor telepon user dengan delay 5-60 detik.

### 3.4 Alur Formulir Prestasi

Hanya dapat diakses oleh calon siswa yang jalur pendaftarannya adalah "Prestasi". Navigasi menu dan akses halaman difilter oleh shouldRegisterNavigation() dan getEloquentQuery() yang masing-masing memverifikasi kondisi ini.

Pada CreateFormulirPrestasi::mount(), sistem memverifikasi bahwa user sudah mengisi formulir utama dan jalur yang dipilih adalah Prestasi. Jika tidak memenuhi, pengguna diarahkan kembali ke index formulir dengan notifikasi.

calon_siswa_id diisi otomatis dari CalonSiswa yang dimiliki user pada mutateFormDataBeforeCreate(), menggunakan withoutGlobalScopes() untuk melewati global scope tahun_aktif dan milik_sendiri.

### 3.5 Alur Verifikasi dan Perubahan Status

Admin atau verifikator membuka daftar CalonSiswa. Kolom status_formulir dapat diubah ke: Diproses, Berkas Tidak Lengkap, Disetujui, atau Ditolak. Kolom status_pendaftaran dapat diubah ke: Diproses, Tidak Diterima, Diterima, Diterima Di Kelas Reguler, atau Diterima Di Kelas Unggulan (hanya super_admin yang bisa ke status non-Diproses).

Saat status_pendaftaran atau status_formulir berubah, CalonSiswaObserver::updated() dipicu. Observer memeriksa wasChanged() untuk kedua kolom. Pesan WhatsApp yang sesuai dengan kondisi baru disiapkan dan dikirim melalui WhatsAppService dengan delay 5-60 detik untuk mencegah rate limit.

Bulk action tersedia untuk super_admin: set jalur pendaftaran massal, set status pendaftaran massal (dengan pemilihan kelas jika status diterima di kelas tertentu), dan kirim notifikasi massal. Notifikasi massal menggunakan delay 10-120 detik per pesan untuk menyebarkan beban pengiriman.

### 3.6 Alur Pencetakan Dokumen PDF

Pencetakan menggunakan paket torgodly/html2media dengan metode Html2MediaAction yang merender view Blade ke PDF.

Formulir dapat dicetak jika status_formulir calon siswa adalah "Disetujui".

Kartu tes dapat dicetak jika status_formulir adalah "Disetujui", status_pendaftaran bukan Tidak Diterima, Diterima Di Kelas Reguler, atau Diterima Di Kelas Unggulan, dan waktu saat ini berada dalam rentang tanggal_penerbitan_kartu_tes_mulai hingga tanggal_penerbitan_kartu_tes_selesai.

Hasil/SKL dapat dicetak jika status_pendaftaran adalah salah satu dari: Diterima, Diterima Di Kelas Reguler, Diterima Di Kelas Unggulan, atau Tidak Diterima, dan waktu saat ini berada dalam salah satu rentang tanggal_pengumuman jalur manapun yang aktif.

### 3.7 Alur Global Scope CalonSiswa

Model CalonSiswa memiliki dua global scope yang diterapkan otomatis:

Scope "tahun_aktif" memfilter data berdasarkan TahunPendaftaran yang berstatus Aktif, yang dimuat dari Cache::rememberForever dengan key "tahun_pendaftaran_aktif". Cache ini di-flush saat TahunPendaftaran disimpan atau dihapus melalui event saved dan deleted di model TahunPendaftaran::booted().

Scope "milik_sendiri" memfilter data agar calon_siswa hanya melihat record milik sendiri berdasarkan user_id. Scope ini aktif hanya jika user terautentikasi dan memiliki role calon_siswa.

Beberapa operasi menggunakan withoutGlobalScopes() secara eksplisit untuk melewati kedua scope ini: resolveRecord di importer, formulir prestasi, relasi calonSiswa di User model, dan query di CalonSiswaObserver.

### 3.8 Alur Notifikasi WhatsApp

WhatsAppService::send() mendispatch SendWhatsAppJob ke queue dengan delay acak dalam rentang yang ditentukan (minDelay hingga maxDelay detik). Ini mencegah pengiriman serentak yang dapat menyebabkan rate limit atau pemblokiran dari gateway.

SendWhatsAppJob::handle() memanggil WhatsAppService::sendDirect() yang melakukan HTTP POST ke endpoint WhatsApp gateway dengan header X-Api-Key. Nomor telepon dinormalisasi terlebih dahulu: prefix "0" diganti "62", jika tidak dimulai "62" maka ditambahkan "62". Job dikonfigurasi dengan tries 3 dan backoff 60 detik.

### 3.9 Alur Cache TahunPendaftaran

Data TahunPendaftaran aktif di-cache dengan Cache::rememberForever. Strategi ini berarti cache tidak pernah kedaluarsa secara otomatis, tetapi di-flush secara manual saat ada perubahan data. Cache Landing Page menggunakan TTL 60-300 detik.

---

## 4. Kebutuhan Fungsional

### 4.1 Manajemen Akun dan Autentikasi

| Kode | Kebutuhan |
|---|---|
| F-AUTH-01 | Sistem menyediakan halaman registrasi yang hanya aktif dalam periode PPDB |
| F-AUTH-02 | Registrasi menghasilkan OTP 6 digit yang dikirim ke WhatsApp dengan TTL 5 menit |
| F-AUTH-03 | Login mendukung username (NISN) dan email |
| F-AUTH-04 | Sistem memblokir login jika email belum terverifikasi dan mengarahkan ke verifikasi OTP |
| F-AUTH-05 | Sistem menyediakan reset password berbasis OTP WhatsApp tanpa email |
| F-AUTH-06 | OTP memiliki mekanisme cooldown 60 detik untuk permintaan ulang |
| F-AUTH-07 | Perbandingan OTP menggunakan hash_equals() untuk mencegah timing attack |
| F-AUTH-08 | Profil pengguna dapat mengedit nama, NISN/username, nomor WhatsApp, email, password, dan avatar |

### 4.2 Manajemen Master Data Wilayah

| Kode | Kebutuhan |
|---|---|
| F-WILAYAH-01 | Sistem mengelola hierarki wilayah: Negara, Provinsi, Kabupaten, Kecamatan, Kelurahan |
| F-WILAYAH-02 | Form wilayah di seluruh sistem menggunakan cascade dropdown yang mereset level bawah saat level atas berubah |
| F-WILAYAH-03 | Dropdown wilayah menggunakan searchable dengan getSearchResultsUsing untuk performa pada data besar |

### 4.3 Manajemen Referensi

| Kode | Kebutuhan |
|---|---|
| F-REF-01 | Sistem mengelola Jalur Pendaftaran dengan nama (Prestasi, Reguler, Afirmasi, Zonasi, Mutasi), kuota, status, dan tahun pendaftaran |
| F-REF-02 | Sistem mengelola master Prestasi dengan jenis (Hafalan Al-Quran, Olimpiade/Kejuaraan), tingkat, kategori, dan peringkat |
| F-REF-03 | Sistem mengelola Ekstrakurikuler, Mata Pelajaran, Jurusan, dan Kelas |
| F-REF-04 | Sistem mengelola Sekolah (instansi sendiri) dan Sekolah Asal (instansi lain) dengan data lengkap termasuk NPSN, NSS, logo, akreditasi, alamat, dan kontak |
| F-REF-05 | Sekolah Asal dapat dibuat inline langsung dari form formulir pendaftaran melalui createOptionForm |

### 4.4 Manajemen Administrasi Panitia

| Kode | Kebutuhan |
|---|---|
| F-PANITIA-01 | Sistem mengelola data Pimpinan, Ketua, Sekretaris, Bendahara, dan Anggota panitia |
| F-PANITIA-02 | Setiap panitia memiliki foto, TTE (Tanda Tangan Elektronik), SK, NIP, dan status aktif |
| F-PANITIA-03 | Form panitia menggunakan wizard 2 step: data biodata dan upload berkas |
| F-PANITIA-04 | Data panitia digunakan di dokumen PDF (formulir, kartu tes, SKL) |

### 4.5 Manajemen Tahun Pendaftaran

| Kode | Kebutuhan |
|---|---|
| F-TAHUN-01 | Sistem mengelola TahunPendaftaran dengan seluruh tanggal periode per jalur |
| F-TAHUN-02 | Setiap jalur memiliki tanggal pendaftaran mulai-selesai dan tanggal pengumuman mulai-selesai |
| F-TAHUN-03 | Tersedia tanggal penerbitan kartu tes, tanggal tes akademik, tanggal tes praktik, dan tanggal registrasi berkas |
| F-TAHUN-04 | Terdapat kuota maksimal registrasi akun |
| F-TAHUN-05 | Perubahan TahunPendaftaran secara otomatis memflush cache "tahun_pendaftaran_aktif" |

### 4.6 Formulir Pendaftaran Calon Siswa

| Kode | Kebutuhan |
|---|---|
| F-FORM-01 | Formulir menggunakan Wizard multi-step dengan urutan yang tidak dapat dilewati |
| F-FORM-02 | Step 1 mencakup data pribadi, data bantuan sosial (kondisional), alamat domisili dengan cascade wilayah, dan upload berkas |
| F-FORM-03 | Step 2 mencakup data ibu kandung, ayah kandung (termasuk kepemilikan rumah), dan wali (opsional) |
| F-FORM-04 | Nomor pendaftaran di-generate otomatis saat create dengan format PPDB-{TAHUN}-{NNNNNN} menggunakan lockForUpdate |
| F-FORM-05 | Kolom NIK, KK, dan nomor telepon dienkripsi di database menggunakan cast "encrypted" |
| F-FORM-06 | Calon siswa hanya dapat melihat dan mengedit formulir milik sendiri |
| F-FORM-07 | Calon siswa tidak dapat mengedit formulir jika status pendaftaran sudah final (Diterima/Tidak Diterima) |
| F-FORM-08 | Admin dapat melihat semua formulir dan mengubah status serta data tes |

### 4.7 Formulir Prestasi

| Kode | Kebutuhan |
|---|---|
| F-PRESTASI-01 | Formulir prestasi hanya tersedia untuk jalur pendaftaran "Prestasi" |
| F-PRESTASI-02 | Satu calon siswa dapat memiliki banyak entri formulir prestasi |
| F-PRESTASI-03 | Setiap entri formulir prestasi berisi jenis prestasi (dari master), nama, tahun, penyelenggara, dan berkas bukti |
| F-PRESTASI-04 | Navigasi menu formulir prestasi tersembunyi otomatis bagi yang bukan jalur prestasi |
| F-PRESTASI-05 | Admin melihat semua formulir prestasi dari semua calon siswa |

### 4.8 Manajemen Status dan Verifikasi

| Kode | Kebutuhan |
|---|---|
| F-STATUS-01 | Status formulir: Diproses, Berkas Tidak Lengkap, Disetujui, Ditolak |
| F-STATUS-02 | Status pendaftaran: Diproses, Tidak Diterima, Diterima, Diterima Di Kelas Reguler, Diterima Di Kelas Unggulan |
| F-STATUS-03 | Perubahan status memicu notifikasi WhatsApp otomatis melalui observer |
| F-STATUS-04 | Bulk action untuk mengubah status pendaftaran banyak calon sekaligus |
| F-STATUS-05 | Bulk action untuk mengubah jalur pendaftaran |
| F-STATUS-06 | Penetapan kelas wajib diisi saat status Diterima Di Kelas Reguler atau Diterima Di Kelas Unggulan |

### 4.9 Penjadwalan Tes

| Kode | Kebutuhan |
|---|---|
| F-TES-01 | Admin dapat mengisi sesi tes, ruang tes, waktu tes akademik, dan waktu tes praktik per calon siswa |
| F-TES-02 | Nilai tes akademik dan praktik beserta bobotnya dapat diisi oleh admin |
| F-TES-03 | Data tes diimpor secara massal menggunakan importer |
| F-TES-04 | Kartu tes menampilkan informasi jadwal, ruang, sesi, dan kredensial login CBT (NISN sebagai username, NIK sebagai password) |

### 4.10 Pencetakan Dokumen PDF

| Kode | Kebutuhan |
|---|---|
| F-PDF-01 | Formulir pendaftaran dapat dicetak jika status formulir adalah "Disetujui" |
| F-PDF-02 | Kartu tes dapat dicetak dalam periode penerbitan kartu tes |
| F-PDF-03 | Dokumen hasil (SKL) terdiri dari 4 lembar: SKL, Pakta Integritas, Surat Pernyataan Siswa, dan Checklist Daftar Ulang |
| F-PDF-04 | Dokumen PDF menyertakan QR code yang mengarah ke URL formulir untuk verifikasi |
| F-PDF-05 | Dokumen PDF menampilkan TTE pimpinan, ketua, dan sekretaris yang berstatus Aktif |
| F-PDF-06 | Header PDF menampilkan logo institusi, logo madrasah, nama, alamat, dan kontak instansi |

### 4.11 Notifikasi WhatsApp

| Kode | Kebutuhan |
|---|---|
| F-WA-01 | Notifikasi dikirim otomatis saat: pendaftaran berhasil, status formulir berubah, status pendaftaran berubah |
| F-WA-02 | Notifikasi dapat dikirim manual per calon siswa oleh admin |
| F-WA-03 | Notifikasi dapat dikirim massal ke target yang dipilih: semua, terverifikasi, atau diterima |
| F-WA-04 | Informasi yang dipublikasikan dapat dikirim notifikasinya ke target tertentu |
| F-WA-05 | Pengiriman menggunakan antrian dengan delay acak untuk mencegah rate limit |
| F-WA-06 | Job memiliki retry 3 kali dengan backoff 60 detik |

### 4.12 Ekspor dan Impor Data

| Kode | Kebutuhan |
|---|---|
| F-EKSPOR-01 | Data calon siswa dapat diekspor ke Excel dengan seluruh kolom termasuk data orang tua, berkas, dan jadwal tes |
| F-EKSPOR-02 | Ekspor dapat dilakukan per record terpilih (bulk) atau seluruh data |
| F-IMPOR-01 | Data tes dan status pendaftaran dapat diimpor dari Excel |
| F-IMPOR-02 | Importer menggunakan NISN sebagai kunci untuk update-or-create |
| F-IMPOR-03 | Impor hanya tersedia bagi super_admin dan hanya jika tahun pendaftaran aktif ada |

### 4.13 Manajemen Informasi

| Kode | Kebutuhan |
|---|---|
| F-INFO-01 | Sistem mengelola informasi/pengumuman dengan judul, isi (rich text), lampiran, tanggal, status (Publish/Draft), dan tahun pendaftaran |
| F-INFO-02 | Informasi berstatus Publish ditampilkan di landing page dan di widget dashboard calon siswa |
| F-INFO-03 | Notifikasi WhatsApp dapat dikirim untuk satu informasi atau banyak informasi sekaligus |
| F-INFO-04 | Hanya informasi berstatus Publish yang dapat dikirim notifikasinya |

### 4.14 Dashboard dan Widget

| Kode | Kebutuhan |
|---|---|
| F-DASH-01 | Widget FormulirOverview menampilkan statistik per status formulir dan pendaftaran dengan sparkline chart |
| F-DASH-02 | Widget FormulirOverview menampilkan view berbeda untuk calon_siswa (status diri sendiri) vs admin (statistik global) |
| F-DASH-03 | Widget InformasiPublished menampilkan daftar informasi terbaru yang berstatus Publish |
| F-DASH-04 | Widget UserRegisters menampilkan log akun calon siswa terbaru berdasarkan email_verified_at, hanya untuk non-calon_siswa |

### 4.15 Landing Page

| Kode | Kebutuhan |
|---|---|
| F-LANDING-01 | Landing page menampilkan informasi PPDB: jalur, jadwal, alur, persyaratan, program, informasi, dan FAQ |
| F-LANDING-02 | Countdown timer menampilkan sisa waktu hingga deadline pendaftaran terdekat |
| F-LANDING-03 | Progress bar kuota per jalur ditampilkan berdasarkan jumlah pendaftar aktual |
| F-LANDING-04 | Landing page mendukung mode gelap dan terang dengan preferensi disimpan di localStorage |
| F-LANDING-05 | Data landing page di-cache 60-300 detik untuk performa |

### 4.16 Manajemen Pengguna

| Kode | Kebutuhan |
|---|---|
| F-USER-01 | super_admin dapat membuat, mengedit, menonaktifkan, memulihkan, dan menghapus permanen akun pengguna |
| F-USER-02 | Pengguna memiliki kolom status (Aktif/Nonaktif) |
| F-USER-03 | Pengguna baru tanpa role akan otomatis mendapat role calon_siswa |
| F-USER-04 | Avatar pengguna dapat diunggah; jika tidak ada, sistem menggunakan foto dari formulir calon siswa |
| F-USER-05 | Manajemen pengguna tidak terlihat di navigasi utama tetapi dapat diakses melalui user menu oleh super_admin |

---

## 5. Kebutuhan Non-Fungsional

### 5.1 Performa

Cache TahunPendaftaran aktif menggunakan rememberForever untuk meminimalkan query berulang. Data landing page di-cache 60-300 detik. Widget menggunakan polling 60 detik bukan realtime. Dropdown wilayah menggunakan searchable dengan limit 50 hasil per query untuk mencegah loading seluruh data.

### 5.2 Keamanan

Kolom sensitif (NIK, KK, nomor telepon orang tua) dienkripsi di database. Perbandingan OTP menggunakan hash_equals(). Mekanisme cooldown mencegah brute force OTP. File yang diunggah disimpan dengan visibility private. Akses kontrol berbasis role menggunakan Spatie Permission dengan Filament Shield.

### 5.3 Ketersediaan

Antrian job menggunakan Redis dengan tries 3 dan backoff. Cache menggunakan Redis. Session menggunakan Redis. Sistem dirancang untuk berjalan dengan Laravel Octane.

### 5.4 Skalabilitas

Pengiriman WhatsApp menggunakan antrian dengan delay acak untuk mencegah lonjakan permintaan ke gateway eksternal. Ekspor dan impor menggunakan chunk 250 baris.

---

## 6. Daftar Fitur yang Perlu Disempurnakan

### 6.1 Keamanan dan Validasi

**F-SEMPURNA-01: Validasi kuota pendaftaran akun**
Sistem saat ini tidak memverifikasi apakah jumlah akun yang terdaftar sudah mencapai kuota maksimal (kolom kuantitas di TahunPendaftaran). RegisterCustom::isRegistrationOpen() hanya memeriksa periode tanggal, bukan jumlah akun. Perlu ditambahkan pengecekan User::count() terhadap TahunPendaftaran::kuantitas sebelum mengizinkan registrasi baru.

**F-SEMPURNA-02: Validasi kuota jalur pendaftaran**
Saat calon siswa memilih jalur pendaftaran di formulir, sistem tidak memverifikasi apakah kuota jalur tersebut masih tersedia (JalurPendaftaran::kuantitas versus jumlah pendaftar di jalur tersebut). Perlu ditambahkan validasi sebelum formulir berhasil disimpan.

**F-SEMPURNA-03: Rate limiting pada endpoint OTP**
Tidak ada rate limiting berbasis IP pada endpoint verifikasi OTP. Hanya ada cooldown per user. Pengguna yang berbeda dari IP yang sama dapat melakukan banyak request. Perlu ditambahkan throttle middleware pada route OTP.

**F-SEMPURNA-04: Validasi tanggal periode pendaftaran per jalur**
Saat calon siswa memilih jalur pendaftaran, sistem tidak memeriksa apakah saat ini berada dalam periode pendaftaran jalur tersebut. Pengguna bisa memilih jalur Prestasi padahal periode pendaftarannya sudah tutup.

**F-SEMPURNA-05: Enkripsi NIK pada CalonSiswaExporter**
CalonSiswaExporter mengekspor kolom nik dan kk yang di model dikonfigurasi sebagai cast "encrypted". Perlu dipastikan nilai yang diekspor sudah terdekripsi dengan benar, bukan ciphertext.

### 6.2 Logika Bisnis

**F-SEMPURNA-06: Konsistensi cek calon_siswa di ListCalonSiswas**
Method getCalonSiswaRecord() menggunakan query where('nisn', Auth::user()->username), bukan where('user_id', Auth::id()). Ini berpotensi salah jika ada user non-calon_siswa dengan username yang sama dengan NISN seseorang. Seharusnya menggunakan user_id.

**F-SEMPURNA-07: Penanganan edge case isSuperAdmin dan isCalonSiswa**
Beberapa method di ListCalonSiswas menggunakan roles->first()->name yang akan error jika user tidak memiliki role apapun. Perlu diganti dengan hasRole() yang lebih aman.

**F-SEMPURNA-08: Pembatasan edit formulir berdasarkan periode**
Saat ini calon siswa diblokir mengedit formulir hanya berdasarkan status pendaftaran final. Belum ada pembatasan berdasarkan tanggal periode pendaftaran jalur yang dipilih. Setelah periode pendaftaran jalur berakhir, formulir seharusnya terkunci meski status masih "Diproses".

**F-SEMPURNA-09: Relasi calon_siswa di model CalonSiswa**
Model CalonSiswa memiliki relasi pimpinan(), ketua(), sekretaris(), dan bendahara() ke model terkait, tetapi tidak ada foreign key kolom-kolom tersebut di tabel calon_siswas. Relasi ini tidak akan berfungsi. Perlu dihapus dari model atau ditambahkan foreign key yang sesuai.

**F-SEMPURNA-10: Global scope tahun_aktif pada FormulirPrestasi**
FormulirPrestasi tidak memiliki kolom tahun_pendaftaran_id, namun relasinya ke CalonSiswa yang memiliki scope tahun_aktif. Saat query formulir prestasi melibatkan join ke calon_siswas, scope tahun_aktif dapat menyebabkan data lintas tahun tidak muncul. Perlu dipastikan withoutGlobalScopes digunakan konsisten di seluruh query terkait.

**F-SEMPURNA-11: Status formulir "Berkas Tidak Lengkap" bisa dihapus dari form edit**
Di CalonSiswaResource::form(), dropdown status_formulir untuk admin hanya menampilkan Diproses, Disetujui, dan Ditolak — menghilangkan "Berkas Tidak Lengkap". Namun di FormOptions::STATUS_FORMULIR, opsi ini ada. Perlu diseragamkan.

### 6.3 Antarmuka dan Pengalaman Pengguna

**F-SEMPURNA-12: Formulir.blade.php dalam kondisi dikomentari**
Seluruh konten view formulir.blade.php dibungkus dalam blok komentar Blade (@php ... @endphp dan HTML dalam --}}). Akibatnya, fitur cetak formulir tidak berfungsi. View ini perlu diaktifkan dan diuji.

**F-SEMPURNA-13: Penanganan kasus CalonSiswaFormTrait::getWilayahFields dengan prefix kosong**
Di getSekolahAsalForm(), method getWilayahFields('') dipanggil dengan string kosong sebagai prefix. Ini menghasilkan field name seperti "_negara_id" dengan underscore di depan. Perlu disesuaikan agar field name valid.

**F-SEMPURNA-14: ViewCalonSiswa::canPrintFormulir menggunakan getCalonSiswa()**
Method canPrintFormulir() dan canPrintKartuTes() memanggil getCalonSiswa() yang melakukan query where('nisn', Auth::user()->username). Saat admin membuka ViewCalonSiswa milik calon lain, metode ini akan mengembalikan null karena admin tidak punya NISN yang cocok, sehingga tombol cetak tidak muncul. Tombol cetak seharusnya selalu terlihat bagi admin tanpa pembatasan periode.

**F-SEMPURNA-15: Tailwind config path tidak sesuai**
Di vite.config.js, theme yang di-build adalah resources/css/filament/dashboard/theme.css. Di AdminPanelProvider, ->theme() mengarah ke asset publik css/filament/dashboard/theme.css, sementara ->viteTheme() menggunakan path yang sama. Namun di file tree awal, path yang tertera adalah resources/css/filament/admin/ dan public/css/filament/admin/. Setelah perubahan menjadi "dashboard", perlu dipastikan seluruh referensi path konsisten.

**F-SEMPURNA-16: Paginasi Sekolah dan SekolahAsal menggunakan nilai 0**
ListSekolahs dan ListSekolahAsals menggunakan paginationPageOptions([0]). Nilai 0 tidak valid sebagai ukuran halaman dan dapat menyebabkan error. Seharusnya menggunakan opsi seperti [10, 25, 50] atau menampilkan semua dengan cara yang benar.

### 6.4 Performa dan Arsitektur

**F-SEMPURNA-17: Cache::rememberForever berpotensi stale pada multi-instance**
Jika sistem dijalankan dengan multiple worker (Octane), cache flush melalui Cache::forget di satu event mungkin tidak langsung tersebar ke semua instance tergantung konfigurasi cache driver. Perlu dipastikan cache driver Redis digunakan dan konfigurasinya mendukung invalidasi lintas instance.

**F-SEMPURNA-18: once() di FormulirPrestasiResource tidak aman di Octane**
Fungsi once() Laravel menyimpan hasil di dalam request lifecycle. Namun di lingkungan Octane, jika request di-reuse antar pengguna, once() bisa mengembalikan hasil dari request sebelumnya. Perlu dievaluasi apakah once() aman digunakan di konteks ini atau perlu diganti dengan pendekatan yang lebih eksplisit.

**F-SEMPURNA-19: Tidak ada mekanisme cleanup Redis key yang kadaluarsa**
Meski TTL diset di setiap key OTP, belum ada mekanisme audit atau pembersihan untuk key yang mungkin tersisa karena kondisi race. Perlu dipastikan konfigurasi Redis menggunakan eviction policy yang tepat (allkeys-lru atau volatile-lru).

**F-SEMPURNA-20: Query N+1 pada CalonSiswaObserver::kirim()**
Di method kirim(), jika $model->user sudah di-load maka tidak ada masalah. Namun jika tidak, baris $model->user?->telepon akan memicu lazy load, lalu baris berikutnya $model->loadMissing('user') juga dipanggil yang mengakibatkan dua query untuk kasus yang sama. Perlu disederhanakan menjadi satu ekspresi.

### 6.5 Fitur yang Belum Diimplementasi

**F-SEMPURNA-21: Konfirmasi email belum digunakan**
User mengimplementasikan MustVerifyEmail, namun verifikasi dilakukan melalui OTP WhatsApp, bukan melalui link email Laravel standar. Method canAccessPanel() mengembalikan true tanpa kondisi, bukan memeriksa hasVerifiedEmail(). Ini desain yang disengaja tetapi perlu didokumentasikan agar tidak membingungkan saat maintenance.

**F-SEMPURNA-22: Fitur databaseNotifications dikomentari**
Di AdminPanelProvider, ->databaseNotifications() dikomentari. Jika notifikasi in-app diperlukan di masa depan, tabel notifications sudah ada di migrasi. Perlu keputusan apakah fitur ini akan diaktifkan.

**F-SEMPURNA-23: Tidak ada halaman pengumuman hasil yang dapat diakses publik**
Hasil seleksi hanya dapat dilihat melalui login ke dashboard. Tidak ada halaman publik untuk mengecek hasil berdasarkan nomor pendaftaran atau NISN tanpa login. Fitur ini umum pada sistem PPDB dan perlu dipertimbangkan.

**F-SEMPURNA-24: Impor data belum memvalidasi tahun pendaftaran aktif sebelum update**
CalonSiswaImporter::resolveRecord() menggunakan withoutGlobalScopes() dan firstOrNew berdasarkan NISN. Ini berarti bisa mengupdate data calon siswa dari tahun pendaftaran berbeda tanpa konfirmasi. Perlu ditambahkan filter atau konfirmasi bahwa record yang diupdate adalah dari tahun pendaftaran aktif.

**F-SEMPURNA-25: Tidak ada validasi unik nomor pendaftaran lintas soft delete**
Nomor pendaftaran memiliki unique constraint di database. Namun jika record di-soft delete dan calon siswa mendaftar ulang, generateNomorPendaftaran() menggunakan withoutGlobalScopes() yang menyertakan soft deleted records dalam query orderByDesc. Ini sudah benar. Tetapi jika record soft deleted kemudian di-restore, ada potensi konflik nomor pendaftaran jika setelah soft delete sudah ada nomor dengan urutan yang sama. Perlu diverifikasi.

```

---

### ./tailwind.config.js

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

### ./vite.config.js

```javascript
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/filament/dashboard/theme.css",
                "vendor/andreia/filament-nord-theme/resources/css/theme.css",
            ],
            refresh: true,
        }),
    ],
});

```

---

