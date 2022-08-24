<?php

namespace App\Http\Livewire\Groups;

use App\Mail\GroupApplicationSubmitted;
use App\Models\GroupApplication;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class PoliticalGroupApplication extends Component
{
    public GroupApplication $application;
    public $previous_application;

    protected $rules = [
        'application.name' => 'required|string',
        'application.description' => 'required|string',
        'application.email' => 'required|email',
        'application.location' => 'required',
        'application.state' => 'required',
    ];

    public function apply()
    {
        //Make sure that someone doesn't submit a request if they have an application
        if(!is_null($this->previous_application)) {
            return;
        }

        $this->validate();

        $this->application->status = "submitted";
        $this->application->user_id = auth()->id();
        $this->application->save();

        $this->previous_application = $this->application;
        session()->flash('message', 'You have submitted an application, we will email you updates as we process it.');

        Mail::to('thepeople@whatsinyourballot.com')->send(new GroupApplicationSubmitted());
    }

    public function mount()
    {
        $this->previous_application = GroupApplication::firstWhere('user_id', auth()->id());
        $this->application = new GroupApplication();
    }

    public function render()
    {
        return view('livewire.groups.political-group-application');
    }
}
