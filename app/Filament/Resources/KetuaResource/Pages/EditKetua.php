<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\KetuaResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditKetua extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = KetuaResource::class;

    protected string $panitiaLabel = 'Ketua';

    protected string $panitiaDirectory = 'assets/ketua';

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
