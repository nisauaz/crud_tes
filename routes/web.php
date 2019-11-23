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

Route::get('/book','BookController@index');
Route::get('/add_book','BookController@create');
Route::post('/add_book/store','BookController@store');
Route::get('/book/edit/{id}', 'BookController@edit');
Route::put('/book/update/{id}', 'BookController@update');
Route::get('/book/delete/{id}', 'BookController@delete');

