<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->tinyInteger('id')->unique();
            $table->timestamps();
            $table->char('name', 50);
            $table->char('mail', 50)->unique();
            $table->char('role', 30);
            $table->date('birthday');
            $table->char('password', 8);
            $table->date('date_add');
            $table->date('date_end');
            $table->decimal('Salary', 8, 2);
            $table->decimal('SSO', 8, 2);
            $table->decimal('LPH', 8, 2);
            $table->decimal('IVSS', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
