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

// Route::get('/home', 'HomeController@index');

Route::get('/admin', function () {
	return view('dashboard');
})->middleware('auth');

Route::group(['prefix' => 'api/'], function(){
	Route::resource('customer', 'CustomerController');
	Route::resource('invoice', 'InvoiceController');
	//Route::resource('item', 'InvoiceItemController');    
});

// Route::get('/', 'PageController@getCustomer');
Route::get('/', 'PageController@getInvoice');

