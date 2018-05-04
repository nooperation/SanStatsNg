<?php

use Faker\Generator as Faker;

$factory->define(App\StoreItem::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->name,
        'description' => $faker->text,
        'inventory_name' => $faker->name,
        'price' => $faker->randomNumber(),
        'featured_on' => $faker->url,
        'uri' => $faker->url,
        'image' => $faker->url,
        'is_published' => $faker->boolean,
        'agent_id' => factory(App\Agent::class),
        'store_item_status_id' => factory(App\StoreItemStatus::class),
        'store_tag_map_id' => 0
    ];
});
