<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransmissionDefaultVal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         DB::table('car_transmission')->insert(array(
           'transmission_id'=>'1',
            'trans_eng'=>'automatic',
            'trans_arab'=>'اوتوماتيك'
        ));
        DB::table('car_transmission')->insert(array(
           'transmission_id'=>'2',
            'trans_eng'=>'manual',
            'trans_arab'=>'عادي'
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
          DB::table('car_transmission')->where('transmission_id','=','1')->delete();
        DB::table('car_transmission')->where('transmission_id','=','2')->delete();
    }
}
