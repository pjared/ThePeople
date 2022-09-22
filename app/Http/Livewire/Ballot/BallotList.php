<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\BallotPrecinct;
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
            $ballots  = Ballot::with('office', 'location')->withCount('candidates')->get();
            $ballots = $ballots->sortBy(function($ballot){
                return $ballot->name;
            });
            return $ballots;//Ballot::with('office', 'location')->withCount('candidates')->get();
        });
    }

    public function getUserPrecinctProperty()
    {
        if(auth()->user()) {
            return auth()->user()->voter_precinct;
        } else {
            return false;
        }
    }

    public function getUserBallotsProperty()
    {
        $precincts = BallotPrecinct::where('precinct_id', $this->user_precinct)->with(['ballot' => function($query){
            $query->withCount('candidates');
            $query->with('office', 'location');
        }])->take(10)->get();
        return $precincts;
    }
}
