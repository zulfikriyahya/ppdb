<?php

// KabupatenResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KabupatenResource\Pages;
use App\Models\Kabupaten;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KabupatenResource extends Resource
{
    protected static ?string $model = Kabupaten::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kabupaten/Kota';

    protected static ?string $label = 'Kabupaten/Kota';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kabupaten/Kota')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Kabupaten/Kota')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('provinsi_id')
                        ->label('Provinsi')
                        ->relationship('provinsi', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKabupatens::route('/'),
            'create' => Pages\CreateKabupaten::route('/create'),
            'edit' => Pages\EditKabupaten::route('/{record}/edit'),
        ];
    }
}
