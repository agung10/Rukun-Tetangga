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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function(){
    return redirect()->route("adminHome");
})->name('home');

Route::group(["prefix" => "app", "middleware" => "auth.admin"], function(){
    Route::get('/home', 'HomeController@index')->name('adminHome');

    // Route::resource('users', 'AppController\UserController');
    Route::resource('administrators', 'AppController\AdministratorController');
    Route::resource('alamat_domisilis', 'AppController\AlamatDomisiliController');
    Route::resource('alamat_kks', 'AppController\AlamatKartuKeluargaController');
    Route::resource('data_diris', 'AppController\DataDiriController');
    Route::resource('status_kartu_keluargas', 'AppController\StatusKartuKeluargaController');
    Route::resource('status_keluargas', 'AppController\StatusKeluargaController');
    Route::resource('status_pernikahans', 'AppController\StatusPernikahanController');

    Route::get('/getDataKK/{id}', 'AppController\StatusKartuKeluargaController@getDataEdit');
    Route::get('/getDataKeluarga/{id}', 'AppController\StatusKeluargaController@getDataEdit');
    Route::get('/getDataPernikahan/{id}', 'AppController\StatusPernikahanController@getDataEdit');

    Route::get('/printDataDiri', 'AppController\DataDiriController@print')->name('printDataDiri');
    Route::get('/dataNoKK', 'AppController\DataDiriController@nomorKK')->name('nomorKK');
    Route::get('/printDataKK/{id}', 'AppController\DataDiriController@printDataKK')->name('printDataKK');
});


// route::post('registerUsers', 'Auth\RegisterController@registerUser')->name('registerUser');
