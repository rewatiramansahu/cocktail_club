<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function setNameAttribute($value)
    {
        return $this->attributes['name'] =  ucFirst($value);
    }
    
    public function getNameAttribute()
    {
        return ucFirst($this->attributes['name'] );
    }
    public function getImgAttribute()
    {
        return asset('public/category')."/".$this->attributes['img'];
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product','category_id');
    }
}
