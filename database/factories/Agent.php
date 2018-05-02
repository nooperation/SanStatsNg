<?php

use Faker\Generator as Faker;

$factory->define(App\Agent::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'handle' => $faker->userName,
        'name' => $faker->userName,
    ];
});
