<?php

namespace Tests\Unit;

use App\StoreItem;
use App\StoreItemTag;
use App\StoreItemTagMap;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreItemTagTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreItemToStoreItemTag()
    {
        // Create StoreItem and StoreItemTag
        $store_item = factory(StoreItem::class)->create();
        $store_item_tag = factory(StoreItemTag::class)->create();

        // Attach StoreItemTag to StoreItem
        $store_item->store_item_tags()->attach($store_item_tag->id);

        // Confirm StoreItemTag is attached to StoreItem
        $store_item_tags = $store_item->store_item_tags->toArray();
        $this->assertCount(1, $store_item_tags);
        $this->assertEquals($store_item_tag->id, $store_item_tags[0]['id']);
    }

    public function testStoreItemTagToStoreItem()
    {
        // Create StoreItem and StoreItemTag
        $store_item = factory(StoreItem::class)->create();
        $store_item_tag = factory(StoreItemTag::class)->create();

        // Attach StoreItem to StoreItemTag
        $store_item_tag->store_items()->attach($store_item->id);

        // Confirm StoreItem is attached to StoreItemTag
        $store_items = $store_item_tag->store_items->toArray();
        $this->assertCount(1, $store_items);
        $this->assertEquals($store_item->id, $store_items[0]['id']);
    }
}
