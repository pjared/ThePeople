<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticalGroupEventsResource\Pages;
use App\Filament\Resources\PoliticalGroupEventsResource\RelationManagers;
use App\Models\PoliticalGroupEvents;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PoliticalGroupEventsResource extends Resource
{
    protected static ?string $model = PoliticalGroupEvents::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Manage Political Group';
    protected static ?string $navigationLabel = 'Upcoming Events';

    public static function form(Form $form): Form
    {
        $group = auth()->user()->manages_political_groups->first();
        return $form
            ->schema([
                Forms\Components\Hidden::make('candidate_id')
                    ->default($group->id),
                Forms\Components\TextInput::make('event_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('event_location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('event_description')
                    ->maxLength(65535),
                Forms\Components\DateTimePicker::make('event_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('political_group_id'),
                Tables\Columns\TextColumn::make('event_name'),
                Tables\Columns\TextColumn::make('event_location'),
                Tables\Columns\TextColumn::make('event_description')
                    ->limit(80),
                Tables\Columns\TextColumn::make('event_date')
                    ->dateTime(),
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
            'index' => Pages\ManagePoliticalGroupEvents::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $group = auth()->user()->manages_political_groups->first();
        return parent::getEloquentQuery()->where('political_group_id', $group->id);
    }
}
