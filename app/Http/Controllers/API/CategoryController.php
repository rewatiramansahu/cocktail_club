<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Services\CategoryService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCategories(Request $request)
    {
        $categories = CategoryService::getAllCategory();
        return response()->json(['status' => true, 'message' => 'Category fetch successfully', 'data' => $categories]);
    } 

    
     
}
