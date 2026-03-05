<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Filament\Traits\CalonSiswaFormTrait;
use App\Models\FormulirPrestasi;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreateCalonSiswa extends CreateRecord
{
    use CalonSiswaFormTrait, HasWizard;

    protected static string $resource = CalonSiswaResource::class;

    protected function getSteps(): array
    {
        return $this->getAllSteps(
            includeStatusSection: false,
            includeDataTes: false
        );
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        $tahun = TahunPendaftaran::where('status', 'Aktif')->first();
        $data['tahun_pendaftaran_id'] = $tahun?->id;

        return $data;
    }

    // -------------------------------------------------------------------------
    // Setelah create: cek apakah jalur = Prestasi & belum isi FormulirPrestasi
    // -------------------------------------------------------------------------

    protected function afterCreate(): void
    {
        $record = $this->record;

        $jalur = JalurPendaftaran::find($record->jalur_pendaftaran_id);

        if (
            $jalur &&
            strtolower($jalur->nama) === 'prestasi' &&
            ! FormulirPrestasi::where('calon_siswa_id', $record->id)->exists()
        ) {
            Notification::make()
                ->title('Lengkapi Formulir Prestasi')
                ->body('Kamu mendaftar via jalur Prestasi. Harap isi Formulir Prestasi sebelum pendaftaran diproses.')
                ->warning()
                ->persistent()
                ->send();
        }
    }

    protected function getRedirectUrl(): string
    {
        // Jika jalur prestasi, redirect langsung ke halaman buat formulir prestasi
        $jalur = JalurPendaftaran::find($this->record->jalur_pendaftaran_id);

        if ($jalur && strtolower($jalur->nama) === 'prestasi') {
            return route('filament.admin.resources.formulir-prestasis.create');
        }

        return $this->getResource()::getUrl('index');
    }
}
