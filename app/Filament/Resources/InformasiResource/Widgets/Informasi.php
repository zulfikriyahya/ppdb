<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Informasi;
use App\Models\CalonSiswa;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\View;
use Filament\Tables\Enums\ActionsPosition;
use App\Filament\Resources\InformasiResource\Pages;


class InformasiPublished extends TableWidget
{
    protected static ?string $model = Informasi::class;



    protected static ?int $sort = 1;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return 'ℹ️ Informasi';
    }

    public function table(Table $table): Table
    {
        if (Auth::check()) {

            $informasi = Informasi::first();
            $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
            $label = $calonSiswa ? $calonSiswa->status_pendaftaran : '';
            $urlViewFormulir = '';
            $urlEditFormulir = '';
            $urlViewInformasi = '';

            if ($calonSiswa) {
                $urlViewFormulir = "/formulir/{$calonSiswa->id}";
                $urlEditFormulir = "/formulir/{$calonSiswa->id}/edit";
                $urlViewInformasi = "/informasi/{$informasi->id}";
            }
        }
        return $table
            ->headerActions([
                // Status Pendaftaran === Ditampilkan ketika Waktu Pengumuman
                Action::make('status_pendaftaran')
                    ->label($label)
                    ->color(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                        if (!$calonSiswa) {
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

                        if (!$calonSiswa) {
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
                    // ->disabled()
                    ->url($urlViewFormulir)
                    ->hidden(Auth::user()->username === 'administrator' || $calonSiswa === null || $calonSiswa->status_pendaftaran === 'Diterima' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' || $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler' || $calonSiswa->status_pendaftaran === 'Ditolak'),
            ])
            ->query(
                Informasi::where('status', 'Publish')
                    ->latest('updated_at')
            )
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->badge(),
                TextColumn::make('isi')
                    ->label('Uraian')
                    ->wrap()
                    ->words(10),
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
                    ->url($urlViewInformasi)
                    ->outlined()
                    ->color('info'),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->paginationPageOptions([5]);
    }
}
