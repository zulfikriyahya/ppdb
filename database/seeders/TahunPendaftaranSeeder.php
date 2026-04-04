<?php

namespace Database\Seeders;

use App\Models\TahunPendaftaran;
use Illuminate\Database\Seeder;

class TahunPendaftaranSeeder extends Seeder
{
    public function run(): void
    {
        TahunPendaftaran::create([
            'nama'   => '2026/2027',
            'status' => 'Aktif',

            // Periode PMBM global
            'tanggal_ppdb_mulai'    => '2026-04-06 08:00:00',
            'tanggal_ppdb_selesai'  => '2026-05-12 18:00:00',

            // ── PMBM MANDIRI ─────────────────────────────────────────────
            // Jalur Prestasi
            'tanggal_pendaftaran_jalur_prestasi_mulai'    => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_prestasi_selesai'  => '2026-04-08 18:00:00',
            'tanggal_pengumuman_jalur_prestasi_mulai'     => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_prestasi_selesai'   => '2026-04-14 18:00:00',

            // Jalur Afirmasi (sama dengan Prestasi — PMBM Mandiri)
            'tanggal_pendaftaran_jalur_afirmasi_mulai'    => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_afirmasi_selesai'  => '2026-04-08 18:00:00',
            'tanggal_pengumuman_jalur_afirmasi_mulai'     => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_afirmasi_selesai'   => '2026-04-14 18:00:00',

            // ── PMBM BERSAMA ──────────────────────────────────────────────
            // Jalur Reguler
            'tanggal_pendaftaran_jalur_reguler_mulai'    => '2026-04-18 08:00:00',
            'tanggal_pendaftaran_jalur_reguler_selesai'  => '2026-04-27 18:00:00',
            'tanggal_pengumuman_jalur_reguler_mulai'     => '2026-05-05 08:00:00',
            'tanggal_pengumuman_jalur_reguler_selesai'   => '2026-05-05 18:00:00',

            // Jalur Zonasi (sama dengan PMBM Mandiri)
            'tanggal_pendaftaran_jalur_zonasi_mulai'     => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_zonasi_selesai'   => '2026-04-08 18:00:00',
            'tanggal_pengumuman_jalur_zonasi_mulai'      => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_zonasi_selesai'    => '2026-04-14 18:00:00',

            // Jalur Mutasi (sama dengan PMBM Mandiri)
            'tanggal_pendaftaran_jalur_mutasi_mulai'     => '2026-04-06 08:00:00',
            'tanggal_pendaftaran_jalur_mutasi_selesai'   => '2026-04-08 18:00:00',
            'tanggal_pengumuman_jalur_mutasi_mulai'      => '2026-04-14 08:00:00',
            'tanggal_pengumuman_jalur_mutasi_selesai'    => '2026-04-14 18:00:00',

            // Kartu Tes — pengumuman peserta CAT: 29–30 Apr
            'tanggal_penerbitan_kartu_tes_mulai'    => '2026-04-29 08:00:00',
            'tanggal_penerbitan_kartu_tes_selesai'  => '2026-04-30 18:00:00',

            // Tes Akademik — CBT: 2 Mei
            'tanggal_tes_akademik_mulai'    => '2026-05-02 08:00:00',
            'tanggal_tes_akademik_selesai'  => '2026-05-02 18:00:00',

            // Tes Praktik / BTQ: 2–3 Mei
            'tanggal_tes_praktik_mulai'    => '2026-05-02 08:00:00',
            'tanggal_tes_praktik_selesai'  => '2026-05-03 18:00:00',

            // Registrasi Berkas / Lapor Diri: 6–12 Mei
            'tanggal_registrasi_berkas_mulai'    => '2026-05-06 08:00:00',
            'tanggal_registrasi_berkas_selesai'  => '2026-05-12 18:00:00',

            'kuantitas' => 320,
        ]);
    }
}
