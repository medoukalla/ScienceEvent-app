<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TopBar extends Component
{


    public $show_phone;


    public function mount() {
        $this->show_phone = 'false';
    }

    public function render()
    {
        return view('livewire.top-bar');
    }


    public function togglePhone()
    {
        $this->show_phone = $this->show_phone === 'false' ? 'true' : 'false';
    }
    
}
