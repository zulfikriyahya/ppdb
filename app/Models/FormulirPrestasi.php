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
