<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

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
            $table->dateTime('created_at')->default(Carbon::now()->toDateTimeString());
            $table->dateTime('updated_at')->default(Carbon::now()->toDateTimeString());
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
