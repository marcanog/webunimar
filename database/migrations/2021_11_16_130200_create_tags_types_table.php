<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_type', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name', 255);
            $table->foreignId('tag_id')->references('id')->on('tags');
            $table->foreignId('new_id')->references('id')->on('news');
            $table->foreignId('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags_news');
    }
}
