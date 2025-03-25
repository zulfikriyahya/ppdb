<?php

namespace App\Filament\Resources\KetuaResource\Pages;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\KetuaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKetua extends CreateRecord
{
    protected static string $resource = KetuaResource::class;

    // Override handleRecordCreate dengan tanda tangan yang sesuai
    protected function handleRecordCreate(Model $record, array $data): Model
    {
        $createdRecord = parent::handleRecordCreate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $createdRecord;
    }
}
