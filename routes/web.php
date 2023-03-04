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

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

// jurusan
Route::get('/jurusan', 'jurusancontroller@index')->name('daftarJurusan');
//
Route::get('/jurusan/create', 'jurusancontroller@create')->name('createjurusan');
//
Route::post('/jurusan/create', 'jurusancontroller@store')->name('storejurusan');

// route untuk menampilkan view edit jurusan
Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit')->name('editjurusan');
// route untuk menyimpan perubahan jurusan, perhatikan bahwa fungsi routenya adalah post
Route::post('/jurusan/{jurusan}/edit', 'JurusanController@update')->name('updateJurusan');
// route untuk menyimpan perubahan jurusan, perhatikan bahwa fungsi routenya adalah post
Route::get('/jurusan/{jurusan}/delete', 'jurusancontroller@destroy')->name('deleteJurusan');
//
Route::get('/mapel', 'MataPelajaranController@index')->name('daftarMapel');
Route::get('/mapel/create', 'MataPelajaranController@create')->name('createMapel');
Route::post('/mapel/create', 'MataPelajaranController@store')->name('storeMapel');
Route::get('/mapel/{mapel}/edit', 'MataPelajaranController@edit')->name('editMapel');
Route::post('/mapel/{mapel}/edit', 'MataPelajaranController@update')->name('updateMapel');
Route::get('/mapel/{mapel}/delete', 'MataPelajaranController@destroy')->name('deleteMapel');