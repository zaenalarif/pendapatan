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

Route::get('/', "HitungController@index");

Route::get('/hitung',                   "HitungController@index");
Route::get('/hitung/create',            "HitungController@create");
Route::post('/hitung/create',           "HitungController@store");
Route::get('/hitung/{id}',              "HitungController@show");
Route::get('/hitung/cetak/{id}',      "HitungController@cetak");

// api
Route::get('/api2/pegawai/{id}',"ApiController@pegawai");
