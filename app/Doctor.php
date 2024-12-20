<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Doctor extends Model
{
    /**
     * Get all of the formations for the Doctor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formations()
    {
        return $this->hasMany(Formation::class, 'doctor_id');
    }
}
