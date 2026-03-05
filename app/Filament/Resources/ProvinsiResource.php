<?php

// ProvinsiResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\ProvinsiResource\Pages;
use App\Models\Provinsi;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class ProvinsiResource extends Resource
{
    protected static ?string $model = Provinsi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Provinsi';

    protected static ?string $label = 'Provinsi';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Provinsi')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Provinsi')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('negara_id')
                        ->label('Negara')
                        ->relationship('negara', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProvinsis::route('/'),
            'create' => Pages\CreateProvinsi::route('/create'),
            'edit' => Pages\EditProvinsi::route('/{record}/edit'),
        ];
    }
}
