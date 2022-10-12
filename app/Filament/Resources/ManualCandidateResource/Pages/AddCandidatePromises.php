<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use App\Filament\Resources\ManualCandidateResource;
use App\Models\CandidatePromise;
use App\Models\ManualCandidate;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\Page;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class AddCandidatePromises extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static string $resource = ManualCandidateResource::class;

    protected static string $view = 'filament.resources.manual-candidate-resource.pages.add-candidate-promises';

    protected function getTableQuery(): Builder
    {
        // dd(CandidateRequiredStance::query()->where('candidate_id', $this->candidate_id));
        return CandidatePromise::query()->where('candidate_id', $this->candidate_id);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('promise'),
            TextColumn::make('plan')
                ,
        ];
    }

    protected function getTableActions(): array
    {
        return [
            DeleteAction::make(),
            Action::make('Edit')
                ->mountUsing(fn (Forms\ComponentContainer $form, CandidatePromise $record) => $form->fill([
                    'promise' => $record->promise,
                    'plan' => $record->plan,
                    'candidate_id' => $record->candidate_id,
                ]))
                ->action(function (CandidatePromise $record, array $data): void {
                    $record->promise = $data['promise'];
                    $record->plan = $data['plan'];
                    $record->save();
                })
                ->form([
                    TextInput::make('promise')
                        ->label('Promise')
                        ->required()
                        ->maxLength(255),
                    Textare::make('plan')
                        ->maxLength(65535),
                ]),
        ];
    }

    protected function getActions(): array
    {
        return [
            Action::make('Add Promise')->action(function (array $data): void {
                CandidatePromise::create([
                    'candidate_id' => $this->candidate_id,
                    'promise' => $data['promise'],
                    'plan' => $data['plan'],
                ]);
            })
            ->form([
                TextInput::make('promise')
                    ->label('Promise')
                    ->required()
                    ->maxLength(255),
                Textarea::make('plan')
                    ->maxLength(65535),
            ]),
        ];
    }

    public $candidate_id;

    public function mount(ManualCandidate $record) {
        $this->candidate_id = $record->candidate_id;
    }
}
