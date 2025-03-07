<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJalurPendaftaran extends ViewRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
