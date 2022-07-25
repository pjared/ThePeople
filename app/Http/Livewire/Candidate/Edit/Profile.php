<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use App\Models\CandidateStance;
use App\Models\ControversialOpinion;
use App\Models\PoliticalParty;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public Candidate $candidate;
    public $show;

    public $political_parties;

    public $listeners = [
        'opinion-flash' => 'opinion_flash',
        'promise-flash' => 'promise_flash',
        'position-flash' => 'position_flash',
        'promise-update-flash' => 'promise_update_flash',
        'promise-delete-flash' => 'promise_delete_flash',
        'position-update-flash' => 'position_update_flash',
        'position-delete-flash' => 'position_delete_flash',
    ];

    public function mount()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::user()->id);
        
        // $this->political_parties = PoliticalParty::all();
    }

    public function render()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::user()->id);
        return view('livewire.candidate.edit.profile');
    }



    /* EVENTS */
    /* EVENTS */
    public function promise_flash() {
        session()->flash('update-promise-success', "Promise was added");
        $this->emit('refreshPromiseComponent');   
    }

    public function promise_update_flash() {
        session()->flash('update-promise-success', "Promises updated");
        $this->emit('refreshPromiseComponent');   
    }

    public function promise_delete_flash() {
        session()->flash('update-promise-failure', "Promise was deleted");
        $this->emit('refreshPromiseComponent');   
    }

    public function position_flash() 
    {
        $this->emit('refreshPositionComponent');
        session()->flash('update-position-success', "Position was added");
    }

    public function position_update_flash() {
        session()->flash('update-position-success', "Positions updated");
    }

    public function position_delete_flash() {
        $this->emit('refreshPositionComponent');
        session()->flash('update-position-failure', "Position was deleted");
    }

    public function opinion_flash() 
    {
        session()->flash('update-stances-success');
    }
}