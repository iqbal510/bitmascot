<?php
use RealRashid\SweetAlert\Facades\Alert;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Own workin 

Route::get('admin','OwnController@admin')->name('admin');
Route::get('userp','OwnController@userpp')->name('userp');
Route::get('changepassword','OwnController@changep')->name('changepassword');
Route::post('passwordupdate','OwnController@passwordupdate');
