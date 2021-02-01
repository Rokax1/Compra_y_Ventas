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

    public function user()
    {
        return $this->belongsToMany('App\User','product_users','product_id','user_id');
    }
}
