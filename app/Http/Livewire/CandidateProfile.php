<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\ControversialOpinion;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            // $this->email = $candidate->email;
            $this->name = $candidate->name;
            $this->political_party_id = $candidate->party_id;
            $this->bio = $candidate->info;

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
        $candiate = Candidate::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'name' => Auth::user()->name,
                'dob' => $this->dob,
                'info' => $this->bio,
                'party_id' => $this->political_party_id,
                'image_id' => $photo_id,
                'signup_date' => Carbon::now()->format('d/m/Y'),
            ]
        );

        //TODO: Create the running candidate and add to ballot withh location and office name
        //TODO: Create the candidate stances with the values from controversial opinions.
        $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.candidate-profile');
    }
}
