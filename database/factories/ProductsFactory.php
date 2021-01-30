<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(2),
        'description' =>$faker->paragraph,
        'price' => $faker->randomNumber(4)
    ];
});
