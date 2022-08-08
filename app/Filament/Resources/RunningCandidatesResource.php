<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RunningCandidatesResource\Pages;
use App\Filament\Resources\RunningCandidatesResource\RelationManagers;
use App\Models\RunningCandidates;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RunningCandidatesResource extends Resource
{
    protected static ?string $model = RunningCandidates::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Candidate';
    protected static ?string $navigationLabel = 'Approve Candidates';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('candidate_id')
                    ->required(),
                Forms\Components\TextInput::make('ballot_id')
                    ->required(),
                Forms\Components\DatePicker::make('entered_race_date'),
                Forms\Components\DatePicker::make('ended_race_date'),
                Forms\Components\Toggle::make('show')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate.name'),
                Tables\Columns\TextColumn::make('ballot_id'),
                Tables\Columns\TextColumn::make('entered_race_date')
                    ->date(),
                Tables\Columns\TextColumn::make('ended_race_date')
                    ->date(),
                Tables\Columns\BooleanColumn::make('show'),
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
            'index' => Pages\ManageRunningCandidates::route('/'),
        ];
    }
}
