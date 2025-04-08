<?php

namespace App\Filament\Exports;

use App\Models\CalonSiswa;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class CalonSiswaExporter extends Exporter
{
    protected static ?string $model = CalonSiswa::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('nisn')
                ->label('NISN'),
            ExportColumn::make('nama')
                ->label('Nama Lengkap'),
            ExportColumn::make('sekolahAsal.nama')
                ->label('Sekolah Asal'),
            ExportColumn::make('sekolahAsal.npsn')
                ->label('NPSN Sekolah Asal'),
            ExportColumn::make('sekolahAsal.nss')
                ->label('NSS/NSM Sekolah Asal'),
            ExportColumn::make('jalurPendaftaran.nama')
                ->label('Jalur Pendaftaran'),
            ExportColumn::make('nik')
                ->label('NIK'),
            ExportColumn::make('kk')
                ->label('KK'),
            ExportColumn::make('tempat_lahir')
                ->label('Tempat Lahir'),
            ExportColumn::make('tanggal_lahir')
                ->label('Tanggal Lahir'),
            ExportColumn::make('tahun_lulus')
                ->label('Tahun Lulus'),
            ExportColumn::make('jenis_kelamin')
                ->label('Jenis Kelamin'),
            ExportColumn::make('golongan_darah')
                ->label('Golongan Darah'),
            ExportColumn::make('agama')
                ->label('Agama'),
            ExportColumn::make('anak_ke')
                ->label('Anak Ke'),
            ExportColumn::make('jumlah_saudara')
                ->label('Jumlah Saudara'),
            ExportColumn::make('tinggal_bersama')
                ->label('Tinggal Bersama'),
            ExportColumn::make('jarak_ke_sekolah')
                ->label('Jarak Ke Sekolah'),
            ExportColumn::make('disabilitas')
                ->label('Disabilitas'),
            ExportColumn::make('tinggi_badan')
                ->label('Tinggi Badan'),
            ExportColumn::make('berat_badan')
                ->label('Berat Badan'),
            ExportColumn::make('no_kip')
                ->label('Nomor KIP'),
            ExportColumn::make('no_kks')
                ->label('Nomor KKS'),
            ExportColumn::make('no_pkh')
                ->label('Nomor PKH'),
            ExportColumn::make('siswa_telepon')
                ->label('Nomor Telepon'),

            // // Alamat Peserta
            ExportColumn::make('siswa_alamat')
                ->label('Alamat Peserta'),
            ExportColumn::make('siswaKelurahan.nama')
                ->label('Kelurahan/Desa Peserta'),
            ExportColumn::make('siswaKecamatan.nama')
                ->label('Kecamatan Peserta'),
            ExportColumn::make('siswaKabupaten.nama')
                ->label('Kabupaten/Kota Peserta'),
            ExportColumn::make('siswaProvinsi.nama')
                ->label('Provinsi Peserta'),
            ExportColumn::make('siswaNegara.nama')
                ->label('Negara Peserta'),
            ExportColumn::make('siswaKelurahan.kode_pos')
                ->label('Kode Pos Peserta'),

            // // Lainnya
            ExportColumn::make('prestasi.jenis')
                ->label('Jenis Prestasi'),
            ExportColumn::make('prestasi.nama')
                ->label('Nama Prestasi'),
            ExportColumn::make('prestasi.tingkat')
                ->label('Tingkat Prestasi'),
            ExportColumn::make('prestasi.kategori')
                ->label('Kategori Prestasi'),
            ExportColumn::make('prestasi.peringkat')
                ->label('Peringkat Prestasi'),
            ExportColumn::make('ekstrakurikuler.nama')
                ->label('Peminatan Ekstrakurikuler'),
            ExportColumn::make('mataPelajaran.nama')
                ->label('Peminatan Mata Pelajaran'),

            // // Berkas
            ExportColumn::make('berkas_foto')
                ->label('Foto'),
            ExportColumn::make('berkas_kk')
                ->label('Berkas KK'),
            ExportColumn::make('berkas_akta')
                ->label('Berkas Akta'),
            ExportColumn::make('berkas_kip')
                ->label('Berkas KIP'),
            ExportColumn::make('berkas_kks')
                ->label('Berkas KKS'),
            ExportColumn::make('berkas_pkh')
                ->label('Berkas PKH'),
            ExportColumn::make('berkas_nisn')
                ->label('Berkas NISN'),
            ExportColumn::make('berkas_skbb')
                ->label('Berkas SKBB'),
            ExportColumn::make('berkas_skab')
                ->label('Berkas SKAB'),
            ExportColumn::make('berkas_prestasi')
                ->label('Berkas Prestasi'),

            // // Data Ibu
            ExportColumn::make('ibu_nama')
                ->label('Nama Ibu'),
            ExportColumn::make('ibu_nik')
                ->label('NIK Ibu'),
            ExportColumn::make('ibu_telepon')
                ->label('Nomor Telepon Ibu'),
            ExportColumn::make('ibu_pendidikan')
                ->label('Pendidikan Ibu'),
            ExportColumn::make('ibu_pekerjaan')
                ->label('Pekerjaan Ibu'),
            ExportColumn::make('ibu_penghasilan')
                ->label('Penghasilan Bulanan Ibu'),
            ExportColumn::make('ibu_status')
                ->label('Status Ibu'),
            ExportColumn::make('ibu_alamat')
                ->label('Alamat Ibu'),
            ExportColumn::make('ibuKelurahan.nama')
                ->label('Kelurahan/Desa Ibu'),
            ExportColumn::make('ibuKecamatan.nama')
                ->label('Kecamatan Ibu'),
            ExportColumn::make('ibuKabupaten.nama')
                ->label('Kabupaten/Kota Ibu'),
            ExportColumn::make('ibuProvinsi.nama')
                ->label('Provinsi Ibu'),
            ExportColumn::make('ibuNegara.nama')
                ->label('Negara Ibu'),
            ExportColumn::make('ibuKelurahan.kode_pos')
                ->label('Kode Pos Ibu'),

            // // Data Ayah
            ExportColumn::make('ayah_nama')
                ->label('Nama Ayah'),
            ExportColumn::make('ayah_nik')
                ->label('NIK Ayah'),
            ExportColumn::make('ayah_telepon')
                ->label('Nomor Telepon Ayah'),
            ExportColumn::make('ayah_pendidikan')
                ->label('Pendidikan Ayah'),
            ExportColumn::make('ayah_pekerjaan')
                ->label('Pekerjaan Ayah'),
            ExportColumn::make('ayah_penghasilan')
                ->label('Penghasilan Bulanan Ayah'),
            ExportColumn::make('ayah_status')
                ->label('Status Ayah'),
            ExportColumn::make('ayah_alamat')
                ->label('Alamat Ayah'),
            ExportColumn::make('ayahKelurahan.nama')
                ->label('Kelurahan/Desa Ayah'),
            ExportColumn::make('ayahKecamatan.nama')
                ->label('Kecamatan Ayah'),
            ExportColumn::make('ayahKabupaten.nama')
                ->label('Kabupaten/Kota Ayah'),
            ExportColumn::make('ayahProvinsi.nama')
                ->label('Provinsi Ayah'),
            ExportColumn::make('ayahNegara.nama')
                ->label('Negara Ayah'),
            ExportColumn::make('ayahKelurahan.kode_pos')
                ->label('Kode Pos Ayah'),

            // // Data Wali
            ExportColumn::make('wali_nama')
                ->label('Nama Wali'),
            ExportColumn::make('wali_nik')
                ->label('NIK Wali'),
            ExportColumn::make('wali_telepon')
                ->label('Nomor Telepon Wali'),
            ExportColumn::make('wali_pendidikan')
                ->label('Pendidikan Wali'),
            ExportColumn::make('wali_pekerjaan')
                ->label('Pekerjaan Wali'),
            ExportColumn::make('wali_penghasilan')
                ->label('Penghasilan Wali'),
            ExportColumn::make('wali_status')
                ->label('Status Wali'),
            ExportColumn::make('wali_alamat')
                ->label('Alamat Wali'),
            ExportColumn::make('waliKelurahan.nama')
                ->label('Kelurahan/Desa Wali'),
            ExportColumn::make('waliKecamatan.nama')
                ->label('Kecamatan Wali'),
            ExportColumn::make('waliKabupaten.nama')
                ->label('Kabupaten/Kota Wali'),
            ExportColumn::make('waliProvinsi.nama')
                ->label('Provinsi Wali'),
            ExportColumn::make('waliNegara.nama')
                ->label('Negara Wali'),
            ExportColumn::make('waliKelurahan.kode_pos')
                ->label('Kode Pos Wali'),

            // Jadwal Tes
            ExportColumn::make('tes_sesi')
                ->label('Sesi Tes'),
            ExportColumn::make('tes_ruang')
                ->label('Ruang Tes'),
            ExportColumn::make('tes_akademik')
                ->label('Tanggal Tes Akademik'),
            ExportColumn::make('tes_praktik')
                ->label('Tanggal Tes Praktik'),

            // Nilai Tes
            ExportColumn::make('bobot_nilai_akademik')
                ->label('Bobot Nilai Tes Akademik'),
            ExportColumn::make('bobot_nilai_praktik')
                ->label('Bobot Nilai Tes Praktik'),
            ExportColumn::make('nilai_akademik')
                ->label('Nilai Tes Akademik'),
            ExportColumn::make('nilai_praktik')
                ->label('Nilai Tes Praktik'),
            ExportColumn::make('status_pendaftaran')
                ->label('Status Pendaftaran'),
            ExportColumn::make('kelas_id')
                ->label('Kelas'),
            // Timestamp
            // ExportColumn::make('created_at')
            //     ->label('Dibuat'),
            // ExportColumn::make('updated_at')
            //     ->label('Diubah'),
            // ExportColumn::make('deleted_at')
            //     ->label('Dihapus'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your calon siswa export has completed and '.number_format($export->successful_rows).' '.str('row')->plural($export->successful_rows).' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to export.';
        }

        return $body;
    }
}
