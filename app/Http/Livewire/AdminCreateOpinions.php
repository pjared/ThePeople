<?php

namespace App\Http\Livewire;

use App\Models\ControversialOpinion;
use App\Models\OpinionTypes;
use Livewire\Component;

class AdminCreateOpinions extends Component
{

    public ControversialOpinion $new_opinion;
    public OpinionTypes $new_type;

    public $opinions;
    public $opinion_types;

    protected $rules = [
        'new_opinion.name' => 'required',
        'new_opinion.description' => 'required',
        'new_opinion.first_side' => 'required',
        'new_opinion.second_side' => 'required',
        'new_opinion.votes' => 'required|numeric',
        'new_opinion.type_id' => 'required|numeric',
        'new_type.name' => 'required',
        'new_type.description' => 'required',
    ];

    public function mount() {
        $this->new_opinion = new ControversialOpinion();
        $this->new_type = new OpinionTypes();
    }

    public function render()
    {
        $this->opinions = ControversialOpinion::all();
        $this->opinion_types = OpinionTypes::all();
        return view('livewire.admin-create-opinions');
    }

    public function add_opinion() {
        $this->validate();
        $this->new_opinion->save();
    }

    public function add_type() {
        // $this->validate();
        $this->new_type->save();
    }
}
