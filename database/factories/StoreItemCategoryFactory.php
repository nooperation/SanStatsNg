<?php

use Faker\Generator as Faker;

$factory->define(App\StoreItemCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
