<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupBallotQuestionsResource\Pages;
use App\Models\GroupBallotQuestions;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class GroupBallotQuestionsResource extends Resource
{
    protected static ?string $model = GroupBallotQuestions::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Political Groups';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('political_group_id')
                //     ->required(),
                // Forms\Components\TextInput::make('ballot_id')
                //     ->required(),
                // Forms\Components\TextInput::make('question')
                //     ->required()
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group.name'),
                Tables\Columns\TextColumn::make('ballot_id'),
                Tables\Columns\TextColumn::make('question'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageGroupBallotQuestions::route('/'),
        ];
    }
}
