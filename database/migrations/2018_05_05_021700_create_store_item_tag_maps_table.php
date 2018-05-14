<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreItemTagMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_item_tag_maps', function (Blueprint $table) {
            $table->unsignedInteger('store_item_tag_id')->index();
            $table->foreign('store_item_tag_id')
                  ->references('id')
                  ->on('store_item_tags');

            $table->unsignedInteger('store_item_id')->index();
            $table->foreign('store_item_id')
                  ->references('id')
                  ->on('store_item');

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
        Schema::dropIfExists('store_item_tag_maps');
    }
}
