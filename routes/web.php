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
// menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no. 1
Route::get('/', function () {
    return view('contoh');
});

Route::get('/artikel', 'ArtikelController@index'); // menampilkan semua artikel

Route::get('/artikel/create', 'ArtikelController@create'); // menampilkan halaman form untuk membuat artikel baru

Route::post('/artikel', 'ArtikelController@store'); // menyimpan data artikel

Route::get('/artikel/{id}', 'ArtikelController@show'); // menampilkan detail artikel dengan id 

Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); // menampilkan form untuk edit item

Route::put('/artikel/{id}', 'ArtikelController@update'); // menyimpan perubahan dari form edit

Route::delete('/artikel/{id}', 'ArtikelController@destroy'); // menghapus data dengan id