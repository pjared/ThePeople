<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupApplicationResource\Pages;
use App\Models\GroupApplication;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class GroupApplicationResource extends Resource
{
    protected static ?string $model = GroupApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Political Groups';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('user_id')
                //     ->required(),
                // Forms\Components\TextInput::make('name')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->disabled(),
                // Forms\Components\TextInput::make('email')
                //     ->email()
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('state')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('location')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options([
                        'accepted' => 'Accepted',
                        'submitted' => 'Submitted',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),
                // Forms\Components\TextInput::make('group_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Group Name'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(20),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('group_id'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
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
            'index' => Pages\ListGroupApplications::route('/'),
            'create' => Pages\CreateGroupApplication::route('/create'),
            'edit' => Pages\EditGroupApplication::route('/{record}/edit'),
        ];
    }
}
