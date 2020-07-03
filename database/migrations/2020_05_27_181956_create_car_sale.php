<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::dropIfExists('car_sale');
        //note:-create table first then after that make foreign key constraint
       Schema::create('car_sale', function (Blueprint $table) {
            $table->engine = 'InnoDB';
           $table->unsignedBigInteger('car_make_id');
           $table->unsignedBigInteger('car_model_id');
           $table->string('Engine_serial_number',200)->primary();
           $table->integer('year')->nullable();
           $table->unsignedBigInteger('status_id')->nullable();
           $table->integer('distance')->nullable();
           $table->unsignedBigInteger('transmission_id')->nullable();
           $table->unsignedBigInteger('fuel_id')->nullable();
           $table->unsignedBigInteger('car_lic_id')->nullable();
           $table->binary('hexa_value')->nullable();
           $table->unsignedBigInteger('payment_method_id')->nullable();
           $table->string('title',100)->nullable();
           $table->string('description',100)->nullable();
           $table->decimal('price',8,2)->nullable();
           $table->unsignedBigInteger('city_id')->nullable();
          $table->unsignedBigInteger('region_id')->nullable();
          $table->string('name',100)->nullable();
          $table->string('phone',10)->nullable();
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
        Schema::dropIfExists('car_sale');
    }
}
