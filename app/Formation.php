<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Formation extends Model
{
    public static function index_formations()
    {
        return Formation::limit(6)->latest()->get();
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
     * Get all of the packs for the Formation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packs()
    {
        return $this->hasMany(Pack::class, 'formation_id');
    }
}
