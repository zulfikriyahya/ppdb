<?php
use Carbon\Carbon;
use App\Models\Ketua;
use App\Models\Sekolah;
use App\Models\Pimpinan;
use App\Models\Sekretaris;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Storage;

$instansi = Sekolah::first();
$tahunPendaftaran = TahunPendaftaran::where('status', 'Aktif')->first();
$sekretaris = Sekretaris::where('status', 'Aktif')->first();
$ketua = Ketua::where('status', 'Aktif')->first();
$pimpinan = Pimpinan::where('status', 'Aktif')->first();
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
                {{ ucwords(strtolower($instansi->kelurahan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kecamatan->nama)) ?? '' }},
                {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }} -
                {{ ucwords(strtolower($instansi->provinsi->nama)) ?? '' }}
            </small>
            <br>
            <small> Website: {{ $instansi->website ?? 'https://mtsn1pandeglang.sch.id' }} Email:
                {{ $instansi->email ?? 'adm@mtsn1pandeglang.sch.id' }}
            </small> <br>
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
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="4">
            <b>KARTU TES PRAKTIK DAN AKADEMIK</b>
        </td>
    </tr>

    <tr>
        <td>
            <br>
        </td>
    </tr>
</table>

{{-- Tabel Identitas --}}
<table width="100%">
    <tr>
        <td colspan="4">
            <span>
                <strong>
                    DATA PESERTA
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td width="170px">
            <span>Nama Lengkap</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <strong>
                {{ ucwords(strtoupper($record->nama)) ?? '' }}
            </strong>
        </td>
        <td rowspan="9" width="140px" style="align-content: flex-start">
            <img src="{{ Storage::url($record->berkas_foto ?? '') }}" alt="Foto">
        </td>
    </tr>

    <tr>
        <td>
            <span>Jalur Pendaftaran</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->jalurPendaftaran->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>NISN</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->nisn ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tempat, Tanggal Lahir</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtolower($record->tempat_lahir)) ?? '' }},
            {{ ucwords(strtolower(date('d F Y', strtotime($record->tanggal_lahir)))) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Asal Sekolah</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ ucwords(strtoupper($record->sekolahAsal->nama)) ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Tahun Lulus</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tahun_lulus ?? '' }}
        </td>
    </tr>

    <tr>
        <td>
            <span>Jenis Lelamin</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $jenisKelamin ?? '' }}
        </td>
    </tr>
</table>

{{-- Tabel Tes --}}
<table width="100%">
    <tr>
        <td colspan=6>
            <br>
        </td>
    </tr>
    <tr>
        <td colspan=6>
            <span>
                <strong>
                    JADWAL TES
                </strong>
            </span>
        </td>
    <tr>
        <td colspan="3">
            <span>
                <strong>
                    TES AKADEMIK
                </strong>
            </span>
        </td>
        <td colspan="3">
            <span>
                <strong>
                    TES PRAKTIK
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td width="15%">
            <span>Sesi</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_sesi ?? '' }}
        </td>
        <td width="15%">
            <span>Sesi</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_sesi ?? '' }}
        </td>
    </tr>
    <tr>
        <td>
            <span>Ruang</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_ruang ?? '' }}
        </td>
        <td>
            <span>Ruang</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            {{ $record->tes_ruang ?? '' }}
        </td>
    </tr>
    <tr>
        <td>
            <span>Hari, Tanggal</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ Carbon::parse($record->tes_akademik ?? '')->translatedFormat('l, d F Y') }}
            </span>
        </td>
        <td>
            <span>Hari, Tanggal</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ Carbon::parse($record->tes_praktik ?? '')->translatedFormat('l, d F Y') }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>Waktu</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ date('H:i', strtotime($record->tes_akademik ?? '')) . ' WIB' }}
            </span>
        </td>
        <td>
            <span>Waktu</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                {{ date('H:i', strtotime($record->tes_praktik ?? '')) . ' WIB' }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                Username
            </span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $record->nisn ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
    </tr>
    <tr>
        <td>
            <span>Password</span>
        </td>
        <td>
            <span>:</span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $record->nik ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
        <td>
            <span></span>
        </td>
    </tr>
    <tr>
        <td colspan=6>
            <br>
        </td>
    </tr>
</table>

{{-- Tabel Tanda Tangan --}}
<table width="100%">
    <tr>
        <td width="70%">
        </td>
        <td>
            <span>
                {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? 'Pandeglang' }},
                {{ date('d F Y', strtotime(optional($tahunPendaftaran)->tanggal_penerbitan_kartu_tes_mulai)) ?? '' }}
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                Ketua,
            </span>
        </td>
        <td>
            <span>
                Sekretaris,
            </span>
        </td>
    </tr>
    <tr height="90px">
        <td>
            <span>
                <img src="{{ $ketua->berkas_tte ? Storage::url($ketua->berkas_tte) : null }}" alt="TTE Ketua"
                    width="90px">
            </span>
        </td>
        <td>
            <span>
                <img src="{{ $sekretaris->berkas_tte ? Storage::url($sekretaris->berkas_tte) : '' }}"
                    alt="TTE Sekretaris" width="90px">
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                <strong>
                    {{ $ketua->nama ?? '' }}
                </strong>
            </span>
        </td>
        <td>
            <span>
                <strong>
                    {{ $sekretaris->nama ?? '' }}
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td>
            <span>
                NIP {{ $ketua->nip ?? '' }}
            </span>
        </td>
        <td>
            <span>
                NIP {{ $sekretaris->nip ?? '' }}
            </span>
        </td>
    </tr>
</table>
