<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItemTag extends Model
{
    public function store_items()
    {
        return $this->belongsToMany(StoreItem::class, 'store_item_tag_maps');
    }
}
