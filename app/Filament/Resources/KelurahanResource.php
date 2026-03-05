<?php

// KelurahanResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KelurahanResource\Pages;
use App\Models\Kelurahan;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KelurahanResource extends Resource
{
    protected static ?string $model = Kelurahan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kelurahan/Desa';

    protected static ?string $label = 'Kelurahan/Desa';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 5;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kelurahan/Desa')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Kelurahan/Desa')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('kecamatan_id')
                        ->label('Kecamatan')
                        ->relationship('kecamatan', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelurahans::route('/'),
            'create' => Pages\CreateKelurahan::route('/create'),
            'edit' => Pages\EditKelurahan::route('/{record}/edit'),
        ];
    }
}
