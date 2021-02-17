<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(2),
        'description' =>$faker->paragraph,
        'price' => $faker->randomNumber(5),
        'stock' => $faker->randomNumber(3)
    ];
});
