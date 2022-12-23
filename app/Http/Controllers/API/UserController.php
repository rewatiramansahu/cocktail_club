<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreation;
use App\Http\Requests\UserLogin;
use App\Models\User;
use App\Models\OTP;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
       $userCreaation = new UserCreation();
       $rules = $userCreaation->rules();
       $attributes = $userCreaation->attributes();
       $message = $userCreaation->attributes();
       $inputs = $request->all();
       $validator = Validator::make($inputs, $rules, $message, $attributes);
       $validationRes = validateInput($validator);
       if($validationRes['status'] == false){
        return response()->json(['status' => false, 'message' => $validationRes['msg'], 'data' => []]);
       }
       $validatedData = $validationRes['validated_data'];
       $user = UserService::registerUser($validatedData);
       if($user){
        return response()->json(['status' => true, 'message' => 'Register Successfully', 'data' => $user]);
       }else
       return response()->json(['status' => false, 'message' => 'Something went wrong', 'data' => []]);
    } 

    public function login(Request $request)
    {
       $userCreaation = new UserLogin();
       $rules = $userCreaation->rules();
       $attributes = $userCreaation->attributes();
       $message = $userCreaation->attributes();
       $inputs = $request->all();
       $validator = Validator::make($inputs, $rules, $message, $attributes);
       $validationRes = validateInput($validator);
       if($validationRes['status'] == false){
        return response()->json(['status' => false, 'message' => $validationRes['msg'], 'data' => []]);
       }
       $validatedData = $validationRes['validated_data'];
       $token = AuthService::login($validatedData);
       if($token){
        return response()->json(['status' => true, 'message' => 'Login successfully', 'data' => ['user' => Auth::user(), 'token' => $token]]);
       }else
       return response()->json(['status' => false, 'message' => 'Something went wrong', 'data' => []]);
    }
    public function profile(Request $request)
    {
        $profile = UserService::getUserById($request->user()->id);
        return response()->json(['status' => true, 'message' => 'Profile fetch successfully', 'data' => $profile ]);
    }



    function forgotPassword(Request $request)
    {
        $input = $request->all();
        $rules = array(
                    'email' => 'required|email',
                 );
        $re_message = "";

        // validation 
        $validator  = Validator::make($input,$rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            $e = $errors->first();
            return response()->json(['status' => false,'message' =>$e], 400);
        }
        $inputdata = $validator->validated();
        $user = User::where('email',$inputdata['email'])->first();
        if($user)
        {
            $otp = rand(0,9999);
            OTP::updateOrCreate(['email' => $user->email],['otp'=>$otp,'email'=>$inputdata['email']]);
            $msg = 'OTP for reset password: '.$otp;
            mail($user->email,"OTP",$msg);
            $re_message = 'OTP sent for reset password';
            return response()->json(['status' => true, 'message' => $re_message, 'data'=>['email'=> $user->email]]);
        }else
        {
            $re_message = 'Email does not exists!';
            return response()->json(['status' => false, 'message' => $re_message],400);
        }
    }
    function ChangePassword(Request $request)
    {
        $input = $request->all();
        $rules = array(
                        'new_password' => 'required|min:6',
                        'c_new_password' => 'required|same:new_password',
                        'otp' => 'required',
                        'email' => 'required|email',
                    );
        $messages = array(
                       
                    );
        $re_message = "";

        $attributes = array(
            'new_password' => 'new password',
            'c_new_password' => 'confirm new password',

        );

        // validation 
        $validator  = Validator::make($input,$rules,$messages,$attributes);
        if ($validator->fails()) {
            $errors = $validator->errors();
            $e = $errors->first();
            return response()->json(['status' => false,'message' =>$e], 400);
        }
        $inputdata = $validator->validated();
        $otp = OTP::where('otp',$inputdata['otp'])->where('email',$inputdata['email'])->first();
        if($otp)
        {
             
            $date1 = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now());
            $date2 = Carbon::createFromFormat('Y-m-d H:i:s', $otp->updated_at)->addMinutes(5);
            if($date1->gt($date2))
            {
                
                return response()->json(['status' => false, 'message' => 'OTP expired '],400);
            }else
            {
                $user = User::where('email',$inputdata['email'])->first();
                $user->password = Hash::make($inputdata['new_password']);
                $user->save();
                return response()->json(['status' => true ,'message' => "Password Changed successfully"]);
            }

           
        }else
        {
            $re_message = 'Invalid OTP';
            return response()->json(['status' => false, 'message' => $re_message],400);
        }
    }
    
     
}
