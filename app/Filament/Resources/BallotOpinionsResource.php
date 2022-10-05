<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BallotOpinionsResource\Pages;
use App\Models\BallotOpinions;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class BallotOpinionsResource extends Resource
{
    protected static ?string $model = BallotOpinions::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Opinions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ballot_id')
                    ->required(),
                Forms\Components\TextInput::make('controversial_opinion_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ballot_id')
                                                ->sortable(),
                Tables\Columns\TextColumn::make('controversial_opinion_id')
                                                ->searchable()
                                                ->sortable(),
                Tables\Columns\TextColumn::make('controversial_opinion.name')
                                                ->searchable()
                                                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageBallotOpinions::route('/'),
        ];
    }
}
