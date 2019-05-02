<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('age');
            $table->string('description');
            $table->string('status');

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');

            $table->unsignedBigInteger('types_id');
            $table->foreign('types_id')->references('id')->on('types');

            $table->unsignedBigInteger('shelter_id');
            $table->foreign('shelter_id')->references('id')->on('shelters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
