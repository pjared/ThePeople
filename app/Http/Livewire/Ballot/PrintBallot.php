<?php

namespace App\Http\Livewire\Ballot;

use App\Mail\EmailBallotToUser;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class PrintBallot extends Component
{
    public $votes;
    public $ballot_sent;

    public function mount()
    {
        $this->votes = auth()->user()->votes->load('ballot', 'candidate:name');
        $this->ballot_sent = false;
    }

    public function render()
    {
        return view('livewire.ballot.print-ballot');
    }

    public function emailUserBallot($removed_ballots)
    {
        //Make sure that user is not sending an empty ballot
        if(count($removed_ballots) == count($this->votes)) {
            return;
        }
        //If they are getting sent an email
        if($this->ballot_sent) {
            return;
        }

        //Need to remove the ballots that the user has also removed
        $new_list = [];
        foreach($this->votes as $i => $vote) {
            //If the vote is not in array of removed ballots
            if(! in_array(strval($i), $removed_ballots)) {
                $new_list[$vote->ballot->name] = $vote->candidate->name;
            }
        }
        Mail::to(auth()->user())->send(new EmailBallotToUser($new_list));
        $this->ballot_sent = true;
    }
}
