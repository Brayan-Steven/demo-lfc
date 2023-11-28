<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormatResource\Pages;
use App\Filament\Resources\FormatResource\RelationManagers;
use App\Models\Format;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormatResource extends Resource
{
    protected static ?string $model = Format::class;
    protected static ?string $navigationLabel = 'Formatos';
    protected static ?string $navigationIcon = 'heroicon-o-folder-arrow-down';
    protected static ?string $navigationGroup = 'Documents';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('format_name')
                    ->required()
                    ->placeholder('Ingrese nombre del archivo')
                    ->maxLength(255), 
                Forms\Components\TextInput::make('description')
                    ->label('Descripcion')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('format_file')
                    ->label('Formatos')
                    ->columnSpan('full')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('format_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('format_file')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListFormats::route('/'),
            'create' => Pages\CreateFormat::route('/create'),
            'edit' => Pages\EditFormat::route('/{record}/edit'),
        ];
    }    
}
