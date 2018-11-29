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
Route::get('/tour/{id}', 'HomeController@tour');
Route::get('/booking/{id}', 'HomeController@booking');
Route::get('/checkout/{id}', ['as' => 'checkout', 'uses' => 'HomeController@checkout']);
Route::get('/destination', 'HomeController@destination');
Route::post('/createinvoice/{id}', 'HomeController@createInvoice');
Route::get('/invoice/{id}', ['as' => 'invoice', 'uses' => 'HomeController@showInvoice']);

 
Route::get('/profile/{id}', 'ProfileController@show');
Route::put('/profile/{id}/update', 'ProfileController@update');
Route::get('/order', 'ProfileController@showOrder');
Route::post('/order/upload/{id}', 'ProfileController@uploadOrder');
// Route::get('/invoice', 'ProfileController@showInvoice');


Route::group(['prefix' => 'adm', 'middleware' => ['is_admin']], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/setting', 'AdminController@setting');

    Route::get('/user', 'UserController@index');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::get('/user/update/{id}', 'UserController@update');
    Route::get('/user/delete/{id}', 'UserController@destroy');

    Route::get('/tour', 'TourController@index');
    Route::get('/tour/create', 'TourController@create');
    Route::post('/tour/store', 'TourController@store');
    Route::get('/tour/show/{id}', 'TourController@show');
    Route::get('/tour/edit/{id}', 'TourController@edit');
    Route::post('/tour/update/{id}', 'TourController@update');
    Route::get('/tour/delete/{id}', 'TourController@destroy');

    Route::post('/destination/store', 'TourController@destinationStore');
    Route::post('/tour-category/store', 'TourController@categoryStore');


    Route::get('/order', 'OrderController@index');
    Route::get('/ordercompleted', 'AdminController@ordercompleted');
    Route::get('/salehistory', 'AdminController@salehistory');

});
// Route::get('/adm', 'AdminController@index')    
//     ->middleware('is_admin')    
//     ->name('admin');
// Route::get('/adm/', 'AdminController@index');

 


