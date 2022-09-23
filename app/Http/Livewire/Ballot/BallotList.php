<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\BallotPrecinct;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class BallotList extends Component
{
    use WithPagination;

    public $ballots;
    public $ballot_count = 4;
    public $more_ballots = true;

    // public $address_input;

    public function render()
    {
        $this->ballots = $this->all_ballots->take($this->ballot_count);
        return view('livewire.ballot.ballot-list', [
            // 'candidate_searches' => empty($this->search) ? [] : Candidate::search($this->search)->paginate(5),
            // 'ballot_searches' => empty($this->search) ? [] : Ballot::search($this->search)->paginate(5),
        ]);
    }

    public function load_ballots()
    {
        $this->ballot_count += 10;
        if($this->ballot_count >= count($this->all_ballots)) {
            $this->more_ballots = false;
        }
    }

    public function getAllBallotsProperty()
    {
        return Cache::rememberForever('ballots', function () {
            $ballots  = Ballot::with('office', 'location')->withCount('candidates')->get();
            $ballots = $ballots->sortBy(function($ballot){
                return $ballot->name;
            });
            return $ballots;
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
        // dd(Ballot::whereRelation('location','name' ,'District 57')->whereRelation('location','type' ,'congress_district')->first(), BallotPrecinct::firstWhere('ballot_id', 75));
        // dd(BallotPrecinct::where('precinct_id', $this->user_precinct)->get());
        $precincts = BallotPrecinct::where('precinct_id', $this->user_precinct)->with(['ballot' => function($query){
            $query->withCount('candidates');
            $query->with('office', 'location');
        }])->get();
        $this->ballot_count -= count($precincts);
        return $precincts;
    }
}
