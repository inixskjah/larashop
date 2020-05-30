<?php
/**
 * Created by PhpStorm.
 * User: parallels
 * Date: 5/30/20
 * Time: 5:07 AM
 */

namespace App\Services;


use App\Payment;
use App\Strategy\Payment\PaymentStrategyInterface;

class PaymentService
{

    /**
     * Process payment with given payment method
     *
     * @param Payment $payment
     * @param PaymentStrategyInterface $paymentStrategy
     * @return bool|mixed
     */
    public function processPayment(Payment $payment, PaymentStrategyInterface $paymentStrategy)
    {
        $paymentDetails = $paymentStrategy->pay($payment->order->checkout_amount);

        if ($paymentDetails) {
            $payment->complete();
            return $paymentDetails;
        }

        return false;
    }
}