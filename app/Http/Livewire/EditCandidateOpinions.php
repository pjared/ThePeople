<?php

namespace App\Http\Livewire;

use App\Models\Badge;
use App\Models\CandidateBadge;
use App\Models\ControversialOpinion;
use Livewire\Component;

class EditCandidateOpinions extends Component
{
    public $stances;

    protected $rules = [
        'stances.*.value' => 'required|numeric',
        'stances.*.info' => 'nullable'
    ];

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

    public function mount($stances)
    {
        $this->stances = $stances;
    }

    public function save_stances()
    {
        $this->validate();
        
        $this->stances->each->save();
        // $this->update_badges();
        $this->emitUp('opinion-flash');
    }

    public function render()
    {
        return view('livewire.edit-candidate-opinions');
    }
}
