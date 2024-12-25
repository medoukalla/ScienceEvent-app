<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    public $newCommentContent = '';
    public $replyContent = '';
    public $showReplyInput = null;
    public $comments = [];

    public function mount()
    {
        $this->loadComments();
    }

    public function render()
    {
        return view('livewire.comments');
    }

    public function loadComments()
    {
        // Fetch comments with their replies (assuming you have replies as a relationship on the Comment model)
        $this->comments = Comment::with('replies')->get()->map(function ($comment) {
            return [
                'id' => $comment->id,
                'user_id' => $comment->user_id,
                'user_name' => $comment->user->name,
                'content' => $comment->content,
                'likes_count' => $comment->likes_count,
                'created_at' => $comment->created_at,
                'replies' => $comment->replies->map(function ($reply) {
                    return [
                        'id' => $reply->id,
                        'user_id' => $reply->user_id,
                        'user_name' => $reply->user->name,
                        'content' => $reply->content,
                        'likes_count' => $reply->likes_count,
                        'created_at' => $reply->created_at,
                    ];
                }),
            ];
        })->toArray();
    }

    public function addComment()
    {
        // Validate input
        $this->validate([
            'newCommentContent' => 'required|min:3',
        ]);

        // Add new comment
        Comment::create([
            'user_id' => auth()->id(),
            'content' => $this->newCommentContent,
        ]);

        $this->newCommentContent = '';
        $this->loadComments();
    }

    public function showReplyInput($commentId)
    {
        $this->showReplyInput = $this->showReplyInput === $commentId ? null : $commentId;
    }

    public function addReply($commentId)
    {
        // Validate input
        $this->validate([
            'replyContent' => 'required|min:3',
        ]);

        // Add reply
        $comment = Comment::findOrFail($commentId);
        $comment->replies()->create([
            'user_id' => auth()->id(),
            'content' => $this->replyContent,
        ]);

        $this->replyContent = '';
        $this->showReplyInput = null;
        $this->loadComments();
    }
}
