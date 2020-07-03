<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Amman
         DB::table('region')->insert(array(

            'region_name_eng'=>'wadi-Al-seer',
            'region_name_arab'=>'وادي السير',
            'city_id'=>'1'
        ));

       DB::table('region')->insert(array(
            'region_name_eng'=>'shmeisani',
            'region_name_arab'=>'الشميساني',
            'city_id'=>'1'
        ));
       DB::table('region')->insert(array(
            'region_name_eng'=>'sahab',
            'region_name_arab'=>'الشميساني',
            'city_id'=>'1'
        ));
       DB::table('region')->insert(array(
            'region_name_eng'=>'al-jubeiha',
            'region_name_arab'=>'الجبيهة',
            'city_id'=>'1'
        ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Quwaysimah',
        'region_name_arab'=>'القويسمة',
        'city_id'=>'1'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Quwaysimah',
        'region_name_arab'=>'القويسمة',
        'city_id'=>'1'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'naour',
        'region_name_arab'=>'ناعور',
        'city_id'=>'1'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Bunayyat al Janubiyah',
        'region_name_arab'=>'البنيات الجنوبية',
        'city_id'=>'1'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Marj Al-Hamam',
        'region_name_arab'=>'امرج الحمام,',
        'city_id'=>'1'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Iraq Al-Amir',
        'region_name_arab'=>'عراق الأمير,',
        'city_id'=>'1'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al-Jizah',
        'region_name_arab'=>'اعراق الأمير,',
        'city_id'=>'1'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Shafa Badran',
        'region_name_arab'=>'اشفا بدران ',
        'city_id'=>'1'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al-Muwaqqar',
        'region_name_arab'=>'الموقر' ,
        'city_id'=>'1'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Baqa\'a refugee camp',
        'region_name_arab'=>'مخيم البقعة',
        'city_id'=>'1'
       ));
        DB::table('region')->insert(array(

        'region_name_eng'=>'swielah',
        'region_name_arab'=>'صويلح',
        'city_id'=>'1'
       ));

//---------IRBID--------------------------------------
       DB::table('region')->insert(array(

        'region_name_eng'=>'umm qais',
        'region_name_arab'=>'ام قيس',
        'city_id'=>'2'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'alramtha',
        'region_name_arab'=>'الرمثا',
        'city_id'=>'2'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Pella',
        'region_name_arab'=>'طبقة فحل',
        'city_id'=>'2'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Karameh',
        'region_name_arab'=>'كرامة',
        'city_id'=>'2'
       ));


     DB::table('region')->insert(array(

        'region_name_eng'=>'Al Husn',
        'region_name_arab'=>'طبقة فحل',
        'city_id'=>'2'
       ));

      DB::table('region')->insert(array(

        'region_name_eng'=>'Beit Ras',
        'region_name_arab'=>'بيت راس',
               'city_id'=>'2'
       ));

      DB::table('region')->insert(array(

        'region_name_eng'=>'AshShajarah',
        'region_name_arab'=>'الشجرة',
               'city_id'=>'2'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'As-Sarih',
        'region_name_arab'=>'اصريح',
               'city_id'=>'2'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Huwwarah',
        'region_name_arab'=>'حولرة',
               'city_id'=>'2'
       ));
         DB::table('region')->insert(array(

        'region_name_eng'=>'dear abu saed',
        'region_name_arab'=>'دير ابو سعيد',
               'city_id'=>'2'
       ));
           DB::table('region')->insert(array(

        'region_name_eng'=>'Husn Camp',
        'region_name_arab'=>'مخيم الحصن',
               'city_id'=>'2'
       ));

//----------------AJLOUN-----------------------
      DB::table('region')->insert(array(

        'region_name_eng'=>'Anjara',
        'region_name_arab'=>'عنجرة,',
               'city_id'=>'3'
       ));

             DB::table('region')->insert(array(

        'region_name_eng'=>'Kufranjah',
        'region_name_arab'=>'كفرنجة',
               'city_id'=>'3'
       ));
               DB::table('region')->insert(array(

        'region_name_eng'=>'ibbin',
        'region_name_arab'=>'عبين',
               'city_id'=>'3'
       ));
                 DB::table('region')->insert(array(

        'region_name_eng'=>'Sakhrah',
        'region_name_arab'=>'صخرة',
               'city_id'=>'3'
       ));
        DB::table('region')->insert(array(

        'region_name_eng'=>'Ain Janna',
        'region_name_arab'=>'عين جنا',
               'city_id'=>'3'
       ));
         DB::table('region')->insert(array(

        'region_name_eng'=>'Castle',
        'region_name_arab'=>'القلعة',
               'city_id'=>'3'
       ));
         DB::table('region')->insert(array(

        'region_name_eng'=>'Burqush',
        'region_name_arab'=>'برقش',
               'city_id'=>'3'
       ));
          DB::table('region')->insert(array(

        'region_name_eng'=>'Ras Munif',
        'region_name_arab'=>'راس منيف',
               'city_id'=>'3'
       ));
         DB::table('region')->insert(array(

        'region_name_eng'=>'Town',
        'region_name_arab'=>'البلد',
        'city_id'=>'3'
       ));
         DB::table('region')->insert(array(

        'region_name_eng'=>'Ishtafina',
        'region_name_arab'=>'اشتفينا',
        'city_id'=>'3'
       ));
//------------------jerash-------------------------------
        DB::table('region')->insert(array(

        'region_name_eng'=>'souf',
        'region_name_arab'=>'سوف',
        'city_id'=>'4'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'sakeb',
        'region_name_arab'=>'ساكب',
        'city_id'=>'4'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Mestabah',
        'region_name_arab'=>'المصطبة',
        'city_id'=>'4'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'burma',
        'region_name_arab'=>'برما',
        'city_id'=>'4'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Hashemiya',
        'region_name_arab'=>'الهاشمية',
        'city_id'=>'4'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Mshairfeh',
        'region_name_arab'=>'المشيرفة',
        'city_id'=>'4'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Kufr Khall',
        'region_name_arab'=>'كفرخل',
        'city_id'=>'4'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'AlRashaida',
        'region_name_arab'=>'الرشادية',
        'city_id'=>'4'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Kefir',
        'region_name_arab'=>'كفير',
        'city_id'=>'4'
       ));
         DB::table('region')->insert(array(

        'region_name_eng'=>'Tal AlRumman',
        'region_name_arab'=>'تل الرمان',
        'city_id'=>'4'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Tal AlRumman',
        'region_name_arab'=>'تل الرمان',
        'city_id'=>'4'
       ));
//----------------------Mafraq------------------------------------------------------
        DB::table('region')->insert(array(

        'region_name_eng'=>'Umm el-Jimal',
        'region_name_arab'=>'ام الجمال',
        'city_id'=>'5'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Zaatari',
        'region_name_arab'=>'الزعتري',
        'city_id'=>'5'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Balama',
        'region_name_arab'=>'بلعما',
        'city_id'=>'5'
       ));
        DB::table('region')->insert(array(

        'region_name_eng'=>'Idon',
        'region_name_arab'=>'ايدون',
        'city_id'=>'5'
       ));
        DB::table('region')->insert(array(

        'region_name_eng'=>'Sabha',
        'region_name_arab'=>'صبحا',
        'city_id'=>'5'
       ));
        DB::table('region')->insert(array(

        'region_name_eng'=>'rihab',
        'region_name_arab'=>'ارحاب',
        'city_id'=>'5'
       ));
        DB::table('region')->insert(array(
        'region_name_eng'=>'university suburb',
        'region_name_arab'=>'ضاحية الجامعة',
        'city_id'=>'5'
       ));
        DB::table('region')->insert(array(
        'region_name_eng'=>'ruwaished',
        'region_name_arab'=>'رويشد',
        'city_id'=>'5'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'northern Badia',
        'region_name_arab'=>'البادية الشمالية',
        'city_id'=>'5'
       ));
        DB::table('region')->insert(array(

        'region_name_eng'=>'white Ghadeer',
        'region_name_arab'=>'الغدير الأبيض',
        'city_id'=>'5'
       ));
//----------------------Azraq----------------------

       DB::table('region')->insert(array(

        'region_name_eng'=>'azraq',
        'region_name_arab'=>'ازرق',
        'city_id'=>'6'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Russeifa',
        'region_name_arab'=>'الرصيفة',
        'city_id'=>'6'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Azraq refugee camp',
        'region_name_arab'=>'مخيم اللاجئين في الأزرق',
        'city_id'=>'6'
       ));

         DB::table('region')->insert(array(

        'region_name_eng'=>'Al Hashimiya',
        'region_name_arab'=>'الهاشمية',
        'city_id'=>'6'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'New Zarqa',
        'region_name_arab'=>'الزرقاء الجديدة',
        'city_id'=>'6'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Ghwariyah',
        'region_name_arab'=>'الغويرية',
        'city_id'=>'6'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'alsouq',
        'region_name_arab'=>'السوق',
        'city_id'=>'6'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Dhlail',
        'region_name_arab'=>'الضليل',
        'city_id'=>'6'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Birayn',
        'region_name_arab'=>'بيرين',
        'city_id'=>'6'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Autostrade',
        'region_name_arab'=>'اتوستراد',
        'city_id'=>'6'
       ));

       //-------------------Balqa---------------------
       DB::table('region')->insert(array(

        'region_name_eng'=>'fuhies',
        'region_name_arab'=>'الفحيص',
        'city_id'=>'7'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Deir Alla',
        'region_name_arab'=>'دير علا',
        'city_id'=>'7'
       ));

       DB::table('region')->insert(array(
        'region_name_eng'=>'Sٍalt',
        'region_name_arab'=>'السلط',
        'city_id'=>'7'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Yargha ',
        'region_name_arab'=>'يرقا',
        'city_id'=>'7'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Ardha',
        'region_name_arab'=>'العارضة',
        'city_id'=>'7'
       ));

       DB::table('region')->insert(array(
        'region_name_eng'=>'Mahis',
        'region_name_arab'=>'ماحص',
        'city_id'=>'7'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Wadi Shueib',
        'region_name_arab'=>'وادي شعيب',
        'city_id'=>'7'
       ));

       DB::table('region')->insert(array(
        'region_name_eng'=>'Ein Al-Basha',
        'region_name_arab'=>'عين الباشا',
        'city_id'=>'7'
       ));

       DB::table('region')->insert(array(
        'region_name_eng'=>'Allan',
        'region_name_arab'=>'علان',
        'city_id'=>'7'
       ));
        DB::table('region')->insert(array(
        'region_name_eng'=>'ira',
        'region_name_arab'=>'عيرا',
        'city_id'=>'7'
       ));

//----------------Madaba-----------------------------------
         DB::table('region')->insert(array(
        'region_name_eng'=>'Mrajim and Hoya',
        'region_name_arab'=>'منطقة المريجمات والحويه',
        'city_id'=>'8'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'Jrainah',
        'region_name_arab'=>'جرينه',
        'city_id'=>'8'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Alwasyah',
        'region_name_arab'=>'الوسيه',
        'city_id'=>'8'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Ghernatah',
        'region_name_arab'=>'غرناطة',
        'city_id'=>'8'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'El Arish',
        'region_name_arab'=>'العريش',
        'city_id'=>'8'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Ma\'in',
        'region_name_arab'=>'ماعين',
        'city_id'=>'8'
       ));
        DB::table('region')->insert(array(

        'region_name_eng'=>'Menche',
        'region_name_arab'=>'المنشية',
        'city_id'=>'8'
       ));

        DB::table('region')->insert(array(

        'region_name_eng'=>'AL faisaliah',
        'region_name_arab'=>'الفيصلية',
        'city_id'=>'8'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Dehiban',
        'region_name_arab'=>'ديبان',
        'city_id'=>'8'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Faiha\'a',
        'region_name_arab'=>'الفيحاء',
        'city_id'=>'8'
       ));


       //-------karak region-----------------

       DB::table('region')->insert(array(
        'region_name_eng'=>'Mu\'tah',
        'region_name_arab'=>'مؤتة',
        'city_id'=>'9'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Qatraneh',
        'region_name_arab'=>'القطرانة',
        'city_id'=>'9'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al-Mughayer',
        'region_name_arab'=>'المغير',
        'city_id'=>'9'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'As-Simakiyah',
        'region_name_arab'=>'السماكية',
        'city_id'=>'9'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'Rabba',
        'region_name_arab'=>'الربة',
        'city_id'=>'9'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Ash Shahabiyyah',
        'region_name_arab'=>'الشهابية',
        'city_id'=>'9'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al-Adnanya',
        'region_name_arab'=>'العدنانية',
        'city_id'=>'9'
       ));
       DB::table('region')->insert(array(

        'region_name_eng'=>'Al Ghuwair',
        'region_name_arab'=>'الغويرية',
        'city_id'=>'9'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'busira',
        'region_name_arab'=>'بصيرا',
        'city_id'=>'10'
       ));

       DB::table('region')->insert(array(

        'region_name_eng'=>'al-hasa',
        'region_name_arab'=>'الحسا',
        'city_id'=>'10'
       ));

       DB::table('region')->insert(array(
           'region_name_eng'=>'petra',
           'region_name_arab'=>'البتراء',
           'city_id'=>'11'
       ));
       DB::table('region')->insert(array(
        'region_name_eng'=>'south altayba',
        'region_name_arab'=>'الطيبة الجنوبية',
        'city_id'=>'11'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'Shoubak',
        'region_name_arab'=>'الشوبك',
        'city_id'=>'11'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'Al-Husainya',
        'region_name_arab'=>'الحسينية',
        'city_id'=>'11'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'wadi-mousa',
        'region_name_arab'=>'وادي موسى',
        'city_id'=>'11'
    ));

    DB::table('region')->insert(array(
        'region_name_eng'=>'al-jafar',
        'region_name_arab'=>'الجفر',
        'city_id'=>'11'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'ayl',
        'region_name_arab'=>'ايل',
        'city_id'=>'11'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'Aqaba',
        'region_name_arab'=>'العقبة',
        'city_id'=>'12'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'wadi rum',
        'region_name_arab'=>'وادي رم',
        'city_id'=>'12'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'Al-Quwayrah',
        'region_name_arab'=>'القويرة',
        'city_id'=>'12'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'al-manara',
        'region_name_arab'=>'المنارة',
        'city_id'=>'12'
    ));
    DB::table('region')->insert(array(
        'region_name_eng'=>'tala bay',
        'region_name_arab'=>'تالا باي',
        'city_id'=>'12'
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
        DB::table('region')->where('city_id','=','1')->delete();
         DB::table('region')->where('city_id','=','2')->delete();
         DB::table('region')->where('city_id','=','3')->delete();
         DB::table('region')->where('city_id','=','4')->delete();
         DB::table('region')->where('city_id','=','5')->delete();
         DB::table('region')->where('city_id','=','6')->delete();
         DB::table('region')->where('city_id','=','7')->delete();
         DB::table('region')->where('city_id','=','8')->delete();
         DB::table('region')->where('city_id','=','9')->delete();


    }
}
