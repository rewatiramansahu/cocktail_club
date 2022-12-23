<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
class CartService
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public static function getCarts($colum = ['*'])
    {
        $data = Cart::select($colum)->with('products')->get();       
        return $data;        
    }


}
