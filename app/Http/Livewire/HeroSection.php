<?php

namespace App\Http\Livewire;

use App\Category;
use App\Formation;
use Livewire\Component;

class HeroSection extends Component
{


    public $categories;


    public $selectedCategory;

    public $categoryChanged = false;

    public $lastFormations;


    public function mount()
    {
        $this->categories = Category::all();

        $this->lastFormations = Formation::latest()->take(2)->get();
    }

    public function render()
    {
        // dd( $this->lastFormations);

        if ( $this->categoryChanged == false ) {
            $this->selectedCategory = $this->categories->first();
        }

        return view('livewire.hero-section');
    }


    public function changeCategory($id) {
        $this->selectedCategory = $this->categories->find($id);
        $this->categoryChanged = true;
    }
}
