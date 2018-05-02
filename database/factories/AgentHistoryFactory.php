<?php

use Faker\Generator as Faker;

$factory->define(App\AgentHistory::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'handle' => $faker->userName,
        'name' => $faker->userName,
        'agent_id' => factory(App\Agent::class)
    ];
});
