<?php

use Faker\Generator as Faker;

$factory->define(\App\StoreItemTagMap::class, function (Faker $faker) {
    return [
        'store_item_tag_id' => factory(App\StoreItemTag::class),
        'store_item_id' => factory(App\StoreItem::class),
    ];
});
