<?php

namespace App\Filament\Resources\AnggotaResource\Pages;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Wizard\Step;
use App\Filament\Resources\AnggotaResource;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;

class EditAnggota extends EditRecord
{
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    protected static string $resource = AnggotaResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Anggota')
                ->schema([
                    Section::make('Biodata')
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
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ])
                                ->numeric()
                                ->maxLength(18)
                                ->minLength(18)
                                ->prefix('NIP'),
                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
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
                ]),

            Step::make('Berkas Anggota')
                ->schema([
                    Section::make('Berkas')
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
                                ->directory('assets/anggota')
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
                                ->directory('assets/anggota')
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
                                ->directory('assets/anggota')
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
                ]),
        ];
    }
}
