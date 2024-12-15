<?php

namespace App\Http\Livewire;

use App\Doctor;
use Livewire\Component;

class Doctors extends Component
{
    public $doctors;

    public function mount()
    {
        $this->doctors = Doctor::all();
    }



    public function render()
    {
        return view('livewire.doctors');
    }
}
