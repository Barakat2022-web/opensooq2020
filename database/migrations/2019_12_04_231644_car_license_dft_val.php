<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarLicenseDftVal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         DB::table('car_license')->insert(array(
           'car_lic_id'=>'1',
            'car_lic_eng'=>'License',
            'car_lic_arab'=>'مرحصة'
        ));
          DB::table('car_license')->insert(array(
           'car_lic_id'=>'2',
           'car_lic_eng'=>'No License',
           'car_lic_arab'=>'غير مرخصة'
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
        DB::table('car_license')->where('car_lic_id','=','1')->delete();
        DB::table('car_license')->where('car_lic_id','=','2')->delete();
    }
}
