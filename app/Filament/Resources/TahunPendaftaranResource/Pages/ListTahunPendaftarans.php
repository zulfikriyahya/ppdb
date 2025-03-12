<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

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
