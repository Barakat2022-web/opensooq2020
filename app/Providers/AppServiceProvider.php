<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use App\Model\City;
use App\Model\Car\Fuel;
use App\Model\Car\car_color;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
       Schema::defaultStringLength(191);

       //share variable that needs in more than one view
     view::share('city',City::pluck("city_name_eng",'city_id'));

        view::share('fuel',Fuel::get());

     view::share('color_name_hex_val',car_color::pluck('hexa_value','color_name_eng'));
    }



    }

