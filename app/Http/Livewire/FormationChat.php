<?php

namespace App\Http\Livewire;

use App\Chat;
use Livewire\Component;
use Auth;


class FormationChat extends Component
{

    public $formationId; // Course ID
    public $message;     // New message
    public $messages = []; // Chat messages

    protected $rules = [
        'message' => 'required|string|max:500',
    ];

    public function mount($formationId)
    {
        $this->formationId = $formationId;
        $this->loadMessages();
    }

    public function loadMessages()
{
    $this->messages = Chat::where('formation_id', $this->formationId)
        ->with('user')
        ->orderBy('created_at', 'asc')
        ->get()
        ->toArray(); // Convert to array
}

    public function sendMessage()
    {
        $this->validate();

        Chat::create([
            'formation_id' => $this->formationId,
            'user_id' => Auth::id(),
            'message' => $this->message,
        ]);

        $this->message = ''; // Clear input
        $this->loadMessages(); // Reload messages
    }

    public function render()
    {
        return view('livewire.formation-chat');
    }
}
