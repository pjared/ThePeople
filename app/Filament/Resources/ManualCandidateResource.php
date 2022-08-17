<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManualCandidateResource\Pages;
use App\Filament\Resources\ManualCandidateResource\RelationManagers;
use App\Models\ManualCandidate;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManualCandidateResource extends Resource
{
    protected static ?string $model = ManualCandidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    // protected static ?string $navigationGroup = 'Candidate';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('candidate_id')
                    ->required(),
                Forms\Components\TextInput::make('note')
                    ->maxLength(255),
                Forms\Components\Textarea::make('sources')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate_id'),
                Tables\Columns\TextColumn::make('note'),
                Tables\Columns\TextColumn::make('sources'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\Action::make('Add Stances')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-stances', $record)),
                    Tables\Actions\Action::make('Add Required Stance')->action('openSettingsModal')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-stances', $record)),
                    Tables\Actions\Action::make('Add Promise')->action('openSettingsModal')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-stances', $record)),
                    Tables\Actions\Action::make('Add Info')->action('openSettingsModal')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-stances', $record)),
                ])

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageManualCandidates::route('/'),
            'add-stances' => Pages\AddCandidateStance::route('/{record}/add-stances'),
        ];
    }
}
