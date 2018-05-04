<?php

use Faker\Generator as Faker;

$factory->define(App\StoreItemStatus::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(array('listed')),
    ];
});
