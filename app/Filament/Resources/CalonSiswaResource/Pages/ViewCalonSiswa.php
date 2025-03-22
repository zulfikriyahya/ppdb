<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use Filament\Actions;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\CalonSiswaResource;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ViewCalonSiswa extends ViewRecord
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
        }

        return [
            // Formulir
            Html2MediaAction::make('cetak_formulir')
                ->label('Formulir')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('formulir.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('formulir', ['record' => $record])), // Set content

            // Kartu Tes
            Html2MediaAction::make('cetak_kartu_tes')
                ->hidden(Auth::user()->username === 'administrator')
                ->label('Kartu Tes')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('Kartu Tes.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('kartu-tes', ['record' => $record])), // Set content


            // SKL
            Html2MediaAction::make('cetak_skl')
                ->hidden(Auth::user()->username === 'administrator')
                ->outlined()
                ->label('SKL')
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('Surat Keterangan Kelulusan.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('skl', ['record' => $record])), // Set content

            // Pakta Integritas
            Html2MediaAction::make('cetak_pakta_integritas')
                ->hidden(Auth::user()->username === 'administrator')
                ->label('Pakta Integritas')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->scale(2)
                ->print() // Enable print option
                // ->preview() // Enable preview option
                ->filename('Pakta Integritas.pdf') // Custom file name
                ->savePdf() // Enable save as PDF option
                ->requiresConfirmation() // Show confirmation modal
                // ->pagebreak('section', ['css', 'legacy'])
                ->orientation('portrait') // Portrait orientation
                ->format('a4', 'mm') // A4 format with mm units
                ->enableLinks() // Enable links in PDF
                ->margin([10, 20, 10, 20]) // Set custom margins
                ->content(fn($record) => view('pakta-integritas', ['record' => $record])), // Set content

        ];
    }
}
