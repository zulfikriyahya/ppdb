<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CalonSiswaResource;

class EditCalonSiswa extends EditRecord
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\ViewAction::make(),
            // Actions\DeleteAction::make(),
            // Actions\ForceDeleteAction::make(),
            // Actions\RestoreAction::make(),
        ];
    }
}
