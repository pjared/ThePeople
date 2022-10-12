<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateStanceResource\Pages\ManageCandidateStances;
use App\Models\CandidateStance;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

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
                Textarea::make('candidate_id')
                    ->default($candidate->id),
                Select::make('controversial_opinion_id')
                    ->options($opinions->pluck('name', 'id'))
                    ->required(),
                TextInput::make('stance_label')
                    ->label('Stance title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('stance_reasoning')
                    ->maxLength(65535),
                TextInput::make('order')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('opinion.name'),
                TextColumn::make('stance_label'),
                TextColumn::make('stance_reasoning')
                    ->limit(80),
                TextColumn::make('order')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
                    ->after(function () {
                        //Note: Not sure if user flags need to be deleted here
                    }),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageCandidateStances::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
