<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubregionResource\Pages;
use App\Filament\Resources\SubregionResource\RelationManagers;
use App\Models\Subregion;
use Doctrine\DBAL\Schema\Column;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubregionResource extends Resource
{
    protected static ?string $model = Subregion::class;
    protected static ?string $navigationlabel = 'Sudregiones';
    protected static ?string $navigationGroup = 'Regiones';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subregion_name')
                ->required()
                ->placeholder('Ingrese nombre del archivo')
                ->maxLength(255), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subregion_name')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSubregions::route('/'),
        ];
    }    
}
