<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarSaleFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('car_sale',function(Blueprint $table){
            $table->foreign('car_make_id')->references('car_make_id')->on('car_make');
            $table->foreign('car_model_id')->references('car_model_id')->on('car_model');
            $table->foreign('status_id')->references('status_id')->on('car_status');
            $table->foreign('transmission_id')->references('transmission_id')->on('car_transmission');
            $table->foreign('fuel_id')->references('fuel_id')->on('fuel');
            $table->foreign('car_lic_id')->references('car_lic_id')->on('car_license');
            $table->foreign('payment_method_id')->references('payment_method_id')->on('payment_method');
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->foreign('region_id')->references('region_id')->on('region');

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
    }
}
