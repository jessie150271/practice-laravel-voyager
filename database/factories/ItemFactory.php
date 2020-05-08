<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'category' => $faker->numberBetween(1, 3),
        'name' => $faker->word,
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->numberBetween(50, 1000),
        'sort' => $faker->numberBetween(1, 20)
    ];
});
