<?php
/**
 * View ini menerima $record dari action PDF di CalonSiswaResource.
 * Tidak boleh ada query CalonSiswa::first() di sini.
 *
 * Variabel yang diexpect:
 * @var \App\Models\CalonSiswa $record
 */

use Carbon\Carbon;
use App\Models\Ketua;
use App\Models\Sekolah;
use App\Models\Pimpinan;
use App\Models\Sekretaris;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Storage;

$jalurPendaftaranPrestasi = optional($record->jalurPendaftaran)->nama === 'Prestasi';

$instansi = Sekolah::first();
$tahunPendaftaran = TahunPendaftaran::where('status', 'Aktif')->first();
$sekretaris = Sekretaris::where('tahun_pendaftaran_id', optional($tahunPendaftaran)->id)->where('status', 'Aktif')->first();
$ketua = Ketua::where('tahun_pendaftaran_id', optional($tahunPendaftaran)->id)->where('status', 'Aktif')->first();
$pimpinan = Pimpinan::where('tahun_pendaftaran_id', optional($tahunPendaftaran)->id)->where('status', 'Aktif')->first();
$jenisKelamin = $record->jenis_kelamin === 'Pria' ? 'Laki-laki' : 'Perempuan';
?>

<table width="100%">
    <tr>
        <td align="center">
            <img src="{{ optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo_institusi)
                : Storage::url(optional($instansi)->logo ?? '') }}"
                alt="Logo Institusi/Instansi" width="90px">
        </td>
        <td align="center">
            <b> KEMENTERIAN AGAMA REPUBLIK INDONESIA </b> <br>
            <b> KANTOR KEMENTERIAN AGAMA KABUPATEN PANDEGLANG </b> <br>
            <b> MADRASAH TSANAWIYAH NEGERI 1 PANDEGLANG </b> <br>
            <small>
                {{ ucwords(strtolower($instansi->alamat)) ?? '' }}
                {{ ucwords(strtolower(optional($instansi->kelurahan)->nama)) ?? '' }},
                {{ ucwords(strtolower(optional($instansi->kecamatan)->nama)) ?? '' }},
                {{ ucwords(strtolower(optional($instansi->kabupaten)->nama)) ?? '' }} -
                {{ ucwords(strtolower(optional($instansi->provinsi)->nama)) ?? '' }}
            </small><br>
            <small>
                Website: {{ $instansi->website ?? 'https://mtsn1pandeglang.sch.id' }}
                Email: {{ $instansi->email ?? 'adm@mtsn1pandeglang.sch.id' }}
            </small><br>
        </td>
        <td align="center">
            <img src="{{ optional($instansi)->logo && optional($instansi)->logo_institusi
                ? Storage::url($instansi->logo)
                : (optional($instansi)->logo ?:
                    '') }}"
                alt="Logo Instansi" width="90px">
        </td>
    </tr>
</table>
<hr style="border: 1px solid">

<table width="100%">
    <tr>
        <td><br></td>
    </tr>
    <tr>
        <td align="center" colspan="4">
            <b>SURAT KEPUTUSAN KELULUSAN PPDBM</b>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="4">
            <span>Nomor : {{ $instansi->nomor_surat ?? '' }}</span>
        </td>
    </tr>
    <tr>
        <td><br></td>
    </tr>
</table>

<span style="text-align: justify">
    @if (
        $tahunPendaftaran &&
            Carbon::now()->between(Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai),
                Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)))
        <p>
            Berdasarkan hasil <b>Sidang Panitia Penerimaan Peserta Didik Baru Madrasah (PPDBM)</b>
            Tahun Pelajaran {{ $tahunPendaftaran->nama ?? '' }} yang mengacu pada hasil Verifikasi
            Berkas Prestasi dan atau Tes Hafalan Al-Quran, memutuskan:
        </p>
    @else
        <p>
            Berdasarkan hasil <b>Sidang Panitia Penerimaan Peserta Didik Baru Madrasah (PPDBM)</b>
            Tahun Pelajaran {{ $tahunPendaftaran->nama ?? '' }} yang mengacu pada hasil Tes Akademik,
            Praktik Ibadah, dan Baca Tulis Al-Qur'an (BTQ), memutuskan:
        </p>
    @endif
</span>

{{-- Tabel Identitas --}}
<table width="100%">
    <tr>
        <td width="170px"><span>Nama Lengkap</span></td>
        <td><span>:</span></td>
        <td><strong>{{ ucwords(strtoupper($record->nama)) ?? '' }}</strong></td>
        <td rowspan="8" width="140px" style="align-content: flex-start">
            <img src="{{ Storage::url($record->berkas_foto ?? '') }}" alt="Foto">
        </td>
    </tr>
    <tr>
        <td><span>Jalur Pendaftaran</span></td>
        <td><span>:</span></td>
        <td>{{ ucwords(strtolower(optional($record->jalurPendaftaran)->nama)) ?? '' }}</td>
    </tr>
    <tr>
        <td><span>NISN</span></td>
        <td><span>:</span></td>
        <td>{{ $record->nisn ?? '' }}</td>
    </tr>
    <tr>
        <td><span>Tempat, Tanggal Lahir</span></td>
        <td><span>:</span></td>
        <td>
            {{ ucwords(strtolower($record->tempat_lahir)) ?? '' }},
            {{ ucwords(strtolower(date('d F Y', strtotime($record->tanggal_lahir)))) ?? '' }}
        </td>
    </tr>
    <tr>
        <td><span>Asal Sekolah</span></td>
        <td><span>:</span></td>
        <td>{{ ucwords(strtoupper(optional($record->sekolahAsal)->nama)) ?? '' }}</td>
    </tr>
    <tr>
        <td><span>Tahun Lulus</span></td>
        <td><span>:</span></td>
        <td>{{ $record->tahun_lulus ?? '' }}</td>
    </tr>
    <tr>
        <td><span>Jenis Kelamin</span></td>
        <td><span>:</span></td>
        <td>{{ $jenisKelamin ?? '' }}</td>
    </tr>
    <tr>
        <td><span>Status Pendaftaran</span></td>
        <td><span>:</span></td>
        <td><b>{{ ucwords(strtoupper($record->status_pendaftaran)) ?? '' }}</b></td>
    </tr>
</table>

<span style="text-align: justify">
    <p>Demikian Surat Keputusan ini kami sampaikan untuk dapat ditindaklanjuti sebagaimana mestinya.</p>
</span>

{{-- Tabel Tanda Tangan --}}
<table width="100%">
    <tr>
        <td width="70%"></td>
        <td>
            @if ($tahunPendaftaran)
                @php
                    $tanggalTtd = match (true) {
                        Carbon::now()->between(
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai),
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai),
                        )
                            => $tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai,

                        Carbon::now()->between(
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai),
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai),
                        )
                            => $tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai,

                        Carbon::now()->between(
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai),
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai),
                        )
                            => $tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai,

                        Carbon::now()->between(
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai),
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai),
                        )
                            => $tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai,

                        Carbon::now()->between(
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai),
                            Carbon::parse($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai),
                        )
                            => $tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai,

                        default => now(),
                    };
                @endphp
                {{ ucwords(strtolower(optional($instansi->kabupaten)->nama ?? 'Pandeglang')) }},
                {{ date('d F Y', strtotime($tanggalTtd)) }}
            @endif
        </td>
    </tr>
    <tr>
        <td><span>Ketua,</span></td>
        <td><span>Sekretaris,</span></td>
    </tr>
    <tr height="90px">
        <td>
            @if ($ketua?->berkas_tte)
                <img src="{{ Storage::url($ketua->berkas_tte) }}" alt="TTE Ketua" width="90px">
            @endif
        </td>
        <td>
            @if ($sekretaris?->berkas_tte)
                <img src="{{ Storage::url($sekretaris->berkas_tte) }}" alt="TTE Sekretaris" width="90px">
            @endif
        </td>
    </tr>
    <tr>
        <td><strong>{{ $ketua->nama ?? '' }}</strong></td>
        <td><strong>{{ $sekretaris->nama ?? '' }}</strong></td>
    </tr>
    <tr>
        <td>NIP {{ $ketua->nip ?? '' }}</td>
        <td>NIP {{ $sekretaris->nip ?? '' }}</td>
    </tr>
</table>

{{-- Mengetahui: Kepala Madrasah --}}
<table border="1" width="100%">
    <tr align="center">
        <td>Mengetahui,</td>
    </tr>
    <tr align="center">
        <td>
            Kepala {{ ucwords(strtolower($instansi->nama ?? 'Madrasah Tsanawiyah Negeri 1 Pandeglang')) }},
        </td>
    </tr>
    <tr align="center" height="90px">
        <td>
            @if ($pimpinan?->berkas_tte)
                <img src="{{ Storage::url($pimpinan->berkas_tte) }}" alt="TTE Pimpinan" width="90px">
            @endif
        </td>
    </tr>
    <tr align="center">
        <td><strong>{{ $pimpinan->nama ?? '' }}</strong></td>
    </tr>
    <tr align="center">
        <td>NIP {{ $pimpinan->nip ?? '' }}</td>
    </tr>
</table>

<!-- Lembar Ke-2 (Surat Keterangan Orang Tua) -->
<h1>2</h1>

<!-- Lembar Ke-3 (Surat Keterangan Calon Siswa) -->
<h1>3</h1>

<!-- Lembar Ke-4 (Tata Tertib) -->
<h1>4</h1>
