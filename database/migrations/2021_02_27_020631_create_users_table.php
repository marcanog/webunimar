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
            $table->tinyInteger("user_id");
            $table->timestamps();
            $table->char("name", 50);
            $table->char("mail", 50);
            $table->char("password", 8);
            $table->char("role", 30);
            $table->char("status", 15);
            $table->date("date_add");
            $table->date("date_end");
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
