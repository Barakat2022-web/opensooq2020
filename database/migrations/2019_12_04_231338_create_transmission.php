<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransmission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_transmission',function(Blueprint $table){
            $table->engine = 'InnoDB';
          $table->bigIncrements('transmission_id')->unique();
            $table->string('trans_eng',50);
            $table->string('trans_arab',50);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_transmission');
    }
}
