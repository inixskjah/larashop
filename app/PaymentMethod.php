<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    /**
     * Get payment method code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
