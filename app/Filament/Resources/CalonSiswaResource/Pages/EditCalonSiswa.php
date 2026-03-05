<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Filament\Resources\Pages\EditRecord;

class EditCalonSiswa extends EditRecord
{
    use CalonSiswaFormTrait, HasWizard;

    protected static string $resource = CalonSiswaResource::class;

    protected function getSteps(): array
    {
        return $this->getAllSteps(
            includeStatusSection: true,
            includeDataTes: true
        );
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
