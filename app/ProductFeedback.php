<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeedback extends Model
{
    /**
     * User to feedback relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * TODO: Implement relationships
     */
}
