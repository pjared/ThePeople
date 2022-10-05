<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticalGroupResource\Pages;
use App\Models\PoliticalGroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PoliticalGroupResource extends Resource
{
    protected static ?string $model = PoliticalGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Political Groups';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location_id'),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('site_link')
                    ->maxLength(255),
                Forms\Components\Toggle::make('can_back_candidates'),
                Forms\Components\TextInput::make('badge_url')
                    ->maxLength(255),
                Forms\Components\TextInput::make('profile_photo_path')
                    ->maxLength(2048),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('contact_email'),
                Tables\Columns\TextColumn::make('location_id'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(80),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('site_link'),
                Tables\Columns\TextColumn::make('badge_url'),
                Tables\Columns\BooleanColumn::make('can_back_candidates'),
                Tables\Columns\TextColumn::make('profile_photo_path'),
                Tables\Columns\TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPoliticalGroups::route('/'),
            'create' => Pages\CreatePoliticalGroup::route('/create'),
            'edit' => Pages\EditPoliticalGroup::route('/{record}/edit'),
        ];
    }
}
