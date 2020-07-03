<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModelType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'H-1 Starex',
            'car_model_arab'=>'ستاريكس H-1',
            'car_make_id'=>'1'
        ));

         DB::table('car_model')->insert(array(
            'car_model_eng'=>'i10',
            'car_model_arab'=>'i10',
            'car_make_id'=>'1'
        ));

         DB::table('car_model')->insert(array(
            'car_model_eng'=>'i20',
            'car_model_arab'=>'i20',
            'car_make_id'=>'1'
        ));

         DB::table('car_model')->insert(array(
            'car_model_eng'=>'i30',
            'car_model_arab'=>'i30',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'i40',
            'car_model_arab'=>'i40',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Atos',
            'car_model_arab'=>'أتوس',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Azera',
            'car_model_arab'=>'أزيرا',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Accent',
            'car_model_arab'=>'اكسنت',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'H100',
            'car_model_arab'=>'أتش 100',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Excel',
            'car_model_arab'=>'اكسيل',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Elantra',
            'car_model_arab'=>'النترا',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Avante',
            'car_model_arab'=>'افانتي',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Equus',
            'car_model_arab'=>'ايكوس',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Ioniq',
            'car_model_arab'=>'ايونيك',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Porter',
            'car_model_arab'=>'بورتر',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Pony',
            'car_model_arab'=>'بوني',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Trajet',
            'car_model_arab'=>'تراجيت',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Tucson',
            'car_model_arab'=>'توسان',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Tuscani',
            'car_model_arab'=>'توسكاني',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Terracan',
            'car_model_arab'=>'تيراكان',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Tiburon',
            'car_model_arab'=>'تيبرون',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Galloper',
            'car_model_arab'=>'جالوبر',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Getz',
            'car_model_arab'=>'جيتز',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Genesis',
            'car_model_arab'=>'جينيسيس',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Genesis Coupe',
            'car_model_arab'=>'جينيسيس كوبيه',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'santamo',
            'car_model_arab'=>'سانتامو',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'stellar',
            'car_model_arab'=>'ستيلار',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'scoupe',
            'car_model_arab'=>'سكوب',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'santa fe',
            'car_model_arab'=>'سنتافي',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'centennial',
            'car_model_arab'=>'سنتينال',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'sonata',
            'car_model_arab'=>'سوناتا',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'veloster',
            'car_model_arab'=>'فوليستر',
            'car_make_id'=>'1'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'veracruz',
            'car_model_arab'=>'فيراكروز',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'verna',
            'car_model_arab'=>'فيرنا',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'creta',
            'car_model_arab'=>'كريتا',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'coupe',
            'car_model_arab'=>'كوبيه',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'coupe-s',
            'car_model_arab'=>'كوبيه - اس',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'libero',
            'car_model_arab'=>'ليبيرو',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'matrix',
            'car_model_arab'=>'ماتريكس',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'mighty',
            'car_model_arab'=>'مايتي',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'kona',
            'car_model_arab'=>'كونا',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'eon',
            'car_model_arab'=>'ايون',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'palisade',
            'car_model_arab'=>'باليسايد',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'click',
            'car_model_arab'=>'كليك',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'entourage',
            'car_model_arab'=>'انتوراج',
            'car_make_id'=>'1'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'other',
            'car_model_arab'=>'أخرى',
            'car_make_id'=>'1'
        ));



         DB::table('car_model')->insert(array(
            'car_model_eng'=>'4Runner',
            'car_model_arab'=>'4 رانر',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'AE86',
            'car_model_arab'=>'AE86',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'C-HR',
            'car_model_arab'=>'C-HR',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'MR-S',
            'car_model_arab'=>'MR-S',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'MR2',
            'car_model_arab'=>'MR2',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'Xa',
            'car_model_arab'=>'Xa',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'IQ',
            'car_model_arab'=>'اّي كيو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'avalon',
            'car_model_arab'=>'افالون',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'avanza',
            'car_model_arab'=>'افانزا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'avensis',
            'car_model_arab'=>'افانزيس',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'alphard',
            'car_model_arab'=>'الفارد',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'allex',
            'car_model_arab'=>'اليكس',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'opa',
            'car_model_arab'=>'اوبا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'auris',
            'car_model_arab'=>'اوريس',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'echo',
            'car_model_arab'=>'اكو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'innova',
            'car_model_arab'=>'انوفا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'isis',
            'car_model_arab'=>'ايزيس',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'aristo',
            'car_model_arab'=>'اريستو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'fJ Cruiser',
            'car_model_arab'=>'اف جاي كروزر',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'mark X',
            'car_model_arab'=>'اكس مارك',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'altezza',
            'car_model_arab'=>'التيزا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'allion',
            'car_model_arab'=>'اليون',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'urban Cruiser',
            'car_model_arab'=>'اوربان كروز',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'origin',
            'car_model_arab'=>'اوريجن',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'aurion',
            'car_model_arab'=>'اوربون',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'lpsum',
            'car_model_arab'=>'ابيسوم',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'ist',
            'car_model_arab'=>'ايستي',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'estima',
            'car_model_arab'=>'ايستيما',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'aygo',
            'car_model_arab'=>'ايغو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'passo',
            'car_model_arab'=>'باسو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'paseo',
            'car_model_arab'=>'باسيو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'prado',
            'car_model_arab'=>'برادو',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'probox',
            'car_model_arab'=>'بروبوكس',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'progres',
            'car_model_arab'=>'بروجرس',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'pronard',
            'car_model_arab'=>'برونارد',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'previa',
            'car_model_arab'=>'بريفيا',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'premio',
            'car_model_arab'=>'بريمو',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'prius',
            'car_model_arab'=>'بريوس',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'prius C',
            'car_model_arab'=>'بريوس سي',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'platz',
            'car_model_arab'=>'بلاتر',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'blade',
            'car_model_arab'=>'بلايد',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'blizzard',
            'car_model_arab'=>'بليزرد',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Porter',
            'car_model_arab'=>'بورتي',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'bB',
            'car_model_arab'=>'بي بي',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'picnic',
            'car_model_arab'=>'بيكنيك',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'belta',
            'car_model_arab'=>'بيلتا',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'tacuma',
            'car_model_arab'=>'تاكوما',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'townAce',
            'car_model_arab'=>'تاون ايس',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'chaser',
            'car_model_arab'=>'تشايسر',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'tundra',
            'car_model_arab'=>'توندرا',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'tercel',
            'car_model_arab'=>'تيرسل',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'grand Hiace',
            'car_model_arab'=>'جراند هياسي',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'gT86',
            'car_model_arab'=>'جي تي 86',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'duet',
            'car_model_arab'=>'دويت',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'duyna',
            'car_model_arab'=>'ديانا',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'rAV 4',
            'car_model_arab'=>'راف فور',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'ractis',
            'car_model_arab'=>'راكتيس',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'raum',
            'car_model_arab'=>'راوم',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'rush',
            'car_model_arab'=>'رش',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'regius',
            'car_model_arab'=>'ريجس',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'zelas',
            'car_model_arab'=>'زيلاس',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'sparky',
            'car_model_arab'=>'سباركي',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'sprinter',
            'car_model_arab'=>'سبرينتر',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'starlet',
            'car_model_arab'=>'ستارليت',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'succeed',
            'car_model_arab'=>'سكسيد',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'scepter',
            'car_model_arab'=>'سيكبتر',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'supra',
            'car_model_arab'=>'سوبرا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'soarer',
            'car_model_arab'=>'سوارير',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'soluna',
            'car_model_arab'=>'سولونا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'sera',
            'car_model_arab'=>'سيرا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'sequoia',
            'car_model_arab'=>'سيكوبا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'celsior',
            'car_model_arab'=>'سيلسيور',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'celica',
            'car_model_arab'=>'سيليكا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'sienta',
            'car_model_arab'=>'سينتا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'century',
            'car_model_arab'=>'سينشري',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'cynos',
            'car_model_arab'=>'سينونز',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'scion',
            'car_model_arab'=>'سيون',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'siena',
            'car_model_arab'=>'سيينا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'Land Crusier Pickup',
            'car_model_arab'=>'لاندكروزر بيغ اب',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'shas',
            'car_model_arab'=>'شاص',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'gaia',
            'car_model_arab'=>'غايا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'granvia',
            'car_model_arab'=>'غرانفيا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'vellfire',
            'car_model_arab'=>'فلفير',
            'car_make_id'=>'2'
        ));

         DB::table('car_model')->insert(array(
            'car_model_eng'=>'venza',
            'car_model_arab'=>'فيزا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'fun Cargo',
            'car_model_arab'=>'فنكارجو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'fortuner',
            'car_model_arab'=>'فورتشنز',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'voxy',
            'car_model_arab'=>'فوكسي',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'voltz',
            'car_model_arab'=>'فولتز',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'verso',
            'car_model_arab'=>'فيرسو',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'feroza',
            'car_model_arab'=>'فيروزا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'fiesta',
            'car_model_arab'=>'فيستا',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'vios',
            'car_model_arab'=>'فيوس',
            'car_make_id'=>'2'
        ));
         DB::table('car_model')->insert(array(
            'car_model_eng'=>'carib',
            'car_model_arab'=>'كاريب',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'carina',
            'car_model_arab'=>'كارينا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'cavalier',
            'car_model_arab'=>'كالفيير',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'caldina',
            'car_model_arab'=>'كالدينا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'camry',
            'car_model_arab'=>'كامري',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'cami',
            'car_model_arab'=>'كامي',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'crown',
            'car_model_arab'=>'كراون',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'krista',
            'car_model_arab'=>'كريستا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'cressida',
            'car_model_arab'=>'كريسدا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'kulger',
            'car_model_arab'=>'كلوغر',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'corsa',
            'car_model_arab'=>'كورسا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'corolla',
            'car_model_arab'=>'كورولا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'corona',
            'car_model_arab'=>'كورونا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'coaster',
            'car_model_arab'=>'كوستر',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'land Cruiser',
            'car_model_arab'=>'لاند كروزر',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'land Cruiser J70',
            'car_model_arab'=>'لاندكروزر ريغ',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'literAce',
            'car_model_arab'=>'لايت ايس',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'matrix',
            'car_model_arab'=>'ماتريكس',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'mark 2',
            'car_model_arab'=>'مارك 2',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'masterAce',
            'car_model_arab'=>'ماستر ايس',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'mega Cruiser',
            'car_model_arab'=>'ميغا كروزر',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'nadia',
            'car_model_arab'=>'ناديا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'nuna',
            'car_model_arab'=>'نونا',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'harrier',
            'car_model_arab'=>'هاربر',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'hiace',
            'car_model_arab'=>'هايس',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'highlander',
            'car_model_arab'=>'هايلاندر',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'hilux',
            'car_model_arab'=>'هيلوكس',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'wish',
            'car_model_arab'=>'ويش',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'wILL',
            'car_model_arab'=>'ويل',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'windom',
            'car_model_arab'=>'ويندوم',
            'car_make_id'=>'2'
        )); DB::table('car_model')->insert(array(
            'car_model_eng'=>'yaris',
            'car_model_arab'=>'ياريس',
            'car_make_id'=>'2'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'other',
            'car_model_arab'=>'أخرى',
            'car_make_id'=>'2'
        ));


        DB::table('car_model')->insert(array(
            'car_model_eng'=>'asia',
            'car_model_arab'=>'اسيا',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'avila',
            'car_model_arab'=>'افيلا',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'optima',
            'car_model_arab'=>'اوبتيما',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'opirus',
            'car_model_arab'=>'اوبيروس',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'elan',
            'car_model_arab'=>'ايلان',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'pride',
            'car_model_arab'=>'برايد',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'borrego',
            'car_model_arab'=>'بريجيو',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'bongo',
            'car_model_arab'=>'بنجو',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'besta',
            'car_model_arab'=>'بيستا',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'picanto',
            'car_model_arab'=>'بيكانتو',
            'car_make_id'=>'3'
        ));


        DB::table('car_model')->insert(array(
            'car_model_eng'=>'granbird',
            'car_model_arab'=>'جراند بيرد',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'joice',
            'car_model_arab'=>'جويس',
            'car_make_id'=>'3'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'retona',
            'car_model_arab'=>'ريتونا',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'rio',
            'car_model_arab'=>'ريو',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'sportage',
            'car_model_arab'=>'سبورتاج',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'spectra',
            'car_model_arab'=>'سبيكترا',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'sorento',
            'car_model_arab'=>'سورينتو',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'soul',
            'car_model_arab'=>'سول',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cerato',
            'car_model_arab'=>'سيراتو',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cerato koup',
            'car_model_arab'=>'سيراتو كوب',
            'car_make_id'=>'3'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'sephia',
            'car_model_arab'=>'سيفيا',
            'car_make_id'=>'3'
        ));



        DB::table('car_model')->insert(array(
            'car_model_eng'=>'1 Series',
            'car_model_arab'=>'الفئة 1',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'116',
            'car_model_arab'=>'116',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'118',
            'car_model_arab'=>'118',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'120',
            'car_model_arab'=>'120',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'125',
            'car_model_arab'=>'125',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'135',
            'car_model_arab'=>'135',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'225',
            'car_model_arab'=>'225',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'2002',
            'car_model_arab'=>'2002',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'220',
            'car_model_arab'=>'220',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'316',
            'car_model_arab'=>'316',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'318',
            'car_model_arab'=>'318',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'320',
            'car_model_arab'=>'320',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'323',
            'car_model_arab'=>'323',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'325',
            'car_model_arab'=>'325',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'328',
            'car_model_arab'=>'328',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'330',
            'car_model_arab'=>'330',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'335',
            'car_model_arab'=>'335',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'E30',
            'car_model_arab'=>'E30',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'328 Gran Turismo',
            'car_model_arab'=>'328 Gran Turismo',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'E46',
            'car_model_arab'=>'E46',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GT',
            'car_model_arab'=>'GT',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'420',
            'car_model_arab'=>'420',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'428',
            'car_model_arab'=>'428',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'435',
            'car_model_arab'=>'435',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'520',
            'car_model_arab'=>'520',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'523',
            'car_model_arab'=>'523',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'525',
            'car_model_arab'=>'525',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'528',
            'car_model_arab'=>'528',
            'car_make_id'=>'4'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'530',
            'car_model_arab'=>'530',
            'car_make_id'=>'4'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GLE 400 AMG',
            'car_model_arab'=>'GLE 400 AMG',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GLE 450 AMG',
            'car_model_arab'=>'GLE 450 AMG',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GLE 500',
            'car_model_arab'=>'GLE 500',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GLE 63 AMG',
            'car_model_arab'=>'GLE 63 AMG',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GLA 250',
            'car_model_arab'=>'GLA 250',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GLA 45',
            'car_model_arab'=>'GLA 45',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'class A',
            'car_model_arab'=>'الفئة A',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A 140',
            'car_model_arab'=>'A 140',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A 45',
            'car_model_arab'=>'A 45',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A 160',
            'car_model_arab'=>'A 160',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A180',
            'car_model_arab'=>'A180',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A250',
            'car_model_arab'=>'A250',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A 45 AMG',
            'car_model_arab'=>'A 45 AMG',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'B 200',
            'car_model_arab'=>'B 200',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'B class',
            'car_model_arab'=>'B الفئة',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 180',
            'car_model_arab'=>'C 180',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 200',
            'car_model_arab'=>'C 200',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 220',
            'car_model_arab'=>'C 220',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 230',
            'car_model_arab'=>'C 230',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 240',
            'car_model_arab'=>'C 240',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 250',
            'car_model_arab'=>'C 250',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 280',
            'car_model_arab'=>'C 280',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 300',
            'car_model_arab'=>'C 300',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 350',
            'car_model_arab'=>'C 350',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C63 AMG',
            'car_model_arab'=>'C63 AMG',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 55',
            'car_model_arab'=>'C 55',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C350e',
            'car_model_arab'=>'C350e',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 180 Coupe',
            'car_model_arab'=>'C 180 Coupe',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 300 Coupe',
            'car_model_arab'=>'C 300 Coupe',
            'car_make_id'=>'5'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'C 32 AMG',
            'car_model_arab'=>'C 32 AMG',
            'car_make_id'=>'5'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911',
            'car_model_arab'=>'911',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'924',
            'car_model_arab'=>'924',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'928',
            'car_model_arab'=>'928',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'944',
            'car_model_arab'=>'944',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'959',
            'car_model_arab'=>'959',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'968',
            'car_model_arab'=>'968',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 4',
            'car_model_arab'=>'911 4',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 4S',
            'car_model_arab'=>'911 4S',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 GT2',
            'car_model_arab'=>'911 GT2',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 GT3',
            'car_model_arab'=>'911 GT3',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 S',
            'car_model_arab'=>'911 S',
            'car_make_id'=>'6'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 Targa 4',
            'car_model_arab'=>'911 Targa 4',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 Turbo',
            'car_model_arab'=>'911 Turbo',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 Turbo S',
            'car_model_arab'=>'911 Turbo S',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'918 Spyder',
            'car_model_arab'=>'918 Spyder',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'993',
            'car_model_arab'=>'993',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'911 Targa',
            'car_model_arab'=>'911 تارجا',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'996',
            'car_model_arab'=>'996',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'panamera',
            'car_model_arab'=>'باناميرا',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'boxster',
            'car_model_arab'=>'بوكستر',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'carrera GT',
            'car_model_arab'=>'GT كاربرا',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cayman',
            'car_model_arab'=>'كايمان',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cayenne',
            'car_model_arab'=>'كايين',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cayenne S',
            'car_model_arab'=>'كايين أس',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cayenne Turbo',
            'car_model_arab'=>'كايين توربو',
            'car_make_id'=>'6'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cayenne Turbo S',
            'car_model_arab'=>'كايين توربو اس',
            'car_make_id'=>'6'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DB7',
            'car_model_arab'=>'DB7',
            'car_make_id'=>'7'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DB9',
            'car_model_arab'=>'DB9',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DBC',
            'car_model_arab'=>'DBC',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'One-77',
            'car_model_arab'=>'One-77',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'v12',
            'car_model_arab'=>'v12',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'v8',
            'car_model_arab'=>'v8',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Rapide',
            'car_model_arab'=>'رابيد',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cygnet',
            'car_model_arab'=>'سايجنت',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'vanquish',
            'car_model_arab'=>'فانكويش',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'virage',
            'car_model_arab'=>'فيراج',
            'car_make_id'=>'7'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'lagonda',
            'car_model_arab'=>'لاغوندا',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DB6',
            'car_model_arab'=>'DB6',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DBS',
            'car_model_arab'=>'DBS',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'V12 Vantage',
            'car_model_arab'=>'V12 Vantage',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'V8 Vantage',
            'car_model_arab'=>'V8 Vantage',
            'car_make_id'=>'7'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'other',
            'car_model_arab'=>'أخرى',
            'car_make_id'=>'7'
        ));


        DB::table('car_model')->insert(array(
            'car_model_eng'=>'33',
            'car_model_arab'=>'33',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'75',
            'car_model_arab'=>'75',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'145',
            'car_model_arab'=>'145',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'146',
            'car_model_arab'=>'146',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'147',
            'car_model_arab'=>'147',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'155',
            'car_model_arab'=>'155',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'156',
            'car_model_arab'=>'156',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'159',
            'car_model_arab'=>'159',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'164',
            'car_model_arab'=>'164',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'166',
            'car_model_arab'=>'166',
            'car_make_id'=>'8'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'8c',
            'car_model_arab'=>'8c',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'90',
            'car_model_arab'=>'90',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'gT',
            'car_model_arab'=>'gT',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'gTV',
            'car_model_arab'=>'gTV',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'rZ',
            'car_model_arab'=>'rZ',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'sZ',
            'car_model_arab'=>'sZ',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'arna',
            'car_model_arab'=>'ارنا',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'brera',
            'car_model_arab'=>'بريرا',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Giulietta',
            'car_model_arab'=>'جوليتا',
            'car_make_id'=>'8'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Giulia',
            'car_model_arab'=>'جولييا',
            'car_make_id'=>'8'
        ));


        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A1',
            'car_model_arab'=>'A1',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A2',
            'car_model_arab'=>'A2',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A3',
            'car_model_arab'=>'A3',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A4',
            'car_model_arab'=>'A4',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A5',
            'car_model_arab'=>'A5',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A6',
            'car_model_arab'=>'A6',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A7',
            'car_model_arab'=>'A7',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A8',
            'car_model_arab'=>'A8',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'A9',
            'car_model_arab'=>'A9',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Q3',
            'car_model_arab'=>'Q3',
            'car_make_id'=>'9'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Q5',
            'car_model_arab'=>'Q5',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Q7',
            'car_model_arab'=>'Q7',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'R8',
            'car_model_arab'=>'R8',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'RS1',
            'car_model_arab'=>'RS1',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'RS2',
            'car_model_arab'=>'RS2',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'RS3',
            'car_model_arab'=>'RS3',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'RS4',
            'car_model_arab'=>'RS4',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'RS5',
            'car_model_arab'=>'RS5',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'RS6',
            'car_model_arab'=>'RS6',
            'car_make_id'=>'9'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'S1',
            'car_model_arab'=>'S1',
            'car_make_id'=>'9'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'FSR',
            'car_model_arab'=>'FSR',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'NKR',
            'car_model_arab'=>'NKR',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'NPR',
            'car_model_arab'=>'NPR',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'I-Mark',
            'car_model_arab'=>'اي-مارك',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Aska',
            'car_model_arab'=>'أسكا',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Amigo',
            'car_model_arab'=>'أميغو',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Impulse',
            'car_model_arab'=>'إمبلس',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Ascender',
            'car_model_arab'=>'اسندر',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Axiom',
            'car_model_arab'=>'اكسيوم',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Bighorn',
            'car_model_arab'=>'بيغ هورن',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'trooper',
            'car_model_arab'=>'تروبر',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'giga',
            'car_model_arab'=>'جيجا',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'d-max',
            'car_model_arab'=>'دي-ماكس',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'rodeo',
            'car_model_arab'=>'روديو',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'faster',
            'car_model_arab'=>'فاستر',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'filly',
            'car_model_arab'=>'فيلي',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'vehiCROSS',
            'car_model_arab'=>'فيهي كروس',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Wizard',
            'car_model_arab'=>'ويزارد',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'elf',
            'car_model_arab'=>'اي لا اف',
            'car_make_id'=>'10'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'forward',
            'car_model_arab'=>'فورود',
            'car_make_id'=>'10'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'E30',
            'car_model_arab'=>'E30',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'E35',
            'car_model_arab'=>'E35',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'EX25',
            'car_model_arab'=>'EX25',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'EX35',
            'car_model_arab'=>'EX35',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'EX37',
            'car_model_arab'=>'EX37',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'FX37',
            'car_model_arab'=>'FX37',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'FX45',
            'car_model_arab'=>'FX45',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'FX50',
            'car_model_arab'=>'FX50',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'FX56',
            'car_model_arab'=>'FX56',
            'car_make_id'=>'11'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'FX35',
            'car_model_arab'=>'FX35',
            'car_make_id'=>'11'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'agila',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'astra',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'ascona',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'admiral',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'omega',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'antara',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'insignia',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'tigra',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'gT',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'diplomat',
            'car_model_arab'=>'',
            'car_make_id'=>'12'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Turbo R',
            'car_model_arab'=>'تيربو R',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Arnage',
            'car_model_arab'=>'آرنايج',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'azure',
            'car_model_arab'=>'آزور',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'brooklands',
            'car_model_arab'=>'بروكلاندز',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'flying Spur',
            'car_model_arab'=>'فلاينج سبير',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Continental',
            'car_model_arab'=>'كونتيننتال',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Continental GT',
            'car_model_arab'=>'كونتينينتال GT',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Mulsanne',
            'car_model_arab'=>'مولسان',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Bentayga',
            'car_model_arab'=>'بينتايجا',
            'car_make_id'=>'13'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Continental GTC',
            'car_model_arab'=>'كونتينينتال جي تي سي',
            'car_make_id'=>'13'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'6000',
            'car_model_arab'=>'6000',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'g5',
            'car_model_arab'=>'g5',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'g6',
            'car_model_arab'=>'g6',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'g8',
            'car_model_arab'=>'g8',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'gTO',
            'car_model_arab'=>'gTO',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'aztek',
            'car_model_arab'=>'ازتيك',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'parisian',
            'car_model_arab'=>'باربسيان',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Bonneville',
            'car_model_arab'=>'بونفيل',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Trans Sport',
            'car_model_arab'=>'ترانز سبورت',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'tempest',
            'car_model_arab'=>'تيمبست',
            'car_make_id'=>'14'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'grand Am',
            'car_model_arab'=>'جراند أيه أم',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'grand Prix',
            'car_model_arab'=>'جراند بريكس',
            'car_make_id'=>'14'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'g4',
            'car_model_arab'=>'جي 4',
            'car_make_id'=>'14'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'H220',
            'car_model_arab'=>'H220',
            'car_make_id'=>'61'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'H230',
            'car_model_arab'=>'H230',
            'car_make_id'=>'61'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'H320',
            'car_model_arab'=>'H320',
            'car_make_id'=>'61'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'H330',
            'car_model_arab'=>'H330',
            'car_make_id'=>'61'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'H530',
            'car_model_arab'=>'H530',
            'car_make_id'=>'61'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'M1',
            'car_model_arab'=>'M1',
            'car_make_id'=>'61'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'V5',
            'car_model_arab'=>'V5',
            'car_make_id'=>'61'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Other',
            'car_model_arab'=>'Other',
            'car_make_id'=>'61'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'ATS',
            'car_model_arab'=>'ATS',
            'car_make_id'=>'41'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'BLS',
            'car_model_arab'=>'BLS',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'CTS',
            'car_model_arab'=>'CTS',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DTS',
            'car_model_arab'=>'DTS',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DeVille',
            'car_model_arab'=>'DeVille',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'ELR',
            'car_model_arab'=>'ELR',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'SRX',
            'car_model_arab'=>'SRX',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'STS',
            'car_model_arab'=>'STS',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'XLR',
            'car_model_arab'=>'XLR',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Escalade',
            'car_model_arab'=>'Escalade',
            'car_make_id'=>'41'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'a11',
            'car_model_arab'=>'a11',
            'car_make_id'=>'34'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'a113',
            'car_model_arab'=>'a113',
            'car_make_id'=>'34'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'a5',
            'car_model_arab'=>'a5',
            'car_make_id'=>'34'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'a620',
            'car_model_arab'=>'a620',
            'car_make_id'=>'34'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'b11',
            'car_model_arab'=>'b11',
            'car_make_id'=>'34'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'m11',
            'car_model_arab'=>'m11',
            'car_make_id'=>'34'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'qq',
            'car_model_arab'=>'qq',
            'car_make_id'=>'34'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c10',
            'car_model_arab'=>'سي 10',
            'car_make_id'=>'35'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'hhr',
            'car_model_arab'=>'اتش اتش ار',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'LUV D-MAX',
            'car_model_arab'=>'LUV D-MAX',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'S-10',
            'car_model_arab'=>'S-10',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'SSR',
            'car_model_arab'=>'SSR',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Astra',
            'car_model_arab'=>'أسترا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Aveo',
            'car_model_arab'=>'أفيو',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Omega',
            'car_model_arab'=>'أوميغا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Uplander',
            'car_model_arab'=>'ابلاندر',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Epica',
            'car_model_arab'=>'ابيكا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Express',
            'car_model_arab'=>'اسبريس',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Astro',
            'car_model_arab'=>'استرو',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Avalanche',
            'car_model_arab'=>'افلانش',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Explorer',
            'car_model_arab'=>'اكسبلورير',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Equionx',
            'car_model_arab'=>'اكوينكس',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Alero',
            'car_model_arab'=>'اليرو',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Impala',
            'car_model_arab'=>'امبالا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Optra',
            'car_model_arab'=>'اوبترا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Evanda',
            'car_model_arab'=>'ايفاندا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Prizm',
            'car_model_arab'=>'بريزم',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Blazer',
            'car_model_arab'=>'بلازر',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Bolt',
            'car_model_arab'=>'بولت',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Beretta',
            'car_model_arab'=>'بيريتا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Bel Air',
            'car_model_arab'=>'بيل اير',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Tavera',
            'car_model_arab'=>'تافيرا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Tahoe',
            'car_model_arab'=>'تاهو',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Traversa',
            'car_model_arab'=>'ترافرس',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Tracker',
            'car_model_arab'=>'تراكر',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Trax',
            'car_model_arab'=>'تراكس',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Trans Sport',
            'car_model_arab'=>'ترانس سبورت',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'TrailBlazer',
            'car_model_arab'=>'تريل بليزر',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Geo Storm',
            'car_model_arab'=>'جيو ستورم',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'rezzo',
            'car_model_arab'=>'ريزو',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'zafira',
            'car_model_arab'=>'زافيرا',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'sail',
            'car_model_arab'=>'سايل',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'spark',
            'car_model_arab'=>'سبارك',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'sprint',
            'car_model_arab'=>'سبرينت',
            'car_make_id'=>'35'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'200',
            'car_model_arab'=>'200',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'300C',
            'car_model_arab'=>'300C',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'300M',
            'car_model_arab'=>'300M',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'LHS',
            'car_model_arab'=>'LHS',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'aspen',
            'car_model_arab'=>'اّسبن',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'imperial',
            'car_model_arab'=>'امبريال',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'intrepid',
            'car_model_arab'=>'انتربيد',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'pasifica',
            'car_model_arab'=>'باسيفيكا',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'prowler',
            'car_model_arab'=>'براولر',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'PT Crusier',
            'car_model_arab'=>'كروز PT',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Town & Country',
            'car_model_arab'=>'تاون اند كانتري',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Grand Voygar',
            'car_model_arab'=>'جراند فوباجر',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Daytona Shelby',
            'car_model_arab'=>'دايوتا شيلبي',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Saratoga',
            'car_model_arab'=>'ساراتوجا',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Sebring',
            'car_model_arab'=>'سيبرينغ',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Cirrus',
            'car_model_arab'=>'سيرس',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Voygar',
            'car_model_arab'=>'فوياجر',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Vision',
            'car_model_arab'=>'فيجن',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Fifth Avenue',
            'car_model_arab'=>'فيفث اّفينيو',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Crossfire',
            'car_model_arab'=>'كروس فاير',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Concorde',
            'car_model_arab'=>'كونكورد',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'LeBaron',
            'car_model_arab'=>'لي بارون',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Nassau',
            'car_model_arab'=>'ناسو',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Neon',
            'car_model_arab'=>'نيون',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'New Yorker',
            'car_model_arab'=>'نيويوركر',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'300S',
            'car_model_arab'=>'300S',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'300',
            'car_model_arab'=>'300',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'other',
            'car_model_arab'=>'أخرى',
            'car_make_id'=>'42'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c-Zero',
            'car_model_arab'=>'c-Zero',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c1',
            'car_model_arab'=>'c1',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c15',
            'car_model_arab'=>'c15',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c2',
            'car_model_arab'=>'c2',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c25',
            'car_model_arab'=>'c25',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c3',
            'car_model_arab'=>'c3',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c35',
            'car_model_arab'=>'c35',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c4',
            'car_model_arab'=>'c4',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c5',
            'car_model_arab'=>'c5',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c6',
            'car_model_arab'=>'c6',
            'car_make_id'=>'29'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'c8',
            'car_model_arab'=>'c8',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'cx',
            'car_model_arab'=>'cx',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'dS2',
            'car_model_arab'=>'dS2',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DS3',
            'car_model_arab'=>'DS3',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DS4',
            'car_model_arab'=>'DS4',
            'car_make_id'=>'29'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DS5',
            'car_model_arab'=>'DS5',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DS6',
            'car_model_arab'=>'DS6',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DS9',
            'car_model_arab'=>'DS9',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DS4S',
            'car_model_arab'=>'DS4S',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'DS7',
            'car_model_arab'=>'DS7',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GS',
            'car_model_arab'=>'GS',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GSA',
            'car_model_arab'=>'GSA',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'GT',
            'car_model_arab'=>'GT',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'2CV',
            'car_model_arab'=>'2CV',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'AX',
            'car_model_arab'=>'AX',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'BX',
            'car_model_arab'=>'BX',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'LN',
            'car_model_arab'=>'LN',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'LNA',
            'car_model_arab'=>'LNA',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'XM',
            'car_model_arab'=>'XM',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'ZX',
            'car_model_arab'=>'ZX',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Ami',
            'car_model_arab'=>'امي',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'Acadine',
            'car_model_arab'=>'اكاديان',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'xsara',
            'car_model_arab'=>'اكسارا',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'xsara Picasso',
            'car_model_arab'=>'كسار بيكاسو',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'xantia',
            'car_model_arab'=>'اكستانيا',
            'car_make_id'=>'29'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'evasion',
            'car_model_arab'=>'ايفاجن',
            'car_make_id'=>'29'
        ));

        DB::table('car_model')->insert(array(
            'car_model_eng'=>'G2X',
            'car_model_arab'=>'G2X',
            'car_make_id'=>'21'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'arcadia',
            'car_model_arab'=>'أركاديا',
            'car_make_id'=>'21'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'espero',
            'car_model_arab'=>'إسبيرو',
            'car_make_id'=>'21'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'istana',
            'car_model_arab'=>'استانا',
            'car_make_id'=>'21'
        ));
        DB::table('car_model')->insert(array(
            'car_model_eng'=>'evanda',
            'car_model_arab'=>'ايفاندا',
            'car_make_id'=>'21'
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
        DB::table('car_model')->where('car_make_id','=','1')->delete();
        DB::table('car_model')->where('car_make_id','=','2')->delete();
        DB::table('car_model')->where('car_make_id','=','3')->delete();
        DB::table('car_model')->where('car_make_id','=','4')->delete();
        DB::table('car_model')->where('car_make_id','=','5')->delete();
        DB::table('car_model')->where('car_make_id','=','6')->delete();
        DB::table('car_model')->where('car_make_id','=','7')->delete();
        DB::table('car_model')->where('car_make_id','=','8')->delete();
        DB::table('car_model')->where('car_make_id','=','9')->delete();
        DB::table('car_model')->where('car_make_id','=','10')->delete();
    }
}
