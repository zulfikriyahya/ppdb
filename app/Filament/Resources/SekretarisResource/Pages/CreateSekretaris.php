<?php

namespace App\Filament\Resources\SekretarisResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\SekretarisResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateSekretaris extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = SekretarisResource::class;

    protected string $panitiaLabel = 'Sekretaris';

    protected string $panitiaDirectory = 'assets/sekretaris';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}
