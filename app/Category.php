<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    /**
     * Get all of the formation for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formations()
    {
        // return $this->hasMany(Formation::class, 'category_id');
        return $this->belongsToMany(Formation::class, 'category_formation', 'category_id', 'formation_id');
    }
}
