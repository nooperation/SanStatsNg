<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function experience()
    {
        return $this->hasMany('App\Experience');
    }

    public function agent_history()
    {
        return $this->hasMany('App\AgentHistory');
    }
}
