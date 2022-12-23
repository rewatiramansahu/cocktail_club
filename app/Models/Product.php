<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    public function getImgAttribute()
    {
        return asset('public/product/images')."/".$this->attributes['img'];
    }
    public function psizes()
    {
        return $this->hasMany('App\Models\ProductPrice','product_id');
    }

    public function carts()
    {
        return $this->hasMany('App\Models\Cart','product_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

}
