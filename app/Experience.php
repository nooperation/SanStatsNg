<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function agent()
    {
        return $this->belongsTo('App\Agent');
    }

    public function experience_history()
    {
        return $this->hasMany('App\ExperienceHistory');
    }
}
