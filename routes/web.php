<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something 127great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route Laptop
Route::get('/laptop','LaptopController@index');
Route::post('/laptop/create','LaptopController@create');
Route::get('laptop/{id}/edit','LaptopController@edit'); 
Route::post('laptop/{id}/update','LaptopController@update'); 
Route::get('/laptop/{id}/delete','LaptopController@delete');
Route::get('/laptop/tambah','LaptopController@tambah');
