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
            $table->tinyInteger('news_id')->unique();
            $table->timestamps();
            $table->char('title', 255);
            $table->char('content', 255);
            $table->char('resume', 255);
            $table->enum('tags', ['Prensa Unimar', 'Rectorado', 'Vicerrectorado Académico', 'Vicerrectorado de Extensión']);
            $table->date('date_add');
            $table->date('date_end');
            $table->char('status', 15);
            $table->tinyInteger('fk_user_id');
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
