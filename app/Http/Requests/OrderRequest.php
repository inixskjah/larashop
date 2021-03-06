<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "checkout_amount"   => "required|numeric|min:0.01",
            "product_id"        => "required|exists:App\Product,id"
        ];
    }
}
