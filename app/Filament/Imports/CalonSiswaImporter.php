<?php

namespace App\Filament\Imports;

use App\Models\CalonSiswa;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class CalonSiswaImporter extends Importer
{
    protected static ?string $model = CalonSiswa::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('nisn')
                ->label('NISN')
                ->requiredMapping()
                ->rules(['required', 'max:10']),

            ImportColumn::make('nama')
                ->label('Nama Lengkap')
                ->requiredMapping()
                ->rules(['required', 'max:50']),

            ImportColumn::make('tes_sesi')
                ->label('Sesi Tes')
                ->rules(['nullable', 'max:50']),

            ImportColumn::make('tes_ruang')
                ->label('Ruang Tes')
                ->rules(['nullable', 'max:50']),

            ImportColumn::make('tes_akademik')
                ->label('Tanggal Tes Akademik')
                ->rules(['nullable', 'date']),

            ImportColumn::make('tes_praktik')
                ->label('Tanggal Tes Praktik')
                ->rules(['nullable', 'date']),

            ImportColumn::make('bobot_nilai_akademik')
                ->label('Bobot Nilai Akademik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('bobot_nilai_praktik')
                ->label('Bobot Nilai Praktik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('nilai_akademik')
                ->label('Nilai Akademik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('nilai_praktik')
                ->label('Nilai Praktik')
                ->numeric()
                ->rules(['nullable', 'integer']),

            ImportColumn::make('status_pendaftaran')
                ->label('Status Pendaftaran')
                ->rules(['nullable', 'in:Diproses,Berkas Tidak Lengkap,Diverifikasi,Ditolak,Diterima,Tidak Diterima,Diterima Di Kelas Reguler,Diterima Di Kelas Unggulan']),

            ImportColumn::make('kelas')
                ->label('Kelas')
                ->relationship('kelas', 'nama')
                ->rules(['nullable', 'exists:kelas,nama']),
        ];
    }

    public function resolveRecord(): ?CalonSiswa
    {
        // Update existing record jika NISN sudah ada,
        // buat baru jika belum — bypass global scope agar
        // bisa update data lintas tahun pendaftaran
        return CalonSiswa::withoutGlobalScopes()
            ->firstOrNew(['nisn' => $this->data['nisn']]);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Import calon siswa selesai. '
            .number_format($import->successful_rows).' '
            .str('baris')->plural($import->successful_rows)
            .' berhasil diimport.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '
                .str('baris')->plural($failedRowsCount)
                .' gagal diimport.';
        }

        return $body;
    }
}
