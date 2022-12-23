<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getProducts(Request $request)
    {
        $datas = ProductService::getAllProduct();
        return response()->json(['status' => true, 'message' => 'Data get successfully', 'data' => $datas]);
    } 

    public function getProductDetail(Request $request)
    {
        $input = $request->all();
        $rules = array(
            'product_id' => 'required'
         );
        // validation 
        $validator  = Validator::make($input, $rules);
        $res = validationFailer($validator);
        if ($res['status'] == false) {
            return response()->json(['status' => false,'msg' => $res['msg']], 200);
        }

        $datas = ProductService::productCoreQuery();
        $datas = $datas->where('P.id',$request->product_id);
        $datas = ProductService::productCoreSelect($datas);
        $datas = $datas->get();

       $datas = ProductService::getProductById($request->product_id);
        return response()->json(['status' => true, 'message' => 'Data get successfully', 'data' => $datas]);
    } 



    public function getProductListByCategory(Request $request)
    {
        $input = $request->all();
        $rules = array(
            'category_id' => 'required'
         );
        // validation 
        $validator  = Validator::make($input, $rules);
        $res = validationFailer($validator);
        if ($res['status'] == false) {
            return response()->json(['status' => false,'msg' => $res['msg']], 200);
        }

        $datas = ProductService::getReletedProduct($request->category_id);
        return response()->json(['status' => true, 'message' => 'Data get successfully', 'data' => $datas]);
    } 



    
     
}
