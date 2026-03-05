<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\PimpinanResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditPimpinan extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = PimpinanResource::class;

    protected string $panitiaLabel = 'Pimpinan';

    protected string $panitiaDirectory = 'assets/pimpinan';

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}
