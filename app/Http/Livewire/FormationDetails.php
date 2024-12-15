<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormationDetails extends Component
{

    public $formation;

    public $display;


    public $payment_method = 'virement';


    public $amount;

    public function mount($formation) {
        $this->formation = $formation;
        $this->display = 'details';
    }

    // Return to detaisl section 
    public function back() {
        $this->display = 'details';
    }

    // show login form 
    public function login() {
        $this->display = 'login';
    }


    // show register form 
    public function register() {
        $this->display = 'register';
    }

    // show payment section 
    public function payment() {
        $this->display = 'payment';
    }

    public function render()
    {
        return view('livewire.formation-details');
    }
}
