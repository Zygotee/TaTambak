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
//bagian admin
// Route::get('/', function () {
//     return view('layouts/tamu/landing');
// });



Auth::routes();



//admin
Route::get('/', 'Landing@masuklanding')->name('masuk.landing');
Route::get('/login', 'Dashboard@login');
Route::post('/login','Dashboard@loginproses')->name('proses.login');
Route::group(['middleware'=>'sesi','prefix'=>'admin'], function(){
    Route::get('/', 'Dashboard@index')->name('home.admin');
    Route::get('/report', 'Report@index')->name('report.admin');
    Route::get('/controlling', 'Controlling@index')->name('controlling.admin');
//monitoring data tabel
    Route::get('monitoring/datatabel/air', 'Dashboard@tabelAir')->name('monitoring.tabel.air');
    Route::get('monitoring/datatabel/airr', 'Dashboard@tabelAirr')->name('monitoring.tabel.airr');
    Route::get('monitoring/datatabel/suhu', 'Dashboard@tabelSuhu')->name('monitoring.tabel.suhu');
    Route::get('monitoring/datatabel/ph', 'Dashboard@tabelPh')->name('monitoring.tabel.ph');
    Route::get('monitoring/datatabel/jsonph', 'Dashboard@jsonPh')->name('monitoring.tabel.jsonph');
    Route::get('monitoring/datatabel/jsonsuhu', 'Dashboard@jsonsuhu')->name('monitoring.tabel.jsonsuhu');
//monitoring grafik
    Route::get('monitoring/grafik/air', 'Dashboard@grafikAir')->name('monitoring.grafik.air');
    Route::get('monitoring/grafik/suhu', 'Dashboard@grafikSuhu')->name('monitoring.grafik.suhu');
    Route::get('monitoring/grafik/ph', 'Dashboard@grafikPh')->name('monitoring.grafik.ph');
// control aktuator
    Route::post('update-control', 'Dashboard@Control')->name('update-status');
    Route::post('update-mqtt','Dashboard@SendMsgViaMqtt')->name('update-mqtt');

});
    


route::get('/admin/logout','Dashboard@logout')->name('proses.logout');

//tamu

Route::get('/tentang', 'Landing@tentang')->name('tentang.pembuat');
Route::get('/login/logintamu', 'DashboardTamu@logintamu')->name('tamu.login');
Route::get('/tamu', 'DashboardTamu@index')->name('home.tamu'); 
Route::get('/report-tamu', 'ReportTamu@index')->name('report.tamu');

