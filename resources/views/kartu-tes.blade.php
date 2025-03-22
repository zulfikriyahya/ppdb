<span> Nama Lengkap : {{ $record->nama ?? '' }} </span>
<span> NIK : {{ $record->nik ?? '' }} </span>
<span> {{ $record->nisn ?? '' }} </span>
<span> {{ $record->tempat_lahir ?? '' }} </span>
<span> {{ $record->tanggal_lahir ?? '' }} </span>
<span> {{ $record->tahun_lulus ?? '' }} </span>
<span> {{ $record->jenis_kelamin ?? '' }} </span>
<span> {{ $record->golongan_darah ?? '' }} </span>
<span> {{ $record->agama ?? '' }} </span>
<span> {{ $record->anak_ke ?? '' }} </span>
<span> {{ $record->jumlah_saudara ?? '' }} </span>
<span> {{ $record->tinggal_bersama ?? '' }} </span>
<span> {{ $record->jarak_ke_sekolah ?? '' }} </span>
<span> {{ $record->disabilitas ?? '' }} </span>
<span> {{ $record->tinggi_badan ?? '' }} </span>
<span> {{ $record->berat_badan ?? '' }} </span>
<span> {{ $record->no_kip ?? '' }} </span>
<span> {{ $record->siswa_telepon ?? '' }} </span>
<span> {{ $record->siswa_alamat ?? '' }} </span>
<span> {{ $record->siswaKelurahan->nama ?? '' }} </span>
<span> {{ $record->siswaKecamatan->nama ?? '' }} </span>
<span> {{ $record->siswaKabupaten->nama ?? '' }} </span>
<span> {{ $record->siswaProvinsi->nama ?? '' }} </span>
<span> {{ $record->siswaNegara->nama ?? '' }} </span>
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
