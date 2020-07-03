<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('car_status')->insert(array(
           'status_id'=>'1',
            'status_eng'=>'used',
            'status_arab'=>'مستعمل'
        ));

         DB::table('car_status')->insert(array(
          'status_id'=>'2',
            'status_eng'=>'new',
            'status_arab'=>'جديد'
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
          DB::table('car_status')->where('status_id','=','1')->delete();
        DB::table('car_status')->where('status_id','=','2')->delete();
    }
}
