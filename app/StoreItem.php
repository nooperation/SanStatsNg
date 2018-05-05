<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItem extends Model
{
    public function store_item_tags()
    {
        return $this->belongsToMany(StoreItemTag::class, 'store_item_tag_maps');
    }
}
