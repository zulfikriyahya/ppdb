# Laravel Project Blueprint

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
app/Filament/Pages/Auth/LoginCustom.php
app/Filament/Pages/Auth/RegisterCustom.php
app/Filament/Exports/CalonSiswaExporter.php
app/Filament/Imports/CalonSiswaImporter.php
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
routes/web.php
routes/api.php
routes/console.php
resources/views/formulir.blade.php
resources/views/kartu-tes.blade.php
resources/views/skl.blade.php
config/filament-shield.php
config/permission.php
app/Providers/AppServiceProvider.php
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
        'data',
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

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CalonSiswa extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
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
        'wali_status',
        'wali_alamat',
        'wali_negara_id',
        'wali_provinsi_id',
        'wali_kabupaten_id',
        'wali_kecamatan_id',
        'wali_kelurahan_id',
        'sekolah_asal_id',
        'jalur_pendaftaran_id',
        'siswa_prestasi_id',
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
        'ibu_pekerjaan',
        'ibu_penghasilan',
        'ibu_pendidikan',
        'ayah_pekerjaan',
        'ayah_penghasilan',
        'ayah_pendidikan',
        'wali_pekerjaan',
        'wali_penghasilan',
        'wali_pendidikan',
        'kepemilikan_rumah',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
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

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
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

    // Users
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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

    public function ekstrakurikuler(): BelongsTo
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekstrakurikuler_id');
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
        return $this->hasMany(CalonSiswa::class, 'calon_siswa_id');
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

    protected static function booted()
    {
        static::created(function ($user) {
            $defaultRole = 'peserta';
            $user->assignRole($defaultRole);
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

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_role');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Role $role): bool
    {
        return $user->can('view_role');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_role');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Role $role): bool
    {
        return $user->can('update_role');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $role): bool
    {
        return $user->can('delete_role');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_role');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Role $role): bool
    {
        return $user->can('{{ ForceDelete }}');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('{{ ForceDeleteAny }}');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Role $role): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('{{ RestoreAny }}');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Role $role): bool
    {
        return $user->can('{{ Replicate }}');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('{{ Reorder }}');
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

## 🧩 Filament Resources

### 📄 `./app/Filament/Resources/AnggotaResource/Pages/CreateAnggota.php`

```php
<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateAnggota extends CreateRecord
{
    protected static string $resource = AnggotaResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Anggota')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Anggota')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/anggota')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/anggota')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/anggota')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/AnggotaResource/Pages/EditAnggota.php`

```php
<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditAnggota extends EditRecord
{
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected static string $resource = AnggotaResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Anggota')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Anggota')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/anggota')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/anggota')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/anggota')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/AnggotaResource/Pages/ListAnggotas.php`

```php
<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Resources\AnggotaResource;
use App\Models\Anggota;
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

    public function table(Table $table): Table
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
                        'Nonaktif' => 'gray'
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

use App\Filament\Resources\BendaharaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateBendahara extends CreateRecord
{
    protected static string $resource = BendaharaResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Bendahara')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Bendahara')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/bendahara')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/bendahara')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/bendahara')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/BendaharaResource/Pages/EditBendahara.php`

```php
<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Resources\BendaharaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditBendahara extends EditRecord
{
    protected static string $resource = BendaharaResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Bendahara')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Bendahara')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/bendahara')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/bendahara')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/bendahara')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/BendaharaResource/Pages/ListBendaharas.php`

```php
<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Resources\BendaharaResource;
use App\Models\Bendahara;
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

    public function table(Table $table): Table
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
                        'Nonaktif' => 'gray'
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
use App\Models\JalurPendaftaran;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;

class CreateCalonSiswa extends CreateRecord
{
    protected static string $resource = CalonSiswaResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Calon Siswa')
                ->schema([
                    Tabs::make('Biodata')
                        ->tabs([
                            Tabs\Tab::make('Biodata')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Jalur Pendaftaran
                                    Select::make('jalur_pendaftaran_id')
                                        ->label('Jalur Pendaftaran')
                                        ->relationship('jalurPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif')) // Menampilkan data jalurPendaftaran dengan kondisi statusnya aktif saja
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->live()
                                        ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}"),
                                    // Nama Lengkap Calon Peserta Didik Baru
                                    TextInput::make('nama')
                                        ->label('Nama Lengkap')
                                        ->required()
                                        ->disabledOn('create')
                                        ->dehydrated()
                                        ->default(fn () => Auth::user()->name)
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // NIK Calon Peserta Didik Baru
                                    TextInput::make('nik')
                                        ->label('Nomor Induk Kependudukan (NIK)')
                                        ->required()
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,nik' : 'unique:calon_siswas,nik,'.$record->id)
                                        ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                        ->numeric()
                                        ->maxLength(16)
                                        ->minLength(16)
                                        ->validationMessages([
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                            'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // KK Calon Peserta Didik Baru
                                    TextInput::make('kk')
                                        ->label('Nomor Kartu Keluarga (KK)')
                                        ->required()
                                        ->maxLength(16)
                                        ->numeric()
                                        ->minLength(16)
                                        ->validationMessages([
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // NISN Calon Peserta Didik Baru
                                    TextInput::make('nisn')
                                        ->label('Nomor Induk Siswa Nasional (NISN)')
                                        ->required()
                                        ->disabledOn('create')
                                        ->dehydrated()
                                        ->default(fn () => Auth::user()->username)
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,nisn' : 'unique:calon_siswas,nisn,'.$record->id)
                                        ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                        ->numeric()
                                        ->maxLength(10)
                                        ->minLength(10)
                                        ->validationMessages([
                                            'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                                            'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                                            'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Tempat Lahir Calon Peserta Didik Baru
                                    TextInput::make('tempat_lahir')
                                        ->label('Tempat Lahir')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Tanggal Lahir Calon Peserta Didik Baru
                                    DatePicker::make('tanggal_lahir')
                                        ->label('Tanggal Lahir')
                                        ->maxDate(now())
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Tahun Lulus Calon Peserta Didik Baru
                                    Select::make('tahun_lulus')
                                        ->label('Tahun Lulus')
                                        ->options(function () {
                                            $tahun = range(date('Y'), date('Y') - 2);

                                            return array_combine($tahun, $tahun);
                                        })
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Jenis Kelamin Calon Peserta Didik Baru
                                    Select::make('jenis_kelamin')
                                        ->label('Jenis Kelamin')
                                        ->options([
                                            'Pria' => 'Laki-laki',
                                            'Wanita' => 'Perempuan',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Golongan Darah Calon Peserta Didik Baru
                                    Select::make('golongan_darah')
                                        ->label('Golongan Darah')
                                        ->options([
                                            'A-' => 'A-',
                                            'A+' => 'A+',
                                            'B-' => 'B-',
                                            'B+' => 'B+',
                                            'AB-' => 'AB-',
                                            'AB+' => 'AB+',
                                            'O-' => 'O-',
                                            'O+' => 'O+',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Agama Calon Peserta Didik Baru
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
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Anak Ke Calon Peserta Didik Baru
                                    TextInput::make('anak_ke')
                                        ->label('Anak Ke')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->numeric(),
                                    // Jumlah Saudara Calon Peserta Didik Baru
                                    TextInput::make('jumlah_saudara')
                                        ->label('Dari (Jumlah Anak)')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->numeric(),
                                    // Tinggal Bersama Calon Peserta Didik Baru
                                    Select::make('tinggal_bersama')
                                        ->label('Tinggal Bersama')
                                        ->options([
                                            'Orang Tua' => 'Orang Tua',
                                            'Saudara' => 'Saudara',
                                            'Panti Asuhan' => 'Panti Asuhan',
                                            'Kost' => 'Kost',
                                            'Lainnya' => 'Lainnya',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Jarak Ke Sekolah Calon Peserta Didik Baru
                                    Select::make('jarak_ke_sekolah')
                                        ->label('Jarak Ke Sekolah')
                                        ->options([
                                            '0 - 1 Km' => '0 - 1 Km',
                                            '1 - 5 Km' => '1 - 5 Km',
                                            '5 - 10 Km' => '5 - 10 Km',
                                            '10 - 15 Km' => '10 - 15 Km',
                                            '15 - 20 Km' => '15 - 20 Km',
                                            '20 - 25 Km' => '20 - 25 Km',
                                            '25 - 30 Km' => '25 - 30 Km',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Disabilitas Calon Peserta Didik Baru
                                    Select::make('disabilitas')
                                        ->label('Disabilitas')
                                        ->options([
                                            'Non Disabilitas' => 'Non Disabilitas',
                                            'Fisik' => 'Fisik',
                                            'Penglihatan' => 'Penglihatan',
                                            'Pendengaran' => 'Pendengaran',
                                            'Kognitif' => 'Kognitif',
                                            'Mental' => 'Mental',
                                            'Lainnya' => 'Lainnya',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Tinggi Badan Calon Peserta Didik Baru
                                    TextInput::make('tinggi_badan')
                                        ->label('Tinggi Badan')
                                        ->postFix('Cm')
                                        ->numeric(),
                                    // Berat Badan Calon Peserta Didik Baru
                                    TextInput::make('berat_badan')
                                        ->label('Berat Badan')
                                        ->postFix('Kg')
                                        ->numeric(),
                                    // No KIP Calon Peserta Didik Baru
                                    TextInput::make('no_kip')
                                        ->label('Nomor Kartu Indonesia Pintar')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_kip' : 'unique:calon_siswas,no_kip,'.$record->id)
                                        ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                        ->maxLength(6)
                                        ->minLength(6)
                                        ->live()
                                        ->validationMessages([
                                            'max' => 'KIP: Masukkan maksimal 6 Karakter.',
                                            'min' => 'KIP: Masukkan minimal 6 Karakter.',
                                            'unique' => 'KIP: Nomor ini sudah pernah di isi.',
                                        ]),
                                    // No KIP Calon Peserta Didik Baru
                                    TextInput::make('no_kks')
                                        ->label('Nomor Kartu Keluarga Sejahtera')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_kks' : 'unique:calon_siswas,no_kks,'.$record->id)
                                        ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                        ->maxLength(6)
                                        ->minLength(6)
                                        ->live()
                                        ->validationMessages([
                                            'max' => 'KKS: Masukkan maksimal 6 Karakter.',
                                            'min' => 'KKS: Masukkan minimal 6 Karakter.',
                                            'unique' => 'KKS: Nomor ini sudah pernah di isi.',
                                        ]),
                                    // No KIP Calon Peserta Didik Baru
                                    TextInput::make('no_pkh')
                                        ->label('Nomor Kartu Program Keluarga Harapan')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_pkh' : 'unique:calon_siswas,no_pkh,'.$record->id)
                                        ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
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
                                    // Data Sekolah Asal Calon Peserta Didik Baru
                                    Select::make('sekolah_asal_id')
                                        ->label('Sekolah Asal')
                                        ->relationship('sekolahAsal', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->searchable()
                                        ->preload()
                                        ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
                                        ->createOptionForm([
                                            Wizard::make([
                                                Step::make('Data Instansi')
                                                    ->schema([
                                                        // Section::make('Instansi')
                                                        //     ->schema([
                                                        TextInput::make('nama')
                                                            ->label('Nama Instansi')
                                                            ->prefixIcon('heroicon-o-building-library')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->columnSpanFull(),
                                                        Select::make('jenjang')
                                                            ->label('Jenjang')
                                                            ->native(false)
                                                            ->required()
                                                            ->live()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->options(function () {
                                                                $sekolah = Sekolah::first(); // Ambil satu instance model Sekolah
                                                                $jenjang = optional($sekolah)->jenjang; // Menghindari error jika null

                                                                return match ($jenjang) {
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
                                                            }),
                                                        TextInput::make('npsn')
                                                            ->label('NPSN')
                                                            ->numeric()
                                                            ->minLength(8)
                                                            ->maxLength(8)
                                                            ->required()
                                                            ->validationMessages([
                                                                'min_digits' => 'NPSN harus terdiri dari minimal 8 digit.',
                                                                'max_digits' => 'NPSN tidak boleh lebih dari 8 digit.',
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
                                                                'min_digits' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                                                'max_digits' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Select::make('akreditasi')
                                                            ->label('Akreditasi')
                                                            ->native(false)
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),

                                                        Select::make('status')
                                                            ->label('Status')
                                                            ->native(false)
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                                                        FileUpload::make('logo')
                                                            ->label('Logo Instansi')
                                                            ->image()
                                                            ->imageEditor()
                                                            ->imageEditorAspectRatios([
                                                                null,
                                                                '1:1' => '1:1',
                                                            ])
                                                            ->fetchFileInformation(false)
                                                            ->directory('assets/instansi-lain')
                                                            ->downloadable()
                                                            ->openable()
                                                            ->maxSize(500)
                                                            ->minSize(10)
                                                            ->visibility('private')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 3,
                                                        'lg' => 3,
                                                    ]),
                                                // ]),
                                                Step::make('Data Alamat')
                                                    ->schema([
                                                        // Section::make('Alamat')
                                                        //     ->schema([
                                                        Select::make('negara_id')
                                                            ->label('Negara')
                                                            ->relationship('negara', 'nama')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('provinsi_id', null);
                                                                $set('kabupaten_id', null);
                                                                $set('kecamatan_id', null);
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('provinsi_id')
                                                            ->label('Provinsi')
                                                            ->options(fn (Get $get): Collection => Provinsi::query()
                                                                ->where('negara_id', $get('negara_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('kabupaten_id', null);
                                                                $set('kecamatan_id', null);
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('kabupaten_id')
                                                            ->label('Kabupaten/Kota')
                                                            ->options(fn (Get $get): Collection => Kabupaten::query()
                                                                ->where('provinsi_id', $get('provinsi_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('kecamatan_id', null);
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('kecamatan_id')
                                                            ->label('Kecamatan')
                                                            ->options(fn (Get $get): Collection => Kecamatan::query()
                                                                ->where('kabupaten_id', $get('kabupaten_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('kelurahan_id')
                                                            ->label('Kelurahan/Desa')
                                                            ->options(fn (Get $get): Collection => Kelurahan::query()
                                                                ->where('kecamatan_id', $get('kecamatan_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false),
                                                        TextInput::make('alamat')
                                                            ->label('Jalan/Kampung/Dusun')
                                                            ->required()
                                                            ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 3,
                                                        'lg' => 3,
                                                    ]),
                                                // ]),
                                                Step::make('Data Kontak')
                                                    ->schema([
                                                        // Section::make('Kontak')
                                                        //     ->schema([
                                                        TextInput::make('website')
                                                            ->label('Website')
                                                            ->url()
                                                            ->prefixIcon('heroicon-m-globe-alt')
                                                            // ->required()
                                                            // ->validationMessages([
                                                            //     'required' => 'Form ini wajib diisi.',
                                                            // ])
                                                            ->placeholder('https://mtsn1pandeglang.sch.id'),
                                                        TextInput::make('telepon')
                                                            ->label('Telepon')
                                                            // ->required()
                                                            // ->validationMessages([
                                                            //     'required' => 'Form ini wajib diisi.',
                                                            // ])
                                                            ->tel()
                                                            ->placeholder('08**********')
                                                            ->prefixIcon('heroicon-m-phone'),
                                                        TextInput::make('email')
                                                            ->label('Email')
                                                            // ->required()
                                                            // ->validationMessages([
                                                            //     'required' => 'Form ini wajib diisi.',
                                                            // ])
                                                            ->placeholder('adm@mtsn1pandeglang.sch.id')
                                                            ->email()
                                                            ->prefixIcon('heroicon-m-envelope'),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 3,
                                                        'lg' => 3,
                                                    ]),
                                                // ]),
                                            ]),
                                        ]),
                                    // Data Prestasi Calon Peserta Didik Baru
                                    Select::make('prestasi_id')
                                        ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                        ->label('Prestasi')
                                        ->helperText(new HtmlString('<small><i>Pilih prestasi yang paling tinggi jika memiliki lebih dari satu prestasi.</i></small>'))
                                        ->relationship('prestasi', 'nama')
                                        ->preload()
                                        ->createOptionForm([
                                            // Prestasi
                                            // Section::make('Prestasi')
                                            //     ->collapsible()
                                            //     ->schema([
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
                                                        ->native(false)
                                                        ->validationMessages([
                                                            'required' => 'Form ini wajib diisi.',
                                                        ])
                                                        ->live(),
                                                ])
                                                ->columns([
                                                    'sm' => '100%',
                                                    'md' => 2,
                                                    'lg' => 2,
                                                ]),

                                            Section::make('')
                                                ->schema([
                                                    Select::make('tingkat')
                                                        ->label('Tingkat')
                                                        ->native(false)
                                                        ->options([
                                                            'Nasional' => 'Nasional',
                                                            'Provinsi' => 'Provinsi',
                                                            'Kabupaten/Kota' => 'Kabupaten/Kota',
                                                        ])
                                                        ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                    Select::make('kategori')
                                                        ->label('Kategori')
                                                        ->native(false)
                                                        ->options([
                                                            'Regu/Kelompok' => 'Regu/Kelompok',
                                                            'Individu' => 'Individu',
                                                        ])
                                                        ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                    Select::make('peringkat')
                                                        ->label('Peringkat')
                                                        ->options([
                                                            '1' => '1',
                                                            '2' => '2',
                                                            '3' => '3',
                                                        ])
                                                        ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                ])
                                                ->columns([
                                                    'sm' => '100%',
                                                    'md' => 3,
                                                    'lg' => 3,
                                                ])
                                                ->visible(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                        ])
                                        ->columns([
                                            'sm' => '100%',
                                            'md' => 3,
                                            'lg' => 3,
                                            // ]),
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->jenis} | {$record->nama} | {$record->tingkat} | {$record->kategori} | {$record->peringkat}")
                                        ->searchable()
                                        ->native(false),
                                    // Data Peminatan Ekstrakurikuler Calon Peserta Didik Baru
                                    Select::make('ekstrakurikuler_id')
                                        ->label('Peminatan Ekstrakurikuler')
                                        ->required()
                                        ->searchable()
                                        ->preload()
                                        ->native(false)
                                        ->relationship('ekstrakurikuler', 'nama')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Data Peminatan Pelajaran Calon Peserta Didik Baru
                                    Select::make('mata_pelajaran_id')
                                        // ->visible(fn($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                        ->label('Peminatan Mata Pelajaran')
                                        ->searchable()
                                        ->preload()
                                        ->required()
                                        ->native(false)
                                        ->relationship('mataPelajaran', 'nama')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),

                            // Tab Alamat Calon Peserta Didik Baru
                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Alamat Calon Peserta Didik Baru
                                    Select::make('siswa_negara_id')
                                        ->label('Negara')
                                        ->relationship('siswaNegara', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_provinsi_id', null);
                                            $set('siswa_kabupaten_id', null);
                                            $set('siswa_kecamatan_id', null);
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn (Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('siswa_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_kabupaten_id', null);
                                            $set('siswa_kecamatan_id', null);
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn (Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('siswa_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_kecamatan_id', null);
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn (Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('siswa_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn (Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('siswa_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    TextInput::make('siswa_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),

                            // Tab Berkas Calon Peserta Didik Baru
                            Tabs\Tab::make('Berkas')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Berkas Foto Calon Peserta Didik Baru
                                    FileUpload::make('berkas_foto')
                                        ->label('Foto Latar Merah')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/foto/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Berkas KK Calon Peserta Didik Baru
                                    FileUpload::make('berkas_kk')
                                        ->label('Kartu Keluarga')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/kk/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Berkas Akta Calon Peserta Didik Baru
                                    FileUpload::make('berkas_akta')
                                        ->label('Akta Kelahiran')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/akta/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),

                                    // Berkas NISN Calon Peserta Didik Baru
                                    FileUpload::make('berkas_nisn')
                                        ->label('Kartu NISN/Tangkapan Layar NISN (Web)')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/nisn/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->visibility('private'),
                                    // Berkas Surat Keterangan Berkelakuan Baik Calon Peserta Didik Baru
                                    FileUpload::make('berkas_skbb')
                                        ->label('Surat Keterangan Berkelakuan Baik')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/skbb/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas Surat Keterangan Aktif Belajar Calon Peserta Didik Baru
                                    FileUpload::make('berkas_skab')
                                        ->label('Surat Keterangan Aktif Belajar')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/skab/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),

                                    // Berkas KIP Calon Peserta Didik Baru
                                    FileUpload::make('berkas_kip')
                                        ->required(fn ($get) => $get('no_kip') !== null)
                                        ->visible(fn ($get) => $get('no_kip') !== null)
                                        ->label('Kartu Indonesia Pintar')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/kip/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas KKS Calon Peserta Didik Baru
                                    FileUpload::make('berkas_kks')
                                        ->required(fn ($get) => $get('no_kks') !== null)
                                        ->visible(fn ($get) => $get('no_kks') !== null)
                                        ->label('Kartu Keluarga Sejahtera')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/kks/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas PKH Calon Peserta Didik Baru
                                    FileUpload::make('berkas_pkh')
                                        ->required(fn ($get) => $get('no_pkh') !== null)
                                        ->visible(fn ($get) => $get('no_pkh') !== null)
                                        ->label('Kartu Program Keluarga Harapan')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/pkh/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas Prestasi Belajar Calon Peserta Didik Baru
                                    FileUpload::make('berkas_prestasi')
                                        ->required(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                        ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                        ->label('Berkas Prestasi')
                                        ->helperText(new HtmlString('<small><i>Gabungkan semua berkas jika memiliki lebih dari satu prestasi.</i></small>'))
                                        ->fetchFileInformation(false)
                                        ->directory(fn ($get) => 'berkas/prestasi/'.$get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                ]),

                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),

            Step::make('Data Orang Tua')

                ->schema([
                    // Tab Ibu
                    Tabs::make('Data Ibu Kandung')
                        ->tabs([
                            Tabs\Tab::make('Data Ibu')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Biodata Ibu Calon Peserta Didik Baru
                                    TextInput::make('ibu_nama')
                                        ->label('Nama Lengkap Ibu Kandung')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    TextInput::make('ibu_nik')
                                        ->label('NIK Ibu Kandung')
                                        ->required()
                                        ->maxLength(16)
                                        ->minLength(16)
                                        ->numeric()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                        ]),

                                    TextInput::make('ibu_telepon')
                                        ->label('Nomor Telepon')
                                        ->numeric()
                                        ->tel()
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    Select::make('ibu_pekerjaan')
                                        ->label('Pekerjaan')
                                        ->options([
                                            'Tidak Bekerja' => 'Tidak Bekerja',
                                            'ASN' => 'ASN',
                                            'TNI/POLRI' => 'TNI/POLRI',
                                            'Karyawan Swasta' => 'Karyawan Swasta',
                                            'Pegawai Honorer' => 'Pegawai Honorer',
                                            'Wirausaha' => 'Wirausaha',
                                            'Wiraswasta' => 'Wiraswasta',
                                            'Buruh' => 'Buruh',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ibu_penghasilan')
                                        ->label('Penghasilan Bulanan')
                                        ->options([
                                            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                            'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                            'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                            'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                            'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ibu_pendidikan')
                                        ->label('Pendidikan')
                                        ->options([
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
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ibu_status')
                                        ->label('Status')
                                        ->options([
                                            'Hidup' => 'Hidup',
                                            'Meninggal' => 'Meninggal',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                ]),

                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    Select::make('ibu_negara_id')
                                        ->label('Negara')
                                        ->relationship('ibuNegara', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_provinsi_id', null);
                                            $set('ibu_kabupaten_id', null);
                                            $set('ibu_kecamatan_id', null);
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn (Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('ibu_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_kabupaten_id', null);
                                            $set('ibu_kecamatan_id', null);
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn (Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('ibu_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_kecamatan_id', null);
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn (Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('ibu_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn (Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('ibu_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    TextInput::make('ibu_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    // Tab Ayah
                    Tabs::make('Data Ayah Kandung')
                        ->tabs([
                            Tabs\Tab::make('Data Ayah')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Biodata Ayah Calon Peserta Didik Baru
                                    TextInput::make('ayah_nama')
                                        ->label('Nama Lengkap Ayah Kandung')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    TextInput::make('ayah_nik')
                                        ->label('NIK Ayah Kandung')
                                        ->required()
                                        ->maxLength(16)
                                        ->numeric()
                                        ->minLength(16)
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                        ]),
                                    TextInput::make('ayah_telepon')
                                        ->label('Nomor Telepon')
                                        ->numeric()
                                        ->tel()
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    Select::make('ayah_pekerjaan')
                                        ->label('Pekerjaan')
                                        ->options([
                                            'Tidak Bekerja' => 'Tidak Bekerja',
                                            'ASN' => 'ASN',
                                            'TNI/POLRI' => 'TNI/POLRI',
                                            'Karyawan Swasta' => 'Karyawan Swasta',
                                            'Pegawai Honorer' => 'Pegawai Honorer',
                                            'Wirausaha' => 'Wirausaha',
                                            'Wiraswasta' => 'Wiraswasta',
                                            'Buruh' => 'Buruh',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ayah_penghasilan')
                                        ->label('Penghasilan Bulanan')
                                        ->options([
                                            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                            'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                            'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                            'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                            'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ayah_pendidikan')
                                        ->label('Pendidikan')
                                        ->options([
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
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ayah_status')
                                        ->label('Status')
                                        ->options([
                                            'Hidup' => 'Hidup',
                                            'Meninggal' => 'Meninggal',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                ]),

                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    Select::make('ayah_negara_id')
                                        ->label('Negara')
                                        ->relationship('ayahNegara', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_provinsi_id', null);
                                            $set('ayah_kabupaten_id', null);
                                            $set('ayah_kecamatan_id', null);
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn (Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('ayah_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_kabupaten_id', null);
                                            $set('ayah_kecamatan_id', null);
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn (Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('ayah_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_kecamatan_id', null);
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn (Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('ayah_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn (Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('ayah_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    TextInput::make('ayah_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    // Tab Wali
                    Tabs::make('Data Wali')
                        ->tabs([
                            Tabs\Tab::make('Data Wali')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Biodata Wali Calon Peserta Didik Baru
                                    TextInput::make('wali_nama')
                                        ->label('Nama Lengkap Wali'),
                                    TextInput::make('wali_nik')
                                        ->label('NIK Wali')
                                        ->numeric()
                                        ->maxLength(16)
                                        ->minLength(16)
                                        ->validationMessages([
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                        ]),
                                    TextInput::make('wali_telepon')
                                        ->label('Nomor Telepon')
                                        ->numeric()
                                        ->tel(),
                                    Select::make('wali_pekerjaan')
                                        ->label('Pekerjaan')
                                        ->options([
                                            'Tidak Bekerja' => 'Tidak Bekerja',
                                            'ASN' => 'ASN',
                                            'TNI/POLRI' => 'TNI/POLRI',
                                            'Karyawan Swasta' => 'Karyawan Swasta',
                                            'Pegawai Honorer' => 'Pegawai Honorer',
                                            'Wirausaha' => 'Wirausaha',
                                            'Wiraswasta' => 'Wiraswasta',
                                            'Buruh' => 'Buruh',
                                        ])
                                        ->native(false),

                                    Select::make('wali_penghasilan')
                                        ->label('Penghasilan Bulanan')
                                        ->options([
                                            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                            'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                            'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                            'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                            'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                        ])
                                        ->native(false),

                                    Select::make('wali_pendidikan')
                                        ->label('Pendidikan')
                                        ->options([
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
                                        ])
                                        ->native(false),
                                    Select::make('wali_status')
                                        ->label('Status')
                                        ->options([
                                            'Hidup' => 'Hidup',
                                            'Meninggal' => 'Meninggal',
                                        ])
                                        ->native(false),
                                ]),

                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    Select::make('wali_negara_id')
                                        ->label('Negara')
                                        ->relationship('waliNegara', 'nama')
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_provinsi_id', null);
                                            $set('wali_kabupaten_id', null);
                                            $set('wali_kecamatan_id', null);
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn (Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('wali_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_kabupaten_id', null);
                                            $set('wali_kecamatan_id', null);
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn (Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('wali_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_kecamatan_id', null);
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn (Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('wali_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn (Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('wali_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false),
                                    TextInput::make('wali_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        // ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005'),
                                    // ->validationMessages([
                                    //     'required' => 'Form ini wajib diisi.',
                                    // ]),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                    // Section Kepemilikan Rumah
                    Section::make('Kepemilikan Rumah')
                        ->icon('heroicon-m-bell')
                        ->iconPosition(IconPosition::After)
                        ->schema([
                            // Status Kepemilikan Rumah
                            Select::make('kepemilikan_rumah')
                                ->label('Status Kepemilikan Rumah')
                                ->options([
                                    'Rumah Pribadi' => 'Rumah Pribadi',
                                    'Kontrakan' => 'Kontrakan',
                                    'Rumah Dinas' => 'Rumah Dinas',
                                    'Menumpang Saudara' => 'Menumpang Saudara',
                                ])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false),
                        ]),
                ])
                ->columnSpanFull(),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource/Pages/EditCalonSiswa.php`

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Models\Sekolah;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\JalurPendaftaran;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Tabs;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Enums\IconPosition;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\CalonSiswaResource;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class EditCalonSiswa extends EditRecord
{
    protected static string $resource = CalonSiswaResource::class;

    use HasWizard;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return [
            Step::make('Data Calon Siswa')
                ->schema([
                    // Section Formulir
                    Section::make('Formulir Pendaftaran')
                        // ->collapsible()
                        ->schema([
                            // Data Status Pendaftaran Calon Peserta Didik Baru
                            Select::make('status_pendaftaran')
                                ->label('Status Pendaftaran')
                                ->options(
                                    function () {
                                        if (Auth::user()->roles->first()->name === 'administrator') {
                                            return [
                                                'Diproses' => 'Diproses',
                                                'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                                                'Diverifikasi' => 'Diverifikasi',
                                                'Ditolak' => 'Ditolak',
                                                'Diterima' => 'Diterima',
                                                'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                                                'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                                            ];
                                        }

                                        return [
                                            'Diproses' => 'Diproses',
                                            'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                                            'Diverifikasi' => 'Diverifikasi',
                                        ];
                                    }
                                )
                                ->native(false)
                                ->live()
                                ->default('Diproses'),
                            // Data Kelas Pendaftaran Calon Peserta Didik Baru
                            Select::make('kelas_id')
                                ->label('Kelas')
                                ->visible(fn($get) => in_array($get('status_pendaftaran'), [
                                    'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan',
                                ]))
                                ->relationship('kelas', 'nama')
                                ->native(false),
                        ])
                        ->visible(Auth::user()->roles->first()->name !== 'peserta')
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                            'xl' => 2,
                            '2xl' => 2,
                        ]),

                    Tabs::make('Biodata')
                        ->tabs([
                            Tabs\Tab::make('Biodata')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Jalur Pendaftaran
                                    Select::make('jalur_pendaftaran_id')
                                        ->label('Jalur Pendaftaran')
                                        ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->live()
                                        ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}"),
                                    // Nama Lengkap Calon Peserta Didik Baru
                                    TextInput::make('nama')
                                        ->label('Nama Lengkap')
                                        ->required()
                                        ->disabledOn('edit')
                                        ->dehydrated()
                                        ->default(fn() => Auth::user()->name)
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // NIK Calon Peserta Didik Baru
                                    TextInput::make('nik')
                                        ->label('Nomor Induk Kependudukan (NIK)')
                                        ->required()
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn($record) => $record === null ? 'unique:calon_siswas,nik' : 'unique:calon_siswas,nik,' . $record->id)
                                        ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                        ->numeric()
                                        ->maxLength(16)
                                        ->minLength(16)
                                        ->validationMessages([
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                            'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // KK Calon Peserta Didik Baru
                                    TextInput::make('kk')
                                        ->label('Nomor Kartu Keluarga (KK)')
                                        ->required()
                                        ->maxLength(16)
                                        ->numeric()
                                        ->minLength(16)
                                        ->validationMessages([
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // NISN Calon Peserta Didik Baru
                                    TextInput::make('nisn')
                                        ->label('Nomor Induk Siswa Nasional (NISN)')
                                        ->required()
                                        ->disabledOn('edit')
                                        ->dehydrated()
                                        ->default(fn() => Auth::user()->username)
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn($record) => $record === null ? 'unique:calon_siswas,nisn' : 'unique:calon_siswas,nisn,' . $record->id)
                                        ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                        ->numeric()
                                        ->maxLength(10)
                                        ->minLength(10)
                                        ->validationMessages([
                                            'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                                            'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                                            'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Tempat Lahir Calon Peserta Didik Baru
                                    TextInput::make('tempat_lahir')
                                        ->label('Tempat Lahir')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Tanggal Lahir Calon Peserta Didik Baru
                                    DatePicker::make('tanggal_lahir')
                                        ->label('Tanggal Lahir')
                                        ->maxDate(now())
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Tahun Lulus Calon Peserta Didik Baru
                                    Select::make('tahun_lulus')
                                        ->label('Tahun Lulus')
                                        ->options(function () {
                                            $tahun = range(date('Y'), date('Y') - 2);

                                            return array_combine($tahun, $tahun);
                                        })
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Jenis Kelamin Calon Peserta Didik Baru
                                    Select::make('jenis_kelamin')
                                        ->label('Jenis Kelamin')
                                        ->options([
                                            'Pria' => 'Laki-laki',
                                            'Wanita' => 'Perempuan',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Golongan Darah Calon Peserta Didik Baru
                                    Select::make('golongan_darah')
                                        ->label('Golongan Darah')
                                        ->options([
                                            'A-' => 'A-',
                                            'A+' => 'A+',
                                            'B-' => 'B-',
                                            'B+' => 'B+',
                                            'AB-' => 'AB-',
                                            'AB+' => 'AB+',
                                            'O-' => 'O-',
                                            'O+' => 'O+',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Agama Calon Peserta Didik Baru
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
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Anak Ke Calon Peserta Didik Baru
                                    TextInput::make('anak_ke')
                                        ->label('Anak Ke')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->numeric(),
                                    // Jumlah Saudara Calon Peserta Didik Baru
                                    TextInput::make('jumlah_saudara')
                                        ->label('Dari (Jumlah Anak)')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->numeric(),
                                    // Tinggal Bersama Calon Peserta Didik Baru
                                    Select::make('tinggal_bersama')
                                        ->label('Tinggal Bersama')
                                        ->options([
                                            'Orang Tua' => 'Orang Tua',
                                            'Saudara' => 'Saudara',
                                            'Panti Asuhan' => 'Panti Asuhan',
                                            'Kost' => 'Kost',
                                            'Lainnya' => 'Lainnya',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Jarak Ke Sekolah Calon Peserta Didik Baru
                                    Select::make('jarak_ke_sekolah')
                                        ->label('Jarak Ke Sekolah')
                                        ->options([
                                            '0 - 1 Km' => '0 - 1 Km',
                                            '1 - 5 Km' => '1 - 5 Km',
                                            '5 - 10 Km' => '5 - 10 Km',
                                            '10 - 15 Km' => '10 - 15 Km',
                                            '15 - 20 Km' => '15 - 20 Km',
                                            '20 - 25 Km' => '20 - 25 Km',
                                            '25 - 30 Km' => '25 - 30 Km',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Disabilitas Calon Peserta Didik Baru
                                    Select::make('disabilitas')
                                        ->label('Disabilitas')
                                        ->options([
                                            'Non Disabilitas' => 'Non Disabilitas',
                                            'Fisik' => 'Fisik',
                                            'Penglihatan' => 'Penglihatan',
                                            'Pendengaran' => 'Pendengaran',
                                            'Kognitif' => 'Kognitif',
                                            'Mental' => 'Mental',
                                            'Lainnya' => 'Lainnya',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    // Tinggi Badan Calon Peserta Didik Baru
                                    TextInput::make('tinggi_badan')
                                        ->label('Tinggi Badan')
                                        ->postFix('Cm')
                                        ->numeric(),
                                    // Berat Badan Calon Peserta Didik Baru
                                    TextInput::make('berat_badan')
                                        ->label('Berat Badan')
                                        ->postFix('Kg')
                                        ->numeric(),
                                    // No KIP Calon Peserta Didik Baru
                                    TextInput::make('no_kip')
                                        ->label('Nomor Kartu Indonesia Pintar')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn($record) => $record === null ? 'unique:calon_siswas,no_kip' : 'unique:calon_siswas,no_kip,' . $record->id)
                                        ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                        ->maxLength(6)
                                        ->minLength(6)
                                        ->live()
                                        ->validationMessages([
                                            'max' => 'KIP: Masukkan maksimal 6 Karakter.',
                                            'min' => 'KIP: Masukkan minimal 6 Karakter.',
                                            'unique' => 'KIP: Nomor ini sudah pernah di isi.',
                                        ]),
                                    // No KIP Calon Peserta Didik Baru
                                    TextInput::make('no_kks')
                                        ->label('Nomor Kartu Keluarga Sejahtera')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn($record) => $record === null ? 'unique:calon_siswas,no_kks' : 'unique:calon_siswas,no_kks,' . $record->id)
                                        ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                        ->maxLength(6)
                                        ->minLength(6)
                                        ->live()
                                        ->validationMessages([
                                            'max' => 'KKS: Masukkan maksimal 6 Karakter.',
                                            'min' => 'KKS: Masukkan minimal 6 Karakter.',
                                            'unique' => 'KKS: Nomor ini sudah pernah di isi.',
                                        ]),
                                    // No KIP Calon Peserta Didik Baru
                                    TextInput::make('no_pkh')
                                        ->label('Nomor Kartu Program Keluarga Harapan')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                        ->unique(ignoreRecord: true)
                                        ->rule(fn($record) => $record === null ? 'unique:calon_siswas,no_pkh' : 'unique:calon_siswas,no_pkh,' . $record->id)
                                        ->dehydrateStateUsing(fn($state) => $state ? $state : null)
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
                                        ->tel(),

                                    Select::make('sekolah_asal_id')
                                        ->label('Sekolah Asal')
                                        ->relationship('sekolahAsal', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->searchable()
                                        ->preload()
                                        ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
                                        ->editOptionForm([
                                            Wizard::make([
                                                Step::make('Data Instansi')
                                                    ->schema([
                                                        // Section::make('Instansi')
                                                        //     ->schema([
                                                        TextInput::make('nama')
                                                            ->label('Nama Instansi')
                                                            ->prefixIcon('heroicon-o-building-library')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->columnSpanFull(),
                                                        Select::make('jenjang')
                                                            ->label('Jenjang')
                                                            ->native(false)
                                                            ->required()
                                                            ->live()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->options(function () {
                                                                $sekolah = Sekolah::first(); // Ambil satu instance model Sekolah
                                                                $jenjang = optional($sekolah)->jenjang; // Menghindari error jika null

                                                                return match ($jenjang) {
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
                                                            }),
                                                        TextInput::make('npsn')
                                                            ->label('NPSN')
                                                            ->numeric()
                                                            ->minLength(8)
                                                            ->maxLength(8)
                                                            ->required()
                                                            ->validationMessages([
                                                                'min_digits' => 'NPSN harus terdiri dari minimal 8 digit.',
                                                                'max_digits' => 'NPSN tidak boleh lebih dari 8 digit.',
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
                                                                'min_digits' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                                                'max_digits' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Select::make('akreditasi')
                                                            ->label('Akreditasi')
                                                            ->native(false)
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),

                                                        Select::make('status')
                                                            ->label('Status')
                                                            ->native(false)
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                                                        FileUpload::make('logo')
                                                            ->label('Logo Instansi')
                                                            ->image()
                                                            ->imageEditor()
                                                            ->imageEditorAspectRatios([
                                                                null,
                                                                '1:1' => '1:1',
                                                            ])
                                                            ->fetchFileInformation(false)
                                                            ->directory('assets/instansi-lain')
                                                            ->downloadable()
                                                            ->openable()
                                                            ->maxSize(500)
                                                            ->minSize(10)
                                                            ->visibility('private')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 3,
                                                        'lg' => 3,
                                                    ]),
                                                // ]),
                                                Step::make('Data Alamat')
                                                    ->schema([
                                                        // Section::make('Alamat')
                                                        //     ->schema([
                                                        Select::make('negara_id')
                                                            ->label('Negara')
                                                            ->relationship('negara', 'nama')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('provinsi_id', null);
                                                                $set('kabupaten_id', null);
                                                                $set('kecamatan_id', null);
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('provinsi_id')
                                                            ->label('Provinsi')
                                                            ->options(fn(Get $get): Collection => Provinsi::query()
                                                                ->where('negara_id', $get('negara_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('kabupaten_id', null);
                                                                $set('kecamatan_id', null);
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('kabupaten_id')
                                                            ->label('Kabupaten/Kota')
                                                            ->options(fn(Get $get): Collection => Kabupaten::query()
                                                                ->where('provinsi_id', $get('provinsi_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('kecamatan_id', null);
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('kecamatan_id')
                                                            ->label('Kecamatan')
                                                            ->options(fn(Get $get): Collection => Kecamatan::query()
                                                                ->where('kabupaten_id', $get('kabupaten_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false)
                                                            ->preload()
                                                            ->live()
                                                            ->afterStateUpdated(function (Set $set) {
                                                                $set('kelurahan_id', null);
                                                            }),
                                                        Select::make('kelurahan_id')
                                                            ->label('Kelurahan/Desa')
                                                            ->options(fn(Get $get): Collection => Kelurahan::query()
                                                                ->where('kecamatan_id', $get('kecamatan_id'))
                                                                ->pluck('nama', 'id'))
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->native(false),
                                                        TextInput::make('alamat')
                                                            ->label('Jalan/Kampung/Dusun')
                                                            ->required()
                                                            ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 3,
                                                        'lg' => 3,
                                                    ]),
                                                // ]),
                                                Step::make('Data Kontak')
                                                    ->schema([
                                                        // Section::make('Kontak')
                                                        //     ->schema([
                                                        TextInput::make('website')
                                                            ->label('Website')
                                                            ->url()
                                                            ->prefixIcon('heroicon-m-globe-alt')
                                                            // ->required()
                                                            // ->validationMessages([
                                                            //     'required' => 'Form ini wajib diisi.',
                                                            // ])
                                                            ->placeholder('https://mtsn1pandeglang.sch.id'),
                                                        TextInput::make('telepon')
                                                            ->label('Telepon')
                                                            // ->required()
                                                            // ->validationMessages([
                                                            //     'required' => 'Form ini wajib diisi.',
                                                            // ])
                                                            ->tel()
                                                            ->placeholder('08**********')
                                                            ->prefixIcon('heroicon-m-phone'),
                                                        TextInput::make('email')
                                                            ->label('Email')
                                                            // ->required()
                                                            // ->validationMessages([
                                                            //     'required' => 'Form ini wajib diisi.',
                                                            // ])
                                                            ->placeholder('adm@mtsn1pandeglang.sch.id')
                                                            ->email()
                                                            ->prefixIcon('heroicon-m-envelope'),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 3,
                                                        'lg' => 3,
                                                    ]),
                                                // ]),
                                            ]),
                                        ]),

                                    // Data Prestasi Calon Peserta Didik Baru
                                    Select::make('prestasi_id')
                                        ->visible(fn($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                        ->label('Prestasi')
                                        ->helperText(new HtmlString('<small><i>Pilih prestasi yang paling tinggi jika memiliki lebih dari satu prestasi.</i></small>'))
                                        ->relationship('prestasi', 'nama')
                                        ->preload()
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->editOptionForm([
                                            // Prestasi
                                            // Section::make('Prestasi')
                                            //     ->collapsible()
                                            //     ->schema([
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
                                                        ->native(false)
                                                        ->validationMessages([
                                                            'required' => 'Form ini wajib diisi.',
                                                        ])
                                                        ->live(),
                                                ])
                                                ->columns([
                                                    'sm' => '100%',
                                                    'md' => 2,
                                                    'lg' => 2,
                                                ]),

                                            Section::make('')
                                                ->schema([
                                                    Select::make('tingkat')
                                                        ->label('Tingkat')
                                                        ->native(false)
                                                        ->options([
                                                            'Nasional' => 'Nasional',
                                                            'Provinsi' => 'Provinsi',
                                                            'Kabupaten/Kota' => 'Kabupaten/Kota',
                                                        ])
                                                        ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                    Select::make('kategori')
                                                        ->label('Kategori')
                                                        ->native(false)
                                                        ->options([
                                                            'Regu/Kelompok' => 'Regu/Kelompok',
                                                            'Individu' => 'Individu',
                                                        ])
                                                        ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                    Select::make('peringkat')
                                                        ->label('Peringkat')
                                                        ->options([
                                                            '1' => '1',
                                                            '2' => '2',
                                                            '3' => '3',
                                                        ])
                                                        ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                ])
                                                ->columns([
                                                    'sm' => '100%',
                                                    'md' => 3,
                                                    'lg' => 3,
                                                ])
                                                ->visible(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                        ])
                                        ->columns([
                                            'sm' => '100%',
                                            'md' => 3,
                                            'lg' => 3,
                                            // ]),
                                        ])
                                        ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->jenis} | {$record->nama} | {$record->tingkat} | {$record->kategori} | {$record->peringkat}")
                                        ->searchable()
                                        ->native(false),
                                    // Data Peminatan Ekstrakurikuler Calon Peserta Didik Baru
                                    Select::make('ekstrakurikuler_id')
                                        ->label('Peminatan Ekstrakurikuler')
                                        ->required()
                                        ->searchable()
                                        ->preload()
                                        ->native(false)
                                        ->relationship('ekstrakurikuler', 'nama')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Data Peminatan Pelajaran Calon Peserta Didik Baru
                                    Select::make('mata_pelajaran_id')
                                        // ->visible(fn($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                        ->label('Peminatan Mata Pelajaran')
                                        ->searchable()
                                        ->preload()
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->relationship('mataPelajaran', 'nama')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),

                            // Tab Alamat Calon Peserta Didik Baru
                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Alamat Calon Peserta Didik Baru
                                    Select::make('siswa_negara_id')
                                        ->label('Negara')
                                        ->relationship('siswaNegara', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_provinsi_id', null);
                                            $set('siswa_kabupaten_id', null);
                                            $set('siswa_kecamatan_id', null);
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn(Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('siswa_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_kabupaten_id', null);
                                            $set('siswa_kecamatan_id', null);
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn(Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('siswa_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_kecamatan_id', null);
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn(Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('siswa_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('siswa_kelurahan_id', null);
                                        }),
                                    Select::make('siswa_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn(Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('siswa_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    TextInput::make('siswa_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),

                            // Tab Berkas Calon Peserta Didik Baru
                            Tabs\Tab::make('Berkas')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Berkas Foto Calon Peserta Didik Baru
                                    FileUpload::make('berkas_foto')
                                        ->label('Foto Latar Merah')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/foto/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Berkas KK Calon Peserta Didik Baru
                                    FileUpload::make('berkas_kk')
                                        ->label('Kartu Keluarga')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/kk/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Berkas Akta Calon Peserta Didik Baru
                                    FileUpload::make('berkas_akta')
                                        ->label('Akta Kelahiran')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/akta/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    // Berkas NISN Calon Peserta Didik Baru
                                    FileUpload::make('berkas_nisn')
                                        ->label('Kartu NISN/Tangkapan Layar NISN (Web)')
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/nisn/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->visibility('private'),
                                    // Berkas Surat Keterangan Berkelakuan Baik Calon Peserta Didik Baru
                                    FileUpload::make('berkas_skbb')
                                        ->label('Surat Keterangan Berkelakuan Baik')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/skbb/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas Surat Keterangan Aktif Belajar Calon Peserta Didik Baru
                                    FileUpload::make('berkas_skab')
                                        ->label('Surat Keterangan Aktif Belajar')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/skab/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas KIP Calon Peserta Didik Baru
                                    FileUpload::make('berkas_kip')
                                        ->required(fn($get) => $get('no_kip') !== null)
                                        ->visible(fn($get) => $get('no_kip') !== null)
                                        ->label('Kartu Indonesia Pintar')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/kip/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas KKS Calon Peserta Didik Baru
                                    FileUpload::make('berkas_kks')
                                        ->required(fn($get) => $get('no_kks') !== null)
                                        ->visible(fn($get) => $get('no_kks') !== null)
                                        ->label('Kartu Keluarga Sejahtera')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/kks/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                    // Berkas PKH Calon Peserta Didik Baru
                                    FileUpload::make('berkas_pkh')
                                        ->required(fn($get) => $get('no_pkh') !== null)
                                        ->visible(fn($get) => $get('no_pkh') !== null)
                                        ->label('Kartu Program Keluarga Harapan')
                                        ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                        ->image()
                                        ->imageEditor()
                                        ->imageEditorAspectRatios([
                                            null,
                                            '1:1' => '1:1',
                                            '3:4' => '3:4',
                                        ])
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/pkh/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),

                                    // Berkas Prestasi Belajar Calon Peserta Didik Baru
                                    FileUpload::make('berkas_prestasi')
                                        ->visible(fn($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                        ->label('Berkas Prestasi')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->helperText(new HtmlString('<small><i>Gabungkan semua berkas jika memiliki lebih dari satu prestasi.</i></small>'))
                                        ->fetchFileInformation(false)
                                        ->directory(fn($get) => 'berkas/prestasi/' . $get('nisn')) // Dinamis berdasarkan NISN
                                        ->downloadable()
                                        ->openable()
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->maxSize(500)
                                        ->minSize(10)
                                        ->visibility('private'),
                                ]),

                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),

            Step::make('Data Orang Tua')
                ->schema([
                    // Tab Ibu
                    Tabs::make('Data Ibu Kandung')
                        ->tabs([
                            Tabs\Tab::make('Data Ibu')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Biodata Ibu Calon Peserta Didik Baru
                                    TextInput::make('ibu_nama')
                                        ->label('Nama Lengkap Ibu Kandung')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    TextInput::make('ibu_nik')
                                        ->label('NIK Ibu Kandung')
                                        ->required()
                                        ->maxLength(16)
                                        ->minLength(16)
                                        ->numeric()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                        ]),

                                    TextInput::make('ibu_telepon')
                                        ->label('Nomor Telepon')
                                        ->tel()
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    Select::make('ibu_pekerjaan')
                                        ->label('Pekerjaan')
                                        ->options([
                                            'Tidak Bekerja' => 'Tidak Bekerja',
                                            'ASN' => 'ASN',
                                            'TNI/POLRI' => 'TNI/POLRI',
                                            'Karyawan Swasta' => 'Karyawan Swasta',
                                            'Pegawai Honorer' => 'Pegawai Honorer',
                                            'Wirausaha' => 'Wirausaha',
                                            'Wiraswasta' => 'Wiraswasta',
                                            'Buruh' => 'Buruh',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ibu_penghasilan')
                                        ->label('Penghasilan Bulanan')
                                        ->options([
                                            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                            'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                            'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                            'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                            'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ibu_pendidikan')
                                        ->label('Pendidikan')
                                        ->options([
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
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ibu_status')
                                        ->label('Status')
                                        ->options([
                                            'Hidup' => 'Hidup',
                                            'Meninggal' => 'Meninggal',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                ]),

                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    Select::make('ibu_negara_id')
                                        ->label('Negara')
                                        ->relationship('ibuNegara', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_provinsi_id', null);
                                            $set('ibu_kabupaten_id', null);
                                            $set('ibu_kecamatan_id', null);
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn(Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('ibu_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_kabupaten_id', null);
                                            $set('ibu_kecamatan_id', null);
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn(Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('ibu_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_kecamatan_id', null);
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn(Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('ibu_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ibu_kelurahan_id', null);
                                        }),
                                    Select::make('ibu_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn(Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('ibu_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    TextInput::make('ibu_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    // Tab Ayah
                    Tabs::make('Data Ayah Kandung')
                        ->tabs([
                            Tabs\Tab::make('Data Ayah')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Biodata Ayah Calon Peserta Didik Baru
                                    TextInput::make('ayah_nama')
                                        ->label('Nama Lengkap Ayah Kandung')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    TextInput::make('ayah_nik')
                                        ->label('NIK Ayah Kandung')
                                        ->required()
                                        ->maxLength(16)
                                        ->numeric()
                                        ->minLength(16)
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                        ]),
                                    TextInput::make('ayah_telepon')
                                        ->label('Nomor Telepon')
                                        ->tel()
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                    Select::make('ayah_pekerjaan')
                                        ->label('Pekerjaan')
                                        ->options([
                                            'Tidak Bekerja' => 'Tidak Bekerja',
                                            'ASN' => 'ASN',
                                            'TNI/POLRI' => 'TNI/POLRI',
                                            'Karyawan Swasta' => 'Karyawan Swasta',
                                            'Pegawai Honorer' => 'Pegawai Honorer',
                                            'Wirausaha' => 'Wirausaha',
                                            'Wiraswasta' => 'Wiraswasta',
                                            'Buruh' => 'Buruh',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ayah_penghasilan')
                                        ->label('Penghasilan Bulanan')
                                        ->options([
                                            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                            'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                            'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                            'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                            'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ayah_pendidikan')
                                        ->label('Pendidikan')
                                        ->options([
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
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),

                                    Select::make('ayah_status')
                                        ->label('Status')
                                        ->options([
                                            'Hidup' => 'Hidup',
                                            'Meninggal' => 'Meninggal',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                ]),

                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    Select::make('ayah_negara_id')
                                        ->label('Negara')
                                        ->relationship('ayahNegara', 'nama')
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_provinsi_id', null);
                                            $set('ayah_kabupaten_id', null);
                                            $set('ayah_kecamatan_id', null);
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn(Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('ayah_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_kabupaten_id', null);
                                            $set('ayah_kecamatan_id', null);
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn(Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('ayah_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_kecamatan_id', null);
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn(Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('ayah_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('ayah_kelurahan_id', null);
                                        }),
                                    Select::make('ayah_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn(Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('ayah_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                    TextInput::make('ayah_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005')
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ]),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    // Tab Wali
                    Tabs::make('Data Wali')
                        ->tabs([
                            Tabs\Tab::make('Data Wali')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Biodata Wali Calon Peserta Didik Baru
                                    TextInput::make('wali_nama')
                                        ->label('Nama Lengkap Wali'),
                                    TextInput::make('wali_nik')
                                        ->label('NIK Wali')
                                        ->numeric()
                                        ->maxLength(16)
                                        ->minLength(16)
                                        ->validationMessages([
                                            'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                            'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                        ]),
                                    TextInput::make('wali_telepon')
                                        ->label('Nomor Telepon')
                                        ->tel(),
                                    Select::make('wali_pekerjaan')
                                        ->label('Pekerjaan')
                                        ->options([
                                            'Tidak Bekerja' => 'Tidak Bekerja',
                                            'ASN' => 'ASN',
                                            'TNI/POLRI' => 'TNI/POLRI',
                                            'Karyawan Swasta' => 'Karyawan Swasta',
                                            'Pegawai Honorer' => 'Pegawai Honorer',
                                            'Wirausaha' => 'Wirausaha',
                                            'Wiraswasta' => 'Wiraswasta',
                                            'Buruh' => 'Buruh',
                                        ])
                                        ->native(false),

                                    Select::make('wali_penghasilan')
                                        ->label('Penghasilan Bulanan')
                                        ->options([
                                            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                            'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                            'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                            'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                            'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                        ])
                                        ->native(false),

                                    Select::make('wali_pendidikan')
                                        ->label('Pendidikan')
                                        ->options([
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
                                        ])
                                        ->native(false),
                                    Select::make('wali_status')
                                        ->label('Status')
                                        ->options([
                                            'Hidup' => 'Hidup',
                                            'Meninggal' => 'Meninggal',
                                        ])
                                        ->native(false),
                                ]),

                            Tabs\Tab::make('Alamat')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    Select::make('wali_negara_id')
                                        ->label('Negara')
                                        ->relationship('waliNegara', 'nama')
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_provinsi_id', null);
                                            $set('wali_kabupaten_id', null);
                                            $set('wali_kecamatan_id', null);
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_provinsi_id')
                                        ->label('Provinsi')
                                        ->options(fn(Get $get): Collection => Provinsi::query()
                                            ->where('negara_id', $get('wali_negara_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_kabupaten_id', null);
                                            $set('wali_kecamatan_id', null);
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_kabupaten_id')
                                        ->label('Kabupaten')
                                        ->options(fn(Get $get): Collection => Kabupaten::query()
                                            ->where('provinsi_id', $get('wali_provinsi_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_kecamatan_id', null);
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_kecamatan_id')
                                        ->label('Kecamatan')
                                        ->options(fn(Get $get): Collection => Kecamatan::query()
                                            ->where('kabupaten_id', $get('wali_kabupaten_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false)
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function (Set $set) {
                                            $set('wali_kelurahan_id', null);
                                        }),
                                    Select::make('wali_kelurahan_id')
                                        ->label('Kelurahan')
                                        ->options(fn(Get $get): Collection => Kelurahan::query()
                                            ->where('kecamatan_id', $get('wali_kecamatan_id'))
                                            ->pluck('nama', 'id'))
                                        ->native(false),
                                    TextInput::make('wali_alamat')
                                        ->label('Jalan/Kampung/Dusun')
                                        // ->required()
                                        ->placeholder('KP KEBON CAU RT 001 RW 005'),
                                    // ->validationMessages([
                                    //     'required' => 'Form ini wajib diisi.',
                                    // ]),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                    // Section Kepemilikan Rumah
                    Section::make('Kepemilikan Rumah')
                        ->icon('heroicon-m-bell')
                        ->iconPosition(IconPosition::After)
                        ->schema([
                            // Status Kepemilikan Rumah
                            Select::make('kepemilikan_rumah')
                                ->label('Status Kepemilikan Rumah')
                                ->options([
                                    'Rumah Pribadi' => 'Rumah Pribadi',
                                    'Kontrakan' => 'Kontrakan',
                                    'Rumah Dinas' => 'Rumah Dinas',
                                    'Menumpang Saudara' => 'Menumpang Saudara',
                                ])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false),
                        ]),
                ]),

            Step::make('Data Tes')
                ->hidden(function () {
                    return Auth::user()->roles->first()->name === 'peserta';
                })
                ->schema([
                    Tabs::make('Data Kartu Tes')
                        ->hidden(function () {
                            return Auth::user()->roles->first()->name === 'peserta';
                        })
                        ->tabs([
                            Tabs\Tab::make('Data Kartu Tes')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Data Kartu Tes
                                    TextInput::make('tes_sesi')
                                        ->label('Sesi Tes'),
                                    TextInput::make('tes_ruang')
                                        ->label('Ruang Tes'),
                                    DateTimePicker::make('tes_akademik')
                                        ->label('Tanggal Tes Akademik'),
                                    DateTimePicker::make('tes_praktik')
                                        ->label('Tanggal Tes Praktik'),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                        ]),

                    // Tab Nilai Calon Peserta Didik Baru
                    Tabs::make('Data Nilai Tes')
                        ->hidden(function () {
                            return Auth::user()->roles->first()->name === 'peserta';
                        })
                        ->tabs([
                            Tabs\Tab::make('Data Nilai Tes')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Data Bobot Nilai Tes Akademik Calon Peserta Didik Baru
                                    TextInput::make('bobot_nilai_akademik')
                                        ->label('Bobot Nilai Tes Akademik')
                                        ->numeric(),
                                    // Data Bobot Nilai Tes Praktik Calon Peserta Didik Baru
                                    TextInput::make('bobot_nilai_praktik')
                                        ->label('Bobot Nilai Tes Praktik')
                                        ->numeric(),
                                    // Data Nilai Tes Akademik Calon Peserta Didik Baru
                                    TextInput::make('nilai_akademik')
                                        ->label('Nilai Tes Akademik')
                                        ->numeric(),
                                    // Data Nilai Tes Praktik Calon Peserta Didik Baru
                                    TextInput::make('nilai_praktik')
                                        ->label('Nilai Tes Praktik')
                                        ->numeric(),
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                        ]),
                ])
                ->columns([
                    'sm' => '100%',
                    'md' => '100%',
                    'lg' => 2,
                ])
                ->columnSpanFull(),
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
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $urlCreate = '/formulir/create';
            $urlView = '';
            $urlEdit = '';

            if ($calonSiswa) {
                $urlView = "/formulir/{$calonSiswa->id}";
                $urlEdit = "/formulir/{$calonSiswa->id}/edit";
            }
        }

        return [
            // Daftar Sekarang
            Action::make('buat_formulir_pendaftaran')
                ->label('Daftar Sekarang 🚀')
                ->icon('heroicon-o-clipboard-document-list')
                ->outlined()
                ->color('primary')
                ->url($urlCreate)
                ->hidden(Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa !== null),

            // Lihat Formulir
            Action::make('lihat_formulir_pendaftaran')
                ->label('Lihat')
                ->icon('heroicon-m-eye')
                ->outlined()
                ->url($urlView)
                ->color(Color::Zinc)
                ->hidden(
                    Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diproses' || $calonSiswa->status_pendaftaran === 'Berkas Tidak Lengkap'
                ),

            // Edit Formulir
            Action::make('ubah_formulir_pendaftaran')
                ->label('Ubah')
                ->icon('heroicon-m-pencil-square')
                ->url($urlEdit)
                ->color('success')
                ->outlined()
                ->hidden(
                    Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Diverifikasi' || $calonSiswa->status_pendaftaran === 'Ditolak'
                )
                ->successRedirectUrl($urlView),

            // Export
            ExportAction::make('export')
                ->label('Ekspor')
                ->outlined()
                ->icon('heroicon-m-cloud-arrow-down')
                ->color('success')
                ->exporter(CalonSiswaExporter::class)
                ->chunkSize(250)
                ->visible(fn (): string => CalonSiswa::count() > 0 && Auth::user()->roles->first()->name !== 'peserta'),

            // Import
            ImportAction::make('import')
                ->label('Import')
                ->outlined()
                ->icon('heroicon-m-cloud-arrow-up')
                ->color(Color::Cyan)
                ->importer(CalonSiswaImporter::class)
                ->chunkSize(250)
                ->visible(function () {
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();

                    // Pastikan hanya menampilkan jika tahun pendaftaran aktif ditemukan
                    return $tahunPendaftaran && CalonSiswa::count() > 0 && optional(Auth::user()->roles->first())->name === 'administrator';
                }),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource/Pages/ViewCalonSiswa.php`

```php
<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Models\CalonSiswa;
use App\Models\JalurPendaftaran;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ViewCalonSiswa extends ViewRecord
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Formulir
            Html2MediaAction::make('cetak_formulir')
                ->label('Formulir')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn ($record) => 'Formulir_'.$record->nama.'_'.$record->nisn.'.pdf')
                ->savePdf()
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn ($record) => view('formulir', ['record' => $record]))
                ->visible(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                    if (! $calonSiswa) {
                        return false;
                    }

                    return ! in_array($calonSiswa->status_pendaftaran, ['Diproses', 'Ditolak', 'Berkas Tidak Lengkap']);
                }),

            // Kartu Tes
            Html2MediaAction::make('cetak_kartu_tes')
                ->label('Kartu Tes')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn ($record) => 'Kartu Tes_'.$record->nama.'_'.$record->nisn.'.pdf')
                ->savePdf()
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn ($record) => view('kartu-tes', ['record' => $record]))
                ->visible(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                    if (! $calonSiswa || in_array($calonSiswa->status_pendaftaran, ['Diproses', 'Ditolak', 'Berkas Tidak Lengkap', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan'])) {
                        return false;
                    }

                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();

                    if (! $tahunPendaftaran || ! $tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai || ! $tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai) {
                        return false;
                    }

                    return Carbon::now()->between(
                        Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai),
                        Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                    );
                }),

            // SKL/Hasil
            Html2MediaAction::make('cetak_skl')
                ->label('Hasil')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn ($record) => 'Hasil_'.$record->nama.'_'.$record->nisn.'.pdf')
                ->savePdf()
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn ($record) => view('skl', ['record' => $record]))
                ->visible(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                    if (! $calonSiswa || in_array($calonSiswa->status_pendaftaran, ['Diproses', 'Diverifikasi', 'Berkas Tidak Lengkap'])) {
                        return false;
                    }
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();
                    if (! $tahunPendaftaran) {
                        return false;
                    }
                    $periodePengumuman = collect([
                        ['tanggal_pengumuman_jalur_prestasi_mulai', 'tanggal_pengumuman_jalur_prestasi_selesai'],
                        ['tanggal_pengumuman_jalur_reguler_mulai', 'tanggal_pengumuman_jalur_reguler_selesai'],
                        ['tanggal_pengumuman_jalur_afirmasi_mulai', 'tanggal_pengumuman_jalur_afirmasi_selesai'],
                        ['tanggal_pengumuman_jalur_zonasi_mulai', 'tanggal_pengumuman_jalur_zonasi_selesai'],
                        ['tanggal_pengumuman_jalur_mutasi_mulai', 'tanggal_pengumuman_jalur_mutasi_selesai'],
                    ])->map(fn ($dates) => [
                        optional($tahunPendaftaran)->{$dates[0]} ? Carbon::parse($tahunPendaftaran->{$dates[0]}) : null,
                        optional($tahunPendaftaran)->{$dates[1]} ? Carbon::parse($tahunPendaftaran->{$dates[1]}) : null,
                    ]);

                    return $periodePengumuman->contains(fn ($range) => now()->between(...$range));
                }),

        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Step::make('Data Calon Siswa')
                        ->schema([
                            // Section Formulir
                            Section::make('Formulir Pendaftaran')
                                // ->collapsible()
                                ->schema([
                                    // Data Status Pendaftaran Calon Peserta Didik Baru
                                    Select::make('status_pendaftaran')
                                        ->label('Status Pendaftaran')
                                        ->options([
                                            'Diproses' => 'Diproses',
                                            'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                                            'Diverifikasi' => 'Diverifikasi',
                                            'Ditolak' => 'Ditolak',
                                            'Diterima' => 'Diterima',
                                            'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                                            'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                                        ])
                                        ->native(false)
                                        ->live()
                                        ->default('Diproses'),
                                    // Data Kelas Pendaftaran Calon Peserta Didik Baru
                                    Select::make('kelas_id')
                                        ->label('Kelas')
                                        ->relationship('kelas', 'nama')
                                        ->native(false),
                                ])
                                ->visible(Auth::user()->roles->first()->name !== 'peserta')
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 2,
                                    'lg' => 2,
                                    'xl' => 2,
                                    '2xl' => 2,
                                ]),

                            Tabs::make('Biodata')
                                ->tabs([
                                    Tabs\Tab::make('Biodata')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Jalur Pendaftaran
                                            Select::make('jalur_pendaftaran_id')
                                                ->label('Jalur Pendaftaran')
                                                ->relationship('jalurPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif')) // Menampilkan data jalurPendaftaran dengan kondisi statusnya aktif saja
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->live()
                                                ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}"),
                                            // Nama Lengkap Calon Peserta Didik Baru
                                            TextInput::make('nama')
                                                ->label('Nama Lengkap')
                                                ->required()
                                                ->disabledOn('create')
                                                ->dehydrated()
                                                ->default(fn () => Auth::user()->name)
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // NIK Calon Peserta Didik Baru
                                            TextInput::make('nik')
                                                ->label('Nomor Induk Kependudukan (NIK)')
                                                ->required()
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,nik' : 'unique:calon_siswas,nik,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->numeric()
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                    'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // KK Calon Peserta Didik Baru
                                            TextInput::make('kk')
                                                ->label('Nomor Kartu Keluarga (KK)')
                                                ->required()
                                                ->maxLength(16)
                                                ->numeric()
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // NISN Calon Peserta Didik Baru
                                            TextInput::make('nisn')
                                                ->label('Nomor Induk Siswa Nasional (NISN)')
                                                ->required()
                                                ->disabledOn('create')
                                                ->dehydrated()
                                                ->default(fn () => Auth::user()->username)
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,nisn' : 'unique:calon_siswas,nisn,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->numeric()
                                                ->maxLength(10)
                                                ->minLength(10)
                                                ->validationMessages([
                                                    'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                                                    'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                                                    'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tempat Lahir Calon Peserta Didik Baru
                                            TextInput::make('tempat_lahir')
                                                ->label('Tempat Lahir')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tanggal Lahir Calon Peserta Didik Baru
                                            DatePicker::make('tanggal_lahir')
                                                ->label('Tanggal Lahir')
                                                ->maxDate(now())
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tahun Lulus Calon Peserta Didik Baru
                                            Select::make('tahun_lulus')
                                                ->label('Tahun Lulus')
                                                ->options(function () {
                                                    $tahun = range(date('Y'), date('Y') - 2);

                                                    return array_combine($tahun, $tahun);
                                                })
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Jenis Kelamin Calon Peserta Didik Baru
                                            Select::make('jenis_kelamin')
                                                ->label('Jenis Kelamin')
                                                ->options([
                                                    'Pria' => 'Laki-laki',
                                                    'Wanita' => 'Perempuan',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Golongan Darah Calon Peserta Didik Baru
                                            Select::make('golongan_darah')
                                                ->label('Golongan Darah')
                                                ->options([
                                                    'A-' => 'A-',
                                                    'A+' => 'A+',
                                                    'B-' => 'B-',
                                                    'B+' => 'B+',
                                                    'AB-' => 'AB-',
                                                    'AB+' => 'AB+',
                                                    'O-' => 'O-',
                                                    'O+' => 'O+',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Agama Calon Peserta Didik Baru
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
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Anak Ke Calon Peserta Didik Baru
                                            TextInput::make('anak_ke')
                                                ->label('Anak Ke')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->numeric(),
                                            // Jumlah Saudara Calon Peserta Didik Baru
                                            TextInput::make('jumlah_saudara')
                                                ->label('Dari (Jumlah Anak)')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->numeric(),
                                            // Tinggal Bersama Calon Peserta Didik Baru
                                            Select::make('tinggal_bersama')
                                                ->label('Tinggal Bersama')
                                                ->options([
                                                    'Orang Tua' => 'Orang Tua',
                                                    'Saudara' => 'Saudara',
                                                    'Panti Asuhan' => 'Panti Asuhan',
                                                    'Kost' => 'Kost',
                                                    'Lainnya' => 'Lainnya',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Jarak Ke Sekolah Calon Peserta Didik Baru
                                            Select::make('jarak_ke_sekolah')
                                                ->label('Jarak Ke Sekolah')
                                                ->options([
                                                    '0 - 1 Km' => '0 - 1 Km',
                                                    '1 - 5 Km' => '1 - 5 Km',
                                                    '5 - 10 Km' => '5 - 10 Km',
                                                    '10 - 15 Km' => '10 - 15 Km',
                                                    '15 - 20 Km' => '15 - 20 Km',
                                                    '20 - 25 Km' => '20 - 25 Km',
                                                    '25 - 30 Km' => '25 - 30 Km',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Disabilitas Calon Peserta Didik Baru
                                            Select::make('disabilitas')
                                                ->label('Disabilitas')
                                                ->options([
                                                    'Non Disabilitas' => 'Non Disabilitas',
                                                    'Fisik' => 'Fisik',
                                                    'Penglihatan' => 'Penglihatan',
                                                    'Pendengaran' => 'Pendengaran',
                                                    'Kognitif' => 'Kognitif',
                                                    'Mental' => 'Mental',
                                                    'Lainnya' => 'Lainnya',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Tinggi Badan Calon Peserta Didik Baru
                                            TextInput::make('tinggi_badan')
                                                ->label('Tinggi Badan')
                                                ->postFix('Cm')
                                                ->numeric(),
                                            // Berat Badan Calon Peserta Didik Baru
                                            TextInput::make('berat_badan')
                                                ->label('Berat Badan')
                                                ->postFix('Kg')
                                                ->numeric(),
                                            // No KIP Calon Peserta Didik Baru
                                            TextInput::make('no_kip')
                                                ->label('Nomor Kartu Indonesia Pintar')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_kip' : 'unique:calon_siswas,no_kip,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->maxLength(6)
                                                ->minLength(6)
                                                ->live()
                                                ->validationMessages([
                                                    'max' => 'KIP: Masukkan maksimal 6 Karakter.',
                                                    'min' => 'KIP: Masukkan minimal 6 Karakter.',
                                                    'unique' => 'KIP: Nomor ini sudah pernah di isi.',
                                                ]),
                                            // No KIP Calon Peserta Didik Baru
                                            TextInput::make('no_kks')
                                                ->label('Nomor Kartu Keluarga Sejahtera')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_kks' : 'unique:calon_siswas,no_kks,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->maxLength(6)
                                                ->minLength(6)
                                                ->live()
                                                ->validationMessages([
                                                    'max' => 'KKS: Masukkan maksimal 6 Karakter.',
                                                    'min' => 'KKS: Masukkan minimal 6 Karakter.',
                                                    'unique' => 'KKS: Nomor ini sudah pernah di isi.',
                                                ]),
                                            // No KIP Calon Peserta Didik Baru
                                            TextInput::make('no_pkh')
                                                ->label('Nomor Kartu Program Keluarga Harapan')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_pkh' : 'unique:calon_siswas,no_pkh,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
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
                                            // Data Sekolah Asal Calon Peserta Didik Baru
                                            Select::make('sekolah_asal_id')
                                                ->label('Sekolah Asal')
                                                ->relationship('sekolahAsal', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->searchable()
                                                ->preload()
                                                ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
                                                ->createOptionForm([
                                                    Wizard::make([
                                                        Step::make('Data Instansi')
                                                            ->schema([
                                                                // Section::make('Instansi')
                                                                //     ->schema([
                                                                TextInput::make('nama')
                                                                    ->label('Nama Instansi')
                                                                    ->prefixIcon('heroicon-o-building-library')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->columnSpanFull(),
                                                                Select::make('jenjang')
                                                                    ->label('Jenjang')
                                                                    ->native(false)
                                                                    ->required()
                                                                    ->live()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->options(function () {
                                                                        $sekolah = Sekolah::first(); // Ambil satu instance model Sekolah
                                                                        $jenjang = optional($sekolah)->jenjang; // Menghindari error jika null

                                                                        return match ($jenjang) {
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
                                                                    }),
                                                                TextInput::make('npsn')
                                                                    ->label('NPSN')
                                                                    ->numeric()
                                                                    ->minLength(8)
                                                                    ->maxLength(8)
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'min_digits' => 'NPSN harus terdiri dari minimal 8 digit.',
                                                                        'max_digits' => 'NPSN tidak boleh lebih dari 8 digit.',
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
                                                                        'min_digits' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                                                        'max_digits' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                                Select::make('akreditasi')
                                                                    ->label('Akreditasi')
                                                                    ->native(false)
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),

                                                                Select::make('status')
                                                                    ->label('Status')
                                                                    ->native(false)
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                                                                FileUpload::make('logo')
                                                                    ->label('Logo Instansi')
                                                                    ->image()
                                                                    ->imageEditor()
                                                                    ->imageEditorAspectRatios([
                                                                        null,
                                                                        '1:1' => '1:1',
                                                                    ])
                                                                    ->fetchFileInformation(false)
                                                                    ->directory('assets/instansi-lain')
                                                                    ->downloadable()
                                                                    ->openable()
                                                                    ->maxSize(500)
                                                                    ->minSize(10)
                                                                    ->visibility('private')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                            ])
                                                            ->columns([
                                                                'sm' => '100%',
                                                                'md' => 3,
                                                                'lg' => 3,
                                                            ]),
                                                        // ]),
                                                        Step::make('Data Alamat')
                                                            ->schema([
                                                                // Section::make('Alamat')
                                                                //     ->schema([
                                                                Select::make('negara_id')
                                                                    ->label('Negara')
                                                                    ->relationship('negara', 'nama')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('provinsi_id', null);
                                                                        $set('kabupaten_id', null);
                                                                        $set('kecamatan_id', null);
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('provinsi_id')
                                                                    ->label('Provinsi')
                                                                    ->options(fn (Get $get): Collection => Provinsi::query()
                                                                        ->where('negara_id', $get('negara_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('kabupaten_id', null);
                                                                        $set('kecamatan_id', null);
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('kabupaten_id')
                                                                    ->label('Kabupaten/Kota')
                                                                    ->options(fn (Get $get): Collection => Kabupaten::query()
                                                                        ->where('provinsi_id', $get('provinsi_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('kecamatan_id', null);
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('kecamatan_id')
                                                                    ->label('Kecamatan')
                                                                    ->options(fn (Get $get): Collection => Kecamatan::query()
                                                                        ->where('kabupaten_id', $get('kabupaten_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('kelurahan_id')
                                                                    ->label('Kelurahan/Desa')
                                                                    ->options(fn (Get $get): Collection => Kelurahan::query()
                                                                        ->where('kecamatan_id', $get('kecamatan_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false),
                                                                TextInput::make('alamat')
                                                                    ->label('Jalan/Kampung/Dusun')
                                                                    ->required()
                                                                    ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                            ])
                                                            ->columns([
                                                                'sm' => '100%',
                                                                'md' => 3,
                                                                'lg' => 3,
                                                            ]),
                                                        // ]),
                                                        Step::make('Data Kontak')
                                                            ->schema([
                                                                // Section::make('Kontak')
                                                                //     ->schema([
                                                                TextInput::make('website')
                                                                    ->label('Website')
                                                                    ->url()
                                                                    ->prefixIcon('heroicon-m-globe-alt')
                                                                    // ->required()
                                                                    // ->validationMessages([
                                                                    //     'required' => 'Form ini wajib diisi.',
                                                                    // ])
                                                                    ->placeholder('https://mtsn1pandeglang.sch.id'),
                                                                TextInput::make('telepon')
                                                                    ->label('Telepon')
                                                                    // ->required()
                                                                    // ->validationMessages([
                                                                    //     'required' => 'Form ini wajib diisi.',
                                                                    // ])
                                                                    ->tel()
                                                                    ->placeholder('08**********')
                                                                    ->prefixIcon('heroicon-m-phone'),
                                                                TextInput::make('email')
                                                                    ->label('Email')
                                                                    // ->required()
                                                                    // ->validationMessages([
                                                                    //     'required' => 'Form ini wajib diisi.',
                                                                    // ])
                                                                    ->placeholder('adm@mtsn1pandeglang.sch.id')
                                                                    ->email()
                                                                    ->prefixIcon('heroicon-m-envelope'),
                                                            ])
                                                            ->columns([
                                                                'sm' => '100%',
                                                                'md' => 3,
                                                                'lg' => 3,
                                                            ]),
                                                        // ]),
                                                    ]),
                                                ]),
                                            // Data Prestasi Calon Peserta Didik Baru
                                            Select::make('prestasi_id')
                                                ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->label('Prestasi')
                                                ->helperText(new HtmlString('<small><i>Pilih prestasi yang paling tinggi jika memiliki lebih dari satu prestasi.</i></small>'))
                                                ->relationship('prestasi', 'nama')
                                                ->preload()
                                                ->createOptionForm([
                                                    // Prestasi
                                                    // Section::make('Prestasi')
                                                    //     ->collapsible()
                                                    //     ->schema([
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
                                                                ->native(false)
                                                                ->validationMessages([
                                                                    'required' => 'Form ini wajib diisi.',
                                                                ])
                                                                ->live(),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 2,
                                                            'lg' => 2,
                                                        ]),

                                                    Section::make('')
                                                        ->schema([
                                                            Select::make('tingkat')
                                                                ->label('Tingkat')
                                                                ->native(false)
                                                                ->options([
                                                                    'Nasional' => 'Nasional',
                                                                    'Provinsi' => 'Provinsi',
                                                                    'Kabupaten/Kota' => 'Kabupaten/Kota',
                                                                ])
                                                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                            Select::make('kategori')
                                                                ->label('Kategori')
                                                                ->native(false)
                                                                ->options([
                                                                    'Regu/Kelompok' => 'Regu/Kelompok',
                                                                    'Individu' => 'Individu',
                                                                ])
                                                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                            Select::make('peringkat')
                                                                ->label('Peringkat')
                                                                ->options([
                                                                    '1' => '1',
                                                                    '2' => '2',
                                                                    '3' => '3',
                                                                ])
                                                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 3,
                                                            'lg' => 3,
                                                        ])
                                                        ->visible(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                ])
                                                ->columns([
                                                    'sm' => '100%',
                                                    'md' => 3,
                                                    'lg' => 3,
                                                    // ]),
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->jenis} | {$record->nama} | {$record->tingkat} | {$record->kategori} | {$record->peringkat}")
                                                ->searchable()
                                                ->native(false),
                                            // Data Peminatan Ekstrakurikuler Calon Peserta Didik Baru
                                            Select::make('ekstrakurikuler_id')
                                                ->label('Peminatan Ekstrakurikuler')
                                                ->required()
                                                ->searchable()
                                                ->preload()
                                                ->native(false)
                                                ->relationship('ekstrakurikuler', 'nama')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Data Peminatan Pelajaran Calon Peserta Didik Baru
                                            Select::make('mata_pelajaran_id')
                                                ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->label('Peminatan Mata Pelajaran')
                                                ->searchable()
                                                ->preload()
                                                ->required()
                                                ->native(false)
                                                ->relationship('mataPelajaran', 'nama')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),

                                    // Tab Alamat Calon Peserta Didik Baru
                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Alamat Calon Peserta Didik Baru
                                            Select::make('siswa_negara_id')
                                                ->label('Negara')
                                                ->relationship('siswaNegara', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_provinsi_id', null);
                                                    $set('siswa_kabupaten_id', null);
                                                    $set('siswa_kecamatan_id', null);
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('siswa_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_kabupaten_id', null);
                                                    $set('siswa_kecamatan_id', null);
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('siswa_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_kecamatan_id', null);
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('siswa_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('siswa_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            TextInput::make('siswa_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),

                                    // Tab Berkas Calon Peserta Didik Baru
                                    Tabs\Tab::make('Berkas')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Berkas Foto Calon Peserta Didik Baru
                                            FileUpload::make('berkas_foto')
                                                ->label('Foto Latar Merah')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/foto/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Berkas KK Calon Peserta Didik Baru
                                            FileUpload::make('berkas_kk')
                                                ->label('Kartu Keluarga')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/kk/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Berkas Akta Calon Peserta Didik Baru
                                            FileUpload::make('berkas_akta')
                                                ->label('Akta Kelahiran')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/akta/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),

                                            // Berkas NISN Calon Peserta Didik Baru
                                            FileUpload::make('berkas_nisn')
                                                ->label('Kartu NISN/Tangkapan Layar NISN (Web)')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/nisn/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->visibility('private'),
                                            // Berkas Surat Keterangan Berkelakuan Baik Calon Peserta Didik Baru
                                            FileUpload::make('berkas_skbb')
                                                ->label('Surat Keterangan Berkelakuan Baik')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/skbb/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas Surat Keterangan Aktif Belajar Calon Peserta Didik Baru
                                            FileUpload::make('berkas_skab')
                                                ->label('Surat Keterangan Aktif Belajar')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/skab/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),

                                            // Berkas KIP Calon Peserta Didik Baru
                                            FileUpload::make('berkas_kip')
                                                ->required(fn ($get) => $get('no_kip') !== null)
                                                ->visible(fn ($get) => $get('no_kip') !== null)
                                                ->label('Kartu Indonesia Pintar')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/kip/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas KKS Calon Peserta Didik Baru
                                            FileUpload::make('berkas_kks')
                                                ->required(fn ($get) => $get('no_kks') !== null)
                                                ->visible(fn ($get) => $get('no_kks') !== null)
                                                ->label('Kartu Keluarga Sejahtera')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/kks/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas PKH Calon Peserta Didik Baru
                                            FileUpload::make('berkas_pkh')
                                                ->required(fn ($get) => $get('no_pkh') !== null)
                                                ->visible(fn ($get) => $get('no_pkh') !== null)
                                                ->label('Kartu Program Keluarga Harapan')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/pkh/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas Prestasi Belajar Calon Peserta Didik Baru
                                            FileUpload::make('berkas_prestasi')
                                                ->required(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->label('Berkas Prestasi')
                                                ->helperText(new HtmlString('<small><i>Gabungkan semua berkas jika memiliki lebih dari satu prestasi.</i></small>'))
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/prestasi/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                        ]),

                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),
                        ]),

                    Step::make('Data Orang Tua')
                        ->schema([
                            // Tab Ibu
                            Tabs::make('Data Ibu Kandung')
                                ->tabs([
                                    Tabs\Tab::make('Data Ibu')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Biodata Ibu Calon Peserta Didik Baru
                                            TextInput::make('ibu_nama')
                                                ->label('Nama Lengkap Ibu Kandung')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            TextInput::make('ibu_nik')
                                                ->label('NIK Ibu Kandung')
                                                ->required()
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->numeric()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                ]),

                                            TextInput::make('ibu_telepon')
                                                ->label('Nomor Telepon')
                                                ->numeric()
                                                ->tel()
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Select::make('ibu_pekerjaan')
                                                ->label('Pekerjaan')
                                                ->options([
                                                    'Tidak Bekerja' => 'Tidak Bekerja',
                                                    'ASN' => 'ASN',
                                                    'TNI/POLRI' => 'TNI/POLRI',
                                                    'Karyawan Swasta' => 'Karyawan Swasta',
                                                    'Pegawai Honorer' => 'Pegawai Honorer',
                                                    'Wirausaha' => 'Wirausaha',
                                                    'Wiraswasta' => 'Wiraswasta',
                                                    'Buruh' => 'Buruh',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ibu_penghasilan')
                                                ->label('Penghasilan Bulanan')
                                                ->options([
                                                    'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                                    'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                                    'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                                    'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                                    'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                                    'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                                    'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ibu_pendidikan')
                                                ->label('Pendidikan')
                                                ->options([
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
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ibu_status')
                                                ->label('Status')
                                                ->options([
                                                    'Hidup' => 'Hidup',
                                                    'Meninggal' => 'Meninggal',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                        ]),

                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            Select::make('ibu_negara_id')
                                                ->label('Negara')
                                                ->relationship('ibuNegara', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_provinsi_id', null);
                                                    $set('ibu_kabupaten_id', null);
                                                    $set('ibu_kecamatan_id', null);
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('ibu_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_kabupaten_id', null);
                                                    $set('ibu_kecamatan_id', null);
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('ibu_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_kecamatan_id', null);
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('ibu_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('ibu_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            TextInput::make('ibu_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),
                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),

                            // Tab Ayah
                            Tabs::make('Data Ayah Kandung')
                                ->tabs([
                                    Tabs\Tab::make('Data Ayah')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Biodata Ayah Calon Peserta Didik Baru
                                            TextInput::make('ayah_nama')
                                                ->label('Nama Lengkap Ayah Kandung')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            TextInput::make('ayah_nik')
                                                ->label('NIK Ayah Kandung')
                                                ->required()
                                                ->maxLength(16)
                                                ->numeric()
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                ]),
                                            TextInput::make('ayah_telepon')
                                                ->label('Nomor Telepon')
                                                ->numeric()
                                                ->tel()
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Select::make('ayah_pekerjaan')
                                                ->label('Pekerjaan')
                                                ->options([
                                                    'Tidak Bekerja' => 'Tidak Bekerja',
                                                    'ASN' => 'ASN',
                                                    'TNI/POLRI' => 'TNI/POLRI',
                                                    'Karyawan Swasta' => 'Karyawan Swasta',
                                                    'Pegawai Honorer' => 'Pegawai Honorer',
                                                    'Wirausaha' => 'Wirausaha',
                                                    'Wiraswasta' => 'Wiraswasta',
                                                    'Buruh' => 'Buruh',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ayah_penghasilan')
                                                ->label('Penghasilan Bulanan')
                                                ->options([
                                                    'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                                    'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                                    'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                                    'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                                    'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                                    'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                                    'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ayah_pendidikan')
                                                ->label('Pendidikan')
                                                ->options([
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
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ayah_status')
                                                ->label('Status')
                                                ->options([
                                                    'Hidup' => 'Hidup',
                                                    'Meninggal' => 'Meninggal',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                        ]),

                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            Select::make('ayah_negara_id')
                                                ->label('Negara')
                                                ->relationship('ayahNegara', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_provinsi_id', null);
                                                    $set('ayah_kabupaten_id', null);
                                                    $set('ayah_kecamatan_id', null);
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('ayah_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_kabupaten_id', null);
                                                    $set('ayah_kecamatan_id', null);
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('ayah_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_kecamatan_id', null);
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('ayah_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('ayah_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            TextInput::make('ayah_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),
                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),

                            // Tab Wali
                            Tabs::make('Data Wali')
                                ->tabs([
                                    Tabs\Tab::make('Data Wali')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Biodata Wali Calon Peserta Didik Baru
                                            TextInput::make('wali_nama')
                                                ->label('Nama Lengkap Wali'),
                                            TextInput::make('wali_nik')
                                                ->label('NIK Wali')
                                                ->numeric()
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                ]),
                                            TextInput::make('wali_telepon')
                                                ->label('Nomor Telepon')
                                                ->numeric()
                                                ->tel(),
                                            Select::make('wali_pekerjaan')
                                                ->label('Pekerjaan')
                                                ->options([
                                                    'Tidak Bekerja' => 'Tidak Bekerja',
                                                    'ASN' => 'ASN',
                                                    'TNI/POLRI' => 'TNI/POLRI',
                                                    'Karyawan Swasta' => 'Karyawan Swasta',
                                                    'Pegawai Honorer' => 'Pegawai Honorer',
                                                    'Wirausaha' => 'Wirausaha',
                                                    'Wiraswasta' => 'Wiraswasta',
                                                    'Buruh' => 'Buruh',
                                                ])
                                                ->native(false),

                                            Select::make('wali_penghasilan')
                                                ->label('Penghasilan Bulanan')
                                                ->options([
                                                    'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                                    'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                                    'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                                    'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                                    'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                                    'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                                    'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                                ])
                                                ->native(false),

                                            Select::make('wali_pendidikan')
                                                ->label('Pendidikan')
                                                ->options([
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
                                                ])
                                                ->native(false),
                                            Select::make('wali_status')
                                                ->label('Status')
                                                ->options([
                                                    'Hidup' => 'Hidup',
                                                    'Meninggal' => 'Meninggal',
                                                ])
                                                ->native(false),
                                        ]),

                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            Select::make('wali_negara_id')
                                                ->label('Negara')
                                                ->relationship('waliNegara', 'nama')
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_provinsi_id', null);
                                                    $set('wali_kabupaten_id', null);
                                                    $set('wali_kecamatan_id', null);
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('wali_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kabupaten_id', null);
                                                    $set('wali_kecamatan_id', null);
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('wali_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kecamatan_id', null);
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('wali_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('wali_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false),
                                            TextInput::make('wali_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                // ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005'),
                                            // ->validationMessages([
                                            //     'required' => 'Form ini wajib diisi.',
                                            // ]),
                                        ]),
                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),
                            // Section Kepemilikan Rumah
                            Section::make('Kepemilikan Rumah')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Status Kepemilikan Rumah
                                    Select::make('kepemilikan_rumah')
                                        ->label('Status Kepemilikan Rumah')
                                        ->options([
                                            'Rumah Pribadi' => 'Rumah Pribadi',
                                            'Kontrakan' => 'Kontrakan',
                                            'Rumah Dinas' => 'Rumah Dinas',
                                            'Menumpang Saudara' => 'Menumpang Saudara',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                ]),
                        ]),
                ])
                    ->columnSpanFull(),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/CalonSiswaResource.php`

```php
<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Tables;
use App\Models\CalonSiswa;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Exports\CalonSiswaExporter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CalonSiswaResource\Pages;
use Torgodly\Html2Media\Tables\Actions\Html2MediaAction;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $label = 'Formulir Pendaftaran';

    protected static ?string $slug = 'formulir';

    // protected static ?string $navigationGroup = 'Formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function getNavigationBadge(): ?string
    {
        return CalonSiswa::count();
    }

    public static function table(Table $table): Table
    {
        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
        $label = $calonSiswa ? $calonSiswa->status_pendaftaran : '';
        $statusHidden = ['Diterima', 'Diterima Di Kelas Unggulan', 'Diterima Di Kelas Reguler', 'Ditolak'];

        return $table
            ->query(
                optional(Auth::user()->roles->first())->name !== 'peserta'
                    ? CalonSiswa::query()
                    : CalonSiswa::query()->where('nisn', Auth::user()->username)
                // tambahkan logika untuk menampilkan bata berdasarkan tahun pendaftaran aktif saja
            )
            ->headerActions([
                Action::make('status_pendaftaran')
                    ->label($label)
                    ->color(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                        if (! $calonSiswa) {
                            return 'warning';
                        }
                        $status = [
                            'Diproses' => 'warning',
                            'Diverifikasi' => 'success',
                            'Berkas Tidak Lengkap' => 'warning',
                            'Ditolak' => 'danger',
                            'Diterima' => 'success',
                            'Diterima Di Kelas Reguler' => 'success',
                            'Diterima Di Kelas Unggulan' => 'info',
                        ];

                        return $status[$calonSiswa->status_pendaftaran] ?? 'warning';
                    })
                    ->icon(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                        if (! $calonSiswa) {
                            return 'heroicon-o-arrow-path';
                        }
                        $status = [
                            'Diproses' => 'heroicon-o-arrow-path',
                            'Diverifikasi' => 'heroicon-o-clipboard-document-check',
                            'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                            'Ditolak' => 'heroicon-o-no-symbol',
                            'Diterima' => 'heroicon-o-check-circle',
                            'Diterima Di Kelas Reguler' => 'heroicon-o-shield-check',
                            'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
                        ];

                        return $status[$calonSiswa->status_pendaftaran] ?? 'gray';
                    })
                    ->outlined()
                    ->size('sm')
                    ->disabled()
                    ->hidden(optional(Auth::user()->roles->first())->name !== 'peserta' || $calonSiswa === null || in_array($calonSiswa->status_pendaftaran, $statusHidden)),
            ])
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular(),

                TextColumn::make('jalurPendaftaran.nama')
                    ->label('Jalur Pendaftaran')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Reguler' => 'success',
                        'Prestasi' => 'primary',
                        'Afirmasi' => 'warning',
                        'Zonasi' => 'danger',
                        'Mutasi' => 'info',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Reguler' => 'heroicon-o-sparkles',
                        'Prestasi' => 'heroicon-o-trophy',
                        'Afirmasi' => 'heroicon-o-gift',
                        'Zonasi' => 'heroicon-o-map',
                        'Mutasi' => 'heroicon-o-arrows-right-left',
                    }),

                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Diproses' => 'warning',
                        'Diverifikasi' => 'success',
                        'Berkas Tidak Lengkap' => 'warning',
                        'Ditolak' => 'danger',
                        'Diterima' => 'success',
                        'Diterima Di Kelas Reguler' => 'success',
                        'Diterima Di Kelas Unggulan' => 'primary',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Diproses' => 'heroicon-o-arrow-path',
                        'Diverifikasi' => 'heroicon-o-clipboard-document-check',
                        'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                        'Ditolak' => 'heroicon-o-no-symbol',
                        'Diterima' => 'heroicon-o-check-circle',
                        'Diterima Di Kelas Reguler' => 'heroicon-o-shield-check',
                        'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
                    })
                    ->visible(Auth::user()->roles->first()->name === 'administrator'),
                TextColumn::make('kelas.nama')
                    ->label('Diterima Di Kelas')
                    ->badge()
                    ->icon('heroicon-o-building-storefront')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();

                        // Pastikan data tahun pendaftaran dan tanggal selesai registrasi berkas tersedia
                        if (! $tahunPendaftaran || ! $tahunPendaftaran->tanggal_registrasi_berkas_selesai) {
                            return false;
                        }

                        // Konversi tanggal ke Carbon untuk perbandingan
                        $berkasDate = Carbon::parse($tahunPendaftaran->tanggal_registrasi_berkas_selesai);

                        // Elemen terlihat jika tanggal saat ini >= tanggal selesai registrasi berkas atau user bukan peserta
                        return Carbon::now()->gte($berkasDate) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Auth::user()->roles->first()->name === 'administrator' && CalonSiswa::count() > 10),
                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),
                TextColumn::make('nik')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('NIK')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('kk')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('KK')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('nisn')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('NISN')
                    ->searchable(Auth::user()->roles->first()->name === 'administrator' && CalonSiswa::count() > 10),
                TextColumn::make('sekolahAsal.nama')
                    ->label('Sekolah Asal'),
                TextColumn::make('tempat_lahir')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tempat Lahir')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('tanggal_lahir')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tanggal Lahir')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date('d F Y H:i:s'),
                TextColumn::make('tahun_lulus')
                    ->label('Tahun Lulus'),
                TextColumn::make('golongan_darah')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Golongan Darah')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('agama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Agama')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('anak_ke')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Anak Ke')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('jumlah_saudara')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Jumlah Saudara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('tinggal_bersama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tinggal Bersama')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('jarak_ke_sekolah')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Jarak Ke Sekolah')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('disabilitas')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Disabilitas')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('tinggi_badan')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tinggi Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('berat_badan')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Berat Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('no_kip')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Nomor KIP')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('no_kks')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Nomor KKS')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('no_pkh')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Nomor PKH')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswa_telepon')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Telepon')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswa_alamat')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Alamat')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->wrap()
                    ->words(10)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    }),
                TextColumn::make('siswaKelurahan.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Kelurahan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaKecamatan.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Kecamatan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaKabupaten.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Kabupaten')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaProvinsi.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Provinsi')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaNegara.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Negara')
                    ->toggleable(isToggledHiddenByDefault: true),

                // Jadwal Tes
                TextColumn::make('tes_sesi')
                    ->label('Sesi Tes')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('tes_ruang')
                    ->label('Ruang Tes')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('tes_akademik')
                    ->label('Tes Akademik')
                    ->date('d F Y H:i:s')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('tes_praktik')
                    ->label('Tes Praktik')
                    ->date('d F Y H:i:s')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                // Lainnya
                // TextColumn::make('prestasi.nama')
                //     ->label('Nama Prestasi')
                //     //     ->visible(fn() => optional(Auth::user()->roles->first())->name === 'administrator')
                //     ->toggleable(isToggledHiddenByDefault: true),

                // TextColumn::make('ekstrakurikuler.nama')
                //     ->visible(fn() => optional(Auth::user()->roles->first())->name === 'administrator')
                //     ->label('Peminatan Ekstrakurikuler')
                //     ->toggleable(isToggledHiddenByDefault: true),

                // TextColumn::make('mataPelajaran.nama')
                //     ->visible(fn() => optional(Auth::user()->roles->first())->name === 'administrator')
                //     ->label('Peminatan Pelajaran')
                //     ->formatStateUsing(
                //         fn($state) => is_array($state)
                //             ? implode(', ', array_map(fn($item) => Str::headline($item), $state))
                //             : Str::headline($state)
                //     )
                //     ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                TrashedFilter::make()
                    ->visible(Auth::user()->roles->first()->name === 'administrator'),
                SelectFilter::make('jalur_pendaftaran')
                    ->label('Jalur Pendaftaran')
                    ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
                SelectFilter::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options([
                        'Diproses' => 'Diproses',
                        'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                        'Diverifikasi' => 'Diverifikasi',
                        'Ditolak' => 'Ditolak',
                        'Diterima' => 'Diterima',
                        'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                    ])
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
                SelectFilter::make('kelas')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama')
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),

                    // Formulir
                    Html2MediaAction::make('cetak_formulir')
                        ->label('Formulir')
                        ->icon('heroicon-o-printer')
                        ->filename(fn($record) => 'Formulir_' . $record->nama . '_' . $record->nisn . '.pdf')
                        ->savePdf()
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait')
                        ->format('a4', 'mm')
                        ->enableLinks()
                        ->margin([10, 10, 10, 10])
                        ->content(fn($record) => view('formulir', ['record' => $record])),

                    // Kartu Tes
                    Html2MediaAction::make('cetak_kartu_tes')
                        ->label('Kartu Tes')
                        ->icon('heroicon-o-printer')
                        ->filename(fn($record) => 'Kartu Tes_' . $record->nama . '_' . $record->nisn . '.pdf')
                        ->savePdf()
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait')
                        ->format('a4', 'mm')
                        ->enableLinks()
                        ->margin([10, 10, 10, 10])
                        ->content(fn($record) => view('kartu-tes', ['record' => $record])),

                    // SKL/Hasil
                    Html2MediaAction::make('cetak_skl')
                        ->label('Hasil')
                        ->icon('heroicon-o-printer')
                        ->filename(fn($record) => 'Hasil_' . $record->nama . '_' . $record->nisn . '.pdf')
                        ->savePdf()
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait')
                        ->format('a4', 'mm')
                        ->enableLinks()
                        ->margin([10, 10, 10, 10])
                        ->content(fn($record) => view('skl', ['record' => $record])),
                ])
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
            ], ActionsPosition::BeforeColumns)

            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ExportBulkAction::make()
                        ->label('Ekspor')
                        ->icon('heroicon-m-cloud-arrow-down')
                        ->color('success')
                        ->exporter(CalonSiswaExporter::class)
                        ->chunkSize(250),
                    BulkAction::make('set_jalur_pendaftaran')
                        ->label('Set Jalur Pendaftaran')
                        ->icon('heroicon-o-sparkles')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('jalur_pendaftaran')
                                ->label('Jalur Pendaftaran')
                                ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'jalur_pendaftaran_id' => $data['jalur_pendaftaran'],
                                ]);
                            });
                        }),

                    BulkAction::make('set_status_pendaftaran')
                        ->label('Set Status Pendaftaran')
                        ->icon('heroicon-o-check-circle')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('status_pendaftaran')
                                ->label('Status')
                                ->options([
                                    'Diproses' => 'Diproses',
                                    'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                                    'Diverifikasi' => 'Diverifikasi',
                                    'Ditolak' => 'Ditolak',
                                    'Diterima' => 'Diterima',
                                    'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                                ])
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'status_pendaftaran' => $data['status_pendaftaran'],
                                ]);
                            });
                        }),

                    BulkAction::make('set_kelas')
                        ->label('Set Kelas')
                        ->icon('heroicon-o-building-storefront')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('kelas_id')
                                ->label('Kelas')
                                ->relationship('kelas', 'nama')
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'kelas_id' => $data['kelas_id'],
                                ]);
                            });
                        }),
                ])
                    ->visible(Auth::user()->roles->first()->name === 'administrator'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalonSiswas::route('/'),
            'create' => Pages\CreateCalonSiswa::route('/create'),
            'view' => Pages\ViewCalonSiswa::route('/{record}'),
            'edit' => Pages\EditCalonSiswa::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
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

    protected ?string $heading = '♾️ Navigasi';

    // protected ?string $description = 'An overview of some analytics.';
    protected static ?int $sort = 0;

    protected function getStats(): array
    {
        if (Auth::user()->roles->first()->name !== 'peserta') {
            return [
                Stat::make('', CalonSiswa::count().' Peserta')
                    ->description('Total Pendaftar')
                    ->descriptionIcon('heroicon-o-user-circle', IconPosition::Before)
                    ->color('gray')
                    ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                        ->groupBy('hari')
                        ->orderBy('hari')
                        ->pluck('total')->toArray())
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diproses')->count().' Peserta')
                    ->description('Diproses')
                    ->descriptionIcon('heroicon-o-arrow-path', IconPosition::Before)
                    ->color('warning')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diproses') // Filter hanya status "Diproses"
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diproses'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Berkas Tidak Lengkap')->count().' Peserta')
                    ->description('Berkas Tidak Lengkap')
                    ->descriptionIcon('heroicon-o-document-minus', IconPosition::Before)
                    ->color('warning')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Berkas Tidak Lengkap')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Berkas+Tidak+Lengkap'",
                    ]),

                Stat::make('', CalonSiswa::whereNotIn('status_pendaftaran', ['Berkas Tidak Lengkap', 'Diproses'])->count().' Peserta')
                    ->description('Diverifikasi')
                    ->descriptionIcon('heroicon-o-clipboard-document-check', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diverifikasi')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diverifikasi'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diterima')->count().' Peserta')
                    ->description('Diterima Jalur Prestasi')
                    ->descriptionIcon('heroicon-o-check-circle', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diterima')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diterima'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diterima Di Kelas Reguler')->count().' Peserta')
                    ->description('Diterima Di Kelas Reguler')
                    ->descriptionIcon('heroicon-o-shield-check', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diterima Di Kelas Reguler')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Reguler'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diterima Di Kelas Unggulan')->count().' Peserta')
                    ->description('Diterima Di Kelas Unggulan')
                    ->descriptionIcon('heroicon-o-shield-check', IconPosition::Before)
                    ->color('success')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Diterima Di Kelas Unggulan')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Unggulan'",
                    ]),

                Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Ditolak')->count().' Peserta')
                    ->description('Ditolak')
                    ->descriptionIcon('heroicon-o-no-symbol', IconPosition::Before)
                    ->color('danger')
                    ->chart(
                        CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                            ->where('status_pendaftaran', 'Ditolak')
                            ->groupBy('hari')
                            ->orderBy('hari')
                            ->pluck('total')
                            ->toArray()
                    )
                    ->extraAttributes([
                        'class' => 'cursor-pointer',
                        'onclick' => "window.location.href='/formulir?tableFilters[status_pendaftaran][value]=Ditolak'",
                    ]),
            ];
        }

        return [
            Stat::make('', CalonSiswa::count().' Peserta')
                ->description('Total Pendaftar')
                ->descriptionIcon('heroicon-o-user-circle', IconPosition::Before)
                ->color('gray')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')->toArray()),

            Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Diproses')->count().' Peserta')
                ->description('Diproses')
                ->descriptionIcon('heroicon-o-arrow-path', IconPosition::Before)
                ->color('warning')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->where('status_pendaftaran', 'Diproses') // Filter hanya status "Diproses"
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')
                    ->toArray()),

            Stat::make('', CalonSiswa::query()->where('status_pendaftaran', 'Berkas Tidak Lengkap')->count().' Peserta')
                ->description('Berkas Tidak Lengkap')
                ->descriptionIcon('heroicon-o-document-minus', IconPosition::Before)
                ->color('warning')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->where('status_pendaftaran', 'Berkas Tidak Lengkap')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')
                    ->toArray()),

            Stat::make('', CalonSiswa::whereNotIn('status_pendaftaran', ['Berkas Tidak Lengkap', 'Diproses'])->count().' Peserta')
                ->description('Diverifikasi')
                ->descriptionIcon('heroicon-o-clipboard-document-check', IconPosition::Before)
                ->color('success')
                ->chart(CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                    ->where('status_pendaftaran', 'Diverifikasi')
                    ->groupBy('hari')
                    ->orderBy('hari')
                    ->pluck('total')
                    ->toArray()),
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
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateEkstrakurikuler extends CreateRecord
{
    protected static string $resource = EkstrakurikulerResource::class;

    public function form(Form $form): Form
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
}

```

---

### 📄 `./app/Filament/Resources/EkstrakurikulerResource/Pages/EditEkstrakurikuler.php`

```php
<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditEkstrakurikuler extends EditRecord
{
    protected static string $resource = EkstrakurikulerResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
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
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

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

    public function table(Table $table): Table
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
use Filament\Resources\Resource;

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

### 📄 `./app/Filament/Resources/InformasiResource/Pages/CreateInformasi.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Pages;

use App\Filament\Resources\InformasiResource;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Pages\CreateRecord;

class CreateInformasi extends CreateRecord
{
    protected static string $resource = InformasiResource::class;

    public function form(Form $form): Form
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->dehydrated()
                            ->required()
                            ->hidden(fn (Get $get) => $get('status') !== 'Publish')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable(true)
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/pdf', 'image/png', 'image/jpeg', 'image/png', 'image/webp']),
                        RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            // ->disableToolbarButtons([
                            //     'blockquote',
                            //     'strike',
                            // ])
                            // ->fileAttachmentsDisk('s3')
                            ->fileAttachmentsDirectory('assets/lampiran-informasi')
                            ->fileAttachmentsVisibility('private')
                            ->disableGrammarly()
                            ->columnSpanFull(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource/Pages/EditInformasi.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Pages;

use App\Filament\Resources\InformasiResource;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditInformasi extends EditRecord
{
    protected static string $resource = InformasiResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->dehydrated()
                            ->required()
                            ->hidden(fn (Get $get) => $get('status') !== 'Publish')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable(true)
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/pdf', 'image/png', 'image/jpeg', 'image/png', 'image/webp']),
                        RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            // ->disableToolbarButtons([
                            //     'blockquote',
                            //     'strike',
                            // ])
                            // ->fileAttachmentsDisk('s3')
                            ->fileAttachmentsDirectory('assets/lampiran-informasi')
                            ->fileAttachmentsVisibility('private')
                            ->disableGrammarly()
                            ->columnSpanFull(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource/Pages/ListInformasis.php`

```php
<?php

namespace App\Filament\Resources\InformasiResource\Pages;

use App\Filament\Resources\InformasiResource;
use App\Models\Informasi;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function table(Table $table): Table
    {
        $userView = Auth::user()->username === 'administrator';
        if ($userView) {
            return $table
                ->columns([
                    TextColumn::make('tahunPendaftaran.nama')
                        ->label('Tahun Pendaftaran')
                        ->badge()
                        ->color('gray')
                        ->icon('heroicon-o-calendar'),
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
                    TextColumn::make('status')
                        ->label('Status')
                        ->badge()
                        ->color(fn (string $state): string => match ($state) {
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
                        ->options([
                            'Publish' => 'Publish',
                            'Draft' => 'Draft',
                        ]),
                ])
                ->actions([
                    ActionGroup::make([
                        ViewAction::make(),
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

        return $table
            ->query(
                Informasi::where('status', 'Publish')
                    ->latest('updated_at')
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
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10]);
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
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
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

    public function Form(Form $form): Form
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->required()
                            ->hidden(fn (Get $get) => $get('status') !== 'Publish')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable(true)
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/pdf', 'image/png', 'image/jpeg', 'image/png', 'image/webp']),
                        RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            // ->disableToolbarButtons([
                            //     'blockquote',
                            //     'strike',
                            // ])
                            ->formatStateUsing(fn ($state) => str($state)->sanitizeHtml())
                            // ->fileAttachmentsDisk('s3')
                            ->fileAttachmentsDirectory('assets/lampiran-informasi')
                            ->fileAttachmentsVisibility('private')
                            ->disableGrammarly()
                            ->columnSpanFull(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/InformasiResource.php`

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiResource\Pages;
use App\Models\Informasi;
use Filament\Resources\Resource;

class InformasiResource extends Resource
{
    protected static ?string $model = Informasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Informasi';

    protected static ?string $label = 'Informasi';

    protected static ?string $slug = 'informasi';

    // protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 8;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function getNavigationBadge(): ?string
    {
        return Informasi::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformasis::route('/'),
            'create' => Pages\CreateInformasi::route('/create'),
            'view' => Pages\ViewInformasi::route('/{record}'),
            'edit' => Pages\EditInformasi::route('/{record}/edit'),
        ];
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
        return 'ℹ️ Informasi';
    }

    public function table(Table $table): Table
    {
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $label = $calonSiswa ? $calonSiswa->status_pendaftaran : '';
            $urlFormulir = '';
            $urlViewFormulir = '';
            $urlInformasi = '';

            if ($calonSiswa) {
                $urlFormulir = '/formulir';
                $urlViewFormulir = '/formulir/'.$calonSiswa->id;
                $urlInformasi = '/informasi';
            }
        }

        return $table
            ->headerActions([
                Action::make('label_status_pendaftaran')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden(Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Ditolak'),
                Action::make('status_pendaftaran')
                    ->label($label)
                    ->color(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return 'warning'; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'warning';
                        } elseif ($status === 'Diverifikasi') {
                            return 'success';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'warning';
                        } elseif ($status === 'Ditolak') {
                            return 'danger';
                        } elseif ($status === 'Diterima') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'info';
                        }

                        return 'warning';
                    })
                    ->icon(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return 'heroicon-o-arrow-path'; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'heroicon-o-arrow-path';
                        } elseif ($status === 'Diverifikasi') {
                            return 'heroicon-o-clipboard-document-check';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'heroicon-o-document-minus';
                        } elseif ($status === 'Ditolak') {
                            return 'heroicon-o-no-symbol';
                        } elseif ($status === 'Diterima') {
                            return 'heroicon-o-check-circle';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'heroicon-o-shield-check';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'heroicon-o-shield-check';
                        }

                        return 'gray';
                    })
                    ->outlined()
                    ->size('sm')
                    ->url($urlFormulir)
                    ->hidden(Auth::user()->roles->first()->name !== 'peserta' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Ditolak'),

                Action::make('label_status_kelulusan')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();
                        $sekarang = Carbon::now();

                        $mulaiPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                            : null;

                        $akhirPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                            : null;

                        $mulaiPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                            : null;

                        $akhirPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                            : null;

                        $mulaiPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                            : null;

                        $akhirPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                            : null;

                        $mulaiPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                            : null;

                        $akhirPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                            : null;

                        $mulaiPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                            : null;

                        $akhirPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                            : null;

                        $periodePengumuman = [
                            [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
                            [$mulaiPengumumanReguler, $akhirPengumumanReguler],
                            [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
                            [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
                            [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
                        ];

                        foreach ($periodePengumuman as [$mulai, $selesai]) {
                            if ($sekarang >= $mulai && $sekarang <= $selesai) {
                                return false;
                            }
                        }

                        return true;
                    }),
                Action::make('status_kelulusan')
                    ->label($label)
                    ->color(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return ''; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'warning';
                        } elseif ($status === 'Diverifikasi') {
                            return 'success';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'warning';
                        } elseif ($status === 'Ditolak') {
                            return 'danger';
                        } elseif ($status === 'Diterima') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'info';
                        }

                        return 'warning';
                    })
                    ->icon(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return ''; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'heroicon-o-arrow-path';
                        } elseif ($status === 'Diverifikasi') {
                            return 'heroicon-o-clipboard-document-check';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'heroicon-o-document-minus';
                        } elseif ($status === 'Ditolak') {
                            return 'heroicon-o-no-symbol';
                        } elseif ($status === 'Diterima') {
                            return 'heroicon-o-check-circle';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'heroicon-o-shield-check';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'heroicon-o-shield-check';
                        }

                        return 'gray';
                    })
                    ->outlined()
                    ->size('sm')
                    ->url($urlViewFormulir)
                    ->hidden(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();

                        $sekarang = Carbon::now();

                        $mulaiPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                            : null;

                        $akhirPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                            : null;

                        $mulaiPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                            : null;

                        $akhirPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                            : null;

                        $mulaiPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                            : null;

                        $akhirPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                            : null;

                        $mulaiPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                            : null;

                        $akhirPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                            : null;

                        $mulaiPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                            : null;

                        $akhirPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                            : null;

                        $periodePengumuman = [
                            [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
                            [$mulaiPengumumanReguler, $akhirPengumumanReguler],
                            [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
                            [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
                            [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
                        ];

                        foreach ($periodePengumuman as [$mulai, $selesai]) {
                            if ($sekarang >= $mulai && $sekarang <= $selesai) {
                                return false;
                            }
                        }

                        return true;
                    }),
            ])
            ->query(
                Informasi::where('status', 'Publish')
                    ->latest('updated_at')
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

### 📄 `./app/Filament/Resources/JalurPendaftaranResource/Pages/CreateJalurPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateJalurPendaftaran extends CreateRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

    public function form(Form $form): Form
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('kuantitas')
                            ->label('Kuota Pendaftar')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->numeric(),

                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->native(false),

                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 4,
                        'lg' => 4,
                        'xl' => 4,
                        '2xl' => 4,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/JalurPendaftaranResource/Pages/EditJalurPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditJalurPendaftaran extends EditRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
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
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('kuantitas')
                            ->label('Kuota Pendaftar')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->numeric(),

                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->native(false),

                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 4,
                        'lg' => 4,
                        'xl' => 4,
                        '2xl' => 4,
                    ]),
            ]);
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
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

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

    public function table(Table $table): Table
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
                        'Nonaktif' => 'gray'
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
use Filament\Resources\Resource;

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
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateJurusan extends CreateRecord
{
    protected static string $resource = JurusanResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
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
}

```

---

### 📄 `./app/Filament/Resources/JurusanResource/Pages/EditJurusan.php`

```php
<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use App\Filament\Resources\JurusanResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditJurusan extends EditRecord
{
    protected static string $resource = JurusanResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
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

namespace App\Filament\Resources\KabupatenResource\Pages;

use App\Filament\Resources\KabupatenResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateKabupaten extends CreateRecord
{
    protected static string $resource = KabupatenResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kabupaten/Kota')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kabupaten/Kota')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('provinsi_id')
                            ->label('Provinsi')
                            ->relationship('provinsi', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KabupatenResource/Pages/EditKabupaten.php`

```php
<?php

namespace App\Filament\Resources\KabupatenResource\Pages;

use App\Filament\Resources\KabupatenResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKabupaten extends EditRecord
{
    protected static string $resource = KabupatenResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kabupaten/Kota')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kabupaten/Kota')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('provinsi_id')
                            ->label('Provinsi')
                            ->relationship('provinsi', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
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

namespace App\Filament\Resources;

use App\Filament\Resources\KabupatenResource\Pages;
use App\Models\Kabupaten;
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

namespace App\Filament\Resources\KecamatanResource\Pages;

use App\Filament\Resources\KecamatanResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateKecamatan extends CreateRecord
{
    protected static string $resource = KecamatanResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kecamatan')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kecamatan')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('kabupaten_id')
                            ->label('Kabupaten')
                            ->relationship('kabupaten', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KecamatanResource/Pages/EditKecamatan.php`

```php
<?php

namespace App\Filament\Resources\KecamatanResource\Pages;

use App\Filament\Resources\KecamatanResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKecamatan extends EditRecord
{
    protected static string $resource = KecamatanResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kecamatan')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kecamatan')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('kabupaten_id')
                            ->label('Kabupaten')
                            ->relationship('kabupaten', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
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

namespace App\Filament\Resources;

use App\Filament\Resources\KecamatanResource\Pages;
use App\Models\Kecamatan;
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

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateKelas extends CreateRecord
{
    protected static string $resource = KelasResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kelas')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Kelas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('jurusan_id')
                            ->label('Jurusan')
                            ->relationship('jurusan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->createOptionForm([
                                TextInput::make('nama')
                                    ->label('Nama Jurusan')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ])
                                    ->placeholder('Contoh: Unggulan'),
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KelasResource/Pages/EditKelas.php`

```php
<?php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKelas extends EditRecord
{
    protected static string $resource = KelasResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kelas')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Kelas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('jurusan_id')
                            ->label('Jurusan')
                            ->relationship('jurusan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->createOptionForm([
                                TextInput::make('nama')
                                    ->label('Nama Jurusan')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ])
                                    ->placeholder('Contoh: Unggulan'),
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
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

namespace App\Filament\Resources;

use App\Filament\Resources\KelasResource\Pages;
use App\Models\Kelas;
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

namespace App\Filament\Resources\KelurahanResource\Pages;

use App\Filament\Resources\KelurahanResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateKelurahan extends CreateRecord
{
    protected static string $resource = KelurahanResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kelurahan/Desa')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kelurahan/Desa')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('kecamatan_id')
                            ->label('Kecamatan')
                            ->relationship('kecamatan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/KelurahanResource/Pages/EditKelurahan.php`

```php
<?php

namespace App\Filament\Resources\KelurahanResource\Pages;

use App\Filament\Resources\KelurahanResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditKelurahan extends EditRecord
{
    protected static string $resource = KelurahanResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kelurahan/Desa')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kelurahan/Desa')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('kecamatan_id')
                            ->label('Kecamatan')
                            ->relationship('kecamatan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
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

namespace App\Filament\Resources;

use App\Filament\Resources\KelurahanResource\Pages;
use App\Models\Kelurahan;
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

use App\Filament\Resources\KetuaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateKetua extends CreateRecord
{
    protected static string $resource = KetuaResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Ketua')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Ketua')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/ketua')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/ketua')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/ketua')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KetuaResource/Pages/EditKetua.php`

```php
<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Resources\KetuaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditKetua extends EditRecord
{
    protected static string $resource = KetuaResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Ketua')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Ketua')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/ketua')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/ketua')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/ketua')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/KetuaResource/Pages/ListKetuas.php`

```php
<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Resources\KetuaResource;
use App\Models\Ketua;
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

    public function table(Table $table): Table
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
                        'Nonaktif' => 'gray'
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

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use App\Filament\Resources\MataPelajaranResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateMataPelajaran extends CreateRecord
{
    protected static string $resource = MataPelajaranResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Mata Pelajaran')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Mata Pelajaran')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/MataPelajaranResource/Pages/EditMataPelajaran.php`

```php
<?php

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use App\Filament\Resources\MataPelajaranResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditMataPelajaran extends EditRecord
{
    protected static string $resource = MataPelajaranResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Mata Pelajaran')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Mata Pelajaran')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
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

namespace App\Filament\Resources;

use App\Filament\Resources\MataPelajaranResource\Pages;
use App\Models\MataPelajaran;
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

namespace App\Filament\Resources\NegaraResource\Pages;

use App\Filament\Resources\NegaraResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateNegara extends CreateRecord
{
    protected static string $resource = NegaraResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Negara')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Negara')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('bendera')
                            ->label('Bendera')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '4:3' => '4:3',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/bendera')
                            ->downloadable()
                            ->maxSize(500),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/NegaraResource/Pages/EditNegara.php`

```php
<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use App\Filament\Resources\NegaraResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditNegara extends EditRecord
{
    protected static string $resource = NegaraResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Negara')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Negara')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('bendera')
                            ->label('Bendera')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '4:3' => '4:3',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/bendera')
                            ->downloadable()
                            ->maxSize(500),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
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

namespace App\Filament\Resources;

use App\Filament\Resources\NegaraResource\Pages;
use App\Models\Negara;
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

use App\Filament\Resources\PimpinanResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreatePimpinan extends CreateRecord
{
    protected static string $resource = PimpinanResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Pimpinan')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Pimpinan')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/pimpinan')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/pimpinan')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/pimpinan')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/PimpinanResource/Pages/EditPimpinan.php`

```php
<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Resources\PimpinanResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditPimpinan extends EditRecord
{
    protected static string $resource = PimpinanResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Pimpinan')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Pimpinan')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/pimpinan')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/pimpinan')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/pimpinan')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/PimpinanResource/Pages/ListPimpinans.php`

```php
<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Resources\PimpinanResource;
use App\Models\Pimpinan;
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

    public function table(Table $table): Table
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
                        'Nonaktif' => 'gray'
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
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreatePrestasi extends CreateRecord
{
    protected static string $resource = PrestasiResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
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
                            ->columns([
                                'sm' => '100%',
                                'md' => 2,
                                'lg' => 2,
                            ]),

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
                                    ->options([
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                    ])
                                    ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->visible(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/PrestasiResource/Pages/EditPrestasi.php`

```php
<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use App\Filament\Resources\PrestasiResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPrestasi extends EditRecord
{
    protected static string $resource = PrestasiResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
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
                            ->columns([
                                'sm' => '100%',
                                'md' => 2,
                                'lg' => 2,
                            ]),

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
                                    ->options([
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                    ])
                                    ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->visible(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),
            ]);
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

namespace App\Filament\Resources\ProvinsiResource\Pages;

use App\Filament\Resources\ProvinsiResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateProvinsi extends CreateRecord
{
    protected static string $resource = ProvinsiResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Provinsi')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Provinsi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('negara_id')
                            ->label('Negara')
                            ->relationship('negara', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/ProvinsiResource/Pages/EditProvinsi.php`

```php
<?php

namespace App\Filament\Resources\ProvinsiResource\Pages;

use App\Filament\Resources\ProvinsiResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditProvinsi extends EditRecord
{
    protected static string $resource = ProvinsiResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Provinsi')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Provinsi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('negara_id')
                            ->label('Negara')
                            ->relationship('negara', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
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

namespace App\Filament\Resources;

use App\Filament\Resources\ProvinsiResource\Pages;
use App\Models\Provinsi;
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

### 📄 `./app/Filament/Resources/SekolahAsalResource/Pages/CreateSekolahAsal.php`

```php
<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
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
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Illuminate\Support\Collection;

class CreateSekolahAsal extends CreateRecord
{
    protected static string $resource = SekolahAsalResource::class;

    use HasWizard;

    protected function getSteps(): array
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->columnSpanFull(),
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),
                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                    Section::make('Logo')
                        ->schema([
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
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
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi-lain')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                        ]),
                ]),
            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn (Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kabupaten_id')
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kelurahan_id')
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false),
                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->required()
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('https://mtsn1pandeglang.sch.id'),
                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->tel()
                                ->placeholder('08**********')
                                ->prefixIcon('heroicon-m-phone'),
                            TextInput::make('email')
                                ->label('Email')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope'),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekolahAsalResource/Pages/EditSekolahAsal.php`

```php
<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
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
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EditSekolahAsal extends EditRecord
{
    protected static string $resource = SekolahAsalResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    use HasWizard;

    protected function getSteps(): array
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->columnSpanFull(),
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),
                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                    Section::make('Logo')
                        ->schema([
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
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
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi-lain')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                        ]),
                ]),
            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn (Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kabupaten_id')
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kelurahan_id')
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false),
                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->required()
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('https://mtsn1pandeglang.sch.id'),
                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->tel()
                                ->placeholder('08**********')
                                ->prefixIcon('heroicon-m-phone'),
                            TextInput::make('email')
                                ->label('Email')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope'),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
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

### 📄 `./app/Filament/Resources/SekolahResource/Pages/CreateSekolah.php`

```php
<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
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
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Illuminate\Support\Collection;

class CreateSekolah extends CreateRecord
{
    protected static string $resource = SekolahResource::class;

    use HasWizard;

    protected function getSteps(): array
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->columnSpanFull(),
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('akreditasi')
                                ->label('Akreditasi')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),
                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                    Section::make('Logo')
                        ->schema([
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
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
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                        ]),
                ]),
            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn (Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kabupaten_id')
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kelurahan_id')
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false),
                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->required()
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('https://mtsn1pandeglang.sch.id'),
                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->tel()
                                ->placeholder('08**********')
                                ->prefixIcon('heroicon-m-phone'),
                            TextInput::make('email')
                                ->label('Email')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope'),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    Section::make('Surat')
                        ->schema([
                            TextInput::make('nomor_surat')
                                ->label('Nomor SKL')
                                ->required()
                                ->minLength(5)
                                ->maxLength(20)
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

### 📄 `./app/Filament/Resources/SekolahResource/Pages/EditSekolah.php`

```php
<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
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
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EditSekolah extends EditRecord
{
    protected static string $resource = SekolahResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    use HasWizard;

    protected function getSteps(): array
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->columnSpanFull(),
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
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('akreditasi')
                                ->label('Akreditasi')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),
                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                    Section::make('Logo')
                        ->schema([
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
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
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                        ]),
                ]),
            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn (Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kabupaten_id')
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kelurahan_id')
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false),
                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->required()
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('https://mtsn1pandeglang.sch.id'),
                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->tel()
                                ->placeholder('08**********')
                                ->prefixIcon('heroicon-m-phone'),
                            TextInput::make('email')
                                ->label('Email')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope'),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    Section::make('Surat')
                        ->schema([
                            TextInput::make('nomor_surat')
                                ->label('Nomor SKL')
                                ->required()
                                ->minLength(5)
                                ->maxLength(20)
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

use App\Filament\Resources\SekretarisResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateSekretaris extends CreateRecord
{
    protected static string $resource = SekretarisResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Sekretaris')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Sekretaris')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/sekretaris')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/sekretaris')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/sekretaris')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekretarisResource/Pages/EditSekretaris.php`

```php
<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Resources\SekretarisResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditSekretaris extends EditRecord
{
    protected static string $resource = SekretarisResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Sekretaris')
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 4,
                        ]),
                ]),

            Step::make('Berkas Sekretaris')
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                    '3:4' => '3:4',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/sekretaris')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/sekretaris')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->fetchFileInformation(false)
                                ->directory('assets/sekretaris')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->openable()
                                ->acceptedFileTypes(['application/pdf'])
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                ]),
        ];
    }
}

```

---

### 📄 `./app/Filament/Resources/SekretarisResource/Pages/ListSekretaris.php`

```php
<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Resources\SekretarisResource;
use App\Models\Sekretaris;
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

    public function table(Table $table): Table
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
                        'Nonaktif' => 'gray'
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

use Filament\Forms\Form;
use App\Models\JalurPendaftaran;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\TahunPendaftaranResource;

class CreateTahunPendaftaran extends CreateRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Tahun Pendaftaran')
                    ->description('Data Tahun Pendaftaran.')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Tahun Pendaftaran')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min' => 'Tahun Pendaftaran: Minimal 9 Karakter.',
                                'max' => 'Tahun Pendaftaran: Maksimal 9 Karakter.',
                            ])
                            ->maxLength(9)
                            ->minLength(9)
                            ->placeholder('Contoh: 2025/2026'),
                        TextInput::make('kuantitas')
                            ->label('Kuota Maksimal Registrasi Akun')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                            ->numeric()
                            ->postfix('Akun'),
                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->native(false),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
                Section::make('Daftar Akun')
                    ->description('Tanggal Daftar Akun PPDB.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DatePicker::make('tanggal_ppdb_selesai')
                            ->label('Tanggal Selesai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Penerbitan Kartu Tes')
                    ->description('Tanggal penerbitan kartu tes.')
                    ->schema([
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                            ->live()
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                            ->label('Tanggal Selesai Penerbitan Kartu Tes')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Registrasi Berkas')
                    ->description('Tanggal registrasi berkas.')
                    ->schema([
                        DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                            ->label('Tanggal Mulai Registrasi Berkas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                            ->label('Tanggal Selesai Registrasi Berkas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Prestasi')
                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Prestasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Prestasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Prestasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Reguler')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Reguler')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Reguler')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Reguler')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Reguler'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Afirmasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Afirmasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Afirmasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Afirmasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Zonasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Zonasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Zonasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Zonasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Mutasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Mutasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Mutasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Mutasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Akademik')
                    ->visible(fn($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))

                    ->description('Tanggal tes akademik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_akademik_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Tes Akademik'),
                        DateTimePicker::make('tanggal_tes_akademik_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Tes Akademik'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Praktik')

                    ->visible(fn($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))
                    ->description('Tanggal tes praktik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_praktik_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Tes Praktik'),
                        DateTimePicker::make('tanggal_tes_praktik_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Tes Praktik'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/TahunPendaftaranResource/Pages/EditTahunPendaftaran.php`

```php
<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use Filament\Forms\Form;
use App\Models\JalurPendaftaran;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\TahunPendaftaranResource;

class EditTahunPendaftaran extends EditRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Tahun Pendaftaran')
                    ->description('Data Tahun Pendaftaran.')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Tahun Pendaftaran')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min' => 'Tahun Pendaftaran: Minimal 9 Karakter.',
                                'max' => 'Tahun Pendaftaran: Maksimal 9 Karakter.',
                            ])
                            ->maxLength(9)
                            ->minLength(9)
                            ->placeholder('Contoh: 2025/2026'),
                        TextInput::make('kuantitas')
                            ->label('Kuota Maksimal Registrasi Akun')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                            ->numeric()
                            ->postfix('Akun'),
                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->native(false),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
                Section::make('Daftar Akun')
                    ->description('Tanggal Daftar Akun PPDB.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DatePicker::make('tanggal_ppdb_selesai')
                            ->label('Tanggal Selesai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Penerbitan Kartu Tes')
                    ->description('Tanggal penerbitan kartu tes.')
                    ->schema([
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                            ->live()
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                            ->label('Tanggal Selesai Penerbitan Kartu Tes')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Registrasi Berkas')
                    ->description('Tanggal registrasi berkas.')
                    ->schema([
                        DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                            ->label('Tanggal Mulai Registrasi Berkas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                            ->label('Tanggal Selesai Registrasi Berkas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Prestasi')
                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Prestasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Prestasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Prestasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Reguler')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Reguler')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Reguler')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Reguler')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Reguler'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Afirmasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Afirmasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Afirmasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Afirmasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Zonasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Zonasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Zonasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Zonasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Mutasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Mutasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Mutasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Mutasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Akademik')
                    ->visible(fn($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))

                    ->description('Tanggal tes akademik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_akademik_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Tes Akademik'),
                        DateTimePicker::make('tanggal_tes_akademik_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Tes Akademik'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Praktik')

                    ->visible(fn($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))
                    ->description('Tanggal tes praktik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_praktik_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Tes Praktik'),
                        DateTimePicker::make('tanggal_tes_praktik_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Tes Praktik'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/TahunPendaftaranResource/Pages/ListTahunPendaftarans.php`

```php
<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use App\Models\TahunPendaftaran;
use Carbon\Carbon;
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

    public function table(Table $table): Table
    {
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
                        'Nonaktif' => 'gray'
                    }),

                TextColumn::make('kuantitas')
                    ->label('Kuota')
                    ->numeric()
                    ->suffix(' Pendaftar')
                    ->badge(),

                TextColumn::make('tanggal_ppdb_mulai')
                    ->label('Pendaftaran Akun')
                    ->date('d F Y')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_ppdb_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_ppdb_selesai)->translatedFormat('d F Y') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_penerbitan_kartu_tes_mulai')
                    ->label('Penerbitan Kartu Tes')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_penerbitan_kartu_tes_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_penerbitan_kartu_tes_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_tes_akademik_mulai')
                    ->label('Tes Akademik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_akademik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_akademik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_tes_praktik_mulai')
                    ->label('Tes Praktik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_praktik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_praktik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_registrasi_berkas_mulai')
                    ->label('Registrasi Berkas')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_registrasi_berkas_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_registrasi_berkas_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                    ->label('Pendaftaran Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->label('Pengumuman Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_reguler_mulai')
                    ->label('Pendaftaran Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->label('Pengumuman Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                    ->label('Pendaftaran Jalur Afirmasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_afirmasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_afirmasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                    ->label('Pengumuman Jalur Afirmasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_afirmasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_afirmasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                    ->label('Pendaftaran Jalur Zonasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_zonasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_zonasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_zonasi_mulai')
                    ->label('Pengumuman Jalur Zonasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_zonasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_zonasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                    ->label('Pendaftaran Jalur Mutasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_mutasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_mutasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_mutasi_mulai')
                    ->label('Pengumuman Jalur Mutasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_mutasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_mutasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

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
use App\Models\TahunPendaftaran;
use Filament\Resources\Resource;

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
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Pengguna')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('username')
                            ->label('Nomor Induk Siswa Nasional (NISN)')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->rule(fn ($record) => $record === null ? 'unique:users,username' : 'unique:users,username,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                            ->maxLength(10)
                            ->numeric()
                            ->minLength(10)
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
                            ->rule(fn ($record) => $record === null ? 'unique:users,email' : 'unique:users,email,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
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
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->searchable(),

                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->native(false)
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('avatar')
                            ->label('Avatar')
                            ->image()
                            ->minSize(5)
                            ->maxSize(100)
                            ->visibility('private')
                            ->directory('assets/avatar')
                            ->columnSpan(2),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
            ]);
    }
}

```

---

### 📄 `./app/Filament/Resources/UserResource/Pages/EditUser.php`

```php
<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Pengguna')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('username')
                            ->label('Nomor Induk Siswa Nasional (NISN)')
                            ->unique(ignoreRecord: true)
                            ->rule(fn ($record) => $record === null ? 'unique:users,username' : 'unique:users,username,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                            ->validationMessages([
                                'max' => 'NISN: Masukkan maksimal 10 Angka.',
                                'min' => 'NISN: Masukkan minimal 10 Angka.',
                                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->rule(fn ($record) => $record === null ? 'unique:users,email' : 'unique:users,email,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                            ->disabledOn('edit')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
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
                            ->searchable(),

                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->native(false)
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('avatar')
                            ->label('Avatar')
                            ->image()
                            ->minSize(5)
                            ->maxSize(100)
                            ->visibility('private')
                            ->directory('assets/avatar')
                            ->columnSpan(2),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
            ]);
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function table(Table $table): Table
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
                        'Nonaktif' => 'heroicon-o-x-mark'
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
                    ->visible(Auth::user()->username === 'administrator'),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                    ForceDeleteAction::make(),
                    RestoreAction::make(),
                ])
                    ->hidden(function ($record) {
                        if ($record->username === 'administrator') {
                            return $record;
                        }
                    }),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
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
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
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

class UserRegisters extends TableWidget
{
    protected static ?int $sort = 2;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return '🗒️ Log Akun';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::whereHas('roles', function ($query) {
                    $query->where('name', 'peserta');
                })->latest('email_verified_at')
            )
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->defaultImageUrl('/img/avatar.png'),
                TextColumn::make('name')
                    ->label('Nama Lengkap'),
                TextColumn::make('email_verified_at')
                    ->label('Email Diverifikasi')
                    ->dateTime('d F Y H:i:s'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Aktif' => 'heroicon-o-check-circle',
                        'Nonaktif' => 'heroicon-o-x-mark'
                    }),
            ])
            ->striped()
            ->paginationPageOptions([5]);
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
            ->label(__('Avatar'))
            ->image()
            ->minSize(5)
            ->maxSize(500)
            ->visibility('private')
            ->directory('assets/avatar');
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label(__('Nama Lengkap'))
            ->suffixIcon('heroicon-o-user-circle')
            ->required()
            ->maxLength(100)
            ->autofocus();
    }

    protected function getUsernameFormComponent(): Component
    {
        if (Auth::user()->roles->first()->name === 'peserta') {
            return TextInput::make('username')
                ->label(__('Nomor Induk Siswa Nasional (NISN)'))
                ->suffixIcon('heroicon-o-identification')
                ->required()
                ->unique(ignoreRecord: true)
                ->rule(fn ($record) => $record === null ? 'unique:users,username' : 'unique:users,username,'.$record->id)
                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                ->minLength(10)
                ->maxLength(10)
                ->validationMessages([
                    'max' => 'NISN: Masukkan maksimal 10 Angka.',
                    'min' => 'NISN: Masukkan minimal 10 Angka.',
                    'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                    'required' => 'Form ini wajib diisi.',
                ]);
        }

        return TextInput::make('username')
            ->label(__('Username'))
            ->suffixIcon('heroicon-o-identification')
            ->required()
            ->unique(ignoreRecord: true)
            ->rule(fn ($record) => $record === null ? 'unique:users,username' : 'unique:users,username,'.$record->id)
            ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
            ->visible(Auth::user()->username !== 'administrator')
            ->validationMessages([
                'unique' => 'Username: Username sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(__('Email'))
            ->suffixIcon('heroicon-o-envelope')
            ->email()
            ->required()
            ->maxLength(50)
            ->validationMessages([
                'max' => 'Email: Masukkan maksimal 50 Karakter.',
                'unique' => 'Email: Email ini sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ])
            ->unique(ignoreRecord: true);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('Password'))
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
            ->label(__('Ulangi Password'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->visible(fn (Get $get): bool => filled($get('password')))
            ->dehydrated(false);
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

### 📄 `./app/Filament/Pages/Auth/RegisterCustom.php`

```php
<?php

namespace App\Filament\Pages\Auth;

use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Register;
use Illuminate\Support\Facades\Hash;
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
            ->label(__('Nama Lengkap'))
            ->required()
            ->suffixIcon('heroicon-o-user-circle')
            ->maxLength(100)
            ->autofocus();
    }

    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('Nomor Induk Siswa Nasional (NISN)'))
            ->required()
            ->suffixIcon('heroicon-o-identification')
            ->numeric()
            ->maxLength(10)
            ->minLength(10)
            ->validationMessages([
                'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ])
            ->unique($this->getUserModel());
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(__('Email'))
            ->email()
            ->required()
            ->suffixIcon('heroicon-o-envelope')
            ->maxLength(50)
            ->validationMessages([
                'max' => 'Email: Masukkan maksimal 50 Karakter.',
                'unique' => 'Email: Email ini sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ])
            ->unique($this->getUserModel());
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('Password'))
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
            ->label(__('Ulangi Password'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->dehydrated(false);
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
            ->emailVerification()
            ->passwordReset()
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
                    ->url(fn (): string => UserResource::getUrl())
                    ->icon('heroicon-o-identification')
                    // ->visible(fn() => Auth::user()?->roles?->first()?->name === 'administrator'),
                    ->visible(fn () => Auth::user()?->roles?->where('name', 'administrator')->first() !== null),
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
                        ['title' => 'Dibuat dan dikembangkan dengan ❤ oleh Yahya Zulfikri', 'url' => 'https://instagram.com/zulfikriyahya_'],
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
            Log::error('Error memproses tanggal atau database: '.$e->getMessage());

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

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama', 50);
            $table->foreign('nama')->references('name')->on('users')->onUpdate('cascade');
            $table->string('nik')->unique();
            $table->string('kk');
            $table->string('nisn', 10)->unique();
            $table->foreign('nisn')->references('username')->on('users')->onUpdate('cascade');
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
            $table->enum('status_pendaftaran', ['Diproses', 'Berkas Tidak Lengkap', 'Diverifikasi', 'Ditolak', 'Diterima', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan'])->default('Diproses')->nullable();
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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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
        'name' => 'administrator',
        'define_via_gate' => true,
        'intercept_gate' => 'before', // after
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

## 📦 Root Config Files

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

