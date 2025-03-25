<?php

namespace App\Filament\Exports;

use App\Models\CalonSiswa;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Models\Export;

class CalonSiswaExporter extends Exporter
{
    protected static ?string $model = CalonSiswa::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('id')
            //     ->label('ID'),
            ExportColumn::make('nama')
                ->label('Nama Lengkap'),
            ExportColumn::make('nisn')
                ->label('NISN'),
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

            // Alamat Peserta
            ExportColumn::make('siswa_alamat')
                ->label('Alamat'),
            ExportColumn::make('siswaKelurahan.nama')
                ->label('Kelurahan/Desa'),
            ExportColumn::make('siswaKecamatan.nama')
                ->label('Kecamatan'),
            ExportColumn::make('siswaKabupaten.nama')
                ->label('Kabupaten/Kota'),
            ExportColumn::make('siswaProvinsi.nama')
                ->label('Provinsi'),
            ExportColumn::make('siswaNegara.nama')
                ->label('Negara'),
            ExportColumn::make('kode_pos')
                ->label('Kode Pos'),

            // Jadwal Tes
            ExportColumn::make('tes_sesi')
                ->label('Sesi Tes'),
            ExportColumn::make('tes_ruang')
                ->label('Ruang Tes'),
            ExportColumn::make('tes_akademik')
                ->label('Tanggal Tes Akademik'),
            ExportColumn::make('tes_praktik')
                ->label('Tanggal Tes Praktik'),

            // Lainnya
            ExportColumn::make('prestasi.nama')
                ->label('Prestasi'),
            ExportColumn::make('ekstrakurikuler.nama')
                ->label('Peminatan Ekstrakurikuler'),
            ExportColumn::make('mataPelajaran.nama')
                ->label('Peminatan Mata Pelajaran'),
            ExportColumn::make('status_pendaftaran')
                ->label('Status'),
            ExportColumn::make('kelas.nama')
                ->label('Kelas'),

            // Berkas
            // ExportColumn::make('berkas_foto')
            //     ->label('Foto'),
            // ExportColumn::make('berkas_kk')
            //     ->label('Berkas KK'),
            // ExportColumn::make('berkas_akta')
            //     ->label('Berkas Akta'),
            // ExportColumn::make('berkas_kip')
            //     ->label('Berkas KIP'),
            // ExportColumn::make('berkas_kks')
            //     ->label('Berkas KKS'),
            // ExportColumn::make('berkas_pkh')
            //     ->label('Berkas PKH'),
            // ExportColumn::make('berkas_nisn')
            //     ->label('Berkas NISN'),
            // ExportColumn::make('berkas_skbb')
            //     ->label('Berkas SKBB'),
            // ExportColumn::make('berkas_skab')
            //     ->label('Berkas SKAB'),
            // ExportColumn::make('berkas_prestasi')
            //     ->label('Berkas Prestasi'),

            // Data Ibu
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
                ->label('Status'),
            ExportColumn::make('ibu_alamat')
                ->label('Alamat Ibu'),
            ExportColumn::make('ibuKelurahan.id')
                ->label('Kelurahan/Desa'),
            ExportColumn::make('ibuKecamatan.id')
                ->label('Kecamatan'),
            ExportColumn::make('ibuKabupaten.id')
                ->label('Kabupaten/Kota'),
            ExportColumn::make('ibuProvinsi.id')
                ->label('Provinsi'),
            ExportColumn::make('ibuNegara.id')
                ->label('Negara'),

            // Data Ayah
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
                ->label('Status'),
            ExportColumn::make('ayah_alamat')
                ->label('Alamat Ayah'),
            ExportColumn::make('ayahKelurahan.nama')
                ->label('Kelurahan/Desa'),
            ExportColumn::make('ayahKecamatan.nama')
                ->label('Kecamatan'),
            ExportColumn::make('ayahKabupaten.nama')
                ->label('Kabupaten/Kota'),
            ExportColumn::make('ayahProvinsi.nama')
                ->label('Provinsi'),
            ExportColumn::make('ayahNegara.nama')
                ->label('Negara'),

            // Data Wali
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
                ->label('Status'),
            ExportColumn::make('wali_alamat')
                ->label('Alamat Wali'),
            ExportColumn::make('waliKelurahan.nama')
                ->label('Kelurahan/Desa'),
            ExportColumn::make('waliKecamatan.nama')
                ->label('Kecamatan'),
            ExportColumn::make('waliKabupaten.nama')
                ->label('Kabupaten/Kota'),
            ExportColumn::make('waliProvinsi.nama')
                ->label('Provinsi'),
            ExportColumn::make('waliNegara.nama')
                ->label('Negara'),

            // Nilai Tes
            // ExportColumn::make('nilai_ipa')
            //     ->label('Nilai IPA'),
            // ExportColumn::make('nilai_ips')
            //     ->label('Nilai IPS'),
            // ExportColumn::make('nilai_matematika')
            //     ->label('Nilai Matematika'),
            // ExportColumn::make('nilai_indonesia')
            //     ->label('Nilai Bahasa Indonesia'),
            // ExportColumn::make('nilai_inggris')
            //     ->label('Nilai Bahasa Inggris'),
            // ExportColumn::make('nilai_arab')
            //     ->label('Nilai Bahasa Arab'),
            // ExportColumn::make('bobot_nilai_akademik')
            //     ->label('Bobot Nilai Tes Akademik'),
            // ExportColumn::make('bobot_nilai_praktik')
            //     ->label('Bobot Nilai Tes Praktik'),
            // ExportColumn::make('nilai_akademik')
            //     ->label('Nilai Tes Akademik'),
            // ExportColumn::make('nilai_praktik')
            //     ->label('Nilai Tes Praktik'),

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
        $body = 'Your calon siswa export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
