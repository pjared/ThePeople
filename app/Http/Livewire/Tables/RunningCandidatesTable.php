<?php

namespace App\Http\Livewire\Tables;

use App\Models\RunningCandidates;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class RunningCandidatesTable extends LivewireDatatable
{
    public $model = RunningCandidates::class;

    public function columns()
    {
        return [
            Column::name('candidate.name')
                ->label('Candidate Name')
                ->searchable(),
            // Column::name('ballot')
            //     ->label('Description')
            //     ->editable(),
            NumberColumn::name('ballot.id')
                ->label('Ballot ID')
                ->editable()
                ->searchable(),
        ];
    }
}
