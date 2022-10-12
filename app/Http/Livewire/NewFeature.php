<?php

namespace App\Http\Livewire;

use App\Models\UserFlag;
use Livewire\Component;

/**
 * A class I made to mess around with new features. Testing only
 */
class NewFeature extends Component
{

    public function render()
    {
        return view('livewire.new-feature');
    }

    public function change_flag($flag_type, $flag_id, $flag_value, $flag_note) {
        if(! auth()) {
            return;
        }
        //Update the userFlag variable
        UserFlag::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'candidate_id' => 5,
                'ballot_id' => 1,
                'type' => $flag_type, // Promise, Donor, etc.
                'type_id' => $flag_id, // The id of the promise, donor, etc.'
            ],
            [
                'flag_type' => $flag_value,
                'note' => $flag_note,
            ],
        );
    }

    public function delete_flag($flag_type, $flag_id)
    {
        if(! auth()) {
            return;
        }
        UserFlag::where('user_id', auth()->id())
                        ->where('candidate_id', 5)
                        ->where('ballot_id', 1)
                        ->where('type',$flag_type)
                        ->where('type_id',$flag_id)
                        ->delete();
    }
}
