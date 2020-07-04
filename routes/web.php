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
//     return view('master');});
Route::get('/','MasterController@welcome');
Route::get('/data_table','MasterController@data_table');
Route::get('/items/create','ItemController@create'); //menampilkan halaman
Route::post('/items', 'ItemController@store'); //menyimpan data
Route::get('/items','ItemController@index'); //menampilkan semua database
