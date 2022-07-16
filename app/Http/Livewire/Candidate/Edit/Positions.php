<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\CandidateOfficePositions;
use Livewire\Component;

class Positions extends Component
{
    public CandidateOfficePositions $position;
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

        'position.position_name' => 'required',
        'position.year_start' => 'required|numeric',
        'position.year_end' => 'required|numeric',
        'position.description' => 'required',
    ];

    public function mount($candidate_id, $positions)
    {
        $this->candidate_id = $candidate_id;
        $this->positions = $positions;
        $this->position = new CandidateOfficePositions();
    }

    public function update_positions()
    {
        $this->validate([
            'positions.*.position_name' => 'required',
            'positions.*.year_start' => 'required|numeric',
            'positions.*.year_end' => 'required|numeric',
            'positions.*.description' => 'required'
        ]);
        
        $this->emitUp('position-update-flash');
        $this->positions->each->save();
    }

    public function delete_position($position_id)
    {
        $this->positions->find($position_id)->delete();
        $this->emitUp('position-delete-flash');
    }

    public function add_position()
    {
        $this->validate();
        
        $this->position->candidate_id = $this->candidate_id;
        $this->position->save();

        $this->emitUp('position-flash');
    }

    public function render()
    {
        return view('livewire.candidate.edit.positions');
    }
}
