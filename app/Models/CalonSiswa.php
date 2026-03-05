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
