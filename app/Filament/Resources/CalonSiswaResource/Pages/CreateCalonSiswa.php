<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use App\Models\TahunPendaftaran;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateCalonSiswa extends CreateRecord
{
    use HasWizard, CalonSiswaFormTrait;

    protected static string $resource = CalonSiswaResource::class;

    protected function getSteps(): array
    {
        return $this->getAllSteps(
            includeStatusSection: false,
            includeDataTes: false
        );
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        $tahun = TahunPendaftaran::where('status', 'Aktif')->first();
        $data['tahun_pendaftaran_id'] = $tahun?->id;

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
