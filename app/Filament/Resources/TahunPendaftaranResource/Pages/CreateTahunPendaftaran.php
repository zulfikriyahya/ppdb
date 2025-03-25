<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\TahunPendaftaranResource;

class CreateTahunPendaftaran extends CreateRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

    // Override handleRecordCreate dengan tanda tangan yang sesuai
    protected function handleRecordCreate(Model $record, array $data): Model
    {
        $createdRecord = parent::handleRecordCreate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $createdRecord;
    }
}
