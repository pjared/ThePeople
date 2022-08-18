<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use Filament\Tables;
use App\Filament\Resources\ManualCandidateResource;
use App\Models\Candidate;
use App\Models\CandidateStance;
use App\Models\ManualCandidate;
use Filament\Resources\Pages\Page;
use Filament\Pages\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;

class AddCandidateStance extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static string $resource = ManualCandidateResource::class;

    protected static string $view = 'filament.resources.manual-candidate-resource.pages.add-candidate-stance';

    public $candidate_id;
    public $opinions;

    public function mount(ManualCandidate $record) {
        $this->candidate_id = $record->candidate_id;
        $candidate = Candidate::find($this->candidate_id);
        $this->opinions = $candidate->ballot ? $candidate->ballot->opinions : collect();
    }

    protected function getTableQuery(): Builder
    {
        return CandidateStance::query()->where('candidate_id', $this->candidate_id);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('opinion.name'),
            Tables\Columns\TextColumn::make('stance_label'),
            Tables\Columns\TextColumn::make('stance_reasoning')
                ->limit(80),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Tables\Actions\DeleteAction::make(),
        ];
    }


    protected function getActions(): array
    {
        return [
            Action::make('Add Stance')->action(function (array $data): void {
                CandidateStance::create([
                    'candidate_id' => $this->candidate_id,
                    'controversial_opinion_id' => $data['controversial_opinion_id'],
                    'stance_label' => $data['stance_label'],
                    'stance_reasoning' => $data['stance_reasoning'],
                ]);
            })
            ->form([
                Forms\Components\Select::make('controversial_opinion_id')
                    ->options($this->opinions->pluck('name', 'id'))
                    ->required(),
                Forms\Components\TextInput::make('stance_label')
                    ->label('Stance title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('stance_reasoning')
                    ->maxLength(65535),
            ]),
        ];
    }

}