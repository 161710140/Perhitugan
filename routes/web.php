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
    return view('welcome');
});
Route::get('array', function () {
    return view('array');
});
Route::get('each', function () {
    return view('Each');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
