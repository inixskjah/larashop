<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductCoverImageController extends Controller
{

    /**
     * Add product cover image
     *
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {

        $product->images()->update([
            "is_cover" => false
        ]);

        ProductImage::create([
            "url"           => $request->url,
            "product_id"    => $product->id,
            "is_cover"      => true
        ]);

        return response();
    }
}
