<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        "payment_method_id",
        "order_id",
        "completed_at"
    ];
}
