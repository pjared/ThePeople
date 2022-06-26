<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\CandidateOfficePositions;
use App\Models\CandidatePromise;
use App\Models\CandidateStance;
use App\Models\ControversialOpinion;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use App\Models\RunningCandidates;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CandidateEditProfile extends Component
{
    use WithFileUploads;

    public $controversial_opinions;
    public $candidate;
    // public $promises;

    //Form Elements
    public $photo;
    public $name;
    public $dob;
    // public $office_level;
    // public $location;
    // public $office_name;
    public $email;
    public $show;

    public $pol_leaning;
    public $sub_pol_leaning;
    public $political_party_id;

    public $bio;

    public $opinion_vals;

    public $new_promise;
    public $promise_plan;
    public $new_position;
    public $start_year;
    public $end_year;
    public $position_text;

    public function mount()
    {
        //Get the list of controversial opinions
        $this->controversial_opinions = ControversialOpinion::all();
        
        //Find the candidate (Candidate created after they are approved)
        $candidate = Candidate::firstWhere('user_id', Auth::user()->id);

        // If we don't find the candidate, give them an error and prompt them to contact us
        if(!$candidate) {
           //TODO: Return and error and say they need to contact customer support
           return;
        }

        $this->candidate = $candidate;

        //Load whether or not to show the profile
        if($candidate->running_candidate) {
            $this->show = $candidate->running_candidate;
        } else {
            $this->show = false;
        }
        
        //Load their stances on controversial opinons
        if($candidate->stances->isNotEmpty()) {
            foreach($candidate->stances as $stance) {
                $this->opinion_vals[] = $stance->value;
            }
        } else {
            //Set a default (this is the first time they are editing)
            for($i = 0; $i < count($this->controversial_opinions); $i++) {
                $this->opinion_vals[] = "50";
            }         
        }
        
        //Set values to what the user has already input during signup
        $this->dob = $candidate->dob;
        if($candidate->email) {
            $this->email = $candidate->email;
        }
        $this->name = $candidate->name;
        $this->bio = $candidate->info;

        //TODO: Add political party correctly (for internal stats)
        $this->political_party_id = $candidate->party_id;
        //TODO: ADD POLITICAL LEANING
        // $this->pol_leaning = 'moderate';
        // $this->sub_pol_leaning = 'moderate';
       
        // $this->office_level = 'local';
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
            'email' => 'required|email',
            // 'location' => 'required',
            // 'office_name' => 'required',
            'dob' => 'required|date',
        ]);

        // $photo_id = Hash::make($this->name . $this->photo->temporaryUrl());
        $photo_id = $this->name;

        
        // dd($photo_id);
        //Find the candidate, if not return a new one
        $candidate = Candidate::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'dob' => $this->dob,
                'info' => $this->bio,
                // 'party_id' => $this->political_party_id,
                'image_id' => $photo_id,
                'signup_date' => Carbon::now()->format('d/m/Y'),
            ]
        );
        // dd($candidate);
        

        // Create the candidate Stances
        //TODO: Allow the candidate to put in info
        $index = 0;
        foreach($this->controversial_opinions as $controversial_opinion) {
            CandidateStance::updateOrCreate(
                [
                    'candidate_id' => $candidate->id,
                    'controversial_opinion_id' => $controversial_opinion->id,
                ],
                [
                    'value' => $this->opinion_vals[$index],                    
                    'info' => '',
                    'link' => '',
                ]
            );
            $index++;
        }

        RunningCandidates::where('candidate_id', $candidate->id,)->update(
            [
                'show' => $this->show
            ]
        );

        //Try to find the image first, and then if not store it.
        $this->photo->store('photo');
    }

    public function add_promise() {
        $this->validate([
            'new_promise' => 'required',
            'promise_plan' => 'required',
        ]);

        // dd($this->new_promise, $this->promise_text);
        $promise = new CandidatePromise();
        $promise->candidate_id = $this->candidate->id;
        $promise->promise = $this->new_promise;
        $promise->plan = $this->promise_plan;
        $promise->order = 1;
        $promise->save();
    }

    public function add_position() {
        $this->validate([
            'new_position' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'position_text' => 'required',
        ]);

        // dd($this->candidate->id, $this->new_position, $this->start_year, $this->end_year,$this->position_text);
        $position = new CandidateOfficePositions();
        $position->candidate_id = $this->candidate->id;
        $position->position_name = $this->new_position;
        $position->year_start = $this->start_year;
        $position->year_end = $this->end_year;
        $position->description = $this->position_text;
        $position->save();
    }

    public function render()
    {
        //TODO: Get the location depending on if the candidate has chosen local, county, district, or state
        return view('livewire.candidate-edit-profile');
    }
}
