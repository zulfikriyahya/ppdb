<?php

namespace App\Filament\Resources\SekolahAsalResource\Concerns;

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
use Illuminate\Support\Collection;

trait HasSekolahAsalWizardSteps
{
    protected function sekolahAsalSteps(): array
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
                                ->columnSpanFull()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('npsn')
                                ->label('NPSN')
                                ->numeric()
                                ->minLength(8)
                                ->maxLength(8)
                                ->validationMessages([
                                    'min_digits' => 'NPSN harus terdiri dari minimal 8 digit.',
                                    'max_digits' => 'NPSN tidak boleh lebih dari 8 digit.',
                                ]),

                            TextInput::make('nss')
                                ->label('NSS/NSM')
                                ->numeric()
                                ->minLength(12)
                                ->maxLength(12)
                                ->validationMessages([
                                    'min_digits' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                    'max_digits' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                ]),

                            Select::make('akreditasi')
                                ->label('Akreditasi')
                                ->native(false)
                                ->required()
                                ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('jenjang')
                                ->label('Jenjang')
                                ->native(false)
                                ->required()
                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('status')
                                ->label('Status')
                                ->native(false)
                                ->required()
                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA'])
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                    Section::make('Logo')
                        ->schema([
                            FileUpload::make('logo_institusi')
                                ->label('Logo Institusi')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
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
                                ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                                ->fetchFileInformation(false)
                                ->directory('assets/instansi-lain')
                                ->downloadable()
                                ->openable()
                                ->maxSize(500)
                                ->minSize(10)
                                ->visibility('private')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
                ]),

            Step::make('Data Alamat')
                ->schema([
                    Section::make('Alamat')
                        ->schema([
                            Select::make('negara_id')
                                ->label('Negara')
                                ->relationship('negara', 'nama')
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('provinsi_id', null);
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('provinsi_id')
                                ->label('Provinsi')
                                ->options(fn (Get $get): Collection => Provinsi::query()
                                    ->where('negara_id', $get('negara_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kabupaten_id', null);
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kabupaten_id')
                                ->label('Kabupaten/Kota')
                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                    ->where('provinsi_id', $get('provinsi_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(function (Set $set) {
                                    $set('kecamatan_id', null);
                                    $set('kelurahan_id', null);
                                })
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kecamatan_id')
                                ->label('Kecamatan')
                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                    ->where('kabupaten_id', $get('kabupaten_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->preload()
                                ->live()
                                ->required()
                                ->afterStateUpdated(fn (Set $set) => $set('kelurahan_id', null))
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            Select::make('kelurahan_id')
                                ->label('Kelurahan/Desa')
                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                    ->pluck('nama', 'id'))
                                ->native(false)
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('alamat')
                                ->label('Jalan/Kampung/Dusun')
                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),

            Step::make('Data Kontak')
                ->schema([
                    Section::make('Kontak')
                        ->schema([
                            TextInput::make('website')
                                ->label('Website')
                                ->url()
                                ->prefixIcon('heroicon-m-globe-alt')
                                ->placeholder('https://mtsn1pandeglang.sch.id')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('telepon')
                                ->label('Telepon')
                                ->tel()
                                ->prefixIcon('heroicon-m-phone')
                                ->placeholder('08**********')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),

                            TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->prefixIcon('heroicon-m-envelope')
                                ->placeholder('adm@mtsn1pandeglang.sch.id')
                                ->required()
                                ->validationMessages(['required' => 'Form ini wajib diisi.']),
                        ])
                        ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
                ]),
        ];
    }
}
