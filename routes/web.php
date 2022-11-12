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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/naufal', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('naufal');
});

Route::get('/nazraas', function () {
    return view('nazraas');
});

route::get('/falleryan', function () {
    return view('ryan');
});
