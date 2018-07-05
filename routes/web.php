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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('custom-login', 'LOGINController@showLoginForm')->name('custom.login');
Route::post('custom-attempt', 'LOGINController@attempt')->name('custom.attempt');

Route::post('/store', 'SALESController@store');
Route::post('/add_tp','SALESController@add_tender_process');
Route::get('/salesAddLead', 'SALESController@store');

Route::get('/','DASHBOARDController@index');

Route::get('/sales','SALESController@index');
Route::get('/detail_sales/{lead_id}','SALESController@detail_sales');

Route::get('/presales','PRESALESController@index');
Route::get('/detail_presales/{lead_id}','PRESALESController@detail_presales');
Route::get('/presales_manager','PRESALES_MANAGERController@index');

Route::get('/sho','SHOController@index');
Route::get('/detail_sho','SHOController@detail_sho');

Route::get('/hu_rec','HRController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
