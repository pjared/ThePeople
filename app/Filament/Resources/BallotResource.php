<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BallotResource\Pages;
use App\Jobs\UpdateBallotCache;
use App\Models\Ballot;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class BallotResource extends Resource
{
    protected static ?string $model = Ballot::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Ballot Creation';
    protected static ?string $navigationLabel = 'Ballots';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location_id')
                    ->required(),
                Forms\Components\TextInput::make('office_id')
                    ->required(),
                Forms\Components\DatePicker::make('voting_date')
                    ->required(),
                Forms\Components\Toggle::make('has_single_runner')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('location.name')
                                                    ->searchable(),
                Tables\Columns\TextColumn::make('office.name')
                                                    ->searchable(),
                Tables\Columns\TextColumn::make('voting_date')
                                                    ->date()
                                                    ->sortable(),
                Tables\Columns\BooleanColumn::make('has_single_runner')
                                                    ->label('Single Candidate Race')
                                                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->after(function (Ballot $record) {
                        UpdateBallotCache::dispatch($record);
                    }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageBallots::route('/'),
        ];
    }
}
