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
Route::get('/blog','BlogController@index')->name('portfolio.blog.index');
Route::get('/blog-details','BlogController@show')->name('portfolio.blog.details');
Route::get('/about','AboutController@index')->name('portfolio.about.index');
Route::get('/contact','ContactController@index')->name('portfolio.contact.index');
Route::get('/projects','ProjectsController@index')->name('portfolio.project.index');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
