<?php

namespace App\Http\Livewire\CandidateEdit;

use App\Models\CandidatePromise;
use Livewire\Component;

class AddPromise extends Component
{
    public CandidatePromise $promise;

    public $candiate_id;

    protected $rules = [
        'promise.promise' => 'required',
        'promise.plan' => 'required'
    ];

    public function mount($candidate_id)
    {
        $this->promise = new CandidatePromise();
        $this->candidate_id = $candidate_id;
    }

    public function add_promise()
    {
        $this->validate();
        
        $this->promise->candidate_id = $this->candidate_id;
        $this->promise->order = 5;
        $this->promise->save();

        $this->emitUp('promise-flash');
    }

    public function render()
    {
        return view('livewire.candidate-edit.add-promise');
    }
}
