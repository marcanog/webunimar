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
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamps();
            $table->char('name', 255);
            $table->char('email', 50)->unique();
            $table->char('job', 255); //cargo
            $table->char('organization',255);
            $table->date('birthday');
            $table->char('password', 255);
            $table->decimal('salary', 8, 2);
            $table->decimal('SSO', 8, 2);
            $table->decimal('LPH', 8, 2);
            $table->decimal('IVSS', 8, 2);
            $table->foreignId('status_id')->references('id')->on('status');
            //$table->foreignId('employeestypes_id')->references('id')->on('employees_types');
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
