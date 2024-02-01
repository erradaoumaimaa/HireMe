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
    return view('welcome');
});

Route::get('/','HomeController@index')->name('service');
Route::get('/service/{slug}','HomeController@show')->name('service.show');
Route::get('/create/service','HomeController@create')->name('service.create');
Route::post('/add/service','HomeController@store')->name('service.store');