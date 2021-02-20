<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modelos\Categories;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(1),
        'commission' => $faker->randomNumber(2)
    ];
});
