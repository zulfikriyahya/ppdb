<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestasiResource\Pages;
use App\Models\Prestasi;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Prestasi';

    protected static ?string $label = 'Prestasi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 5;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form->schema([
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
                        ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),

                    Section::make('')
                        ->schema([
                            Select::make('tingkat')
                                ->label('Tingkat')
                                ->options([
                                    'Nasional' => 'Nasional',
                                    'Provinsi' => 'Provinsi',
                                    'Kabupaten/Kota' => 'Kabupaten/Kota',
                                ])
                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            Select::make('kategori')
                                ->label('Kategori')
                                ->options([
                                    'Regu/Kelompok' => 'Regu/Kelompok',
                                    'Individu' => 'Individu',
                                ])
                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            Select::make('peringkat')
                                ->label('Peringkat')
                                ->options(['1' => '1', '2' => '2', '3' => '3'])
                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3])
                        ->visible(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                ])
                ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
        ];
    }
}
