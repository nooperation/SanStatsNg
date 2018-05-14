<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreItemTagMap extends Model
{
    protected $fillable = ['store_item_tag_id', 'store_item_id'];
}
