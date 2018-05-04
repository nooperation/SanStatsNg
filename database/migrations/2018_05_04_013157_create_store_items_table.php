<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_items', function (Blueprint $table) {
            $table->increments('id');
            $table->char('uuid', 36);
            $table->char('name', 100);
            $table->text('description');
            $table->char('inventory_name', 100);
            $table->integer('price');
            $table->char('featured_on', 256);
            $table->char('uri', 300);
            $table->char('image', 256);
            $table->boolean('is_published');
            $table->integer('agent_id');
            $table->integer('store_item_status_id');
            $table->integer('store_tag_map_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_items');
    }
}
