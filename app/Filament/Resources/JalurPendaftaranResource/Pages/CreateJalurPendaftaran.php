<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\JalurPendaftaranResource;

class CreateJalurPendaftaran extends CreateRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

    // Override handleRecordCreate dengan tanda tangan yang sesuai
    protected function handleRecordCreate(Model $record, array $data): Model
    {
        $createdRecord = parent::handleRecordCreate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $createdRecord;
    }
}
