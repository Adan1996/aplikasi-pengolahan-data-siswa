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

Route::get('/', 'HomepageController@index');
Route::get('about', 'AboutController@index');

// route halaman siswa
Route::get('siswa', 'SiswaController@index');
Route::get('siswa/{siswa}', 'SiswaController@show');
Route::get('siswa/create', 'SiswaController@create');
Route::post('siswa', 'SiswaController@store');
