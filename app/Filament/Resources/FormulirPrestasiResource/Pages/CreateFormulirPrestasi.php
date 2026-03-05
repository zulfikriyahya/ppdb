<?php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use App\Models\CalonSiswa;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateFormulirPrestasi extends CreateRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    // -----------------------------------------------------------------------
    // Validasi awal: calon_siswa harus sudah mendaftar lewat jalur prestasi
    // -----------------------------------------------------------------------

    public function mount(): void
    {
        parent::mount();

        if (auth()->user()?->hasRole('calon_siswa')) {
            $calonSiswa = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->with('jalurPendaftaran')
                ->first();

            // Belum isi formulir utama
            if (! $calonSiswa) {
                Notification::make()
                    ->title('Formulir Pendaftaran Belum Diisi')
                    ->body('Isi formulir pendaftaran utama terlebih dahulu.')
                    ->warning()
                    ->send();

                $this->redirect(route('filament.admin.resources.formulir.index'));
                return;
            }

            // Bukan jalur prestasi
            if (
                $calonSiswa->jalurPendaftaran &&
                strtolower($calonSiswa->jalurPendaftaran->nama) !== 'prestasi'
            ) {
                Notification::make()
                    ->title('Bukan Jalur Prestasi')
                    ->body('Fitur ini hanya untuk pendaftar jalur Prestasi.')
                    ->danger()
                    ->send();

                $this->redirect(route('filament.admin.resources.formulir.index'));
            }
        }
    }

    // -----------------------------------------------------------------------
    // Auto-inject calon_siswa_id untuk calon_siswa
    // Bypass withoutGlobalScopes() agar tidak kena scope tahun_aktif
    // -----------------------------------------------------------------------

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (auth()->user()?->hasRole('calon_siswa')) {
            $data['calon_siswa_id'] = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->value('id');
        }

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
