<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsuranceTypeDftVal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('car_insurance_type')->insert(array(
           'car_ins_id'=>'1',
            'car_ins_eng'=>'compulsory insurance',
            'car_ins_arab'=>'تامين الزامي'
        ));

         DB::table('car_insurance_type')->insert(array(
           'car_ins_id'=>'2',
            'car_ins_eng'=>'comprehensive insurance',
            'car_ins_arab'=>'تامين شامل'
        ));

         DB::table('car_insurance_type')->insert(array(
           'car_ins_id'=>'3',
            'car_ins_eng'=>'not insurance',
            'car_ins_arab'=>'غير مؤمن'
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
        DB::table('car_insurance_type')->where('car_ins_id','=','1')->delete();
        DB::table('car_insurance_type')->where('car_ins_id','=','2')->delete();
        DB::table('car_insurance_type')->where('car_ins_id','=','3')->delete();
    }
}
