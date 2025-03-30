<?php

namespace App\Filament\Resources;

use App\Models\MataPelajaran;
use Filament\Resources\Resource;
use App\Filament\Resources\MataPelajaranResource\Pages;

class MataPelajaranResource extends Resource
{
    protected static ?string $model = MataPelajaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Mata Pelajaran';

    protected static ?string $label = 'Mata Pelajaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 10;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMataPelajarans::route('/'),
            'create' => Pages\CreateMataPelajaran::route('/create'),
            'edit' => Pages\EditMataPelajaran::route('/{record}/edit'),
        ];
    }
}
