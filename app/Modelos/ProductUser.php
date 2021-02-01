<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
   // protected $table='product_users';


    protected $fillable = [
        'user_id','product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Modelos\Products','product_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
