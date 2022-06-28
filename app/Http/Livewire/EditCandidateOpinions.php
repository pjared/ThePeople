<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditCandidateOpinions extends Component
{
    public $stances;

    protected $rules = [
        'stances.*.value' => 'required|numeric',
        'stances.*.info' => 'nullable'
    ];

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

        $this->emitUp('opinion-flash');
    }

    public function render()
    {
        return view('livewire.edit-candidate-opinions');
    }
}
