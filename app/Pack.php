<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pack extends Model
{

    protected $fillable = [
        'title',
        'price',
        'status',
        'formation_id',
    ];
    
}
