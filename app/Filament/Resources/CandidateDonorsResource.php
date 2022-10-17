<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateDonorsResource\Pages;
use App\Filament\Resources\CandidateDonorsResource\Pages\CreateCandidateDonors;
use App\Filament\Resources\CandidateDonorsResource\Pages\EditCandidateDonors;
use App\Filament\Resources\CandidateDonorsResource\Pages\ListCandidateDonors;

use App\Models\CandidateDonors;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CandidateDonorsResource extends Resource
{
    protected static ?string $model = CandidateDonors::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Candidate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('candidate_id')
                    ->required(),
                Forms\Components\TextInput::make('total')
                    ->numeric()
                    ->required(),
                Forms\Components\DatePicker::make('last_fec_updated_at'),
                Forms\Components\Textarea::make('top_5_groups')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Textarea::make('top_5_states')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Textarea::make('top_5_donors')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate.name'),
                Tables\Columns\TextColumn::make('total'),
                Tables\Columns\TextColumn::make('last_fec_updated_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => ListCandidateDonors::route('/'),
            'create' => CreateCandidateDonors::route('/create'),
            'edit' => EditCandidateDonors::route('/{record}/edit'),
        ];
    }
}
