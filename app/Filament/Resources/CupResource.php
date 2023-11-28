<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CupResource\Pages;
use App\Filament\Resources\CupResource\RelationManagers;
use App\Models\Cup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CupResource extends Resource
{
    protected static ?string $model = Cup::class;
    protected static ?string $navigationGroup = 'Premiaciones';
    protected static ?string $navigationLabel = 'Copas';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cup_name')
                ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('trophy.trophy_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.category_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sponsor.sponsor_name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('imge_url')
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
            'index' => Pages\ManageCups::route('/'),
        ];
    }    
}
