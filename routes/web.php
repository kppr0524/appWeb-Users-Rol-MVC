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

//login routes
Route::view('login', 'login');
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::view('admin', 'admin');
