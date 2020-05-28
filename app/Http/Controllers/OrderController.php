<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    /**
     * Create an Order.
     *
     * @param OrderRequest $request
     * @return JsonResponse
     */
    public function store(OrderRequest $request)
    {
        $order = Order::create([
            "checkout_amount" => $request->checkout_amount,
            "product_id"      => $request->product_id,
            "user_id"         => auth()->user()->id
        ]);

        return response()->json([
            "success" => true,
            "id"      => $order->id
        ]);
    }
}
