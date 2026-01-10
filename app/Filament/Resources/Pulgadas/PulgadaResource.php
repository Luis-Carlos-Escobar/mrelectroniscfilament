<?php

namespace App\Filament\Resources\Pulgadas;

use App\Filament\Resources\Pulgadas\Pages\CreatePulgada;
use App\Filament\Resources\Pulgadas\Pages\EditPulgada;
use App\Filament\Resources\Pulgadas\Pages\ListPulgadas;
use App\Filament\Resources\Pulgadas\Schemas\PulgadaForm;
use App\Filament\Resources\Pulgadas\Tables\PulgadasTable;
use App\Models\Pulgada;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PulgadaResource extends Resource
{
    protected static ?string $model = Pulgada::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PulgadaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PulgadasTable::configure($table);
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
            'index' => ListPulgadas::route('/'),
            'create' => CreatePulgada::route('/create'),
            'edit' => EditPulgada::route('/{record}/edit'),
        ];
    }
}
