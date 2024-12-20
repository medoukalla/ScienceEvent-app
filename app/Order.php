<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * Get the formation that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }
}
