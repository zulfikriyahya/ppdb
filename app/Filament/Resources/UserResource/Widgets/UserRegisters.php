<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Support\Facades\Auth;

class UserRegisters extends TableWidget
{
    protected static ?int $sort = 2;

    protected static bool $isLazy = false;

    protected function getTableHeading(): string
    {
        return 'Log Akun';
    }

    public static function canView(): bool
    {
        return ! Auth::user()->hasRole('calon_siswa');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::whereHas('roles', fn($q) => $q->where('name', 'calon_siswa'))
                    ->latest('email_verified_at')
            )
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->defaultImageUrl('/img/avatar.png'),

                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('username')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('telepon')
                    ->label('WhatsApp'),

                TextColumn::make('email_verified_at')
                    ->label('Diverifikasi')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif'    => 'success',
                        'Nonaktif' => 'gray',
                        default    => 'gray',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Aktif'    => 'heroicon-o-check-circle',
                        'Nonaktif' => 'heroicon-o-x-mark',
                        default    => 'heroicon-o-x-mark',
                    }),
            ])
            ->striped()
            ->paginationPageOptions([5]);
    }
}
