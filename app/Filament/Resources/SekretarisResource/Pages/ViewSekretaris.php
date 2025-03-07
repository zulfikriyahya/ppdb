<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Resources\SekretarisResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSekretaris extends ViewRecord
{
    protected static string $resource = SekretarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
