<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>'auth'],function () {

    Route::view('/admin','admin.index')->name('admin');

    // service
    Route::resource('service',ServiceController::class);
    Route::post('service/update/{id}',[ServiceController::class,'update']);
    Route::delete('service/delete/{id}',[ServiceController::class,'destroy']);

    //category
    Route::resource('category',CategoryController::class);
});
