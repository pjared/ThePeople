<?php

namespace App\Http\Livewire;

use App\Models\Flag;
use Livewire\Component;

class FlagContent extends Component
{
    public $set_flag;
    public $note;
    public $side;
    public $current_color;
    public $type;
    public $type_id;
    public $is_loading = true;

    public function mount($content, $flag_id, $side) {
        $this->flag_id = $flag_id;
        $this->side = $side;

        if(! $this->flag) {
            $this->type = get_class($content);
            $this->type_id = $content->id;
        }
    }

    public function getFlagProperty()
    {
        return Flag::find($this->flag_id);
    }

    public function getDropDownClassProperty()
    {
        if($this->side == 'right') {
            $this->dropdown_class = 'dropdown dropdown-top dropdown-end';
        } else if($this->side == 'below') {
            $this->dropdown_class = 'dropdown dropdown-end';
        } else {
            $this->dropdown_class =  'dropdown dropdown-top';
        }
    }

    public function load_flag()
    {
        //Default current color is transparent
        $this->current_color = 'fill-transparent';
        if($this->flag) {
            //The flag exists, so we can just get type and ID from it
            $this->type = $this->flag->flaggable_type;
            $this->type_id = $this->flag->flaggable_id;

            //Set the note and flag type
            $this->note = $this->flag->note;
            $this->set_flag = $this->flag->flag_type;

            if($this->set_flag == '1') {
                $this->current_color = 'fill-red-600';
            } else if ($this->set_flag == '2') {
                $this->current_color = 'fill-green-600';
            } else if ($this->set_flag == '3') {
                $this->current_color = 'fill-gray-600';
            }
        }
        $this->is_loading = false;
    }

    public function render()
    {
        return view('livewire.flag-content');
    }
}
