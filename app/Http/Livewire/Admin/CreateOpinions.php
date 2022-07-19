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
        'new_opinion.name' => 'nullable|string',
        'new_opinion.description' => 'nullable|string',
        'new_opinion.votes' => 'nullable|numeric',

        'opinions.*.name' => 'required|string',
        'opinions.*.description' => 'required|string',
    ];

    public function mount() {
        $this->opinions = ControversialOpinion::all();
        $this->new_opinion = new ControversialOpinion();
    }

    public function render()
    {
        return view('livewire.admin.create-opinions');
    }

    public function save_opinions() {
        $this->validate();
        $this->opinions->each->save();
    }

    public function add_opinion() {
        $this->validate([
            'new_opinion.name' => 'required|string',
            'new_opinion.description' => 'required|string',
            'new_opinion.votes' => 'required|numeric',
        ]);
        $this->new_opinion->save();
    }
}
