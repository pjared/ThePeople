<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use App\Filament\Resources\ManualCandidateResource;
use App\Models\CandidateOpinion;
use App\Models\ManualCandidate;
use Filament\Forms;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\Page;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class AddCandidateOtherStances extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static string $resource = ManualCandidateResource::class;
    protected static string $view = 'filament.resources.manual-candidate-resource.pages.add-candidate-other-stances';

    public $candidate_id;
    public function mount(ManualCandidate $record) {
        $this->candidate_id = $record->candidate_id;
    }

    protected function getTableQuery(): Builder
    {
        return CandidateOpinion::query()->where('candidate_id', $this->candidate_id);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name'),
            TextColumn::make('stance')
                ->limit(80),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('Edit')
                ->mountUsing(fn (Forms\ComponentContainer $form, CandidateOpinion $record) => $form->fill([
                    'name' => $record->name,
                    'stance' => $record->stance,
                ]))
                ->action(function (CandidateOpinion $record, array $data): void {
                    $record->name = $data['name'];
                    $record->stance = $data['stance'];
                    $record->save();
                })
                ->form([
                    TextInput::make('name')
                        ->required(),
                    Textarea::make('stance'),
                ]),
            DeleteAction::make(),
        ];
    }


    protected function getActions(): array
    {
        return [
            Action::make('Add Stance')->action(function (array $data): void {
                CandidateOpinion::create([
                    'candidate_id' => $this->candidate_id,
                    'name' => $data['name'],
                    'stance' => $data['stance'],
                ]);
                })
                ->form([
                    TextInput::make('name')
                        ->label('Stance title')
                        ->required()
                        ->maxLength(255),
                    Textarea::make('stance')
                        ->maxLength(65535),
                ]),
        ];
    }

}
