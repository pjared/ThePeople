<?php

namespace App\Http\Livewire\Candidate;

use App\Models\Candidate;
use App\Models\ControversialOpinion;
use App\Models\UserFlag;
use Livewire\Component;

class Profile extends Component
{
    public Candidate $candidate;
    public $opinions;

    public function mount($candidate) {
        $this->candidate = $candidate;
        if ($candidate->ballot) {
            $this->opinions = $candidate->ballot->opinions;
        }
    }

    public function render()
    {
        return view('livewire.candidate.profile');
    }

    //Probably shouldn't submit these until the user hovers out of the area
    public function change_flag($flag_type, $flag_id, $flag_value) {
        //Update the userFlag variable
        UserFlag::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'candidate_id' => $this->candidate->id,
                'ballot_id' => $this->candidate->ballot->id,
                'type' => $flag_type, // Promise, Donor, etc.
                'type_id' => $flag_id, // The id of the promise, donor, etc.'
            ],
            [
                'flag_type' => $flag_value,
            ]
        );
    }

    public function delete_flag($flag_type, $flag_id)
    {
        UserFlag::where('user_id', auth()->id())
                        ->where('candidate_id',$this->candidate->id)
                        ->where('ballot_id',$this->candidate->ballot->id)
                        ->where('type',$flag_type)
                        ->where('type_id',$flag_id)
                        ->delete();
    }
}
