<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use App\Filament\Resources\ManualCandidateResource;
use App\Models\CandidateRequiredStance;
use App\Models\ManualCandidate;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;

class AddCandidateRequiredStance extends Page implements HasTable
{
    use InteractsWithTable;

    protected static string $resource = ManualCandidateResource::class;
    protected static string $view = 'filament.resources.manual-candidate-resource.pages.add-candidate-required-stance';

    public $candidate_id;

    protected function getTableQuery(): Builder
    {
        return CandidateRequiredStance::query()->where('candidate_id', $this->candidate_id);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('required_stance.label'),
            TextColumn::make('candidate_reasoning'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            DeleteAction::make(),
            Action::make('Edit')
                ->mountUsing(fn (ComponentContainer $form, CandidateRequiredStance $record) => $form->fill([
                    'candidate_id' => $record->candidate_id,
                    'required_stance_id' => $record->required_stance_id,
                    'candidate_reasoning' => $record->candidate_reasoning,
                ]))
                ->action(function (CandidateRequiredStance $record, array $data): void {
                    $record->candidate_reasoning = $data['candidate_reasoning'];
                    $record->save();
                })
                ->form([
                    Textarea::make('candidate_reasoning')
                        ->label('Candidate Reasoning')
                        ->required(),
                ]),
        ];
    }

    public function mount(ManualCandidate $record) {
        $this->candidate_id = $record->candidate_id;
    }

}
