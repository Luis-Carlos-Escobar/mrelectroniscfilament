<?php

namespace App\Filament\Resources\Modelos\Schemas;

use Dom\Text;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class ModeloForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('marca_id')
                    ->label('Marca')
                    ->relationship('marca', 'nombre')
                    ->required(),
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->required()
            ]);
    }
}
