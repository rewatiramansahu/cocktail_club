<?php
namespace App\Services;
use App\Models\Category;

class CategoryService
{

    public static function getAllCategory($colum = ['id','name','img','slug'])
    {
         $cat = Category::select($colum)->get();
         return $cat;
    }
    
}
