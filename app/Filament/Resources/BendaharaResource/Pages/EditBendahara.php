<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\BendaharaResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;
use Illuminate\Database\Eloquent\Model;

class EditBendahara extends EditRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = BendaharaResource::class;

    protected string $panitiaLabel = 'Bendahara';

    protected string $panitiaDirectory = 'assets/bendahara';

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
