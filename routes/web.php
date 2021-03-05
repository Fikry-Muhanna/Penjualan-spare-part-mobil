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



//Route::get('/dashboard', function () {
//    return view('layout.layout');
//});



Route::get('/login','App\Http\Controllers\Backend\DashboardController@login')->name('login');


Route::get('/register','App\Http\Controllers\Backend\DashboardController@register');

Route::post('/postlogin','App\Http\Controllers\Backend\AuthController@postlogin')->name('postlogin');

Route::get('/customer','App\Http\Controllers\CustomerController@customer')->name('customer');

Route::group(['middleware'=>'CekLoginMiddleware'],function(){
    Route::get('/dashboard','App\Http\Controllers\Backend\DashboardController@index');
    Route::get('/logout','App\Http\Controllers\Backend\AuthController@logout')->name('logout');
    
});