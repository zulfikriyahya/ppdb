<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Resources\KetuaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKetua extends EditRecord
{
    protected static string $resource = KetuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
