# Laravel Project Blueprint — PPDB MTsN 1 Pandeglang

> Auto-generated. Berisi file-file inti yang dibutuhkan untuk membangun ulang project.
> File boilerplate, vendor, compiled assets, dan cache **tidak disertakan**.

## 🗂️ Included File Tree

```
app/Models/Anggota.php
app/Models/Bendahara.php
app/Models/CalonSiswa.php
app/Models/Ekstrakurikuler.php
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
app/Filament/Resources/SekolahAsalResource/Pages/CreateSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/EditSekolahAsal.php
app/Filament/Resources/SekolahAsalResource/Pages/ListSekolahAsals.php
app/Filament/Resources/SekolahAsalResource/Pages/ViewSekolahAsal.php
app/Filament/Resources/SekolahAsalResource.php
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
app/Filament/Pages/Auth/EditProfileCustom.php
app/Filament/Pages/Auth/ForgotPasswordCustom.php
app/Filament/Pages/Auth/LoginCustom.php
app/Filament/Pages/Auth/NewPassword.php
app/Filament/Pages/Auth/RegisterCustom.php
app/Filament/Pages/Auth/ResetPasswordOtp.php
app/Filament/Pages/Auth/VerifikasiOtp.php
app/Filament/Exports/CalonSiswaExporter.php
app/Filament/Imports/CalonSiswaImporter.php
app/Providers/Filament/AdminPanelProvider.php
app/Providers/AppServiceProvider.php
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
routes/web.php
routes/api.php
routes/console.php
resources/views/formulir.blade.php
resources/views/kartu-tes.blade.php
resources/views/skl.blade.php
resources/views/filament/pages/auth/forgot-password-custom.blade.php
resources/views/filament/pages/auth/new-password.blade.php
resources/views/filament/pages/auth/reset-password-otp.blade.php
resources/views/filament/pages/auth/verifikasi-otp.blade.php
config/filament-shield.php
config/permission.php
config/services.php
bootstrap/app.php
composer.json
vite.config.js
tailwind.config.js
package.json
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
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;

class CalonSiswa extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'user_id',
        'tahun_pendaftaran_id',
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
        'no_kip',
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
        'kelas_id',
        'tes_sesi',
        'tes_ruang',
        'tes_akademik',
        'tes_praktik',
        'kepemilikan_rumah',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
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

    // -----------------------------------------------------------------------
    // Global Scopes
    // -----------------------------------------------------------------------

    protected static function booted(): void
    {
        // Scope 1: Isolasi per tahun pendaftaran aktif.
        // Dapat dinonaktifkan via: CalonSiswa::withoutGlobalScope('tahun_aktif')
        static::addGlobalScope('tahun_aktif', function (Builder $builder) {
            $tahun = TahunPendaftaran::where('status', 'Aktif')->first();
            if ($tahun) {
                $builder->where('tahun_pendaftaran_id', $tahun->id);
            }
        });

        // Scope 2: calon_siswa hanya bisa lihat data milik sendiri.
        // Role lain (admin, panitia, verifikator, super_admin) lihat semua.
        // Dapat dinonaktifkan via: CalonSiswa::withoutGlobalScope('milik_sendiri')
        static::addGlobalScope('milik_sendiri', function (Builder $builder) {
            if (auth()->check() && auth()->user()->hasRole('calon_siswa')) {
                $builder->where('user_id', auth()->id());
            }
        });
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

    // Negara
    public function negara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'negara_id');
    }

    public function siswaNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'siswa_negara_id');
    }

    public function ibuNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'ibu_negara_id');
    }

    public function ayahNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'ayah_negara_id');
    }

    public function waliNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class, 'wali_negara_id');
    }

    // Provinsi
    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    public function siswaProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'siswa_provinsi_id');
    }

    public function ibuProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'ibu_provinsi_id');
    }

    public function ayahProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'ayah_provinsi_id');
    }

    public function waliProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'wali_provinsi_id');
    }

    // Kabupaten
    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }

    public function siswaKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'siswa_kabupaten_id');
    }

    public function ibuKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'ibu_kabupaten_id');
    }

    public function ayahKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'ayah_kabupaten_id');
    }

    public function waliKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class, 'wali_kabupaten_id');
    }

    // Kecamatan
    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }

    public function siswaKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'siswa_kecamatan_id');
    }

    public function ibuKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'ibu_kecamatan_id');
    }

    public function ayahKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'ayah_kecamatan_id');
    }

    public function waliKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'wali_kecamatan_id');
    }

    // Kelurahan
    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id');
    }

    public function siswaKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'siswa_kelurahan_id');
    }

    public function ibuKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'ibu_kelurahan_id');
    }

    public function ayahKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'ayah_kelurahan_id');
    }

    public function waliKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class, 'wali_kelurahan_id');
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

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class, 'prestasi_id');
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

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function getFilamentAvatarUrl(): ?string
    {
        $peserta = CalonSiswa::first();

        return $this->avatar
            ? asset('storage/'.($this->avatar ?? $peserta->berkas_foto))
            : null;
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

## 🎮 Controllers

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
            . "Kode OTP reset password PPDB MTsN 1 Pandeglang Anda:\n\n"
            . "*{$otp}*\n\n"
            . 'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send($user->telepon, $message);

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

        app(WhatsAppService::class)->send($user->telepon, $message);

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
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Pages\Auth\Register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rules\Password;

class RegisterCustom extends Register
{
    use HasCustomLayout;

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

    /**
     * Override register() — intercept setelah user dibuat,
     * kirim OTP, redirect ke halaman verifikasi (bukan dashboard).
     */
    public function register(): ?RegistrationResponse
    {
        $data = $this->form->getState();

        $user = $this->getUserModel()::create($data);

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        $ttl = 300; // 5 menit

        Redis::setex("otp:{$user->id}", $ttl, $otp);

        $message = "Halo {$user->name},\n\n"
            ."Kode OTP verifikasi akun PPDB MTsN 1 Pandeglang Anda:\n\n"
            ."*{$otp}*\n\n"
            .'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send($user->telepon, $message);

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
use Illuminate\Validation\Rules\Password;

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

        if ($data['otp'] !== $storedOtp) {
            Notification::make()->title('Kode OTP tidak valid.')->body('Periksa kembali kode yang dikirim ke WhatsApp Anda.')->danger()->send();

            return;
        }

        Redis::del("reset_otp:{$userId}");
        Redis::setex("reset_token:{$userId}", 900, 1);

        Notification::make()->title('OTP valid. Silakan buat password baru.')->success()->send();

        // Redirect ke halaman buat password baru (page terpisah)
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

        $message = "Halo {$user->name},\n\n"
            ."Kode OTP baru reset password PPDB MTsN 1 Pandeglang Anda:\n\n"
            ."*{$otp}*\n\n"
            .'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send($user->telepon, $message);

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
        // Guard: kalau tidak ada session otp_user_id, tolak akses
        if (! session('otp_user_id')) {
            $this->redirect(filament()->getLoginUrl());

            return;
        }

        // Guard: kalau user sudah terverifikasi
        $user = User::find(session('otp_user_id'));
        if ($user?->hasVerifiedEmail()) {
            $this->redirect(filament()->getUrl());

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

    public function verifikasi(): void
    {
        $data = $this->form->getState();
        $userId = session('otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()
                ->title('Sesi tidak valid. Silakan daftar ulang.')
                ->danger()
                ->send();
            $this->redirect(filament()->getLoginUrl());

            return;
        }

        $storedOtp = Redis::get("otp:{$userId}");

        if (! $storedOtp) {
            Notification::make()
                ->title('Kode OTP sudah kadaluarsa.')
                ->body('Silakan minta kode OTP baru.')
                ->danger()
                ->send();

            return;
        }

        if ($data['otp'] !== $storedOtp) {
            Notification::make()
                ->title('Kode OTP tidak valid.')
                ->body('Periksa kembali kode yang dikirim ke WhatsApp Anda.')
                ->danger()
                ->send();

            return;
        }

        // OTP valid — aktifkan akun
        $user->forceFill([
            'email_verified_at' => now(),
            'status' => 'Aktif',
        ])->save();

        Redis::del("otp:{$userId}");
        Redis::del("otp_cooldown:{$userId}");
        session()->forget('otp_user_id');

        // Login otomatis
        Auth::login($user);

        Notification::make()
            ->title('Akun berhasil diverifikasi!')
            ->body('Selamat datang di PPDB MTsN 1 Pandeglang.')
            ->success()
            ->send();

        // Redirect ke formulir pendaftaran
        $this->redirect(filament()->getUrl());
    }

    public function resend(): void
    {
        $userId = session('otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()
                ->title('Sesi tidak valid.')
                ->danger()
                ->send();

            return;
        }

        // Cek cooldown
        $cooldownKey = "otp_cooldown:{$userId}";
        if (Redis::exists($cooldownKey)) {
            $ttl = Redis::ttl($cooldownKey);
            Notification::make()
                ->title("Tunggu {$ttl} detik sebelum meminta OTP baru.")
                ->warning()
                ->send();

            return;
        }

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        Redis::setex("otp:{$userId}", 300, $otp);
        Redis::setex($cooldownKey, 60, 1); // cooldown 60 detik

        $message = "Halo {$user->name},\n\n"
            ."Kode OTP baru verifikasi akun PPDB MTsN 1 Pandeglang Anda:\n\n"
            ."*{$otp}*\n\n"
            .'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send($user->telepon, $message);

        Notification::make()
            ->title('Kode OTP baru telah dikirim ke WhatsApp Anda.')
            ->success()
            ->send();
    }

    public function getTitle(): string
    {
        return 'Verifikasi OTP';
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
                ->rules(['max:50']),
            ImportColumn::make('tes_ruang')
                ->label('Ruang Tes')
                ->rules(['max:50']),
            ImportColumn::make('tes_akademik')
                ->label('Tanggal Tes Akademik')
                ->rules(['datetime']),
            ImportColumn::make('tes_praktik')
                ->label('Tanggal Tes Praktik')
                ->rules(['datetime']),
            ImportColumn::make('bobot_nilai_akademik')
                ->label('Bobot Nilai Akademik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('bobot_nilai_praktik')
                ->label('Bobot Nilai Praktik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('nilai_akademik')
                ->label('Nilai Akademik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('nilai_praktik')
                ->label('Nilai Praktik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('status_pendaftaran')
                ->label('Status Pendaftaran'),
            ImportColumn::make('kelas.nama')
                ->label('Kelas')
                ->relationship('kelas')
                ->rules(['exists:kelas,nama']),
        ];
    }

    public function resolveRecord(): ?CalonSiswa
    {
        return CalonSiswa::firstOrNew([
            // Update existing records, matching them by `$this->data['column_name']`
            'nisn' => $this->data['nisn'],
        ]);

        return new CalonSiswa;
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your calon siswa import has completed and '.number_format($import->successful_rows).' '.str('row')->plural($import->successful_rows).' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }
}

```

---

## ⚙️ Filament Panel Provider

### 📄 `./app/Providers/Filament/AdminPanelProvider.php`

```php
<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\EditProfileCustom;
use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\LoginCustom;
use App\Filament\Pages\Auth\RegisterCustom;
use App\Filament\Resources\CalonSiswaResource\Widgets\FormulirOverview;
use App\Filament\Resources\InformasiResource\Widgets\InformasiPublished;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Widgets\UserRegisters;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Carbon\Carbon;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        // Variabel default untuk halaman registrasi
        $registerClass = $this->handleRegistrationRedirect();

        return $panel
            ->id('admin')
            ->path('')
            ->default()
            ->spa()
            ->topNavigation()
            ->login(LoginCustom::class)
            ->registration($registerClass)
            ->passwordReset(ForgotPasswordCustom::class)
            ->emailVerification()
            ->profile(EditProfileCustom::class)
            ->globalSearch(false)
            ->maxContentWidth(MaxWidth::Full)
            ->unsavedChangesAlerts()
            ->databaseNotifications()
            ->defaultThemeMode(ThemeMode::Dark)
            ->favicon(asset('/favicon.ico'))
            ->darkModeBrandLogo(asset('/img/brand-darkmode.png'))
            ->brandLogo(asset('/img/brand-lightmode.png'))
            ->brandLogoHeight('2.6rem')
            ->colors([
                'primary' => Color::Green,
            ])
            ->userMenuItems([
                MenuItem::make()
                    ->label('Manajemen Pengguna')
                    ->url(fn(): string => UserResource::getUrl())
                    ->icon('heroicon-o-identification')
                    // ->visible(fn() => Auth::user()?->roles?->first()?->name === 'super_admin'),
                    ->visible(fn() => Auth::user()?->roles?->where('name', 'super_admin')->first() !== null),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // AccountWidget::class,
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

    /**
     * Fungsi untuk menangani redirect berdasarkan tanggal pendaftaran
     * Aktifkan setelah proses migrasi database
     */
    protected function handleRegistrationRedirect(): string
    {
        try {
            // Cek apakah koneksi database tersedia
            if (! Schema::hasTable('tahun_pendaftarans')) {
                // Jika tabel tidak ada, arahkan langsung ke LoginCustom
                return LoginCustom::class;
            }

            $tahunPendaftaran = DB::table('tahun_pendaftarans')
                ->where('status', 'Aktif')
                ->first();

            if (! $tahunPendaftaran) {
                // Jika data tidak ditemukan, arahkan ke LoginCustom
                return LoginCustom::class;
            }

            // Parsing tanggal pendaftaran
            $startDate = Carbon::createFromFormat('Y-m-d H:i:s', $tahunPendaftaran->tanggal_ppdb_mulai);
            $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $tahunPendaftaran->tanggal_ppdb_selesai);
            $currentDate = Carbon::now();

            // Cek apakah tanggal sekarang berada di dalam rentang pendaftaran
            if ($currentDate->lt($startDate) || $currentDate->gt($endDate)) {
                // Jika di luar rentang, arahkan ke LoginCustom
                return LoginCustom::class;
            }
        } catch (\Exception $e) {
            // Tangani error (misalnya, masalah parsing tanggal atau database tidak tersedia)
            Log::error('Error memproses tanggal atau database: ' . $e->getMessage());

            return LoginCustom::class;
        }

        return RegisterCustom::class;
    }
}

```

---

## ⚙️ App Service Provider

### 📄 `./app/Providers/AppServiceProvider.php`

```php
<?php

namespace App\Providers;

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
                'Berkas Tidak Lengkap',
                'Diverifikasi',
                'Tidak Diterima',
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan',
            ])->default('Diproses')->nullable();
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

## 🛣️ Routes

### 📄 `./routes/web.php`

```php
<?php

use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\NewPassword;
use App\Filament\Pages\Auth\ResetPasswordOtp;
use App\Filament\Pages\Auth\VerifikasiOtp;
use Illuminate\Support\Facades\Route;

// Semua route auth custom — accessible tanpa login,
// diproteksi via session check di masing-masing Page::mount()
Route::middleware('web')->group(function () {
    Route::get('/verifikasi-otp', VerifikasiOtp::class)
        ->name('otp.verifikasi');

    Route::get('/lupa-password', ForgotPasswordCustom::class)
        ->name('otp.forgot-password');

    Route::get('/reset-password', ResetPasswordOtp::class)
        ->name('otp.reset-password');

    Route::get('/new-password', NewPassword::class)
        ->name('otp.new-password');
});

```

---

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

## 🖼️ Views (Custom)

### 📄 `./resources/views/formulir.blade.php`

```blade
<?php
use App\Models\Ketua;
use App\Models\Sekolah;
use App\Models\Pimpinan;
use App\Models\CalonSiswa;
use App\Models\Sekretaris;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Storage;

$calonSiswa = CalonSiswa::first(); // Pastikan deklarasi dilakukan lebih awal

$jalurPendaftaranPrestasi = in_array(optional(JalurPendaftaran::find(optional($calonSiswa)->jalur_pendaftaran_id))->nama, ['Prestasi']);

$instansi = Sekolah::first();
$tahunPendaftaran = TahunPendaftaran::where('status', 'Aktif')->first();
$sekretaris = Sekretaris::where('status', 'Aktif')->first();
$ketua = Ketua::where('status', 'Aktif')->first();
$pimpinan = Pimpinan::where('status', 'Aktif')->first();
$jenisKelamin = $record->jenis_kelamin === 'Pria' ? 'Laki-laki' : 'Perempuan';

?>

<table width="100%">
    <tr>
        <td align="center">
            <img src="{{ optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo_institusi)
                : Storage::url(optional($instansi)->logo ?? '') }}"
                alt="Logo Institusi/Instansi" width="90px">
        </td>

        <td align="center">
            <b> KEMENTERIAN AGAMA REPUBLIK INDONESIA </b> <br>
            <b> KANTOR KEMENTERIAN AGAMA KABUPATEN PANDEGLANG </b> <br>
            <b> MADRASAH TSANAWIYAH NEGERI 1 PANDEGLANG </b> <br>
            <small>
                {{ ucwords(strtolower($instansi->alamat)) ?? '' }}
                {{ ucwords(strtolower($instansi->kelurahan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kecamatan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }} -
                {{ ucwords(strtolower($instansi->provinsi->nama)) ?? '' }}
            </small>
            <br>
            <small> Website: {{ $instansi->website ?? 'https://mtsn1pandeglang.sch.id' }} Email:
                {{ $instansi->email ?? 'adm@mtsn1pandeglang.sch.id' }}
            </small> <br>
        </td>

        <td align="center">
            <img src="{{ optional($instansi)->logo && optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo)
                : (optional($instansi)->logo ?:
                    '') }}"
                alt="Logo Instansi" width="90px">
        </td>
    </tr>
</table>
<hr style="border: 1px solid">
<table width="100%">
    <tr>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="4">
            <b>FORMULIR PENDAFTARAN</b>
        </td>
    </tr>

    <tr>
        <td align="center" colspan="4">
            <b>TAHUN PELAJARAN {{ $tahunPendaftaran->nama ?? '' }}</b>
        </td>
    </tr>

    <tr>
        <td>
            <br>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            <b>DATA PESERTA</b>
        </td>
    </tr>

    <tr>
        <td width="170px">
            <span>Nama Lengkap</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <strong>
                {{ ucwords(strtoupper($record->nama)) ?? '' }}
            </strong>
        </td>
        <td rowspan="9" width="140px" style="align-content: flex-start">
            <img src="{{ Storage::url($record->berkas_foto ?? '') }}" alt="Foto">
        </td>
    </tr>

    <tr>
        <td>
            <span>Jalur Pendaftaran</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->jalurPendaftaran->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>NISN</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->nisn ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tempat, Tanggal Lahir</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->tempat_lahir)) ?? '' }},
            {{ ucwords(strtolower(date('d F Y', strtotime($record->tanggal_lahir)))) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Asal Sekolah</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtoupper($record->sekolahAsal->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tahun Lulus</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tahun_lulus ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Jenis Lelamin</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $jenisKelamin ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Golongan Darah</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->golongan_darah ?? '' }}
        </td>
    </tr>
    <tr>
        <td>
            <span>Agama</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->agama)) ?? '' }}
        </td>
    </tr>
    <tr>
        <td>
            <span>Alamat Lengkap</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td colspan="2">
            {{ ucwords(strtolower($record->siswa_alamat)) ?? '' }},
            {{ ucwords(strtolower($record->siswaKelurahan->nama)) ?? '' }},
            {{ ucwords(strtolower($record->siswaKecamatan->nama)) ?? '' }},
            {{ ucwords(strtolower($record->siswaKabupaten->nama)) ?? '' }} -
            {{ ucwords(strtolower($record->siswaProvinsi->nama)) ?? '' }}
        </td>
    </tr>
</table>
<br>
@if ($jalurPendaftaranPrestasi)
    <table width="100%" style="border: 1px solid;">
        <thead style="border: 1px solid;">
            <td colspan="5" align="center">
                <span>
                    <strong>
                        DATA PRESTASI
                    </strong>
                </span>
            </td>
        </thead>
        <tr style="border: 1px solid;">
            <th style="border: 1px solid;">
                <span>
                    <strong>
                        Jenis
                    </strong>
                </span>
            </th>
            <th style="border: 1px solid;">
                <span>
                    <strong>
                        Nama
                    </strong>
                </span>
            </th>
            <th style="border: 1px solid;">
                <span>
                    <strong>
                        Tingkat
                    </strong>
                </span>
            </th style="border: 1px solid;">
            <th style="border: 1px solid;">
                <span>
                    <strong>
                        Kategori
                    </strong>
                </span>
            </th>
            <th style="border: 1px solid;">
                <span>
                    <strong>
                        Peringkat
                    </strong>
                </span>
            </th>
        </tr>
        <tr style="border: 1px solid center;">
            <td style="border: 1px solid center;">{{ $record->prestasi->jenis }}</td>
            <td style="border: 1px solid center;">{{ $record->prestasi->nama }}</td>
            <td style="border: 1px solid center;">{{ $record->prestasi->tingkat }}</td>
            <td style="border: 1px solid center;">{{ $record->prestasi->kategori }}</td>
            <td style="border: 1px solid center;">{{ $record->prestasi->peringkat }}</td>
        </tr>
    </table>
    <br>
@endif

<table width="100%">
    <tr>
        <td width="70%">
        </td>
        <td>
            <span>
                {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }},
                {{ date('d F Y', strtotime($record->updated_at)) ?? '' }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                Ketua,
            </span>
        </td>
        <td>
            <span>
                Sekretaris,
            </span>
        </td>
    </tr>
    <tr height="90px">
        <td>
            <span>
                <img src="{{ Storage::url($ketua->berkas_tte) ?? null }}" alt="TTE Ketua" width="90px">
                {{-- <img src="{{ $ketua->berkas_tte ? Storage::url($ketua->berkas_tte) : null }}" alt="TTE Ketua"
                    width="90px"> --}}
            </span>
        </td>
        <td>
            <span>
                <img src="{{ Storage::url($sekretaris->berkas_tte) ?? null }}" alt="TTE Sekretaris" width="90px">
                {{-- <img src="{{ $sekretaris->berkas_tte ? Storage::url($sekretaris->berkas_tte) : null }}"
                    alt="TTE Sekretaris" width="90px"> --}}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                <strong>
                    {{ $ketua->nama ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $sekretaris->nama ?? '' }}
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                NIP {{ $ketua->nip ?? '' }}
            </span>
        </td>
        <td>
            <span>
                NIP {{ $sekretaris->nip ?? '' }}
            </span>
        </td>
    </tr>
</table>

```

---

### 📄 `./resources/views/kartu-tes.blade.php`

```blade
<?php
use Carbon\Carbon;
use App\Models\Ketua;
use App\Models\Sekolah;
use App\Models\Pimpinan;
use App\Models\Sekretaris;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Storage;

$instansi = Sekolah::first();
$tahunPendaftaran = TahunPendaftaran::where('status', 'Aktif')->first();
$sekretaris = Sekretaris::where('status', 'Aktif')->first();
$ketua = Ketua::where('status', 'Aktif')->first();
$pimpinan = Pimpinan::where('status', 'Aktif')->first();
$jenisKelamin = $record->jenis_kelamin === 'Pria' ? 'Laki-laki' : 'Perempuan';

?>

<table width="100%">
    <tr>
        <td align="center">
            <img src="{{ optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo_institusi)
                : Storage::url(optional($instansi)->logo ?? '') }}"
                alt="Logo Institusi/Instansi" width="90px">
        </td>

        <td align="center">
            <b> KEMENTERIAN AGAMA REPUBLIK INDONESIA </b> <br>
            <b> KANTOR KEMENTERIAN AGAMA KABUPATEN PANDEGLANG </b> <br>
            <b> MADRASAH TSANAWIYAH NEGERI 1 PANDEGLANG </b> <br>
            <small>
                {{ ucwords(strtolower($instansi->alamat)) ?? '' }}
                {{ ucwords(strtolower($instansi->kelurahan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kecamatan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }} -
                {{ ucwords(strtolower($instansi->provinsi->nama)) ?? '' }}
            </small>
            <br>
            <small> Website: {{ $instansi->website ?? 'https://mtsn1pandeglang.sch.id' }} Email:
                {{ $instansi->email ?? 'adm@mtsn1pandeglang.sch.id' }}
            </small> <br>
        </td>

        <td align="center">
            <img src="{{ optional($instansi)->logo && optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo)
                : (optional($instansi)->logo ?:
                    '') }}"
                alt="Logo Instansi" width="90px">
        </td>
    </tr>
</table>
<hr style="border: 1px solid">
<table width="100%">
    <tr>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="4">
            <b>KARTU TES PRAKTIK DAN AKADEMIK</b>
        </td>
    </tr>

    <tr>
        <td>
            <br>
        </td>
    </tr>
</table>

{{-- Tabel Identitas --}}
<table width="100%">
    <tr>
        <td colspan="4">
            <span>
                <strong>
                    DATA PESERTA
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td width="170px">
            <span>Nama Lengkap</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <strong>
                {{ ucwords(strtoupper($record->nama)) ?? '' }}
            </strong>
        </td>
        <td rowspan="9" width="140px" style="align-content: flex-start">
            <img src="{{ Storage::url($record->berkas_foto ?? '') }}" alt="Foto">
        </td>
    </tr>

    <tr>
        <td>
            <span>Jalur Pendaftaran</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->jalurPendaftaran->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>NISN</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->nisn ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tempat, Tanggal Lahir</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->tempat_lahir)) ?? '' }},
            {{ ucwords(strtolower(date('d F Y', strtotime($record->tanggal_lahir)))) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Asal Sekolah</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtoupper($record->sekolahAsal->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tahun Lulus</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tahun_lulus ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Jenis Lelamin</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $jenisKelamin ?? '' }}
        </td>
    </tr>
</table>

{{-- Tabel Tes --}}
<table width="100%">
    <tr>
        <td colspan=6>
            <br>
        </td>
    </tr>
    <tr>
        <td colspan=6>
            <span>
                <strong>
                    JADWAL TES
                </strong>
            </span>
        </td>
    <tr>
        <td colspan="3">
            <span>
                <strong>
                    TES AKADEMIK
                </strong>
            </span>
        </td>
        <td colspan="3">
            <span>
                <strong>
                    TES PRAKTIK
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td width="15%">
            <span>Sesi</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_sesi ?? '' }}
        </td>
        <td width="15%">
            <span>Sesi</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_sesi ?? '' }}
        </td>
    </tr>
    <tr>
        <td>
            <span>Ruang</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_ruang ?? '' }}
        </td>
        <td>
            <span>Ruang</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_ruang ?? '' }}
        </td>
    </tr>
    <tr>
        <td>
            <span>Hari, Tanggal</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ Carbon::parse($record->tes_akademik ?? '')->translatedFormat('l, d F Y') }}
            </span>
        </td>
        <td>
            <span>Hari, Tanggal</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ Carbon::parse($record->tes_praktik ?? '')->translatedFormat('l, d F Y') }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>Waktu</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ date('H:i', strtotime($record->tes_akademik ?? '')) . ' WIB' }}
            </span>
        </td>
        <td>
            <span>Waktu</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ date('H:i', strtotime($record->tes_praktik ?? '')) . ' WIB' }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                Username
            </span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $record->nisn ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
    </tr>
    <tr>
        <td>
            <span>Password</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $record->nik ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
    </tr>
    <tr>
        <td colspan=6>
            <br>
        </td>
    </tr>
</table>

{{-- Tabel Tanda Tangan --}}
<table width="100%">
    <tr>
        <td width="70%">
        </td>
        <td>
            <span>
                {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? 'Pandeglang' }},
                {{ date('d F Y', strtotime(optional($tahunPendaftaran)->tanggal_penerbitan_kartu_tes_mulai)) ?? '' }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                Ketua,
            </span>
        </td>
        <td>
            <span>
                Sekretaris,
            </span>
        </td>
    </tr>
    <tr height="90px">
        <td>
            <span>
                <img src="{{ $ketua->berkas_tte ? Storage::url($ketua->berkas_tte) : null }}" alt="TTE Ketua"
                    width="90px">
            </span>
        </td>
        <td>
            <span>
                <img src="{{ $sekretaris->berkas_tte ? Storage::url($sekretaris->berkas_tte) : '' }}"
                    alt="TTE Sekretaris" width="90px">
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                <strong>
                    {{ $ketua->nama ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $sekretaris->nama ?? '' }}
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                NIP {{ $ketua->nip ?? '' }}
            </span>
        </td>
        <td>
            <span>
                NIP {{ $sekretaris->nip ?? '' }}
            </span>
        </td>
    </tr>
</table>

```

---

### 📄 `./resources/views/skl.blade.php`

```blade
<?php
use Carbon\Carbon;
use App\Models\Ketua;
use App\Models\Sekolah;
use App\Models\Pimpinan;
use App\Models\CalonSiswa;
use App\Models\Sekretaris;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Storage;

$record = CalonSiswa::first(); // Pastikan deklarasi dilakukan lebih awal

$jalurPendaftaranPrestasi = in_array(optional(JalurPendaftaran::find(optional($record)->jalur_pendaftaran_id))->nama, ['Prestasi']);

$instansi = Sekolah::first();
$tahunPendaftaran = TahunPendaftaran::where('status', 'Aktif')->first();
$sekretaris = Sekretaris::where('status', 'Aktif')->first();
$ketua = Ketua::where('status', 'Aktif')->first();
$pimpinan = Pimpinan::where('status', 'Aktif')->first();
$jenisKelamin = $record->jenis_kelamin === 'Pria' ? 'Laki-laki' : 'Perempuan';
?>

<table width="100%">
    <tr>
        <td align="center">
            <img src="{{ optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo_institusi)
                : Storage::url(optional($instansi)->logo ?? '') }}"
                alt="Logo Institusi/Instansi" width="90px">
        </td>

        <td align="center">
            <b> KEMENTERIAN AGAMA REPUBLIK INDONESIA </b> <br>
            <b> KANTOR KEMENTERIAN AGAMA KABUPATEN PANDEGLANG </b> <br>
            <b> MADRASAH TSANAWIYAH NEGERI 1 PANDEGLANG </b> <br>
            <small>
                {{ ucwords(strtolower($instansi->alamat)) ?? '' }}
                {{ ucwords(strtolower($instansi->kelurahan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kecamatan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }} -
                {{ ucwords(strtolower($instansi->provinsi->nama)) ?? '' }}
            </small>
            <br>
            <small> Website: {{ $instansi->website ?? 'https://mtsn1pandeglang.sch.id' }} Email:
                {{ $instansi->email ?? 'adm@mtsn1pandeglang.sch.id' }}
            </small> <br>
        </td>

        <td align="center">
            <img src="{{ optional($instansi)->logo && optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo)
                : (optional($instansi)->logo ?:
                    '') }}"
                alt="Logo Instansi" width="90px">
        </td>
    </tr>
</table>
<hr style="border: 1px solid">
<table width="100%">
    <tr>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="4">
            <b>SURAT KEPUTUSAN KELULUSAN PPDBM</b>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="4">
            <span>Nomor : {{ $instansi->nomor_surat ?? '' }}</span>
        </td>
    </tr>

    <tr>
        <td>
            <br>
        </td>
    </tr>
</table>

<span style="text-align: justify">
    @if (Carbon::now()->between(Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai),
            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)))
        <p>
            Berdasarkan hasil <b>Sidang Panitia Penerimaan Peserta Didik Baru Madrasah (PPDBM)</b> Tahun Pelajaran
            {{ $tahunPendaftaran->nama ?? '' }} yang mengacu pada hasil Verifikasi Berkas Prestasi dan atau Tes Hafalan
            Al-Quran, memutuskan:
        </p>
    @else
        <p>
            Berdasarkan hasil <b>Sidang Panitia Penerimaan Peserta Didik Baru Madrasah (PPDBM)</b> Tahun Pelajaran
            {{ $tahunPendaftaran->nama ?? '' }} yang mengacu pada hasil Tes Akademik, Praktik Ibadah, dan Baca Tulis
            Al-Qur'an (BTQ), memutuskan:
        </p>
    @endif
</span>
{{-- Tabel Identitas --}}
<table width="100%">
    <tr>
        <td width="170px">
            <span>Nama Lengkap</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <strong>
                {{ ucwords(strtoupper($record->nama)) ?? '' }}
            </strong>
        </td>
        <td rowspan="9" width="140px" style="align-content: flex-start">
            <img src="{{ Storage::url($record->berkas_foto ?? '') }}" alt="Foto">
        </td>
    </tr>

    <tr>
        <td>
            <span>Jalur Pendaftaran</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->jalurPendaftaran->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>NISN</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->nisn ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tempat, Tanggal Lahir</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->tempat_lahir)) ?? '' }},
            {{ ucwords(strtolower(date('d F Y', strtotime($record->tanggal_lahir)))) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Asal Sekolah</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtoupper($record->sekolahAsal->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tahun Lulus</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tahun_lulus ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Jenis Lelamin</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $jenisKelamin ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Status Pendaftaran</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <b>{{ ucwords(strtoupper($record->status_pendaftaran)) ?? '' }}</b>
        </td>
    </tr>

</table>

<span style="text-align: justify">
    <p>
        Demikian Surat Keputusan ini kami sampaikan untuk dapat ditindaklanjuti sebagaimana mestinya.
    </p>
</span>

<table width="100%">
    <tr>
        <td width="70%">
        </td>
        <td>
            <span>
                {{-- Prestasi --}}
                @if (Carbon::now()->between(Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai),
                        Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)))
                    {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? 'Pandeglang' }},
                    {{ date('d F Y', strtotime(optional($tahunPendaftaran)->tanggal_pengumuman_jalur_prestasi_mulai)) ?? '' }}
                    {{-- Reguler --}}
                @elseif (Carbon::now()->between(Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai),
                        Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)))
                    {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? 'Pandeglang' }},
                    {{ date('d F Y', strtotime(optional($tahunPendaftaran)->tanggal_pengumuman_jalur_reguler_mulai)) ?? '' }}
                    {{-- Afirmasi --}}
                @elseif (Carbon::now()->between(Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai),
                        Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)))
                    {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? 'Pandeglang' }},
                    {{ date('d F Y', strtotime(optional($tahunPendaftaran)->tanggal_pengumuman_jalur_afirmasi_mulai)) ?? '' }}
                    {{-- Zonasi --}}
                @elseif (Carbon::now()->between(Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai),
                        Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)))
                    {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? 'Pandeglang' }},
                    {{ date('d F Y', strtotime(optional($tahunPendaftaran)->tanggal_pengumuman_jalur_zonasi_mulai)) ?? '' }}
                    {{-- Mutasi --}}
                @elseif (Carbon::now()->between(Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai),
                        Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)))
                    {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? 'Pandeglang' }},
                    {{ date('d F Y', strtotime(optional($tahunPendaftaran)->tanggal_pengumuman_jalur_mutasi_mulai)) ?? '' }}
                @endif
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                Ketua,
            </span>
        </td>
        <td>
            <span>
                Sekretaris,
            </span>
        </td>
    </tr>
    <tr height="90px">
        <td>
            <span>
                <img src="{{ $ketua->berkas_tte ? Storage::url($ketua->berkas_tte) : null }}" alt="TTE Ketua"
                    width="90px">
            </span>
        </td>
        <td>
            <span>
                <img src="{{ $sekretaris->berkas_tte ? Storage::url($sekretaris->berkas_tte) : null }}"
                    alt="TTE Sekretaris" width="90px">
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                <strong>
                    {{ $ketua->nama ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $sekretaris->nama ?? '' }}
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                NIP {{ $ketua->nip ?? '' }}
            </span>
        </td>
        <td>
            <span>
                NIP {{ $sekretaris->nip ?? '' }}
            </span>
        </td>
    </tr>
</table>

<table border="1" width="100%">
    <tr align="center">
        <td>
            Mengetahui,
        </td>
    </tr>
    <tr align="center">
        <td>
            <span>
                Kepala {{ ucwords(strtolower($instansi->nama)) ?? 'Madrasah Tsanawiyah Negeri 1 Pandeglang' }},
            </span>
        </td>
    </tr>
    <tr align="center" height="90px">
        <td>
            <span>
                <img src="{{ $pimpinan->berkas_tte ? Storage::url($pimpinan->berkas_tte) : null }}" alt="TTE Pimpinan"
                    width="90px">
            </span>
        </td>
    </tr>
    <tr align="center">
        <td>
            <span>
                <strong>
                    {{ $pimpinan->nama ?? '' }}
                </strong>
            </span>
        </td>
    </tr>
    <tr align="center">
        <td>
            <span>
                NIP {{ $pimpinan->nip ?? '' }}
            </span>
        </td>
    </tr>
</table>

<!-- Lembar Ke-2 (Surat Keterangan Orang Tua) -->
<h1>2</h1>

<!-- Lembar Ke-3 (Surat Keterangan Calon Siswa) -->
<h1>3</h1>

<!-- Lembar Ke-4 (Tata Tertib) -->
<h1>4</h1>

```

---

### 📄 `./resources/views/filament/pages/auth/forgot-password-custom.blade.php`

```blade
<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="kirim">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Kirim Kode OTP
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-4 text-sm text-center text-gray-500 dark:text-gray-400">
        Sudah ingat password?
        <a href="{{ filament()->getLoginUrl() }}" class="font-medium text-primary-600 hover:underline">
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

    <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
        <a href="{{ route('otp.forgot-password') }}" class="font-medium text-primary-600 hover:underline">
            Kembali
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

    <div class="mt-4 text-sm text-center text-gray-500 dark:text-gray-400">
        Belum menerima kode OTP?
        <button
            wire:click="resend"
            type="button"
            class="font-medium text-primary-600 hover:underline"
        >
            Kirim ulang
        </button>
    </div>

    <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
        <a href="{{ route('otp.forgot-password') }}" class="font-medium text-primary-600 hover:underline">
            Kembali
        </a>
    </div>
</x-filament-panels::page.simple>

```

---

### 📄 `./resources/views/filament/pages/auth/verifikasi-otp.blade.php`

```blade
<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="verifikasi">
        {{ $this->form }}

        <x-filament::button
            type="submit"
            size="lg"
            class="w-full"
        >
            Verifikasi
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-4 text-sm text-center text-gray-500 dark:text-gray-400">
        Belum menerima kode OTP?
        <button
            wire:click="resend"
            type="button"
            class="font-medium text-primary-600 hover:underline"
        >
            Kirim ulang
        </button>
    </div>
</x-filament-panels::page.simple>

```

---

## ⚙️ Config (Custom)

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
    'whatsapp' => [
        'endpoint' => env('WHATSAPP_ENDPOINT'),
        'api_key' => env('WHATSAPP_API_KEY'),
    ],
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

## 📦 Root Config Files

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
