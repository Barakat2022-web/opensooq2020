<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuelDefaultVal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          DB::table('fuel')->insert(array(
            'fuel_id'=>'1',
            'fuel_eng'=>'gasoline',
            'fuel_arab'=>'بنزين'
        ));
        DB::table('fuel')->insert(array(
            'fuel_id'=>'2',
            'fuel_eng'=>'diesel',
            'fuel_arab'=>'ديزل'
        ));
        DB::table('fuel')->insert(array(
            'fuel_id'=>'3',
            'fuel_eng'=>'hybrid',
            'fuel_arab'=>'هايبرد'
        ));
        DB::table('fuel')->insert(array(
            'fuel_id'=>'4',
            'fuel_eng'=>'electric',
            'fuel_arab'=>'كهربائي'
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
         DB::table('fuel')->where('fuel_id','=','1')->delete();
         DB::table('fuel')->where('fuel_id','=','2')->delete();
         DB::table('fuel')->where('fuel_id','=','3')->delete();
         DB::table('fuel')->where('fuel_id','=','4')->delete();
    }
}
