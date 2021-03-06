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

//salescontroller
Route::post('/store', 'SalesController@store');
Route::post('/salesAddLead', 'SalesController@store');
Route::get('/sales','SalesController@index');
Route::get('/detail_sales/{lead_id}','SalesController@detail_sales');
Route::post('/update_tp/{lead_id}', 'SalesController@update_tp');

Route::post('/update_result', 'SalesController@update_result');

Route::get('/','DASHBOARDController@index');

Route::get('/project','SalesController@index')->middleware('SalesPresalesMiddleware', 'ManagerStaffMiddleware');
Route::get('/detail_project/{lead_id}','SalesController@detail_sales');

Route::get('/customer', 'SalesController@customer_index');
Route::post('customer/store', 'SalesController@customer_store');

Route::get('/show/{lead_id}','SalesController@show');

/*Route::get('/presales','SalesController@index')->middleware('TechnicalPresalesMiddleware', 'ManagerStaffMiddleware')*/;
Route::post('/update_sd/{lead_id}', 'SalesController@update_sd');
Route::post('/assign_to_presales','SalesController@assign_to_presales');
Route::post('/raise_to_tender', 'SalesController@raise_to_tender');
/*Route::get('/detail_presales/{lead_id}','PRESALESController@detail_presales');*/
/*
Route::get('/edit/{id_sd}', 'PRESALESController@edit');
Route::post('/update/{id_sd}', 'PRESALESController@update');*/

Route::get('/downloadPdflead', 'ReportController@downloadPdflead');
Route::get('/downloadPdfopen', 'ReportController@downloadPdfopen');
Route::get('/downloadPdfwin', 'ReportController@downloadPdfwin');
Route::get('/downloadPdflose', 'ReportController@downloadPdflose');

Route::get('/view_lead', 'ReportController@view_lead');
Route::get('/view_open', 'ReportController@view_open');
Route::get('/view_win', 'ReportController@view_win');
Route::get('/view_lose', 'ReportController@view_lose');

/*Route::get('/presales_manager','PRESALES_MANAGERController@index');
Route::post('/presales/store', 'PRESALES_MANAGERController@store');*/

Route::get('/client', 'ReportController@getDropdown');
Route::get('/sho','SHOController@index');
Route::get('/detail_sho','SHOController@detail_sho');

Route::get('/hu_rec','HRController@index')->middleware('HRMiddleware');
Route::post('/hu_rec/store', 'HRController@store');

Route::get('/getMountNow',function(){

	echo date("n");

});