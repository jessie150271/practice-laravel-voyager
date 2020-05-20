<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TestForeignItem;
use Faker\Generator as Faker;

$factory->define(TestForeignItem::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 5),
        'name' => $faker->word
    ];
});
