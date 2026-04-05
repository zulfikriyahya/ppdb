<?php

namespace App\Services;

class OtpMessageService
{
    public static function verifikasi(string $name, string $otp): string
    {
        return "Halo {$name},\n\n"
            . "Kode OTP verifikasi akun PMBM MTsN 1 Pandeglang Anda:\n\n"
            . "*{$otp}*\n\n"
            . 'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';
    }

    public static function resetPassword(string $name, string $otp): string
    {
        return "Halo {$name},\n\n"
            . "Kode OTP reset password PMBM MTsN 1 Pandeglang Anda:\n\n"
            . "*{$otp}*\n\n"
            . 'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';
    }

    public static function passwordBerhasilDiubah(string $name): string
    {
        return "Halo {$name},\n\n"
            . "Password akun PMBM MTsN 1 Pandeglang Anda telah berhasil diubah.\n\n"
            . 'Jika Anda tidak merasa melakukan perubahan ini, segera hubungi panitia PMBM.';
    }
}
