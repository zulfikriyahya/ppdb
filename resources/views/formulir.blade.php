<?php 
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
                <img src="{{ $instansi->logo_institusi ? Storage::url($instansi->logo_institusi) : asset('img/logo-institusi.png') }}" alt="Logo Instansi" width="90px">
            </td>

            <td align="center">
                <b> KEMENTERIAN AGAMA REPUBLIK INDONESIA </b> <br>
                <b> KANTOR KEMENTERIAN AGAMA KABUPATEN PANDEGLANG </b> <br>
                <b> MADRASAH TSANAWIYAH NEGERI 1 PANDEGLANG </b> <br>
                <small>
                    {{ ucwords(strtolower($instansi->alamat)) ?? ''}} {{ ucwords(strtolower($instansi->kelurahan->nama)) ?? '' }}, {{ ucwords(strtolower($instansi->kecamatan->nama)) ?? '' }}, {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }} - {{ ucwords(strtolower($instansi->provinsi->nama)) ?? '' }}
                </small>
                <br>
                <small> Website: {{ $instansi->website ?? 'https://mtsn1pandeglang.sch.id' }} Email: {{ $instansi->email ?? 'adm@mtsn1pandeglang.sch.id' }}
                </small> <br>
            </td>

            <td align="center">
                <img src="{{ $instansi->logo ? Storage::url($instansi->logo) : asset('img/logo.png') }}" alt="Logo Instansi" width="90px">
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
                <b>FORMULIR PENDAFTARAN</b>
            </td>
        </tr>

        <tr>
            <td align="center" colspan="4">
                <b>TAHUN PELAJARAN {{ $tahunPendaftaran->nama ?? '' }}</b>
            </td>
        </tr>

        <tr>
            <td>
                <br>
            </td>
        </tr>

        <tr>
            <td colspan="4">
                <b>DATA PESERTA</b>
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
                {{ ucwords(strtolower($record->tempat_lahir)) ?? '' }}, {{ ucwords(strtolower(date('d F Y', strtotime($record->tanggal_lahir)))) ?? '' }}
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

        <tr>
            <td>
                <span>Golongan Darah</span>
            </td>
            <td>
                <span>:</span>
            </td>
            <td>
                {{ $record->golongan_darah ?? '' }}
            </td>
        </tr>
        <tr>
            <td>
                <span>Agama</span>
            </td>
            <td>
                <span>:</span>
            </td>
            <td>
                {{ ucwords(strtolower($record->agama)) ?? '' }}
            </td>
        </tr>
        <tr>
            <td>
                <span>Alamat Lengkap</span>
            </td>
            <td>
                <span>:</span>
            </td>
            <td colspan="2">
                {{ ucwords(strtolower($record->siswa_alamat)) ?? '' }}, {{ ucwords(strtolower($record->siswaKelurahan->nama)) ?? '' }},
                {{ ucwords(strtolower($record->siswaKecamatan->nama)) ?? '' }}, {{ ucwords(strtolower($record->siswaKabupaten->nama)) ?? '' }} - {{
                ucwords(strtolower($record->siswaProvinsi->nama)) ?? '' }}
            </td>
        </tr>
    </table>
    <br>

    <table width="100%">
        <tr>
            <td width="70%">
            </td>
            <td>
                <span>
                    {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }}, {{date('d F Y', strtotime($record->created_at)) ?? '' }}
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
                    <img src="{{ $ketua->berkas_tte ? Storage::url($ketua->berkas_tte) : asset('img/tte.png') }}" alt="TTE Ketua" width="90px">
                </span>
            </td>
            <td>
                <span>
                    <img src="{{ $sekretaris->berkas_tte ? Storage::url($sekretaris->berkas_tte) : asset('img/tte.png') }}" alt="TTE Sekretaris" width="90px">
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

    <table border="1" width="100%">
        <tr align="center">
            <td>
                Mengetahui,
            </td>
        </tr>
        <tr align="center">
            <td>
                <span>
                    Kepala {{ ucwords(strtolower($instansi->nama)) ?? 'Madrasah Tsanawiyah Negeri 1 Pandeglang' }},
                </span>
            </td>
        </tr>
        <tr align="center" height="90px">
            <td>
                <span>
                    <img src="{{ $pimpinan->berkas_tte ? Storage::url($pimpinan->berkas_tte) : asset('img/tte.png') }}" alt="TTE Pimpinan" width="90px">
                </span>
            </td>
        </tr>
        <tr align="center">
            <td>
                <span>
                    <strong>
                        {{ $pimpinan->nama ?? '' }}
                    </strong>  
                </span>
            </td>
        </tr>
        <tr align="center">
            <td>
                <span>
                    NIP {{ $pimpinan->nip ?? '' }}
                </span>
            </td>
        </tr>
    </table>