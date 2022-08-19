<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateEventResource\Pages;
use App\Filament\Resources\CandidateEventResource\RelationManagers;
use App\Models\CandidateEvent;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateEventResource extends Resource
{
    protected static ?string $model = CandidateEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Manage Your Profile';
    protected static ?string $navigationLabel = 'Your Upcoming Events';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                Forms\Components\TextInput::make('event_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('event_location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('event_description')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event_name'),
                Tables\Columns\TextColumn::make('event_location'),
                Tables\Columns\TextColumn::make('event_description'),
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
            'index' => Pages\ManageCandidateEvents::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
