<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Payment extends Model
{
    protected $fillable = [
        "payment_method_id",
        "order_id"
    ];

    public function complete()
    {
        $this->completed_at = Carbon::now()->toDateTimeString();
        $this->save();
    }
}
