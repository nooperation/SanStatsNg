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

Route::get('/agent', 'AgentController@index');
Route::get('/agent/{agent}', 'AgentController@show');

Route::get('/experience', 'ExperienceController@index');
Route::get('/experience/{experience}', 'ExperienceController@show');

Route::get('/experience_history', 'ExperienceHistoryController@index');

Route::get('/store_item', 'StoreItemController@index');

Route::get('/store_item_history', 'StoreItemHistoryController@index');

Route::get('/store_item_status', 'StoreItemStatusController@index');
