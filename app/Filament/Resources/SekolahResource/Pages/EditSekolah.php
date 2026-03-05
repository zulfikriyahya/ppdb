<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use App\Filament\Resources\SekolahResource\Concerns\HasSekolahWizardSteps;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditSekolah extends EditRecord
{
    use HasSekolahWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->sekolahSteps();
    }
}
