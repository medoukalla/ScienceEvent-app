<div class="comment-section">
    <div class="comments-counts">
        {{ $comments->count() }} Commentaires
    </div>

    @foreach($comments as $comment)
        <div class="comment">
            <div class="comment-header">
                <img src="{{ asset('storage/'.Auth::user()->avatar) }}" alt="User Avatar" class="comment-avatar">
                <span class="comment-name">{{ $comment->user->name }}</span>
                @if(auth()->id() === $comment->user_id)
                    <div class="you-tage visible">Vous</div>
                @endif
            </div>
            <div class="comment-content">
                {{ $comment->content }}
            </div>
            <div class="comment-footer">
                <div class="like-inline">
                    <span class="like-icon" wire:click="likeComment({{ $comment->id }})" data-liked="{{ $comment->likes->count() >= 1 ? 'true' : 'false' }}">
                        {{ $comment->likes->contains('user_id', auth()->id()) ? '❤' : '❤' }}
                    </span>
                    <span class="likes" wire:click="likeComment({{ $comment->id }})" data-liked="{{ $comment->likes->count() >= 1 ? 'true' : 'false' }}">{{ $comment->likes->count() }} J'aime</span>
                    <span class="reply" wire:click="replyTo({{ $comment->id }})">Répondre</span>
                </div>
                <div class="comment-date">
                    {{ $comment->created_at->diffForHumans() }}
                </div>
            </div>

            @foreach($comment->replies as $reply)
                <div class="reply">
                    <div class="comment-header">
                        <img src="{{ asset('storage/'.Auth::user()->avatar) }}" alt="User Avatar" class="comment-avatar">
                        <span class="comment-name">{{ $reply->user->name }}</span>
                        @if(auth()->id() === $reply->user_id)
                            <div class="you-tage visible">Vous</div>
                        @endif
                    </div>
                    <div class="comment-content">
                        {{ $reply->content }}
                    </div>
                    <div class="comment-footer">
                        <div class="like-inline">
                            <span class="like-icon" wire:click="likeComment({{ $reply->id }})" data-liked="{{ $reply->likes->count() >= 1 ? 'true' : 'false' }}">
                                {{ $reply->likes->contains('user_id', auth()->id()) ? '❤' : '❤' }}
                            </span>
                            <span class="likes" wire:click="likeComment({{ $reply->id }})" data-liked="{{ $reply->likes->count() >= 1 ? 'true' : 'false' }}">{{ $reply->likes->count() }} J'aime</span>
                        </div>
                        <div class="comment-date">
                            {{ $reply->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach

            @if(isset($replyTo[$comment->id]) && $replyTo[$comment->id])
                <div class="add-comment">
                    <textarea wire:model.defer="content" placeholder="Votre réponse..." style=" width: 65%; height: 60px; "></textarea>
                    <button wire:click="addComment({{ $comment->id }})" style=" margin-top: 25px; margin-left: 15px; ">Répondre</button>
                    <button wire:click="$set('replyTo.{{$comment->id}}', null)" style=" margin-top: 25px; ">Annuler</button>
                </div>
            @endif
        </div>
    @endforeach

    <div class="add-comment" >
        <textarea wire:model.defer="content" placeholder="Ajouter un commentaire..."></textarea>
        <button wire:click="addComment">Publier</button>
    </div>
</div>