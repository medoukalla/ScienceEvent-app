<?php

namespace App\Http\Livewire;

use App\Category;
use App\Formation;
use Livewire\Component;

class MobileFormationsMenu extends Component
{

    public $categories;


    public function mount()
    {
        $this->categories = Category::all();

        // $this->lastFormations = Formation::latest()->take(2)->get();
    }

    public function render()
    {
        return view('livewire.mobile-formations-menu');
    }
}
