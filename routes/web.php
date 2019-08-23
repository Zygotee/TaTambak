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
//Front End
Route::get('/', 'FrontendController@index')->name('landingpage.read');
Route::get('/about', 'FrontendController@about')->name('landingpage.about');
//Back End
Auth::routes();
Route::get('/login', 'DashboardController@login')->name('login.read');
Route::post('/login','DashboardController@loginproses')->name('proses.login');
route::get('/admin/logout','DashboardController@logout')->name('proses.logout');
//admininstrator
Route::get('/admin', 'DashboardController@index')->name('home.admin');
//monitoring data tabel
Route::get('monitoring/datatabel/air', 'DashboardController@tabelAir')->name('monitoring.tabel.air');
Route::get('monitoring/datatabel/airr', 'DashboardController@tabelAirr')->name('monitoring.tabel.airr');
Route::get('monitoring/datatabel/suhu', 'DashboardController@tabelSuhu')->name('monitoring.tabel.suhu');
Route::get('monitoring/datatabel/ph', 'DashboardController@tabelPh')->name('monitoring.tabel.ph');
Route::get('monitoring/datatabel/jsonph', 'DashboardController@jsonPh')->name('monitoring.tabel.jsonph');
Route::get('monitoring/datatabel/jsonsuhu', 'DashboardController@jsonsuhu')->name('monitoring.tabel.jsonsuhu');
//monitoring grafik
Route::get('monitoring/grafik/air', 'DashboardController@grafikAir')->name('monitoring.grafik.air');
Route::get('monitoring/grafik/suhu', 'DashboardController@grafikSuhu')->name('monitoring.grafik.suhu');
Route::get('monitoring/grafik/ph', 'DashboardController@grafikPh')->name('monitoring.grafik.ph');
// control aktuator
Route::post('update-control', 'DashboardController@Control')->name('update-status');
Route::post('update-mqtt','DashboardController@SendMsgViaMqtt')->name('update-mqtt');
