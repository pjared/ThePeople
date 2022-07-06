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

    public function update_badges() 
    {
        foreach($this->stances as $stance) {
            if($stance->value == 50) {
                $badge_name = $stance->opinion->name . ' - Nuetral';
                $badge = Badge::firstWhere('name', $badge_name);
                // dd($badge_name, Badge::all());
            } else if ($stance->value < 50) {
                $badge = Badge::firstWhere('name', $stance->opinion->first_side);
            } else {
                $badge = Badge::firstWhere('name', $stance->opinion->second_side);
            }
            
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
    }

    public function mount($stances)
    {
        $this->stances = $stances;
    }

    public function save_stances()
    {
        $this->validate();
        
        foreach($this->stances as $stance) {
            $stance->save();
        }
        $this->update_badges();
        $this->emitUp('opinion-flash');
    }

    public function render()
    {
        return view('livewire.edit-candidate-opinions');
    }
}
