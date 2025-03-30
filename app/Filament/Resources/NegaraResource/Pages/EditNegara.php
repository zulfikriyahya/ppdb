<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\NegaraResource;

class EditNegara extends EditRecord
{
    protected static string $resource = NegaraResource::class;

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
                Section::make('Negara')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Negara')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('bendera')
                            ->label('Bendera')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '4:3' => '4:3',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/bendera')
                            ->downloadable()
                            ->maxSize(500),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}
