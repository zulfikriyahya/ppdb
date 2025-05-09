<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JalurPendaftaranResource\Pages;
use App\Models\JalurPendaftaran;
use Filament\Resources\Resource;

class JalurPendaftaranResource extends Resource
{
    protected static ?string $model = JalurPendaftaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Jalur Pendaftaran';

    protected static ?string $label = 'Jalur Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJalurPendaftarans::route('/'),
            'create' => Pages\CreateJalurPendaftaran::route('/create'),
            'edit' => Pages\EditJalurPendaftaran::route('/{record}/edit'),
        ];
    }
}
