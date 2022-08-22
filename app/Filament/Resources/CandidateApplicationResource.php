<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateApplicationResource\Pages;
use App\Filament\Resources\CandidateApplicationResource\RelationManagers;
use App\Models\CandidateApplication;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateApplicationResource extends Resource
{
    protected static ?string $model = CandidateApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Assign and Place Candidates';
    protected static ?string $navigationLabel = 'Applications';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('dob')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('office_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('state')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options([
                        'accepted' => 'Accepted',
                        'submitted' => 'Submitted',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('entered_race_date'),
                Forms\Components\TextInput::make('candidate_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->date(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number'),
                Tables\Columns\TextColumn::make('office_name'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\TextColumn::make('status')
                    ->sortable(),
                Tables\Columns\TextColumn::make('entered_race_date')
                    ->date(),
                Tables\Columns\TextColumn::make('candidate_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('status', 'desc')
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
            'index' => Pages\ListCandidateApplications::route('/'),
            'create' => Pages\CreateCandidateApplication::route('/create'),
            'edit' => Pages\EditCandidateApplication::route('/{record}/edit'),
        ];
    }


}
