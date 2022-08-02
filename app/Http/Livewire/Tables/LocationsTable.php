<?php

namespace App\Http\Livewire\Tables;

use App\Models\Location;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class LocationsTable extends LivewireDatatable
{
    public $model = Location::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),
            Column::name('name')
                ->label('name')
                ->editable(),
            Column::name('state')
                ->label('Years Per Term')
                ->editable(),
            Column::name('type')
                ->label('Type')
                ->editable(),
            NumberColumn::name('Population')
                ->label('Population')
                ->editable(),
        ];
    }
}
