<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Resources\SekretarisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSekretaris extends ListRecords
{
    protected static string $resource = SekretarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
