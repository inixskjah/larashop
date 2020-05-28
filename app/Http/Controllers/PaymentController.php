<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Payment;
use Carbon\Carbon;

class PaymentController extends Controller
{

    /**
     * Store Payment to DB
     *
     * @param PaymentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PaymentRequest $request)
    {
        $payment = Payment::create([
            "payment_method_id" => $request->payment_method_id,
            "order_id"          => $request->order_id,
            "completed_at"      => Carbon::now()->toDateTimeString()
        ]);

        return response()->json([
            "success" => true,
            "id"      => $payment->id
        ]);
    }
}
