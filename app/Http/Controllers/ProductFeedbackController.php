<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFeedbackRequest;
use App\ProductFeedback;

class ProductFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ProductFeedback::with('user')->get();

        return response()->json($list);
    }

    /**
     * Add feedback to Product.
     *
     * @param ProductFeedbackRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFeedbackRequest $request)
    {
        $feedback = ProductFeedback::create([
            "product_id"    => $request->product_id,
            "user_id"       => auth()->user()->id,
            "message"       => $request->message
        ]);

        return response()->json([
            "success" => true,
            "id"      => $feedback->id
        ]);
    }
}
