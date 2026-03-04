<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use App\Filament\Resources\SekolahResource;
use App\Models\Sekolah;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;

class ListSekolahs extends ListRecords
{
    protected static string $resource = SekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->icon('heroicon-o-plus')
                ->outlined()
                ->hiddenLabel()
                ->visible(fn () => Sekolah::count() === 0),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo'),
                TextColumn::make('nama')
                    ->description(
                        fn (Sekolah $record) => implode(' | ', array_filter([
                            'NPSN: '.$record->npsn ?? null,
                            'NSS: '.$record->nss ?? null,
                        ]))
                    )
                    ->wrap()
                    ->weight(FontWeight::Bold)
                    ->label('Nama Instansi'),
                TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->suffix(fn (string $state): string => match ($state) {
                        'A' => ' (Sangat Baik)',
                        'B' => ' (Baik)',
                        'C' => ' (Cukup)',
                        'D' => ' (Kurang)'
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'A' => 'primary',
                        'B' => 'success',
                        'C' => 'warning',
                        'D' => 'danger'
                    })
                    ->badge(),
                TextColumn::make('pimpinan.nama')
                    ->icon('heroicon-o-user-circle')
                    ->iconColor('success')
                    ->label('Kepala Instansi'),
                TextColumn::make('alamat')
                    ->label('Alamat Lengkap')
                    ->description(
                        fn (Sekolah $record) => implode(', ', array_filter([
                            $record->kelurahan->nama ?? null,
                            $record->kecamatan->nama ?? null,
                            $record->kabupaten->nama ?? null,
                            $record->provinsi->nama ?? null,
                            $record->negara->nama ?? null,
                        ]))
                    )
                    ->copyable()
                    ->copyMessage('Alamat Disalin!')
                    ->wrap(),
                TextColumn::make('website')
                    ->copyable()
                    ->copyMessage('Website Disalin!')
                    ->wrap()
                    ->icon('heroicon-o-globe-alt')
                    ->iconColor('success')
                    ->label('Website'),
                TextColumn::make('telepon')
                    ->copyable()
                    ->copyMessage('Telepon Disalin!')
                    ->icon('heroicon-o-phone')
                    ->iconColor('success')
                    ->label('Telepon'),
                TextColumn::make('email')
                    ->copyable()
                    ->copyMessage('Email Disalin!')
                    ->icon('heroicon-o-envelope')
                    ->iconColor('success')
                    ->label('Email'),
                TextColumn::make('nomor_surat')
                    ->copyable()
                    ->copyMessage('Nomor SKL Disalin!')
                    ->label('Nomor SKL'),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    DeleteAction::make(),
                    EditAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->paginationPageOptions([0]);
    }
}
