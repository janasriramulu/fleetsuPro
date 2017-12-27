<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| Route::get('devices/{timeZone?}',['uses' => 'DeviceApiController@index']);
*/


Route::get('devices/{timeZone?}','DeviceApiController@index');
Route::post('devices','DeviceApiController@store');
Route::put('devices/{id?}','DeviceApiController@update');


