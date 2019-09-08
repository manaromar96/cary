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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PagesController@index');
Route::group(['middleware' => 'auth'], function () {

    Route::get('home', 'HomeController@index');
    Route::resource('/store', 'StoreController');
    Route::resource('/brand', 'BrandController');
    Route::resource('/model', 'ModelController');
    Route::resource('/car', 'CarController');
    Route::get('/getStores', 'StoreController@getStores');
    Route::get('weather','BrandController@weather');
    Route::get('currency','BrandController@currency');
    Route::get('prayer','BrandController@prayerTimes');
    Route::get('/page','PagesController@index');
    Route::get('/contact', 'PagesController@contact');
    Route::get('/about', 'PagesController@about');
    Route::get('sendEmail','PagesController@sendEmail');



});
Route::resource('/store', 'StoreController')->middleware('isAdmin');



