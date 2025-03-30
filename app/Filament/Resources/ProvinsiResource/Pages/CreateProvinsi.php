<?php

namespace App\Filament\Resources\ProvinsiResource\Pages;

use App\Filament\Resources\ProvinsiResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateProvinsi extends CreateRecord
{
    protected static string $resource = ProvinsiResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Provinsi')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Provinsi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('negara_id')
                            ->label('Negara')
                            ->relationship('negara', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }
}
