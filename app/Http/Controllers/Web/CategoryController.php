<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Models\Category;
use Illuminate\Http\Request;
use App\Services\CategoryService;
class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCategory()
    {
        $category = CategoryService::getAllCategory();
        dd( $category);
        return view('web.c');
    }
}
