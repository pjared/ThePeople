<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BallotPrecinctResource\Pages;
use App\Filament\Resources\BallotPrecinctResource\RelationManagers;
use App\Models\BallotPrecinct;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                Forms\Components\TextInput::make('precinct_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ballot_id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('precinct_id'),
                Tables\Columns\TextColumn::make('ballot_id'),
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
            'index' => Pages\ManageBallotPrecincts::route('/'),
        ];
    }
}
