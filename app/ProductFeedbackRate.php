<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeedbackRate extends Model
{
    protected $fillable = [
        "product_feedback_id",
        "user_id",
        "value",
    ];

    /**
     * TODO: Implement relationships
     */
}
