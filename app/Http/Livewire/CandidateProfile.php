<?php

namespace App\Http\Livewire;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\CandidateStance;
use App\Models\ControversialOpinion;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use App\Models\RunningCandidates;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CandidateProfile extends Component
{
    use WithFileUploads;

    public $controversial_opinions;

    //Form Elements
    public $photo;
    public $name;
    public $dob;

    public $pol_leaning;
    public $sub_pol_leaning;
    public $political_party_id;

    public $office_level;
    public $location;
    public $office_name;
    public $email;


    public $bio;

    public $opinion_vals;


    public function mount()
    {
        //Get the list of controversial opinions
        $this->controversial_opinions = ControversialOpinion::all();
        
        //Attempt to find the candidate
        $candidate = Candidate::firstWhere('user_id', Auth::user()->id);

        //TODO: Grab the default values once properly saved in the save() function
        if($candidate) {
            //Set values to what the user has already input
            $this->dob = $candidate->dob;
            //TODO: ADD EMAIL AND NUMBER TO CANDIDATE
            if($candidate->email) {
                $this->email = $candidate->email;
            }
            $this->name = $candidate->name;
            $this->political_party_id = $candidate->party_id;
            $this->bio = $candidate->info;

            //TODO: ADD POLITICAL LEANING
            $this->pol_leaning = 'moderate';
            $this->sub_pol_leaning = 'moderate';
           
            $this->office_level = 'local';
            for($i = 0; $i < count($this->controversial_opinions); $i++) {
                $this->opinion_vals[] = "50";
            }
        } else {
            //Set default values for everything
            $this->pol_leaning = 'moderate';
            $this->sub_pol_leaning = 'moderate';
            $this->political_party_id = 0;
            $this->office_level = 'local';
            $this->name = Auth::user()->name;
            for($i = 0; $i < count($this->controversial_opinions); $i++) {
                $this->opinion_vals[] = "50";
            }
        }
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
            'email' => 'required|email',
            'location' => 'required',
            'office_name' => 'required',
            'dob' => 'required|date',
        ]);

        // $photo_id = Hash::make($this->name . $this->photo->temporaryUrl());
        $photo_id = $this->name;

        //Find the candidate, if not return a new one
        $candidate = Candidate::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'name' => Auth::user()->name,
                'dob' => $this->dob,
                'info' => $this->bio,
                'party_id' => $this->political_party_id,
                'image_id' => $photo_id,
                'signup_date' => Carbon::now()->format('d/m/Y'),
                'email' => $this->email,
            ]
        );

        // Create the candidate Stances
        //TODO: Allow the candidate to put in info
        $index = 0;
        // dd($this->opinion_vals);
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

        // Make sure the location is valid
        $location = Location::where('name', $this->location)->where('type', $this->office_level)->first();
        if(!$location) {
            return;
        }

        // Make sure the office is valid
        $public_office = PublicOfficePosition::where('name', $this->office_name)->first();
        if(!$public_office) {
            return; //TODO: add a message here
        }

        //Get the ballot
        $ballot = Ballot::where('location_id', $location->id)->where('public_office_id', $public_office->id)->first();
        // Update/Create the running candidate pivot
        RunningCandidates::updateOrCreate(
            [
                'ballot_id' => $ballot->id,
                'candidate_id' => $candidate->id,
            ],
            [
                'entered_race_date' => Carbon::today()->format('d/m/Y'),
                'ended_race_date' => Carbon::today()->format('d/m/Y'),
            ]
        );

        //Try to find the image first, and then if not store it.
        $this->photo->store('photo');
    }

    public function render()
    {
        //TODO: Get the location depending on if the candidate has chosen local, county, district, or state
        return view('livewire.candidate-profile');
    }
}
