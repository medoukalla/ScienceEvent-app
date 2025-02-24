<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Resource extends Model
{

    protected $fillable = ['file_name', 'file_path', 'formation_id'];
    
}
