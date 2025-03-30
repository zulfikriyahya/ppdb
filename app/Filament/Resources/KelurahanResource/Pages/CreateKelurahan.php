<?php

namespace App\Filament\Resources\KelurahanResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\KelurahanResource;

class CreateKelurahan extends CreateRecord
{
    protected static string $resource = KelurahanResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kelurahan/Desa')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Kelurahan/Desa')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('kecamatan_id')
                            ->label('Kecamatan')
                            ->relationship('kecamatan', 'nama')
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
