<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('aa', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('SelamatDatang', 'SelamatDatangController@index');

Route::get('/', 'masterjfkController@index');

Route::get('homejfk', 'homejfkController@index');

Route::get('menupendaftaran', 'menupendaftaranController@index');

Route::get('creatependaftaran', 'menupendaftaranController@create');



/*profil*/

Route::get('sejarah', 'sejarahController@index');
Route::get('visimisi', 'visimisiController@index');
Route::get('strukturorganisasi', 'strukturorganisasiController@index');
Route::get('fasilitas', 'fasilitasController@index');
Route::get('profilguru', 'profilguruController@index');

/*Akademik*/

Route::get('kalenderpendidikan', 'kalenderpendidikanController@index');
Route::get('kurikulum', 'kurikulumController@index');

/*Kesiswaan*/

Route::get('programkesiswaan', 'programkesiswaanController@index');
Route::get('prestasisiswa', 'prestasisiswaController@index');
Route::get('ekstrakurikuler', 'ekstrakurikulerController@index');
Route::get('liputanmedia', 'liputanmediaController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
