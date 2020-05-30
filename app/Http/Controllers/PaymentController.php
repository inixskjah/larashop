<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Payment;
use App\PaymentMethod;
use App\Services\PaymentService;
use App\Strategy\Payment\ApplePayPaymentStrategy;
use App\Strategy\Payment\PayPalPaymentStrategy;
use App\Strategy\Payment\StripePaymentStrategy;

class PaymentController extends Controller
{

    /**
     * Store Payment to DB
     *
     * @param PaymentRequest $request
     * @param PaymentService $paymentService
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PaymentRequest $request, PaymentService $paymentService)
    {
        $payment = Payment::create([
            "payment_method_id" => $request->payment_method_id,
            "order_id"          => $request->order_id
        ]);

        $paymentMethod = PaymentMethod::find($request->payment_method_id);
        $paymentStrategy = null;

        switch ($paymentMethod->getCode())
        {
            case 'apple_pay':   $paymentStrategy = new ApplePayPaymentStrategy(); break;
            case 'stripe':      $paymentStrategy = new StripePaymentStrategy();   break;
            case 'paypal':      $paymentStrategy = new PayPalPaymentStrategy();   break;
        }

        $paymentDetails = $paymentService->processPayment($payment, $paymentStrategy);

        return response()->json($paymentDetails);
    }
}
