<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name','description','price'
    ];

    protected $casts = [

    ];
}
