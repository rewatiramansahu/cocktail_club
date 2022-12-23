<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\Auth\AuthController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\CategoryController;



use Illuminate\Foundation\Auth\EmailVerificationRequest;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/unauthorization', function(){
    return response()->json(['status' => false,'message'=>'Unauthrization']);
})->name('login');


/*=====[ API ]=========*/
Route::group(['namespace' => 'App\Http\Controllers\API'],function(){
    Route::post('/register','UserController@register');
    Route::post('/login','UserController@login');    
    Route::post('/forgot-password', ['uses' => 'UserController@forgotPassword'])->middleware(['appjson']);
    Route::post('/change-password', ['uses' => 'UserController@ChangePassword'])->middleware(['appjson']);
    Route::get('/profile','UserController@profile')->middleware('auth:api');
    Route::get('/categories','CategoryController@getCategories');
    Route::get('/product-list','ProductController@getProducts');
    Route::post('/product-detail','ProductController@getProductDetail');
    Route::post('/add-to-cart','CartController@addCart');
    Route::post('/view-cart','CartController@viewCarts');
    Route::post('/product-by-category','ProductController@getProductListByCategory');
});



//
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth:api', 'signed'])->name('verification.verify');
Route::apiResource('settings', SettingController::class)->middleware('auth:api');