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
