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

    protected $listeners = [
        'save-stances' => 'save_stances',
    ];

    protected $rules = [
        'stances.*.stance_label' => 'required|numeric',
        'stances.*.stance_reasoning' => 'nullable',
        'stance.stance_label' => 'nullable',
        'stance.stance_reasoning' => 'nullable',
    ];

    public function mount($opinion) 
    {
        $candidate = Candidate::firstWhere('user_id', auth()->id());
        if(!$candidate) {
            return;
        }
        $this->stances = CandidateStance::where('candidate_id', $candidate->id)
                                            ->where('controversial_opinion_id', $opinion->id)
                                            ->get();
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

    public function save_stances()
    {
        $this->validate();
        if($this->opinion->id == 1) {
            dd($this->stances, $this->opinion->name);
        }
        $this->stances->each->save();
    }
}
