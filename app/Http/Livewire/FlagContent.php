<?php

namespace App\Http\Livewire;

use App\Models\Flag;
use Livewire\Component;

class FlagContent extends Component
{
    public $flag;

    public $content;
    public $type;
    public $type_id;
    public $set_flag;
    public $note;
    public $side;
    public $current_color;
    public $dropdown_class;

    public function mount($content, $side) {
        if($side == 'right') {
            $this->dropdown_class = 'dropdown dropdown-top dropdown-end';
        } else if($side == 'below') {
            $this->dropdown_class = 'dropdown dropdown-end';
        } else {
            $this->dropdown_class =  'dropdown dropdown-top';
        }

        $this->content = $content;

        $this->flag = $content->flags()->firstWhere('user_id', auth()->id());

        $this->current_color = 'fill-transparent';
        if(! $this->flag) {
            return;
        }

        $this->note = $this->flag->note;
        $this->set_flag = $this->flag->flag_type;
        if($this->flag) {
            if($this->set_flag == '1') {
                $this->current_color = 'fill-red-600';
            } else if ($this->set_flag == '2') {
                $this->current_color = 'fill-green-600';
            } else if ($this->set_flag == '3') {
                $this->current_color = 'fill-gray-600';
            }
        }
    }

    public function flagSelected()
    {
        //Create the flag if it doesn't exist
        if(! $this->flag) {
            $this->flag = $this->content->flag('', 0);
        }
        //Emit to parent wire to change current flag
        $this->emitUp('flagSelected', $this->flag);
    }

    public function render()
    {
        return view('livewire.flag-content');
    }
}
