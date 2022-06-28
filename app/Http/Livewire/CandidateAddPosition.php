<?php

namespace App\Http\Livewire;

use App\Models\CandidateOfficePositions;
use Livewire\Component;

class CandidateAddPosition extends Component
{
    public CandidateOfficePositions $position;
    public $candiate_id;

    protected $rules = [
        'position.position_name' => 'required',
        'position.year_start' => 'required|numeric',
        'position.year_end' => 'required|numeric',
        'position.description' => 'required',
    ];

    public function mount($candidate_id)
    {
        $this->position = new CandidateOfficePositions();
        $this->candidate_id = $candidate_id;
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
        return view('livewire.candidate-add-position');
    }
}
