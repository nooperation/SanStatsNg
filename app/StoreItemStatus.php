<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItemStatus extends Model
{
    public function store_item()
    {
        return $this->belongsTo(StoreItem::class);
    }
}
