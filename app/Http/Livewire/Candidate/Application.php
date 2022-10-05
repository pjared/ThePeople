<?php

namespace App\Http\Livewire\Candidate;

use App\Mail\ApplicationSubmitted;
use App\Models\CandidateApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Application extends Component
{
    public CandidateApplication $application;
    public $previous_application;

    public $first_name;
    public $last_name;

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'application.email' => 'required|email',
        'application.location' => 'required',
        'application.office_name' => 'required',
        'application.state' => 'required',
        'application.dob' => 'required|date',
        'application.phone_number' => 'nullable|regex:/[0-9]{10}/',
        'application.entered_race_date' => 'nullable|date',
    ];

    public function apply()
    {
        $this->validate();

        //Make sure that someone doesn't submit a request if they have an application
        if(! is_null($this->previous_application)) {
            return;
        }

        $this->application->name = $this->first_name . ' ' . $this->last_name;
        $this->application->status = "submitted";
        $this->application->user_id = Auth::user()->id;
        $this->application->save();

        $this->previous_application = $this->application;
        session()->flash('message', 'You have submitted an application, we will email you updates as we process it.');

        Mail::to('thepeople@whatsinyourballot.com')->send(new ApplicationSubmitted());
    }

    public function mount()
    {
        $this->previous_application = CandidateApplication::firstWhere('user_id', Auth::user()->id);
        $this->application = new CandidateApplication();
    }

    public function render()
    {
        return view('livewire.candidate.application');
    }
}
