<?php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateKelas extends CreateRecord
{
    protected static string $resource = KelasResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kelas')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Kelas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('jurusan_id')
                            ->label('Jurusan')
                            ->relationship('jurusan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->createOptionForm([
                                TextInput::make('nama')
                                    ->label('Nama Jurusan')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ])
                                    ->placeholder('Contoh: Unggulan'),
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
