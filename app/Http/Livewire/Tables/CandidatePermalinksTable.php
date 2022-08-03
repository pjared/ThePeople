<?php

namespace App\Http\Livewire\Tables;

use App\Models\CandidatePermaLink;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CandidatePermalinksTable extends LivewireDatatable
{
    public $model = CandidatePermaLink::class;

    public function columns()
    {
        return [
            Column::name('candidate.name')
                ->label('Candidate Name'),
            NumberColumn::name('candidate_id')
                ->label('Candidate ID'),
            Column::name('candidate_link')
                ->label('Candidate\'s Link')
                ->editable(),
            Column::name('perma_link')
                ->label('Perma Link Ending')
                ->editable(),
        ];
    }
}
