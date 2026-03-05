<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
use App\Filament\Resources\SekolahAsalResource\Concerns\HasSekolahAsalWizardSteps;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditSekolahAsal extends EditRecord
{
    use HasSekolahAsalWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahAsalResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->sekolahAsalSteps();
    }
}
