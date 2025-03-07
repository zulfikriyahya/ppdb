<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Resources\KetuaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKetua extends ViewRecord
{
    protected static string $resource = KetuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
