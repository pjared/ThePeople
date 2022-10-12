<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticalGroupEventsResource\Pages\ManagePoliticalGroupEvents;
use App\Models\PoliticalGroupEvents;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

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
                Hidden::make('political_group_id')
                    ->default($group->id),
                TextInput::make('event_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('event_location')
                    ->required()
                    ->maxLength(255),
                Textarea::make('event_description')
                    ->maxLength(65535),
                DateTimePicker::make('event_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                // TextColumn::make('political_group_id'),
                TextColumn::make('event_name'),
                TextColumn::make('event_location'),
                TextColumn::make('event_description')
                    ->limit(80),
                TextColumn::make('event_date')
                    ->dateTime(),
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
            'index' => ManagePoliticalGroupEvents::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $group = auth()->user()->manages_political_groups->first();
        return parent::getEloquentQuery()->where('political_group_id', $group->id);
    }
}
