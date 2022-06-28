<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\CandidateStance;
use App\Models\ControversialOpinion;
use App\Models\PoliticalParty;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CandidateEditProfile extends Component
{
    use WithFileUploads;

    public Candidate $candidate;

    public $photo;
    public $new_position;
    public $start_year;
    public $end_year;
    public $position_text;

    public $political_leanings;
    public $sub_political_leanings;
    public $political_parties;

    public $show;

    public $listeners = [
        'opinion-flash' => 'opinion_flash',
        'promise-flash' => 'promise_flash',
        'position-flash' => 'position_flash',
        'promise-update-flash' => 'promise_update_flash',
        'promise-delete-flash' => 'promise_delete_flash',
        'position-update-flash' => 'position_update_flash',
        'position-delete-flash' => 'position_delete_flash',
    ];

    protected $rules = [
        'candidate.bio' => 'required|string|max:500',
        'candidate.party_id' => 'required|string|max:500',
        'candidate.political_leaning' => 'required|string|max:500',
        'candidate.sub_political_leaning' => 'required|string|max:500',
        'candidate.contact_phone_number' => 'required|string|max:500',
        'candidate.phone_number' => 'required|string|max:500',
        'candidate.contact_email' => 'required|string|max:500',
        'candidate.email' => 'required|string|max:500',
        'candidate.party_id' => 'required',
    ];

    public function mount()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::user()->id);

        //Get the list of controversial opinions for that ballot
        if($this->candidate->ballot) {
            // Type is stored in location, so grab it
            $opinion_type_id = $this->candidate->ballot->location->opinion_type_id;
            $controversial_opinions = ControversialOpinion::where('type_id', $opinion_type_id)->get();
        } else {
            //For now just give them the general controversial opinions
            $controversial_opinions = ControversialOpinion::where('type_id', 1)->get();
        }

        //Create stance if it doesn't exist
        $candidate_stances = $this->candidate->stances;
        foreach($controversial_opinions as $opinion) {
            $candidate_stance = $candidate_stances->firstWhere('controversial_opinion_id', $opinion->id);
            if (is_null($candidate_stance)) {
                $stance = new CandidateStance();
                $stance->candidate_id = $this->candidate->id;
                $stance->controversial_opinion_id = $opinion->id;
                $stance->value = 50;
                $stance->info = "";
                $stance->link = '';
                $stance->save();
            }
        }

        $this->political_parties = PoliticalParty::all();
        $this->political_leanings = ['Centrist', 'Authoritarian', 'Libertarian', 'Left', 'Right', 'Moderate'];
        $this->sub_political_leanings = ['None', 'Centrist', 'Authoritarian', 'Libertarian', 'Left', 'Right'];
    }

    public function save_info() 
    {
        $this->validate([
            'candidate.contact_email' => 'required|email',
            'candidate.political_leaning' => 'required',
            'candidate.sub_political_leaning' => 'required',
            'candidate.party_id' => 'required',
        ]);

        $this->candidate->save();
        session()->flash('update-info-success');
        if($this->candidate->running_candidate) {
            $this->candidate->running_candidate->show = $this->show;
            $this->candidate->running_candidate->save();
        }
    }

    public function save_bio() 
    {
        $this->validate([
            'candidate.bio' => 'required',
        ]);

        $this->candidate->save();
        session()->flash('update-bio-success');
    }

    public function render()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::user()->id);
        return view('livewire.candidate-edit-profile');
    }

    /* EVENTS */
    public function promise_flash() {
        $this->emit('refreshPromiseComponent');
        session()->flash('update-promise-success', "Promise was added");
    }

    public function promise_update_flash() {
        session()->flash('update-promise-success', "Promises updated");
    }

    public function promise_delete_flash() {
        $this->emit('refreshPromiseComponent');
        session()->flash('update-promise-failure', "Promise was deleted");
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