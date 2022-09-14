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
    protected static ?string $navigationGroup = 'Candidate';

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
                Forms\Components\Toggle::make('candidate.running_candidate.show'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('candidate_id'),
                Tables\Columns\TextColumn::make('note')
                    ->limit(15),
                Tables\Columns\TextColumn::make('sources')
                    ->limit(15),
                Tables\Columns\BooleanColumn::make('candidate.running_candidate.show')
                    ->label('Show'),
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
                    Tables\Actions\Action::make('Add Required Stance')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-required-stances', $record)),
                    Tables\Actions\Action::make('Add Promise')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-promises', $record)),
                    Tables\Actions\Action::make('Add Other Stances')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-other-stances', $record)),
                    Tables\Actions\Action::make('Add Photos')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-photos', $record)),
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
            'add-required-stances' => Pages\AddCandidateRequiredStance::route('/{record}/add-required-stances'),
            'add-promises' => Pages\AddCandidatePromises::route('/{record}/add-promises'),
            'add-other-stances' => Pages\AddCandidateOtherStances::route('/{record}/add-other-stances'),
            'add-photos' => Pages\AddManualCandidatePhotos::route('/{record}/add-photos'),
        ];
    }
}
