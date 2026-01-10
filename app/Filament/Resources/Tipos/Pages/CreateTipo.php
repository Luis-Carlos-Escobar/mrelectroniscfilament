<?php

namespace App\Filament\Resources\Tipos\Pages;

use App\Filament\Resources\Tipos\TipoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTipo extends CreateRecord
{
    protected static string $resource = TipoResource::class;

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
}
