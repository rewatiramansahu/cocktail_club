<?php
namespace App\Services;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public static function registerUser($param)
    {
        try {
            $param['password'] = Hash::make($param['password']);
            $user = User::create($param);
            return $user->id;
        } catch(Exception $e) {
            return false;
        }   
    } 
    public static function getUserById($id, $colums = '*') 
    {
        $user = User::select($colums)->where('id', $id)->first();
        return $user;
    } 
}
