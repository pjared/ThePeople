<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateResource\Pages\CreateCandidate;
use App\Filament\Resources\CandidateResource\Pages\EditCandidate;
use App\Filament\Resources\CandidateResource\Pages\ListCandidates;
use App\Models\Candidate;
use Filament\Forms\Components\DatePicker;
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

class CandidateResource extends Resource
{
    protected static ?string $model = Candidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Candidate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('dob'),
                DatePicker::make('signup_date'),
                Textarea::make('bio')
                    ->maxLength(65535),
                TextInput::make('state')
                    ->required()
                    ->maxLength(20),
                TextInput::make('contact_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('contact_phone_number')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('party_name')
                    ->maxLength(255),
                TextInput::make('user_id'),
                TextInput::make('site_link')
                    ->maxLength(255),
                TextInput::make('ballot_id'),
                Toggle::make('show')
                    ->required(),
                TextInput::make('order')
                    ->default(100)
                    ->numeric(),
                // TextInput::make('slug')
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable(),
                TextColumn::make('name'),
                TextColumn::make('dob')
                    ->date(),
                TextColumn::make('bio')
                    ->limit(10),
                TextColumn::make('state'),
                TextColumn::make('contact_email'),
                TextColumn::make('contact_phone_number'),
                TextColumn::make('ballot_id'),
                BooleanColumn::make('show'),
                TextColumn::make('order')
                    ->sortable(),
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
            'index' => ListCandidates::route('/'),
            'create' => CreateCandidate::route('/create'),
            'edit' => EditCandidate::route('/{record}/edit'),
        ];
    }
}
