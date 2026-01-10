<?php

namespace App\Filament\Resources\Modelos\Pages;

use App\Filament\Resources\Modelos\ModeloResource;
use Filament\Resources\Pages\CreateRecord;

class CreateModelo extends CreateRecord
{
    protected static string $resource = ModeloResource::class;

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
}
