<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Extrait extends Model
{

    protected $fillable = ['title', 'thumbnail', 'video', 'formation_id'];
    
}
