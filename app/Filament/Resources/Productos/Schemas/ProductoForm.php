<?php

namespace App\Filament\Resources\Productos\Schemas;

use App\Models\Modelo;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('tipo_id')
                    ->label('Tipo')
                    ->relationship('tipo', 'nombre')
                    ->createOptionForm([
                        TextInput::make('nombre')->label('Nombre del tipo')
                        ->required()
                        ->unique(ignoreRecord: true),
                    ])
                    ->required(),
                Select::make('marca_id')
                    ->label('Marca')
                    ->relationship('marca', 'nombre')
                    ->createOptionForm([
                        TextInput::make('nombre')->label('Nombre de la marca')
                        ->required()
                        ->unique(ignoreRecord: true),
                    ])
                    ->required()
                    ->live(),
                Select::make('modelo_id')
                    ->label('Modelo')
                    ->relationship('modelo', 'nombre',
                    fn ($query, callable $get) =>
                        $query->where('marca_id', $get('marca_id'))
                    )
                    ->createOptionForm([
                        TextInput::make('nombre')->label('Nombre del modelo')
                        ->required()
                        ->unique(ignoreRecord: true),
                    ])
                    ->createOptionUsing(function (array $data, callable $get) {
                        return Modelo::create([
                            'nombre' => $data['nombre'],
                            'marca_id' => $get('marca_id'),
                        ]);
                    })
                    ->required(),
                Select::make('pulgada_id')
                    ->label('Pulgada')
                    ->relationship('pulgada', 'medida')
                    ->createOptionForm([
                        TextInput::make('medida')->label('Medida')
                        ->required()
                        ->unique(ignoreRecord: true),
                    ])
                    ->required(),
                TextInput::make('precio')
                    ->label('Precio')
                    ->numeric()
                    ->required(),
                TextInput::make('cantidad')
                    ->label('Cantidad')
                    ->numeric()
                    ->required(),
                TextInput::make('numero_pieza')
                    ->label('Número de pieza'),
                TextInput::make('descripcion')
                    ->label('Descripción')

            ]);
    }
}
