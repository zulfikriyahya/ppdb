<?php

namespace App\Filament\Resources;

use App\Models\Jurusan;
use Filament\Resources\Resource;
use App\Filament\Resources\JurusanResource\Pages;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Jurusan';

    protected static ?string $label = 'Jurusan';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 6;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJurusans::route('/'),
            'create' => Pages\CreateJurusan::route('/create'),
            'edit' => Pages\EditJurusan::route('/{record}/edit'),
        ];
    }
}
