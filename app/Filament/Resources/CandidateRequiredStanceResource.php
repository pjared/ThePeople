<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateRequiredStanceResource\Pages;
use App\Filament\Resources\CandidateRequiredStanceResource\RelationManagers;
use App\Models\CandidateRequiredStance;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateRequiredStanceResource extends Resource
{
    protected static ?string $model = CandidateRequiredStance::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Edit Your Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('candidate_reasoning')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('required_stance.label'),
                // Tables\Columns\TextColumn::make('candidate_id'),
                Tables\Columns\TextColumn::make('candidate_reasoning')
                    ->label('Your stance on this topic'),
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
            'index' => Pages\ManageCandidateRequiredStances::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
