<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SekretarisResource\Pages;
use App\Models\Sekretaris;
use Filament\Resources\Resource;

class SekretarisResource extends Resource
{
    protected static ?string $model = Sekretaris::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Sekretaris';

    protected static ?string $label = 'Sekretaris';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSekretaris::route('/'),
            'create' => Pages\CreateSekretaris::route('/create'),
            'edit' => Pages\EditSekretaris::route('/{record}/edit'),
        ];
    }
}
