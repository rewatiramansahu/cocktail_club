<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasonDealer extends Model
{
    use HasFactory;
    protected $table = 'mason_dealers';
    protected $fillable = ['id','mason_id', 'dealer_id'];
}
