<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use Filament\Actions;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource;

class ListCalonSiswas extends ListRecords
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\ExportAction::make('Ekspor')
                ->label('Ekspor')
                ->icon('heroicon-m-cloud-arrow-down')
                ->color('success')
                ->exporter(CalonSiswaExporter::class)
                ->chunkSize(250)
                ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->email === 'adm@mtsn1pandeglang.sch.id'),
        ];
    }
}
