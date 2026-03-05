<?php

namespace App\Observers;

use App\Models\CalonSiswa;
use App\Services\WhatsAppService;

class CalonSiswaObserver
{
    public function __construct(private WhatsAppService $wa) {}

    // -------------------------------------------------------------------------
    // Saat formulir pertama kali dibuat
    // -------------------------------------------------------------------------

    public function created(CalonSiswa $model): void
    {
        $this->kirim(
            $model,
            "✅ *Pendaftaran Berhasil*\n\n"
                ."Halo, *{$model->nama}*!\n"
                ."Formulir pendaftaran kamu telah kami terima.\n\n"
                ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                ."📄 Status Formulir : *{$model->status_formulir}*\n"
                ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n\n"
                ."Pantau status pendaftaran kamu secara berkala.\n"
                .'_MTsN 1 Pandeglang_'
        );
    }

    // -------------------------------------------------------------------------
    // Saat status_formulir atau status_pendaftaran berubah
    // -------------------------------------------------------------------------

    public function updated(CalonSiswa $model): void
    {
        $formulirBerubah = $model->wasChanged('status_formulir');
        $pendaftaranBerubah = $model->wasChanged('status_pendaftaran');

        if (! $formulirBerubah && ! $pendaftaranBerubah) {
            return;
        }

        $pesan = null;

        if ($pendaftaranBerubah) {
            $pesan = match ($model->status_pendaftaran) {
                'Diterima', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan' => "🎉 *Selamat, Kamu Diterima!*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Kamu dinyatakan *{$model->status_pendaftaran}* di MTsN 1 Pandeglang.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n\n"
                    ."Segera lakukan registrasi ulang.\n"
                    .'_MTsN 1 Pandeglang_',

                'Tidak Diterima' => "ℹ️ *Hasil Seleksi*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Mohon maaf, kamu dinyatakan *tidak diterima* pada seleksi ini.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n\n"
                    ."Tetap semangat!\n"
                    .'_MTsN 1 Pandeglang_',

                default => null,
            };
        }

        if (! $pesan && $formulirBerubah) {
            $pesan = match ($model->status_formulir) {
                'Berkas Tidak Lengkap' => "⚠️ *Berkas Tidak Lengkap*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Berkas pendaftaran kamu dinyatakan *tidak lengkap*.\n"
                    ."Segera lengkapi berkas melalui sistem PPDB.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

                'Disetujui' => "✅ *Formulir Disetujui*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Formulir pendaftaran kamu telah *disetujui* oleh panitia.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

                'Ditolak' => "❌ *Formulir Ditolak*\n\n"
                    ."Halo, *{$model->nama}*!\n"
                    ."Formulir pendaftaran kamu *ditolak* oleh panitia.\n"
                    ."Silakan hubungi panitia untuk informasi lebih lanjut.\n\n"
                    ."📋 No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    ."📄 Status Formulir : *{$model->status_formulir}*\n"
                    ."📌 Status Pendaftaran : *{$model->status_pendaftaran}*\n"
                    .'_MTsN 1 Pandeglang_',

                default => null,
            };
        }

        if ($pesan) {
            $this->kirim($model, $pesan);
        }
    }

    // -------------------------------------------------------------------------
    // Helper
    // -------------------------------------------------------------------------

    private function kirim(CalonSiswa $model, string $pesan): void
    {
        $telepon = $model->user?->telepon
            ?? $model->loadMissing('user')->user?->telepon;

        if (! $telepon) {
            return;
        }

        // Delay lebih panjang untuk notifikasi massal (bulk update)
        $this->wa->send($telepon, $pesan, minDelay: 5, maxDelay: 60);
    }
}
