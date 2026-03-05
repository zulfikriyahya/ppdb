<?php

namespace App\Filament\Resources\FormulirPrestasiResource\Pages;

use App\Filament\Resources\FormulirPrestasiResource;
use App\Models\CalonSiswa;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditFormulirPrestasi extends EditRecord
{
    protected static string $resource = FormulirPrestasiResource::class;

    // -----------------------------------------------------------------------
    // Validasi akses: calon_siswa hanya bisa edit milik sendiri
    // -----------------------------------------------------------------------

    public function mount(int|string $record): void
    {
        parent::mount($record);

        if (auth()->user()?->hasRole('calon_siswa')) {
            $calonSiswaId = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->value('id');

            if ($this->record->calon_siswa_id !== $calonSiswaId) {
                Notification::make()
                    ->title('Akses Ditolak')
                    ->danger()
                    ->send();

                $this->redirect($this->getResource()::getUrl('index'));
            }
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()
                ->visible(auth()->user()?->hasAnyRole(['admin', 'super_admin'])),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
