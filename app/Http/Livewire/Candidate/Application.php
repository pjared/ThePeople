<?php

namespace App\Http\Livewire\Candidate;

use App\Mail\ApplicationSubmitted;
use App\Models\CandidateApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Application extends Component
{
    public $previous_application;

    public $name;
    public $email;
    public $phone_number;
    public $dob;
    public $state;
    public $location;
    public $office_name;

    public function apply()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'office_name' => 'required',
            'state' => 'required',
            'dob' => 'required|date',
            'phone_number' => 'nullable|regex:/[0-9]{10}/'
        ]);

        $candidate_application = new CandidateApplication();
        $candidate_application->user_id = Auth::user()->id;
        $candidate_application->name = $this->name;
        $candidate_application->email = $this->email;
        $candidate_application->phone_number = $this->phone_number;
        $candidate_application->location = $this->location;
        $candidate_application->office_name = $this->office_name;
        $candidate_application->state = $this->state;
        $candidate_application->dob = $this->dob;
        $candidate_application->status = "submitted";

        $candidate_application->save();
        $this->previous_application = $candidate_application;
        session()->flash('message', 'You have submitted an application, we will email you updates as we process it.');

        Mail::to('thepeople@whatsinyourballot.com')->send(new ApplicationSubmitted());
    }

    public function mount()
    {
        $this->previous_application = CandidateApplication::firstWhere('user_id', Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.candidate.application');
    }
}
