<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\CandidateApplication;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class AdminApproveCandidates extends Component
{
    public $applications;

    public function acceptCandidate($user_id)
    {
        //Set the user's role
        $user = User::find($user_id);
        $user->assignRole('candidate');

        //Get the application
        $application = CandidateApplication::firstWhere('user_id', $user_id);

        //Create a candidate
        $candidate = new Candidate();
        $candidate->name = $application->name;
        $candidate->email = $application->email;
        $candidate->dob = $application->dob;
        $candidate->signup_date = Carbon::now();
        $candidate->state = $application->state;
        $candidate->save();

        /*
        'dob' => Carbon::today()->subYear(rand(25, 55)),
                'signup_date' => Carbon::today()->subDays(rand(0, 365)),
                'party_id' => rand(1,3),
                'image_id' => strval(rand(1,3)), 
                'state' => 'Utah',
                 */


        //Change the status of the candidate
        
        $application->status = "accepted";
        $application->candidate_id = $candidate->id;
        $application->save();
    }

    public function rejectCandidate($user_id)
    {
        $application = CandidateApplication::firstWhere('user_id', $user_id);
        $application->status = "rejected";
        $application->save();
    }

    public function mount()
    {
        // $this->applications = CandidateApplication::where('status', 'submitted')->get();
    }

    public function render()
    {
        $this->applications = CandidateApplication::where('status', 'submitted')->get();

        return view('livewire.admin-approve-candidates');
    }
}
