<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use App\Filament\Resources\JurusanResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateJurusan extends CreateRecord
{
    protected static string $resource = JurusanResource::class;

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
