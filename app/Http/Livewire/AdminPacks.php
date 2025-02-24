<?php

namespace App\Http\Livewire;

use App\Pack;
use Livewire\Component;

class AdminPacks extends Component
{

    public $formation_id;

    public $formation_packs;


    // inputs to add new pack 
    public $title;
    public $price;
    public $status = 1;

    public function mount($formation_id)
    {
        $this->formation_packs = Pack::where('formation_id', $formation_id)->get();
    }

    public function render()
    {
        return view('livewire.admin-packs');
    }


    
    public function add_pack()
    {
        $this->validate([
            'title' => 'required|min:3',
            'price' => 'required|numeric',
        ]);

        Pack::create([
            'title' => $this->title,
            'price' => $this->price,
            'status' => $this->status,
            'formation_id' => $this->formation_id,
        ]);

        $this->formation_packs = Pack::where('formation_id', $this->formation_id)->get();
        $this->reset(['title', 'price', 'status']);
    }



    
    public function delete_pack($pack_id)
    {
        Pack::where('id', $pack_id)->delete();
        $this->formation_packs = Pack::where('formation_id', $this->formation_id)->get();
    }

}
