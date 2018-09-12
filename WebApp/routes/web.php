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

Route::get('/', 'Navigator@getLogin');

Route::get('/home', 'Navigator@getHome');

Route::get('/devices', 'Navigator@getDevices');

Route::get('/data', 'Navigator@getData');

Route::post('/login/submit', 'LoginController@val');
