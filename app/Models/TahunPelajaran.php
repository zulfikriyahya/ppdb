<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TahunPelajaran extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'tanggal_pendaftaran_mulai',
        'tanggal_pengumuman_jalur_prestasi',
        'tanggal_tes_akademik',
        'tanggal_tes_praktik',
        'tanggal_pengumuman_jalur_reguler',
        'tanggal_registrasi_berkas',
        'tanggal_pendaftaran_selesai',
        'kuantitas',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tanggal_pendaftaran_mulai' => 'date',
        'tanggal_pengumuman_jalur_prestasi' => 'datetime',
        'tanggal_tes_akademik' => 'date',
        'tanggal_tes_praktik' => 'date',
        'tanggal_pengumuman_jalur_reguler' => 'datetime',
        'tanggal_registrasi_berkas' => 'date',
        'tanggal_pendaftaran_selesai' => 'date',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}
