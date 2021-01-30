<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\Product_user;
use Faker\Generator as Faker;

$factory->define(Product_user::class, function (Faker $faker) {
    return [
        'user_id' =>  factory(App\User::class),
        'product_id' =>  factory(App\Modelos\Products::class),
    ];
});
