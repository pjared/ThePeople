<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticalGroupCandidatesResource\Pages\ManagePoliticalGroupCandidates;
use App\Models\PoliticalGroupCandidates;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class PoliticalGroupCandidatesResource extends Resource
{
    protected static ?string $model = PoliticalGroupCandidates::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Manage Political Group';
    protected static ?string $navigationLabel = 'Backed Candidates';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // TextInput::make('political_group_id')
                //     ->required(),
                // TextInput::make('candidate_id')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('candidate.name'),
                // TextColumn::make('political_group_id'),
                // TextColumn::make('candidate_id'),
                // TextColumn::make('created_at')
                //     ->dateTime(),
                // TextColumn::make('updated_at')
                //     ->dateTime(),
                // TextColumn::make('deleted_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePoliticalGroupCandidates::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $group = auth()->user()->manages_political_groups->first();
        return parent::getEloquentQuery()->where('political_group_id', $group->id);
    }
}
