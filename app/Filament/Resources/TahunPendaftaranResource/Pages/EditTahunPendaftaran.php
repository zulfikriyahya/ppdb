<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use Filament\Forms\Form;
use App\Models\JalurPendaftaran;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\TahunPendaftaranResource;

class EditTahunPendaftaran extends EditRecord
{
    protected static string $resource = TahunPendaftaranResource::class;

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
                Section::make('Tahun Pendaftaran')
                    ->description('Data Tahun Pendaftaran.')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Tahun Pendaftaran')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min' => 'Tahun Pendaftaran: Minimal 9 Karakter.',
                                'max' => 'Tahun Pendaftaran: Maksimal 9 Karakter.',
                            ])
                            ->maxLength(9)
                            ->minLength(9)
                            ->placeholder('Contoh: 2025/2026'),
                        TextInput::make('kuantitas')
                            ->label('Kuota Maksimal Registrasi Akun')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                            ->numeric()
                            ->postfix('Akun'),
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
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
                Section::make('Daftar Akun')
                    ->description('Tanggal Daftar Akun PPDB.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DatePicker::make('tanggal_ppdb_selesai')
                            ->label('Tanggal Selesai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Penerbitan Kartu Tes')
                    ->description('Tanggal penerbitan kartu tes.')
                    ->schema([
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                            ->live()
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                            ->label('Tanggal Selesai Penerbitan Kartu Tes')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Registrasi Berkas')
                    ->description('Tanggal registrasi berkas.')
                    ->schema([
                        DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                            ->label('Tanggal Mulai Registrasi Berkas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                            ->label('Tanggal Selesai Registrasi Berkas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Prestasi')
                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Prestasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Prestasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Prestasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Reguler')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Reguler')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Reguler')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Reguler')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Reguler'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Afirmasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Afirmasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Afirmasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Afirmasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Zonasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Zonasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Zonasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Zonasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Mutasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Mutasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pendaftaran untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pendaftaran Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pendaftaran Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Mutasi')

                    ->visible(function () {
                        $statusJalur = JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', 'Mutasi')->exists();
                        return $statusJalur;
                    })
                    ->description('Tanggal pengumuman untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Pengumuman Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Pengumuman Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Akademik')
                    ->visible(fn($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))

                    ->description('Tanggal tes akademik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_akademik_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Tes Akademik'),
                        DateTimePicker::make('tanggal_tes_akademik_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Tes Akademik'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Praktik')

                    ->visible(fn($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))
                    ->description('Tanggal tes praktik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_praktik_mulai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Mulai Tes Praktik'),
                        DateTimePicker::make('tanggal_tes_praktik_selesai')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Tanggal Selesai Tes Praktik'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
            ]);
    }
}
