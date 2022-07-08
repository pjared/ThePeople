<?php

namespace App\Http\Livewire\Candidate\Edit;

use Livewire\Component;

class Positions extends Component
{
    public $positions;
    public $candidate_id;

    protected $listeners = [
        'refreshPositionComponent' => '$refresh',
    ];

    protected $rules = [
        'positions.*.position_name' => 'required',
        'positions.*.year_start' => 'required|numeric',
        'positions.*.year_end' => 'required|numeric',
        'positions.*.description' => 'required',
    ];

    public function mount($candidate_id, $positions)
    {
        $this->candidate_id = $candidate_id;
        $this->positions = $positions;
    }

    public function update_positions()
    {
        $this->validate();
        $this->emitUp('position-update-flash');
        $this->positions->each->save();
    }

    public function delete_position($position_id)
    {
        $this->positions->find($position_id)->delete();
        $this->emitUp('position-delete-flash');
    }

    public function render()
    {
        return view('livewire.candidate.edit.positions');
    }
}
