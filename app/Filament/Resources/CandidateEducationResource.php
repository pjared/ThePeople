<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateEducationResource\Pages;
use App\Filament\Resources\CandidateEducationResource\RelationManagers;
use App\Models\CandidateEducation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                Forms\Components\Hidden::make('candidate_id')
                    ->default($candidate->id),
                Forms\Components\TextInput::make('school_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('degree_field')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('degree_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('year_start')
                    ->required(),
                Forms\Components\DatePicker::make('year_end')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('school_name'),
                Tables\Columns\TextColumn::make('degree_field'),
                Tables\Columns\TextColumn::make('degree_type'),
                Tables\Columns\TextColumn::make('year_start')
                    ->date(),
                Tables\Columns\TextColumn::make('year_end')
                    ->date(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ManageCandidateEducation::route('/'),
        ];
    }
}
