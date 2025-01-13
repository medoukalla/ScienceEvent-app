<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Notifications\WaitingConfirmation;
use App\Notifications\WelcomeNewUser;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormationDetails extends Component
{

    use WithFileUploads;

    public $formation;

    public $display;


    public $payment_method = 'virement';


    public $user;


    // user informations 
    public $name;
    public $phone;
    public $email;
    public $specialite;


    public $selected_pack;
    public $amount;

    public $proof;

    // save the is of created order
    public $order_id;

    public $password;

    // new or old user 
    public $new_user = false;

    // laboratoir nom 
    public $laboratory_name;

    public function mount($formation) {
        $this->formation = $formation;
        $this->display = 'details';


        if (auth()->check()) {
            $this->user = auth()->user();
            $this->name = $this->user->name;
            $this->phone = $this->user->phone;
            $this->email = $this->user->email;
            $this->specialite = $this->user->specialite;
        }
    }

    // Return to detaisl section 
    public function back() {
        $this->display = 'details';
    }

    // show login form 
    public function login() {
        $this->display = 'login';
    }

    // function to save user personal in
    public function save_user() {

        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email',
            'specialite' => 'required|string|max:255',
        ],
        [
            'name.required' => 'Le nom est obligatoire.',
            'phone.required' => 'Le phone est obligatoire.',
            'email.required' => 'Le email est obligatoire.',
            'specialite.required' => 'La specialite est obligatoire.',
            'name.string' => 'Le nom doit etre une chaine de caracteres.',
            'phone.string' => 'Le phone doit etre une chaine de caracteres.',
            'email.email' => 'Le format de l\'email n\'est pas valide.',
            'specialite.string' => 'La specialite doit etre une chaine de caracteres.',
        ],
        [
            'name' => 'Nom',
            'phone' => 'Phone',
            'email' => 'Email',
            'specialite' => 'Spécialité',
        ]);
        
        
        $user = User::where('email', $this->email)->first();
        if($user) {
            $this->user = $user;
            $this->new_user = false;
        } else {

            $password = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);

            $this->user = User::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'password' => bcrypt($password),
                'specialite' => $this->specialite,
            ]);

            $this->password = $password;

            $this->new_user = true;
            
        }

        session()->put('user_id', $this->user->id);

        $this->display = 'payment';
    }

    // show register form 
    public function register() {
        $this->display = 'register';
    }

    // change amount ( packs )
    public function select_pack($pack_id, $amount) {
        $this->selected_pack = $pack_id;
        $this->amount = $amount;

    }

    // show payment section 
    public function payment() {
        $this->display = 'payment';
    }

    public function render()
    {
        return view('livewire.formation-details');
    }


    public function paymentOffline() {

        // check for labo name if payment method is 'prise_en_charge'
        if ($this->payment_method == 'prise_en_charge') {
            $this->validate([
                'laboratory_name' => 'required|string',
            ], [
                'laboratory_name.required' => 'Le nom du laboratoire est obligatoire.',
                'laboratory_name.string' => 'Le nom du laboratoire doit etre une chaine de caracteres.',
            ]);
        }
        


        // create new order
        $order = new Order();
        $order->formation_id = $this->formation->id;
        $order->user_id = $this->user->id;
        $order->price = $this->amount;
        $order->status = 1;
        $order->labo_name = $this->laboratory_name;

        // payment method to number 
        switch ($this->payment_method) {
            case 'virement':
                $order->method_payment = 1;
                break;
            case 'cheque':
                $order->method_payment = 2;
                break;
            case 'espece':
                $order->method_payment = 3;
                break;
            case 'prise_en_charge':
                $order->method_payment = 4;
                break;
        }

        if ( $order->save() ) {
            $this->order_id = $order->id;
            
            $this->display = 'send_proof';
        }

    }


    public function paymentOnline() {
        // create new order
        $order = new Order();
        $order->formation_id = $this->formation->id;
        $order->user_id = $this->user->id;
        $order->price = $this->amount;
        $order->status = 1;
        $order->payment_method = $this->payment_method;

        if ( $order->save() ) {
            $this->order_id = $order->id;
            // redirect user to CMI payment page 
            
        }
    }

    public function add_proof() {    

        $this->validate([
            'proof' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ],
        [
            'proof.required' => 'Le proof est obligatoire.',
            'proof.mimes' => 'Le proof doit etre un fichier de type: jpeg,png,jpg,gif,svg.',
        ],
        [
            'proof' => 'Proof',
        ]);

        $order = Order::find($this->order_id);      
 
        $proof = $this->proof->store('proofs', 'public');

        $order->proof = $proof;
        $order->save();        
        $this->display = 'success';

        // send email notification to user 
        if ( $this->new_user == false ) {
            $user = User::find($this->user->id);
            $user->notify(new WaitingConfirmation($user, $order));
        }else {
            $user = User::find($this->user->id);
            $user->notify(new WelcomeNewUser($user, $order, $this->password));
        }
    }   
}
