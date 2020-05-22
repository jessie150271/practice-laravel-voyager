<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TestForeignOrder;
use Faker\Generator as Faker;

$factory->define(TestForeignOrder::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->numberBetween(1, 10)
    ];
});
