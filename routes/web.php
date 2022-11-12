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

<<<<<<< HEAD
Route::get('/defi', function () {
    return view('defi');
});
=======
Route::get('/nazraas', function () {
    return view('nazraas');

route::get('/falleryan', function () {
    return view('ryan');
});
>>>>>>> refs/remotes/origin/main
