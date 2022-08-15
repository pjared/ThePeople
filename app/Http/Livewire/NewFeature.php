<?php

namespace App\Http\Livewire;

use App\Models\UserFlag;
use Livewire\Component;

class NewFeature extends Component
{
    public function render()
    {
        return view('livewire.new-feature');
    }

    //Probably shouldn't submit these until the user hovers out of the area
    public function change_flag($flag_type, $flag_id, $flag_value) {
        //Update the userFlag variable
        UserFlag::updateOrCreate(
            [
                'user_id' => 1,
                'candidate_id' => 1,
                'ballot_id' => 1,
                'type' => $flag_type, // Promise, Donor, etc.
                'type_id' => $flag_id, // The id of the promise, donor, etc.'
            ],
            [
                'flag_type' => $flag_value,
            ]
        );
    }
}
