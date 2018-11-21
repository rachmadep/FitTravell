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


// Route::get('/adm', 'AdminController@index');
Route::get('/adm', 'AdminController@index')    
    ->middleware('is_admin')    
    ->name('admin');
 


