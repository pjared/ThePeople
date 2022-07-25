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
        'stances.*.stance_label' => 'required',
        'stances.*.stance_reasoning' => 'required',
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
        session()->flash('update-'. $this->opinion->name . '-success');
    }

    public function delete_stance($stance_id) 
    {
        $this->stances->find($stance_id)->delete();
        session()->flash('update-'. $this->opinion->name . '-failure', 'Stance Deleted');
    }

    public function save_stances()
    {
        $this->validate();
        $this->stances->each->save();
        session()->flash('update-'. $this->opinion->name . '-success');
    }

    /*public function update_badges() 
    {
        foreach($this->stances as $stance) {
            // If the stance is at 50, it's considered neutral
            if($stance->value == 50) {
                $badge_name = $stance->opinion->name . ' - Nuetral';
                $badge = Badge::firstWhere('name', $badge_name);
            } else if ($stance->value < 50) {
                // < 50, get the first side of the opinion
                $badge = Badge::firstWhere('name', $stance->opinion->first_side);
            } else {
                // > 50, get the second ("right")side of the opinion
                $badge = Badge::firstWhere('name', $stance->opinion->second_side);
            }
            
            //Update the candidate badge if it exists, or create one if it doesn't
            CandidateBadge::updateOrCreate(
                [
                    'candidate_id' => $stance->candidate_id,
                    'opinion_id' => $stance->controversial_opinion_id
                ],
                [
                    'badge_id' => $badge->id,
                ]
            );
        }
    }*/
}
