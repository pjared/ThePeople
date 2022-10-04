<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateResource\Pages;
use App\Filament\Resources\CandidateResource\RelationManagers;
use App\Models\Candidate;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateResource extends Resource
{
    protected static ?string $model = Candidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Candidate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('dob')
                    ->required(),
                Forms\Components\DatePicker::make('signup_date')
                    ->required(),
                Forms\Components\Textarea::make('bio')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('state')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('contact_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_phone_number')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('party_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('user_id'),
                Forms\Components\TextInput::make('site_link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ballot_id')
                    ->required(),
                Forms\Components\Toggle::make('show')
                    ->required(),
                Forms\Components\TextInput::make('order')
                    ->default(100)
                    ->numeric(),
                // Forms\Components\TextInput::make('slug')
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('dob')
                    ->date(),
                Tables\Columns\TextColumn::make('bio')
                    ->limit(10),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('contact_email'),
                Tables\Columns\TextColumn::make('contact_phone_number'),
                Tables\Columns\TextColumn::make('ballot_id'),
                Tables\Columns\BooleanColumn::make('show'),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
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
            'index' => Pages\ListCandidates::route('/'),
            'create' => Pages\CreateCandidate::route('/create'),
            'edit' => Pages\EditCandidate::route('/{record}/edit'),
        ];
    }
}
