<?php

use Illuminate\Support\Facades\Route;

Route::group(["prefix"=>"admin"], function() {
    Route::group(["prefix"=>"auth"], function() {
        Route::get("login","App\Http\Controllers\Backend\AuthController@getLogin");
        Route::post("login","App\Http\Controllers\Backend\AuthController@postLogin");
    });

    Route::group(["middleware"=>[\App\Http\Middleware\AdminMiddleware::class]], function() {
        Route::get("/dashboard", "App\Http\Controllers\Backend\DashboardController@getIndex")->name('dashboard');
        Route::get("/logout", "App\Http\Controllers\Backend\AuthController@getLogout")->name('logout');
        
        Route::get("/useradmin/index","App\Http\Controllers\Backend\User\UserController@getIndex");
        Route::get("/useradmin/edit/{id}","App\Http\Controllers\Backend\User\UserController@getEdit");
        Route::get("/useradmin/add","App\Http\Controllers\Backend\User\UserController@getAdd");
        Route::get("/useradmin/detail/{id}","App\Http\Controllers\Backend\User\UserController@getDetail");
        Route::get("/useradmin/delete/{id}","App\Http\Controllers\Backend\User\UserController@getDelete");
        Route::post("/useradmin/save","App\Http\Controllers\Backend\User\UserController@postSave");

        Route::get("/customer/index","App\Http\Controllers\Backend\Customer\CustomerController@getIndex")->name('customerIndex');
        Route::get("/customer/edit/{id}","App\Http\Controllers\Backend\Customer\CustomerController@getEdit")->name('customerForm');
        Route::get("/customer/add","App\Http\Controllers\Backend\Customer\CustomerController@getAdd");
        Route::get("/customer/detail/{id}","App\Http\Controllers\Backend\Customer\CustomerController@getDetail");
        Route::get("/customer/delete/{id}","App\Http\Controllers\Backend\Customer\CustomerController@getDelete")->name('customerDelete');
        Route::post("/customer/save","App\Http\Controllers\Backend\Customer\CustomerController@postSave")->name('customerSave');
        
        Route::get("/transaksi/index","App\Http\Controllers\Backend\Transaction\TransactionController@getIndex")->name('transactionIndex');
        Route::get("/transaksi/edit/{id}","App\Http\Controllers\Backend\Transaction\TransactionController@getEdit");
        Route::get("/transaksi/add","App\Http\Controllers\Backend\Transaction\TransactionController@getAdd");
        Route::get("/transaksi/detail/{id}","App\Http\Controllers\Backend\Transaction\TransactionController@getDetail");
        Route::get("/transaksi/delete/{id}","App\Http\Controllers\Backend\Transaction\TransactionController@getDelete");
        Route::post("/transaksi/save","App\Http\Controllers\Backend\Transaction\TransactionController@postSave");
        
        Route::get("/sparepart/index","App\Http\Controllers\Backend\Sparepart\SparepartController@getIndex");
        Route::get("/sparepart/edit/{id}","App\Http\Controllers\Backend\Sparepart\SparepartController@getEdit");
        Route::get("/sparepart/add","App\Http\Controllers\Backend\Sparepart\SparepartController@getAdd");
        Route::get("/sparepart/detail/{id}","App\Http\Controllers\Backend\Sparepart\SparepartController@getDetail");
        Route::post("/sparepart/save","App\Http\Controllers\Backend\Sparepart\SparepartController@postSave");
        Route::get("/sparepart/delete/{id}","App\Http\Controllers\Backend\Sparepart\SparepartController@getDelete");
        
        Route::get("/kategori/index","App\Http\Controllers\Backend\Categories\CategoriesController@getIndex");
        Route::get("/kategori/edit/{id}","App\Http\Controllers\Backend\Categories\CategoriesController@getEdit");
        Route::get("/kategori/add","App\Http\Controllers\Backend\Categories\CategoriesController@getAdd");
        Route::get("/kategori/detail/{id}","App\Http\Controllers\Backend\Categories\CategoriesController@getDetail");
        Route::post("/kategori/save","App\Http\Controllers\Backend\Categories\CategoriesController@postSave");
        Route::get("/kategori/delete/{id}","App\Http\Controllers\Backend\Categories\CategoriesController@getDelete");
        
        Route::get("/transdetail/index","App\Http\Controllers\Backend\TransactionDetail\TransactionDetailController@getIndex");
        Route::get("/transdetail/edit/{id}","App\Http\Controllers\Backend\TransactionDetail\TransactionDetailController@getEdit");
        Route::get("/transdetail/add","App\Http\Controllers\Backend\TransactionDetail\TransactionDetailController@getAdd");
        Route::get("/transdetail/detail/{id}","App\Http\Controllers\Backend\TransactionDetail\TransactionDetailController@getDetail");
        Route::get("/transdetail/delete/{id}","App\Http\Controllers\Backend\TransactionDetail\TransactionDetailController@getDelete");
        Route::post("/transdetail/save","App\Http\Controllers\Backend\TransactionDetail\TransactionDetailController@postSave");
    
    });
});


Route::get('/register','App\Http\Controllers\Backend\DashboardController@getRegister');



