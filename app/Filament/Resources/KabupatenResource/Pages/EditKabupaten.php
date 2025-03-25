<?php

namespace App\Filament\Resources\KabupatenResource\Pages;

use Filament\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\KabupatenResource;

class EditKabupaten extends EditRecord
{
    protected static string $resource = KabupatenResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }
}
