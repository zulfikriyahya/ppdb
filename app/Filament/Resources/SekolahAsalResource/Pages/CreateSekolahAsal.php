<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use App\Filament\Resources\SekolahAsalResource;
use App\Filament\Resources\SekolahAsalResource\Concerns\HasSekolahAsalWizardSteps;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateSekolahAsal extends CreateRecord
{
    use HasSekolahAsalWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahAsalResource::class;

    protected function getSteps(): array
    {
        return $this->sekolahAsalSteps();
    }
}
