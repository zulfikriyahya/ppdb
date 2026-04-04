<?php

namespace Database\Seeders;

use App\Models\TahunPendaftaran;
use Illuminate\Database\Seeder;

class TahunPendaftaranSeeder extends Seeder
{
    public function run(): void
    {
        TahunPendaftaran::create([
            'nama' => '2026/2027',
            'status' => 'Aktif',

            // ─────────────────────────────────────────────────────────
            // PERIODE PMBM GLOBAL
            // Mencakup seluruh rentang kegiatan: 6 April – 12 Mei 2026
            // ─────────────────────────────────────────────────────────
            'tanggal_ppdb_mulai' => '2026-04-06 08:00:00',
            'tanggal_ppdb_selesai' => '2026-05-12 16:00:00',

            // ─────────────────────────────────────────────────────────
            // PMBM MANDIRI (sistem: daftar.mtsn1pandeglang.sch.id)
            // Berlaku untuk: Jalur Prestasi, Afirmasi, Zonasi, Mutasi
            // Jam layanan panitia: 08.00–14.00 WIB (istirahat 11.30–13.00)
            // ─────────────────────────────────────────────────────────

            // Jalur Prestasi
            // Pendaftaran online + penyerahan berkas fisik: 6–8 April
            // Verifikasi berkas: 9–10 April (internal panitia)
            // Tes kemampuan & BTQ: 13 April (hadir max. 07.00 WIB)
            // Pengumuman hasil: 14 April
            // Lapor diri: 15–16 April
            'tanggal_pendaftaran_jalur_prestasi_mulai' => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_prestasi_selesai' => '2026-04-08 14:00:00',
            'tanggal_pengumuman_jalur_prestasi_mulai' => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_prestasi_selesai' => '2026-04-14 16:00:00',

            // Jalur Afirmasi
            // Jadwal identik dengan Jalur Prestasi (PMBM Mandiri)
            // Verifikasi kelayakan ekonomi + pengecekan lapangan (SKTM)
            'tanggal_pendaftaran_jalur_afirmasi_mulai' => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_afirmasi_selesai' => '2026-04-08 14:00:00',
            'tanggal_pengumuman_jalur_afirmasi_mulai' => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_afirmasi_selesai' => '2026-04-14 16:00:00',

            // Jalur Zonasi (PMBM Mandiri)
            // Jadwal identik dengan Prestasi & Afirmasi
            'tanggal_pendaftaran_jalur_zonasi_mulai' => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_zonasi_selesai' => '2026-04-08 14:00:00',
            'tanggal_pengumuman_jalur_zonasi_mulai' => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_zonasi_selesai' => '2026-04-14 16:00:00',

            // Jalur Mutasi (PMBM Mandiri)
            // Jadwal identik dengan Prestasi, Afirmasi & Zonasi
            'tanggal_pendaftaran_jalur_mutasi_mulai' => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_mutasi_selesai' => '2026-04-08 14:00:00',
            'tanggal_pengumuman_jalur_mutasi_mulai' => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_mutasi_selesai' => '2026-04-14 16:00:00',

            // ─────────────────────────────────────────────────────────
            // PMBM BERSAMA / REGULER (sistem: pmbm-kanwilbanten.com)
            // SK Kanwil Kemenag Banten No. 009/B/Tahun 2026
            // ─────────────────────────────────────────────────────────

            // Jalur Reguler
            // Pendaftaran online: 18–27 April
            // Verifikasi dokumen oleh panitia: 19–28 April
            // Pengumuman peserta CBT: 29 April (08.00 WIB)
            // Pengumuman kelulusan: 5 Mei (08.00 WIB)
            'tanggal_pendaftaran_jalur_reguler_mulai' => '2026-04-18 08:00:00',
            'tanggal_pendaftaran_jalur_reguler_selesai' => '2026-04-27 16:00:00',
            'tanggal_pengumuman_jalur_reguler_mulai' => '2026-05-05 08:00:00',
            'tanggal_pengumuman_jalur_reguler_selesai' => '2026-05-05 16:00:00',

            // ─────────────────────────────────────────────────────────
            // KARTU TES / PENGUMUMAN PESERTA CBT
            // Pengumuman peserta yang berhak mengikuti CBT: 29 April
            // Uji coba CBT: 30 April (07.30–16.00 WIB)
            // ─────────────────────────────────────────────────────────
            'tanggal_penerbitan_kartu_tes_mulai' => '2026-04-29 08:00:00',
            'tanggal_penerbitan_kartu_tes_selesai' => '2026-04-30 16:00:00',

            // ─────────────────────────────────────────────────────────
            // TES AKADEMIK — CBT (Computer Based Test)
            // Pelaksanaan: 2 Mei 2026 (07.30–16.00 WIB)
            // Bobot nilai: 70% dari Nilai Akhir
            // ─────────────────────────────────────────────────────────
            'tanggal_tes_akademik_mulai' => '2026-05-02 07:30:00',
            'tanggal_tes_akademik_selesai' => '2026-05-02 16:00:00',

            // ─────────────────────────────────────────────────────────
            // TES PRAKTIK — BTQ (Baca Tulis Al-Qur'an)
            // Pelaksanaan: 2–3 Mei 2026 (07.30–16.00 WIB)
            // Bobot nilai: 30% dari Nilai Akhir
            // ─────────────────────────────────────────────────────────
            'tanggal_tes_praktik_mulai' => '2026-05-02 07:30:00',
            'tanggal_tes_praktik_selesai' => '2026-05-03 16:00:00',

            // ─────────────────────────────────────────────────────────
            // REGISTRASI BERKAS / LAPOR DIRI (semua jalur)
            // Prestasi & Afirmasi: 15–16 April (tanggal terpisah, lihat catatan)
            // Reguler: 6–12 Mei 2026 (08.00–16.00 WIB)
            // Tidak lapor diri = otomatis dinyatakan GUGUR / mengundurkan diri
            //
            // CATATAN: field ini dipakai untuk lapor diri Jalur Reguler.
            // Lapor diri Jalur Prestasi/Afirmasi (15–16 April) ditangani
            // oleh sistem PMBM Mandiri secara terpisah.
            // ─────────────────────────────────────────────────────────
            'tanggal_registrasi_berkas_mulai' => '2026-05-06 08:00:00',
            'tanggal_registrasi_berkas_selesai' => '2026-05-12 16:00:00',

            // ─────────────────────────────────────────────────────────
            // KUANTITAS
            // 224 = kuota Jalur Reguler (7 rombel × 32 murid)
            // Kuota Jalur Prestasi & Afirmasi dikonfirmasi panitia (TBD)
            // Total kapasitas keseluruhan = 320 (termasuk semua jalur)
            // ─────────────────────────────────────────────────────────
            'kuantitas' => 320,
        ]);
    }
}
