<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItemHistory extends Model
{
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function store_item()
    {
        return $this->belongsTo(StoreItem::class);
    }

    public function store_item_status()
    {
        return $this->hasOne(StoreItemStatus::class);
    }

    public function event_type()
    {
        return $this->hasOne(EventType::class);
    }
}
