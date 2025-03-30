<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\JurusanResource;

class EditJurusan extends EditRecord
{
    protected static string $resource = JurusanResource::class;

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
                Section::make('Jurusan')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Jurusan')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ]),
            ]);
    }
}
