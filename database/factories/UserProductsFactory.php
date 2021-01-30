<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Modelos\Users_Products;
use Faker\Generator as Faker;

$factory->define(Users_Products::class, function (Faker $faker) {
    return [

            'user_id' =>  factory(App\User::class),
            'product_id' =>  factory(App\Modelos\Products::class),

    ];
});
