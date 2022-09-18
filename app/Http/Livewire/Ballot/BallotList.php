<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\Candidate;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class BallotList extends Component
{
    use WithPagination;

    // public $address_input;

    public function render()
    {
        // usleep(500);
        return view('livewire.ballot.ballot-list', [
            // 'candidate_searches' => empty($this->search) ? [] : Candidate::search($this->search)->paginate(5),
            // 'ballot_searches' => empty($this->search) ? [] : Ballot::search($this->search)->paginate(5),
        ]);
    }

    public function getBallotsProperty()
    {
        return Cache::rememberForever('ballots', function () {
            return Ballot::with('office', 'location')->withCount('candidates')->get();
        });
    }
}
