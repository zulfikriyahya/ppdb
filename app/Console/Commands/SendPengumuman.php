<?php

namespace App\Console\Commands;

use App\Models\CalonSiswa;
use App\Services\WhatsAppService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SendPengumuman extends Command
{
    protected $signature   = 'ppdb:send-pengumuman';
    protected $description = 'Kirim notifikasi pengumuman hasil seleksi ke semua pendaftar saat periode pengumuman dimulai';

    public function __construct(private WhatsAppService $wa)
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $t = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

        if (! $t) {
            $this->info('Tidak ada tahun pendaftaran aktif.');
            return self::SUCCESS;
        }

        $jalurPeriods = [
            'Prestasi' => ['tanggal_pengumuman_jalur_prestasi_mulai', 'tanggal_pengumuman_jalur_prestasi_selesai'],
            'Reguler'  => ['tanggal_pengumuman_jalur_reguler_mulai',  'tanggal_pengumuman_jalur_reguler_selesai'],
            'Afirmasi' => ['tanggal_pengumuman_jalur_afirmasi_mulai', 'tanggal_pengumuman_jalur_afirmasi_selesai'],
            'Zonasi'   => ['tanggal_pengumuman_jalur_zonasi_mulai',   'tanggal_pengumuman_jalur_zonasi_selesai'],
            'Mutasi'   => ['tanggal_pengumuman_jalur_mutasi_mulai',   'tanggal_pengumuman_jalur_mutasi_selesai'],
        ];

        $jalurIds = DB::table('jalur_pendaftarans')
            ->pluck('id', 'nama'); // ['Prestasi' => 1, 'Reguler' => 2, ...]

        foreach ($jalurPeriods as $namaJalur => [$mulaiCol, $selesaiCol]) {
            if (! $t->{$mulaiCol} || ! $t->{$selesaiCol}) {
                continue;
            }

            $mulai   = Carbon::parse($t->{$mulaiCol});
            $selesai = Carbon::parse($t->{$selesaiCol});
            $now     = Carbon::now();

            // Hanya jalankan jika sekarang tepat dalam periode pengumuman
            if (! $now->between($mulai, $selesai)) {
                continue;
            }

            // Cache key unik per jalur per tanggal mulai — mencegah pengiriman ganda
            $cacheKey = "ppdb:pengumuman:{$namaJalur}:{$mulai->toDateString()}";

            if (Cache::has($cacheKey)) {
                $this->info("[{$namaJalur}] Sudah dikirim hari ini, dilewati.");
                continue;
            }

            $jalurId = $jalurIds[$namaJalur] ?? null;
            if (! $jalurId) {
                $this->warn("[{$namaJalur}] Jalur tidak ditemukan di database.");
                continue;
            }

            $pendaftars = CalonSiswa::where('jalur_pendaftaran_id', $jalurId)
                ->whereIn('status_pendaftaran', [
                    'Diterima',
                    'Diterima Di Kelas Reguler',
                    'Diterima Di Kelas Unggulan',
                    'Tidak Diterima',
                ])
                ->with('user')
                ->get();

            if ($pendaftars->isEmpty()) {
                $this->info("[{$namaJalur}] Tidak ada pendaftar dengan status final.");
                Cache::put($cacheKey, true, now()->endOfDay());
                continue;
            }

            $this->info("[{$namaJalur}] Mengirim ke {$pendaftars->count()} pendaftar...");

            foreach ($pendaftars as $cs) {
                $telepon = $cs->user?->telepon;
                if (! $telepon) {
                    $this->warn("  - {$cs->nama}: nomor telepon tidak ditemukan, dilewati.");
                    continue;
                }

                $diterima = in_array($cs->status_pendaftaran, [
                    'Diterima',
                    'Diterima Di Kelas Reguler',
                    'Diterima Di Kelas Unggulan',
                ]);

                $sklUrl = route('skl.cetak', $cs->id);

                $pesan = $diterima
                    ? "*Pengumuman Hasil Seleksi*\n\n"
                    . "Halo, *{$cs->nama}*!\n"
                    . "Selamat, Anda dinyatakan *{$cs->status_pendaftaran}* di MTsN 1 Pandeglang.\n\n"
                    . "No. Pendaftaran : *{$cs->nomor_pendaftaran}*\n\n"
                    . "Unduh surat kelulusan Anda melalui tautan berikut:\n"
                    . "{$sklUrl}\n\n"
                    . "Segera lakukan registrasi ulang sesuai jadwal yang telah ditentukan.\n\n"
                    . "_MTsN 1 Pandeglang_"
                    : "*Pengumuman Hasil Seleksi*\n\n"
                    . "Halo, *{$cs->nama}*!\n"
                    . "Mohon maaf, Anda dinyatakan *tidak diterima* pada seleksi ini.\n\n"
                    . "No. Pendaftaran : *{$cs->nomor_pendaftaran}*\n\n"
                    . "Lihat surat hasil seleksi Anda melalui tautan berikut:\n"
                    . "{$sklUrl}\n\n"
                    . "Tetap semangat dan terus berusaha.\n\n"
                    . "_MTsN 1 Pandeglang_";

                $this->wa->send($telepon, $pesan, minDelay: 5, maxDelay: 60);
                $this->line("  - {$cs->nama}: terkirim.");
            }

            // Tandai sudah dikirim, cache hingga akhir hari ini
            Cache::put($cacheKey, true, now()->endOfDay());
            $this->info("[{$namaJalur}] Selesai.");
        }

        return self::SUCCESS;
    }
}
