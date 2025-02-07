<?php

namespace App\Http\Livewire;

use App\Formation;
use Livewire\Component;

class Formations extends Component
{

    public $formations;
    public $limit = 6;

    public function loadAll()
    {
        $this->limit = null; // Remove limit to show all
    }

    public function render()
    {
        $this->formations = Formation::index_formations_limit($this->limit);
        return view('livewire.formations');
    }
}
