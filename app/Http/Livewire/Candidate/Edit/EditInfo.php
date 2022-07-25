<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditInfo extends Component
{
    use WithFileUploads;

    public Candidate $candidate;
    public $photo;

    protected $rules = [
        'candidate.party_name' => 'nullable|string',
        'candidate.contact_phone_number' => 'nullable',
        'candidate.phone_number' => 'nullable',
        'candidate.contact_email' => 'required|string',
        'candidate.email' => 'nullable',
        'candidate.site_link' => 'nullable',
    ];

    public function mount()
    {
        $this->candidate = Candidate::firstWhere('user_id', Auth::id());
    }

    public function render()
    {
        return view('livewire.candidate.edit.edit-info');
    }

    public function update_photo()
    {
        // dd('hi');
        $this->validate([
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);
        // dd('hi 1');
        if (isset($this->photo)) {
            // dd('hi');
            Auth::user()->updateProfilePhoto($this->photo);
        }
    }

    public function deleteProfilePhoto() {
        Auth::user()->deleteProfilePhoto($this->photo);
    }

    public function save_info() 
    {
        $this->validate();
        $this->candidate->save();

        session()->flash('update-info-success');
    }
}
