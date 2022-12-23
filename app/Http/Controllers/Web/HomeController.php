<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\ProductService;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = CategoryService::getAllCategory();        
        $newProducts = ProductService::getNewProducts();
        $popularProducts = ProductService::getNewProducts();
        return view('web.home')->with(['categories' => $categories, 'popularProducts' => $popularProducts, 'newProducts' => $newProducts]);
    }
}
