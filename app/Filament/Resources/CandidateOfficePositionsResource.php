<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateOfficePositionsResource\Pages;
use App\Filament\Resources\CandidateOfficePositionsResource\RelationManagers;
use App\Models\CandidateOfficePositions;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateOfficePositionsResource extends Resource
{
    protected static ?string $model = CandidateOfficePositions::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';
    protected static ?string $navigationGroup = 'Edit Your Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                Forms\Components\TextInput::make('position_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Your best accomplishments in office')
                    // ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('year_start')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('year_end')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('position_name'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(80),
                Tables\Columns\TextColumn::make('year_start'),
                Tables\Columns\TextColumn::make('year_end'),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
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
            'index' => Pages\ManageCandidateOfficePositions::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
