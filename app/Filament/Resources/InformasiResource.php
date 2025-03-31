<?php

namespace App\Filament\Resources;

use App\Models\Informasi;
use Filament\Resources\Resource;
use App\Filament\Resources\InformasiResource\Pages;

class InformasiResource extends Resource
{
    protected static ?string $model = Informasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Informasi';

    protected static ?string $label = 'Informasi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 8;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformasis::route('/'),
            'create' => Pages\CreateInformasi::route('/create'),
            'edit' => Pages\EditInformasi::route('/{record}/edit'),
        ];
    }
}
