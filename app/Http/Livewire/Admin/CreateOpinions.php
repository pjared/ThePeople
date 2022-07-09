<?php

namespace App\Http\Livewire\Admin;

use App\Models\BallotOpinions;
use App\Models\ControversialOpinion;
use Livewire\Component;

class CreateOpinions extends Component
{

    public ControversialOpinion $new_opinion;

    public $opinions;

    protected $rules = [
        'new_opinion.name' => 'required',
        'new_opinion.description' => 'required',
        'new_opinion.votes' => 'required|numeric',
    ];

    public function mount() {
        $this->new_opinion = new ControversialOpinion();
    }

    public function render()
    {
        return view('livewire.admin.create-opinions');
    }

    public function add_opinion() {
        $this->validate();
        $this->new_opinion->save();
    }
}
