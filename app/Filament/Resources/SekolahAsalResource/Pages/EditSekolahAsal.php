<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Provinsi;
use Filament\Forms\Form;
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
use App\Filament\Resources\SekolahAsalResource;

class EditSekolahAsal extends EditRecord
{
    protected static string $resource = SekolahAsalResource::class;

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
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Nomor Pokok Sekolah Nasional'),
                        TextInput::make('nss')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Nomor Statistik Sekolah'),
                        Select::make('jenjang')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Jenjang')
                            ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                        Select::make('status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Status')
                            ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/instansi-lain')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),

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
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),

                Section::make('Kontak')
                    ->collapsible()
                    ->schema([
                        TextInput::make('website')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Website'),
                        TextInput::make('telepon')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Telepon')
                            ->tel(),
                        TextInput::make('email')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Email')
                            ->email(),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
            ]);
    }
}
