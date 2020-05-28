<?php

namespace App\Http\Controllers;

use App\Http\Requests\WishlistRequest;
use App\WishlistItem;

class WishlistController extends Controller
{
    /**
     * Add product to wishlist.
     *
     * @param WishlistRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WishlistRequest $request)
    {
        WishlistItem::create([
            "product_id" => $request->product_id,
            "user_id"    => auth()->user()->id
        ]);

        return response();
    }

}
