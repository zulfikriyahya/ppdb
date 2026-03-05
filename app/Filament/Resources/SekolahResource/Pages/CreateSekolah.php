<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use App\Filament\Resources\SekolahResource\Concerns\HasSekolahWizardSteps;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateSekolah extends CreateRecord
{
    use HasSekolahWizardSteps;
    use HasWizard;

    protected static string $resource = SekolahResource::class;

    protected function getSteps(): array
    {
        return $this->sekolahSteps();
    }
}
