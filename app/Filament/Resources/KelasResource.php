<?php

// KelasResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\KelasResource\Pages;
use App\Models\Kelas;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class KelasResource extends Resource
{
    protected static ?string $model = Kelas::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Kelas';

    protected static ?string $label = 'Kelas';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 7;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Kelas')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Nama Kelas')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    Select::make('jurusan_id')
                        ->label('Jurusan')
                        ->relationship('jurusan', 'nama')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.'])
                        ->createOptionForm([
                            TextInput::make('nama')
                                ->label('Nama Jurusan')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.'])
                                ->placeholder('Contoh: Unggulan'),
                        ]),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelas::route('/'),
            'create' => Pages\CreateKelas::route('/create'),
            'edit' => Pages\EditKelas::route('/{record}/edit'),
        ];
    }
}
