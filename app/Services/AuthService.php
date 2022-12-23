<?php

namespace App\Services;
use Illuminate\Support\Facades\Request;
class AuthService
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public static function login($param)
    {
        if (!auth()->attempt($param)) {
           return false;
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return $accessToken;
    }
}
