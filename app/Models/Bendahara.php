<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bendahara extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'nip',
        'tahun_pendaftaran_id',
        'berkas_foto',
        'berkas_tte',
        'berkas_sk',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'tahun_pendaftaran_id' => 'integer',
    ];

    public function tahunPendaftaran(): BelongsTo
    {
        return $this->belongsTo(TahunPendaftaran::class);
    }

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }
}
