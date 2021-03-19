<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kelola_user', 'KelolauserController@index');
Route::post('/kelola_user/input', 'KelolauserController@store');
Route::post('/kelola_user/update', 'KelolauserController@update');
Route::get('/kelola_user/hapus/{id}', 'KelolauserController@destroy');
Route::get('/getdatapengguna/{id}', 'KelolauserController@getdatapengguna')->name('get.data.pengguna');
Route::get('/kelola_gapoktani', 'GapoktaniController@index');
Route::post('/kelola_gapoktani/input', 'GapoktaniController@store');
Route::post('/kelola_gapoktani/update', 'GapoktaniController@update');
Route::get('/getdatagapoktani/{id}', 'GapoktaniController@getdatagapoktani')->name('get.data.pengguna');
Route::get('/kelola_gapoktani/hapus/{id}', 'GapoktaniController@destroy');
