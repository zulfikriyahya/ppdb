<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\AnggotaResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditAnggota extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = AnggotaResource::class;

    protected string $panitiaLabel = 'Anggota';

    protected string $panitiaDirectory = 'assets/anggota';

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
