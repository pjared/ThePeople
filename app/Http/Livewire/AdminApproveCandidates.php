<?php

namespace App\Http\Livewire;

use App\Models\CandidateApplication;
use App\Models\User;
use Livewire\Component;

class AdminApproveCandidates extends Component
{
    public $applications;

    public function acceptCandidate($user_id)
    {
        $application = CandidateApplication::firstWhere('user_id', $user_id);
        $application->status = "accepted";
        $application->save();

        $user = User::find($user_id);
        $user->assignRole('candidate');
        $this->refreshApplicants();
    }

    public function rejectCandidate($user_id)
    {
        $application = CandidateApplication::firstWhere('user_id', $user_id);
        $application->status = "rejected";
        $application->save();
        $this->refreshApplicants();
    }

    public function refreshApplicants()
    {
        // $this->applications = CandidateApplication::where('status', '!=', 'accepted')->get();
        $this->applications = CandidateApplication::where('status', 'submitted')->get();
    }

    public function mount()
    {
        $this->refreshApplicants();
    }

    public function render()
    {
        return view('livewire.admin-approve-candidates');
    }
}
