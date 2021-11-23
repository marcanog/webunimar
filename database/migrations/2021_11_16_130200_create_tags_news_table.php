<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tag_id')->references('id')->on('tags'); 
            $table->foreignId('new_id')->references('id')->on('news'); 
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
