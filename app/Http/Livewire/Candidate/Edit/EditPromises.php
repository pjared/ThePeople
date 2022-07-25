<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use App\Models\CandidatePromise;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditPromises extends Component
{
    public Candidate $candidate;

    public CandidatePromise $promise;
    public $promises;

    protected $rules = [
        'promises.*.promise' => 'required',
        'promises.*.plan' => 'required',
        'promise.promise' => 'required',
        'promise.plan' => 'required'
    ];

    public function mount()
    {
        $this->promise = new CandidatePromise();
        $this->candidate = Candidate::firstWhere('user_id', Auth::id());
        $this->promises = $this->candidate->promises;
    }

    public function render()
    {
        return view('livewire.candidate.edit.edit-promises');
    }

    public function add_promise()
    {
        $this->validate();
        
        $this->promise->candidate_id = $this->candidate->id;
        $this->promise->order = 5;
        $this->promise->save();

        session()->flash('update-promises-success');
    }

    public function update_promises()
    {
        $this->validate([
            'promises.*.promise' => 'required',
            'promises.*.plan' => 'required'
        ]);
        $this->promises->each->save();
        session()->flash('update-promises-success');
    }

    public function delete_promise($promise_id)
    {
        $this->promises->find($promise_id)->delete();
        session()->flash('update-promises-failure', 'Promise deleted');
    }
}
