<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "title", "description"
    ];

    /**
     * TODO: Implement relationships
     */

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
