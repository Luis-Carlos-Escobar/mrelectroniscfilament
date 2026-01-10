<?php

namespace App\Filament\Resources\Productos;

use BackedEnum;
use App\Models\Producto;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\Productos\Pages\EditProducto;
use App\Filament\Resources\Productos\Pages\ListProductos;
use App\Filament\Resources\Productos\Pages\CreateProducto;
use App\Filament\Resources\Productos\Schemas\ProductoForm;
use App\Filament\Resources\Productos\Tables\ProductosTable;

class ProductoResource extends Resource
{
    protected static ?string $model = Producto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return ProductoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('marca.nombre')->label('Marca')->sortable(),
            TextColumn::make('modelo.nombre')->label('Modelo')->sortable(),
            TextColumn::make('pulgada.medida')->label('Pulgada')->sortable(),
            TextColumn::make('tipo.nombre')->label('Tipo')->sortable(),
            TextColumn::make('precio')->label('Precio')->money('COP', true)->sortable(),
            TextColumn::make('cantidad')->label('Cantidad')->sortable(),
            TextColumn::make('numero_pieza')->label('Número de pieza')->sortable(),
            TextColumn::make('descripcion')->label('Descripción')->sortable(),
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
            'index' => ListProductos::route('/'),
            'create' => CreateProducto::route('/create'),
            'edit' => EditProducto::route('/{record}/edit'),
        ];
    }
}
