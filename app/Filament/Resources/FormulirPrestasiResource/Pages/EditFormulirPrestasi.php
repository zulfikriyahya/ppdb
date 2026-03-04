<?php

// EditFormulirPrestasi.php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormulirPrestasi extends EditRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()
                ->visible(auth()->user()?->hasAnyRole(['admin', 'super_admin'])),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
