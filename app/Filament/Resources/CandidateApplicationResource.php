<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateApplicationResource\Pages\ListCandidateApplications;
use App\Filament\Resources\CandidateResource\Pages\CreateCandidate;
use App\Filament\Resources\CandidateResource\Pages\EditCandidate;
use App\Models\CandidateApplication;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

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
                TextInput::make('user_id')
                    ->required(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('dob')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('office_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('state')
                    ->required()
                    ->maxLength(255),
                TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Select::make('status')
                    ->options([
                        'accepted' => 'Accepted',
                        'submitted' => 'Submitted',
                        'rejected' => 'Rejected',
                    ])
                    ->required(),
                DatePicker::make('entered_race_date'),
                TextInput::make('candidate_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user_id'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('dob')
                    ->date(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('phone_number'),
                TextColumn::make('office_name'),
                TextColumn::make('state'),
                TextColumn::make('location'),
                TextColumn::make('status')
                    ->sortable(),
                TextColumn::make('entered_race_date')
                    ->date(),
                TextColumn::make('candidate_id'),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('status', 'desc')
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
            'index' => ListCandidateApplications::route('/'),
            'create' => CreateCandidate::route('/create'),
            'edit' => EditCandidate::route('/{record}/edit'),
        ];
    }


}
