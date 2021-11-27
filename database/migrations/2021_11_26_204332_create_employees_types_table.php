<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('Administrativo', 255);
            $table->char('Control_seguridad', 255);
            $table->char('Profesor', 255);
            $table->char('Mantenimiento', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_types');
    }
}
