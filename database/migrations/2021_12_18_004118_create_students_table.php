<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name', 255);
            $table->char('email', 50)->unique();
            $table->date('birth');
            $table->char('phone',15);
            $table->char('password', 255);
            $table->string('image', 255)->default('user.png');
            $table->string('degree', 255);
            $table->string('university', 255);
            $table->foreignId('role_id')->references('id')->on('roles');
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
        Schema::dropIfExists('students');
    }
}
