<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateEventResource\Pages\ManageCandidateEvents;
use App\Models\CandidateEvent;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

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
                Hidden::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                TextInput::make('event_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('event_location')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('event_date')
                    ->required(),
                Textarea::make('event_description')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('event_name'),
                TextColumn::make('event_location'),
                TextColumn::make('event_description'),
                TextColumn::make('event_date')
                    ->date()
                    ->sortable(),
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
            'index' => ManageCandidateEvents::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
