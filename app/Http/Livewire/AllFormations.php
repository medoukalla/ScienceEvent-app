<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllFormations extends Component
{

    public $formations;
    public $categories;
    public $doctors;


    public $selectedCategory;   
    public $selectedDoctor;
    public $selectedType;


    public function render()
    {
        return view('livewire.all-formations');
    }

    public function setCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
    }

    public function setDoctor($doctorId)
    {
        $this->selectedDoctor = $doctorId;
    }

    public function setType($type) {
        $this->selectedType = $type;
    }

    public function resetFilters() {
        $this->selectedCategory = null;
        $this->selectedDoctor = null;
        $this->selectedType = null;
    }
}
