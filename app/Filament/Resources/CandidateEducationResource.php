<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateEducationResource\Pages\ManageCandidateEducation;
use App\Models\CandidateEducation;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class CandidateEducationResource extends Resource
{
    protected static ?string $model = CandidateEducation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Edit Your Profile';
    protected static ?string $navigationLabel = 'Education';

    public static function form(Form $form): Form
    {
        $candidate = auth()->user()->candidate;
        return $form
            ->schema([
                Hidden::make('candidate_id')
                    ->default($candidate->id),
                TextInput::make('school_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('degree_field')
                    ->required()
                    ->maxLength(255),
                TextInput::make('degree_type')
                    ->required()
                    ->maxLength(255),
                TextInput::make('year_received')
                    ->minLength(4)
                    ->maxLength(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('school_name'),
                TextColumn::make('degree_field'),
                TextColumn::make('degree_type'),
                TextColumn::make('year_received'),
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
            'index' => ManageCandidateEducation::route('/'),
        ];
    }
}
