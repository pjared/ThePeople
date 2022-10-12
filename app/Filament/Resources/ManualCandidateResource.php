<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManualCandidateResource\Pages\AddCandidateOtherStances;
use App\Filament\Resources\ManualCandidateResource\Pages\AddCandidatePromises;
use App\Filament\Resources\ManualCandidateResource\Pages\AddCandidateRequiredStance;
use App\Filament\Resources\ManualCandidateResource\Pages\AddCandidateStance;
use App\Filament\Resources\ManualCandidateResource\Pages\AddManualCandidatePhotos;
use App\Filament\Resources\ManualCandidateResource\Pages\ManageManualCandidates;
use App\Models\ManualCandidate;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;

class ManualCandidateResource extends Resource
{
    protected static ?string $model = ManualCandidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Candidate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('candidate_id')
                    ->hidden()
                    ->required(),
                TextInput::make('note')
                    ->maxLength(255),
                Textarea::make('sources')
                    ->maxLength(65535),
                Toggle::make('candidate.show'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('candidate.name')
                    ->searchable(),
                TextColumn::make('note')
                    ->limit(15),
                TextColumn::make('sources')
                    ->limit(15),
                BooleanColumn::make('candidate.show')
                    ->label('Show'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                ActionGroup::make([
                    Action::make('Add Stances')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-stances', $record)),
                    Action::make('Add Required Stance')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-required-stances', $record)),
                    Action::make('Add Promise')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-promises', $record)),
                    Action::make('Add Other Stances')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-other-stances', $record)),
                    Action::make('Add Photos')
                        ->url(fn (ManualCandidate $record): string => route('filament.resources.manual-candidates.add-photos', $record)),
                ])

            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageManualCandidates::route('/'),
            'add-stances' => AddCandidateStance::route('/{record}/add-stances'),
            'add-required-stances' => AddCandidateRequiredStance::route('/{record}/add-required-stances'),
            'add-promises' => AddCandidatePromises::route('/{record}/add-promises'),
            'add-other-stances' => AddCandidateOtherStances::route('/{record}/add-other-stances'),
            'add-photos' => AddManualCandidatePhotos::route('/{record}/add-photos'),
        ];
    }
}
