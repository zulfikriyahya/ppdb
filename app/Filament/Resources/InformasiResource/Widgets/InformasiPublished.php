<?php

namespace App\Filament\Resources\InformasiResource\Widgets;

use Carbon\Carbon;
use App\Models\Informasi;
use App\Models\CalonSiswa;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Widgets\TableWidget;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\ActionsPosition;

class InformasiPublished extends TableWidget
{
    protected static ?int $sort = 1;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return 'ℹ️ Informasi';
    }

    public function table(Table $table): Table
    {
        if (Auth::check()) {
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $label = $calonSiswa ? $calonSiswa->status_pendaftaran : '';
            $urlFormulir = '';
            $urlViewFormulir = '';
            $urlInformasi = '';

            if ($calonSiswa) {
                $urlFormulir = '/formulir';
                $urlViewFormulir = '/formulir/' . $calonSiswa->id;
                $urlInformasi = '/informasi';
            }
        }

        return $table
            ->headerActions([
                Action::make('label_status_pendaftaran')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Ditolak'),
                Action::make('status_pendaftaran')
                    ->label($label)
                    ->color(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return 'warning'; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'warning';
                        } elseif ($status === 'Diverifikasi') {
                            return 'success';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'warning';
                        } elseif ($status === 'Ditolak') {
                            return 'danger';
                        } elseif ($status === 'Diterima') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'info';
                        }

                        return 'warning';
                    })
                    ->icon(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return 'heroicon-o-arrow-path'; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'heroicon-o-arrow-path';
                        } elseif ($status === 'Diverifikasi') {
                            return 'heroicon-o-clipboard-document-check';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'heroicon-o-document-minus';
                        } elseif ($status === 'Ditolak') {
                            return 'heroicon-o-no-symbol';
                        } elseif ($status === 'Diterima') {
                            return 'heroicon-o-check-circle';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'heroicon-o-shield-check';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'heroicon-o-shield-check';
                        }

                        return 'gray';
                    })
                    ->outlined()
                    ->size('sm')
                    ->url($urlFormulir)
                    ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Ditolak'),

                Action::make('label_status_kelulusan')
                    ->label('Status Pendaftaran :')
                    ->outlined()
                    ->color('gray')
                    ->disabled()
                    ->size('sm')
                    ->hidden(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();
                        $sekarang = Carbon::now();

                        $mulaiPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                            : null;

                        $akhirPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                            : null;

                        $mulaiPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                            : null;

                        $akhirPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                            : null;

                        $mulaiPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                            : null;

                        $akhirPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                            : null;

                        $mulaiPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                            : null;

                        $akhirPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                            : null;

                        $mulaiPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                            : null;

                        $akhirPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                            : null;

                        $periodePengumuman = [
                            [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
                            [$mulaiPengumumanReguler, $akhirPengumumanReguler],
                            [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
                            [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
                            [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
                        ];

                        foreach ($periodePengumuman as [$mulai, $selesai]) {
                            if ($sekarang >= $mulai && $sekarang <= $selesai) {
                                return false;
                            }
                        }

                        return true;
                    }),
                Action::make('status_kelulusan')
                    ->label($label)
                    ->color(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return ''; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'warning';
                        } elseif ($status === 'Diverifikasi') {
                            return 'success';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'warning';
                        } elseif ($status === 'Ditolak') {
                            return 'danger';
                        } elseif ($status === 'Diterima') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'success';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'info';
                        }

                        return 'warning';
                    })
                    ->icon(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (! $calonSiswa) {
                            return ''; // Default jika data calon siswa tidak ditemukan
                        }

                        $status = $calonSiswa->status_pendaftaran;

                        if ($status === 'Diproses') {
                            return 'heroicon-o-arrow-path';
                        } elseif ($status === 'Diverifikasi') {
                            return 'heroicon-o-clipboard-document-check';
                        } elseif ($status === 'Berkas Tidak Lengkap') {
                            return 'heroicon-o-document-minus';
                        } elseif ($status === 'Ditolak') {
                            return 'heroicon-o-no-symbol';
                        } elseif ($status === 'Diterima') {
                            return 'heroicon-o-check-circle';
                        } elseif ($status === 'Diterima Di Kelas Reguler') {
                            return 'heroicon-o-shield-check';
                        } elseif ($status === 'Diterima Di Kelas Unggulan') {
                            return 'heroicon-o-shield-check';
                        }

                        return 'gray';
                    })
                    ->outlined()
                    ->size('sm')
                    ->url($urlViewFormulir)
                    ->hidden(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();

                        $sekarang = Carbon::now();

                        $mulaiPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                            : null;

                        $akhirPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                            : null;

                        $mulaiPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                            : null;

                        $akhirPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                            : null;

                        $mulaiPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                            : null;

                        $akhirPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                            : null;

                        $mulaiPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                            : null;

                        $akhirPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                            : null;

                        $mulaiPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                            : null;

                        $akhirPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                            ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                            : null;

                        $periodePengumuman = [
                            [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
                            [$mulaiPengumumanReguler, $akhirPengumumanReguler],
                            [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
                            [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
                            [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
                        ];

                        foreach ($periodePengumuman as [$mulai, $selesai]) {
                            if ($sekarang >= $mulai && $sekarang <= $selesai) {
                                return false;
                            }
                        }

                        return true;
                    }),
            ])
            ->query(
                Informasi::where('status', 'Publish')
                    ->latest('updated_at')
            )
            ->columns([
                TextColumn::make('judul')
                    ->label('Informasi')
                    ->description(fn(Informasi $record): string => Str::limit($record->isi, 50))
                    ->icon('heroicon-o-information-circle')
                    ->iconColor('info'),
                ImageColumn::make('gambar')
                    ->label('Lampiran'),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->actions([
                Action::make('lihat')
                    ->hiddenLabel()
                    ->icon('heroicon-o-eye')
                    ->button()
                    ->url($urlInformasi)
                    ->outlined()
                    ->color('info'),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->paginationPageOptions([5]);
    }
}
