<?php

namespace App\Services;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
class ProductService
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public static function getAllProduct($colum = ['*'])
    {
        $data = Product::select($colum)->get();       
        return $data;        
    }

    public static function getProductById($id, $colum = ['*'])
    {
        $data = Product::select($colum)->with('psizes.sizes')->where('id',$id)->first();
        return $data;        
    }
    public static function getProductBySlug($slug, $colum = ['*'])
    {
        $data = Product::select($colum)->where('slug',$slug)->first();
        return $data;        
    }
    public static function getPopularProducts($colum = ['*'])
    {
        $data = Product::select($colum)->where('popular',1)->get();
        return $data;        
    }
    public static function getNewProducts($colum = ['*'])
    {
        $data = Product::select($colum)->where('whats_new',1)->get();
        return $data;        
    }
    public static function getReletedProduct($category_id,$colum = ['*'])
    {
        $data = Product::select($colum)->where('category_id',$category_id)->get();
        return $data;        
    }
    public static function filterProduct($keyes = [])
    {
       $products = Product::query();
      // $products->whereIn('category_id',$keyes['categories']);
       return $products->get();      
    }

    public static function productCoreQuery() {
        $liftings = DB::table('products as P')
        ->LeftJoin('product_prices as PP','P.id','=','PP.product_id')        
        ->LeftJoin('sizes as S','S.id','=','PP.size_id');

        return $liftings;
    }
    public static function productCoreSelect($query){
        $query->select('P.*','S.size as size','S.unit as unit','S.id as size_id','PP.price as price');
        return $query;
    } 
}
