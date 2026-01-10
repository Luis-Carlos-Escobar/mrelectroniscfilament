<?php

namespace App\Filament\Resources\Modelos;

use UnitEnum;
use BackedEnum;
use App\Models\Modelo;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\Modelos\Pages\EditModelo;
use App\Filament\Resources\Modelos\Pages\ListModelos;
use App\Filament\Resources\Modelos\Pages\CreateModelo;
use App\Filament\Resources\Modelos\Schemas\ModeloForm;
use App\Filament\Resources\Modelos\Tables\ModelosTable;

class ModeloResource extends Resource
{
    protected static ?string $model = Modelo::class;

    protected static string|UnitEnum|null $navigationGroup = 'Datos del Televisor';

    public static function form(Schema $schema): Schema
    {
        return ModeloForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('marca.nombre')->label('Marca')->searchable(),
            TextColumn::make('nombre')->label('Modelo')->searchable(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListModelos::route('/'),
            'create' => CreateModelo::route('/create'),
            'edit' => EditModelo::route('/{record}/edit'),
        ];
    }
}
