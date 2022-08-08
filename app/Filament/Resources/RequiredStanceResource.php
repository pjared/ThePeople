<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequiredStanceResource\Pages;
use App\Filament\Resources\RequiredStanceResource\RelationManagers;
use App\Models\RequiredStance;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequiredStanceResource extends Resource
{
    protected static ?string $model = RequiredStance::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Opinions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('controversial_opinion_id')
                    ->required(),
                Forms\Components\TextInput::make('label')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('controversial_opinion_id')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('controversial_opinion.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextColumn::make('description'),
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
            'index' => Pages\ManageRequiredStances::route('/'),
        ];
    }
}
