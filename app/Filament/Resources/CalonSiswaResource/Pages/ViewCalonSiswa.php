<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\CalonSiswaResource;

class ViewCalonSiswa extends ViewRecord
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
        ];
    }
}
