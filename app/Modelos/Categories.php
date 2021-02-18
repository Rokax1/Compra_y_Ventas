<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name','commission_id'
    ];
}
