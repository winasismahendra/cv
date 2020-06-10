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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tes', function () {
    return view('layout.master');
});
Route::get('/', 'MasterController@index')->name('rumah');
Route::get('/kontak', 'MasterController@kontak')->name('kontak');
Route::get('/toko', 'MasterController@toko')->name('toko');
Route::get('/toko/{id}', 'MasterController@tokodet')->name('tokodet');
Route::get('/masuk', 'MasterController@login')->name('user');
Route::get('/cart', 'MasterController@cart')->name('cart');
Route::get('/cek-out', 'MasterController@cek_out')->name('cek_out');
Route::get('/tentang', 'MasterController@tentang')->name('tentang');
Route::get('/daftar', 'MasterController@daftar')->name('daftar');
Route::get('/gallery', 'MasterController@gallery')->name('gallery');
Route::get('/gallery/{judul}', 'MasterController@gallery2')->name('gallery2');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/katalog', 'AdminController@katalog')->name('katalog');
Route::get('/katalog/{id}', 'AdminController@katalogdet')->name('katalog_det');
Route::get('/data-katalog', 'AdminController@katalogdata')->name('katalog_data');
Route::post('/katalog/{id}/proses','AdminController@katalog_edit')->name('katalog_edit');
Route::post('/katalog-up', 'AdminController@katalog_up')->name('katalog_up');
Route::get('/hapus-foto/{id}','AdminController@hapus_foto')->name('hapus_foto');

Route::get('/adm-gallery', 'AdminController@gallery')->name('galleryadmin');
Route::get('/adm-gallery/{id}', 'AdminController@gallerydet')->name('galleryadmindet');
Route::get('/adm-gallery-data', 'AdminController@gallerydata')->name('gallerydata');
Route::post('/gallery-up','AdminController@gallery_up')->name('gallery_up');
Route::post('/gallery-edit/{id}','AdminController@gallery_edit')->name('gallery_edit');
Route::get('/hapus-gallery/{id}','AdminController@hapus_gallery')->name('hapus_gallery');
Route::get('/adm-status', 'AdminController@history')->name('history');
Route::get('/adm-status-det', 'AdminController@history_det')->name('history-det');



Route::get('/dashboard', 'AdminController@index')->name('landing');
