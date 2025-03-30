<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PrestasiResource;

class EditPrestasi extends EditRecord
{
    protected static string $resource = PrestasiResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Prestasi')
                    ->collapsible()
                    ->schema([
                        Section::make('')
                            ->schema([
                                TextInput::make('nama')
                                    ->label('Nama Prestasi')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ]),
                                Select::make('jenis')
                                    ->label('Jenis Prestasi')
                                    ->options([
                                        'Hafalan Al-Quran' => 'Hafalan Al-Quran (Minimal 3 Juz)',
                                        'Olimpiade/Kejuaraan' => 'Olimpiade/Kejuaraan',
                                    ])
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ])
                                    ->live(),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 2,
                                'lg' => 2,
                            ]),

                        Section::make('')
                            ->schema([
                                Select::make('tingkat')
                                    ->label('Tingkat')
                                    ->options([
                                        'Nasional' => 'Nasional',
                                        'Provinsi' => 'Provinsi',
                                        'Kabupaten/Kota' => 'Kabupaten/Kota',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                Select::make('kategori')
                                    ->label('Kategori')
                                    ->options([
                                        'Regu/Kelompok' => 'Regu/Kelompok',
                                        'Individu' => 'Individu',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                Select::make('peringkat')
                                    ->label('Peringkat')
                                    ->options([
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->visible(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),
            ]);
    }
}
