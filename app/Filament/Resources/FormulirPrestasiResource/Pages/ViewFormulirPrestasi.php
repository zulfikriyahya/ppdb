<?php

// ViewFormulirPrestasi.php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFormulirPrestasi extends ViewRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->visible(auth()->user()?->hasAnyRole(['calon_siswa', 'admin', 'super_admin'])),
        ];
    }
}
