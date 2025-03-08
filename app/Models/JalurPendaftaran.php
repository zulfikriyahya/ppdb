<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JalurPendaftaran extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'kuantitas',
        'tahun_pelajaran_id',
    ];

    protected $casts = [
        'id' => 'integer',
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
