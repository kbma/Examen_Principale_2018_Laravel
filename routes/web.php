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

Auth::routes();

Route::get('/home', 'ComputerController@mescomputers')->name('home');
Route::get('/computers', 'ComputerController@index')->name('computers');
Route::get('/edit/{id}', 'ComputerController@edit')->name('edit');
Route::post('/update/{id}', 'ComputerController@update')->name('update');
Route::get('/destroy/{id}', 'ComputerController@destroy')->name('destroy');
Route::get('/create', 'ComputerController@create')->name('create');
Route::post('/store', 'ComputerController@store')->name('store');
Route::get('/disponibles', 'ComputerController@disponibles')->name('disponibles');

Route::get('/reserver/{id}', 'ComputerController@reserver')->name('reserver');
Route::get('/liberer/{id}', 'ComputerController@liberer')->name('liberer');