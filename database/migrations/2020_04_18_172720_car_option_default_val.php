<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarOptionDefaultVal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       DB::table('car_option')->insert(array(
           'option_name_en'=>'sunroof',
           'option_name_ara'=>'فتحة'
       ));

       DB::table('car_option')->insert(array(
           'option_name_en'=>'electric mirrors',
           'option_name_ara'=>'مرايا كهربائية'
       ));
       DB::table('car_option')->insert(array(
           'option_name_en'=>'touch screen',
            'option_name_ara'=>'شاشة لمس'
       ));
       DB::table('car_option')->insert(array(
        'option_name_en'=>'Navigation System',
         'option_name_ara'=>'نظام الملاحة'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Cruise Control',
         'option_name_ara'=>'مثبت السرعة'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Keyless entry',
         'option_name_ara'=>'دخول بدون مفتاح'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Air Condition',
         'option_name_ara'=>'مكيف'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Reader View Camera',
         'option_name_ara'=>'كاميرا خلفية'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Parking Sensors',
         'option_name_ara'=>'حساسات اصطفاف'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Leather Seats',
         'option_name_ara'=>'كراسي جلد'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Heated Seats',
         'option_name_ara'=>'كراسي مدفاة'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Airbags',
         'option_name_ara'=>'اكياس هوائية'
    ));
    DB::table('car_option')->insert(array(
        'option_name_en'=>'Led Lights',
         'option_name_ara'=>'LED اضوية'
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
        /*
        DB::table('car_option')->where('option_id','=','1')->delete();
        DB::table('car_option')->where('option_id','=','2')->delete();
        DB::table('car_option')->where('option_id','=','3')->delete();
        DB::table('car_option')->where('option_id','=','4')->delete();
        DB::table('car_option')->where('option_id','=','5')->delete();
        DB::table('car_option')->where('option_id','=','6')->delete();
        DB::table('car_option')->where('option_id','=','7')->delete();
        DB::table('car_option')->where('option_id','=','8')->delete();
        DB::table('car_option')->where('option_id','=','9')->delete();
        DB::table('car_option')->where('option_id','=','10')->delete();
        DB::table('car_option')->where('option_id','=','11')->delete();
        DB::table('car_option')->where('option_id','=','12')->delete();
        DB::table('car_option')->where('option_id','=','13')->delete();
      */
    }
}
