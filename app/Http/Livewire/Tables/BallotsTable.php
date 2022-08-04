<?php

namespace App\Http\Livewire\Tables;

use App\Models\Ballot;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\LabelColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Traits\CanPinRecords;

class BallotsTable extends LivewireDatatable
{
    public $model = Ballot::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),
            DateColumn::name('voting_date')
                ->label('Voting Date')
                ->editable(),
            NumberColumn::name('office_id')
                ->label('Office ID')
                ->editable(),
            NumberColumn::name('office.name')
                ->label('Office Name')
                ->searchable(),
            NumberColumn::name('location_id')
                ->label('Location ID')
                ->editable(),
            NumberColumn::name('location.name')
                ->label('Location Name')
                ->searchable(),
        ];
    }
}