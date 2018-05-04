<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->char('uuid', 36);
            $table->integer('access_controls');
            $table->char('compat_version', 32);
            $table->integer('curation');
            $table->char('description', 1024);
            $table->char('handle', 64);
            $table->char('name', 36);
            $table->char('scene_asset_id', 32);
            $table->char('thumbnail_asset_id', 32);
            $table->char('uri', 300);
            $table->boolean('is_listed');
            $table->char('image_max', 128);
            $table->dateTime('experience_updated_at');
            $table->dateTime('experience_created_at');
            $table->boolean('is_published');
            $table->integer('agent_id');
            $table->integer('experience_id');
            $table->integer('event_type_id');
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
        Schema::dropIfExists('experience_histories');
    }
}
