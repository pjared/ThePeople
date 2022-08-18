<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use Filament\Tables;
use App\Filament\Resources\ManualCandidateResource;
use App\Models\CandidateRequiredStance;
use App\Models\ManualCandidate;
use Filament\Forms;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Builder;

class AddCandidateRequiredStance extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;
    protected static string $resource = ManualCandidateResource::class;

    protected static string $view = 'filament.resources.manual-candidate-resource.pages.add-candidate-required-stance';

    protected function getTableQuery(): Builder
    {
        return CandidateRequiredStance::query()->where('candidate_id', $this->candidate_id);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('required_stance.label'),
            Tables\Columns\TextColumn::make('candidate_reasoning')
                ,
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\DeleteAction::make(),
            Tables\Actions\Action::make('Edit')
                ->mountUsing(fn (Forms\ComponentContainer $form, CandidateRequiredStance $record) => $form->fill([
                    'candidate_id' => $record->candidate_id,
                    'required_stance_id' => $record->required_stance_id,
                    'candidate_reasoning' => $record->candidate_reasoning,
                ]))
                ->action(function (CandidateRequiredStance $record, array $data): void {
                    $record->candidate_reasoning = $data['candidate_reasoning'];
                    $record->save();
                })
                ->form([
                    Forms\Components\Textarea::make('candidate_reasoning')
                        ->label('Candidate Reasoning')
                        ->required(),
                ]),
        ];
    }

    public $candidate_id;

    public function mount(ManualCandidate $record) {
        $this->candidate_id = $record->candidate_id;
    }

}