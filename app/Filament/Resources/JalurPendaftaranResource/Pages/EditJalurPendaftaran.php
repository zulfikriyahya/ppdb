<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use App\Filament\Resources\JalurPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJalurPendaftaran extends EditRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

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
