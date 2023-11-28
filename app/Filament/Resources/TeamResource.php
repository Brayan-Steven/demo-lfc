<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;
    protected static ?string $navigationLabel = 'Equipos';
    protected static ?string $navigationGroup = 'Admin Equipos';
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('team_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('league_name')
                    ->relationship('League','league_name')
                    ->createOptionForm([
                        // Formulario de Liga
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
                            ->relationship('Sponsor','sponsor_name')
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
                            // finde formualrio liga
                    ])
                    ->required(),
                Forms\Components\Select::make('coach_name')
                    ->relationship('Coach','coach_name')
                    ->createOptionForm([
                            Forms\Components\TextInput::make('coach_document')
                                ->required()
                                ->numeric()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('coach_name')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('coach_age')
                                ->required()
                                ->numeric()
                                ->maxLength(255),
                        ])
                    ->required(),
                    Forms\Components\Select::make('stadium_name')
                        ->relationship('Stadium','stadium_name')
                        ->createOptionForm([
                            Forms\Components\TextInput::make('stadium_name')
                            ->required()
                            ->maxLength(255),
                            Forms\Components\TextInput::make('location')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('capacity')
                                ->required()
                                ->numeric(),
                        ])
                    ->required(),
                Forms\Components\Select::make('sponsor_name')
                    ->relationship('Sponsor','sponsor_name')
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
                Forms\Components\FileUpload::make('imge_url')
                    ->columnSpan('full')
                    ->image()
                    ->imageEditor()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('team_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('league.league_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sponsor.sponsor_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('coach.coach_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stadium.stadium_name')
                    ->searchable(),  
                Tables\Columns\TextColumn::make('sponsor.sponsor_name')
                    ->searchable(),    
                Tables\Columns\ImageColumn::make('imge_url')
                    ->circular()
                    ->stacked()
                    ->limit(3)
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }    
}
