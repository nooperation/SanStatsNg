<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function experience()
    {
        return $this->belongsTo('App\Experience');
    }
}
