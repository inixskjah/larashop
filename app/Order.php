<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        "checkout_amount",
        "product_id",
        "user_id"
    ];

    /**
     * TODO: Implement relationships
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
