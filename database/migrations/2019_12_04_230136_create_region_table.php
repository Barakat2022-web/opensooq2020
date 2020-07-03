<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('region', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('region_id');
            $table->string('region_name_eng');
            $table->string('region_name_arab');
            $table->unsignedBigInteger('city_id')->notnull;
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
        Schema::dropIfExists('region');
    }
}
