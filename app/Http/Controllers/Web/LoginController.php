<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\UserLogin;
class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return view('web.login');
    }
    public function loginCheck(UserLogin $request)
    {
        $user = $request->validated();
        $token = AuthService::login($user);
        if($token) {
            return redirect()->route('web-home');
        }else
        return back()->with('error','Invailid username password')->withInput();
    }
    public function logout() {
        auth()->logout();
        return redirect()->route('web-login');
    }
}
