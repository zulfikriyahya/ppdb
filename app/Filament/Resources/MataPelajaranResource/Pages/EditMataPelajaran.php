<?php

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\MataPelajaranResource;

class EditMataPelajaran extends EditRecord
{
    protected static string $resource = MataPelajaranResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Mata Pelajaran')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Mata Pelajaran')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }
}
