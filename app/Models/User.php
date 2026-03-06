<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser, HasAvatar, MustVerifyEmail
{
    use HasFactory, HasRoles, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'username',
        'telepon',
        'status',
        'email',
        'email_verified_at',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // TODO: Tambahkan Validasi Email Harus Terverifikasi yang dihandle oleh VerifikasiOtp::class
        return true;
    }

    // -----------------------------------------------------------------------
    // Relationships
    // -----------------------------------------------------------------------

    public function calonSiswas(): HasMany
    {
        return $this->hasMany(CalonSiswa::class);
    }

    /**
     * Relasi ke satu CalonSiswa milik user ini (shortcut).
     * Lebih efisien daripada calonSiswas()->first() di setiap pemanggilan.
     */
    public function calonSiswa(): HasOne
    {
        return $this->hasOne(CalonSiswa::class)->withoutGlobalScopes();
    }

    // -----------------------------------------------------------------------
    // Filament Avatar
    // -----------------------------------------------------------------------

    public function getFilamentAvatarUrl(): ?string
    {
        // Prioritas 1: avatar yang di-upload langsung di profil user
        if ($this->avatar) {
            return asset('storage/' . $this->avatar);
        }

        // Prioritas 2: foto formal dari formulir pendaftaran (khusus calon_siswa)
        $foto = $this->calonSiswa?->berkas_foto;
        if ($foto) {
            return asset('storage/' . $foto);
        }

        return null;
    }

    // -----------------------------------------------------------------------
    // Booted
    // -----------------------------------------------------------------------

    protected static function booted(): void
    {
        static::created(function ($user) {
            if ($user->roles()->count() === 0) {
                $user->assignRole('calon_siswa');
            }
        });
    }
}
