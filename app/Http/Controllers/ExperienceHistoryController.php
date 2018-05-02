<?php

namespace App\Http\Controllers;

use App\ExperienceHistory;
use Illuminate\Http\Request;

class ExperienceHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = factory(ExperienceHistory::class)->create();
        dd([
            'Agent' => $history->agent,
            'Agent_Histories' => $history->agent->agent_history,
            'Experience' => $history->experience,
            'Experience_Histories' => $history->experience->experience_history
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExperienceHistory  $experienceHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ExperienceHistory $experienceHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExperienceHistory  $experienceHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperienceHistory $experienceHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExperienceHistory  $experienceHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExperienceHistory $experienceHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExperienceHistory  $experienceHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperienceHistory $experienceHistory)
    {
        //
    }
}
