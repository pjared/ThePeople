<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BallotOpinionsResource\Pages\ManageBallotOpinions;
use App\Models\BallotOpinions;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class BallotOpinionsResource extends Resource
{
    protected static ?string $model = BallotOpinions::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Opinions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('ballot_id')
                    ->required(),
                TextInput::make('controversial_opinion_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ballot_id')
                                                ->sortable(),
                TextColumn::make('controversial_opinion_id')
                                                ->searchable()
                                                ->sortable(),
                TextColumn::make('controversial_opinion.name')
                                                ->searchable()
                                                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageBallotOpinions::route('/'),
        ];
    }
}
