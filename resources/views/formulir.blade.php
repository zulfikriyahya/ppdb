<body>

    <table border="1" width="100%">
        <tr>
            <td width="120px" height="120px" align="center">
                logo institusi
            </td>
            <td align="center">
                <b> AGAMA REPUBLIK INDONESIA </b> <br>
                <b> KANTOR KEMENTERIAN AGAMA KABUPATEN PANDEGLANG </b> <br>
                <b> MADRASAH TSANAWIYAH NEGERI 1 PANDEGLANG </b> <br>
                <span> Jl. Raya Labuan Km. 5,7 Desa Palurahan Kecamatan Kaduhejo Kabupaten Pandeglang - Banten </span>
                <br>
                <span> Website: www.mtsn1pandeglang.sch.id Surel: adm@mtsn1pandeglang.sch.id
                </span> <br>
            </td>
            <td width="120px" height="120px" align="center">
                logo instansi
            </td>
        </tr>
    </table>

</body>









{{ $record->nama ?? '' }}
{{ $record->nik ?? '' }}
{{ $record->nisn ?? '' }}
{{ $record->tempat_lahir ?? '' }}
{{ $record->tanggal_lahir ?? '' }}
{{ $record->tahun_lulus ?? '' }}
{{ $record->jenis_kelamin ?? '' }}
{{ $record->golongan_darah ?? '' }}
{{ $record->agama ?? '' }}
{{ $record->anak_ke ?? '' }}
{{ $record->jumlah_saudara ?? '' }}
{{ $record->tinggal_bersama ?? '' }}
{{ $record->jarak_ke_sekolah ?? '' }}
{{ $record->disabilitas ?? '' }}
{{ $record->tinggi_badan ?? '' }}
{{ $record->berat_badan ?? '' }}
{{ $record->no_kip ?? '' }}
{{ $record->siswa_telepon ?? '' }}
{{ $record->siswa_alamat ?? '' }}
{{ $record->siswaKelurahan->nama ?? '' }}
{{ $record->siswaKecamatan->nama ?? '' }}
{{ $record->siswaKabupaten->nama ?? '' }}
{{ $record->siswaProvinsi->nama ?? '' }}
{{ $record->siswaNegara->nama ?? '' }}



<img src="{{ Storage::url($record->berkas_foto ?? '') }}" alt="Foto">
<img src="{{ Storage::url($record->berkas_kk ?? '') }}" alt="KK">
<img src="{{ Storage::url($record->berkas_akta ?? '') }}" alt="Akta">
<img src="{{ Storage::url($record->berkas_kip ?? '') }}" alt="KIP">
<img src="{{ Storage::url($record->berkas_nisn ?? '') }}" alt="NISN">
<img src="{{ Storage::url($record->berkas_skbb ?? '') }}" alt="SKBB">
<img src="{{ Storage::url($record->berkas_skab ?? '') }}" alt="SKAB">
<img src="{{ Storage::url($record->berkas_prestasi ?? '') }}" alt="Prestasi">

{{-- Asal Sekolah --}}
<span> {{ $record->sekolahAsal->nama ?? '' }} </span>
{{-- Jalur Pendaftaran --}}
<span> {{ $record->jalurPendaftaran->nama ?? '' }} </span>
{{-- Prestasi --}}
<span> {{ $record->prestasi->jenis ?? '' }} {{ $record->prestasi->nama ?? '' }} {{ $record->prestasi->tingkat ?? '' }} {{ $record->prestasi->kategori ?? '' }} {{ $record->prestasi->peringkat ?? '' }} </span>
{{-- Peminatan Ekstrakurikuler --}}
<span> {{ $record->peminatan_ekstrakurikuler ?? '' }} </span>
{{-- Peminatan Mata Pelajaran --}}
<span> {{ $record->peminatan_pelajaran ?? '' }} </span>



<span> {{ $record->ibu_nama ?? '' }} </span>
<span> {{ $record->ibu_telepon ?? '' }} </span>
<span> {{ $record->ibu_pekerjaan ?? '' }} </span>
<span> {{ $record->ibu_status ?? '' }} </span>
<span> {{ $record->ibu_alamat ?? '' }} </span>
<span> {{ $record->ibuKelurahan->nama ?? '' }} </span>
<span> {{ $record->ibuKecamatan->nama ?? '' }} </span>
<span> {{ $record->ibuKabupaten->nama ?? '' }} </span>
<span> {{ $record->ibuProvinsi->nama ?? '' }} </span>
<span> {{ $record->ibuNegara->nama ?? '' }} </span>


<span> {{ $record->ayah_nama ?? '' }} </span>
<span> {{ $record->ayah_telepon ?? '' }} </span>
<span> {{ $record->ayah_pekerjaan ?? '' }} </span>
<span> {{ $record->ayah_status ?? '' }} </span>
<span> {{ $record->ayah_alamat ?? '' }} </span>
<span> {{ $record->ayahKelurahan->nama ?? '' }} </span>
<span> {{ $record->ayahKecamatan->nama ?? '' }} </span>
<span> {{ $record->ayahKabupaten->nama ?? '' }} </span>
<span> {{ $record->ayahProvinsi->nama ?? '' }} </span>
<span> {{ $record->ayahNegara->nama ?? '' }} </span>


<span> {{ $record->wali_nama ?? '' }} </span>
<span> {{ $record->wali_telepon ?? '' }} </span>
<span> {{ $record->wali_pekerjaan ?? '' }} </span>
<span> {{ $record->wali_status ?? '' }} </span>
<span> {{ $record->wali_alamat ?? '' }} </span>
<span> {{ $record->waliKelurahan->nama ?? '' }} </span>
<span> {{ $record->waliKecamatan->nama ?? '' }} </span>
<span> {{ $record->waliKabupaten->nama ?? '' }} </span>
<span> {{ $record->waliProvinsi->nama ?? '' }} </span>
<span> {{ $record->waliNegara->nama ?? '' }} </span>

{{-- Hasil Nilai Tes --}}
{{-- Nilai IPA --}}
<span> {{ $record->nilai_ipa ?? '' }} </span>
{{-- Nilai IPS --}}
<span> {{ $record->nilai_ips ?? '' }} </span>
{{-- Nilai Matematika --}}
<span> {{ $record->nilai_matematika ?? '' }} </span>
{{-- Nilai Indonesia --}}
<span> {{ $record->nilai_indonesia ?? '' }} </span>
{{-- Nilai Inggris --}}
<span> {{ $record->nilai_inggris ?? '' }} </span>
{{-- Nilai Arab --}}
<span> {{ $record->nilai_arab ?? '' }} </span>
{{-- Nilai Akademik --}}
<span> {{ $record->bobot_nilai_akademik ?? '' }} </span>
{{-- Nilai Praktik --}}
<span> {{ $record->bobot_nilai_praktik ?? '' }} </span>
{{-- Nilai Akademik --}}
<span> {{ $record->nilai_akademik ?? '' }} </span>
{{-- Nilai Praktik --}}
<span> {{ $record->nilai_praktik ?? '' }} </span>

{{-- Status Pendaftaran --}}
<span> {{ $record->status_pendaftaran ?? '' }} </span>

{{-- Kelas --}}
<span> {{ $record->kelas_id ?? '' }} </span>

{{-- Cetak Kartu Tes --}}
{{-- Sesi Tes --}}
<span> {{ $record->tes_sesi ?? '' }} </span>
{{-- Ruang Tes --}}
<span> {{ $record->tes_ruang ?? '' }} </span>
{{-- Mulai Tes Akademik --}}
<span> {{ $record->tes_akademik_mulai ?? '' }} </span>
{{-- Selesai Tes Akademik --}}
<span> {{ $record->tes_akademik_selesai ?? '' }} </span>

{{-- Mulai Tes Praktik --}}
<span> {{ $record->tes_praktik_mulai ?? '' }} </span>
{{-- Selesai Tes Praktik --}}
<span> {{ $record->tes_praktik_selesai ?? '' }} </span>
