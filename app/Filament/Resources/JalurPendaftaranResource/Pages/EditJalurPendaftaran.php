<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\JalurPendaftaranResource;

class EditJalurPendaftaran extends EditRecord
{
    protected static string $resource = JalurPendaftaranResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Jalur Pendaftaran')
                    ->collapsible()
                    ->description('Data Jalur Pendaftaran.')
                    ->schema([
                        Select::make('nama')
                            ->label('Jalur Pendaftaran')
                            ->options([
                                'Prestasi' => 'Prestasi',
                                'Reguler' => 'Reguler',
                                'Afirmasi' => 'Afirmasi',
                                'Zonasi' => 'Zonasi',
                                'Mutasi' => 'Mutasi',
                            ])
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('kuantitas')
                            ->label('Kuota Pendaftar')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->numeric(),

                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->native(false),

                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 4,
                        'lg' => 4,
                        'xl' => 4,
                        '2xl' => 4,
                    ]),
            ]);
    }
}
