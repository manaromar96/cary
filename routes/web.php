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
//    Route::resource('/store', 'StoreController');
    Route::resource('/brand', 'BrandController');
    Route::resource('/model', 'ModelController');
    Route::resource('/car', 'CarController');
    Route::resource('/user', 'UserController');
    Route::get('/manager', 'UserController@index')->name('manager.index');

    Route::get('/getStores', 'StoreController@getStores');
    Route::get('weather','BrandController@weather');
    Route::get('currency','BrandController@currency');
    Route::get('prayer','BrandController@prayerTimes');
    Route::get('/page','PagesController@index');
    Route::get('/about', 'PagesController@about')->name('about');
    Route::get('sendEmail','PagesController@sendEmail');
    Route::get('/visitor', 'VisitorController@index');
//    Route::get('/user', 'UserController@index');
//    Route::get('/user/create', 'UserController@create');
//    Route::get('/user/store', 'UserController@store')->name('user.store');
    Route::get('profile','HomeController@profile')->name('user.profile');

    Route::get('/pusher', 'BrandController@pusher');


//    Route::post('updateProfile',function (){
//        return view('user.profile');
//    })->name('user.profile');




});
Route::resource('/store', 'StoreController');
Route::get('/store/show-cars/{id}', 'StoreController@cars')->name('store.showCars');
Route::get('/user/show-store/{id}', 'UserController@userStore')->name('user.showStore');

Route::get('/car/buy/{id}', 'CarController@buy')->name('car.buyCar');

//Route::resource('/client', 'ClientController')->middleware('isClient');

Route::get('/deploy','deployController@index');

Route::get('/client', function () {
    return view('client.profile');
})->middleware('isClient');


Route::get('/manager', function () {
    return view('manager.profile');
});
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@store')->name('contact.store');
