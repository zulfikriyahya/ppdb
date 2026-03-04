<?php

// CreateFormulirPrestasi.php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use App\Models\CalonSiswa;
use Filament\Resources\Pages\CreateRecord;

class CreateFormulirPrestasi extends CreateRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    // Auto-inject calon_siswa_id saat calon_siswa bikin record baru
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (auth()->user()?->hasRole('calon_siswa')) {
            $data['calon_siswa_id'] = CalonSiswa::where('user_id', auth()->id())
                ->value('id');
        }

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
