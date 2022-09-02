<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class BallotList extends Component
{
    public $ballots = [];

    public function render()
    {
        return view('livewire.ballot.ballot-list');
    }

    public function load_ballots()
    {
        $this->ballots = Cache::rememberForever('ballots', function () {
            return Ballot::with('office', 'location')->withCount('candidates')->get();
        });
    }
}
