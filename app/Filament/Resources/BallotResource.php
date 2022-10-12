<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BallotResource\Pages\ManageBallots;
use App\Jobs\UpdateBallotCache;
use App\Models\Ballot;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;

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
                TextInput::make('location_id')
                    ->required(),
                TextInput::make('office_id')
                    ->required(),
                DatePicker::make('voting_date')
                    ->required(),
                Toggle::make('has_single_runner')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable(),
                TextColumn::make('location.name')
                    ->searchable(),
                TextColumn::make('office.name')
                    ->searchable(),
                TextColumn::make('voting_date')
                    ->date()
                    ->sortable(),
                BooleanColumn::make('has_single_runner')
                    ->label('Single Candidate Race')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                    ->after(function (Ballot $record) {
                        UpdateBallotCache::dispatch($record);
                    }),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageBallots::route('/'),
        ];
    }
}
