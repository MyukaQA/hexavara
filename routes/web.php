<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/customer-data','DashboardController@get_data_customer')->name('data.customer');
Route::get('/dashboard','DashboardController@index')->name('admin.index');
Route::get('/dashboard/create','DashboardController@create')->name('admin.create');
Route::post('/dashboard/store','DashboardController@store')->name('admin.store');
Route::get('/dashboard/{id}/edit','DashboardController@edit')->name('admin.edit');
Route::post('/dashboard/{id}/update','DashboardController@update')->name('admin.update');
Route::get('/dashboard/{id}/delete','DashboardController@delete')->name('admin.delete');


Route::get('/history-data','HistoryController@get_data_history')->name('data.history');
Route::get('/history','HistoryController@index')->name('history.index');
Route::get('/history/create','HistoryController@create')->name('history.create');
Route::post('/history/store','HistoryController@store')->name('history.store');
Route::get('/history/{id}/edit','HistoryController@edit')->name('history.edit');
Route::post('/history/{id}/update','HistoryController@update')->name('history.update');
