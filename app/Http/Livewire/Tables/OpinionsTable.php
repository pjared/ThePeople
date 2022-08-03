<?php

namespace App\Http\Livewire\Tables;

use App\Models\ControversialOpinion;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class OpinionsTable extends LivewireDatatable
{
    public $model = ControversialOpinion::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),
            Column::name('name')
                ->label('name')
                ->editable(),
            Column::name('description')
                ->label('Description')
                ->editable(),
            NumberColumn::name('votes')
                ->label('Votes')
                ->editable(),
        ];
    }
}
