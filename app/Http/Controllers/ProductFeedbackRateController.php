<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFeedbackRateRequest;
use App\ProductFeedback;
use App\ProductFeedbackRate;

class ProductFeedbackRateController extends Controller
{

    /**
     * Give a rate to Product Feedback.
     *
     * @param ProductFeedbackRateRequest $request
     * @param ProductFeedback $productFeedback
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFeedbackRateRequest $request, ProductFeedback $productFeedback)
    {
        ProductFeedbackRate::create([
            "product_feedback_id" => $productFeedback->id,
            "user_id"             => auth()->user()->id,
            "value"               => $request->value
        ]);

        return response();
    }

}
