<div class="comment-section">
    <!-- Comment Count -->
    <div class="comments-counts">
        {{ $comments->count() }} Commentaires ...
    </div>

    <!-- List Comments -->
    @foreach ($comments as $comment)
        <div class="comment">
            <div class="comment-header">
                <img src="{{ asset('assets/images/comment-image-5.png') }}" alt="User" class="comment-avatar">
                <span class="comment-name">{{ $comment['user_name'] }}</span>
                @if ($comment['user_id'] === auth()->id())
                    <div class="you-tage">Vous</div>
                @endif
            </div>
            <div class="comment-content">
                {{ $comment['content'] }}
            </div>
            <div class="comment-footer">
                <div class="like-inline">
                    <span class="like-icon" data-liked="true">❤</span>
                    <span class="likes" data-increase="true">{{ $comment['likes_count'] ?? 0 }} likes</span>
                    <span class="reply" wire:click="showReplyInput({{ $comment['id'] }})">Répondre</span>
                </div>
                <div class="comment-date">{{ $comment['created_at']->diffForHumans() }}</div>
            </div>

            <!-- Reply Form -->
            @if ($showReplyInput === $comment['id'])
                <div class="reply-form">
                    <textarea wire:model="replyContent" placeholder="Répondre à ce commentaire..." class="reply-input"></textarea>
                    <button wire:click="addReply({{ $comment['id'] }})">Envoyer</button>
                </div>
            @endif

            <!-- Replies -->
            @foreach ($comment['replies'] as $reply)
                <div class="reply">
                    <div class="comment-header">
                        <img src="{{ asset('assets/images/reply-image.png') }}" alt="User" class="comment-avatar">
                        <span class="comment-name">{{ $reply['user_name'] }}</span>
                        @if ($reply['user_id'] === auth()->id())
                            <div class="you-tage">Vous</div>
                        @endif
                    </div>
                    <div class="comment-content">
                        {{ $reply['content'] }}
                    </div>
                    <div class="comment-footer">
                        <div class="like-inline">
                            <span class="like-icon" data-liked="true">❤</span>
                            <span class="likes" data-increase="true">{{ $reply['likes_count'] ?? 0 }} likes</span>
                        </div>
                        <div class="comment-date">{{ $reply['created_at']->diffForHumans() }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <!-- Add New Comment -->
    <div class="new-comment">
        <textarea wire:model="newCommentContent" placeholder="Ajouter un commentaire..." class="comment-input"></textarea>
        <button wire:click="addComment">Envoyer</button>
    </div>
</div>
