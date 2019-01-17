<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
return $request->user();
});*/

Route::get('companies', 'companyController@index');
Route::get('company/{id}', 'companyController@show');
Route::post('company', 'companyController@store');
Route::put('company/{id}', 'companyController@update');
Route::delete('company/{id}', 'companyController@delete');

Route::get('contacts', 'contactController@index');
Route::get('contact/{id}', 'contactController@show');
Route::post('contact', 'contactController@store');
Route::put('contact/{id}', 'contactController@update');
Route::delete('contact/{id}', 'contactController@delete');
