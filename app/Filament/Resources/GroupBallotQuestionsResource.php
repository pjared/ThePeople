<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupBallotQuestionsResource\Pages\ManageGroupBallotQuestions;
use App\Models\GroupBallotQuestions;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class GroupBallotQuestionsResource extends Resource
{
    protected static ?string $model = GroupBallotQuestions::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Political Groups';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // TextInput::make('political_group_id')
                //     ->required(),
                // TextInput::make('ballot_id')
                //     ->required(),
                // TextInput::make('question')
                //     ->required()
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('group.name'),
                TextColumn::make('ballot_id'),
                TextColumn::make('question'),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageGroupBallotQuestions::route('/'),
        ];
    }
}
