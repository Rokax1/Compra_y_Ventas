<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'product_id','url'
    ];

    public function product()
    {
        return $this->belongsTo('App\Modelos\images');
    }
}
