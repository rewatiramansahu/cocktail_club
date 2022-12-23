<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\UserService;
use App\Services\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewCarts(Request $request)
    {
        $datas = CartService::getCarts();
        return response()->json(['status' => true, 'message' => 'Data get successfully', 'data' => $datas]);
    } 



    public function addCart(Request $request)
    {
        $input = $request->all();
        $rules = array(
            'user_id' => 'required',
            'product_id' => 'required',
            'size_id' => 'required',
            'qty' => 'required',
         );
        // validation 
        $validator  = Validator::make($input, $rules);
        $res = validationFailer($validator);
        if ($res['status'] == false) {
            return response()->json(['status' => false,'msg' => $res['msg']], 200);
        }
        $datas = Cart::create([
            'user_id'  => $request->user_id, 
            'product_id'  => $request->product_id, 
            'size_id'         => $request->size_id,
            'qty'         => $request->qty
            ]) ;

            if(empty($datas)) {
                return response()->json(['status'=> false,'msg' => "fail add to cart", 'data' => []], 200);
            }
            return response()->json(['status'=> true,'msg' => "Cart Added Successfully", 'data' => $datas], 200);
    } 



    
     
}
