<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home.index');
});
Route::resource('login', 'LoginController@index');
Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::resource("home", "HomeController");
Route::resource("pasien/create", "PasienController@create");
Route::get("pasien/edit/{no_pasien}", "PasienController@edit");
Route::get("pasien/destroy/{no_pasien}", "PasienController@destroy");
Route::post('pasien/update/{no_pasien}', array('as' => 'pasien.update', 'uses' => 'PasienController@update'));
Route::resource("pasien/listpasien", "PasienController@index");
Route::post("pasien/post", "PasienController@store");
	
Route::resource("about", "AboutController");
Route::resource("help", "HelpController");

Route::resource("beranda", "BerandaController@index");
Route::resource("login/post", "LoginController@store");

Route::resource("dokter", "DokterController@index");
Route::resource("dokter/create", "DokterController@create");
Route::get("dokter/destroy/{kd_dokter}", "DokterController@destroy");
Route::resource("dokter/post", "DokterController@store");

Route::resource("kunjungan", "KunjunganController@index");
Route::resource("kunjungan/create", "KunjunganController@create");
Route::get("kunjungan/destroy/{kd_pasien}", "KunjunganController@destroy");
Route::resource("kunjungan/post", "KunjunganController@store");

Route::resource("obat", "ObatController@index");
Route::resource("obat/create", "ObatController@create");
Route::get("obat/destroy/{kd_pasien}", "ObatController@destroy");
Route::resource("obat/post", "ObatController@store");

Route::resource("tindakan", "TindakanController@index");
Route::resource("tindakan/create", "TindakanController@create");
Route::get("tindakan/destroy/{kd_tindakan}", "TindakanController@destroy");
Route::resource("tindakan/post", "TindakanController@store");

Route::resource("laboratorium", "LaboratoriumController@index");
Route::resource("laboratorium/create", "LaboratoriumController@create");
Route::post("laboratorium/post", "LaboratoriumController@store");
Route::get("laboratorium/destroy/{kd_lab}", "LaboratoriumController@destroy");

Route::resource("medis", "RekammedisController@index");
Route::resource("medis/create", "RekammedisController@create");
Route::resource("medis/post", "RekammedisController@store");
Route::get("medis/destroy/{no_pasien}", "RekammedisController@destroy");







