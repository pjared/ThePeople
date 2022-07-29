<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\ImageOptimizer\OptimizerChainFactory;

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

    /**
     * Candidates are going to upload a photo.
     * The catch is, they don't know how to even use a computer. I would be surprised if a candidate
     * could tell me what image metadata is. So we're going to strip that for them.
     */
    public function update_photo()
    {
        // 2 Levels of validation. Make sure that it's an image first
        $this->validate([
            'photo' => 'image',
        ]);
        //Now lets run it through and optimizer
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($this->photo->getRealPath());

        // Now lets make sure that it's less than a mb
        $this->validate([
            'photo' => 'max:1024'
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
