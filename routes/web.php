<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/body', function () {
    return view('index/index');
});
Route::get('/', 'InputController@input')->name('input');
Route::post('/tambahdata', 'InputController@tambah')->name('tambahdata');
Route::get('/webinar', 'HomeController@index')->name('home');



Auth::routes();
Route::get('/home', 'WebinarController@index')->name('CategoryWebinar');
Route::get('/add', 'WebinarController@add')->name('addWebinar');
Route::post('/prosesadd', 'WebinarController@prosesadd')->name('prosesadd');
Route::get('/hapus/{id}', 'WebinarController@destroy')->name('deletewebinar');
Route::get('/edit/{id}', 'WebinarController@edit')->name('editwebinar');
Route::put('/update/{id}', 'WebinarController@update')->name('updatewebinar');
