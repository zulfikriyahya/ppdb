<?php

namespace App\Filament\Resources\BendaharaResource\Pages;

use App\Filament\Resources\BendaharaResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditBendahara extends EditRecord
{
    protected static string $resource = BendaharaResource::class;

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
                Section::make('Biodata')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('nip')
                            ->label('Nomor Induk Pegawai')
                            ->validationMessages([
                                'min' => 'NIP: Minimal 18 Karakter.',
                                'max' => 'NIP: Maksimal 18 Karakter.',
                            ])
                            ->maxLength(18)
                            ->minLength(18)
                            ->prefix('NIP'),
                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 4,
                    ]),

                Section::make('Berkas')
                    ->collapsed()
                    ->schema([
                        FileUpload::make('berkas_foto')
                            ->label('Foto')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                                '3:4' => '3:4',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/bendahara')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('berkas_tte')
                            ->label('Tanda Tangan Elektronik')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/bendahara')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('berkas_sk')
                            ->label('Surat Tugas/Surat Keputusan')
                            ->fetchFileInformation(false)
                            ->directory('assets/bendahara')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->openable()
                            ->acceptedFileTypes(['application/pdf'])
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),
            ]);
    }
}
