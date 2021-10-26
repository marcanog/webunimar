<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('title', 255);
            $table->char('content', 255);
            $table->char('resume', 255);
            $table->char('image', 255);
            $table->char('source', 255);
            $table->foreignId('tag')->references('id')->on('tags'); 
            $table->foreignId('status')->references('id')->on('status'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
