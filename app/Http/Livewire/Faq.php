<?php

namespace App\Http\Livewire;

use App\Faq as AppFaq;
use Livewire\Component;

class Faq extends Component
{

    public $faqs;


    public function mount()
    {
        $this->faqs = AppFaq::all();
    }

    public function render()
    {
        return view('livewire.faq');
    }
}
