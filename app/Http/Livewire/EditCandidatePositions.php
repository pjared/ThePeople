<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditCandidatePositions extends Component
{
    public $positions;
    public $candidate_id;

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

    public function render()
    {
        return view('livewire.edit-candidate-positions');
    }
}
