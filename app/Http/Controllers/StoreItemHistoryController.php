<?php

namespace App\Http\Controllers;

use App\StoreItemHistory;
use Illuminate\Http\Request;

class StoreItemHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = factory(StoreItemHistory::class)->create();
        dd($history);
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
     * @param  \App\StoreItemHistory  $storeItemHistory
     * @return \Illuminate\Http\Response
     */
    public function show(StoreItemHistory $storeItemHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreItemHistory  $storeItemHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreItemHistory $storeItemHistory)
    {
        dd(factory(StoreItemHistory::class)->create());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreItemHistory  $storeItemHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreItemHistory $storeItemHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreItemHistory  $storeItemHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreItemHistory $storeItemHistory)
    {
        //
    }
}
