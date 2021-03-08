<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"admin"], function() {
    Route::group(["prefix"=>"auth"], function() {
        Route::get("login","App\Http\Controllers\Backend\AuthController@getLogin");
        Route::post("login","App\Http\Controllers\Backend\AuthController@postLogin");
    });

    Route::group(["middleware"=>[\App\Http\Middleware\AdminMiddleware::class]], function() {
        Route::get("/dashboard", "App\Http\Controllers\Backend\DashboardController@getIndex");
        Route::get("/logout", "App\Http\Controllers\Backend\AuthController@getLogout")->name('logout');
    });
});


Route::get('/register','App\Http\Controllers\Backend\DashboardController@getRegister');

Route::get('/customer','App\Http\Controllers\CustomerController@customer')->name('customer');

