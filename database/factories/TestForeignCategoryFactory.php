<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TestForeignCategory;
use Faker\Generator as Faker;

$factory->define(TestForeignCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
