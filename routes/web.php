<?php

use Illuminate\Support\Facades\Route;
use Twilio\TwiML\Video\Room;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'App\Http\Controllers\Web','as' => 'web-'],function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about-us', 'AboutController@index')->name('about-us');
    Route::get('/contact-us', 'ContactController@index')->name('contact-us');
    Route::get('/products', 'ProductController@index')->name('product');
    Route::get('/login', 'LoginController@login')->name('login');
    Route::get('/faq', 'FAQController@index')->name('faq');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::post('/login', 'LoginController@loginCheck')->name('login-check');
    Route::get('/register', 'UserController@registerForm')->name('register');
    Route::post('/register', 'UserController@registerSave')->name('register-save');
    Route::group(['middleware' => ['auth:web']],function(){
        Route::get('/profile', 'UserController@profile')->name('profile');
        Route::get('/order', 'UserController@order')->name('order');
        Route::get('/cart', 'UserController@cart')->name('cart');
        Route::get('/wish-list', 'UserController@wishList')->name('wishlist');
    });
    Route::get('/{slug}', 'ProductController@productDetail')->name('product-detail');
});
