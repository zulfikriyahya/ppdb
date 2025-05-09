<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class UserRegisters extends TableWidget
{
    protected static ?int $sort = 2;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return '🗒️ Log Akun';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::whereHas('roles', function ($query) {
                    $query->where('name', 'peserta');
                })->latest('email_verified_at')
            )
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->defaultImageUrl('/img/avatar.png'),
                TextColumn::make('name')
                    ->label('Nama Lengkap'),
                TextColumn::make('email_verified_at')
                    ->label('Email Diverifikasi')
                    ->dateTime('d F Y H:i:s'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Aktif' => 'heroicon-o-check-circle',
                        'Nonaktif' => 'heroicon-o-x-mark'
                    }),
            ])
            ->striped()
            ->paginationPageOptions([5]);
    }
}
