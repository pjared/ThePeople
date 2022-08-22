<?php

namespace App\Http\Livewire;

use App\Models\UserFlag;
use Livewire\Component;

class Flag extends Component
{
    public $type;
    public $type_id;
    public $set_flag;
    public $note;
    public $current_color;
    public $side;

    public function mount($type, $type_id, $side) {
        $this->side = $side;
        $this->type = $type;
        $this->type_id = $type_id;
        $flag = UserFlag::where('user_id', auth()->id())
                                ->where('type', $type)
                                ->where('type_id', $type_id)->first();

        $this->current_color = 'fill-transparent';
        if($flag) {
            $this->set_flag = $flag->flag_type;
            if($this->set_flag == '1') {
                $this->current_color = 'fill-red-600';
            } else if ($this->set_flag == '2') {
                $this->current_color = 'fill-green-600';
            } else if ($this->set_flag == '3') {
                $this->current_color = 'fill-gray-600';
            }
        } else {
            $this->set_flag = '0';
        }
        $this->note = $flag->note ?? '';
    }

    public function render()
    {
        return view('livewire.flag');
    }
}
