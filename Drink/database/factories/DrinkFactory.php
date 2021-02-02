<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name' => $faker -> word(),
        'gradazione' => rand(1, 90),
        'prezzo' => rand(10, 90),
    ];
});
