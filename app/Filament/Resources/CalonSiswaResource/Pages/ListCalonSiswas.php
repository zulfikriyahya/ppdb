<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use Filament\Actions;
use App\Models\CalonSiswa;
use Filament\Actions\Action;
use GuzzleHttp\Promise\Create;
use Filament\Actions\ViewAction;
use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ListCalonSiswas extends ListRecords
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $urlCreate = '';
            $urlView = '';
            $urlEdit = '';
            $urlCetakFormulir = '';
            $urlCetakKartuTes = '';
            $urlCetakPaktaIntegritas = '';
            $urlCetakSKL = '';

            if ($calonSiswa) {
                $urlCreate = "/calon-siswas/create";
                $urlView = "/calon-siswas/{$calonSiswa->id}";
                $urlEdit = "/calon-siswas/{$calonSiswa->id}/edit";
                // $urlCetakFormulir = "/calon-siswas/{$calonSiswa->id}/edit";
                // $urlCetakKartuTes = "/calon-siswas/{$calonSiswa->id}/edit";
                // $urlCetakPaktaIntegritas = "/calon-siswas/{$calonSiswa->id}/edit";
                // $urlCetakSKL = "/calon-siswas/{$calonSiswa->id}/edit";
            } else {
                // Auth::user()->name;
                false;
            }
        }
        return [
            // Daftar Sekarang
            CreateAction::make()
                ->label("Daftar Sekarang")
                ->icon('heroicon-m-plus')
                // ->url($urlCreate)
                ->color('primary')
                ->hidden(Auth::user()->username === 'administrator' || $calonSiswa !== null)
                ->successRedirectUrl('/calon-siswas'),

            // Lihat Formulir
            Action::make('lihat_formulir_pendaftaran')
                ->label("Lihat Formulir")
                ->icon('heroicon-m-eye')
                ->url($urlView)
                ->color('gray')
                ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null)
                ->successRedirectUrl('/calon-siswas'),

            // Edit Formulir
            Action::make('ubah_formulir_pendaftaran')
                ->label("Ubah Formulir")
                ->icon('heroicon-m-pencil-square')
                ->url($urlEdit)
                ->color('success')
                ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null)
                ->successRedirectUrl('/calon-siswas'),

            // // Cetak Formulir
            // Html2MediaAction::make('formulir')
            //     ->hidden(Auth::user()->username === 'administrator')
            //     ->label('Cetak Formulir')
            //     ->icon('heroicon-o-rectangle-stack')
            //     ->scale(2)
            //     ->print() // Enable print option
            //     ->preview() // Enable preview option
            //     ->filename('formulir.pdf') // Custom file name
            //     ->savePdf() // Enable save as PDF option
            //     ->requiresConfirmation() // Show confirmation modal
            //     // ->pagebreak('section', ['css', 'legacy'])
            //     ->orientation('portrait') // Portrait orientation
            //     ->format('a4', 'mm') // A4 format with mm units
            //     ->enableLinks() // Enable links in PDF
            //     ->margin([10, 20, 10, 20]) // Set custom margins
            //     ->content(fn($record) => view('formulir', ['record' => $record])), // Set content

            // // Cetak Kartu Tes
            // Html2MediaAction::make('formulir')
            //     ->hidden(Auth::user()->username === 'administrator')
            //     ->label('Cetak Formulir')
            //     ->icon('heroicon-o-rectangle-stack')
            //     ->scale(2)
            //     ->print() // Enable print option
            //     ->preview() // Enable preview option
            //     ->filename('formulir.pdf') // Custom file name
            //     ->savePdf() // Enable save as PDF option
            //     ->requiresConfirmation() // Show confirmation modal
            //     // ->pagebreak('section', ['css', 'legacy'])
            //     ->orientation('portrait') // Portrait orientation
            //     ->format('a4', 'mm') // A4 format with mm units
            //     ->enableLinks() // Enable links in PDF
            //     ->margin([10, 20, 10, 20]) // Set custom margins
            //     ->content(fn($record) => view('formulir', ['record' => $record])), // Set content

            // // Cetak Kartu SKL
            // Html2MediaAction::make('formulir')
            //     ->hidden(Auth::user()->username === 'administrator')
            //     ->label('Cetak Formulir')
            //     ->icon('heroicon-o-rectangle-stack')
            //     ->scale(2)
            //     ->print() // Enable print option
            //     ->preview() // Enable preview option
            //     ->filename('formulir.pdf') // Custom file name
            //     ->savePdf() // Enable save as PDF option
            //     ->requiresConfirmation() // Show confirmation modal
            //     // ->pagebreak('section', ['css', 'legacy'])
            //     ->orientation('portrait') // Portrait orientation
            //     ->format('a4', 'mm') // A4 format with mm units
            //     ->enableLinks() // Enable links in PDF
            //     ->margin([10, 20, 10, 20]) // Set custom margins
            //     ->content(fn($record) => view('formulir', ['record' => $record])), // Set content

            // // Cetak Kartu Pakta Integritas
            // Html2MediaAction::make('formulir')
            //     ->hidden(Auth::user()->username === 'administrator')
            //     ->label('Cetak Formulir')
            //     ->icon('heroicon-o-rectangle-stack')
            //     ->scale(2)
            //     ->print() // Enable print option
            //     ->preview() // Enable preview option
            //     ->filename('formulir.pdf') // Custom file name
            //     ->savePdf() // Enable save as PDF option
            //     ->requiresConfirmation() // Show confirmation modal
            //     // ->pagebreak('section', ['css', 'legacy'])
            //     ->orientation('portrait') // Portrait orientation
            //     ->format('a4', 'mm') // A4 format with mm units
            //     ->enableLinks() // Enable links in PDF
            //     ->margin([10, 20, 10, 20]) // Set custom margins
            //     ->content(fn($record) => view('formulir', ['record' => $record])), // Set content

            // Export
            ExportAction::make('Ekspor')
                ->label('Ekspor')
                ->icon('heroicon-m-cloud-arrow-down')
                ->color('success')
                ->exporter(CalonSiswaExporter::class)
                ->chunkSize(250)
                ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
        ];
    }
}
