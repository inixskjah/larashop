<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFeedbackRequest;
use App\Product;
use App\ProductFeedback;

class ProductFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $list = $product->feedback()
            ->with('user')
            ->get();

        return response()->json($list);
    }

    /**
     * Add feedback to Product.
     *
     * @param ProductFeedbackRequest $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFeedbackRequest $request, Product $product)
    {
        $feedback = ProductFeedback::create([
            "product_id"    => $product->id,
            "user_id"       => auth()->user()->id,
            "message"       => $request->message
        ]);

        return response()->json([
            "success" => true,
            "id"      => $feedback->id
        ]);
    }
}
