<?php

namespace App\Http\Livewire\Admin;

use App\Models\Candidate;
use App\Models\CandidatePermaLink;
use Livewire\Component;

class EditPermalinks extends Component
{
    public $candidates;

    public $perma_link;
    public $candidate_link;

    public function save($candidate_id)
    {
        $permaLink = new CandidatePermaLink();
        $permaLink->candidate_id = $candidate_id;
        $permaLink->perma_link = $this->perma_link[$candidate_id];
        $permaLink->candidate_link = $this->candidate_link[$candidate_id];
        $permaLink->save();
        $this->emit('refreshLivewireDatatable');
    }

    public function render()
    {
        $this->candidates = Candidate::doesntHave('permalink')->has('ballot')->get();
        return view('livewire.admin.edit-permalinks')
                    ->layout('layouts.admin');
    }
}
