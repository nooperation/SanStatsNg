<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->char('uuid', 36);
            $table->char('name', 36);
            $table->char('description', 1024);
            $table->char('uri', 300);
            $table->char('compat_version', 32);
            $table->char('handle', 64);
            $table->char('scene_asset_id', 32);
            $table->char('thumbnail_asset_id', 32);
            $table->integer('curation');
            $table->char('image_max', 128);
            $table->boolean('is_published');
            $table->integer('access_controls');
            $table->boolean('is_listed');
            $table->integer('agent_id');
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
        Schema::dropIfExists('experiences');
    }
}
