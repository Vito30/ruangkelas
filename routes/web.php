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


Route::get('/',function(){
    return view('/auths/login');
    
});
Route::get('/registration', 'RegistrationController@create');
Route::post('registration', 'RegistrationController@store');

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');



//kelas
Route::group(['middleware'=>'auth'],function(){
Route::get('user','UserController@index');
Route::get('user/json','UserController@json');
Route::get('/dashboard','DashboardController@index');
Route::get('/ruang','RuangController@index');
Route::get('/kelas','KelasController@index');
Route::get('/room','RoomsController@index');
Route::get('/room/{rooms}','RoomsController@show');
Route::get('/kelas/create','KelasController@create');
Route::get('/kelas/{kelas}','KelasController@show');
Route::post('/kelas','KelasController@store');
Route::delete('kelas/{kelas}','KelasController@destroy');
Route::get('/kelas/{kelas}/edit','KelasController@edit');
Route::patch('/kelas/{kelas}','KelasController@update');
});