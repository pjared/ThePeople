<?php

namespace App\Http\Livewire\Tables;

use App\Models\BallotOpinions;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class BallotOpinionsTable extends LivewireDatatable
{
    public $model = BallotOpinions::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),
            NumberColumn::name('ballot_id')
                ->label('Ballot ID')
                ->searchable()
                ->editable(),
            NumberColumn::name('controversial_opinion_id')
                ->label('Controversial Opinion ID')
                ->editable(),
            Column::name('controversial_opinion.name')
                ->label('Controversial Opinion Name'),
        ];
    }
}
