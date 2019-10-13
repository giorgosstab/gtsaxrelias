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

Route::get('/','HomeController@index')->name('portfolio.home.index');
Route::get('/services','ServicesController@index')->name('portfolio.services.index');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
