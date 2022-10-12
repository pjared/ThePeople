<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BallotPrecinctResource\Pages\ManageBallotPrecincts;
use App\Models\BallotPrecinct;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class BallotPrecinctResource extends Resource
{
    protected static ?string $model = BallotPrecinct::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Ballot Creation';
    protected static ?string $navigationLabel = 'Ballot Precincts';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('precinct_id')
                    ->required()
                    ->maxLength(255),
                TextInput::make('ballot_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('precinct_id'),
                TextColumn::make('ballot_id'),
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
            'index' => ManageBallotPrecincts::route('/'),
        ];
    }
}
