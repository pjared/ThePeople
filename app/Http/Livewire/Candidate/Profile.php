<?php

namespace App\Http\Livewire\Candidate;

use App\Models\Candidate;
use App\Models\Flag;
use App\Models\UserFlag;
use Livewire\Component;

class Profile extends Component
{
    public Candidate $candidate;
    public $opinions;
    public $is_manual;
    public $user_comment;
    public Flag $current_flag;

    protected $listeners = [
        'flagSelected' => 'updateCurrentFlag'
    ];

    public function mount($candidate) {
        $this->candidate = $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name',
                                'events', 'required_stances', 'stances', 'promises', 'videos', 'previous_positions');
        if ($candidate->ballot) {
            $this->opinions = $candidate->ballot->opinions;
        } else {
            $this->opinions = [];
        }

        if(is_null($candidate->user_id)) {
            $this->is_manual = true;
        }
    }

    public function render()
    {
        return view('livewire.candidate.profile');
    }

    public function updateCurrentFlag(Flag $flag) {
        // Update the user's current flag
        $this->current_flag = $flag;
    }

    public function change_flag($flag_value, $flag_note) {
        // Auth Check
        if(! auth()) {
            return;
        }

        //Update the flag. If it did not exist, it was created before the emit call
        $this->current_flag->update(
            [
                'flag_type' => $flag_value,
                'note' => $flag_note,
            ]
            );
    }

    public function delete_flag($flag_type, $flag_id)
    {
        if(! auth()) {
            return;
        }
        UserFlag::where('user_id', auth()->id())
                        ->where('candidate_id',$this->candidate->id)
                        ->where('ballot_id',$this->candidate->ballot->id)
                        ->where('type',$flag_type)
                        ->where('type_id',$flag_id)
                        ->delete();
    }

    public function add_comment()
    {
        if(! auth()) {
            return;
        }
        $this->candidate->commentAsUser(auth()->user(), $this->user_comment);
        $this->user_comment = "";
        // dd(\App\Models\Comment::all());
    }
}
