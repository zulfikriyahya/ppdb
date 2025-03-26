<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\NegaraResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNegara extends CreateRecord
{
    protected static string $resource = NegaraResource::class;

    // Override untuk menambahkan logika khusus setelah pembuatan record
    protected function handleRecordCreate(array $data): Model
    {
        $createdRecord = parent::handleRecordCreate($data);

        // Pengalihan manual (opsional)
        $this->redirect($this->getResource()::getUrl('index'));

        return $createdRecord;
    }
}
