<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome','CityController@get')->name('welcome');
Route::get('get-region-list','CityController@getRegionList');

Route::get('get-subdepartment-list','CityController@getSubDepartmentList');
Route::get('advertise','CityController@getAdvertise')->name('advertise')->middleware('auth');

Route::get('/vichels','CarController@getVichels')->name('vichels');


Route::get('get-car-model-list','CarController@getcarmodel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('CarSale','CarController@save_data_Car_sale')->name('CarSale');
Route::post('CarRent','CarController@save_data_Car_Rent')->name('CarRent');

Route::fallback(function(){
  return view('errors.404');
});

Route::view('test','pages.test');



