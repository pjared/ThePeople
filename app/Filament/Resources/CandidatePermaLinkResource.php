<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidatePermaLinkResource\Pages;
use App\Filament\Resources\CandidatePermaLinkResource\RelationManagers;
use App\Models\CandidatePermaLink;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CandidatePermaLinkResource extends Resource
{
    protected static ?string $model = CandidatePermaLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Candidate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('candidate_id')
                    ->required(),
                Forms\Components\TextInput::make('perma_link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('candidate_link')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate.name'),
                Tables\Columns\TextColumn::make('perma_link'),
                Tables\Columns\TextColumn::make('candidate_link'),
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
            'index' => Pages\ManageCandidatePermaLinks::route('/'),
        ];
    }
}
