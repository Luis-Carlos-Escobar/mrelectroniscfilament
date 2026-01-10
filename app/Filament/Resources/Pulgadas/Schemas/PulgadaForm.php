<?php

namespace App\Filament\Resources\Pulgadas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class PulgadaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('medida')
                    ->label('Medida')
                    ->required()
            ]);
    }
}
