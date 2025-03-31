<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use Filament\Actions;
use Filament\Actions\EditAction;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\SekolahAsalResource;

class ViewSekolahAsal extends ViewRecord
{
    protected static string $resource = SekolahAsalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->icon('heroicon-o-pencil-square')
                ->outlined(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Fieldset::make('')
                    ->columns(1)
                    ->schema([
                        ImageEntry::make('logo')
                            ->alignCenter()
                            ->hiddenLabel(),
                        TextEntry::make('nama')
                            ->alignCenter()
                            ->extraAttributes(['class' => 'text-6xl font-bold'])
                            ->hiddenLabel(),
                    ]),
                Fieldset::make('Instansi')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('npsn')
                            ->label('NPSN'),
                        TextEntry::make('nss')
                            ->label('NSS/NSM'),
                        TextEntry::make('akreditasi')
                            ->badge()
                            ->suffix(fn(string $state): string => match ($state) {
                                'A' => ' (Sangat Baik)',
                                'B' => ' (Baik)',
                                'C' => ' (Cukup)',
                                'D' => ' (Kurang)'
                            })
                            ->color(fn(string $state): string => match ($state) {
                                'A' => 'primary',
                                'B' => 'success',
                                'C' => 'warning',
                                'D' => 'danger'
                            })
                            ->label('Akreditasi'),
                    ]),

                Fieldset::make('Kontak')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('website')
                            ->icon('heroicon-o-globe-alt')
                            ->iconColor('success')
                            ->label('Website'),
                        TextEntry::make('telepon')
                            ->icon('heroicon-o-phone')
                            ->iconColor('success')
                            ->label('Telepon'),
                        TextEntry::make('email')
                            ->icon('heroicon-o-envelope')
                            ->iconColor('success')
                            ->label('Email'),
                    ]),
                Fieldset::make('Alamat')
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                    ])
                    ->schema([
                        TextEntry::make('alamat')
                            ->label('Jalan/Kampung/Dusun'),
                        TextEntry::make('kelurahan.nama')
                            ->label('Kelurahan'),
                        TextEntry::make('kecamatan.nama')
                            ->label('Kecamatan'),
                        TextEntry::make('kabupaten.nama')
                            ->label('Kabupaten'),
                        TextEntry::make('provinsi.nama')
                            ->label('Provinsi'),
                        TextEntry::make('negara.nama')
                            ->label('Negara'),
                    ]),
            ]);
    }
}
