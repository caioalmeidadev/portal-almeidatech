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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'as' => 'admin.',
    'prefix'=>'admin',
    'middleware' => 'auth'],function(){
        Route::group([
            'as' => 'clients.','prefix' => 'clients'], function () {
            Route::get('/','ClientController@index')->name('index');
            Route::get('/show/{id}','ClientController@show')->name('show');
            Route::get('/create','ClientController@create')->name('create');
            Route::get('/edit/{id}','ClientController@edit')->name('edit');
            Route::post('/store','ClientController@store')->name('store');
            Route::get('/listClients','ClientController@listClients')->name('listClients');
        });

        Route::group(['as' => 'tickets.', 'prefix' => 'tickets'], function(){
            Route::get('/','TicketController@index')->name('index');
            Route::get('/create','TicketController@create')->name('create');
            Route::get('/edit/{id}','TicketController@edit')->name('edit');
            Route::get('/show/{id}','TicketController@show')->name('show');
            Route::post('/store','TicketController@store')->name('store');
            Route::get('getTickets','TicketController@getTickets')->name('getTickets');
        });
});
