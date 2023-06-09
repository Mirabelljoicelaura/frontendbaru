<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/potensi', function () {
    return view('potensi');
});

Route::get('/galeri', function () {
    return view('galeri');
});
