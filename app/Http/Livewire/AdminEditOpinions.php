<?php

namespace App\Http\Livewire;

use App\Models\ControversialOpinion;
use App\Models\OpinionTypes;
use Livewire\Component;

class AdminEditOpinions extends Component
{
    public $opinions;
    public $opinion_types;

    protected $rules = [
        "opinions.*.type_id" => 'required',
    ];

    public function save_opinions()
    {
        $this->opinions->each->save();
    }

    public function mount()
    {
        $this->opinions = ControversialOpinion::orderBy('type_id')->get();
        $this->opinion_types = OpinionTypes::all();
    }

    public function render()
    {   
        return view('livewire.admin-edit-opinions');
    }
}
