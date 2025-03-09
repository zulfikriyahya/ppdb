<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\TahunPendaftaranResource;

class ListTahunPendaftarans extends ListRecords
{
    protected static string $resource = TahunPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
