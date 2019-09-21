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


Auth::routes();
Route::get('/', 'VisitorController@index');

Route::get('/page', 'PagesController@index');
Route::group(['middleware' => 'auth'], function () {

    Route::get('home', 'HomeController@index');
//    Route::resource('/store', 'StoreController');
    Route::resource('/brand', 'BrandController');
    Route::resource('/model', 'ModelController');
    Route::resource('/car', 'CarController');
    Route::resource('/user', 'UserController');
    Route::resource('/manager', 'ManagerController');
//    Route::get('/profile',function($id){
//        return view('manager.index',compact('id'));
//    })->name('profile');
    Route::post('edit-profile','ManagerController@update')->name('manager.editProfile');
    Route::post('editClient','UserController@update')->name('user.clientProfile');

    Route::get('/user', 'UserController@index')->name('user.index');
//    Route::get('/manager', 'ManagerController@index')->name('manager.index');

//    Route::get('/user', 'UserController@index')->name('user.index');

    Route::get('/getStores', 'StoreController@getStores');
    Route::get('weather','BrandController@weather');
    Route::get('currency','BrandController@currency');
    Route::get('prayer','BrandController@prayerTimes');
    Route::get('/page','PagesController@index');
    Route::get('/about', 'PagesController@about')->name('about');
    Route::get('sendEmail','PagesController@sendEmail');
//    Route::get('/user', 'UserController@index');
//    Route::get('/user/create', 'UserController@create');
//    Route::get('/user/store', 'UserController@store')->name('user.store');
    Route::get('/profile','HomeController@profile')->name('user.profile');

    Route::get('/pusher', 'BrandController@pusher');

//    Route::post('updateProfile',function (){
//        return view('user.profile');
//    })->name('user.profile');




});
Route::resource('/store', 'StoreController');
Route::get('/store/show-cars/{id}', 'StoreController@cars')->name('store.showCars');
Route::get('/manager/show-store/{id}', 'ManagerController@managerStore')->name('manager.showStore');
Route::get('/store/show-storeCars/{id}', 'ManagerController@storeCars')->name('manager.storeCars');
Route::get('/manager/show-cars/{id}', 'ManagerController@storeCars')->name('manager.showCars');

Route::get('/car/buy/{id}', 'CarController@buy')->name('car.buyCar');
Route::get('/car/bill/{id}', 'CarController@bill')->name('car.carBill');

//Route::resource('/client', 'ClientController')->middleware('isClient');

Route::get('/deploy','deployController@index');

//Route::get('/client', function () {
//    return view('client.profile');
//})->middleware('isClient');


//Route::get('/manager', function () {
//    return view('manager.profile');
//});
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@store')->name('contact.store');
