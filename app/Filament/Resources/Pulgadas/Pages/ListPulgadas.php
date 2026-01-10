<?php

namespace App\Filament\Resources\Pulgadas\Pages;

use App\Filament\Resources\Pulgadas\PulgadaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPulgadas extends ListRecords
{
    protected static string $resource = PulgadaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
