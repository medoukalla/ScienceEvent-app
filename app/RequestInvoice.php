<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RequestInvoice extends Model
{
    protected $table = 'request_invoice';

    /**
     * Get the order that owns the RequestInvoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

}
