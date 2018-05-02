<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function agent()
    {
        return $this->hasOne('App\Agent');
    }
}
