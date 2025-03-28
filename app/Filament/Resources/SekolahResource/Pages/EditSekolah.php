<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Wizard\Step;
use App\Filament\Resources\SekolahResource;
use Filament\Resources\Pages\EditRecord\Concerns\HasWizard;

class EditSekolah extends EditRecord
{
    protected static string $resource = SekolahResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Instansi')
                ->schema([
                    Section::make('Instansi')
                        ->collapsible()
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Instansi')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('npsn')
                                ->label('Nomor Pokok Sekolah Nasional')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            TextInput::make('nss')
                                ->label('Nomor Statistik Sekolah/Madrasah')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('logo')
                                ->label('Logo')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '1:1' => '1:1',
                                ])
                                ->fetchFileInformation(false)
                                ->directory('assets/institusi')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private'),
                            Select::make('pimpinan_id')
                                ->label('Kepala Instansi')
                                ->relationship('pimpinan', 'nama')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('akreditasi')
                                ->label('Akreditasi')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),






                ]),
            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->collapsible()
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn(Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kabupaten_id')
                                ->label('Kabupaten')
                                ->options(fn(Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn(Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false)
                                ->preload()
                                ->live()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kelurahan_id', null);
                                }),
                            Select::make('kelurahan_id')
                                ->label('Kelurahan')
                                ->options(fn(Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->native(false),
                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->required()
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
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
            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->collapsible()
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->prefix('https://')
                                ->suffix('.sch.id'),
                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->tel(),
                            TextInput::make('email')
                                ->label('Email')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->email(),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    Section::make('Surat')
                        ->collapsible()
                        ->schema([
                            TextInput::make('nomor_surat')
                                ->label('Nomor Surat SKL')
                                ->required()
                                ->minLength(5)
                                ->maxLength(20)
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                    'min' => 'No. SKL: Nomor SKL terlalu pendek.',
                                    'max' => 'No. SKL: Nomor WKL terlalu panjang.',
                                ]),
                        ]),
                ]),
        ];
    }
}
