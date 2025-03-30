<?php

namespace App\Filament\Resources;

use App\Models\Sekolah;
use Filament\Resources\Resource;
use App\Filament\Resources\SekolahResource\Pages;

class SekolahResource extends Resource
{
    protected static ?string $model = Sekolah::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Instansi';

    protected static ?string $label = 'Instansi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSekolahs::route('/'),
            'create' => Pages\CreateSekolah::route('/create'),
            'edit' => Pages\EditSekolah::route('/{record}/edit'),
        ];
    }
}
