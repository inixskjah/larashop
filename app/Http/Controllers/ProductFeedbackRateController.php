<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFeedbackRateRequest;
use App\Product;
use App\ProductFeedback;
use App\ProductFeedbackRate;

class ProductFeedbackRateController extends Controller
{

    /**
     * Give a rate to Product Feedback.
     *
     * @param ProductFeedbackRateRequest $request
     * @param Product $product
     * @param ProductFeedback $productFeedback
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFeedbackRateRequest $request, Product $product, ProductFeedback $productFeedback)
    {
        ProductFeedbackRate::create([
            "product_feedback_id" => $productFeedback->id,
            "user_id"             => auth()->user()->id,
            "value"               => $request->value
        ]);

        return response();
    }

}
