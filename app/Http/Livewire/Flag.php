<?php

namespace App\Http\Livewire;

use App\Models\UserFlag;
use Livewire\Component;

class Flag extends Component
{
    public $type;
    public $type_id;
    public $set_flag;

    public function mount($type, $type_id) {
        $this->type = $type;
        $this->type_id = $type_id;
        $flag = UserFlag::where('user_id', auth()->id())
                                ->where('type', $type)
                                ->where('type_id', $type_id)->first();
                                
        if($flag) {
            $this->set_flag = $flag->flag_type;
        } else {
            $this->set_flag = '';
        }
    }

    public function render()
    {
        return view('livewire.flag');
    }
}
