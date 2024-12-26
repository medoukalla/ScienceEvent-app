<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'formation_id',
        'user_id',
        'parent_id',
        'content',
    ];

    /**
     * Relationship for nested replies.
     */
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    /**
     * Relationship for the user who wrote the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship for likes associated with the comment.
     */
    public function likes()
    {
        return $this->hasMany(Like::class, 'comment_id');
    }
}
