<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
