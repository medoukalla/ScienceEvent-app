<?php

namespace App\Http\Livewire;

use App\Formation;
use Livewire\Component;

class Formations extends Component
{

    // get formations
    public $formations;

    public function mount() {
        $this->formations = Formation::index_formations();
    }

    public function render()
    {
        return view('livewire.formations');
    }
}
