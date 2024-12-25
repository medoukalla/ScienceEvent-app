<div class="comment-section">
    <!-- Display comments count -->
    <div class="comments-counts">
        {{ $comments->count() }} Commentaires
    </div>

    <!-- Display comments -->
    @foreach($comments as $comment)
    <div class="comment">
        <div class="comment-header">
            <img src="{{ asset('assets/images/comment-avatar.png') }}" alt="User Avatar" class="comment-avatar">
            <span class="comment-name">{{ $comment->user->name }}</span>
            <div class="you-tag {{ auth()->id() === $comment->user_id ? 'visible' : 'hidden' }}"> <small>(Vous)</small></div>
        </div>
        <div class="comment-content">
            {{ $comment->content }}
        </div>
        <div class="comment-footer">
            <div class="like-inline">
                <span class="like-icon" wire:click="likeComment({{ $comment->id }})" data-liked="{{ $comment->likes->contains('user_id', auth()->id()) }}">
                    {{ $comment->likes->contains('user_id', auth()->id()) ? '💔' : '❤' }}
                </span>
                <span class="likes">{{ $comment->likes->count() }} J'aime</span>
                <span class="reply" wire:click="replyTo({{ $comment->id }})">Répondre</span>
            </div>
            <div class="comment-date">
                {{ $comment->created_at->diffForHumans() }}
            </div>
        </div>

        <!-- Display replies for the current comment -->
        @foreach($comment->replies as $reply)
        <div class="reply">
            <div class="comment-header">
                <img src="{{ asset('assets/images/comment-avatar.png') }}" alt="User Avatar" class="comment-avatar">
                <span class="comment-name">{{ $reply->user->name }}</span>
                <div class="you-tag {{ auth()->id() === $reply->user_id ? 'visible' : 'hidden' }}">Vous</div>
            </div>
            <div class="comment-content">
                {{ $reply->content }}
            </div>
            <div class="comment-footer">
                <div class="like-inline">
                    <span class="like-icon" wire:click="likeComment({{ $reply->id }})" data-liked="{{ $reply->likes->contains('user_id', auth()->id()) }}">
                        {{ $reply->likes->contains('user_id', auth()->id()) ? '💔' : '❤' }}
                    </span>
                    <span class="likes">{{ $reply->likes->count() }} J'aime</span>
                </div>
                <div class="comment-date">
                    {{ $reply->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <!-- Show input for adding a new comment or reply -->
    <div class="add-comment" style="display: {{ $replyTo ? 'none' : 'block' }}">
        <textarea wire:model.defer="content" placeholder="Ajouter un commentaire..."></textarea>
        <button wire:click="addComment">Publier</button>
    </div>

    <!-- Show reply input if replying -->
    @if($replyTo)
    <div class="reply-input">
        <textarea wire:model.defer="content" placeholder="Votre réponse..."></textarea>
        <button wire:click="addComment">Répondre</button>
        <button wire:click="$set('replyTo', null)">Annuler</button>
    </div>
    @endif
</div>
