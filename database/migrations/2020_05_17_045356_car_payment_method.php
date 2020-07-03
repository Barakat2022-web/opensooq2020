<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarPaymentMethod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payment_method',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->bigIncrements('payment_method_id');
            $table->string('payment_method_eng', 100)->nullable()->default('cash');
            $table->string('payment_method_arab', 100)->nullable()->default('installment');
        });

        DB::table('payment_method')->insert(array(
            'payment_method_id'=>'1',
            'payment_method_eng'=>'cash',
            'payment_method_arab'=>'كاش'
        ));

        DB::table('payment_method')->insert(array(
            'payment_method_id'=>'2',
            'payment_method_eng'=>'installments',
            'payment_method_arab'=>'اقساط'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('payment_method');
    }
}
