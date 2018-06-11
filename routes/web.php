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

Route::get('/','salesController@index');
Route::get('/sales','salesController@sales');
Route::get('/presales','salesController@presales');
Route::get('/detail_sales','salesController@detail_sales');
Route::get('/detail_presales','salesController@detail_presales');
Route::get('/sho','salesController@sho');
Route::get('/detail_sho','salesController@detail_sho');
Route::get('/login', 'salesController@login');
Route::get('/register', 'salesController@register');
Route::get('/hu_rec','salesController@hr');
