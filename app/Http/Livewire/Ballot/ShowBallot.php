<?php

namespace App\Http\Livewire\Ballot;

use App\Models\Ballot;
use App\Models\GroupBallotQuestions;
use App\Models\PoliticalGroupCandidates;
use App\Models\UserVotes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ShowBallot extends Component
{
    // public Ballot $ballot;
    public $ballot_slug;
    public $candidates = [];
    public $candidate_vote;

    public function mount(Ballot $ballot)
    {
        $this->ballot_slug = $ballot->slug;
        if(auth()->check()) {
            $user_vote = UserVotes::where('ballot_id', $ballot->id)->where('user_id', auth()->id())->first();
            if($user_vote) {
                $this->candidate_vote = $user_vote->running_candidate_id;
            }
        }

        // $this->ballot =
        Cache::rememberForever('ballot-' . $ballot->slug, function () use ($ballot) {
            return $ballot->load('location:id,name,state',
                                    'office:id,name',
                                    'candidates',
                                    'candidates.candidate:id,slug,profile_photo_path,name');
        });

        // $this->ballot = Cache::remember('ballot' . $ballot->slug, 2, function () use ($ballot) {
        //     return $ballot->load('location', 'office','candidates','candidates.candidate');

        //     $this->ballot =
        // });
    }

    public function render()
    {
        return view('livewire.ballot.show-ballot');
    }

    public function getBallotProperty()
    {
        return Cache::get('ballot-' . $this->ballot_slug);
    }

    public function change_user_vote($candidate_id)
    {
        if(!auth()) {
            return;
        }
        //Validate the incoming data
        Validator::make(
            ['candidate_slug' => $candidate_id],
            ['candidate_slug' => 'required|int'],
        )->validate();

        UserVotes::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'ballot_id' => $this->ballot->id,
            ],
            [
                'running_candidate_id' => $candidate_id,
                'is_valid' => 1,
            ]
        );
    }
}
