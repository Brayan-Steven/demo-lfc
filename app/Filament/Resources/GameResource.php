<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Filament\Resources\GameResource\RelationManagers;
use App\Models\Game;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Juegos';
    protected static ?string $navigationGroup = 'Admin Equipos';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('stadium_name')
                    ->relationship('stadium','stadium_name')
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
                Forms\Components\Select::make('referee_name')
                    ->relationship('referee','referee_name')
                    ->createOptionForm([
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
                    ])
                    ->required(),
                Forms\Components\Select::make('league_name')
                    ->relationship('league','league_name')
                    ->required(),
                Forms\Components\Select::make('cup_name')
                    ->relationship('cup','cup_name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('cup_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('start_date')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->required(),
                Forms\Components\Select::make('trophy_name')
                ->relationship('trophy','trophy_name')
                ->createOptionForm([
                        Forms\Components\TextInput::make('trophy_name')
                            ->required()
                            ->maxLength(255),
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
                        Forms\Components\TextInput::make('description')
                        ->required()
                        ->maxLength(255),
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
                        Forms\Components\FileUpload::make('imge_url_trophy')
                            ->image()
                            ->columnSpanFull()
                            ->imageEditor()
                            ->required(),
                    ])
                    ->required(),
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
                    Forms\Components\FileUpload::make('imge_url')
                        ->image()
                        ->columnSpanFull()
                        ->imageEditor()
                        ->required(),
                    ])
                    ->required(),
                Forms\Components\Select::make('season_name')
                    ->relationship('season','season_name')
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
                Forms\Components\Select::make('trophy_name')
                    ->relationship('trophy','trophy_name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('trophy_name')
                    ->required()
                    ->maxLength(255),
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
                    Forms\Components\TextInput::make('description')
                        ->required()
                        ->maxLength(255),
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
                        Forms\Components\FileUpload::make('imge_url_trophy')
                            ->image()
                            ->columnSpanFull()
                            ->imageEditor()
                            ->required(),
                        ])
                    ->required(),
                Forms\Components\DatePicker::make('date'),
                Forms\Components\TextInput::make('time'),
                Forms\Components\TextInput::make('result')
                    ->maxLength(255),
                Forms\Components\Select::make('municipality_name')
                    ->relationship('Municipality','municipality_name')
                    ->createOptionForm([
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
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('stadium.stadium_name')
                    // ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('referee.referee_name')
                    // ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('league.league_name')
                    // ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cup.cup_name')
                    // ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('season.season_name')
                    // ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trophy.trophy_name')
                    // ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Municipality.municipality_name')
                    // ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\TextColumn::make('result')
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
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }    
}
