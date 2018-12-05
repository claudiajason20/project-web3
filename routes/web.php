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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/welcome', 'HomeController@welcome');
Route::get('/office','HomeController@office');
Route::get('/place', 'PlaceController@view');
Route::get('/place/{id}', 'PlaceController@detail');
Route::get('/city', 'CityController@view');
Route::get('/city/{id}', 'CityController@detail');
Route::post('/city/edit/{id}', 'CityController@edit')->name('name');
Route::get('/city/edit/{id}', 'CityController@edit');


