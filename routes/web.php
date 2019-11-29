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
    // ini adalah variabel halaman yang akan dikondisikan ketika halaman diklik
    $halaman = 'homepage';
    return view('homepage.index', compact('halaman'));
});

Route::get('/about', function () {
    // ini adalah variabel halaman yang akan dikondisikan ketika halaman diklik
    $halaman = 'about';
    return view('about.index', compact('halaman'));
});

Route::get('/siswa', function () {
    $siswa = [
        'Rasmus Lerdof',
        'Taylor Otwell',
        'Brendan Eich',
        'John Resig'
    ];
    // ini adalah variabel halaman yang akan dikondisikan ketika halaman diklik
    $halaman = 'siswa';
    return view('siswa.index', compact('halaman', 'siswa'));
});
