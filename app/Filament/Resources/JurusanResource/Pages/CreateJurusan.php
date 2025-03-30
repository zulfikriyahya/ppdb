<?php

namespace App\Filament\Resources\JurusanResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\JurusanResource;

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
