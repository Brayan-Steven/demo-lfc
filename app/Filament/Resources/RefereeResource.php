<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RefereeResource\Pages;
use App\Filament\Resources\RefereeResource\RelationManagers;
use App\Models\Referee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RefereeResource extends Resource
{
    protected static ?string $model = Referee::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-raised';   
    protected static ?string $navigationLabel = 'Arbitro';
    protected static ?string $navigationGroup = 'Personal';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type_document')
                    ->options([
                        'Cédula de Ciudadanía' => 'Cédula de Ciudadanía',
                        'Cédula de Extranjería' => 'Cédula de Extranjería',
                        'Tarjeta de Identidad' => 'Tarjeta de Identidad',
                        'pasaporte' => 'Pasaporte',
                        'nit' => 'NIT',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('referee_name')
                    ->required()
                    ->maxLength(255)
                    ->minLength(10),
                Forms\Components\TextInput::make('identity_document')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type_document')
                    ->searchable(),
                Tables\Columns\TextColumn::make('referee_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('identity_document')
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
            'index' => Pages\ListReferees::route('/'),
            'create' => Pages\CreateReferee::route('/create'),
            'edit' => Pages\EditReferee::route('/{record}/edit'),
        ];
    }    
}
