<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarLicense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('car_license',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->bigIncrements('car_lic_id');
            $table->string('car_lic_eng',50);
            $table->string('car_lic_arab',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('car_license');

    }
}
