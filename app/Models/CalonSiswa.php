<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CalonSiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'nik',
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
        'berkas_nisn',
        'berkas_skbb',
        'berkas_skab',
        'berkas_prestasi',
        'ibu_nama',
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
        'prestasi_id',
        'peminatan_ekstrakurikuler',
        'peminatan_pelajaran',
        'nilai_ipa',
        'nilai_ips',
        'nilai_bind',
        'nilai_mtk',
        'bobot_nilai_akademik',
        'bobot_nilai_praktik',
        'nilai_akademik',
        'nilai_praktik',
        'status_pendaftaran',
        'kelas_id',
        'tes_sesi',
        'tes_ruang',
        'tes_akademik_mulai',
        'tes_akademik_selesai',
        'tes_praktik_mulai',
        'tes_praktik_selesai',
    ];

    protected $casts = [
        'id' => 'integer',
        'tanggal_lahir' => 'date',
        'tahun_lulus' => 'date',
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
        'prestasi_id' => 'array',
        'berkas_prestasi' => 'array',
        'kelas_id' => 'integer',
        'tes_akademik_mulai' => 'datetime',
        'tes_akademik_selesai' => 'datetime',
        'tes_praktik_mulai' => 'datetime',
        'tes_praktik_selesai' => 'datetime',
        'peminatan_ekstrakurikuler' => 'array',
        'peminatan_pelajaran' => 'array',
    ];

    public function jalurPendaftaran(): BelongsTo
    {
        return $this->belongsTo(JalurPendaftaran::class);
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

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function sekolahAsal(): BelongsTo
    {
        return $this->belongsTo(SekolahAsal::class);
    }

    public function prestasi(): BelongsTo
    {
        return $this->belongsTo(Prestasi::class);
    }

    public function siswaNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class);
    }

    public function siswaProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function siswaKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function siswaKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function siswaKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function ibuNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class);
    }

    public function ibuProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function ibuKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function ibuKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function ibuKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function ayahNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class);
    }

    public function ayahProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function ayahKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function ayahKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function ayahKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function waliNegara(): BelongsTo
    {
        return $this->belongsTo(Negara::class);
    }

    public function waliProvinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function waliKabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function waliKecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function waliKelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }
}
