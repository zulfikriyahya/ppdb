<?php

// ListFormulirPrestasis.php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormulirPrestasis extends ListRecords
{
    protected static string $resource = FormulirPrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(auth()->user()?->hasAnyRole(['calon_siswa', 'admin', 'super_admin'])),
        ];
    }
}
