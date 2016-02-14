<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'auth']], function () {
	Route::resource('surat', 'surat\\suratController');
	Route::resource('tor', 'tor\\torController');
	Route::resource('panduan', 'panduan\\panduanController');
	Route::resource('diklatta', 'diklatta\\diklattaController');
	Route::resource('kurikulumta', 'kurikulumtaController');
	Route::resource('kurikulumta', 'kurikulum\\kurikulumtaController');
	Route::resource('jadwalta', 'jadwal\\jadwaltaController');
	Route::resource('peserta', 'peserta\\pesertaController');
	Route::resource('bahan', 'bahan\\bahanController');
	Route::resource('pengajar', 'pengajar\\pengajarController');
	Route::resource('diklattt', 'diklattt\\diklatttController');
	Route::resource('surattt', 'surattt\\suratttController');
	Route::resource('tortt', 'tortt\\torttController');
	Route::resource('panduantt', 'panduantt\\panduanttController');
	Route::resource('kurikulumtt', 'kurikulumtt_id\\kurikulumttController');
	Route::resource('jadwaltt', 'jadwaltt\\jadwalttController');
	Route::resource('pengajartt', 'pengajartt\\pengajarttController');
	Route::resource('sertifikat', 'sertifikat\\sertifikatController');
	Route::resource('asrama', 'asrama\\asramaController');
	Route::resource('kamar', 'kamar\\kamarController');
	Route::resource('ruang', 'ruang\\ruangController');
	Route::resource('kondisikm', 'kondisikm\\kondisikmController');
	Route::resource('kondisiruang', 'kondisiruang\\kondisiruangController');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('bahantt', 'bahantt\\bahanttController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('pesertatt', 'pesertatt\\pesertattController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('sertifikattt', 'sertifikattt\\sertifikatttController');
});
