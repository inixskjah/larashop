<?php

namespace App\Strategy\Payment;

interface PaymentStrategyInterface
{
    /**
     * Payment processing
     *
     * @param float $amount
     * @return mixed
     */
    public function pay(float $amount);
}