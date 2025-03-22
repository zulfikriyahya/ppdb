<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource;
use App\Models\CalonSiswa;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Auth;

class ListCalonSiswas extends ListRecords
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $urlView = '';
            $urlEdit = '';

            if ($calonSiswa) {
                $urlView = "/formulir/{$calonSiswa->id}";
                $urlEdit = "/formulir/{$calonSiswa->id}/edit";
            } else {

            }
        }

        return [
            // Daftar Sekarang
            CreateAction::make()
                ->label('Daftar Sekarang')
                ->icon('heroicon-m-plus')
                ->outlined()
                ->color('primary')
                ->hidden(Auth::user()->username === 'administrator' || $calonSiswa !== null)
                ->successRedirectUrl($urlView),

            // Lihat Formulir
            Action::make('lihat_formulir_pendaftaran')
                ->label('Lihat')
                ->icon('heroicon-m-eye')
                ->outlined()
                ->url($urlView)
                ->color(Color::Zinc)
                ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null),

            // Edit Formulir
            Action::make('ubah_formulir_pendaftaran')
                ->label('Ubah')
                ->icon('heroicon-m-pencil-square')
                ->url($urlEdit)
                ->color('success')
                ->outlined()
                ->hidden(
                    Auth::user()->username === 'administrator' || $calonSiswa === null || ($calonSiswa->status_pendaftaran !== 'Diproses' && $calonSiswa->status_pendaftaran !== 'Berkas Tidak Lengkap')
                )
                ->successRedirectUrl($urlView),

            // Export
            ExportAction::make('Ekspor')
                ->label('Ekspor')
                ->icon('heroicon-m-cloud-arrow-down')
                ->color('success')
                ->exporter(CalonSiswaExporter::class)
                ->chunkSize(250)
                ->visible(fn (): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
        ];
    }
}
