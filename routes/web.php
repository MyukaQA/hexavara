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


Route::get('/history','DashboardController@history_index')->name('history.index');
