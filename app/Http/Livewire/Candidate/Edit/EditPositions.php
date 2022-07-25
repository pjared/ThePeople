<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use App\Models\CandidateOfficePositions;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditPositions extends Component
{
    public Candidate $candidate;
    public CandidateOfficePositions $position;
    public $positions;

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

    public function mount()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::id());

        $this->positions = $this->candidate->previous_positions;
        $this->position = new CandidateOfficePositions();
    }

    public function render()
    {
        return view('livewire.candidate.edit.edit-positions');
    }

    public function update_positions()
    {
        $this->validate([
            'positions.*.position_name' => 'required',
            'positions.*.year_start' => 'required|numeric',
            'positions.*.year_end' => 'required|numeric',
            'positions.*.description' => 'required'
        ]);
        
        session()->flash('update-positions-success');
        $this->positions->each->save();
    }

    public function delete_position($position_id)
    {
        $this->positions->find($position_id)->delete();
        $this->emitUp('update-positions-failure');
    }

    public function add_position()
    {
        $this->validate();
        
        $this->position->candidate_id = $this->candidate_id;
        $this->position->save();

        $this->emitUp('update-positions-success');
    }
}
