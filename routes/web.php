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
Route::get('/AllStore','StoreController@AllStore')->name('AllStore');

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/whatCar',function () {
return view('car');
}) ->name('whatCar');
Route::get('/admin/dashboard','AdminController@dashboard')->name('admin.dashboard');
Route::get('/manager/dashboard','ManagerController@dashboard')->name('manager.dashboard');
Route::get('/User/dashboard','UserController@dashboard')->name('user.dashboard');


Route::get('/showCar/{id}','visitorController@showCar')->name('showCar');
Route::get('/allCar','visitorController@allCar')->name('allCar');

Auth::routes();
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('/', 'VisitorController@index');

Route::resource('/car', 'CarController');

Route::get('/page', 'PagesController@index');
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@profile');
    Route::get('/showYourCar/{id}','UserController@showYourCar')->name('showYourCar');
    Route::get('/profile', 'HomeController@profile');
    Route::get('/dash', 'HomeController@dashboard');

//    Route::resource('/store', 'StoreController');

    Route::resource('/brand', 'BrandController');
    Route::resource('/model', 'ModelController');
    Route::resource('/user', 'UserController');
    Route::resource('/sale', 'SaleController');
    Route::resource('/admin', 'AdminController');
    Route::get('/adm/showStore', 'AdminController@showAllStore')->name('admin.showStore');
    Route::get('/newUser','AdminController@register');
    Route::post('/newUser','AdminController@
    createRegister')->name('createRegister');

    Route::get('/managerSale','SaleController@managerSale')->name('managerSale');

//    Route::get('/profile',function($id){
//        return view('manager.index',compact('id'));
//    })->name('profile');
//    Route::post('edit_prof
//ile','ManagerController@update')->name('editProfile');
    Route::get('/adm/showClient','AdminController@client');
    Route::get('/allUser','AdminController@user');

//    Route::post('editClient'/'{id}','UserController@update')->name('user.clientProfile');

    Route::get('/user', 'UserController@index')->name('user.index');

//    Route::get('/manager', 'ManagerController@index')->name('manager.index');

//    Route::get('/user', 'UserController@index')->name('user.index');

    Route::get('/getStores', 'StoreController@getStores');
    Route::get('weather','BrandController@weather');
    Route::get('currency','BrandController@currency');
    Route::get('prayer','BrandController@prayerTimes');
    Route::get('/page','PagesController@index');
    Route::get('sendEmail','PagesController@sendEmail');
//    Route::get('/user', 'UserController@index');
//    Route::get('/user/create', 'UserController@create');
//    Route::get('/user/store', 'UserController@store')->name('user.store');
//    Route::get('/profile','HomeController@profile')->name('user.profile');
    Route::resource('/manager', 'ManagerController');
    Route::get('/manager/show/{id}','ManagerController@showprofile')->name('manager.show');

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
Route::get('/manager/showCars/{id}', 'ManagerController@managerCars')->name('managerShowCars');
Route::get('/yourCar/{id}','UserController@yourCar')->name('getYourCar');
Route::post('/yourCar/{id}','UserController@yourCar')->name('yourCar');

Route::get('/car/buy/{id}', 'CarController@buy')->name('car.buyCar');
Route::get('/car/bill/{id}', 'CarController@bill')->name('car.carBill');
Route::get('/showBill/{id}','CarController@showBill')->name('showBill');
//Route::resource('/client', 'ClientController')->middleware('isClient');

Route::get('/deploy','deployController@index');

//Route::get('/client', function () {
//    return view('client.profile');
//})->middleware('isClient');


//Route::get('/manager', function () {
//    return view('manager.profile');
//});

