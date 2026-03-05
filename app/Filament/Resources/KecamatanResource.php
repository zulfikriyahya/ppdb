<?php

// KecamatanResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KecamatanResource\Pages;
use App\Models\Kecamatan;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KecamatanResource extends Resource
{
    protected static ?string $model = Kecamatan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kecamatan';

    protected static ?string $label = 'Kecamatan';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kecamatan')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Kecamatan')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('kabupaten_id')
                        ->label('Kabupaten')
                        ->relationship('kabupaten', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKecamatans::route('/'),
            'create' => Pages\CreateKecamatan::route('/create'),
            'edit' => Pages\EditKecamatan::route('/{record}/edit'),
        ];
    }
}
