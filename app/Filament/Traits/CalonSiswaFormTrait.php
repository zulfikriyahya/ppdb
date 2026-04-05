<?php

namespace App\Filament\Traits;

use App\Constants\FormOptions;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Carbon\Carbon;
use Closure;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;

trait CalonSiswaFormTrait
{
    // ========================================================================
    // SINGLE FIELDS (Reusable across Create/Edit/View)
    // ========================================================================

    protected function getJalurPendaftaranField(): Select
    {
        return Select::make('jalur_pendaftaran_id')
            ->label('Jalur Pendaftaran')
            ->relationship('jalurPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
            ->required()
            ->validationMessages(['required' => 'Form ini perlu diisi.'])
            ->native(false)
            ->live()
            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}");
    }

    protected function getNamaField(): TextInput
    {
        return TextInput::make('nama')
            ->label('Nama Lengkap')
            ->required()
            ->disabledOn('create')
            ->dehydrated()
            ->default(fn () => Auth::user()->name)
            ->validationMessages(['required' => 'Form ini perlu diisi.']);
    }

    protected function getNikField(): TextInput
    {
        return TextInput::make('nik')
            ->label('Nomor Induk Kependudukan (NIK)')
            ->required()
            ->unique(ignoreRecord: true)
            ->dehydrateStateUsing(fn ($state) => $state ?: null)
            ->numeric()
            ->placeholder('Contoh: 3201234567890123')
            ->maxLength(16)
            ->minLength(16)
            ->validationMessages([
                'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                'required' => 'Form ini perlu diisi.',
            ]);
    }

    protected function getKkField(): TextInput
    {
        return TextInput::make('kk')
            ->label('Nomor Kartu Keluarga (KK)')
            ->required()
            ->placeholder('Contoh: 3201234567890123')
            ->maxLength(16)
            ->numeric()
            ->minLength(16)
            ->validationMessages([
                'max_digits' => 'KK: Masukkan maksimal 16 Angka.',
                'min_digits' => 'KK: Masukkan minimal 16 Angka.',
                'required' => 'Form ini perlu diisi.',
            ]);
    }

    protected function getNisnField(): TextInput
    {
        return TextInput::make('nisn')
            ->label('Nomor Induk Siswa Nasional (NISN)')
            ->required()
            ->disabled(true)
            ->dehydrated()
            ->default(fn () => Auth::user()->username)
            ->unique(ignoreRecord: true)
            ->dehydrateStateUsing(fn ($state) => $state ?: null)
            ->numeric()
            ->maxLength(10)
            ->minLength(10)
            ->validationMessages([
                'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                'required' => 'Form ini perlu diisi.',
            ]);
    }

    protected function getTempatLahirField(): TextInput
    {
        return TextInput::make('tempat_lahir')
            ->label('Tempat Lahir')
            ->required()
            ->placeholder('Contoh: Pandeglang')
            ->formatStateUsing(fn ($state) => strtoupper($state))
            ->dehydrateStateUsing(fn ($state) => strtoupper($state))
            ->validationMessages(['required' => 'Form ini perlu diisi.']);
    }

    protected function getTanggalLahirField(): DatePicker
    {
        return DatePicker::make('tanggal_lahir')
            ->label('Tanggal Lahir')
            ->minDate(fn () => Carbon::create(now()->year, 7, 1)->subYears(15)) // 1 Juli 2011
            ->maxDate(fn () => Carbon::create(now()->year, 7, 1)->subYears(13)) // 1 Juli 2013
            ->required()
            ->rules([
                'date',
                'after_or_equal:'.Carbon::create(now()->year, 7, 1)->subYears(15)->toDateString(),
                'before_or_equal:'.Carbon::create(now()->year, 7, 1)->subYears(13)->toDateString(),
            ])
            ->validationMessages([
                'required' => 'Form ini perlu diisi.',
                'after_or_equal' => 'Usia minimal 13 tahun dihitung per 1 Juli '.now()->year.'.',
                'before_or_equal' => 'Usia maksimal 15 tahun dihitung per 1 Juli '.now()->year.'.',
                'date' => 'Format tanggal tidak valid.',
            ]);
    }

    // ========================================================================
    // FIELD GROUPS (Complex reusable structures)
    // ========================================================================

    protected function getWilayahFields(string $prefix, bool|Closure $required = true): array
    {
        return [
            Select::make("{$prefix}_negara_id")
                ->label('Negara')
                ->relationship("{$prefix}Negara", 'nama')
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_provinsi_id", null);
                    $set("{$prefix}_kabupaten_id", null);
                    $set("{$prefix}_kecamatan_id", null);
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_provinsi_id")
                ->label('Provinsi')
                ->options(fn (Get $get): Collection => Provinsi::query()
                    ->where('negara_id', $get("{$prefix}_negara_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kabupaten_id", null);
                    $set("{$prefix}_kecamatan_id", null);
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kabupaten_id")
                ->label('Kabupaten/Kota')
                ->options(fn (Get $get): Collection => Kabupaten::query()
                    ->where('provinsi_id', $get("{$prefix}_provinsi_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kecamatan_id", null);
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kecamatan_id")
                ->label('Kecamatan')
                ->options(fn (Get $get): Collection => Kecamatan::query()
                    ->where('kabupaten_id', $get("{$prefix}_kabupaten_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(function (Set $set) use ($prefix) {
                    $set("{$prefix}_kelurahan_id", null);
                }),

            Select::make("{$prefix}_kelurahan_id")
                ->label('Kelurahan/Desa')
                ->options(fn (Get $get): Collection => Kelurahan::query()
                    ->where('kecamatan_id', $get("{$prefix}_kecamatan_id"))
                    ->pluck('nama', 'id'))
                ->required($required)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),

            TextInput::make("{$prefix}_alamat")
                ->label('Jalan/Kampung/Dusun')
                ->required($required)
                ->placeholder('KP KEBON CAU RT 001 RW 005')
                ->validationMessages(['required' => 'Form ini perlu diisi.']),
        ];
    }

    protected function getOrangTuaFields(string $type, bool $required = true): array
    {
        $label = ucfirst($type);

        // Untuk wali: wajib hanya jika ayah DAN ibu meninggal
        $isWali = $type === 'wali';
        $wajibJikaWali = fn (Get $get) => $get('ayah_status') === 'Meninggal' && $get('ibu_status') === 'Meninggal';

        $isRequired = $isWali
            ? $wajibJikaWali
            : $required;

        return [
            TextInput::make("{$type}_nama")
                ->label($isWali ? 'Nama Lengkap Wali' : "Nama Lengkap {$label} Kandung")
                ->required($isRequired)
                ->validationMessages(['required' => 'Form ini perlu diisi.']),

            TextInput::make("{$type}_nik")
                ->label($isWali ? 'NIK Wali' : "NIK {$label} Kandung")
                ->required($isRequired)
                ->maxLength(16)
                ->minLength(16)
                ->numeric()
                ->validationMessages([
                    'required' => 'Form ini perlu diisi.',
                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                ]),

            Select::make("{$type}_status")
                ->label('Status')
                ->options(FormOptions::STATUS_HIDUP)
                ->required($isRequired)
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false)
                ->live()
                ->default($isWali ? 'Hidup' : null)
                ->disabled($isWali)
                ->dehydrated(),

            TextInput::make("{$type}_telepon")
                ->label('Nomor Telepon')
                ->tel()
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status') === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }

                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn (Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.']),

            Select::make("{$type}_pekerjaan")
                ->label('Pekerjaan')
                ->options(FormOptions::PEKERJAAN)
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status') === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }

                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn (Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),

            Select::make("{$type}_penghasilan")
                ->label('Penghasilan Bulanan')
                ->options(FormOptions::PENGHASILAN)
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status') === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }

                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn (Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),

            Select::make("{$type}_pendidikan")
                ->label('Pendidikan')
                ->options(FormOptions::PENDIDIKAN)
                ->required(function (Get $get) use ($isWali, $required, $type) {
                    if ($isWali) {
                        return $get('ayah_status') === 'Meninggal'
                            && $get('ibu_status') === 'Meninggal'
                            && $get("{$type}_status") !== 'Meninggal';
                    }

                    return $required && $get("{$type}_status") !== 'Meninggal';
                })
                ->hidden(fn (Get $get) => $get("{$type}_status") === 'Meninggal')
                ->validationMessages(['required' => 'Form ini perlu diisi.'])
                ->native(false),
        ];
    }

    protected function getBerkasField(string $type, string $label, $required = true, ?string $helperText = null): FileUpload
    {
        $field = FileUpload::make("berkas_{$type}")
            ->label($label)
            ->required($required)
            ->validationMessages(['required' => 'Form ini perlu diisi.'])
            ->fetchFileInformation(false)
            ->directory(fn ($get) => "berkas/{$type}/".$get('nisn'))
            ->downloadable()
            ->openable()
            ->maxSize(500)
            ->minSize(10)
            ->visibility('private');

        if (in_array($type, ['skbb', 'skab'])) {
            $field->acceptedFileTypes(['application/pdf']);
        } else {
            $field->image()
                ->imageEditor()
                ->imageEditorAspectRatios([null, '1:1' => '1:1', '3:4' => '3:4']);
        }

        if ($helperText) {
            $field->helperText(new HtmlString($helperText));
        }

        return $field;
    }

    // ========================================================================
    // TAB SCHEMAS
    // ========================================================================

    protected function getDataCalonSiswaTab(): Tabs\Tab
    {
        return Tabs\Tab::make('Biodata')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema([
                $this->getJalurPendaftaranField(),
                $this->getNamaField(),
                $this->getNikField(),
                $this->getKkField(),
                $this->getNisnField(),
                $this->getTempatLahirField(),
                $this->getTanggalLahirField(),

                Select::make('tahun_lulus')
                    ->label('Tahun Lulus Dari Sekolah Asal')
                    ->options(FormOptions::tahunLulusOptions())
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->default(date('Y'))
                    ->native(false),

                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options(FormOptions::JENIS_KELAMIN)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('golongan_darah')
                    ->label('Golongan Darah')
                    ->options(FormOptions::GOLONGAN_DARAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('agama')
                    ->label('Agama')
                    ->options(FormOptions::AGAMA)
                    ->default('Islam')
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                TextInput::make('anak_ke')
                    ->label('Anak Ke')
                    ->required()
                    ->placeholder('Contoh: 1')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(20)
                    ->live()
                    ->validationMessages(['required' => 'Form ini perlu diisi.']),

                TextInput::make('jumlah_saudara')
                    ->label('Dari (Jumlah Anak)')
                    ->required()
                    ->numeric()
                    ->placeholder('Contoh: 3')
                    ->minValue(1)
                    ->maxValue(20)
                    ->live()
                    ->rules([
                        fn (Get $get) => function (string $attribute, $value, Closure $fail) use ($get) {
                            $anakKe = (int) $get('anak_ke');
                            $jumlah = (int) $value;

                            if ($anakKe && $jumlah < $anakKe) {
                                $fail("Jumlah anak tidak boleh kurang dari anak ke-{$anakKe}.");
                            }
                        },
                    ])
                    ->validationMessages([
                        'required' => 'Form ini perlu diisi.',
                        'max' => 'Form ini perlu diisi.',
                    ]),

                Select::make('tinggal_bersama')
                    ->label('Tinggal Bersama')
                    ->options(FormOptions::TINGGAL_BERSAMA)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('jarak_ke_sekolah')
                    ->label('Jarak Ke Sekolah')
                    ->options(FormOptions::JARAK_KE_SEKOLAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                Select::make('disabilitas')
                    ->label('Disabilitas')
                    ->options(FormOptions::DISABILITAS)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),

                TextInput::make('tinggi_badan')
                    ->label('Tinggi Badan')
                    ->suffix('cm')
                    ->placeholder('Contoh: 150')
                    ->maxValue(300)
                    ->minValue(30)
                    ->validationMessages(['max' => 'Tinggi badan tidak boleh lebih dari 300 cm.', 'min' => 'Tinggi badan tidak boleh kurang dari 30 cm.'])
                    ->numeric(),

                TextInput::make('berat_badan')
                    ->label('Berat Badan')
                    ->suffix('kg')
                    ->placeholder('Contoh: 45')
                    ->maxValue(500)
                    ->minValue(10)
                    ->validationMessages(['max' => 'Berat badan tidak boleh lebih dari 500 kg.', 'min' => 'Berat badan tidak boleh kurang dari 10 kg.'])
                    ->numeric(),

                TextInput::make('no_kip')
                    ->label('Nomor Kartu Indonesia Pintar')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti KIP.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->placeholder('Contoh: 180234')
                    ->minLength(6)
                    ->maxLength(6)
                    ->live()
                    ->validationMessages([
                        'min' => 'KIP: Nomor harus 6 digit.',
                        'max' => 'KIP: Nomor harus 6 digit.',
                        'unique' => 'KIP: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('no_kks')
                    ->label('Nomor Kartu Keluarga Sejahtera')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti KKS.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->placeholder('Contoh: A1B2C3 atau sesuai kartu')
                    ->minLength(5)
                    ->maxLength(16)
                    ->live()
                    ->validationMessages([
                        'min' => 'KKS: Nomor harus 5-16 karakter.',
                        'max' => 'KKS: Nomor harus 5-16 karakter.',
                        'unique' => 'KKS: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('no_pkh')
                    ->label('Nomor Kartu Program Keluarga Harapan')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti PKH.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->placeholder('Contoh: 3201234567890123')
                    ->minLength(15)
                    ->maxLength(15)
                    ->live()
                    ->validationMessages([
                        'min' => 'PKH: Nomor harus 15 karakter.',
                        'max' => 'PKH: Nomor harus 15 karakter.',
                        'unique' => 'PKH: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('no_sktm')
                    ->label('Nomor Surat Keterangan Tidak Mampu')
                    ->helperText(new HtmlString('<small><i>Jangan diisi jika tidak memiliki bukti SKTM.<sup style="color:red">*</sup></i></small>'))
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->minLength(8)
                    ->placeholder('Contoh: 474.3/001/DS-NAMADESA/2024')
                    ->maxLength(50)
                    ->live()
                    ->validationMessages([
                        'min' => 'SKTM: Masukkan minimal 8 karakter.',
                        'max' => 'SKTM: Masukkan maksimal 50 karakter.',
                        'unique' => 'SKTM: Nomor ini sudah pernah diisi.',
                    ]),

                TextInput::make('siswa_telepon')
                    ->label('Nomor Telepon')
                    ->required()
                    ->disabled(true)
                    ->dehydrated()
                    ->default(fn () => Auth::user()->telepon)
                    ->unique(ignoreRecord: true)
                    ->dehydrateStateUsing(fn ($state) => $state ?: null)
                    ->numeric()
                    ->maxLength(15)
                    ->minLength(10)
                    ->validationMessages([
                        'max_digits' => 'Masukkan maksimal 15 Angka.',
                        'min_digits' => 'Masukkan minimal 10 Angka.',
                    ])
                    ->numeric()
                    ->tel(),

                $this->getSekolahAsalField(),
            ]);
    }

    protected function getSekolahAsalField(): Select
    {
        return Select::make('sekolah_asal_id')
            ->label('Sekolah Asal')
            ->relationship('sekolahAsal', 'nama')
            ->required()
            ->validationMessages(['required' => 'Form ini perlu diisi.'])
            ->native(false)
            ->searchable()
            ->preload()
            ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
            ->createOptionForm($this->getSekolahAsalForm());
    }

    protected function getSekolahAsalForm(): array
    {
        return [
            Wizard::make([
                Wizard\Step::make('Data Instansi')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Instansi')
                            ->prefixIcon('heroicon-o-building-library')
                            ->required()
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->columnSpanFull(),

                        Select::make('jenjang')
                            ->label('Jenjang')
                            ->native(false)
                            ->required()
                            ->live()
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->options(fn () => FormOptions::jenjangSekolahAsal(Sekolah::first()?->jenjang)),

                        TextInput::make('npsn')
                            ->label('NPSN')
                            ->numeric()
                            ->minLength(8)
                            ->maxLength(8)
                            ->required()
                            ->hintAction(
                                Action::make('cek_npsn')
                                    ->label('Buka Web NPSN')
                                    ->icon('heroicon-o-arrow-top-right-on-square')
                                    ->url('https://sekolah.data.kemendikdasmen.go.id/sekolah')
                                    ->openUrlInNewTab()
                            )
                            ->validationMessages([
                                'min_digits' => 'NPSN harus 8 digit.',
                                'max_digits' => 'NPSN harus 8 digit.',
                                'required' => 'Form ini perlu diisi.',
                            ]),

                        TextInput::make('nss')
                            ->visible(fn ($get) => in_array($get('jenjang'), ['MI', 'MTS', 'MA']))
                            ->label('NSS/NSM')
                            ->required()
                            ->numeric()
                            ->minLength(12)
                            ->maxLength(12)
                            ->validationMessages([
                                'min_digits' => 'NSS/NSM harus 12 digit.',
                                'max_digits' => 'NSS/NSM harus 12 digit.',
                                'required' => 'Form ini perlu diisi.',
                            ]),

                        Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->options(FormOptions::AKREDITASI),

                        Select::make('status')
                            ->label('Status')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini perlu diisi.'])
                            ->options(FormOptions::STATUS_SEKOLAH),

                        // FileUpload::make('logo')
                        //     ->label('Logo Instansi')
                        //     ->image()
                        //     ->imageEditor()
                        //     ->imageEditorAspectRatios([null, '1:1' => '1:1'])
                        //     ->fetchFileInformation(false)
                        //     ->directory('assets/instansi-lain')
                        //     ->downloadable()
                        //     ->openable()
                        //     ->maxSize(500)
                        //     ->minSize(10)
                        //     ->visibility('private')
                        //     ->required()
                        //     ->validationMessages(['required' => 'Form ini perlu diisi.']),
                    ])
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                Wizard\Step::make('Data Alamat')
                    ->schema($this->getWilayahFields(''))
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),

                // Wizard\Step::make('Data Kontak')
                //     ->schema([
                //         TextInput::make('website')
                //             ->label('Website')
                //             ->url()
                //             ->prefixIcon('heroicon-m-globe-alt')
                //             ->placeholder('https://mtsn1pandeglang.sch.id'),

                //         TextInput::make('telepon')
                //             ->label('Telepon')
                //             ->tel()
                //             ->placeholder('08**********')
                //             ->prefixIcon('heroicon-m-phone'),

                //         TextInput::make('email')
                //             ->label('Email')
                //             ->placeholder('adm@mtsn1pandeglang.sch.id')
                //             ->email()
                //             ->prefixIcon('heroicon-m-envelope'),
                //     ])
                //     ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
            ]),
        ];
    }

    // ========================================================================
    // SECTION SCHEMAS
    // ========================================================================

    protected function getStatusFormulirSection(): Section
    {
        return Section::make('Status Formulir')
            ->icon('heroicon-m-document-check')
            ->visible(Auth::user()->roles->first()->name !== 'calon_siswa')
            ->columns(['sm' => '100%', 'md' => 1, 'lg' => 1])
            ->schema([
                Select::make('status_formulir')
                    ->label('Status Formulir')
                    ->options(FormOptions::STATUS_FORMULIR)
                    ->native(false)
                    ->default('Diproses')
                    ->required()
                    ->live(),
            ]);
    }

    protected function getStatusPendaftaranSection(): Section
    {
        return Section::make('Status Pendaftaran')
            ->icon('heroicon-m-clipboard-document-list')
            ->visible(function () {
                if (Auth::user()->roles->first()->name === 'calon_siswa') {
                    return false;
                }

                // Ambil nilai status_formulir dari state form
                $statusFormulir = $this->data['status_formulir'] ?? 'Diproses';

                return $statusFormulir !== 'Diproses';
            })
            ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2])
            ->schema([
                Select::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options(fn () => Auth::user()->hasRole('super_admin')
                        ? FormOptions::STATUS_PENDAFTARAN_SUPER_ADMIN
                        : FormOptions::STATUS_PENDAFTARAN_REGULAR)
                    ->native(false)
                    ->live()
                    ->default('Diproses')
                    ->required(),

                Select::make('kelas_id')
                    ->label('Kelas')
                    ->visible(fn (Get $get) => in_array($get('status_pendaftaran'), [
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan',
                    ]))
                    ->required(fn (Get $get) => in_array($get('status_pendaftaran'), [
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan',
                    ]))
                    ->relationship('kelas', 'nama')
                    ->native(false),
            ]);
    }

    protected function getDataTesStep(): Wizard\Step
    {
        return Wizard\Step::make('Data Tes')
            ->hidden(Auth::user()->hasRole('calon_siswa'))
            ->schema([
                Tabs::make('Data Kartu Tes')
                    ->tabs([
                        Tabs\Tab::make('Data Kartu Tes')
                            ->icon('heroicon-m-bell')
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                TextInput::make('tes_sesi')->label('Sesi Tes'),
                                TextInput::make('tes_ruang')->label('Ruang Tes'),
                                DateTimePicker::make('tes_akademik')->label('Tanggal Tes Akademik'),
                                DateTimePicker::make('tes_praktik')->label('Tanggal Tes Praktik'),
                            ]),
                    ])
                    ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),

                Tabs::make('Data Nilai Tes')
                    ->tabs([
                        Tabs\Tab::make('Data Nilai Tes')
                            ->icon('heroicon-m-bell')
                            ->iconPosition(IconPosition::After)
                            ->schema([
                                TextInput::make('bobot_nilai_akademik')->label('Bobot Nilai Tes Akademik')->numeric(),
                                TextInput::make('bobot_nilai_praktik')->label('Bobot Nilai Tes Praktik')->numeric(),
                                TextInput::make('nilai_akademik')->label('Nilai Tes Akademik')->numeric(),
                                TextInput::make('nilai_praktik')->label('Nilai Tes Praktik')->numeric(),
                            ]),
                    ])
                    ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
            ])
            ->columns(['sm' => '100%', 'md' => '100%', 'lg' => 2])
            ->columnSpanFull();
    }

    // ========================================================================
    // HIGH-LEVEL WIZARD STEPS
    // ========================================================================

    protected function getAllSteps(bool $includeStatusSection = false, bool $includeDataTes = false): array
    {
        $isCalonSiswa = Auth::user()->hasRole('calon_siswa');

        $steps = [];

        // ----------------------------------------------------------------
        // Step 0 — Status (hanya untuk admin/non-calon_siswa)
        // ----------------------------------------------------------------
        if ($includeStatusSection && ! $isCalonSiswa) {
            $steps[] = Wizard\Step::make('Status')
                ->icon('heroicon-o-flag')
                ->description('Status formulir & pendaftaran')
                ->schema([
                    $this->getStatusFormulirSection(),
                    $this->getStatusPendaftaranSection(),
                ]);
        }

        // ----------------------------------------------------------------
        // Step 1 — Data Calon Siswa
        // ----------------------------------------------------------------
        $steps[] = Wizard\Step::make('Data Calon Siswa')
            ->icon('heroicon-o-user')
            ->description('Biodata, alamat & berkas')
            ->schema([
                Tabs::make('Biodata')
                    ->tabs([
                        $this->getDataCalonSiswaTab(),
                        $this->getAlamatTab('siswa'),
                        $this->getBerkasTab(),
                    ])
                    ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]),
            ]);

        // ----------------------------------------------------------------
        // Step 2 — Data Orang Tua
        // ----------------------------------------------------------------
        $steps[] = Wizard\Step::make('Data Orang Tua')
            ->icon('heroicon-o-user-group')
            ->description('Data ibu, ayah & wali')
            ->schema([
                $this->getOrangTuaTabs('ibu', 'Ibu Kandung'),
                $this->getOrangTuaTabs('ayah', 'Ayah Kandung'),
                $this->getOrangTuaTabs('wali', 'Wali', false),
                $this->getKepemilikanRumahSection(),
            ])
            ->columnSpanFull();

        // ----------------------------------------------------------------
        // Step 3 — Data Tes (hanya admin)
        // ----------------------------------------------------------------
        if ($includeDataTes) {
            $steps[] = $this->getDataTesStep();
        }

        return $steps;
    }

    protected function getAlamatTab(string $prefix): Tabs\Tab
    {
        return Tabs\Tab::make('Alamat')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema($this->getWilayahFields($prefix));
    }

    protected function getBerkasTab(): Tabs\Tab
    {
        return Tabs\Tab::make('Berkas')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema([
                $this->getBerkasField('foto', 'Foto Latar Merah'),
                $this->getBerkasField('kk', 'Kartu Keluarga'),
                $this->getBerkasField('akta', 'Akta Kelahiran'),
                $this->getBerkasField('nisn', 'Kartu NISN/Tangkapan Layar NISN (Web)')
                    ->hintAction(
                        Action::make('cek_nisn')
                            ->label('Buka Web NISN')
                            ->icon('heroicon-o-arrow-top-right-on-square')
                            ->url(fn (Get $get) => 'https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynisn/'.$get('nisn'))
                            ->openUrlInNewTab()
                    ),
                $this->getBerkasField('skbb', 'Surat Keterangan Berkelakuan Baik'),
                $this->getBerkasField('skab', 'Surat Keterangan Aktif Belajar'),

                $this->getBerkasField(
                    'kip',
                    'Kartu Indonesia Pintar',
                    fn ($get) => $get('no_kip') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti KIP.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_kip') !== null),

                $this->getBerkasField(
                    'kks',
                    'Kartu Keluarga Sejahtera',
                    fn ($get) => $get('no_kks') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti KKS.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_kks') !== null),

                $this->getBerkasField(
                    'pkh',
                    'Kartu Program Keluarga Harapan',
                    fn ($get) => $get('no_pkh') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti PKH.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_pkh') !== null),

                $this->getBerkasField(
                    'sktm',
                    'Surat Keterangan Tidak Mampu',
                    fn ($get) => $get('no_sktm') !== null,
                    '<small><i>Jangan diisi jika tidak memiliki bukti SKTM.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'faktur_listrik',
                    'Faktur Listrik',
                    fn ($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah Faktur Pembayaran Listrik 3 Bulan Terakhir.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'rumah_depan',
                    'Foto Depan Rumah',
                    fn ($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah foto depan rumah.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'rumah_dalam',
                    'Foto Dalam Rumah',
                    fn ($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah foto dalam rumah.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_sktm') !== null),

                $this->getBerkasField(
                    'rumah_belakang',
                    'Foto Belakang Rumah',
                    fn ($get) => $get('no_sktm') !== null,
                    '<small><i>Unggah foto belakang rumah.<sup style="color:red">*</sup></i></small>'
                )->visible(fn ($get) => $get('no_sktm') !== null),
            ]);
    }

    protected function getOrangTuaTabs(string $type, string $label, bool $required = true): Tabs
    {
        $isWali = $type === 'wali';
        $wajibJikaWali = fn (Get $get) => $get('ayah_status') === 'Meninggal' &&
            $get('ibu_status') === 'Meninggal';

        return Tabs::make("Data {$label}")
            // Tab wali hanya tampil jika ayah DAN ibu meninggal
            ->visible($isWali ? $wajibJikaWali : true)
            ->tabs([
                Tabs\Tab::make("Data {$label}")
                    ->icon('heroicon-m-bell')
                    ->iconPosition(IconPosition::After)
                    ->schema($this->getOrangTuaFields($type, $required)),

                Tabs\Tab::make('Alamat')
                    ->icon('heroicon-m-bell')
                    ->iconPosition(IconPosition::After)
                    ->schema($this->getWilayahFields(
                        $type,
                        // Alamat wali wajib hanya jika ayah DAN ibu meninggal
                        $isWali ? $wajibJikaWali : $required
                    )),
            ])
            ->columns(['sm' => '100%', 'md' => 3, 'lg' => 3]);
    }

    protected function getKepemilikanRumahSection(): Section
    {
        return Section::make('Kepemilikan Rumah')
            ->icon('heroicon-m-bell')
            ->iconPosition(IconPosition::After)
            ->schema([
                Select::make('kepemilikan_rumah')
                    ->label('Status Kepemilikan Rumah')
                    ->options(FormOptions::KEPEMILIKAN_RUMAH)
                    ->required()
                    ->validationMessages(['required' => 'Form ini perlu diisi.'])
                    ->native(false),
            ]);
    }
}
