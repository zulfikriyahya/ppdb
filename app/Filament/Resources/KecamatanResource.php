<?php

namespace App\Filament\Resources;

use App\Models\Kecamatan;
use Filament\Resources\Resource;
use App\Filament\Resources\KecamatanResource\Pages;

class KecamatanResource extends Resource
{
    protected static ?string $model = Kecamatan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kecamatan';

    protected static ?string $label = 'Kecamatan';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKecamatans::route('/'),
            'create' => Pages\CreateKecamatan::route('/create'),
            'edit' => Pages\EditKecamatan::route('/{record}/edit'),
        ];
    }
}
