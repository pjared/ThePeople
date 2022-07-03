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
        $candidate->contact_email = $application->email;
        $candidate->bio = "";
        $candidate->dob = $application->dob;
        $candidate->signup_date = Carbon::now();
        $candidate->state = $application->state;
        $candidate->contact_phone_number = $application->phone_number;
        $candidate->user_id = $user_id;
        $candidate->party_id = 3;
        $candidate->political_leaning = 'Centrist';
        $candidate->save();

        //Change the status of the candidate
        $application->status = "accepted";
        $application->candidate_id = $candidate->id;
        $application->save();
    }

    public function rejectCandidate($user_id)
    {
        //Find application, update status to 'rejected'  
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
