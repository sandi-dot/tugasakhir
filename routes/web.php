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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('RegisterTiket','RegisterTiketOnlineController');
Route::post('logout_now','HomeController@logout');
Route::resource('jadwal_keberangkatan','jadwalkeberangkatancontroller');
Route::get('/homeadmin', 'TampilanAdminController@admin');
route::get('Histori','jadwalkeberangkatancontroller@history');
Route::resource('tambahdatapenumpang','datapenumpangcontroller');
Route::resource('tambahbiaya','tambahbiayacontroller');
Route::get('tabelbiayaperjalanan','tambahbiayacontroller@tablebiaya');
Route::get('tampildatapemesanan','jadwalkeberangkatancontroller@datapemesanan');
Route::get('pembayaran','jadwalkeberangkatancontroller@Pembayaran');
Route::get('kode_pembayaran','jadwalkeberangkatancontroller@Kode_pembayaran');
Route::get('laporan','jadwalkeberangkatancontroller@laporan');
Route::post('laporan_filter','jadwalkeberangkatancontroller@laporan_filter');
