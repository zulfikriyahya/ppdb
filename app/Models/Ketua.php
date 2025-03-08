<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ketua extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'nip',
        'periode_awal',
        'periode_akhir',
        'berkas_foto',
        'berkas_tte',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'periode_awal' => 'date',
        'periode_akhir' => 'date',
    ];

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}
