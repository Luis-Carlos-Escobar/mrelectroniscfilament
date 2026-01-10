<?php

namespace App\Filament\Resources\Pulgadas;

use UnitEnum;
use BackedEnum;
use App\Models\Pulgada;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\Pulgadas\Pages\EditPulgada;
use App\Filament\Resources\Pulgadas\Pages\ListPulgadas;
use App\Filament\Resources\Pulgadas\Pages\CreatePulgada;
use App\Filament\Resources\Pulgadas\Schemas\PulgadaForm;
use App\Filament\Resources\Pulgadas\Tables\PulgadasTable;

class PulgadaResource extends Resource
{
    protected static ?string $model = Pulgada::class;

    protected static string|UnitEnum|null $navigationGroup = 'Datos del Televisor';

    public static function form(Schema $schema): Schema
    {
        return PulgadaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('medida')->label('Medida')->searchable(),
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
            'index' => ListPulgadas::route('/'),
            'create' => CreatePulgada::route('/create'),
            'edit' => EditPulgada::route('/{record}/edit'),
        ];
    }
}
