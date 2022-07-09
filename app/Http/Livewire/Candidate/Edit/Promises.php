<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\CandidatePromise;
use Livewire\Component;

class Promises extends Component
{
    public $candidate_id;

    public $promises;
    
    protected $listeners = [
        'refreshPromiseComponent' => '$refresh',
    ];

    protected $rules = [
        'promises.*.promise' => 'required',
        'promises.*.plan' => 'required',
    ];

    public function mount($candidate_id, $promises)
    {
        $this->candidate_id = $candidate_id;
        $this->promises = $promises;
    }

    public function update_promises()
    {
        $this->validate();
        $this->promises->each->save();
        $this->emitUp('promise-update-flash');
    }

    public function delete_promise($promise_id)
    {
        $this->promises->find($promise_id)->delete();
        $this->emitUp('promise-delete-flash');
    }

    public function render()
    {
        return view('livewire.candidate.edit.promises');
    }
}