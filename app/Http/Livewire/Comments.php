<?php

namespace App\Http\Livewire;

use App\Comment;
use App\Like;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Comments extends Component
{
    public $formationId;
    public $content = '';
    public $replyTo = []; // Changed to array
    public $comments; // Make $comments property available to the class

    protected $rules = [
        'content' => 'required|string|max:500',
    ];

    public function mount($formationId)
    {
        $this->formationId = $formationId;
    }

    public function addComment($parentCommentId = null) // Add parameter
    {
        $this->validate();

        Comment::create([
            'user_id' => auth()->id(),
            'formation_id' => $this->formationId,
            'parent_id' => $parentCommentId, // Use the passed ID
            'content' => $this->content,
        ]);

        $this->content = ''; // Reset the content
        if($parentCommentId) {
            $this->replyTo[$parentCommentId] = null;
        }

        $this->render();
    }

    public function likeComment($commentId)
    {
        $existingLike = Like::where([
            'user_id' => auth()->id(),
            'formation_id' => $this->formationId,
            'comment_id' => $commentId,
        ])->first();

        if ($existingLike) {
            $existingLike->delete();
        } else {
            Like::create([
                'user_id' => auth()->id(),
                'formation_id' => $this->formationId,
                'comment_id' => $commentId,
            ]);
        }
        $this->render();
    }

    public function replyTo($commentId)
    {
        $this->replyTo[$commentId] = true;
    }

    public function render()
    {
        $this->comments = Comment::where('formation_id', $this->formationId)
            ->whereNull('parent_id')
            ->with(['replies.user', 'likes', 'user']) // Eager load user for replies as well
            ->latest()
            ->get();

        return view('livewire.comments', [
            'comments' => $this->comments,
        ]);
    }
}