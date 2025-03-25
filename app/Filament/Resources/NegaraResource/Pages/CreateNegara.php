<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\NegaraResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNegara extends CreateRecord
{
    protected static string $resource = NegaraResource::class;

    // Override handleRecordCreate dengan tanda tangan yang sesuai
    protected function handleRecordCreate(Model $record, array $data): Model
    {
        $createdRecord = parent::handleRecordCreate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $createdRecord;
    }
}
