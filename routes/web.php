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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::put('register', [
//   'as' => 'register', 
//   'uses' => 'Auth\RegisterController@create'
// ]);

// Route::get('/', 'AdminController@index');
Route::get('/', 'HomeController@index');
Route::get('/detail', 'HomeController@detail');
Route::get('/destination', 'HomeController@destination');
Route::get('/checkout', 'HomeController@checkout');
 
Route::get('/profile/{id}', 'ProfileController@show');
Route::put('/profile/{id}/update', 'ProfileController@update');
Route::get('/order', 'ProfileController@showOrder');
Route::get('/invoice', 'ProfileController@showInvoice');


Route::group(['prefix' => 'adm', 'middleware' => ['is_admin']], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/setting', 'AdminController@setting');

    Route::get('/user', 'UserController@index');
    Route::get('/user/store', 'UserController@store');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::get('/user/update/{id}', 'UserController@update');
    Route::get('/user/delete/{id}', 'UserController@destroy');

    Route::get('/tour', 'AdminController@tour');
    Route::get('/tour/create', 'TourController@create');
    Route::post('/tour/store', 'TourController@store');
    Route::get('/tour/show/{id}', 'TourController@show');
    Route::get('/tour/edit/{id}', 'TourController@edit');
    Route::put('/tour/update/{id}', 'TourController@update');
    Route::get('/tour/delete/{id}', 'TourController@destroy');

    Route::get('/order', 'AdminController@order');
    Route::get('/ordercompleted', 'AdminController@ordercompleted');
    Route::get('/salehistory', 'AdminController@salehistory');

});
// Route::get('/adm', 'AdminController@index')    
//     ->middleware('is_admin')    
//     ->name('admin');
// Route::get('/adm/', 'AdminController@index');

 


