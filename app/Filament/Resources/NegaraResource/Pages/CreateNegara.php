<?php

namespace App\Filament\Resources\NegaraResource\Pages;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\NegaraResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNegara extends CreateRecord
{
    protected static string $resource = NegaraResource::class;
}
