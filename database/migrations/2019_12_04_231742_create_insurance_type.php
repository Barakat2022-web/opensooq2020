<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_insurance_type',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->bigIncrements('car_ins_id');
            $table->string('car_ins_eng',50);
            $table->string('car_ins_arab',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('car_insurance_type');
    }
}
