<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    protected $fillable = [
        "product_id",
        "user_id"
    ];
}
