<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateEkstrakurikuler extends CreateRecord
{
    protected static string $resource = EkstrakurikulerResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Ekstrakurikuler')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Ekstrakurikuler')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }
}
