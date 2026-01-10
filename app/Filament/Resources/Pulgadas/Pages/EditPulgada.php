<?php

namespace App\Filament\Resources\Pulgadas\Pages;

use App\Filament\Resources\Pulgadas\PulgadaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPulgada extends EditRecord
{
    protected static string $resource = PulgadaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
