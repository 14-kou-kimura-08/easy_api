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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tables/create', 'TableController@create')->name('tables.create');
Route::post('/tables', 'TableController@store')->name('tables.store');

Route::prefix('tables')->name('tables.')->group(function () {
    Route::get('/create', 'TableController@create')->name('create');
    Route::post('/', 'TableController@store')->name('store');
});
