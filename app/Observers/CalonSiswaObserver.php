<?php

namespace App\Observers;

use App\Models\CalonSiswa;
use App\Services\WhatsAppService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
            "*Pendaftaran Berhasil*\n\n"
                . "Halo, *{$model->nama}*!\n"
                . "Formulir pendaftaran Anda telah kami terima.\n\n"
                . "No. Pendaftaran : *{$model->nomor_pendaftaran}*\n\n"
                . "Pantau status pendaftaran Anda secara berkala melalui sistem PMBM.\n\n"
                . "_MTsN 1 Pandeglang_"
        );
    }

    // -------------------------------------------------------------------------
    // Saat status_formulir atau status_pendaftaran berubah
    // -------------------------------------------------------------------------

    public function updated(CalonSiswa $model): void
    {
        $formulirBerubah    = $model->wasChanged('status_formulir');
        $pendaftaranBerubah = $model->wasChanged('status_pendaftaran');

        if (! $formulirBerubah && ! $pendaftaranBerubah) {
            return;
        }

        $pesan = null;

        // Status pendaftaran hanya dikirim dalam periode pengumuman
        if ($pendaftaranBerubah && $this->isWithinPengumumanPeriod()) {
            $sklUrl = route('skl.cetak', $model->id);

            $pesan = match ($model->status_pendaftaran) {
                'Diterima',
                'Diterima Di Kelas Reguler',
                'Diterima Di Kelas Unggulan' =>
                "*Pengumuman Hasil Seleksi*\n\n"
                    . "Halo, *{$model->nama}*!\n"
                    . "Selamat, Anda dinyatakan *{$model->status_pendaftaran}* di MTsN 1 Pandeglang.\n\n"
                    . "No. Pendaftaran : *{$model->nomor_pendaftaran}*\n\n"
                    . "Unduh surat kelulusan Anda melalui tautan berikut:\n"
                    . "{$sklUrl}\n\n"
                    . "Segera lakukan registrasi ulang sesuai jadwal yang telah ditentukan.\n\n"
                    . "_MTsN 1 Pandeglang_",

                'Tidak Diterima' =>
                "*Pengumuman Hasil Seleksi*\n\n"
                    . "Halo, *{$model->nama}*!\n"
                    . "Mohon maaf, Anda dinyatakan *tidak diterima* pada seleksi ini.\n\n"
                    . "No. Pendaftaran : *{$model->nomor_pendaftaran}*\n\n"
                    . "Lihat surat hasil seleksi Anda melalui tautan berikut:\n"
                    . "{$sklUrl}\n\n"
                    . "Tetap semangat dan terus berusaha.\n\n"
                    . "_MTsN 1 Pandeglang_",

                default => null,
            };
        }

        // Status formulir dikirim kapan saja (tidak terikat periode)
        if (! $pesan && $formulirBerubah) {
            $pesan = match ($model->status_formulir) {
                'Berkas Tidak Lengkap' =>
                "*Berkas Tidak Lengkap*\n\n"
                    . "Halo, *{$model->nama}*!\n"
                    . "Berkas pendaftaran Anda dinyatakan *tidak lengkap*.\n"
                    . "Segera lengkapi berkas melalui sistem PMBM.\n\n"
                    . "No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    . "Status Formulir : *{$model->status_formulir}*\n\n"
                    . "_MTsN 1 Pandeglang_",

                'Disetujui' =>
                "*Formulir Disetujui*\n\n"
                    . "Halo, *{$model->nama}*!\n"
                    . "Formulir pendaftaran Anda telah *disetujui* oleh panitia.\n\n"
                    . "No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    . "Status Formulir : *{$model->status_formulir}*\n\n"
                    . "_MTsN 1 Pandeglang_",

                'Ditolak' =>
                "*Formulir Ditolak*\n\n"
                    . "Halo, *{$model->nama}*!\n"
                    . "Formulir pendaftaran Anda *ditolak* oleh panitia.\n"
                    . "Silakan hubungi panitia untuk informasi lebih lanjut.\n\n"
                    . "No. Pendaftaran : *{$model->nomor_pendaftaran}*\n"
                    . "Status Formulir : *{$model->status_formulir}*\n\n"
                    . "_MTsN 1 Pandeglang_",

                default => null,
            };
        }

        if ($pesan) {
            $this->kirim($model, $pesan);
        }
    }

    // -------------------------------------------------------------------------
    // Periode pengumuman
    // -------------------------------------------------------------------------

    private function isWithinPengumumanPeriod(): bool
    {
        $t = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();
        if (! $t) {
            return false;
        }

        foreach (
            [
                ['tanggal_pengumuman_jalur_prestasi_mulai', 'tanggal_pengumuman_jalur_prestasi_selesai'],
                ['tanggal_pengumuman_jalur_reguler_mulai',  'tanggal_pengumuman_jalur_reguler_selesai'],
                ['tanggal_pengumuman_jalur_afirmasi_mulai', 'tanggal_pengumuman_jalur_afirmasi_selesai'],
                ['tanggal_pengumuman_jalur_zonasi_mulai',   'tanggal_pengumuman_jalur_zonasi_selesai'],
                ['tanggal_pengumuman_jalur_mutasi_mulai',   'tanggal_pengumuman_jalur_mutasi_selesai'],
            ] as [$mulai, $selesai]
        ) {
            if ($t->{$mulai} && $t->{$selesai}) {
                if (Carbon::now()->between(
                    Carbon::parse($t->{$mulai}),
                    Carbon::parse($t->{$selesai})
                )) {
                    return true;
                }
            }
        }

        return false;
    }

    // -------------------------------------------------------------------------
    // Helper kirim WA
    // -------------------------------------------------------------------------

    private function kirim(CalonSiswa $model, string $pesan): void
    {
        $telepon = $model->user?->telepon
            ?? $model->loadMissing('user')->user?->telepon;

        if (! $telepon) {
            return;
        }

        $this->wa->send($telepon, $pesan, minDelay: 5, maxDelay: 60);
    }
}
