<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Users_Products extends Model
{

    protected $fillable = [
        'user_id','product_id'
    ];

}
