<?php

use Faker\Generator as Faker;

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'access_controls' => $faker->numberBetween(0,4),
        'compat_version' => 'compat_version',
        'curation' => $faker->numberBetween(),
        'description' => $faker->text,
        /* headcount */
        'handle' => $faker->uuid,
        'name' => $faker->company,
        /* personaName, personaHandle, personaId */
        'scene_asset_id' => 'scene_asset_id',
        'thumbnail_asset_id' => 'thumbnail_asset_id',
        'uri' => $faker->url,
        /* reviewCount */
        'is_listed' => $faker->boolean,
        'image_max' => $faker->url,
        'experience_updated_at' => $faker->dateTime,
        'experience_created_at' => $faker->dateTime,
        'is_published' => $faker->boolean,
        'agent_id' => factory(App\Agent::class),
    ];
});
