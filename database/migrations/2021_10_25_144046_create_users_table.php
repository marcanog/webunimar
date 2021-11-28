<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamps();
            $table->char('name', 255);
            $table->char('email', 50)->unique();
            $table->date('birth');
            $table->char('phone',15);
            $table->char('password', 255);
            $table->string('image', 255)->default('user.png');
            $table->foreignId('role_id')->references('id')->on('roles');
            $table->foreignId('status_id')->references('id')->on('status');
        });
    }
    //crear la tabla estudiante donde se agregue los campos universidad, carrera, materias, notas

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
