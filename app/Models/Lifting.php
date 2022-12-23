<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lifting extends Model
{
    use HasFactory;
    protected $table = 'lifting';
    protected $fillable = [
        'product_id',
        'qty',
        'lifting_date',
        'remark',
        'img', 
        'user_id',                
    ];
   
}
