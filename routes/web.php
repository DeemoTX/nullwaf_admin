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

Route::post('/waf_log','LogsController@store');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/console', 'HomeController@console')->name('console');

Route::get('/waf_logs', 'LogsController@index')->name('logs');
