<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TestForeignItemOrder;
use Faker\Generator as Faker;

$factory->define(TestForeignItemOrder::class, function (Faker $faker) {
    return [
        'item_id'=>$faker->numberBetween(1,10),
        'order_id'=>$faker->numberBetween(1,20),
        'qty'=>$faker->numberBetween(1,5)
    ];
});
