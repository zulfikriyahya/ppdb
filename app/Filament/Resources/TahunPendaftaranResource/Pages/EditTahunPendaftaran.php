<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTahunPendaftaran extends EditRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

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
