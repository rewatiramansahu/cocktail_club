<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreation;
use App\Services\UserService;
class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerSave(UserCreation $request)
    {
       $param = $request->validated();
       $user = UserService::registerUser($param);
       if($user){
        return redirect()->route('web-login')->with('success','register successfuly now you can login');
       }else
       return back()->with('error','Something went wrong');
    }
    public function registerForm(Request $request)
    {
        return view('web.register');
    }
    public function profile(Request $request)
    {
        return view('web.profile');
    }
    public function Order(Request $request)
    {
        return view('web.order');
    }
    public function wishList(Request $request)
    {
        return view('web.wish-list');
    }
    public function cart(Request $request)
    {
        return view('web.cart');
    }

    
}
