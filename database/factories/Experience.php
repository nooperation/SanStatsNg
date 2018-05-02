<?php

use Faker\Generator as Faker;

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->company,
        'description' => $faker->text,
        'uri' => $faker->url,
        'compat_version' => 'compat_version',
        'handle' => $faker->uuid,
        'scene_asset_id' => 'scene_asset_id',
        'thumbnail_asset_id' => 'thumbnail_asset_id',
        'curation' => $faker->numberBetween(),
        'image_max' => $faker->url,
        'is_published' => $faker->boolean,
        'access_controls' => $faker->numberBetween(0,4),
        'is_listed' => $faker->boolean,
        'agent_id' => 0,
    ];
});
