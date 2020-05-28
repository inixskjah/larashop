<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        "checkout_amount",
        "product_id"
    ];

    /**
     * Set User for this order
     *
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user_id = $user->id;
        $this->save();
    }

    /**
     * TODO: Implement relationships
     */
}
