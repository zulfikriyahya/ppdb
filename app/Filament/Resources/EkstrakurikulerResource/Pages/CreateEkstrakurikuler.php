<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\EkstrakurikulerResource;

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
