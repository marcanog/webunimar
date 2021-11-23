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
            $table->bigIncrements('id')->unique();
            $table->timestamps();
            $table->char('title', 255);
            $table->text('description');
            $table->char('color', 20);
            $table->char('start', 255)->nullable();
            $table->char('end', 255)->nullable();
            $table->foreignId('status_id')->references('id')->on('status'); 
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
