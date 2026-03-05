<?php

namespace App\Filament\Concerns;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;

trait HasPanitiaWizardSteps
{
    /**
     * Label untuk Step 1, Step 2, dan direktori upload.
     * Override di page jika perlu, atau biarkan default dari abstract method.
     *
     * Contoh:
     *   protected string $panitiaLabel = 'Bendahara';
     *   protected string $panitiaDirectory = 'assets/bendahara';
     */
    protected function panitiaSteps(): array
    {
        $label = $this->panitiaLabel ?? 'Panitia';
        $directory = $this->panitiaDirectory ?? 'assets/panitia';

        return [
            Step::make("Data {$label}")
                ->schema([
                    Section::make('Biodata')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Lengkap')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('nip')
                                ->label('Nomor Induk Pegawai')
                                ->numeric()
                                ->minLength(18)
                                ->maxLength(18)
                                ->prefix('NIP')
                                ->validationMessages([
                                    'min_digits' => 'NIP: Minimal 18 Karakter.',
                                    'max_digits' => 'NIP: Maksimal 18 Karakter.',
                                ]),

                            Select::make('tahun_pendaftaran_id')
                                ->label('Tahun Pendaftaran')
                                ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('status')
                                ->label('Status')
                                ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                                ->default('Aktif')
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 2, 'lg' => 4]),
                ]),

            Step::make("Berkas {$label}")
                ->schema([
                    Section::make('Berkas')
                        ->schema([
                            FileUpload::make('berkas_foto')
                                ->label('Foto')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1', '3:4' => '3:4'])
                                ->fetchFileInformation(false)
                                ->directory($directory)
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            FileUpload::make('berkas_tte')
                                ->label('Tanda Tangan Elektronik')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                                ->fetchFileInformation(false)
                                ->directory($directory)
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            FileUpload::make('berkas_sk')
                                ->label('Surat Tugas/Surat Keputusan')
                                ->acceptedFileTypes(['application/pdf'])
                                ->fetchFileInformation(false)
                                ->directory($directory)
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),
        ];
    }
}
