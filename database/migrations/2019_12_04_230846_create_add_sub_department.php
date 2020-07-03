<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddSubDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'1',
            'subdepart_name_eng'=>'Cars for sale',
            'subdepart_name_arab'=>'سيارات االبيع',
            'department_id'=>'1'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'2',
            'subdepart_name_eng'=>'Car Rental',
            'subdepart_name_arab'=>'سيارات للايجار',
            'department_id'=>'1'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'3',
            'subdepart_name_eng'=>'Motor Cycle',
            'subdepart_name_arab'=>'ادراجات نارية',
            'department_id'=>'1'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'4',
            'subdepart_name_eng'=>'Car Plates Number',
            'subdepart_name_arab'=>'أرقام سيارات مميزة للبيع نارية',
            'department_id'=>'1'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'5',
            'subdepart_name_eng'=>'Car Accessories',
            'subdepart_name_arab'=>'قطع غيار و اكسسوارات للسيارات',
            'department_id'=>'1'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'6',
            'subdepart_name_eng'=>'Wheels and Rims',
            'subdepart_name_arab'=>'اطارات-جنطات',
            'department_id'=>'1'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'7',
            'subdepart_name_eng'=>'Trucks -Heavy Machinary',
            'subdepart_name_arab'=>'شاحنات - اليات ثقيلة',
            'department_id'=>'1'
        ));

         DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'8',
            'subdepart_name_eng'=>'Boat , Yacht ,and Jet Ski',
            'subdepart_name_arab'=>'قوارب جت سكي',
            'department_id'=>'1'
        ));

          DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'9',
            'subdepart_name_eng'=>'Other Cars and Bikes',
            'subdepart_name_arab'=>'سيارات و مركبات اخرى',
            'department_id'=>'1'
        ));

           DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'10',
            'subdepart_name_eng'=>'mobiles',
            'subdepart_name_arab'=>'موبايلات',
            'department_id'=>'2'
        ));
            DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'11',
            'subdepart_name_eng'=>'VIP Phone Number',
            'subdepart_name_arab'=>'ارقام هواتف مميزة',
            'department_id'=>'2'
        ));
             DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'12',
            'subdepart_name_eng'=>'mobile-tablet-spare-parts',
            'subdepart_name_arab'=>'اكسسوارات موبايل تابلت',
            'department_id'=>'2'
        ));
              DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'13',
            'subdepart_name_eng'=>'tablets',
            'subdepart_name_arab'=>'تابلت',
            'department_id'=>'2'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'14',
            'subdepart_name_eng'=>'Mobile Tablet Accessories',
            'subdepart_name_arab'=>'قطع غيار موبايل تابلت',
            'department_id'=>'2'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'15',
            'subdepart_name_eng'=>'Others-Mobile Tablet',
            'subdepart_name_arab'=>'موبايل-تابلت اخرى',
            'department_id'=>'2'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'16',
            'subdepart_name_eng'=>'devices',
            'subdepart_name_arab'=>'اجهزة',
            'department_id'=>'3'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'17',
            'subdepart_name_eng'=>'gaming videos',
            'subdepart_name_arab'=>'قطع غيار موبايل تابلت',
            'department_id'=>'3'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'18',
            'subdepart_name_eng'=>'accessories and repalcement parts',
            'subdepart_name_arab'=>'اكسسوارات و قطع غيارات',
            'department_id'=>'3'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'19',
            'subdepart_name_eng'=>'gaming cards',
            'subdepart_name_arab'=>'بطاقات متاجر الكترونية',
            'department_id'=>'3'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'20',
            'subdepart_name_eng'=>'accounts and charcterstics',
            'subdepart_name_arab'=>'بيع حسابات و شخصيات',
            'department_id'=>'3'
        ));

          DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'21',
            'subdepart_name_eng'=>'action figures',
            'subdepart_name_arab'=>'شخصيات اكشن فيجرز',
            'department_id'=>'3'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'22',
            'subdepart_name_eng'=>'PC - Laptop',
            'subdepart_name_arab'=>'لابتوب - كمبيوتر',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'23',
            'subdepart_name_eng'=>'speakers - amplifiers',
            'subdepart_name_arab'=>'سماعات-مكبرات صوت',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'24',
            'subdepart_name_eng'=>'recievers - DVD',
            'subdepart_name_arab'=>'ريسيفر - دي في دي',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'25',
            'subdepart_name_eng'=>'cameras - Photography',
            'subdepart_name_arab'=>'كاميرات -تصوير',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'26',
            'subdepart_name_eng'=>'refrigerators - Freezers',
            'subdepart_name_arab'=>'ثلاجات - فريزر',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'27',
            'subdepart_name_eng'=>'ovens - Microwaves',
            'subdepart_name_arab'=>'افران - مايكرويف',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'28',
            'subdepart_name_eng'=>'small Appliance',
            'subdepart_name_arab'=>'اجهزة صغيرة',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'29',
            'subdepart_name_eng'=>'scooters - hoverboard',
            'subdepart_name_arab'=>'سكوتر - هوفر بورد',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'30',
            'subdepart_name_eng'=>'Heaters',
            'subdepart_name_arab'=>'دفايات -صوبات',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'31',
            'subdepart_name_eng'=>'Printer -Fax-Projector',
            'subdepart_name_arab'=>'طابعة -فاكس-بروجيكتر',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'32',
            'subdepart_name_eng'=>'Electronics Parts',
            'subdepart_name_arab'=>'قطع ألكترونية -ملحقات-أكسسوارات',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'33',
            'subdepart_name_eng'=>'TV-Screens',
            'subdepart_name_arab'=>'تلفزيونات - شاشات',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'34',
            'subdepart_name_eng'=>'Stereo -Radio',
            'subdepart_name_arab'=>'ستيريو -مسجلات-راديو',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'35',
            'subdepart_name_eng'=>'Modem - Router',
            'subdepart_name_arab'=>'مودم-راوتر',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'36',
            'subdepart_name_eng'=>'Air Conditions -Fans',
            'subdepart_name_arab'=>'مكيفات-مراوح',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'37',
            'subdepart_name_eng'=>'Washer -Drayers-Dishwashers',
            'subdepart_name_arab'=>'غسالات-نشافات-جلايات صحون',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'38',
            'subdepart_name_eng'=>'Water Coolers - filters',
            'subdepart_name_arab'=>'كولر - فلتر ماء',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'39',
            'subdepart_name_eng'=>'Smart Technology - Electronic accessories',
            'subdepart_name_arab'=>'مقتنيات ذكية-اكسسوارات الكترونية',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'40',
            'subdepart_name_eng'=>'Heater-boiler',
            'subdepart_name_arab'=>'سخانات-كيزر - بويلر',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'41',
            'subdepart_name_eng'=>'Vacuum cleaners',
            'subdepart_name_arab'=>'مكانس كهربائية',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'42',
            'subdepart_name_eng'=>'Home Phone - Wirless',
            'subdepart_name_arab'=>'تلفونات ارضية- لا سلكي',
            'department_id'=>'4'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'43',
            'subdepart_name_eng'=>'other electronics -Appliance',
            'subdepart_name_arab'=>'اجهزة الكترونيات اخرى',
            'department_id'=>'4'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'44',
            'subdepart_name_eng'=>'apartments for sale',
            'subdepart_name_arab'=>'شقق للبيع',
            'department_id'=>'5'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'45',
            'subdepart_name_eng'=>'land - farm for sale',
            'subdepart_name_arab'=>'اراضي-مزارع للبيع',
            'department_id'=>'5'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'46',
            'subdepart_name_eng'=>'building for sale',
            'subdepart_name_arab'=>'عمارات للبيع',
            'department_id'=>'5'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'47',
            'subdepart_name_eng'=>'Foreign realstate for sale',
            'subdepart_name_arab'=>'عقارات اجنبية للبيع',
            'department_id'=>'5'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'48',
            'subdepart_name_eng'=>'Independent Houses for sale',
            'subdepart_name_arab'=>'منازل مستقلة للبيع',
            'department_id'=>'5'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'49',
            'subdepart_name_eng'=>'Villa-places for sale',
            'subdepart_name_arab'=>'فلل - قصور للبيع',
            'department_id'=>'5'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'50',
            'subdepart_name_eng'=>'shops /Commerical for sale',
            'subdepart_name_arab'=>'محلات تجارية',
            'department_id'=>'5'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'51',
            'subdepart_name_eng'=>'Chalets- Summer Resorts',
            'subdepart_name_arab'=>'شاليهات - مصايف للبيع',
            'department_id'=>'5'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'52',
            'subdepart_name_eng'=>'apartment for rent',
            'subdepart_name_arab'=>'شقق للايجار',
            'department_id'=>'6'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'53',
            'subdepart_name_eng'=>'land - farm for rent',
            'subdepart_name_arab'=>'اراضي-مزارع للايجار',
            'department_id'=>'6'
        ));
        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'54',
            'subdepart_name_eng'=>'building for rent',
            'subdepart_name_arab'=>'بنايات للايجار',
            'department_id'=>'6'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'55',
            'subdepart_name_eng'=>'Foreign realstate for sale',
            'subdepart_name_arab'=>'عقارات اجنبية للايجار',
            'department_id'=>'6'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'56',
            'subdepart_name_eng'=>'Independent Houses for rent',
            'subdepart_name_arab'=>'منازل مستقلة للايجار',
            'department_id'=>'6'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'57',
            'subdepart_name_eng'=>'Villa-places for rent',
            'subdepart_name_arab'=>'فلل - قصور للايجار',
            'department_id'=>'6'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'58',
            'subdepart_name_eng'=>'shops - Commerical for rent',
            'subdepart_name_arab'=>'محلات تجارية للايجار',
            'department_id'=>'6'
        ));

        DB::table('sub_department')->insert(array(
            'sub_depart_id'=>'59',
            'subdepart_name_eng'=>'Chalets- Summer Resorts For Rent',
            'subdepart_name_arab'=>'شاليهات - مصايف للايجار',
            'department_id'=>'6'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('sub_department')->where('sub_depart_id','=','1')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','2')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','3')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','4')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','5')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','6')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','7')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','8')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','9')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','10')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','11')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','12')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','13')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','14')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','15')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','16')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','17')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','18')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','19')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','20')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','21')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','22')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','23')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','24')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','25')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','26')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','27')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','28')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','29')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','30')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','31')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','32')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','33')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','34')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','35')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','36')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','37')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','38')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','39')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','40')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','41')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','42')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','43')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','44')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','45')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','46')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','47')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','48')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','49')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','50')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','51')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','52')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','53')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','54')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','55')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','56')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','57')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','58')->delete();
        DB::table('sub_department')->where('sub_depart_id','=','59')->delete();

    }
}
