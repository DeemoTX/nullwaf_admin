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

Route::get('/waf_logs', 'LogsController@index')->name('waf_logs');

Route::get('/waf_config', 'ConfigsController@index')->name('waf_config');

Route::get('/waf_rules', 'RulesController@index')->name('waf_rules');

Route::get('/waf_white', 'WhiteListsController@index')->name('waf_white');

Route::get('/forecast', 'ForecastsController@index')->name('forecast');

Route::get('/blockchain', 'BlockChainsController@config')->name('blockchain');