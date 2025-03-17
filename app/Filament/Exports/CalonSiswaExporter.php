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
            ExportColumn::make('id')
                ->label('ID'),
            ExportColumn::make('nama'),
            ExportColumn::make('nik'),
            ExportColumn::make('nisn'),
            ExportColumn::make('tempat_lahir'),
            ExportColumn::make('tanggal_lahir'),
            ExportColumn::make('tahun_lulus'),
            ExportColumn::make('jenis_kelamin'),
            ExportColumn::make('golongan_darah'),
            ExportColumn::make('agama'),
            ExportColumn::make('anak_ke'),
            ExportColumn::make('jumlah_saudara'),
            ExportColumn::make('tinggal_bersama'),
            ExportColumn::make('jarak_ke_sekolah'),
            ExportColumn::make('disabilitas'),
            ExportColumn::make('tinggi_badan'),
            ExportColumn::make('berat_badan'),
            ExportColumn::make('no_kip'),
            ExportColumn::make('siswa_telepon'),
            ExportColumn::make('siswa_alamat'),
            ExportColumn::make('siswaNegara.id'),
            ExportColumn::make('siswaProvinsi.id'),
            ExportColumn::make('siswaKabupaten.id'),
            ExportColumn::make('siswaKecamatan.id'),
            ExportColumn::make('siswaKelurahan.id'),
            ExportColumn::make('berkas_foto'),
            ExportColumn::make('berkas_kk'),
            ExportColumn::make('berkas_akta'),
            ExportColumn::make('berkas_kip'),
            ExportColumn::make('berkas_nisn'),
            ExportColumn::make('berkas_skbb'),
            ExportColumn::make('berkas_skab'),
            ExportColumn::make('berkas_prestasi'),
            ExportColumn::make('ibu_nama'),
            ExportColumn::make('ibu_telepon'),
            ExportColumn::make('ibu_pekerjaan'),
            ExportColumn::make('ibu_status'),
            ExportColumn::make('ibu_alamat'),
            ExportColumn::make('ibuNegara.id'),
            ExportColumn::make('ibuProvinsi.id'),
            ExportColumn::make('ibuKabupaten.id'),
            ExportColumn::make('ibuKecamatan.id'),
            ExportColumn::make('ibuKelurahan.id'),
            ExportColumn::make('ayah_nama'),
            ExportColumn::make('ayah_telepon'),
            ExportColumn::make('ayah_pekerjaan'),
            ExportColumn::make('ayah_status'),
            ExportColumn::make('ayah_alamat'),
            ExportColumn::make('ayahNegara.id'),
            ExportColumn::make('ayahProvinsi.id'),
            ExportColumn::make('ayahKabupaten.id'),
            ExportColumn::make('ayahKecamatan.id'),
            ExportColumn::make('ayahKelurahan.id'),
            ExportColumn::make('wali_nama'),
            ExportColumn::make('wali_telepon'),
            ExportColumn::make('wali_pekerjaan'),
            ExportColumn::make('wali_status'),
            ExportColumn::make('wali_alamat'),
            ExportColumn::make('waliNegara.id'),
            ExportColumn::make('waliProvinsi.id'),
            ExportColumn::make('waliKabupaten.id'),
            ExportColumn::make('waliKecamatan.id'),
            ExportColumn::make('waliKelurahan.id'),
            ExportColumn::make('sekolahAsal.id'),
            ExportColumn::make('jalurPendaftaran.id'),
            ExportColumn::make('prestasi.id'),
            ExportColumn::make('peminatan_ekstrakurikuler'),
            ExportColumn::make('peminatan_pelajaran'),
            ExportColumn::make('nilai_ipa'),
            ExportColumn::make('nilai_ips'),
            ExportColumn::make('nilai_matematika'),
            ExportColumn::make('nilai_indonesia'),
            ExportColumn::make('nilai_inggris'),
            ExportColumn::make('nilai_arab'),
            ExportColumn::make('bobot_nilai_akademik'),
            ExportColumn::make('bobot_nilai_praktik'),
            ExportColumn::make('nilai_akademik'),
            ExportColumn::make('nilai_praktik'),
            ExportColumn::make('status_pendaftaran'),
            ExportColumn::make('kelas.id'),
            ExportColumn::make('tes_sesi'),
            ExportColumn::make('tes_ruang'),
            ExportColumn::make('tes_akademik_mulai'),
            ExportColumn::make('tes_akademik_selesai'),
            ExportColumn::make('tes_praktik_mulai'),
            ExportColumn::make('tes_praktik_selesai'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
            ExportColumn::make('deleted_at'),
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
