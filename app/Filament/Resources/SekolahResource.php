<?php

namespace App\Filament\Resources;

use App\Models\Sekolah;
use Filament\Resources\Resource;
use App\Filament\Resources\SekolahResource\Pages\EditSekolah;
use App\Filament\Resources\SekolahResource\Pages\ViewSekolah;
use App\Filament\Resources\SekolahResource\Pages\ListSekolahs;
use App\Filament\Resources\SekolahResource\Pages\CreateSekolah;

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
            'index' => ListSekolahs::route('/'),
            'create' => CreateSekolah::route('/create'),
            'view' => ViewSekolah::route('/{record}'),
            'edit' => EditSekolah::route('/{record}/edit'),
        ];
    }
}
