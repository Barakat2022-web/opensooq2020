<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarMakeDefaultValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        DB::table('car_make')->insert(array(
            'car_make_eng'=>'hyundai',
            'car_make_arab'=>'هونداي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'toyota',
            'car_make_arab'=>'تويتا'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'kia',
            'car_make_arab'=>'كيا'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'bmw',
            'car_make_arab'=>'ي أم دبليو'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Mercedes Benz',
            'car_make_arab'=>'مرسيدس بينز'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Prosche',
            'car_make_arab'=>'بورش'
        ));

         DB::table('car_make')->insert(array(
            'car_make_eng'=>'Aston Martin',
            'car_make_arab'=>'استون مارتن'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'alfa romeo',
            'car_make_arab'=>'الفا روميو'
        ));

         DB::table('car_make')->insert(array(
            'car_make_eng'=>'audi',
            'car_make_arab'=>'أودي'
        ));

        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Isuzu',
            'car_make_arab'=>'ايسوزو'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Infiniti',
            'car_make_arab'=>'إنفينيتي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Opel',
            'car_make_arab'=>'أوبل'
        ));

        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Bentley',
            'car_make_arab'=>'بنتلي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Pontiac',
            'car_make_arab'=>'بونتياك'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Peugeot',
            'car_make_arab'=>'بيجو'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Jaguar',
            'car_make_arab'=>'جاكوار'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Great Wall',
            'car_make_arab'=>'جريت واال'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'GMC',
            'car_make_arab'=>'جي أم سي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Jeep',
            'car_make_arab'=>'جيب'
        ));
         DB::table('car_make')->insert(array(
            'car_make_eng'=>'Daihatsu',
            'car_make_arab'=>'ديهاتسو'
        ));

         DB::table('car_make')->insert(array(
            'car_make_eng'=>'Daewoo',
            'car_make_arab'=>'دايو'
        ));
         DB::table('car_make')->insert(array(
            'car_make_eng'=>'Dodge',
            'car_make_arab'=>'دودج'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Rover',
            'car_make_arab'=>'روفر'
        ));
         DB::table('car_make')->insert(array(
            'car_make_eng'=>'Rolls Royce',
            'car_make_arab'=>'رولز رويس'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Renault',
            'car_make_arab'=>'رينو'
        ));

        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Saab',
            'car_make_arab'=>'ساب'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Saturn',
            'car_make_arab'=>'ساتورن'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'SsangYong',
            'car_make_arab'=>'سانغ يونغ'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Citroen',
            'car_make_arab'=>'ستيروين'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Skoda',
            'car_make_arab'=>'سكودا'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'subaru',
            'car_make_arab'=>'سوبارو'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Suzuki',
            'car_make_arab'=>'سوزوكي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'seat',
            'car_make_arab'=>'سيات'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'chery',
            'car_make_arab'=>'شيري'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'chevrolet',
            'car_make_arab'=>'شيفروليه'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'ford',
            'car_make_arab'=>'فورد'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'volvo',
            'car_make_arab'=>'فولفو'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'volkswagen',
            'car_make_arab'=>'فولكسفاغن'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'Fiat',
            'car_make_arab'=>'فيات'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'ferrari',
            'car_make_arab'=>'فيراري'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'cadillac',
            'car_make_arab'=>'كاديلاك'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'chrysler',
            'car_make_arab'=>'كرايسلر'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'lada',
            'car_make_arab'=>'لادا'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'lamborghini',
            'car_make_arab'=>'لامبورغيني'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'land Rover',
            'car_make_arab'=>'لاند روفر'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'lexus',
            'car_make_arab'=>'لكزس'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'lotus',
            'car_make_arab'=>'لوتس'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'lincoln',
            'car_make_arab'=>'لينكولن'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'mazda',
            'car_make_arab'=>'مازدا'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'maserati',
            'car_make_arab'=>'مازيراتي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'morgan',
            'car_make_arab'=>'مورغان'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'mitsubishi',
            'car_make_arab'=>'ميتسوبيشي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'mercury',
            'car_make_arab'=>'ميركوري'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'mini',
            'car_make_arab'=>'ميني'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'nissan',
            'car_make_arab'=>'نيسان'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'hummer',
            'car_make_arab'=>'هامر'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'geely',
            'car_make_arab'=>'جيلي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'ZXAUTO',
            'car_make_arab'=>'زد إكس تو'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'MG',
            'car_make_arab'=>'ام جي'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'proton',
            'car_make_arab'=>'بروتون'
        ));
        DB::table('car_make')->insert(array(
            'car_make_eng'=>'brilliance',
            'car_make_arab'=>'بريليانس'
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
        Schema::table('car_model', function (Blueprint $table) {
            $table->dropForeign('car_model_car_make_id_foreign');
        });


        DB::table('car_make')->where('car_make_id','=','1')->delete();
        DB::table('car_make')->where('car_make_id','=','2')->delete();
        DB::table('car_make')->where('car_make_id','=','3')->delete();
        DB::table('car_make')->where('car_make_id','=','4')->delete();
        DB::table('car_make')->where('car_make_id','=','5')->delete();
        DB::table('car_make')->where('car_make_id','=','6')->delete();
        DB::table('car_make')->where('car_make_id','=','7')->delete();
        DB::table('car_make')->where('car_make_id','=','8')->delete();
        DB::table('car_make')->where('car_make_id','=','9')->delete();
        DB::table('car_make')->where('car_make_id','=','10')->delete();
        DB::table('car_make')->where('car_make_id','=','11')->delete();
        DB::table('car_make')->where('car_make_id','=','12')->delete();
        DB::table('car_make')->where('car_make_id','=','13')->delete();
        DB::table('car_make')->where('car_make_id','=','14')->delete();
        DB::table('car_make')->where('car_make_id','=','15')->delete();
        DB::table('car_make')->where('car_make_id','=','16')->delete();
        DB::table('car_make')->where('car_make_id','=','17')->delete();
        DB::table('car_make')->where('car_make_id','=','18')->delete();
        DB::table('car_make')->where('car_make_id','=','19')->delete();
        DB::table('car_make')->where('car_make_id','=','20')->delete();
        DB::table('car_make')->where('car_make_id','=','21')->delete();
        DB::table('car_make')->where('car_make_id','=','22')->delete();
        DB::table('car_make')->where('car_make_id','=','23')->delete();
        DB::table('car_make')->where('car_make_id','=','24')->delete();
        DB::table('car_make')->where('car_make_id','=','25')->delete();
        DB::table('car_make')->where('car_make_id','=','26')->delete();
        DB::table('car_make')->where('car_make_id','=','27')->delete();
        DB::table('car_make')->where('car_make_id','=','28')->delete();
        DB::table('car_make')->where('car_make_id','=','29')->delete();
        DB::table('car_make')->where('car_make_id','=','30')->delete();
        DB::table('car_make')->where('car_make_id','=','31')->delete();
        DB::table('car_make')->where('car_make_id','=','32')->delete();
        DB::table('car_make')->where('car_make_id','=','33')->delete();
        DB::table('car_make')->where('car_make_id','=','34')->delete();
        DB::table('car_make')->where('car_make_id','=','35')->delete();
        DB::table('car_make')->where('car_make_id','=','36')->delete();
        DB::table('car_make')->where('car_make_id','=','37')->delete();
        DB::table('car_make')->where('car_make_id','=','38')->delete();
        DB::table('car_make')->where('car_make_id','=','39')->delete();
        DB::table('car_make')->where('car_make_id','=','40')->delete();
        DB::table('car_make')->where('car_make_id','=','41')->delete();
        DB::table('car_make')->where('car_make_id','=','42')->delete();
        DB::table('car_make')->where('car_make_id','=','43')->delete();
        DB::table('car_make')->where('car_make_id','=','44')->delete();
        DB::table('car_make')->where('car_make_id','=','45')->delete();
        DB::table('car_make')->where('car_make_id','=','46')->delete();
        DB::table('car_make')->where('car_make_id','=','47')->delete();
        DB::table('car_make')->where('car_make_id','=','48')->delete();
        DB::table('car_make')->where('car_make_id','=','49')->delete();
        DB::table('car_make')->where('car_make_id','=','50')->delete();
        DB::table('car_make')->where('car_make_id','=','51')->delete();
        DB::table('car_make')->where('car_make_id','=','52')->delete();
        DB::table('car_make')->where('car_make_id','=','53')->delete();
        DB::table('car_make')->where('car_make_id','=','54')->delete();
        DB::table('car_make')->where('car_make_id','=','55')->delete();
        DB::table('car_make')->where('car_make_id','=','56')->delete();
        DB::table('car_make')->where('car_make_id','=','57')->delete();
        DB::table('car_make')->where('car_make_id','=','58')->delete();
        DB::table('car_make')->where('car_make_id','=','59')->delete();
        DB::table('car_make')->where('car_make_id','=','60')->delete();
        DB::table('car_make')->where('car_make_id','=','61')->delete();




    }
}
