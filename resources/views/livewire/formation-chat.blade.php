<section class="chat-section section-padding">
    <div class="container">
        <!-- Chat Header -->
        <div class="chat-header">
            <h3 class="section-title">Discussion de cours</h3>
            <p class="section-subtitle">Partagez vos pensées avec les autres participants</p>
        </div>

        <!-- Chat Messages Area -->
        <div class="chat-messages" id="chat-messages">
            @foreach($messages as $message)
                <div class="chat-message {{ $message['user_id'] === auth()->id() ? 'user' : 'sender' }}">
                    <div class="chat-bubble">
                        <p class="chat-text">{{ $message['message'] }}</p>
                        <span class="chat-timestamp">
                        <small>{{ $message['user']['name'] }} {{ \Carbon\Carbon::parse($message['created_at'])->format('d/m/Y H:i') }} </small>
                        </span>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Chat Input Area -->
        <form wire:submit.prevent="sendMessage" class="chat-form">
            <div class="input-container">
                <textarea 
                    wire:model="message" 
                    class="chat-input" 
                    placeholder="Écrire un message...">
                </textarea>
                <button type="submit" class="chat-send-btn">
                    <i class="ti ti-send"></i>
                </button>
            </div>
        </form>
    </div>
</section>