<?php

namespace App\Http\Livewire\Candidate\Edit;

use App\Models\Candidate;
use App\Models\CandidateStance;
use App\Models\ControversialOpinion;
use Livewire\Component;

class Stances extends Component
{
    public ControversialOpinion $opinion;

    public $stances;
    public CandidateStance $stance;

    protected $rules = [
        'stances.*.stance_label' => 'required|numeric',
        'stances.*.stance_reasoning' => 'nullable',
        'stance.stance_label' => 'required',
        'stance.stance_reasoning' => 'required',
    ];

    public function mount($opinion) 
    {
        $candidate = Candidate::firstWhere('user_id', auth()->id());
        if(!$candidate) {
            return;
        }
        $this->stances = CandidateStance::where('controversial_opinion_id', $opinion->id)
                                            ->where('candidate_id', $candidate->id)
                                            ->get();
        // dd($this->stances);
        if(count($this->stances) < 3) {
            $this->stance = new CandidateStance();
        }
        $this->opinion = $opinion;
    }

    public function render()
    {
        return view('livewire.candidate.edit.stances');
    }

    public function add_stance()
    {
        $this->validate([
            'stance.stance_label' => 'required',
            'stance.stance_reasoning' => 'required',
        ]);
        $candidate = Candidate::firstWhere('user_id', auth()->id());
        $this->stance->candidate_id = $candidate->id;
        $this->stance->controversial_opinion_id = $this->opinion->id;
        $this->stance->save();
    }

    public function delete_stance($stance_id) 
    {
        $this->stances->find($stance_id)->delete();
        //TODO: FINISH WHERE TO IMPLEMENT DELTION FLASH
        // $this->emitUp('promise-delete-flash');
    }
}
