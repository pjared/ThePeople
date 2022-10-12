<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequiredStanceResource\Pages\ManageRequiredStances;
use App\Models\RequiredStance;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class RequiredStanceResource extends Resource
{
    protected static ?string $model = RequiredStance::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Opinions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('controversial_opinion_id')
                    ->required(),
                TextInput::make('label')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('controversial_opinion_id')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('controversial_opinion.name')
                    ->searchable(),
                TextColumn::make('label'),
                TextColumn::make('description'),
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
            'index' => ManageRequiredStances::route('/'),
        ];
    }
}
