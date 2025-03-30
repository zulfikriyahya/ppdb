<?php

namespace App\Filament\Resources\KecamatanResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\KecamatanResource;

class CreateKecamatan extends CreateRecord
{
    protected static string $resource = KecamatanResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kecamatan')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kecamatan')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('kabupaten_id')
                            ->label('Kabupaten')
                            ->relationship('kabupaten', 'nama')
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
