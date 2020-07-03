<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('car_model', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('car_model_id');
            $table->string('car_model_eng');
            $table->string('car_model_arab');
            $table->unsignedBigInteger('car_make_id')->notnull;
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_model');
    }
}
