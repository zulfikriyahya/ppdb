<?php

namespace App\Filament\Resources;

use App\Models\Ekstrakurikuler;
use Filament\Resources\Resource;
use App\Filament\Resources\EkstrakurikulerResource\Pages;

class EkstrakurikulerResource extends Resource
{
    protected static ?string $model = Ekstrakurikuler::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Ekstrakurikuler';

    protected static ?string $label = 'Ekstrakurikuler';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 11;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEkstrakurikulers::route('/'),
            'create' => Pages\CreateEkstrakurikuler::route('/create'),
            'edit' => Pages\EditEkstrakurikuler::route('/{record}/edit'),
        ];
    }
}
