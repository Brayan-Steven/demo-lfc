<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeagueResource\Pages;
use App\Filament\Resources\LeagueResource\RelationManagers;
use App\Filament\Resources\LeagueResource\Widgets\leagueStatsOverview;
use App\Models\League;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LeagueResource extends Resource
{
    protected static ?string $model = League::class;
    protected static ?string $navigationLabel = 'Ligas';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Admin Equipos';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_name')
                    ->relationship('category','category_name')
                    ->createOptionForm([
                        Forms\Components\Select::make('season_name')
                        ->Relationship('season','season_name')
                        ->createOptionForm([
                            Forms\Components\TextInput::make('season_name')
                            ->required()
                                ->maxLength(255),
                            Forms\Components\DatePicker::make('start_season')
                                ->required(),
                            Forms\Components\DatePicker::make('end_season')
                                ->required(),
                            Forms\Components\FileUpload::make('img_url_season')
                                ->image()->preserveFilenames()
                                ->imageEditor()
                                ->required(),
                        ])
                            ->required(),
                        Forms\Components\TextInput::make('category_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('description')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('age')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->required(),
                Forms\Components\Select::make('sponsor_name')
                    ->relationship('sponsor','sponsor_name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('sponsor_name')
                        ->label('Nombre de Compañia')
                        ->required()
                        ->maxLength(255),
                        Forms\Components\TextInput::make('contact')
                            ->label('Numero de contact')
                            ->required()
                            ->numeric()
                            ->maxLength(13),
                        Forms\Components\TextInput::make('sponsorship_type')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('imge_url')
                            ->image()
                            ->imageEditor()
                            ->required(),
                    ])
                    ->required(),
                Forms\Components\TextInput::make('league_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.category_name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Sponsor.sponsor_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('league_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->since()
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
    public static function getWidgets(): array
    {
        return[
            leagueStatsOverview::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeagues::route('/'),
            'create' => Pages\CreateLeague::route('/create'),
            'edit' => Pages\EditLeague::route('/{record}/edit'),
        ];
    }    
}
