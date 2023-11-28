<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MunicipalityResource\Pages;
use App\Filament\Resources\MunicipalityResource\RelationManagers;
use App\Models\Municipality;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MunicipalityResource extends Resource
{
    protected static ?string $model = Municipality::class;
    protected static ?string $navigationLabel = 'Municipios';
    protected static ?string $navigationGroup = 'Regiones';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                Forms\Components\TextInput::make('municipality_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('subregion_name')
                    ->relationship('Subregion','subregion_name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('subregion_name')
                        ->label('Nombre Sub region')
                        ->required()
                        ->maxLength(255),
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('municipality_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Subregion.subregion_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMunicipalities::route('/'),
            'create' => Pages\CreateMunicipality::route('/create'),
            'edit' => Pages\EditMunicipality::route('/{record}/edit'),
        ];
    }    
}
