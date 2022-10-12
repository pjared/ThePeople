<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateRequiredStanceResource\Pages\ManageCandidateRequiredStances;
use App\Models\CandidateRequiredStance;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class CandidateRequiredStanceResource extends Resource
{
    protected static ?string $model = CandidateRequiredStance::class;

    protected static ?string $navigationIcon = 'heroicon-s-scale';
    protected static ?string $navigationGroup = 'Edit Your Profile';
    protected static ?string $navigationLabel = 'Your Ballot\'s Required Stances';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('candidate_reasoning')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('required_stance.label'),
                // TextColumn::make('candidate_id'),
                TextColumn::make('candidate_reasoning')
                    ->label('Your stance on this topic')
                    ->limit(80),
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
            'index' => ManageCandidateRequiredStances::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('candidate_id', auth()->user()->candidate->id);
    }
}
