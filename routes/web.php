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

Route::get('/', 'IndexController@index');

Route::get('/welcome', 'IndexController@welcome');

Route::get('/office','IndexController@office');

Route::get('/place', 'PlaceController@view');

Route::get('/place/{id}', 'PlaceController@detail');

Route::get('/city', 'CityController@view');

Route::get('/city/{id}', 'CityController@detail');