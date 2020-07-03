<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //insert code department here
        DB::table('departments')->insert(array(
            'department_id'=>'1',
            'depart_name_eng'=>'vichels',
            'depart_name_arab'=>'مركبات'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'2',
            'depart_name_eng'=>'mobile Tablet',
            'depart_name_arab'=>'موبايل-تابلت'
        ));
        DB::table('departments')->insert(array(
            'department_id'=>'3',
            'depart_name_eng'=>'gaming video',
            'depart_name_arab'=>'العاب فيديوا '
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'4',
            'depart_name_eng'=>'electronics',
            'depart_name_arab'=>'الكترونيات'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'5',
            'depart_name_eng'=>'real state for sale',
            'depart_name_arab'=>'عقارات للبيع'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'6',
            'depart_name_eng'=>'real state for rent',
            'depart_name_arab'=>'عقارات  للايجار'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'7',
            'depart_name_eng'=>'furniture - decor',
            'depart_name_arab'=>'اثاث -ديكور'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'8',
            'depart_name_eng'=>'clothing and accessories',
            'depart_name_arab'=>'ملابس و اكسسوارات'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'9',
            'depart_name_eng'=>'baby kids',
            'depart_name_arab'=>'ااطفال'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'10',
            'depart_name_eng'=>'food -resturants',
            'depart_name_arab'=>'امطاعم'
        ));

         DB::table('departments')->insert(array(
            'department_id'=>'11',
            'depart_name_eng'=>'services',
            'depart_name_arab'=>'اخدمات'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'12',
            'depart_name_eng'=>'jobs',
            'depart_name_arab'=>'وظائف'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'13',
            'depart_name_eng'=>'job seekers',
            'depart_name_arab'=>'باحث عن عمل'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'14',
            'depart_name_eng'=>'pets',
            'depart_name_arab'=>'حيوانات اليفة للبيع'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'15',
            'depart_name_eng'=>'Books-sports-others',
            'depart_name_arab'=>'كتب -رياضة-اخرى'
        ));

        DB::table('departments')->insert(array(
            'department_id'=>'16',
            'depart_name_eng'=>'Buisness-Industrial',
            'depart_name_arab'=>'شركات صناعية'
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
         DB::table('departments')->where('department_id','=','1')->delete();
        DB::table('departments')->where('department_id','=','2')->delete();
        DB::table('departments')->where('department_id','=','3')->delete();
        DB::table('departments')->where('department_id','=','4')->delete();
        DB::table('departments')->where('department_id','=','5')->delete();
        DB::table('departments')->where('department_id','=','6')->delete();
        DB::table('departments')->where('department_id','=','7')->delete();
        DB::table('departments')->where('department_id','=','8')->delete();
        DB::table('departments')->where('department_id','=','9')->delete();
        DB::table('departments')->where('department_id','=','10')->delete();
        DB::table('departments')->where('department_id','=','11')->delete();
        DB::table('departments')->where('department_id','=','12')->delete();
        DB::table('departments')->where('department_id','=','13')->delete();
        DB::table('departments')->where('department_id','=','14')->delete();
        DB::table('departments')->where('department_id','=','15')->delete();
        DB::table('departments')->where('department_id','=','16')->delete();

    }
}
