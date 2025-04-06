<?php 
use App\Models\Ketua;
use App\Models\Sekolah;
use App\Models\Pimpinan;
use App\Models\CalonSiswa;
use App\Models\Sekretaris;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Storage;

    $record = CalonSiswa::first();
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
                alt="Logo Institusi/Instansi"
                width="90px">
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
                <img src="{{ optional($instansi)->logo && optional($instansi)->logo_institusi 
                ? Storage::url($instansi->logo) 
                : (optional($instansi)->logo ?: '') }}" 
                alt="Logo Instansi" 
                width="90px">
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
                <b>SURAT KEPUTUSAN KELULUSAN PPDBM</b>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="4">
                <span>Nomor : {{ $instansi->nomor_surat }}</span>
            </td>
        </tr>

        <tr>
            <td>
                <br>
            </td>
        </tr>
    </table>

    <span style="text-align: justify">
        <p>
            Berdasarkan hasil <b>Sidang Panitia Penerimaan Peserta Didik Baru Madrasah (PPDBM)</b> Tahun Pelajaran {{ $tahunPendaftaran->nama ?? ''}} yang mengacu pada hasil Tes Akademik, Praktik Ibadah, dan Baca Tulis Al-Qur'an (BTQ), memutuskan:
        </p>
    </span>
    {{-- Tabel Identitas --}}
    <table width="100%">
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
                <span>Status Pendaftaran</span>
            </td>
            <td>
                <span>:</span>
            </td>
            <td>
                <b>{{ ucwords(strtoupper($record->status_pendaftaran)) ?? '' }}</b>
            </td>
        </tr>
        @if (false)
            <tr>
                <td>
                    <span>Diterima di Kelas</span>
                </td>
                <td>
                    <span>:</span>
                </td>
                <td>
                    <b>{{ ucwords(strtoupper($record->kelas_id)) ?? '' }}</b>
                </td>
            </tr>    
        @endif

    </table>

    <span style="text-align: justify">
        <p>
            Demikian Surat Keputusan ini kami sampaikan untuk dapat ditindaklanjuti sebagaimana mestinya.
        </p>
    </span>

    <table width='100%' border="1">
        <tr>
            <td width="60%"></td>
            <td>Ditetapkan di</td>
            <td>:</td>
            <td>{{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Pada tanggal</td>
            <td>:</td>
            <td>{{date('d F Y', strtotime($record->created_at)) ?? '' }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3">
                <b>Panitia PPDBM MTs N 1 Pandeglang</b>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td width="70%">
            </td>
            <td>
                <span>
                    {{-- {{ ucwords(strtolower($instansi->kabupaten->nama)) ?? '' }}, {{date('d F Y', strtotime($record->created_at)) ?? '' }} --}}
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