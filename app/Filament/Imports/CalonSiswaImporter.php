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
                ->rules(['max:50']),
            ImportColumn::make('tes_ruang')
                ->label('Ruang Tes')
                ->rules(['max:50']),
            ImportColumn::make('tes_akademik')
                ->label('Tanggal Tes Akademik')
                ->rules(['datetime']),
            ImportColumn::make('tes_praktik')
                ->label('Tanggal Tes Praktik')
                ->rules(['datetime']),
            ImportColumn::make('bobot_nilai_akademik')
                ->label('Bobot Nilai Akademik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('bobot_nilai_praktik')
                ->label('Bobot Nilai Praktik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('nilai_akademik')
                ->label('Nilai Akademik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('nilai_praktik')
                ->label('Nilai Praktik')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('status_pendaftaran')
                ->label('Status Pendaftaran'),
            ImportColumn::make('kelas.nama')
                ->label('Kelas')
                ->relationship('kelas')
                ->rules(['exists:kelas,nama']),
        ];
    }

    public function resolveRecord(): ?CalonSiswa
    {
        return CalonSiswa::firstOrNew([
            // Update existing records, matching them by `$this->data['column_name']`
            'nisn' => $this->data['nisn'],
        ]);

        return new CalonSiswa;
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your calon siswa import has completed and '.number_format($import->successful_rows).' '.str('row')->plural($import->successful_rows).' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }
}
