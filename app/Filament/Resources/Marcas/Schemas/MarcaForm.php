<?php

namespace App\Filament\Resources\Marcas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class MarcaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->required()
            ]);
    }
}
