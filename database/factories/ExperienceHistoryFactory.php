<?php

use Faker\Generator as Faker;

$factory->define(App\ExperienceHistory::class, function (Faker $faker) {
    $parent = factory(App\Experience::class)->create();

    return [
        'uuid' => $parent->uuid,
        'access_controls' => $faker->numberBetween(0,4),
        'compat_version' => 'compat_version',
        'curation' => $faker->numberBetween(),
        'description' => $faker->text,
        'handle' => $faker->uuid,
        'name' => $faker->company,
        'scene_asset_id' => 'scene_asset_id',
        'thumbnail_asset_id' => 'thumbnail_asset_id',
        'uri' => $faker->url,
        'is_listed' => $faker->boolean,
        'image_max' => $faker->url,
        'experience_updated_at' => $faker->dateTime,
        'experience_created_at' => $parent->experience_created_at,
        'is_published' => $faker->boolean,
        'agent_id' => $parent->agent_id,
        'experience_id' => $parent->id
    ];
});
