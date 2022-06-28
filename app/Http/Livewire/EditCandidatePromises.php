<?php

namespace App\Http\Livewire;

use App\Models\CandidatePromise;
use Livewire\Component;

class EditCandidatePromises extends Component
{
    public $candidate_id;

    public $promises;

    protected $rules = [
        'promises.*.promise' => 'required',
        'promises.*.plan' => 'required',
    ];

    public function mount($candidate_id, $promises)
    {
        $this->candidate_id = $candidate_id;
        $this->promises = $promises;
    }

    public function render()
    {
        return view('livewire.edit-candidate-promises');
    }
}
