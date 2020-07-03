<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->bigIncrements('fuel_id');
            $table->string('fuel_eng',50);
            $table->string('fuel_arab',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('fuel');

        }
}
