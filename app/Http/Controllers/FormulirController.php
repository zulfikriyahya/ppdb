<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use App\Models\Ketua;
use App\Models\Pimpinan;
use App\Models\Sekretaris;
use App\Models\TahunPendaftaran;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Fluent;

class FormulirController extends Controller
{
    // =========================================================================
    // SHARED
    // =========================================================================

    private function getTahun(): ?TahunPendaftaran
    {
        return TahunPendaftaran::where('status', 'Aktif')->first();
    }

    private function getInstansi(): Fluent
    {
        return new Fluent([
            'nama'           => 'MTs Negeri 1 Pandeglang',
            'alamat'         => 'Jl. Raya Labuan',
            'website'        => 'mtsn1pandeglang.sch.id',
            'email'          => 'adm@mtsn1pandeglang.sch.id',
            'telepon'        => '+62 8953-5185-6267',
            'nomor_surat'    => null,
            'logo'           => asset('img/logo.png'),
            'logo_institusi' => asset('img/logo-institusi.png'),
            'kabupaten'      => new Fluent(['nama' => 'Pandeglang']),
            'kecamatan'      => new Fluent(['nama' => 'Kaduhejo']),
            'kelurahan'      => new Fluent(['nama' => 'Palurahan']),
            'provinsi'       => new Fluent(['nama' => 'Banten']),
        ]);
    }

    private function getViewData(CalonSiswa $record): array
    {
        $tahunPendaftaran = $this->getTahun();

        $ketua = Ketua::where('tahun_pendaftaran_id', $tahunPendaftaran?->id)
            ->where('status', 'Aktif')
            ->first();

        $sekretaris = Sekretaris::where('tahun_pendaftaran_id', $tahunPendaftaran?->id)
            ->where('status', 'Aktif')
            ->first();

        $pimpinan = Pimpinan::where('tahun_pendaftaran_id', $tahunPendaftaran?->id)
            ->where('status', 'Aktif')
            ->first();

        return compact('record', 'tahunPendaftaran', 'ketua', 'sekretaris', 'pimpinan')
            + ['instansi' => $this->getInstansi()];
    }

    private function authorize(CalonSiswa $calonSiswa): void
    {
        if (
            Auth::user()->hasRole('calon_siswa') &&
            $calonSiswa->user_id !== Auth::id()
        ) {
            abort(403, 'Anda tidak memiliki akses.');
        }
    }

    private function loadRelasi(CalonSiswa $calonSiswa): void
    {
        $calonSiswa->load([
            'jalurPendaftaran',
            'sekolahAsal',
            'siswaKelurahan',
            'siswaKecamatan',
            'siswaKabupaten',
            'siswaProvinsi',
            'formulirPrestasis.prestasi',
        ]);
    }

    // =========================================================================
    // CETAK FORMULIR
    // =========================================================================

    public function cetak(CalonSiswa $calonSiswa)
    {
        $this->authorize($calonSiswa);

        if ($calonSiswa->status_formulir !== 'Disetujui') {
            abort(403, 'Formulir belum disetujui.');
        }

        $this->loadRelasi($calonSiswa);

        return view('formulir', $this->getViewData($calonSiswa));
    }

    // =========================================================================
    // CETAK KARTU TES
    // =========================================================================

    public function cetakKartuTes(CalonSiswa $calonSiswa)
    {
        $this->authorize($calonSiswa);

        if ($calonSiswa->status_formulir !== 'Disetujui') {
            abort(403, 'Formulir belum disetujui.');
        }

        if (in_array($calonSiswa->status_pendaftaran, [
            'Tidak Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
        ])) {
            abort(403, 'Kartu tes tidak tersedia untuk status pendaftaran ini.');
        }

        $tahun = $this->getTahun();

        if (
            ! $tahun?->tanggal_penerbitan_kartu_tes_mulai ||
            ! $tahun?->tanggal_penerbitan_kartu_tes_selesai ||
            ! Carbon::now()->between(
                Carbon::parse($tahun->tanggal_penerbitan_kartu_tes_mulai),
                Carbon::parse($tahun->tanggal_penerbitan_kartu_tes_selesai)
            )
        ) {
            abort(403, 'Kartu tes belum atau sudah tidak dapat dicetak.');
        }

        $this->loadRelasi($calonSiswa);

        return view('kartu-tes', $this->getViewData($calonSiswa));
    }

    // =========================================================================
    // CETAK SKL / PENGUMUMAN HASIL
    // =========================================================================

    public function cetakSkl(CalonSiswa $calonSiswa)
    {
        $this->authorize($calonSiswa);

        if (! in_array($calonSiswa->status_pendaftaran, [
            'Diterima',
            'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan',
            'Tidak Diterima',
        ])) {
            abort(403, 'Pengumuman hasil belum tersedia.');
        }

        $tahun   = $this->getTahun();
        $periodes = [
            ['tanggal_pengumuman_jalur_prestasi_mulai',  'tanggal_pengumuman_jalur_prestasi_selesai'],
            ['tanggal_pengumuman_jalur_reguler_mulai',   'tanggal_pengumuman_jalur_reguler_selesai'],
            ['tanggal_pengumuman_jalur_afirmasi_mulai',  'tanggal_pengumuman_jalur_afirmasi_selesai'],
            ['tanggal_pengumuman_jalur_zonasi_mulai',    'tanggal_pengumuman_jalur_zonasi_selesai'],
            ['tanggal_pengumuman_jalur_mutasi_mulai',    'tanggal_pengumuman_jalur_mutasi_selesai'],
        ];

        $dalamPeriode = false;
        foreach ($periodes as [$mulai, $selesai]) {
            if (
                $tahun?->{$mulai} && $tahun?->{$selesai} &&
                Carbon::now()->between(
                    Carbon::parse($tahun->{$mulai}),
                    Carbon::parse($tahun->{$selesai})
                )
            ) {
                $dalamPeriode = true;
                break;
            }
        }

        if (! $dalamPeriode) {
            abort(403, 'Pengumuman hasil belum atau sudah tidak dapat dicetak.');
        }

        $this->loadRelasi($calonSiswa);

        return view('skl', $this->getViewData($calonSiswa));
    }
}
