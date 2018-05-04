<?php

namespace App\Http\Controllers;

use App\StoreItemStatus;
use Illuminate\Http\Request;

class StoreItemStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store_item_status = factory(StoreItemStatus::class)->create();
        dd($store_item_status);
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
     * @param  \App\StoreItemStatus  $storeItemStatus
     * @return \Illuminate\Http\Response
     */
    public function show(StoreItemStatus $storeItemStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreItemStatus  $storeItemStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreItemStatus $storeItemStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreItemStatus  $storeItemStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreItemStatus $storeItemStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreItemStatus  $storeItemStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreItemStatus $storeItemStatus)
    {
        //
    }
}
