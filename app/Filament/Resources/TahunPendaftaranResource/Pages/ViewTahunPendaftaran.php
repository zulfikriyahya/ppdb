<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\TahunPendaftaranResource;

class ViewTahunPendaftaran extends ViewRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
