<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('nombre')
                ->label('Nombre')
                ->required(),
            TextInput::make('documento')
                ->label('Documento')
                ->required(),

            TextInput::make('direccion')
                ->label('Dirección')
                ->required(),

            TextInput::make('telefono')
                ->label('Teléfono')
                ->required()
        ]);
    }
}
