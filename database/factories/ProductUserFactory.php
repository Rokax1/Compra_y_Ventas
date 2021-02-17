<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\ProductUser;
use Faker\Generator as Faker;

$factory->define(ProductUser::class, function (Faker $faker) {
    return [
        'user_id' =>  factory(App\User::class),
        'product_id' =>  factory(App\Modelos\Product::class),
    ];
});
