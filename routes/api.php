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
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listClients','ClientController@listClients')->name('listClients')->middleware('auth');

Route::get('getClients','ClientController@getClient')->name('getClients')->middleware('auth');

Route::get('getTickets','TicketController@getTickets')->name('getTickets')->middleware('auth');
