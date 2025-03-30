<?php

namespace App\Filament\Resources\MataPelajaranResource\Pages;

use App\Filament\Resources\MataPelajaranResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateMataPelajaran extends CreateRecord
{
    protected static string $resource = MataPelajaranResource::class;

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
