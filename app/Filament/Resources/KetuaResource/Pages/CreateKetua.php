<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\KetuaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateKetua extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = KetuaResource::class;

    protected string $panitiaLabel = 'Ketua';

    protected string $panitiaDirectory = 'assets/ketua';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}
