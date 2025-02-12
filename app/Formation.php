<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Formation extends Model
{
    public static function index_formations()
    {
        return Formation::orderBy('date', 'asc')->limit(6)->get();
    }

    public static function index_formations_limit($limit = 6)
    {
        $query = self::orderBy('date', 'asc');
        if ($limit) {
            $query->take($limit);
        }
        return $query->get();
    }


    /**
     * Get the category that owns the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    /**
     * Get the doctor that owns the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }


    /**
     * Get all of the extraits for the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function extraits()
    {
        return $this->hasMany(Extrait::class, 'formation_id');
    }

    
    /**
     * The packs that belong to the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function packs()
    {
        return $this->belongsToMany(Pack::class, 'pack_formation');
    }
    

    /**
     * Get all of the resources for the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resources()
    {
        return $this->hasMany(Resource::class, 'formation_id');
    }


    /**
     * Get all of the orders for the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'formation_id');
    }


    /**
     * Get all of the comments for the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'formation_id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_formation'); // 'category_formation' is the pivot table name
    }
}
