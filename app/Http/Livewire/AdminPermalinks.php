<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\CandidatePermaLink;
use Livewire\Component;

class AdminPermalinks extends Component
{
    public $candidates;
    public $candidates_linked;

    //TODO: Make sure that these are  
    public $perma_link;
    public $candidate_link;

    public function save($candidate_id)
    {
        // dd($candidate_id, $this->perma_link[$candidate_id], $this->candidate_link[$candidate_id]);
        $permaLink = new CandidatePermaLink();
        $permaLink->candidate_id = $candidate_id;
        $permaLink->perma_link = $this->perma_link[$candidate_id];
        $permaLink->candidate_link = $this->candidate_link[$candidate_id];
        $permaLink->save();
    }

    public function update($candidate_id) 
    {
        $permaLink = CandidatePermaLink::firstWhere('candidate_id', $candidate_id);
        // $permaLink->perma_link = $this->perma_link[$candidate_id]; Cannot change this
        $permaLink->candidate_link = $this->candidate_link[$candidate_id];
        $permaLink->save();
    }

    public function mount()
    {
        $this->candidates_linked = Candidate::has('permalink')->get();
        foreach($this->candidates_linked as $candidate) {
            $this->perma_link[$candidate->id] = $candidate->permalink->perma_link;
            $this->candidate_link[$candidate->id] = $candidate->permalink->candidate_link;
        }
        $this->candidates = Candidate::doesntHave('permalink')->has('ballot')->get();
    }
    
    public function render()
    {
        return view('livewire.admin-permalinks');
    }
}
