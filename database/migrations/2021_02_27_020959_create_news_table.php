<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->timestamps();
            $table->char('title', 255);
            $table->char('content', 255);
            $table->char('resume', 255);
            $table->enum('tags', ['Prensa Unimar', 'Rectorado', 'Vicerrectorado Académico', 'Vicerrectorado de Extensión']);
            $table->char('status', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
