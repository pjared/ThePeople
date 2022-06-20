<?php

namespace App\Http\Livewire;

use App\Models\CandidateApplication;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CandidateApplicationPage extends Component
{
    public $previous_application;

    public $name;
    public $email;
    public $dob;
    // public $office_level;
    public $location;
    public $office_name;

    public function apply()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'office_name' => 'required',
            // 'office_level' => 'required',
            'dob' => 'required|date',
        ]);

        $candidate_application = new CandidateApplication();
        $candidate_application->user_id = Auth::user()->id;
        $candidate_application->name = $this->name;
        $candidate_application->email = $this->email;
        $candidate_application->location = $this->location;
        $candidate_application->office_name = $this->office_name;
        $candidate_application->dob = $this->dob;
        $candidate_application->status = "submitted";

        $candidate_application->save();
        $this->previous_application = $candidate_application;
        session()->flash('message', 'You have submitted an application, we will email you updates as we process it.');
    }

    public function mount()
    {
        $this->previous_application = CandidateApplication::firstWhere('user_id', Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.candidate-application-page');
    }
}
