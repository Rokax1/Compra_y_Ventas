<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','description','price','stock'
    ];

    protected $casts = [

    ];

    public function user()
    {
        return $this->belongsToMany('App\User','product_users','product_id','user_id');
    }

    public function images()
    {
        return $this->hasMany('App\Modelos\Images');
    }
}
