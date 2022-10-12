<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidatePermaLinkResource\Pages\ManageCandidatePermaLinks;
use App\Models\CandidatePermaLink;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;

class CandidatePermaLinkResource extends Resource
{
    protected static ?string $model = CandidatePermaLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Candidate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('candidate_id')
                    ->required(),
                TextInput::make('perma_link')
                    ->required()
                    ->maxLength(255),
                TextInput::make('candidate_link')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('candidate.name'),
                TextColumn::make('perma_link'),
                TextColumn::make('candidate_link'),
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
            'index' => ManageCandidatePermaLinks::route('/'),
        ];
    }
}
