<?php

namespace App\Http\Livewire;

use App\Comment;
use App\Like;
use Livewire\Component;

class Comments extends Component
{

    public $formationId;
    public $content = '';
    public $replyTo = null;
    

    protected $rules = [
        'content' => 'required|string|max:500',
    ];

    /**
     * Initialize the component with the current formation ID.
     */
    public function mount($formationId)
    {
        $this->formationId = $formationId;
    }

    /**
     * Add a new comment or reply.
     */
    public function addComment()
    {
        $this->validate();

        Comment::create([
            'user_id' => auth()->id(),
            'formation_id' => $this->formationId,
            'parent_id' => $this->replyTo,
            'content' => $this->content,
        ]);

        // Reset fields after adding
        $this->content = '';
        $this->replyTo = null;
    }

    /**
     * Toggle like for a specific comment.
     */
    public function likeComment($commentId)
    {
        $existingLike = Like::where([
            'user_id' => auth()->id(),
            'formation_id' => $this->formationId,
            'comment_id' => $commentId,
        ])->first();

        if ($existingLike) {
            $existingLike->delete(); // Remove like if it already exists
        } else {
            Like::create([
                'user_id' => auth()->id(),
                'formation_id' => $this->formationId,
                'comment_id' => $commentId,
            ]);
        }
    }

    /**
     * Set the reply ID for the comment being replied to.
     */
    public function replyTo($commentId)
    {
        $this->replyTo = $commentId;
    }

    /**
     * Render the component.
     */
    public function render()
    {
        $comments = Comment::where('formation_id', $this->formationId)
            ->whereNull('parent_id')
            ->with(['replies', 'likes']) // Load replies and likes eagerly
            ->latest()
            ->get();

        return view('livewire.comments', [
            'comments' => $comments,
        ]);
    }
}
