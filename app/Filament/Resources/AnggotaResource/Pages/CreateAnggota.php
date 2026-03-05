<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use App\Filament\Concerns\HasPanitiaWizardSteps;
use App\Filament\Resources\AnggotaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateAnggota extends CreateRecord
{
    use HasPanitiaWizardSteps;
    use HasWizard;

    protected static string $resource = AnggotaResource::class;

    protected string $panitiaLabel = 'Anggota';

    protected string $panitiaDirectory = 'assets/anggota';

    protected function getSteps(): array
    {
        return $this->panitiaSteps();
    }
}
