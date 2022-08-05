<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class EditRequiredStances extends Component
{
    public Candidate $candidate;
    public $ballot;
    public $required_opinions;
    public $required_stances;

    public $rules = [
        'required_stances.*.candidate_reasoning' => 'nullable|string',
    ];

    public function mount() {
        $this->candidate = Candidate::firstWhere('user_id', Auth::user()->id);

        $this->required_stances = $this->candidate->required_stances;
    }

    public function render()
    {
        $this->required_opinions = collect();
        $this->ballot = $this->candidate->ballot;
        $opinions = $this->ballot ? $this->ballot->opinions : [];
        foreach($opinions as $opinion) {
            if(count($opinion->required_stances) >= 1) {
                $this->required_opinions->add($opinion);
            }
        }
        return view('livewire.candidate.edit.edit-required-stances');
    }

    public function save_stances()
    {
        $this->validate();
        $this->required_stances->each->save();
    }
}
