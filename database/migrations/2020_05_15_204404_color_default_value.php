<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ColorDefaultValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::table('color')->insert(array(
             'hexa_value'=>'#F5FDC',
             'color_name_eng'=>'beige',
             'color_name_arab'=>'بيج'
         ));
         DB::table('color')->insert(array(
            'hexa_value'=>'#000000',
            'color_name_eng'=>'black',
            'color_name_arab'=>'أسود'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#0000FF',
            'color_name_eng'=>'blue',
            'color_name_arab'=>'ازرق'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#88540B',
            'color_name_eng'=>'brown',
            'color_name_arab'=>'بني'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#8DB600',
            'color_name_eng'=>'green',
            'color_name_arab'=>'اخضر'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#B2BEB5',
            'color_name_eng'=>'gray',
            'color_name_arab'=>'رمادي'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#C32148',
            'color_name_eng'=>'maroon',
            'color_name_arab'=>'خمري'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#FF8C00',
            'color_name_eng'=>'orange',
            'color_name_arab'=>'برتقالي'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#DA1884',
            'color_name_eng'=>'pink',
            'color_name_arab'=>'زهري'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#BF00FF',
            'color_name_eng'=>'purple',
            'color_name_arab'=>'بنفسجي'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#FF0800',
            'color_name_eng'=>'red',
            'color_name_arab'=>'احمر'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#9a9a9a',
            'color_name_eng'=>'silver',
            'color_name_arab'=>'فضي'
        ));
        DB::table('color')->insert(array(
            'hexa_value'=>'#00CED1',
            'color_name_eng'=>'turquoise',
            'color_name_arab'=>'تركواز'
        ));
        DB::table('color')->insert(array(
            'hexa_value'=>'#ffffff',
            'color_name_eng'=>'white',
            'color_name_arab'=>'ابيض'
        ));
        DB::table('color')->insert(array(
            'hexa_value'=>'#FFEF00',
            'color_name_eng'=>'yellow',
            'color_name_arab'=>'اصفر'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#eabd00',
            'color_name_eng'=>'gold',
            'color_name_arab'=>'ذهبيي'
        ));

        DB::table('color')->insert(array(
            'hexa_value'=>'#00FFFF',
            'color_name_eng'=>'aqua',
            'color_name_arab'=>'ازرق فاتح'
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
    }
}
