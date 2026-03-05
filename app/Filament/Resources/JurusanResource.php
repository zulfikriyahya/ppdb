<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurusanResource\Pages;
use App\Models\Jurusan;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Jurusan';

    protected static ?string $label = 'Jurusan';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 6;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    public static function form(Form $form): Form
    {
        return $form->schema([
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJurusans::route('/'),
            'create' => Pages\CreateJurusan::route('/create'),
            'edit' => Pages\EditJurusan::route('/{record}/edit'),
        ];
    }
}
