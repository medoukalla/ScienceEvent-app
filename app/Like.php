<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    protected $fillable = [
        'formation_id',
        'user_id',
        'comment_id'
    ];
}
