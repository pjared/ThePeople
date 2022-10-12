<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticalGroupResource\Pages\CreatePoliticalGroup;
use App\Filament\Resources\PoliticalGroupResource\Pages\EditPoliticalGroup;
use App\Filament\Resources\PoliticalGroupResource\Pages\ListPoliticalGroups;
use App\Models\PoliticalGroup;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;

class PoliticalGroupResource extends Resource
{
    protected static ?string $model = PoliticalGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Political Groups';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('location_id'),
                Textarea::make('description')
                    ->maxLength(65535),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('site_link')
                    ->maxLength(255),
                Toggle::make('can_back_candidates'),
                TextInput::make('badge_url')
                    ->maxLength(255),
                TextInput::make('profile_photo_path')
                    ->maxLength(2048),
                TextInput::make('slug')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('contact_email'),
                TextColumn::make('location_id'),
                TextColumn::make('description')
                    ->limit(80),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('site_link'),
                TextColumn::make('badge_url'),
                BooleanColumn::make('can_back_candidates'),
                TextColumn::make('profile_photo_path'),
                TextColumn::make('slug'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
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
            'index' => ListPoliticalGroups::route('/'),
            'create' => CreatePoliticalGroup::route('/create'),
            'edit' => EditPoliticalGroup::route('/{record}/edit'),
        ];
    }
}
