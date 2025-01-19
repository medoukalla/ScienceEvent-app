<?php

namespace App\Http\Livewire;

use App\Message;
use Livewire\Component;

class Contact extends Component
{
    public $prenom;
    public $last_name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $bot_field;
    public $success = false;
    public $error = false;

    // Validation rules
    protected $rules = [
        'prenom' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:5000',
    ];

    public function handleSubmit()
    {
        $this->success = false;
        $this->error = false;

        // Check for bot submission
        if (!empty($this->bot_field)) {
            $this->success = true;
            return;
        }

        try {
            // Validate inputs
            $this->validate();

            // Save the message to the database
            Message::create([
                'name' => $this->prenom,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'phone' => $this->phone,
                'subject' => $this->subject,
                'message' => $this->message,
            ]);

            // Reset inputs after successful submission
            $this->reset(['prenom', 'last_name', 'email', 'phone', 'subject', 'message', 'bot_field']);

            // Show success message
            $this->success = true;
        
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Extract validation error messages
            $this->error = $e->validator->errors()->first();
        } catch (\Throwable $e) {
            // Handle any other exceptions
            $this->error = 'Une erreur est survenue. Veuillez réessayer.';
        }
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
