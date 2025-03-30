<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
