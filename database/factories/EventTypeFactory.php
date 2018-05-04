<?php

use Faker\Generator as Faker;

$factory->define(App\EventType::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(array('Update', 'Create', 'Delete')),
    ];
});
