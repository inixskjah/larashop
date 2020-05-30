<?php

namespace App\Strategy\Payment;

class ApplePayPaymentStrategy implements PaymentStrategyInterface
{

    public function __construct()
    {
        // API keys, credentials, etc
    }

    /**
     * Payment processing
     *
     * @param float $amount
     * @return mixed
     */
    public function pay(float $amount)
    {
        $paymentDetails = [];

        // TODO: Implement payment logics.

        return $paymentDetails;
    }
}