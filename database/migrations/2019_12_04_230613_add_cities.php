<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('cities')->insert(array(
            'city_id'=>'1',
            'city_name_eng'=>'amman',
            'city_name_arab'=>'عمان'
        ));

        DB::table('cities')->insert(array(
            'city_id'=>'2',
            'city_name_eng'=>'irbid',
            'city_name_arab'=>'اربد'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'3',
            'city_name_eng'=>'ajloun',
            'city_name_arab'=>'عجلون'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'4',
            'city_name_eng'=>'jarash',
            'city_name_arab' =>'جرش'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'5',
            'city_name_eng'=>'mafraq',
            'city_name_arab'=>'مفرق'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'6',
            'city_name_eng'=>'zarqa',
            'city_name_arab'=>'زرقاء'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'7',
            'city_name_eng'=>'balqa',
            'city_name_arab'=>'بلقاء'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'8',
            'city_name_eng'=>'madaba',
            'city_name_arab'=>'مادبا'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'9',
            'city_name_eng'=>'karak',
            'city_name_arab'=>'كرك'
        ));
        DB::table('cities')->insert(array(
            'city_id'=>'10',
            'city_name_eng'=>'tafilah',
            'city_name_arab'=>'طفيلة'
        ));

        DB::table('cities')->insert(array(
            'city_id'=>'11',
            'city_name_eng'=>'maan',
            'city_name_arab'=>'معان'
        ));

        DB::table('cities')->insert(array(
            'city_id'=>'12',
            'city_name_eng'=>'aqaba',
            'city_name_arab'=>'عقبة'
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
         DB::table('cities')->where('city_id','=','1')->delete();
        DB::table('cities')->where('city_id','=','2')->delete();
        DB::table('cities')->where('city_id','=','3')->delete();
        DB::table('cities')->where('city_id','=','4')->delete();
        DB::table('cities')->where('city_id','=','5')->delete();
        DB::table('cities')->where('city_id','=','6')->delete();
        DB::table('cities')->where('city_id','=','7')->delete();
        DB::table('cities')->where('city_id','=','8')->delete();
        DB::table('cities')->where('city_id','=','9')->delete();
        DB::table('cities')->where('city_id','=','10')->delete();
        DB::table('cities')->where('city_id','=','11')->delete();
        DB::table('cities')->where('city_id','=','12')->delete();
        DB::table('cities')->where('city_id','=','13')->delete();
    }
}
