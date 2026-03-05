<?php

namespace App\Filament\Resources\PimpinanResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\PimpinanResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreatePimpinan extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = PimpinanResource::class;

    protected string $panitiaLabel = 'Pimpinan';

    protected string $panitiaDirectory = 'assets/pimpinan';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}
