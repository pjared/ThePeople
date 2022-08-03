<?php

namespace App\Http\Livewire\Tables;

use App\Models\Candidate;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CandidatesTable extends LivewireDatatable
{
    public $model = Candidate::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),
            Column::name('name')
                ->label('name')
                ->editable(),
            DateColumn::name('dob')
                ->label('State')
                ->editable(),
            Column::name('contact_email')
                ->label('Contact Email')
                ->editable(),
            Column::name('contact_phone_number')
                ->label('Contact Phone Number')
                ->editable(),
            Column::name('state')
                ->label('Home State')
                ->editable(),
        ];
    }
}
