<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Product_User extends Model
{

    protected $table = 'product_user';

    protected $fillable = [
        'user_id', 'product_id'
    ];



}


