<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductService;
class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $search = array();
        $search['category'] = $request->query('category_id',null);
        $search['size'] = $request->query('size',null);
        $search['price'] = $request->query('price',null);
        $products = ProductService::filterProduct($search);
        return view('web.products')->with(['products' => $products]);
    }
    public function productDetail($slug, Request $request)
    {
        $product = ProductService::getProductBySlug($slug);
        $reletedProducts = ProductService::getReletedProduct($product->category_id);
        return view('web.product-detail')->with(['product' => $product, 'reletedProducts' => $reletedProducts]);
    }
    
}
