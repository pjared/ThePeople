<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateStanceResource\Pages;
use App\Filament\Resources\CandidateStanceResource\RelationManagers;
use App\Models\CandidateStance;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidateStanceResource extends Resource
{
    protected static ?string $model = CandidateStance::class;

    protected static ?string $navigationIcon = 'heroicon-o-scale';
    protected static ?string $navigationGroup = 'Edit Your Profile';
    protected static ?string $navigationLabel = 'Your Controversial Stances';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        $candidate = auth()->user()->candidate;
        // Get the opinions if the candidate has a ballot
        $opinions = $candidate->ballot ? $candidate->ballot->opinions : collect();
        return $form
            ->schema([
                Forms\Components\Hidden::make('candidate_id')
                    ->default($candidate->id),
                Forms\Components\Select::make('controversial_opinion_id')
                    ->options($opinions->pluck('name', 'id'))
                    ->required(),
                Forms\Components\TextInput::make('stance_label')
                    ->label('Stance title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('stance_reasoning')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('opinion.name'),
                Tables\Columns\TextColumn::make('stance_label'),
                Tables\Columns\TextColumn::make('stance_reasoning')
                    ->limit(80),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function () {
                        //Note: Not sure if user flags need to be deleted here
                    }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCandidateStances::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
