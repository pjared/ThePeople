<?php

namespace App\Http\Livewire\Tables;

use App\Models\PublicOfficePosition;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class OfficePositionsTable extends LivewireDatatable
{
    public $model = PublicOfficePosition::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),
            Column::name('name')
                ->label('name')
                ->editable(),
            NumberColumn::name('years_per_term')
                ->label('Years Per Term')
                ->editable(),
            NumberColumn::name('limit_terms')
                ->label('Term Limits')
                ->editable(),
        ];
    }
}
