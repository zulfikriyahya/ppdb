# Laravel Project Blueprint — PPDB MTsN 1 Pandeglang

> Auto-generated. Berisi seluruh file inti project.
> Dikecualikan: node_modules, vendor, tests, .yarn, public/vendor,
>               public/build, storage, bootstrap/cache, dan file biner.

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

## 🧩 Filament Resources

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

    // ========================================================================
    // HELPER METHODS
    // ========================================================================

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

    // ========================================================================
    // ACTION BUILDERS
    // ========================================================================

    private function getDaftarSekarangAction(?CalonSiswa $calonSiswa): Action
    {
        return Action::make('buat_formulir_pendaftaran')
            ->label('Daftar Sekarang 🚀')
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
            'Diverifikasi',
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
                fn () => $this->canPrintFormulir()
            ),
            $this->buildPdfAction(
                'cetak_kartu_tes',
                'Kartu Tes',
                'kartu-tes',
                fn () => $this->canPrintKartuTes()
            ),
            $this->buildPdfAction(
                'cetak_skl',
                'Hasil',
                'skl',
                fn () => $this->canPrintHasil()
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
                ->visible(fn () => $this->record->formulirPrestasis()->exists())
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
            ->filename(fn ($record) => "{$label}_{$record->nama}_{$record->nisn}.pdf")
            ->savePdf()
            ->orientation('portrait')
            ->format('a4', 'mm')
            ->enableLinks()
            ->margin([10, 10, 10, 10])
            ->content(fn ($record) => view($view, ['record' => $record]))
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

        return ! in_array($cs->status_pendaftaran, [
            'Diproses',
            'Tidak Diterima',
            'Berkas Tidak Lengkap',
        ]);
    }

    private function canPrintKartuTes(): bool
    {
        $cs = $this->getCalonSiswa();
        if (! $cs) {
            return false;
        }

        if (in_array($cs->status_pendaftaran, [
            'Diproses',
            'Tidak Diterima',
            'Berkas Tidak Lengkap',
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

        if (in_array($cs->status_pendaftaran, [
            'Diproses',
            'Diverifikasi',
            'Berkas Tidak Lengkap',
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
            'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
            'Diverifikasi' => 'Diverifikasi',
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
                    ->colors([
                        'warning' => 'Diproses',
                        'success' => 'Disetujui',
                        'danger' => 'Ditolak',
                    ]),

                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->colors([
                        'gray' => 'Diproses',
                        'warning' => 'Berkas Tidak Lengkap',
                        'success' => fn ($state) => in_array($state, ['Diverifikasi', 'Diterima', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan']),
                        'danger' => 'Tidak Diterima',
                    ])
                    ->visible(! $isCalonSiswa || $isSuperAdmin),

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
                        ->visible(fn () => $isSuperAdmin),
                    Tables\Actions\RestoreAction::make()
                        ->visible(fn () => $isSuperAdmin),
                    Tables\Actions\ForceDeleteAction::make()
                        ->visible(fn () => $isSuperAdmin),
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
                                ->relationship(
                                    'jalurPendaftaran',
                                    'nama',
                                    fn (Builder $q) => $q->where('status', 'Aktif')
                                )
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
                                ->required(),
                        ])
                        ->action(
                            fn (Collection $records, array $data) => $records->each(
                                fn ($r) => CalonSiswa::where('id', $r->id)
                                    ->update(['status_pendaftaran' => $data['status_pendaftaran']])
                            )
                        ),
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

    protected ?string $heading = '♾️ Statistik Pendaftaran';

    protected static ?int $sort = 0;

    // Refresh tiap 60 detik agar data tetap live
    protected static ?string $pollingInterval = '60s';

    protected function getStats(): array
    {
        $isCalonSiswa = Auth::user()->hasRole('calon_siswa');
        $isAdmin = ! $isCalonSiswa;

        // ----------------------------------------------------------------
        // 1 query — hitung semua status_pendaftaran sekaligus
        // ----------------------------------------------------------------
        $statusCount = CalonSiswa::selectRaw('status_pendaftaran, COUNT(*) as total')
            ->groupBy('status_pendaftaran')
            ->pluck('total', 'status_pendaftaran')
            ->toArray();

        // ----------------------------------------------------------------
        // 1 query — hitung semua status_formulir sekaligus
        // ----------------------------------------------------------------
        $formulirCount = CalonSiswa::selectRaw('status_formulir, COUNT(*) as total')
            ->groupBy('status_formulir')
            ->pluck('total', 'status_formulir')
            ->toArray();

        $totalPendaftar = array_sum($statusCount);
        $diproses = $statusCount['Diproses'] ?? 0;
        $berkasTidakLengkap = $statusCount['Berkas Tidak Lengkap'] ?? 0;
        $diverifikasi = $statusCount['Diverifikasi'] ?? 0;
        $diterimaPrestasi = $statusCount['Diterima'] ?? 0;
        $diterimaReguler = $statusCount['Diterima Di Kelas Reguler'] ?? 0;
        $diterimaUnggulan = $statusCount['Diterima Di Kelas Unggulan'] ?? 0;
        $tidakDiterima = $statusCount['Tidak Diterima'] ?? 0;
        $formulirDisetujui = $formulirCount['Disetujui'] ?? 0;
        $formulirDitolak = $formulirCount['Ditolak'] ?? 0;

        // ----------------------------------------------------------------
        // Chart helper — 1 query per stat, dijalankan lazy
        // ----------------------------------------------------------------
        $chart = function (?string $status = null) {
            return CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                ->when(
                    $status,
                    fn ($q) => $q->where('status_pendaftaran', $status)
                )
                ->groupBy('hari')
                ->orderBy('hari')
                ->pluck('total')
                ->toArray();
        };

        $url = fn (string $path) => "/formulir{$path}";

        // ----------------------------------------------------------------
        // Stat builder helper
        // ----------------------------------------------------------------
        $makeStat = fn (
            string $value,
            string $description,
            string $icon,
            string $color,
            array $chartData,
            string $href
        ) => Stat::make('', $value)
            ->description($description)
            ->descriptionIcon($icon, IconPosition::Before)
            ->color($color)
            ->chart($chartData)
            ->extraAttributes([
                'class' => 'cursor-pointer transition hover:opacity-80',
                'onclick' => "window.location.href='{$href}'",
            ]);

        // ----------------------------------------------------------------
        // Stats dasar (tampil untuk semua role)
        // ----------------------------------------------------------------
        $stats = [
            $makeStat(
                "{$totalPendaftar} Peserta",
                'Total Pendaftar',
                'heroicon-o-user-circle',
                'gray',
                $chart(),
                $url('')
            ),
            $makeStat(
                "{$diproses} Peserta",
                'Formulir Diproses',
                'heroicon-o-arrow-path',
                'warning',
                $chart('Diproses'),
                $url('?tableFilters[status_pendaftaran][value]=Diproses')
            ),
            $makeStat(
                "{$berkasTidakLengkap} Peserta",
                'Berkas Tidak Lengkap',
                'heroicon-o-document-minus',
                'warning',
                $chart('Berkas Tidak Lengkap'),
                $url('?tableFilters[status_pendaftaran][value]=Berkas+Tidak+Lengkap')
            ),
            $makeStat(
                "{$diverifikasi} Peserta",
                'Diverifikasi',
                'heroicon-o-clipboard-document-check',
                'success',
                $chart('Diverifikasi'),
                $url('?tableFilters[status_pendaftaran][value]=Diverifikasi')
            ),
        ];

        // ----------------------------------------------------------------
        // Stats admin-only
        // ----------------------------------------------------------------
        if ($isAdmin) {
            $stats = array_merge($stats, [
                $makeStat(
                    "{$formulirDisetujui} Formulir",
                    'Formulir Disetujui',
                    'heroicon-o-document-check',
                    'success',
                    CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                        ->where('status_formulir', 'Disetujui')
                        ->groupBy('hari')->orderBy('hari')->pluck('total')->toArray(),
                    $url('?tableFilters[status_formulir][value]=Disetujui')
                ),

                $makeStat(
                    "{$formulirDitolak} Formulir",
                    'Formulir Ditolak',
                    'heroicon-o-document-minus',
                    'danger',
                    CalonSiswa::selectRaw('COUNT(*) as total, DATE(created_at) as hari')
                        ->where('status_formulir', 'Ditolak')
                        ->groupBy('hari')->orderBy('hari')->pluck('total')->toArray(),
                    $url('?tableFilters[status_formulir][value]=Ditolak')
                ),

                $makeStat(
                    "{$diterimaPrestasi} Peserta",
                    'Diterima Jalur Prestasi',
                    'heroicon-o-check-circle',
                    'success',
                    $chart('Diterima'),
                    $url('?tableFilters[status_pendaftaran][value]=Diterima')
                ),

                $makeStat(
                    "{$diterimaReguler} Peserta",
                    'Diterima Kelas Reguler',
                    'heroicon-o-shield-check',
                    'success',
                    $chart('Diterima Di Kelas Reguler'),
                    $url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Reguler')
                ),

                $makeStat(
                    "{$diterimaUnggulan} Peserta",
                    'Diterima Kelas Unggulan',
                    'heroicon-o-shield-check',
                    'info',
                    $chart('Diterima Di Kelas Unggulan'),
                    $url('?tableFilters[status_pendaftaran][value]=Diterima+Di+Kelas+Unggulan')
                ),

                $makeStat(
                    "{$tidakDiterima} Peserta",
                    'Tidak Diterima',
                    'heroicon-o-no-symbol',
                    'danger',
                    $chart('Tidak Diterima'),
                    $url('?tableFilters[status_pendaftaran][value]=Tidak+Diterima')
                ),
            ]);
        }

        return $stats;
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
use App\Models\Informasi;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
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

    public static function table(Table $table): Table
    {
        $isSuperAdmin = Auth::user()->username === 'super_admin';

        if ($isSuperAdmin) {
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
                        ->options(['Publish' => 'Publish', 'Draft' => 'Draft']),
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
            ->query(Informasi::where('status', 'Publish')->latest('updated_at'))
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

    // -------------------------------------------------------------------------
    // Helpers
    // -------------------------------------------------------------------------

    private function getCalonSiswa(): ?CalonSiswa
    {
        return CalonSiswa::where('nisn', Auth::user()->username)->first();
    }

    private function statusColor(string $status): string
    {
        return match ($status) {
            'Diverifikasi' => 'success',
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
            'Diverifikasi' => 'heroicon-o-clipboard-document-check',
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
        $sekarang = Carbon::now();

        $jalurs = ['prestasi', 'reguler', 'afirmasi', 'zonasi', 'mutasi'];

        foreach ($jalurs as $jalur) {
            $mulaiRaw = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_mulai"} ?? null;
            $selesaiRaw = $tahun->{"tanggal_pengumuman_jalur_{$jalur}_selesai"} ?? null;

            if (empty($mulaiRaw) || empty($selesaiRaw)) {
                continue;
            }

            $mulai = Carbon::createFromFormat('Y-m-d H:i:s', trim($mulaiRaw));
            $selesai = Carbon::createFromFormat('Y-m-d H:i:s', trim($selesaiRaw));

            if ($sekarang->between($mulai, $selesai)) {
                return true;
            }
        }

        return false;
    }

    private function isCalonSiswa(): bool
    {
        return Auth::user()->roles->first()->name === 'calon_siswa';
    }

    // -------------------------------------------------------------------------
    // Table
    // -------------------------------------------------------------------------

    public function table(Table $table): Table
    {
        $calonSiswa = $this->getCalonSiswa();
        $label = $calonSiswa?->status_pendaftaran ?? '';

        $urlFormulir = $calonSiswa ? '/formulir' : '';
        $urlViewFormulir = $calonSiswa ? '/formulir/'.$calonSiswa->id : '';
        $urlInformasi = $calonSiswa ? '/informasi' : '';

        $isCalonSiswa = $this->isCalonSiswa();
        $hasTerminalStatus = $calonSiswa && in_array($calonSiswa->status_pendaftaran, [
            'Diterima',
            'Diterima Di Kelas Unggulan',
            'Diterima Di Kelas Reguler',
            'Tidak Diterima',
        ]);
        $hidePendaftaranBadge = ! $isCalonSiswa || $calonSiswa === null || $hasTerminalStatus;
        $inPengumuman = $this->isInPengumumanPeriod();

        return $table
            ->headerActions([
                Action::make('label_status_pendaftaran')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden($hidePendaftaranBadge),

                Action::make('status_pendaftaran')
                    ->label($label)
                    ->color(fn () => $calonSiswa ? $this->statusColor($calonSiswa->status_pendaftaran) : 'warning')
                    ->icon(fn () => $calonSiswa ? $this->statusIcon($calonSiswa->status_pendaftaran) : 'heroicon-o-arrow-path')
                    ->outlined()
                    ->size('sm')
                    ->url($urlFormulir)
                    ->hidden($hidePendaftaranBadge),

                Action::make('label_status_kelulusan')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden(! $inPengumuman),

                Action::make('status_kelulusan')
                    ->label($label)
                    ->color(fn () => $calonSiswa ? $this->statusColor($calonSiswa->status_pendaftaran) : '')
                    ->icon(fn () => $calonSiswa ? $this->statusIcon($calonSiswa->status_pendaftaran) : '')
                    ->outlined()
                    ->size('sm')
                    ->url($urlViewFormulir)
                    ->hidden(! $inPengumuman),
            ])
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
        if (! session('otp_user_id')) {
            $this->redirect(filament()->getLoginUrl());

            return;
        }

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
            ->topNavigation()
            ->login(LoginCustom::class)
            ->registration(RegisterCustom::class)
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
                    ->url(fn (): string => UserResource::getUrl())
                    ->icon('heroicon-o-identification')
                    ->visible(fn () => Auth::user()?->roles?->where('name', 'super_admin')->first() !== null),
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

        // --- Prioritas: status_pendaftaran lebih spesifik, dihandle duluan ---

        if ($pendaftaranBerubah) {
            $pesan = match ($model->status_pendaftaran) {
                'Berkas Tidak Lengkap' => "⚠️ *Berkas Tidak Lengkap*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Berkas pendaftaran kamu dinyatakan *tidak lengkap*.\n"
                    ."Segera lengkapi berkas melalui sistem PPDB.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

                'Diverifikasi' => "🔍 *Berkas Diverifikasi*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Berkas pendaftaran kamu telah *diverifikasi*.\n"
                    ."Tunggu pengumuman selanjutnya.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

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

        // --- Fallback: hanya status_formulir yang berubah ---

        if (! $pesan && $formulirBerubah) {
            $pesan = match ($model->status_formulir) {
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
    // Helper: ambil telepon dari user terkait lalu kirim
    // -------------------------------------------------------------------------

    private function kirim(CalonSiswa $model, string $pesan): void
    {
        $telepon = $model->user?->telepon
            ?? $model->loadMissing('user')->user?->telepon;

        if (! $telepon) {
            return;
        }

        $this->wa->send($telepon, $pesan);
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
                'Berkas Tidak Lengkap',
                'Diverifikasi',
                'Tidak Diterima',
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan',
            ])->default('Diproses')->nullable();
            $table->enum('status_formulir', [
                'Diproses',
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

### 📄 `./routes/web.php`

```php
<?php

use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\NewPassword;
use App\Filament\Pages\Auth\ResetPasswordOtp;
use App\Filament\Pages\Auth\VerifikasiOtp;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    // OTP routes — diproteksi via session check di masing-masing Page::mount()
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
