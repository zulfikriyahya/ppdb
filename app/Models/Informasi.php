<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Informasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'tanggal',
        'tahun_pelajaran_id',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tanggal' => 'datetime',
        'tahun_pelajaran_id' => 'integer',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    public function tahunPelajaran(): BelongsTo
    {
        return $this->belongsTo(TahunPelajaran::class);
    }
}
