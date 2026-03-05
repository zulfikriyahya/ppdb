<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\SekretarisResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditSekretaris extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = SekretarisResource::class;

    protected string $panitiaLabel = 'Sekretaris';

    protected string $panitiaDirectory = 'assets/sekretaris';

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
