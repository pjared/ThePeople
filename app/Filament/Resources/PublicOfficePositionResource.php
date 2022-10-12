<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicOfficePositionResource\Pages\ManagePublicOfficePositions;
use App\Models\PublicOfficePosition;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class PublicOfficePositionResource extends Resource
{
    protected static ?string $model = PublicOfficePosition::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Ballot Creation';
    protected static ?string $navigationLabel = 'Offices';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('years_per_term')
                    ->required(),
                TextInput::make('limit_terms'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('years_per_term'),
                TextColumn::make('limit_terms'),
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
            'index' => ManagePublicOfficePositions::route('/'),
        ];
    }
}
