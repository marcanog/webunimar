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
            $table->char('content', 255);
            $table->char('resume', 255);
            $table->char('image', 255);
            $table->char('source', 255);
            $table->enum('tags', ['Vicerrectorado Académico', 'Vicerrectorado de Extensión', 'Decanato de Ingeniería y Afines', 'Decanato de Ciencias Económicas y Sociales', 'Decanato de Ciencias Jurídicas y Políticas','Decanato de Humanidades, Artes y Educación', 'Decanato de Postgrado', 'Coordinación de Investigación', 'Rectorado']);
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
        Schema::dropIfExists('events');
    }
}
