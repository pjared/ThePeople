<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PoliticalGroupCandidatesResource\Pages;
use App\Filament\Resources\PoliticalGroupCandidatesResource\RelationManagers;
use App\Models\PoliticalGroupCandidates;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PoliticalGroupCandidatesResource extends Resource
{
    protected static ?string $model = PoliticalGroupCandidates::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('political_group_id')
                //     ->required(),
                // Forms\Components\TextInput::make('candidate_id')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate.name'),
                // Tables\Columns\TextColumn::make('political_group_id'),
                // Tables\Columns\TextColumn::make('candidate_id'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePoliticalGroupCandidates::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $group = auth()->user()->manages_political_groups->first();
        return parent::getEloquentQuery()->where('political_group_id', $group->id);
    }
}
