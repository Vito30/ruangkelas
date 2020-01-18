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


Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

Route::get('/ruang','RuangController@index');

//kelas
Route::get('/kelas','KelasController@index');
Route::get('/kelas/create','KelasController@create');
Route::get('/kelas/{kelas}','KelasController@show');
Route::post('/kelas','KelasController@store');
Route::delete('kelas/{kelas}','KelasController@destroy');
Route::get('/kelas/{kelas}/edit','KelasController@edit');
Route::patch('/kelas/{kelas}','KelasController@update');