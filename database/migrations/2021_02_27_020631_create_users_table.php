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
            $table->tinyInteger("user_id")->unique();
            $table->timestamps();
            $table->char("name", 50);
            $table->char("mail", 50)->unique();
            $table->char("password", 8);
            $table->char("role", 30);
            $table->char("status", 15);
            $table->date("date_add");
            $table->date("date_end");
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
        Schema::dropIfExists('users');
    }
}
