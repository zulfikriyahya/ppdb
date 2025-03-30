<?php

namespace App\Filament\Resources;

use App\Models\Ketua;
use Filament\Resources\Resource;
use App\Filament\Resources\KetuaResource\Pages;

class KetuaResource extends Resource
{
    protected static ?string $model = Ketua::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Ketua';

    protected static ?string $label = 'Ketua';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKetuas::route('/'),
            'create' => Pages\CreateKetua::route('/create'),
            'edit' => Pages\EditKetua::route('/{record}/edit'),
        ];
    }
}
