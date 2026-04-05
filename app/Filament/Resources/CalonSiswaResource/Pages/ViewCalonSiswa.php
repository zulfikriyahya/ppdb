<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;

class ViewCalonSiswa extends ViewRecord
{
    use CalonSiswaFormTrait;

    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make($this->getAllSteps(
                includeStatusSection: true,
                includeDataTes: false
            ))->columnSpanFull(),

            Section::make('Data Formulir Prestasi')
                ->icon('heroicon-o-trophy')
                ->collapsible()
                ->columnSpanFull()
                ->visible(fn() => $this->record->formulirPrestasis()->exists())
                ->schema([
                    Repeater::make('formulirPrestasis')
                        ->relationship('formulirPrestasis')
                        ->addable(false)
                        ->deletable(false)
                        ->reorderable(false)
                        ->label('')
                        ->schema([
                            TextInput::make('nama_prestasi')
                                ->label('Nama / Judul Prestasi')
                                ->disabled(),

                            Select::make('prestasi_id')
                                ->label('Jenis Prestasi')
                                ->relationship('prestasi', 'nama')
                                ->disabled(),

                            TextInput::make('tahun_prestasi')
                                ->label('Tahun')
                                ->disabled(),

                            TextInput::make('penyelenggara_prestasi')
                                ->label('Penyelenggara')
                                ->disabled(),

                            FileUpload::make('berkas_prestasi')
                                ->label('Berkas Bukti')
                                ->disabled()
                                ->downloadable()
                                ->openable()
                                ->visibility('private')
                                ->columnSpanFull(),
                        ])
                        ->columns(['sm' => 1, 'md' => 2, 'lg' => 4]),
                ]),
        ]);
    }
}
