<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\API\V1\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('web.shop');
    }
}
