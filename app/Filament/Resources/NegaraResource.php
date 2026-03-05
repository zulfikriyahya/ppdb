<?php

// NegaraResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\NegaraResource\Pages;
use App\Models\Negara;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class NegaraResource extends Resource
{
    protected static ?string $model = Negara::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Negara';

    protected static ?string $label = 'Negara';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-globe-asia-australia';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Negara')
                ->collapsible()
                ->schema([
                    TextInput::make('nama')
                        ->label('Negara')
                        ->required()
                        ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    FileUpload::make('bendera')
                        ->label('Bendera')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([null, '4:3' => '4:3'])
                        ->fetchFileInformation(false)
                        ->directory('assets/bendera')
                        ->downloadable()
                        ->maxSize(500),
                ])
                ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNegaras::route('/'),
            'create' => Pages\CreateNegara::route('/create'),
            'edit' => Pages\EditNegara::route('/{record}/edit'),
        ];
    }
}
