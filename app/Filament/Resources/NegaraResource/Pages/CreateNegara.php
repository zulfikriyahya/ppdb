<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use App\Filament\Resources\NegaraResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateNegara extends CreateRecord
{
    protected static string $resource = NegaraResource::class;

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
