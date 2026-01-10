<?php

namespace App\Filament\Resources\Tipos\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class TipoForm
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
