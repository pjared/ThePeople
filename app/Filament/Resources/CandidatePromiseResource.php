<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidatePromiseResource\Pages;
use App\Filament\Resources\CandidatePromiseResource\RelationManagers;
use App\Models\CandidatePromise;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidatePromiseResource extends Resource
{
    protected static ?string $model = CandidatePromise::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Edit Your Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('candidate_id')
                    ->default(auth()->user()->candidate->id),
                Forms\Components\TextInput::make('promise')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('plan')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Toggle::make('order')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate_id'),
                Tables\Columns\TextColumn::make('promise'),
                Tables\Columns\TextColumn::make('plan'),
                // Tables\Columns\BooleanColumn::make('order'),
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
            'index' => Pages\ManageCandidatePromises::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}