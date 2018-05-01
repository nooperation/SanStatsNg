<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    public function Index()
    {
        $agents = Agent::all();
        return view('agent.index', compact('agents'));
    }

    public function Show(Agent $agent)
    {
        return view('agent.show', compact('agent'));
    }
}
