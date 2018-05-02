<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceHistory extends Model
{
    public function agent()
    {
        return $this->belongsTo('App\Agent');
    }

    public function experience()
    {
        return $this->belongsTo('App\Experience');
    }
}
