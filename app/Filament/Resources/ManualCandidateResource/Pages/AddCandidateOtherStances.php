<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use Filament\Tables;
use App\Filament\Resources\ManualCandidateResource;
use App\Models\Candidate;
use App\Models\CandidateOpinion;
use App\Models\ManualCandidate;
use Filament\Resources\Pages\Page;
use Filament\Pages\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms;

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
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('stance')
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
                CandidateOpinion::create([
                    'candidate_id' => $this->candidate_id,
                    'name' => $data['name'],
                    'stance' => $data['stance'],
                ]);
            })
            ->form([
                Forms\Components\TextInput::make('name')
                    ->label('Stance title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('stance')
                    ->maxLength(65535),
            ]),
        ];
    }

}
