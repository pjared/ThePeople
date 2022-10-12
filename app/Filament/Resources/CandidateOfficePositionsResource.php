<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateOfficePositionsResource\Pages\ManageCandidateOfficePositions;
use App\Models\CandidateOfficePositions;
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

class CandidateOfficePositionsResource extends Resource
{
    protected static ?string $model = CandidateOfficePositions::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';
    protected static ?string $navigationGroup = 'Edit Your Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                TextInput::make('position_name')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Your best accomplishments in office')
                    // ->required()
                    ->maxLength(65535),
                TextInput::make('year_start')
                    ->required()
                    ->maxLength(65535),
                TextInput::make('year_end')
                    ->required()
                    ->maxLength(65535),
                TextInput::make('order')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('position_name'),
                TextColumn::make('description')
                    ->limit(80),
                TextColumn::make('year_start'),
                TextColumn::make('year_end'),
                TextColumn::make('order')
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
            'index' => ManageCandidateOfficePositions::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
