<?php

namespace App\Http\Livewire\Candidate;

use App\Models\Candidate;
use App\Models\Flag;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

/**
 * The wire for the candidate's profile. I realize that using livewire for the entire page is overkill. In the future,
 * I would like to make as much of this page just a controller and use livewire for the flags only. However, I could not think
 * of a better solution for handling the change of a flag without mass code repitition.
 */
class Profile extends Component
{
    public $candidate_slug;
    public $user_comment;

    public function mount($candidate_slug) {
        $this->candidate_slug = $candidate_slug;
    }

    /**
     * Computed property for the users flags for the current candidate
     */
    public function getFlagsProperty()
    {
        if(! auth()->check()) {
            return [];
        }
        return auth()->user()->flags->where('ballot_id', $this->candidate->ballot->id)->where('candidate_id', $this->candidate->id);
    }

    public function getCandidateProperty()
    {
        $slug = $this->candidate_slug;
        return Cache::remember('candidate-' . $slug, 120, function () use ($slug) {
            $candidate = Candidate::firstWhere('slug', $slug);
            return $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name',
                                'events', 'required_stances', 'stances', 'promises', 'videos', 'previous_positions',
                                'opinions', 'manual_candidate', 'educations', 'backgrounds')
                                ->loadCount('events', 'required_stances', 'stances', 'promises', 'videos', 'previous_positions',
                                'opinions', 'educations', 'backgrounds');
        });
    }

    public function getTop5StateDonorsProperty() {
        if($this->candidate->donors) {
            return json_decode($this->candidate->donors->top_5_states, true);
        }
    }

    public function getTop5DonorsProperty() {
        if($this->candidate->donors) {
            return json_decode($this->candidate->donors->top_5_donors, true);
        }
    }

    public function getTop5GroupDonorsProperty() {
        if($this->candidate->donors) {
            return json_decode($this->candidate->donors->top_5_groups, true);
        }
    }

    public function getOpinionsProperty()
    {
        if ($this->candidate->ballot) {
            return $this->candidate->ballot->opinions->load(['required_stances']);
        } else {
            return [];
        }
    }

    public function getIsManualProperty()
    {
        return is_null($this->candidate->user_id);
    }

    public function render()
    {
        return view('livewire.candidate.profile');
    }

    /**
     * A function to handle the change of the flag.
     */
    public function change_flag($flag_type, $flag_id, $flag_value, $flag_note)
    {
        // Auth Check
        if(! auth()) {
            return;
        }
        //Validate the incoming data
        Validator::make(
            ['flag_type' => $flag_type],
            ['flag_type' => 'required|string'],
            ['flag_id' => $flag_id],
            ['flag_id' => 'required|integer'],
            ['flag_value' => $flag_value],
            ['flag_value' => 'required|integer|min:1|max:3'],
            ['flag_note' => $flag_note],
            ['flag_note' => 'string|nullable'],
        )->validate();

        Flag::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'flaggable_id' => $flag_id,
                'flaggable_type' => $flag_type,
                'candidate_id' => $this->candidate->id,
                'ballot_id' => $this->candidate->ballot->id,
            ],
            [
                'flag_type'  => $flag_value,
                'note'  => $flag_note,
            ]);
    }

    public function delete_flag($flag_type, $flag_id)
    {
        //Auth Check
        if(! auth()) {
            return;
        }
        //Validate the incoming data
        Validator::make(
            ['flag_type' => $flag_type],
            ['flag_type' => 'required|string'],
            ['flag_id' => $flag_id],
            ['flag_id' => 'required|integer'],
        )->validate();

        Flag::where('user_id', auth()->id())
                        ->where('flaggable_type',$flag_type)
                        ->where('flaggable_id',$flag_id)
                        ->delete();
    }

    public function add_comment()
    {
        //Auth check
        if(! auth()) {
            return;
        }
        $this->validate([
            'user_comment' => 'required|string',
        ]);
        $this->candidate->commentAsUser(auth()->user(), $this->user_comment);
        $this->user_comment = "";
    }
}
