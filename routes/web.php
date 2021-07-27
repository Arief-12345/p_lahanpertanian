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
    return view('landing_page.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'checkRole:Admin']], function () {
    Route::get('/kelola_pegawai', 'KelolapegawaiController@index');
    Route::post('/kelola_pegawai/input', 'KelolapegawaiController@store');
    Route::post('/kelola_pegawai/update', 'KelolapegawaiController@update');
    Route::get('/kelola_pegawai/hapus/{id}', 'KelolapegawaiController@destroy');
    Route::get('/getdatapegawai/{id}', 'KelolapegawaiController@getdatapegawai')->name('get.data.pengguna');

    Route::get('/kelola_kepalakantor', 'KelolakepalakantorController@index');
    Route::post('/kelola_kepalakantor/input', 'KelolakepalakantorController@store');
    Route::post('/kelola_kepalakantor/update', 'KelolakepalakantorController@update');
    Route::get('/kelola_kepalakantor/hapus/{id}', 'KelolakepalakantorController@destroy');
    Route::get('/getdatakepalakantor/{id}', 'KelolakepalakantorController@getdatakepalakantor')->name('get.data.pengguna');
   
    Route::get('/kelola_gapoktani', 'GapoktaniController@index');
    Route::post('/kelola_gapoktani/input', 'GapoktaniController@store');
    Route::post('/kelola_gapoktani/update', 'GapoktaniController@update');
    Route::get('/getdatagapoktani/{id}', 'GapoktaniController@getdatagapoktani')->name('get.data.gapoktani');
    Route::get('/kelola_gapoktani/hapus/{id}', 'GapoktaniController@destroy');
    
    Route::get('/kelola_produksi', 'ProduksiController@index');
    Route::post('/kelola_produksi/input', 'ProduksiController@store');
    Route::post('/kelola_produksi/update', 'ProduksiController@update');
    Route::get('/getdataproduksi/{id}', 'ProduksiController@getdataproduksi')->name('get.data.produksi');
    Route::get('/kelola_produksi/hapus/{id}', 'ProduksiController@destroy');
   
    Route::get('/kelola_data_potensi_lahan_pertanian', 'PotensilahanpertanianController@index');
    Route::post('/kelola_data_potensi_lahan_pertanian/input', 'PotensilahanpertanianController@store');
    Route::post('/kelola_data_potensi_lahan_pertanian/update', 'PotensilahanpertanianController@update');
    Route::get('/getdatapotensi/{id}', 'PotensilahanpertanianController@getdatapotensi')->name('get.data.potensi');
    Route::get('/kelola_data_potensi_lahan_pertanian/hapus/{id}', 'PotensilahanpertanianController@destroy');
    
    Route::get('/kelola_data_komoditi_hasil_panen', 'KomoditihasilpanenController@index');
    Route::post('/kelola_data_komoditi_hasil_panen/input', 'KomoditihasilpanenController@store');
    Route::post('/kelola_data_komoditi_hasil_panen/update', 'KomoditihasilpanenController@update');
    Route::get('/getdatakomoditi/{id}', 'KomoditihasilpanenController@getdatakomoditi')->name('get.data.komoditi');
    Route::get('/kelola_data_komoditi_hasil_panen/hapus/{id}', 'KomoditihasilpanenController@destroy');

    Route::get('/kelola_pemetaan', 'KecamatanController@index');
});

Route::group(['middleware' => ['auth', 'checkRole:Pegawai Kantor']], function () {

});




Route::get('/kelola_data_pemetaan', 'KecamatanController@index');