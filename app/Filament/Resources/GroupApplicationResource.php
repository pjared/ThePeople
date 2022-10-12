<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GroupApplicationResource\Pages\CreateGroupApplication;
use App\Filament\Resources\GroupApplicationResource\Pages\EditGroupApplication;
use App\Filament\Resources\GroupApplicationResource\Pages\ListGroupApplications;
use App\Models\GroupApplication;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class GroupApplicationResource extends Resource
{
    protected static ?string $model = GroupApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Political Groups';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // TextInput::make('user_id')
                //     ->required(),
                // TextInput::make('name')
                //     ->required()
                //     ->maxLength(255),
                Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->disabled(),
                // TextInput::make('email')
                //     ->email()
                //     ->required()
                //     ->maxLength(255),
                // TextInput::make('state')
                //     ->required()
                //     ->maxLength(255),
                // TextInput::make('location')
                //     ->required()
                //     ->maxLength(255),
                Select::make('status')
                    ->options([
                        'accepted' => 'Accepted',
                        'submitted' => 'Submitted',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),
                // TextInput::make('group_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name'),
                TextColumn::make('name')
                    ->label('Group Name'),
                TextColumn::make('description')
                    ->limit(20),
                TextColumn::make('email'),
                TextColumn::make('state'),
                TextColumn::make('location'),
                TextColumn::make('status'),
                TextColumn::make('group_id'),
                // TextColumn::make('created_at')
                //     ->dateTime(),
                // TextColumn::make('updated_at')
                //     ->dateTime(),
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
            'index' => ListGroupApplications::route('/'),
            'create' => CreateGroupApplication::route('/create'),
            'edit' => EditGroupApplication::route('/{record}/edit'),
        ];
    }
}
