<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\BendaharaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateBendahara extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = BendaharaResource::class;

    protected string $panitiaLabel = 'Bendahara';

    protected string $panitiaDirectory = 'assets/bendahara';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}
