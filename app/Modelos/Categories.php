<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','parent_id'
    ];

    public function parent() {
        return $this->belongsTo('App\Modelos\Categories', 'parent_id');
    }


    public function children() {
        return $this->hasMany('App\Modelos\Categories', 'parent_id','id');
    }
}
