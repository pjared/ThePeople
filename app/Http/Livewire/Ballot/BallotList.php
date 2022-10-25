<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\BallotPrecinct;
use App\Models\Candidate;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;

class BallotList extends Component
{
    use WithPagination;

    public $ballot_count = 1;
    public $precincts_loaded = false;
    public $more_ballots = true;
    public $search;
    public $current_key;

    public function mount($current_ballot_id = false)
    {
        if($current_ballot_id) {
            $this->current_key = $current_ballot_id;
        } else {
            $this->current_key = false;
        }
        if(! auth()->check() || ! auth()->user()->user_precinct) {
            $this->precincts_loaded = true;
            $this->ballot_count = 4;
        }
    }

    public function render()
    {
        return view('livewire.ballot.ballot-list', [
            'ballots' => $this->precincts_loaded ? $this->all_ballots->take($this->ballot_count) : [],
            'candidate_searches' => empty($this->search) ? [] : Candidate::search($this->search)->paginate(3),
            'ballot_searches' => empty($this->search) ? [] : Ballot::search($this->search)->paginate(3),
        ]);
    }

    /**
     * The function called when "Load More" is pressed. Increases the count for the ballots to be
     * taken from the list
     */
    public function load_ballots()
    {
        $this->ballot_count += 10;
        if ($this->ballot_count >= count($this->all_ballots)) {
            $this->more_ballots = false;
        }
    }

    public function getAllBallotsProperty()
    {
        $ballots = Cache::rememberForever('ballots', function () {
            $ballots  = Ballot::with('office', 'location')->withCount('candidates')->get();
            $ballots = $ballots->sortBy([
                    ['office.name', 'desc'],
                    ['location.name', 'asc'],
                ]);
            return $ballots;
        });
        if(auth()->user()) {
            foreach($this->user_ballots as $user_ballot) {
                $ballots = $ballots->filter(function ($value, $key) use($user_ballot){
                    return $value['id']!=$user_ballot->ballot->id;
                });
            }
            foreach($this->state_ballots as $state_ballot) {
                $ballots = $ballots->filter(function ($value, $key) use($state_ballot){
                    return $value['id']!=$state_ballot->id;
                });
            }
        }
        if($this->current_key) {
            $current_key = $this->current_key;
            $ballots = $ballots->filter(function ($value, $key) use($current_key){
                return $value['id']!=$current_key;
            });
            return $ballots;
        } else {
            return $ballots;
        }
    }

    public function getUserPrecinctProperty()
    {
        if(auth()->user()) {
            return auth()->user()->voter_precinct;
        } else {
            return null;
        }
    }

    public function getBallotListProperty() {
        return Cache::rememberForever('ballot_names', function () {
            $ballot_names = '';
            foreach($this->all_ballots as $ballot) {
                $ballot_names = $ballot_names . $ballot->name . ', ';
            }
            return $ballot_names;
        });
    }

    public function getStateBallotsProperty()
    {
        $ballots = Ballot::whereRelation('location','name','Utah')->withCount('candidates')->with('office', 'location')->get();
        if($this->current_key) {
            $current_key = $this->current_key;
            $ballots = $ballots->filter(function ($value, $key) use($current_key){
                return $value['id'] != $current_key;
            });
        }
        return $ballots;
    }

    public function getUserBallotsProperty()
    {
        $precincts = BallotPrecinct::where('precinct_id', $this->user_precinct)->with(['ballot' => function($query) {
                    $query->withCount('candidates');
                    $query->with('office', 'location');
                }],
            )->get();
        if($this->current_key) {
            $current_key = $this->current_key;
            $precincts = $precincts->filter(function ($value, $key) use($current_key){
                return $value['ballot_id']!=$current_key;
            });
        }
        $this->precincts_loaded = true;
        return $precincts;
    }
}
