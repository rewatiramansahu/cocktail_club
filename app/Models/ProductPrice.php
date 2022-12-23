<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'size_id', 'price', 'created_at', 'updated_at'];

   
    public function products()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }

    public function sizes()
    {
        return $this->belongsTo('App\Models\Size','size_id');
    }
}
