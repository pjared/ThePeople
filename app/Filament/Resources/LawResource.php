<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LawResource\Pages;
use App\Filament\Resources\LawResource\RelationManagers;
use App\Models\Law;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LawResource extends Resource
{
    protected static ?string $model = Law::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Laws';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('senate_yeas'),
                Forms\Components\TextInput::make('senate_nays'),
                Forms\Components\TextInput::make('senate_not_voting'),
                Forms\Components\TextInput::make('house_yeas'),
                Forms\Components\TextInput::make('house_nays'),
                Forms\Components\TextInput::make('house_not_voting'),
                Forms\Components\TextInput::make('senate_roll_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('house_roll_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bill_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bill_status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bill_link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bill_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('bill_summary')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bill_id'),
                Tables\Columns\TextColumn::make('bill_title')
                    ->limit(50),
                Tables\Columns\TextColumn::make('bill_summary')
                    ->limit(50),
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
            'index' => Pages\ManageLaws::route('/'),
        ];
    }
}
