<?php

namespace App\Filament\Resources\Tipos;

use UnitEnum;
use BackedEnum;
use App\Models\Tipo;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\Tipos\Pages\EditTipo;
use App\Filament\Resources\Tipos\Pages\ListTipos;
use App\Filament\Resources\Tipos\Pages\CreateTipo;
use App\Filament\Resources\Tipos\Schemas\TipoForm;
use App\Filament\Resources\Tipos\Tables\TiposTable;

class TipoResource extends Resource
{
    protected static ?string $model = Tipo::class;

    protected static string|UnitEnum|null $navigationGroup = 'Datos del Televisor';

    public static function form(Schema $schema): Schema
    {
        return TipoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nombre')->label('Nombre')->searchable(),
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
            'index' => ListTipos::route('/'),
            'create' => CreateTipo::route('/create'),
            'edit' => EditTipo::route('/{record}/edit'),
        ];
    }
}
