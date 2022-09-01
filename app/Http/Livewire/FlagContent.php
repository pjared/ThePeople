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
    public $dropdown_class;
    public $type;
    public $type_id;

    public function mount($content, $side) {
        //Set where the dropdown will be
        if($side == 'right') {
            $this->dropdown_class = 'dropdown dropdown-top dropdown-end';
        } else if($side == 'below') {
            $this->dropdown_class = 'dropdown dropdown-end';
        } else {
            $this->dropdown_class =  'dropdown dropdown-top';
        }

        $flag = $content->flags()->firstWhere('user_id', auth()->id());

        //Default current color is transparent
        $this->current_color = 'fill-transparent';
        if(! $flag) {
            //Set the type of flag
            //Temp flag will get us a type and ID
            $temp_flag = $content->temp_flag();
            $this->type = $temp_flag->flaggable_type;
            $this->type_id = $temp_flag->flaggable_id;
        } else {
            //The flag exists, so we can just get type and ID from it
            $this->type = $flag->flaggable_type;
            $this->type_id = $flag->flaggable_id;

            //Set the note and flag type
            $this->note = $flag->note;
            $this->set_flag = $flag->flag_type;

            if($this->set_flag == '1') {
                $this->current_color = 'fill-red-600';
            } else if ($this->set_flag == '2') {
                $this->current_color = 'fill-green-600';
            } else if ($this->set_flag == '3') {
                $this->current_color = 'fill-gray-600';
            }

        }
    }

    public function render()
    {
        return view('livewire.flag-content');
    }
}
