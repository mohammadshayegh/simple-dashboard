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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addmobile','mobileController@addmobile')->name('addmobile');
Route::post('/addmobilePost','mobileController@addmobilePost')->name('addmobilePost');

Route::get('/sellmobile','mobileController@sellmobile')->name('sellmobile');
Route::post('/sellmobilePost','mobileController@sellmobilePost')->name('sellmobilePost');
