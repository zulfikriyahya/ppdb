<?php

namespace App\Filament\Resources;

use App\Models\SekolahAsal;
use Filament\Resources\Resource;
use App\Filament\Resources\SekolahAsalResource\Pages;

class SekolahAsalResource extends Resource
{
    protected static ?string $model = SekolahAsal::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Instansi Lain';

    protected static ?string $label = 'Instansi Lain';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSekolahAsals::route('/'),
            'create' => Pages\CreateSekolahAsal::route('/create'),
            'edit' => Pages\EditSekolahAsal::route('/{record}/edit'),
        ];
    }
}
