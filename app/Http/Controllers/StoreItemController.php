<?php

namespace App\Http\Controllers;

use App\StoreItem;
use App\StoreItemTag;
use App\StoreItemTagMap;
use Illuminate\Http\Request;

class StoreItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag1 = factory(StoreItemTag::class)->create();
        $tag2 = factory(StoreItemTag::class)->create();
        $tag3= factory(StoreItemTag::class)->create();
        $store_item = factory(StoreItem::class)->create();

        StoreItemTagMap::create(array(
            'store_item_tag_id' => $tag1->id,
            'store_item_id' => $store_item->id
        ));
        StoreItemTagMap::create(array(
            'store_item_tag_id' => $tag2->id,
            'store_item_id' => $store_item->id
        ));
        StoreItemTagMap::create(array(
            'store_item_tag_id' => $tag3->id,
            'store_item_id' => $store_item->id
        ));

        dd($store_item->store_item_tags);
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
     * @param  \App\StoreItem  $storeItem
     * @return \Illuminate\Http\Response
     */
    public function show(StoreItem $storeItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreItem  $storeItem
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreItem $storeItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreItem  $storeItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreItem $storeItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreItem  $storeItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreItem $storeItem)
    {
        //
    }
}
