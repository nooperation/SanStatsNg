<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItemCategory extends Model
{
    public function store_item()
    {
        return $this->belongsTo(StoreItem::class);
    }
}
