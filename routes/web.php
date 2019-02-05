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

Route::get('/', function ()
{
    return view('welcome');
});

Auth::routes();

Route::get('/home', function ()
{
    if (auth()->user()->role == "admin")
    {
        return redirect()->route('adminHome');
    } else
    {
        return redirect()->route('userHome');
    }
})->name('home');


Route::get('/userHome', 'HomeController@index')->name('userHome');
Route::get('/adminHome', 'AdminController@index')->name('adminHome');



Route::get('/addmobile', 'AdminController@addmobile')->name('addmobile');
Route::post('/addmobilePost', 'AdminController@addmobilePost')->name('addmobilePost');

Route::get('/sellmobile', 'mobileController@sellmobile')->name('sellmobile');
Route::post('/sellmobilePost', 'mobileController@sellmobilePost')->name('sellmobilePost');
