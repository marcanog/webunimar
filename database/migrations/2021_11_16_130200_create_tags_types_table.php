<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('tags_types', function (Blueprint $table) {
//            $table->engine = 'InnoDB';
//            $table->id();
//            $table->timestamps();
//            $table->char('name',255);
//           // $table->foreignId('tag_id')->references('id')->on('tags');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags_types');
    }
}
