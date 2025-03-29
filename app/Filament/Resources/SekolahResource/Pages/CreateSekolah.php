<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;
use Illuminate\Support\Collection;

class CreateSekolah extends CreateRecord
{
    protected static string $resource = SekolahResource::class;

    use HasWizard;

    protected function getSteps(): array
    {
        return [
            Step::make('Data Instansi')
                ->schema([
                    Section::make('Instansi')
                        ->schema([
                            TextInput::make('nama')
                                ->label('Nama Instansi')
                                ->prefixIcon('heroicon-o-building-library')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->columnSpanFull(),
                            TextInput::make('npsn')
                                ->label('NPSN')
                                ->minLength(8)
                                ->maxLength(8)
                                ->validationMessages([
                                    'minLength' => 'NPSN harus terdiri dari minimal 8 digit.',
                                    'maxLength' => 'NPSN tidak boleh lebih dari 8 digit.',
                                ]),
                            TextInput::make('nss')
                                ->label('NSS/NSM')
                                ->minLength(12)
                                ->maxLength(12)
                                ->validationMessages([
                                    'minLength' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                    'maxLength' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                ]),
                            Select::make('pimpinan_id')
                                ->label('Kepala Instansi')
                                ->relationship('pimpinan', 'nama')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ]),
                            Select::make('akreditasi')
                                ->label('Akreditasi')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),
                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),
                    Section::make('Logo')
                        ->schema([
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
                            FileUpload::make('logo')
                                ->label('Logo Instansi')
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
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 2,
                            'lg' => 2,
                        ]),
                ]),
            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
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
                                ->options(fn (Get $get): Collection => Provinsi::query()
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
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
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
                                ->options(fn (Get $get): Collection => Kecamatan::query()
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
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
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
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('adm@mtsn1pandeglang.sch.id'),
                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->tel()
                                ->placeholder('08**********')
                                ->prefixIcon('heroicon-m-phone'),
                            TextInput::make('email')
                                ->label('Email')
                                ->required()
                                ->validationMessages([
                                    'required' => 'Form ini wajib diisi.',
                                ])
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope'),
                        ])
                        ->columns([
                            'sm' => '100%',
                            'md' => 3,
                            'lg' => 3,
                        ]),

                    Section::make('Surat')
                        ->schema([
                            TextInput::make('nomor_surat')
                                ->label('Nomor SKL')
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
